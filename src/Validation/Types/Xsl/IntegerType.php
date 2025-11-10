<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * A signed integer value which consists of an optional '+' or '-' character
 * followed by a sequence of digits. A property may define additional
 * constraints on the value.
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 *
 * <enumeration value = "-3"/>
 * <enumeration value = "0"/>
 * <enumeration value = "1"/>
 * <enumeration value = "+3"/>
 * <enumeration value = "5"/>
 */
class IntegerType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new RegexValidator('[\+\-]?\d+'));
    }
}
