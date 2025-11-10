<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * CSS2 Reference: "speak" property
 *
 * @link https://www.w3.org/TR/xsl11/#speak
 */
class SpeakType extends Type implements Validator
{
    /**
     * Uses language-dependent pronunciation rules for rendering an element and its children.
     */
    public const NORMAL = 'normal';

    /**
     * Suppresses aural rendering so that the element requires no time to render. Note, however,
     * that descendants may override this value and will be spoken. (To be sure to suppress
     * rendering of an element and its descendants, use the 'display' property).
     */
    public const NONE = 'none';

    /**
     * Spells the text one letter at a time (useful for acronyms and abbreviations).
     */
    public const SPELL_OUT = 'spell-out';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::NORMAL,
            self::NONE,
            self::SPELL_OUT,
            self::INHERIT,
        ]));
    }
}
