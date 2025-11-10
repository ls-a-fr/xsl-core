<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;

/**
 * A compound datatype, with components: minimum, optimum, maximum.
 * Each component is a <length xmlns=""/>. If "minimum" is greater
 * than optimum, it will be treated as if it had been set to
 * "optimum". If "maximum" is less than optimum, it will be treated
 * as if it had been set to "optimum". A property may define
 * additional constraints on the values.
 * <enumeration value = "1mm 2mm 3mm"/>
 * <enumeration value = "2mm 2mm 1mm"/>
 * <enumeration value = "3mm 2mm 1mm"/>
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class LengthRangeType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache((new CompoundValidator(
            min: 3,
            max: 3,
            validator: new LengthType()
        ))->separator(' ')->shouldTrim());
    }
}
