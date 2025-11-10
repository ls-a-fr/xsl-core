<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\ColorType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthRangeType;

/**
 * This class is used to validate against fop.xsd file.
 */
class TextShadowType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return new UnionValidator(
            new NoneType(),
            new ColorType(),
            new LengthRangeType()
        );
    }
}
