<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\ColorType;

/**
 * CSS2 Definition:
 * Value:  `<color>` | inherit
 * Initial:  depends on user agent
 * Inherited:  yes
 * Percentages:  N/A
 * Media:  visual
 *
 * `<color>`: Any valid color specification.
 *
 * This property describes the foreground color of an element's text content.
 *
 * XSL modifications to the CSS definition:
 * - XSL adds an "rgb-icc" function (see 5.10.2 Color Functions) as a valid value of this property.
 *
 * @link https://www.w3.org/TR/xsl11/#color
 * @link https://www.w3.org/TR/xsl11/#expr-color-functions
 * @link http://www.w3.org/TR/REC-CSS2/colors.html#propdef-color
 */
class Color extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('color', ColorType::class);
    }

    /**
     * Note that this depends on user-agents. A choice was made here, to be compliant.
     * This value can be overriden by Profiles.
     */
    public function getDefaultValue(): string
    {
        return 'black';
    }
}
