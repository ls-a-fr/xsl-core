<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xsl\Core\Validation\Types\AzimuthType;

/**
 * This class is used to validate against fop.xsd file.
 */
class AzimuthBaseType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return new EnumValidator([
            AzimuthType::LEFT_SIDE,
            AzimuthType::FAR_LEFT,
            AzimuthType::LEFT,
            AzimuthType::CENTER_LEFT,
            AzimuthType::CENTER,
            AzimuthType::CENTER_RIGHT,
            AzimuthType::RIGHT,
            AzimuthType::FAR_RIGHT,
            AzimuthType::RIGHT_SIDE,
            AzimuthType::BEHIND,
            AzimuthType::LEFTWARDS,
            AzimuthType::RIGHTWARDS,
            AzimuthType::INHERIT,
        ]);
    }
}
