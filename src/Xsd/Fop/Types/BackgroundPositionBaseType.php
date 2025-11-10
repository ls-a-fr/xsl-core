<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\BackgroundPositionTextType;

/**
 * This class is used to validate against fop.xsd file.
 */
class BackgroundPositionBaseType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return new EnumValidator([
            BackgroundPositionTextType::TOP_LEFT,
            BackgroundPositionTextType::TOP_CENTER,
            BackgroundPositionTextType::TOP_RIGHT,
            BackgroundPositionTextType::CENTER_LEFT,
            BackgroundPositionTextType::CENTER_CENTER,
            BackgroundPositionTextType::CENTER_RIGHT,
            BackgroundPositionTextType::BOTTOM_LEFT,
            BackgroundPositionTextType::BOTTOM_CENTER,
            BackgroundPositionTextType::BOTTOM_RIGHT,
        ]);
    }
}
