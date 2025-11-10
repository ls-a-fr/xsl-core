<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;

/**
 * This class is used to validate against fop.xsd file.
 */
class BorderMarginWidthType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache((new CompoundValidator(
            min: 1,
            max: 4,
            validator: new UnionValidator(
                new PositiveLengthType(),
                new WidthType()
            )
        ))->separator(' ')->shouldTrim());
    }
}
