<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates WhiteSpaceTreatment property.
 *
 * @link https://www.w3.org/TR/xsl11/#white-space-treatment
 */
class WhiteSpaceTreatmentType extends Type implements Validator
{
    /**
     * Any glyph-area whose Unicode character is classified as white space in XML, except for
     * U+000A, shall be deleted during line-building and inline-building (see 4.7.2 Line-building
     * and 4.7.3 Inline-building).
     */
    public const IGNORE = 'ignore';

    /**
     * Any glyph-area whose Unicode character is classified as white space in XML shall not be deleted
     * during line-building and inline-building.
     */
    public const PRESERVE = 'preserve';

    /**
     * Any glyph-area with a suppress-at-line-break value of 'suppress' shall be deleted during
     * line-building and inline-building if it would be the last glyph-area descendant of a line-area.
     */
    public const IGNORE_IF_BEFORE_LINEFEED = 'ignore-if-before-linefeed';

    /**
     * Any glyph-area with a suppress-at-line-break value of 'suppress' shall be deleted during
     * line-building and inline-building if it would be the first glyph-area descendant of a line-area.
     */
    public const IGNORE_IF_AFTER_LINEFEED = 'ignore-if-after-linefeed';

    /**
     * Any glyph-area with a suppress-at-line-break value of 'suppress' shall be deleted during
     * line-building and inline-building if it would be the first or last glyph-area descendant of
     * a line-area.
     */
    public const IGNORE_IF_SURROUNDING_LINEFEED = 'ignore-if-surrounding-linefeed';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::IGNORE,
            self::PRESERVE,
            self::IGNORE_IF_BEFORE_LINEFEED,
            self::IGNORE_IF_AFTER_LINEFEED,
            self::IGNORE_IF_SURROUNDING_LINEFEED,
            self::INHERIT,
        ]));
    }
}
