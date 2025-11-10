<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Traits\ProvidesSelfValidation;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Validation\Types\Xsl\BaseColorType;
use RuntimeException;

/**
 * Validates BorderColor property.
 *
 * `<color>`: Any valid color specification.
 *
 * @see https://www.w3.org/TR/xsl11/#border-color
 */
class BorderMultiColorType extends Type implements Validator
{
    use ProvidesSelfValidation;

    public const INHERIT = 'inherit';

    public function validate(string $value): bool
    {
        try {
            $chunks = $this->parseValue($value);
            // Invalid number of chunks
            if (count($chunks) < 1 || count($chunks) > 4) {
                return false;
            }
            // Inherit is allowed only if it is the sole value
            if (count($chunks) === 1 && $chunks[0] === self::INHERIT) {
                return true;
            }

            // Validate every chunk as a color
            $validator = new UnionValidator(
                new BaseColorType(),
                new EnumValidator([
                    BorderColorType::TRANSPARENT,
                ])
            );
            foreach ($chunks as $chunk) {
                if ($validator->validate($chunk) === false) {
                    return false;
                }
            }

            return true;
        } catch (RuntimeException) {
            return false;
        }
    }

    /**
     * Parses the tag attribute value
     *
     * @param  string  $value  The value to parse
     * @return string[] Colors found in this value
     *
     * @throws \RuntimeException
     */
    protected function parseValue(string $value): array
    {
        $chunkIndex = 0;
        $chunks = [];
        $inParenthesis = false;
        $valueLength = strlen($value);
        for ($i = 0; $i < $valueLength; $i++) {
            $char = $value[$i];
            if ($char === '(' && $inParenthesis === true) {
                throw new RuntimeException('Cannot have depth > 1');
            }
            if ($char === ')' && $inParenthesis === false) {
                throw new RuntimeException('Syntax error');
            }
            if ($char === ' ' && $inParenthesis === false) {
                if ($chunks[$chunkIndex] !== '') {
                    $chunkIndex++;
                }

                continue;
            }
            if ($char === '(') {
                $inParenthesis = true;
            }
            if ($char === ')') {
                $inParenthesis = false;
            }
            if (isset($chunks[$chunkIndex]) === false) {
                $chunks[$chunkIndex] = '';
            }
            $chunks[$chunkIndex] .= $char;
        }

        return $chunks;
    }
}
