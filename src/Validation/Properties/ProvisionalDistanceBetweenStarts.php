<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\ProvisionalDistanceBetweenStartsType;

/**
 * XSL Definition:
 * - Value: `<length>` | `<percentage>` | inherit
 * - Initial: 24.0pt
 * - Inherited: yes
 * - Percentages: refer to inline-progression-dimension of closest ancestor block-area that is not a line-area
 * - Media: visual
 *
 * Specifies the provisional distance between the start-indent of the list-item-label and the start-indent of
 * the list-item-body. The value is not directly used during formatting, but is used in the computation of the
 * value of the body-start function.
 *
 * body-start() = the value of the start-indent + start-intrusion-adjustment + the value of the
 * provisional-distance-between-starts of the closest ancestor fo:list-block.
 *
 * If there is no ancestral fo:list-block, the value used for the provisional-distance-between-starts in the
 * above formula shall be equal to inherited-property-value(provisional-distance-between-starts) of the FO in
 * which the body-start() function is evaluated.
 *
 * @link https://www.w3.org/TR/xsl/#provisional-distance-between-starts
 */
class ProvisionalDistanceBetweenStarts extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('provisional-distance-between-starts', ProvisionalDistanceBetweenStartsType::class);
    }

    public function getDefaultValue(): string
    {
        return '24.0pt';
    }
}
