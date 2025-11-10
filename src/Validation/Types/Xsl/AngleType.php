<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * A representation of an angle consisting of an optional
 * '+' or  '-' character immediately followed by a <number/>
 * immediately followed by an angle unit identifier. Angle
 * unit identifiers are: 'deg' (for degrees), 'grad' (for
 * grads), and 'rad' (for radians). The specified values are
 * normalized to the range 0deg to 360deg. A property may
 * define additional constraints on the value.
 * <enumeration value = "3deg"/>
 * <enumeration value = "45deg"/>
 * <enumeration value = "-12deg"/>
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class AngleType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new RegexValidator('[\+\-]?([1-3]?\d?\d|[1-3]?\d?\d\.\d+|\.\d+)(deg|grad|rad)'));
    }
}
