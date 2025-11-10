<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Traits\ProvidesSelfValidation;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Css\BorderWidthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\BaseColorType;
use RuntimeException;

/**
 * Validates Border property.
 *
 * @see https://www.w3.org/TR/xsl11/#border
 */
class BorderType extends Type implements Validator
{
    use ProvidesSelfValidation;

    public const TRANSPARENT = 'transparent';

    public const INHERIT = 'inherit';

    public function validate(string $value): bool
    {
        try {
            $chunks = $this->parseValue($value);
            if (empty($chunks) === true) {
                return false;
            }
            if (count($chunks) === 1 && $chunks[0] === self::INHERIT) {
                return true;
            }

            $validators = [
                new BorderStyleType(),
                new BorderWidthType(),
                // Not quite a ColorType as inherit is unavailable here
                new UnionValidator(
                    new BaseColorType(),
                    new EnumValidator([
                        self::TRANSPARENT,
                    ])
                ),
            ];
            foreach ($chunks as $chunk) {
                foreach ($validators as $className => $validator) {
                    if ($validator->validate($chunk) === true) {
                        unset($validators[$className]);

                        continue 2;
                    }
                }

                return false;
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
     * @return string[] Border types found in this value
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
            if ($char === ' ' && $inParenthesis === false) {
                if ($chunks[$chunkIndex] !== '') {
                    $chunkIndex++;
                }

                continue;
            }
            if ($char === '(' && $inParenthesis === true) {
                throw new RuntimeException('Cannot have depth 2');
            }
            if ($char === ')' && $inParenthesis === false) {
                throw new RuntimeException('Syntax error');
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
