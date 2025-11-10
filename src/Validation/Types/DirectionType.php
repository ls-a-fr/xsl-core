<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates the Direction property.
 */
class DirectionType extends Type implements Validator
{
    /**
     * Left to right direction.
     */
    public const LTR = 'ltr';

    /**
     * Right to left direction
     */
    public const RTL = 'rtl';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::LTR,
            self::RTL,
            self::INHERIT,
        ]));
    }
}
