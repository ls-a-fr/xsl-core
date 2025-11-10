<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Contracts\HasDefaultValueWithContext;
use Lsa\Xsl\Core\Validation\Types\BorderMultiColorType;

/**
 * CSS2 Definition: as amended by http://www.w3.org/Style/css2-updates/REC-CSS2-19980512-errata.html#x35
 * - Value: [ `<color>` | transparent ]{1,4} | inherit
 * - Initial: see individual properties
 * - Inherited: no
 * - Percentages: N/A
 * - Media: visual
 *
 * The 'border-color' property sets the color of the four borders.
 *
 * The "border-color" property can have from one to four values, and the values are set on the different sides
 * as for "border-width".
 * If an element's border color is not specified with a "border" property, user agents must use the value of the
 * element's "color" property as the computed value for the border color.
 *
 * XSL modifications to the CSS definition:
 * - See the 'border-width' property for a description of how this property is interpreted when one through
 *   four values are provided.
 *
 * @link https://www.w3.org/TR/xsl11/#border-color
 * @link http://www.w3.org/TR/REC-CSS2/box.html#propdef-border-color
 */
class BorderColor extends ShorthandTypedAttribute implements HasDefaultValueWithContext
{
    public function __construct()
    {
        parent::__construct(
            'border-color',
            BorderMultiColorType::class,
            [
                BorderBottomColor::class,
                BorderLeftColor::class,
                BorderRightColor::class,
                BorderTopColor::class,
            ]
        );
    }

    /**
     * Returns this property default value. This value is computed and needs a context.
     *
     * @param  Tag  $root  Root tag
     * @param  EmptyTag  $node  Current node
     * @return string The default value
     *
     * phpcs:disable Generic.CodeAnalysis.UnusedFunctionParameter.FoundInExtendedClassBeforeLastUsed
     */
    public function getDefaultValueWithContext(Tag $root, EmptyTag $node): string
    {
        $color = $node->attributes->get('color');
        if ($color === null) {
            return (new Color())->getDefaultValue();
        }

        return $color;
    }
}
