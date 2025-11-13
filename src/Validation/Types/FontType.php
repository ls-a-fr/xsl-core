<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Traits\ProvidesSelfValidation;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Exceptions\ValidationException;
use Lsa\Xsl\Core\Validation\Types\Xsl\FamilyNameType;
use Lsa\Xsl\Core\Validation\Types\Xsl\GenericFamilyType;

/**
 * Validates Font property.
 *
 * @link https://www.w3.org/TR/xsl11/#font
 */
class FontType extends Type implements Validator
{
    use ProvidesSelfValidation;

    /**
     * The font used for captioned controls (e.g., buttons, drop-downs, etc.).
     */
    public const CAPTION = 'caption';

    /**
     * The font used to label icons.
     */
    public const ICON = 'icon';

    /**
     * The font used in menus (e.g., dropdown menus and menu lists).
     */
    public const MENU = 'menu';

    /**
     * The font used in dialog boxes.
     */
    public const MESSAGE_BOX = 'message-box';

    /**
     * The font used for labeling small controls.
     */
    public const SMALL_CAPTION = 'small-caption';

    /**
     * The font used in window status bars.
     */
    public const STATUS_BAR = 'status-bar';

    public const INHERIT = 'inherit';

    /**
     * Line height separator
     *
     * @var non-empty-string
     */
    protected string $lineHeightSeparator = '/';

    /**
     * Checks whether the supplied value is a special font keyword
     *
     * @param  string  $value  Chunk of value passed to font attribute
     * @return bool True is the supplied value is a special font keyword, false otherwise
     */
    protected function isFontKeyword(string $value): bool
    {
        return (new EnumValidator([
            self::CAPTION,
            self::ICON,
            self::MENU,
            self::MESSAGE_BOX,
            self::SMALL_CAPTION,
            self::STATUS_BAR,
            self::INHERIT,
        ]))->validate($value);
    }

    public function validate(string $value): bool
    {
        try {
            $chunks = $this->parseValue($value);
            if (empty($chunks) === true) {
                return false;
            }
            if (count($chunks) === 1 && $this->isFontKeyword($chunks[0]) === true) {
                return true;
            }

            $validators = [
                FontStyleType::class => new FontStyleType(),
                FontVariantType::class => new FontVariantType(),
                FontWeightType::class => new FontWeightType(),
                FontSizeType::class => new FontSizeType(),
                LineHeightType::class => new LineHeightType(),
                // This value is more precise than font-family, you
                // must have a single value
                FontFamilyType::class => new UnionValidator(
                    new GenericFamilyType(),
                    new FamilyNameType()
                ),
            ];

            foreach ($chunks as $chunk) {
                // Line height specific treatment
                if (str_contains($chunk, $this->lineHeightSeparator) === true) {
                    if ($this->handleLineHeight($chunk, $validators) === false) {
                        return false;
                    }

                    continue;
                }

                // Classic behavior
                if ($this->handleFontChunk($chunk, $validators) === false) {
                    return false;
                }

                continue;
            }

            // Mandatory values to find:
            if ($this->validateMandatoryValues($validators) === false) {
                return false;
            }

            return true;
        } catch (ValidationException) {
            return false;
        }
    }

    /**
     * Handle every other property besides of line-height.
     *
     * @param  string  $chunk  A part of the font attribute value
     * @param  array<class-string, \Lsa\Xml\Utils\Contracts\Validator>  $validators  Remaining validators
     * @return bool True if chunk is valid, false otherwise.
     */
    protected function handleFontChunk(string $chunk, array &$validators): bool
    {
        foreach ($validators as $className => $validator) {
            // Line height can only be specified with a forward /, and
            // is already handled
            if ($className === LineHeightType::class) {
                continue;
            }
            if ($validator->validate($chunk) === true) {
                unset($validators[$className]);

                return true;
            }
        }

        return false;
    }

    /**
     * Checks for mandatory values to have been consumed by this validator.
     * If any of them still has their validator, the test fails.
     *
     * @param  array<class-string, \Lsa\Xml\Utils\Contracts\Validator>  $validators  Remaining validators
     * @return bool True if values have been consumed, false otherwise.
     */
    protected function validateMandatoryValues(array $validators): bool
    {
        foreach ([FontSizeType::class, FontFamilyType::class] as $mandatoryClassName) {
            if (isset($validators[$mandatoryClassName]) === true) {
                // Validator still exists, so this mandatory value was not supplied
                return false;
            }
        }

        return true;
    }

    /**
     * Handle line height treatment.
     * FontSizeType and LineHeightType need to be adjacent.
     *
     * @param  string  $chunk  A part of the font attribute value
     * @param  array<class-string, \Lsa\Xml\Utils\Contracts\Validator>  $validators  Remaining validators
     * @return bool True if line height is valid, false otherwise.
     */
    protected function handleLineHeight(string $chunk, array &$validators): bool
    {
        $parts = explode($this->lineHeightSeparator, $chunk);
        // First must be FontSize, second must be LineHeight
        foreach ([FontSizeType::class, LineHeightType::class] as $i => $className) {
            if (isset($validators[$className]) === false) {
                return false;
            }
            if ($validators[$className]->validate($parts[$i]) === false) {
                return false;
            }
            unset($validators[$className]);
        }

        return true;
    }

    /**
     * Parses the tag attribute value
     *
     * @param  string  $value  The value to parse
     * @return string[] Font chunks found in this value
     *
     * @throws ValidationException Will raise in case of an invalid value
     */
    protected function parseValue(string $value): array
    {
        $chunks = $this->gatherChunks($value);

        // Line-height syntax management
        $updatedChunks = [];
        $skipNext = 0;
        foreach ($chunks as $i => $chunk) {
            if ($skipNext > 0) {
                $skipNext--;

                continue;
            }
            if ($chunk === $this->lineHeightSeparator) {
                // Set next with previous
                if (isset($chunk[($i + 1)]) === false) {
                    throw new ValidationException('Cannot end with a '.$this->lineHeightSeparator);
                }
                $updatedChunks[($i - 1)] .= $this->lineHeightSeparator.$chunk[($i + 1)];
                $skipNext = 2;

                continue;
            }
            if (str_starts_with($chunk, $this->lineHeightSeparator) === true) {
                // Set it with previous
                $updatedChunks[($i - 1)] .= $chunk;

                continue;
            }
            if (str_ends_with($chunk, $this->lineHeightSeparator) === true) {
                // Set next with this one
                if (isset($chunks[($i + 1)]) === false) {
                    throw new ValidationException('Cannot end with a '.$this->lineHeightSeparator);
                }
                $updatedChunks[] = $chunk.$chunks[($i + 1)];
                $skipNext = true;

                continue;
            }
            // Let's trim a little
            if (str_contains($chunk, $this->lineHeightSeparator) === true) {
                $parts = explode($this->lineHeightSeparator, $chunk);
                $trimmedParts = array_map(fn ($p) => trim($p), $parts);
                $updatedChunks[] = implode($this->lineHeightSeparator, $trimmedParts);

                continue;
            }
            // No slash found
            $updatedChunks[] = $chunk;
        }

        // Reset keys
        return array_values($updatedChunks);
    }

    /**
     * Gather every chunks from the value
     *
     * @param  string  $value  The value
     * @return array<int, string> The chunks
     */
    protected function gatherChunks(string $value): array
    {
        $chunks = [];
        $chunkIndex = 0;
        $inQuote = false;
        $valueLength = strlen($value);
        for ($i = 0; $i < $valueLength; $i++) {
            $char = $value[$i];
            if ($char === ' ' && $inQuote === false) {
                if ($chunks[$chunkIndex] !== '') {
                    $chunkIndex++;
                }

                continue;
            }
            if ($char === '"' || $char === "'") {
                $inQuote = ! $inQuote;

                continue;
            }
            if (isset($chunks[$chunkIndex]) === false) {
                $chunks[$chunkIndex] = '';
            }
            $chunks[$chunkIndex] .= $char;
        }

        return $chunks;
    }
}
