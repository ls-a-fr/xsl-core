<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;

/**
 * XSL Definition:
 * - Value:  `<length>`
 * - Initial:  6pt
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * A positive distance is directed away from the column region and into the margin regardless of the
 * change-bar-placement.
 *
 * Values have the following meanings:
 * `<length>`
 *     Gives the distance from the edge of the column area containing the text that is marked as changed to
 *     the center of the generated change bar.
 *
 * Note:
 * The offset of any change bar is determined by the value of this property at the fo:change-bar-begin that
 * starts the change bar; changes to this property after that do not affect the offset of the change bar
 * begin generated.
 *
 * Note:
 * Relative lengths (i.e., percentage values and lengths with units of "em") are not permitted for the value
 * of this property.
 *
 * @see https://www.w3.org/TR/xsl11/#change-bar-offset
 */
class ChangeBarOffset extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('change-bar-offset', LengthType::class);
    }

    public function getDefaultValue(): string
    {
        return '6pt';
    }
}
