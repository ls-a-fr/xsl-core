<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates LinefeedTreatment property.
 *
 * @link https://www.w3.org/TR/xsl11/#linefeed-treatment
 */
class LinefeedTreatmentType extends Type implements Validator
{
    /**
     * Specifies that any character flow object whose Unicode code point is U+000A shall be
     * discarded during the refinement process.
     */
    public const IGNORE = 'ignore';

    /**
     * Specifies no special action.
     */
    public const PRESERVE = 'preserve';

    /**
     * Specifies that any character flow object whose Unicode code point is U+000A (linefeed) shall
     * be converted during the refinement process into a character flow object whose Unicode code
     * point is U+0020 (space).
     */
    public const TREAT_AS_SPACE = 'treat-as-space';

    /**
     * Specifies that any character flow object whose Unicode code point is U+000A shall be converted
     * during the refinement process into a character flow object whose Unicode code point is U+200B
     * (zero width space).
     *
     * Note: The Unicode Standard recommends that the zero width space is considered a valid line-break
     * point and that if two characters with a zero width space in between are placed on the same line
     * they are placed with no space between them and that if they are placed on two lines no additional
     * glyph area, such as for a hyphen, is created at the line-break.
     */
    public const TREAT_AS_ZERO_WIDTH_SPACE = 'treat-as-zero-width-space';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::IGNORE,
            self::PRESERVE,
            self::TREAT_AS_SPACE,
            self::TREAT_AS_ZERO_WIDTH_SPACE,
            self::INHERIT,
        ]));
    }
}
