<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\FontSelectionStrategyType;

/**
 * XSL Definition:
 * Value:  auto | character-by-character | inherit
 * Initial:  auto
 * Inherited:  yes
 * Percentages:  N/A
 * Media:  visual
 *
 * There is no XSL mechanism to specify a particular font; instead, a selected font is chosen from the
 * fonts available to the User Agent based on a set of selection criteria. The selection criteria are
 * the following font properties: "font-family", "font-style", "font-variant", "font-weight",
 * "font-stretch", and "font-size", plus, for some formatting objects, one or more characters. These
 * characters are called the contextual characters. The contextual characters can be as few as a single
 * character and as many as the entire character complement of the result tree being processed.
 *
 * Except for the fo:character formatting object, for all other formatting objects where "font-family"
 * applies, the selection criteria consist of the above font properties only. For the fo:character
 * formatting object, the selection criteria are these properties plus either the value of the
 * "character" property of the fo:character alone or that character together with other contextual
 * characters.
 *
 * The strategy to be followed for selecting a font based on these criteria is specified by the
 * "font-selection-strategy" property.
 *
 * The "font-family" property is a prioritized list of font family names, which are tried in sequence to
 * find an available font that matches the selection criteria. The font property selection criteria are
 * matched if the corresponding font characteristics match the properties as specified in the property
 * descriptions.
 *
 * If no matching font is found, a fallback selection is determined in a system-dependent manner.
 *
 * Note: This fallback may be to seek a match using a User Agent default "font-family", or it may be a
 * more elaborate fallback strategy where, for example, "Helvetica" would be used as a fallback for
 * "Univers".
 *
 * If no match has been found for a particular character, there is no selected font and the User Agent
 * should provide a visual indication that a character is not being displayed (for example, using the
 * 'missing character' glyph).
 *
 * Values of the "font-selection-strategy" property have the following meanings.
 *
 * Describes the criteria for selecting fonts and the different strategies for using these criteria to
 * determine a selected font.
 *
 * @link https://www.w3.org/TR/xsl11/#font-selection-strategy
 */
class FontSelectionStrategy extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('font-selection-strategy', FontSelectionStrategyType::class);
    }

    public function getDefaultValue(): string
    {
        return FontSelectionStrategyType::AUTO;
    }
}
