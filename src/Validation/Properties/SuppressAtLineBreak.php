<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\SuppressAtLineBreakType;

/**
 * XSL Definition:
 * - Value:  auto | suppress | retain | inherit
 * - Initial:  auto
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property applies only to fo:character and determines whether the character's representation
 * shall be suppressed when it would occur adjacent to a line break. Multiple characters may be so
 * suppressed.
 *
 * @link https://www.w3.org/TR/xsl11/#suppress-at-line-break
 */
class SuppressAtLineBreak extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('suppress-at-line-break', SuppressAtLineBreakType::class);
    }

    public function getDefaultValue(): string
    {
        return SuppressAtLineBreakType::AUTO;
    }
}
