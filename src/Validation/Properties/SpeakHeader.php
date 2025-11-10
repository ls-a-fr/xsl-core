<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\SpeakHeaderType;

/**
 * CSS2 Definition:
 * - Value:  once | always | inherit
 * - Initial:  once
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  aural
 *
 * This property specifies whether table headers are spoken before every cell, or only before a cell
 * when that cell is associated with a different header than the previous cell.
 *
 * Each document language may have different mechanisms that allow authors to specify headers. For
 * example, in HTML 4 ([HTML4]), it is possible to specify header information with three different
 * attributes ("headers", "scope", and "axis"), and the specification gives an algorithm for
 * determining header information when these attributes have not been specified.
 *
 * @link https://www.w3.org/TR/xsl11/#speak-header
 * @link http://www.w3.org/TR/REC-CSS2/tables.html#propdef-speak-header
 */
class SpeakHeader extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('speak-header', SpeakHeaderType::class);
    }

    public function getDefaultValue(): string
    {
        return SpeakHeaderType::ONCE;
    }
}
