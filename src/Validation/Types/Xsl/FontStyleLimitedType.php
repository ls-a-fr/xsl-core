<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xsl\Core\Validation\Types\FontStyleType;

/**
 * Limits the font-style property to these specific values: normal, italic.
 */
class FontStyleLimitedType extends FontStyleType implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::NORMAL,
            self::ITALIC,
        ]));
    }
}
