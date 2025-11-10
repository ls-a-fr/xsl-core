<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\FontType;

/**
 * CSS2 Definition:
 * Value: [ [ `<font-style>` || `<font-variant>` || `<font-weight>` ]? `<font-size>` [ / `<line-height>`]?
 *     `<font-family>` ] | caption | icon | menu | message-box | small-caption | status-bar | inherit
 * Initial: see individual properties
 * Inherited: yes
 * Percentages: N/A
 * Media: visual
 *
 * CSS2 Reference: "font" property
 *
 * The "font" property is, except as described below, a shorthand property for setting "font-style",
 * "font-variant", "font-weight", "font-size", "line-height", and "font-family", at the same place in the
 * stylesheet. The syntax of this property is based on a traditional typographical shorthand notation to set
 * multiple properties related to fonts.
 * All font-related properties are first reset to their initial values, including those listed in the preceding
 * paragraph plus "font-stretch" and "font-size-adjust". Then, those properties that are given explicit values
 * in the "font" shorthand are set to those values. For a definition of allowed and initial values, see the
 * previously defined properties. For reasons of backward compatibility, it is not possible to set
 * "font-stretch" and "font-size-adjust" to other than their initial values using the "font" shorthand
 * property; instead, set the individual properties.
 *
 * The following [first six] values refer to system fonts:
 * caption
 *     The font used for captioned controls (e.g., buttons, drop-downs, etc.).
 * icon
 *     The font used to label icons.
 * menu
 *     The font used in menus (e.g., dropdown menus and menu lists).
 * message-box
 *     The font used in dialog boxes.
 * small-caption
 *     The font used for labeling small controls.
 * status-bar
 *     The font used in window status bars.
 *
 * System fonts may only be set as a whole; that is, the "font-family", "size", "weight", "style", etc. are all
 * set at the same time. These values may then be altered individually if desired. If no font with the indicated
 * characteristics exists on a given platform, the user agent should either intelligently substitute (e.g., a
 * smaller version of the "caption" font might be used for the "small-caption" font), or substitute a user agent
 * default font. As for regular fonts, if, for a system font, any of the individual properties are not part of
 * the operating system's available user preferences, those properties should be set to their initial values.
 * That is why this property is "almost" a shorthand property: system fonts can only be specified with this
 * property, not with "font-family" itself, so "font" allows authors to do more than the sum of its
 * sub-properties. However, the individual properties such as "font-weight" are still given values taken from
 * the system font, which can be independently varied.
 *
 * XSL modifications to the CSS definition:
 * - In XSL the "font" property is a pure shorthand property. System font characteristics, such as font-family,
 *   and font-size, may be obtained by the use of the "system-font" function in the expression language.
 *
 * @link https://www.w3.org/TR/xsl11/#font
 * @link http://www.w3.org/TR/REC-CSS2/fonts.html#propdef-font
 */
class Font extends ShorthandTypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct(
            'font',
            FontType::class,
            [
                FontStyle::class,
                FontVariant::class,
                FontWeight::class,
                FontFamily::class,
                FontSize::class,
                LineHeight::class,
            ]
        );
    }

    public function getDefaultValue(): string
    {
        return implode(' ', [
            (new FontStyle())->getDefaultValue(),
            (new FontVariant())->getDefaultValue(),
            (new FontWeight())->getDefaultValue(),
            (new FontSize())->getDefaultValue(),
            '/',
            (new LineHeight())->getDefaultValue(),
            (new FontFamily())->getDefaultValue(),
        ]);
    }
}
