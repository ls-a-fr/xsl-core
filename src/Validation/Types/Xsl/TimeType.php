<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * A <number> immediately followed by a time unit identifier. Time
 * unit identifiers are: 'ms' (for milliseconds) and 's' (for seconds).
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class TimeType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new RegexValidator('[\+\-]?\d*\.?\d+m?s'));
    }
}
