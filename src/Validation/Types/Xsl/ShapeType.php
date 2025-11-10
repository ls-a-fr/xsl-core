<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Traits\ProvidesSelfValidation;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;

/**
 * "rect (" <top> <right> <bottom> <left> ")" where <top>, <bottom>
 * <right>, and <left> specify offsets from the respective sides of
 * the content rectangle of the area.
 *
 * <top>, <right>, <bottom>, and <left> may either have a <length>
 * value or 'auto'. Negative lengths are
 * permitted. The value 'auto' means that a given edge of the
 * clipping region will be the same as the edge
 * of the content rectangle of the area (i.e., 'auto' means the
 * same as '0pt'.)
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class ShapeType extends RegexValidator implements Validator
{
    use ProvidesSelfValidation;

    public const AUTO = 'auto';

    // phpcs:disable Generic.Files.LineLength.TooLong,Generic.Files.LineLength.MaxExceeded
    public const REGULAR_EXPRESSION = 'rect\( *('.LengthType::REGULAR_EXPRESSION.'|auto) *, *('.LengthType::REGULAR_EXPRESSION.'|auto) *, *('.LengthType::REGULAR_EXPRESSION.'|auto) *, *('.LengthType::REGULAR_EXPRESSION.'|auto) *\)';

    public function __construct()
    {
        parent::__construct(self::REGULAR_EXPRESSION);
    }

    public function validate(string $value): bool
    {
        $matches = [];
        // phpcs:disable Squiz.Operators.ComparisonOperatorUsage.NotAllowed
        if (! preg_match('/^'.self::REGULAR_EXPRESSION.'$/', $value, $matches)) {
            return false;
        }

        $lengths = [$matches[1], $matches[3], $matches[5], $matches[7]];
        $validator = new UnionValidator(new LengthType(), new EnumValidator([self::AUTO]));
        foreach ($lengths as $length) {
            if ($validator->validate($length) === false) {
                return false;
            }
        }

        return true;
    }
}
