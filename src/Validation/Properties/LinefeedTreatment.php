<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\LinefeedTreatmentType;

/**
 * XSL Definition:
 * - Value:  ignore | preserve | treat-as-space | treat-as-zero-width-space | inherit
 * - Initial:  treat-as-space
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * The "linefeed-treatment" property specifies the treatment of linefeeds (character flow objects
 * whose Unicode code point is U+000A) during the refinement process.
 *
 * @link https://www.w3.org/TR/xsl11/#linefeed-treatment
 */
class LinefeedTreatment extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('linefeed-treatment', LinefeedTreatmentType::class);
    }

    public function getDefaultValue(): string
    {
        return LinefeedTreatmentType::TREAT_AS_SPACE;
    }
}
