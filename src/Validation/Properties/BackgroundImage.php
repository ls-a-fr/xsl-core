<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\BackgroundImageType;

/**
 * CSS2 Definition:
 * - Value:  `<uri-specification>` | none | inherit
 * - Initial:  none
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property sets the background image of an element. When setting a "background-image",
 * authors should also specify a background-color that will be used when the image is
 * unavailable. When the image is available, it is rendered on top of the background color.
 * (Thus, the color is visible in the transparent parts of the image).
 * Values for this property are either <uri-specification>, to specify the image, or "none",
 * when no image is used.
 *
 * XSL modifications to the CSS definition:
 * - The `<uri>` value has been changed to a `<uri-specification>`.
 *
 * @link https://www.w3.org/TR/xsl11/#background-image
 * @link http://www.w3.org/TR/REC-CSS2/colors.html#propdef-background-image
 */
class BackgroundImage extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('background-image', BackgroundImageType::class);
    }

    public function getDefaultValue(): string
    {
        return BackgroundImageType::NONE;
    }
}
