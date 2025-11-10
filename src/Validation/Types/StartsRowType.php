<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates StartsRow property.
 *
 * @link https://www.w3.org/TR/xsl11/#starts-row
 */
class StartsRowType extends Type implements Validator
{
    /**
     * This cell starts a row.
     */
    public const TRUE = 'true';

    /**
     * This cell does not start a row.
     */
    public const FALSE = 'false';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::TRUE,
            self::FALSE,
        ]));
    }
}
