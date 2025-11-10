<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * CSS2 Reference: "speak-numeral" property
 *
 * This property controls how numerals are spoken.
 *
 * @see https://www.w3.org/TR/xsl11/#speak-numeral
 */
class SpeakNumeralType extends Type implements Validator
{
    /**
     * Speak the numeral as individual digits. Thus, "237" is spoken "Two Three Seven".
     */
    public const DIGITS = 'digits';

    /**
     * Speak the numeral as a full number. Thus, "237" is spoken "Two hundred thirty seven".
     * Word representations are language-dependent.
     */
    public const CONTINUOUS = 'continuous';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::DIGITS,
            self::CONTINUOUS,
            self::INHERIT,
        ]));
    }
}
