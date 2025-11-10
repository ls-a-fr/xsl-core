<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * A signed length value where a 'length' is a real number plus a
 * unit qualification. A property may define additional constraints
 * on the value.
 * <enumeration value = "1px"/>
 * <enumeration value = "1pt"/>
 * <enumeration value = "1mm"/>
 * <enumeration value = "1cm"/>
 * <enumeration value = "1in"/>
 * <enumeration value = "1em"/>
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class LengthType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return new RegexValidator('[\+\-]?\d+\.?\d*(px|pt|mm|cm|in|em|%)', '', true);
    }
}
