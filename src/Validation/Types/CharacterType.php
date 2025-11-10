<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\IntersectValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xml\Utils\Validation\Xml\CharacterEntityType;
use Lsa\Xml\Utils\Validation\Xml\NotBlankCharacterType;
use Lsa\Xml\Utils\Validation\Xml\UnicodeCharacterType;

/**
 * Specifies the Unicode character to be presented. Value is required.
 *
 * <enumeration value = "-"/>
 * <enumeration value = "h"/>
 * <enumeration value = "e"/>
 * <enumeration value = "l"/>
 * <enumeration value = "p"/>
 * <enumeration value = "o"/>
 *
 * <character>
 * A single Unicode character valid in accordance with production [2] of [XML] or [XML 1.1]. For example,
 * "c" or "&#x2202;".
 *
 * @see https://www.w3.org/TR/xml/#NT-Char
 * @see https://www.w3.org/TR/xsl11/#character
 */
class CharacterType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new CharacterEntityType(),
            new IntersectValidator(
                new UnicodeCharacterType(),
                new NotBlankCharacterType()
            )
        ));
    }
}
