<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xsl\Core\Validation\Types\FontWeightType;

/**
 * Limits the font-weight property to these specific values: normal, bold.
 */
class FontWeightLimitedType extends FontWeightType implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::NORMAL,
            self::BOLD,
        ]));
    }
}
