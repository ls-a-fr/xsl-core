<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Icc\ColorNameType;

/**
 * This class is used to validate against fop.xsd file.
 */
class ColorType extends Type implements Validator
{
    use HasName;

    public function __construct()
    {
        $this->name = 'color_Type';
    }

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new InheritType(),
            new ColorHexType(),
            new ColorNameType()
        ));
    }
}
