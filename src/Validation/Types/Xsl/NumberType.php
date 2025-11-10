<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * A signed real number which consists of an optional '+' or '-' character
 * followed by a sequence of digits followed by an optional '.' character
 * and sequence of digits. A property may define additional constraints on
 * the value.
 * <enumeration value = "-2.4"/>
 * <enumeration value = "2"/>
 * <enumeration value = "4"/>
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class NumberType extends Type implements Validator
{
    public const REGULAR_EXPRESSION = '[\+\-]?\d*\.?\d+';

    public function getValidator(): Validator
    {
        return $this->cache(new RegexValidator(self::REGULAR_EXPRESSION));
    }
}
