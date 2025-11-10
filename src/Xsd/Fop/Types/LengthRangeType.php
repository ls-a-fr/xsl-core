<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;

/**
 * This class is used to validate against fop.xsd file.
 * Note: LengthType in it is replaced with a regex, otherwise failing XSD comparison.
 */
class LengthRangeType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return (new CompoundValidator(
            min: 3,
            max: 3,
            validator: new LengthType()
        ))->separator(' ')->shouldTrim();
    }
}
