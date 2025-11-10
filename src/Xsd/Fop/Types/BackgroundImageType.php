<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xsl\Core\Validation\Types\BackgroundImageType as TypesBackgroundImageType;

/**
 * This class is used to validate against fop.xsd file.
 */
class BackgroundImageType extends Type implements Validator
{
    public const URI_SPECIFICATION = 'uri-specification';

    public function getValidator(): Validator
    {
        return new EnumValidator([
            TypesBackgroundImageType::INHERIT,
            TypesBackgroundImageType::NONE,
            self::URI_SPECIFICATION,
        ]);
    }
}
