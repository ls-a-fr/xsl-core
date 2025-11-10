<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\NumberType;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * Validates Volume property.
 *
 * @see https://www.w3.org/TR/xsl11/#volume
 */
class VolumeType extends Type implements Validator
{
    /**
     * No sound at all. The value '0' does not mean the same as 'silent'.
     */
    public const SILENT = 'silent';

    /**
     * Same as '0'.
     */
    public const X_SOFT = 'x-soft';

    /**
     * Same as '25'.
     */
    public const SOFT = 'soft';

    /**
     * Same as '50'.
     */
    public const MEDIUM = 'medium';

    /**
     * Same as '75'.
     */
    public const LOUD = 'loud';

    /**
     * Same as '100'.
     */
    public const X_LOUD = 'x-loud';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new NumberType(),
            new PercentageType(),
            new EnumValidator([
                self::SILENT,
                self::X_SOFT,
                self::SOFT,
                self::MEDIUM,
                self::LOUD,
                self::X_LOUD,
                self::INHERIT,
            ])
        ));
    }
}
