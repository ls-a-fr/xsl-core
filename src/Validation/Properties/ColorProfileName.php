<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\ColorProfileNameType;

/**
 * XSL Definition:
 * - Value:  `<name>` | inherit
 * - Initial:  none, a value is required
 * - Inherited:  no, a value is required
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies the name of a color-profile for internal references.
 *
 * @link https://www.w3.org/TR/xsl11/#case-name
 */
class ColorProfileName extends TypedAttribute
{
    public function __construct()
    {
        parent::__construct('color-profile-name', ColorProfileNameType::class);
    }
}
