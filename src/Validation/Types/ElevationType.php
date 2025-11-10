<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\AngleType;

/**
 * Validates Elevation property.
 *
 * @see https://www.w3.org/TR/xsl11/#elevation
 */
class ElevationType extends Type implements Validator
{
    /**
     * Same as '-90deg'.
     */
    public const BELOW = 'below';

    /**
     * Same as '0deg'.
     */
    public const LEVEL = 'level';

    /**
     * Same as '90deg'.
     */
    public const ABOVE = 'above';

    /**
     * Adds 10 degrees to the current elevation.
     */
    public const HIGHER = 'higher';

    /**
     * Subtracts 10 degrees from the current elevation.
     */
    public const LOWER = 'lower';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new AngleType(),
            new EnumValidator([
                self::BELOW,
                self::LEVEL,
                self::ABOVE,
                self::HIGHER,
                self::LOWER,
                self::INHERIT,
            ])
        ));
    }
}
