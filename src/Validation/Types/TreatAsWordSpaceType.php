<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates TreatAsWordSpace property.
 *
 * @link https://www.w3.org/TR/xsl11/#treat-as-word-space
 */
class TreatAsWordSpaceType extends Type implements Validator
{
    /**
     * This inline-progression-dimension of the character shall be adjusted as described in the
     * "word-spacing" property.
     */
    public const TRUE = 'true';

    /**
     * This character shall not have a word spacing adjustment applied.
     */
    public const FALSE = 'false';

    /**
     * The value of this property is determined by the Unicode code point for the character.
     * As the default behavior:
     * - The characters at code points U+0020 and U+00A0 are treated as if 'true' had been specified.
     * All other characters are treated as if 'false' had been specified.
     * - This property does not automatically apply word spacing to the fixed spaces (U+2000 through
     * U+200A) or the ideographic-space (U+3000).
     * - This default behavior can be overridden by information in the font used for formatting the
     * character, which can specify additional characters that may be treated as "word spaces".
     */
    public const AUTO = 'auto';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::TRUE,
            self::FALSE,
            self::AUTO,
            self::INHERIT,
        ]));
    }
}
