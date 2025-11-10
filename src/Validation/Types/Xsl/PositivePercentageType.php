<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * An unsigned real percentage which consists of an optional
 * '+' character followed by a sequence of digits
 * followed by an optional '.' character and sequence of
 * digits followed by '%'. A property may define additional
 * constraints on the value.
 * <enumeration value = "10%"/>
 * <enumeration value = "30%"/>
 * <enumeration value = "100%"/>
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class PositivePercentageType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new RegexValidator('\+?\d+\.?\d*%'));
    }
}
