<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates LetterValue property.
 *
 * @link https://www.w3.org/TR/xsl11/#letter-value
 */
class LetterValueType extends Type implements Validator
{
    /**
     * A value of "auto" corresponds to the XSLT definition for when the attribute is not specified.
     */
    public const AUTO = 'auto';

    /**
     * There are various conventions in use for how alphabetic sequences continue when the alphabet
     * is exhausted, and differing conventions for how roman numerals are written (for example, IV
     * versus IIII as the representation of the number 4). Sometimes alphabetic sequences are used
     * that omit letters such as i and o. This specification does not prescribe the detail of any
     * sequence other than those sequences consisting entirely of decimal digits.
     */
    public const ALPHABETIC = 'alphabetic';

    /**
     * Any other format token indicates a numbering sequence in which that token represents the number
     * 1 (one) (but see the note below). It is implementation-defined which numbering sequences,
     * additional to those listed above, are supported. If an implementation does not support a
     * numbering sequence represented by the given token, it must use a format token of 1.
     *
     * Note: In some traditional numbering sequences additional signs are added to denote that the
     * letters should be interpreted as numbers; these are not included in the format token. An
     * example, see also the example below, is classical Greek where a dexia keraia and sometimes an
     * aristeri keraia is added.
     */
    public const TRADITIONAL = 'traditional';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::ALPHABETIC,
            self::TRADITIONAL,
        ]));
    }
}
