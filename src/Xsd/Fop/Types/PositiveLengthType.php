<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * This class is used to validate against fop.xsd file.
 */
class PositiveLengthType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new RegexValidator('\+?\d+\.?\d*(px|pt|mm|cm|in|em|%)', '', true));
    }
}
