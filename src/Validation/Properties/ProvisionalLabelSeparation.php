<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\ProvisionalLabelSeparationType;

/**
 * XSL Definition:
 * - Value: `<length>` | `<percentage>` | inherit
 * - Initial: 6.0pt
 * - Inherited: yes
 * - Percentages: refer to inline-progression-dimension of closest ancestor block-area that is not a line-area
 * - Media: visual
 *
 * Specifies the provisional distance between the end of the list-item-label and the start of the
 * list-item-body. The value is not directly used during formatting, but is used in the computation of the
 * value of the label-end function.
 *
 * label-end() = width of the content-rectangle of the reference-area into which the list-block is placed -
 * (the value of the provisional-distance-between-starts + the value of the start-indent +
 * start-intrusion-adjustment - the value of the provisional-label-separation) of the closest ancestor
 * fo:list-block.
 *
 * If there is no ancestral fo:list-block, the value used for the provisional-label-separation and
 * provisional-distance-between-starts in the above formula shall be equal to
 * inherited-property-value(provisional-label-separation) and
 * inherited-property-value(provisional-distance-between-starts) respectively of the FO in which the
 * body-start() function is evaluated.
 *
 * @link https://www.w3.org/TR/xsl/#provisional-label-separation
 */
class ProvisionalLabelSeparation extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('provisional-label-separation', ProvisionalLabelSeparationType::class);
    }

    public function getDefaultValue(): string
    {
        return '6.0pt';
    }
}
