<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;

/**
 * A compound datatype, with components: block-progression-direction, and inline-progression-direction.
 * Each component is a <length xmlns=""/>. A property may define additional constraints on the values.
 * <enumeration value = "1mm 2mm"/>
 * <enumeration value = "2mm"/>
 * <enumeration value = "3mm 2mm"/>
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class LengthBpIpDirectionType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache((new CompoundValidator(
            min: 1,
            max: 2,
            validator: new LengthType()
        ))->separator(' ')->shouldTrim());
    }
}
