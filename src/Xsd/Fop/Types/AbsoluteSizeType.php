<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xsl\Core\Validation\Types\FontSizeType;

/**
 * This class is used to validate against fop.xsd file.
 */
class AbsoluteSizeType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return new EnumValidator([
            FontSizeType::XX_SMALL,
            FontSizeType::X_SMALL,
            FontSizeType::SMALL,
            FontSizeType::MEDIUM,
            FontSizeType::LARGE,
            FontSizeType::X_LARGE,
            FontSizeType::XX_LARGE,
        ]);
    }
}
