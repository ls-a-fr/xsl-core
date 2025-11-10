<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates FontSelectionStragy property.
 *
 * @link https://www.w3.org/TR/xsl11/#font-selection-strategy
 */
class FontSelectionStrategyType extends Type implements Validator
{
    /**
     * The selection criterion given by the contextual characters is used in an implementation defined
     * manner.
     * Note: An implementation may, for example, use an algorithm where all characters in the result
     * tree having the same set of font selection property values influence the selection, or it may
     * only use the character property of a single fo:character formatting object for which a font is to
     * be selected. Consider, for example, a case where the available fonts include a font that covers
     * all of Latin, Greek and Cyrillic as well as three better quality fonts that cover those three
     * separately, but match each other badly stylistically. An implementation that takes a larger view
     * for its set of contextual characters may consider the glyph complement to allow the selection of
     * the better font if it covers the glyph complement, but to use the broader font to get a consistent
     * style if the glyph complement is larger than any one of the other fonts can cover.
     */
    public const AUTO = 'auto';

    /**
     * The set of contextual characters consists of the single character that is the value of the
     * "character" property of the fo:character for which a font is to be selected.
     * Note: This selection strategy is the same as the strategy used to select fonts in CSS.
     */
    public const CHARACTER_BY_CHARACTER = 'character-by-character';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::CHARACTER_BY_CHARACTER,
            self::INHERIT,
        ]));
    }
}
