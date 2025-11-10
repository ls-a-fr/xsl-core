<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\ClipType;

/**
 * CSS2 Definition: as amended by http://www.w3.org/Style/css2-updates/REC-CSS2-19980512-errata.html#x68
 * - Value:  `<shape>` | auto | inherit
 * - Initial:  auto
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * The 'clip' property applies to elements that have a 'overflow' property with a value other than 'visible'.
 * The element's ancestors may also have clipping regions (in case their "overflow" property is not "visible");
 * what is rendered is the intersection of the various clipping regions.
 *
 * If the clipping region exceeds the bounds of the UA's document window, content may be clipped to that
 * window by the native operating environment
 *
 * @link https://www.w3.org/TR/xsl11/#clip
 * @link http://www.w3.org/TR/REC-CSS2/visufx.html#propdef-clip
 */
class Clip extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('clip', ClipType::class);
    }

    public function getDefaultValue(): string
    {
        return ClipType::AUTO;
    }
}
