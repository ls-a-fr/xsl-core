<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * Represents a positive length.
 *
 * A signed length value where a 'length' is a real number plus a unit qualification. A property may define
 * additional constraints on the value.
 *
 * @see https://www.w3.org/TR/xsl/#datatype
 */
class PositiveLengthType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new RegexValidator('\+?\d*\.?\d+(px|pt|mm|cm|in|em|%)'));
    }
}
