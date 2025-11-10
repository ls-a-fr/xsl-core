<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Icc\ColorNameType;
use Lsa\Xsl\Core\Validation\Types\Xsl\ColorHexType;

/**
 * This class is used to validate against fop.xsd file.
 */
class BackgroundColorType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return new UnionValidator(
            new InheritType(),
            new TransparentType(),
            new ColorHexType(),
            new ColorNameType()
        );
    }
}
