<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Css\GenericVoiceType;
use Lsa\Xsl\Core\Validation\Types\Css\SpecificVoiceType;

/**
 * Validates VoiceFamily property.
 *
 * @see https://www.w3.org/TR/CSS2/aural.html#propdef-voice-family
 */
class VoiceFamilyType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            (new CompoundValidator(
                min: 1,
                validator: new UnionValidator(
                    new GenericVoiceType(),
                    new SpecificVoiceType()
                )
            ))->separator(',')->shouldTrim(),
            new EnumValidator([
                self::INHERIT,
            ]),
        ));
    }
}
