<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\IntersectValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xml\Utils\Validation\Xml\CharacterEntityType;
use Lsa\Xml\Utils\Validation\Xml\NotBlankCharacterType;
use Lsa\Xml\Utils\Validation\Xml\UnicodeCharacterType;

/**
 * Validates HyphenationCharacter property.
 *
 * `<character>`:
 *   Specifies the Unicode character to be presented when a hyphenation break occurs. The styling properties
 *   of this character are those inherited from its containing flow object.
 *
 * @see https://www.w3.org/TR/xsl11/#hyphenation-character
 */
class HyphenationCharacterType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new IntersectValidator(
                new UnicodeCharacterType(),
                new NotBlankCharacterType()
            ),
            new CharacterEntityType(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
