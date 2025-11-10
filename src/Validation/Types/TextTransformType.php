<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * CSS2 Reference: "text-transform" property
 *
 * @see https://www.w3.org/TR/xsl11/#text-transform
 */
class TextTransformType extends Type implements Validator
{
    /**
     * Puts the first character of each word in uppercase.
     */
    public const CAPITALIZE = 'capitalize';

    /**
     * Puts all characters of each word in uppercase.
     */
    public const UPPERCASE = 'uppercase';

    /**
     * Puts all characters of each word in lowercase.
     */
    public const LOWERCASE = 'lowercase';

    /**
     * No capitalization effects.
     */
    public const NONE = 'none';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::CAPITALIZE,
            self::UPPERCASE,
            self::LOWERCASE,
            self::NONE,
            self::INHERIT,
        ]));
    }
}
