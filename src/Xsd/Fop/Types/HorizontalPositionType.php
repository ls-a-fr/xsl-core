<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xsl\Core\Validation\Types\BackgroundPositionHorizontalType;

/**
 * This class is used to validate against fop.xsd file.
 */
class HorizontalPositionType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return new EnumValidator([
            BackgroundPositionHorizontalType::LEFT,
            BackgroundPositionHorizontalType::CENTER,
            BackgroundPositionHorizontalType::RIGHT,
        ]);
    }
}
