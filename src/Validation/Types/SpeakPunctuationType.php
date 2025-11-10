<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates SpeakPunctuation property.
 *
 * @see https://www.w3.org/TR/xsl11/#speak-punctuation
 */
class SpeakPunctuationType extends Type implements Validator
{
    /**
     * Punctuation such as semicolons, braces, and so on are to be spoken literally.
     */
    public const CODE = 'code';

    /**
     * Punctuation is not to be spoken, but instead rendered naturally as various pauses.
     */
    public const NONE = 'none';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::CODE,
            self::NONE,
            self::INHERIT,
        ]));
    }
}
