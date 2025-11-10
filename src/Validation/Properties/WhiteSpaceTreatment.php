<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\WhiteSpaceTreatmentType;

/**
 * XSL Definition:
 * - Value:  ignore | preserve | ignore-if-before-linefeed | ignore-if-after-linefeed |
 *     ignore-if-surrounding-linefeed | inherit
 * - Initial:  ignore-if-surrounding-linefeed
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * The "white-space-treatment" property specifies the treatment during line-building and
 * inline-building of glyph areas, except for linefeeds, that are classified as white space in
 * XML. This includes U+0020 (space) and other white space characters but excludes U+000A
 * (linefeed). Linefeed treatment is determined by the "linefeed-treatment" property.
 *
 * An implementation is free to use any algorithm to achieve an equivalent effect.
 *
 * @link https://www.w3.org/TR/xsl11/#white-space-treatment
 */
class WhiteSpaceTreatment extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('white-space-treatment', WhiteSpaceTreatmentType::class);
    }

    public function getDefaultValue(): string
    {
        return WhiteSpaceTreatmentType::IGNORE_IF_SURROUNDING_LINEFEED;
    }
}
