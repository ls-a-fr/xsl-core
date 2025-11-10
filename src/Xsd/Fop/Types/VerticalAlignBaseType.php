<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xsl\Core\Validation\Types\VerticalAlignType;

/**
 * This class is used to validate against fop.xsd file.
 */
class VerticalAlignBaseType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return new EnumValidator([
            VerticalAlignType::BASELINE,
            VerticalAlignType::MIDDLE,
            VerticalAlignType::SUB,
            VerticalAlignType::SUPER,
            VerticalAlignType::TEXT_TOP,
            VerticalAlignType::TEXT_BOTTOM,
            VerticalAlignType::TOP,
            VerticalAlignType::BOTTOM,
            VerticalAlignType::INHERIT,
        ], true);
    }
}
