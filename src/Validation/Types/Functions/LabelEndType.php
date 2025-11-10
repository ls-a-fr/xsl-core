<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Functions;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * Validates LabelEnd function.
 *
 * @see https://www.w3.org/TR/xsl11/#d0e5857
 */
class LabelEndType extends Type implements Validator
{
    public const LABEL_END = 'label-end\(\)';

    public function getValidator(): Validator
    {
        return $this->cache(new RegexValidator(self::LABEL_END));
    }
}
