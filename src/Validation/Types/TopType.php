<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * Validates Top property.
 *
 * `<length>`:
 * - The offset is a fixed distance from the reference edge.
 *
 * `<percentage>`:
 * - The offset is a percentage of the containing block's width (for "left" or "right") or "height"
 *   (for "top" and "bottom"). For "top" and "bottom", if the "height" of the containing block is not
 *   specified explicitly (i.e., it depends on content height), the percentage value is interpreted
 *   like "auto".
 *
 * @link https://www.w3.org/TR/xsl11/#top
 */
class TopType extends Type implements Validator
{
    /**
     * The effect of this value depends on which of related properties have the value "auto" as well.
     * See the sections on the width and height of absolutely positioned, non-replaced elements for
     * details.
     */
    public const AUTO = 'auto';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new LengthType(),
            new PercentageType(),
            new EnumValidator([
                self::AUTO,
                self::INHERIT,
            ])
        ));
    }
}
