<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * A <number> immediately followed by a frequency unit identifier.
 * Frequency unit identifiers are: 'Hz' (for Hertz) and 'kHz' (for kilo Hertz).
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class FrequencyType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new RegexValidator('[\+\-]?\d+(\.\d+)?k?Hz'));
    }
}
