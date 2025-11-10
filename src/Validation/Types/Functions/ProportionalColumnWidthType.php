<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Functions;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * Validates ProportionalColumnWidth function.
 *
 * @see https://www.w3.org/TR/xsl11/#d0e5857
 */
class ProportionalColumnWidthType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new RegexValidator('proportional-column-width\(\d+\)'));
    }
}
