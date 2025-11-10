<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Validation\Types\BackgroundType;

/**
 * CSS2 Definition:
 * - Value: [`<background-color>` || `<background-image>` || `<background-repeat>` ||
 * `<background-attachment>` || `<background-position>` ]] | inherit
 * - Initial:   not defined for shorthand properties
 * - Inherited: no
 * - Percentages:   allowed on 'background-position'
 * - Media: visual
 *
 * The "background" property is a shorthand property for setting the individual background properties
 * (i.e., background-color, background-image, background-repeat, background-attachment and background-position)
 * at the same place in the stylesheet.
 * The "background" property first sets all the individual background properties to their initial values, then
 * assigns explicit values given in the declaration.
 *
 * @link https://www.w3.org/TR/xsl11/#background
 * @link http://www.w3.org/TR/REC-CSS2/colors.html#propdef-background
 */
class Background extends ShorthandTypedAttribute
{
    public function __construct()
    {
        parent::__construct(
            'background',
            BackgroundType::class,
            [
                BackgroundColor::class,
                BackgroundImage::class,
                BackgroundRepeat::class,
                BackgroundAttachment::class,
                BackgroundPosition::class,
            ]
        );
    }
}
