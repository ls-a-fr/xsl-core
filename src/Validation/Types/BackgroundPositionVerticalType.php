<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * Validates BackgroundPositionVertical property.
 *
 * @see https://www.w3.org/TR/xsl11/#background-position-vertical
 */
class BackgroundPositionVerticalType extends Type implements Validator
{
    /**
     * Same as 0%.
     */
    public const TOP = 'top';

    /**
     * Same as 50%.
     */
    public const CENTER = 'center';

    /**
     * Same as 100%.
     */
    public const BOTTOM = 'bottom';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new PercentageType(),
            new LengthType(),
            new EnumValidator([
                self::TOP,
                self::CENTER,
                self::BOTTOM,
                self::INHERIT,
            ])
        ));
    }
}
