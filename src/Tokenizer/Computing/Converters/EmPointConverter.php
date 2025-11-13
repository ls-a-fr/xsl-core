<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Computing\Converters;

use Lsa\Arithmetic\Ast\Converters\Converter;
use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;
use Lsa\Arithmetic\Ast\Tokens\Token;
use Lsa\Arithmetic\Ast\UnitConverter;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xsl\Core\Tokenizer\Tokens\XslRootToken;
use Lsa\Xsl\Core\Validation\Types\FontSizeType;

/**
 * A converter between EM values and Point values.
 */
class EmPointConverter extends Converter
{
    /**
     * Root token
     */
    public readonly ?XslRootToken $root;

    /**
     * Default medium size, settable with `setMediumSize`
     */
    private static string $mediumSize;

    /**
     * Allowed relative font-sizes
     *
     * @return list<string>
     */
    public function getRelativeFontSizes(): array
    {
        return [
            FontSizeType::XX_SMALL,
            FontSizeType::X_SMALL,
            FontSizeType::SMALL,
            FontSizeType::MEDIUM,
            FontSizeType::LARGE,
            FontSizeType::X_LARGE,
            FontSizeType::XX_LARGE,
        ];
    }

    /**
     * Sets the medium size.
     *
     * @param  string  $mediumSize  Size for medium, in pt.
     */
    public static function setMediumSize(string $mediumSize): void
    {
        self::$mediumSize = $mediumSize;
    }

    /**
     * Gets the medium size.
     *
     * @return string A font-size, in pt.
     */
    public static function getMediumSize(): string
    {
        // This should be set by the user-agent, but return a default value if necessary
        if (isset(self::$mediumSize) === false) {
            return '12pt';
        }

        return self::$mediumSize;
    }

    /**
     * Creates a new EmPointConverter
     *
     * @param  ?Token  $token  Token linked to this EmPointConverter. Needs to be linked to an XslRootToken.
     *
     * @throws InvalidFunctionTokenException
     */
    public function __construct(?Token $token)
    {
        $root = $token?->root();
        if ($root !== null && $root instanceof XslRootToken === false) {
            throw new InvalidFunctionTokenException('Root token must be an instance of XslRootToken');
        }
        $this->root = $root;
    }

    public static function getUnitFrom(): string
    {
        return 'pt';
    }

    public static function getUnitTo(): string
    {
        return 'em';
    }

    public function convertTo(float $em): float
    {
        $sizeModifier = 0;
        if ($this->root !== null) {
            [$foundValue, $sizeModifier] = $this->findAncestorFontSize($this->root->tag, $this->root->attribute);
            if ($foundValue === 'medium') {
                $foundValue = self::getMediumSize();
            }
        } else {
            $foundValue = self::getMediumSize();
        }

        if (\in_array($foundValue, self::getRelativeFontSizes()) === true) {
            $this->checkRelativeUnits($foundValue, $sizeModifier);
        }

        $fontValue = $this->applyRelativeModifiers($foundValue, $sizeModifier);

        // The $fontValue variable may not be an EM value. $value still is.
        // Performs the conversion.
        $converter = UnitConverter::make();

        return $converter->normalize($this->applyEm($em, $fontValue), Token::getNormalizedUnit());
    }

    public function convertFrom(float $value): float
    {
        throw new InvalidFunctionTokenException('Cannot convert from '.Token::getNormalizedUnit().' to em');
    }

    /**
     * Applies any em modifier to this font value.
     *
     * @param  float  $emModifier  Em modifier found (ex: 1.4)
     * @param  string  $fontValue  Current font value (ex: 14pt)
     */
    protected function applyEm(float $emModifier, string $fontValue): string
    {
        $converter = UnitConverter::make();
        $fontUnit = $converter->getUnit($fontValue);
        $fontValue = $converter->stripUnit($fontValue);

        return ($fontValue * $emModifier).$fontUnit;
    }

    /**
     * Finds an ancestor font size, if any.
     *
     * @param  EmptyTag  $tag  Current tag
     * @param  TypedAttribute  $attribute  Property to search for
     * @return array{0:string,1:int}
     */
    protected function findAncestorFontSize(EmptyTag $tag, TypedAttribute $attribute): array
    {
        $currentNode = $tag->parent();
        $foundValue = null;
        $sizeModifier = 0;
        /**
         * Yes, it is always true... on the first loop. And only if currentNode is not null.
         *
         * @phpstan-ignore identical.alwaysTrue
         */
        while ($currentNode !== null && $foundValue === null) {
            $foundValue = $currentNode->attributes->get($attribute->name);
            switch ($foundValue) {
                case FontSizeType::LARGER:
                    $sizeModifier++;
                    break;
                case FontSizeType::SMALLER:
                    $sizeModifier--;
                    break;
                case null:
                    break;
                default:
                    // A specific size was found
                    break 2;
            }
            $foundValue = null;
            $currentNode = $currentNode->parent();
        }
        if ($foundValue === null) {
            $foundValue = 'medium';
        }

        return [$foundValue, $sizeModifier];
    }

    /**
     * Apply relative modifiers, eg. smaller or larger on fonts.
     *
     * @param  string  $foundValue  Font size found
     * @param  int  $sizeModifier  Modifier found, eg. -2 or +2.
     */
    protected function applyRelativeModifiers(string $foundValue, int $sizeModifier): string
    {
        $converter = UnitConverter::make();
        $unitlessValue = $converter->stripUnit($foundValue);
        $unit = $converter->getUnit($foundValue);
        $max = abs($sizeModifier);
        for ($i = 0; $i < $max; $i++) {
            if ($sizeModifier < 0) {
                $unitlessValue *= -1.2;
            } else {
                $unitlessValue *= 1.2;
            }
        }

        return $unitlessValue.$unit;
    }

    /**
     * Checks relative units, to prevent index out of bounds.
     *
     * @param  string  $foundValue  Font size found
     * @param  int  $sizeModifier  Modifier found
     */
    protected function checkRelativeUnits(string $foundValue, int $sizeModifier): void
    {
        // Check relative units
        $currentKey = \array_search($foundValue, self::getRelativeFontSizes());
        $specifiedKey = ($currentKey + $sizeModifier);
        if (isset(self::getRelativeFontSizes()[$specifiedKey]) === false) {
            if ($specifiedKey < 0) {
                $specifiedKey = 0;
                \trigger_error('Relative units end up lower than xx-small, fallback to xx-small');
            } else {
                $specifiedKey = (count(self::getRelativeFontSizes()) - 1);
                \trigger_error('Relative units end up higher than xx-large, fallback to xx-large');
            }
        }
    }
}
