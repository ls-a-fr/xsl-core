<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;

/**
 * Validates WidthType property.
 *
 * `<length>`:
 * - Specifies a fixed width.
 *
 * `<percentage>`:
 * - Specifies a percentage width. The percentage is calculated with respect to the width of the generated
 *   box's containing block.
 *
 * Negative values for "width" are illegal.
 *
 * @link https://www.w3.org/TR/xsl11/#width
 */
class WidthType extends Type implements Validator
{
    /**
     * The width depends on the values of other properties.
     */
    public const AUTO = 'auto';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new PositiveLengthType(),
            new EnumValidator([
                self::AUTO,
                self::INHERIT,
            ])
        ));
    }
}
