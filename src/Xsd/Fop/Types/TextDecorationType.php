<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xsl\Core\Validation\Types\TextDecorationType as TypesTextDecorationType;

/**
 * This class is used to validate against fop.xsd file.
 */
class TextDecorationType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return new EnumValidator([
            TypesTextDecorationType::NONE,
            TypesTextDecorationType::UNDERLINE,
            TypesTextDecorationType::NO_UNDERLINE,
            TypesTextDecorationType::OVERLINE,
            TypesTextDecorationType::NO_OVERLINE,
            TypesTextDecorationType::LINE_THROUGH,
            TypesTextDecorationType::NO_LINE_THROUGH,
            TypesTextDecorationType::BLINK,
            TypesTextDecorationType::NO_BLINK,
            TypesTextDecorationType::INHERIT,
        ]);
    }
}
