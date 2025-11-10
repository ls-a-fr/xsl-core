<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Iso639\LanguageType as Iso639LanguageType;

/**
 * Validates Language property.
 *
 * `<language>`
 *     A 3-letter code conforming to a [ISO639-2] terminology or bibliographic code or a 2-letter code
 *     conforming to a [ISO639] 2-letter code.
 *
 * @link https://www.w3.org/TR/xsl11/#language
 * @link https://www.w3.org/TR/xsl11/#ISO639-2
 */
class LanguageType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    /**
     * Indicates the language is unknown or is not significant to the proper formatting of this object.
     */
    public const NONE = 'none';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new Iso639LanguageType(),
            new EnumValidator([
                self::INHERIT,
                self::NONE,
            ])
        ));
    }
}
