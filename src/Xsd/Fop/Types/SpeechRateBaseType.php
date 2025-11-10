<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xsl\Core\Validation\Types\SpeechRateType;

/**
 * This class is used to validate against fop.xsd file.
 */
class SpeechRateBaseType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return new EnumValidator([
            SpeechRateType::X_SLOW,
            SpeechRateType::SLOW,
            SpeechRateType::MEDIUM,
            SpeechRateType::FAST,
            SpeechRateType::X_FAST,
            SpeechRateType::FASTER,
            SpeechRateType::SLOWER,
            SpeechRateType::INHERIT,
        ]);
    }
}
