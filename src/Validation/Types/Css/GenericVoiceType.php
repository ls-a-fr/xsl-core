<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Css;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * The following "datatypes" are used in the definitions of some CSS2 properties. These are not
 * considered datatypes in XSL, as they are merely notational shorthand.
 *
 * A comma-separated, prioritized list of voice family names. CSS2 Reference: "voice-family" property
 *
 * @see https://www.w3.org/TR/xsl11/#cssdatat
 */
class GenericVoiceType extends Type implements Validator
{
    public const MALE = 'male';

    public const FEMALE = 'female';

    public const CHILD = 'child';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::MALE,
            self::FEMALE,
            self::CHILD,
        ]));
    }
}
