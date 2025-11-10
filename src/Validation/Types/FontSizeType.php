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
 * Validates FontSize property.
 *
 * @link https://www.w3.org/TR/xsl11/#font-size
 */
class FontSizeType extends Type implements Validator
{
    /**
     * `<absolute-size/>` keyword. From smaller (1) to larger (7): xx-small (1)
     */
    public const XX_SMALL = 'xx-small';

    /**
     * `<absolute-size/>` keyword. From smaller (1) to larger (7): x-small (2)
     */
    public const X_SMALL = 'x-small';

    /**
     * `<absolute-size/>` keyword. From smaller (1) to larger (7): small (3)
     */
    public const SMALL = 'small';

    /**
     * `<absolute-size/>` keyword. From smaller (1) to larger (7): medium (4)
     */
    public const MEDIUM = 'medium';

    /**
     * `<absolute-size/>` keyword. From smaller (1) to larger (7): large (5)
     */
    public const LARGE = 'large';

    /**
     * `<absolute-size/>` keyword. From smaller (1) to larger (7): x-large (6)
     */
    public const X_LARGE = 'x-large';

    /**
     * `<absolute-size/>` keyword. From smaller (1) to larger (7): xx-large (7)
     */
    public const XX_LARGE = 'xx-large';

    /**
     * `<relative-size/>` keyword. Increase size compared to parent
     */
    public const LARGER = 'larger';

    /**
     * `<relative-size/>` keyword. Decrease size compared to parent
     */
    public const SMALLER = 'smaller';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new LengthType(),
            new PercentageType(),
            new EnumValidator([
                self::INHERIT,
                self::XX_SMALL,
                self::X_SMALL,
                self::SMALL,
                self::MEDIUM,
                self::LARGE,
                self::X_LARGE,
                self::XX_LARGE,
                self::LARGER,
                self::SMALLER,
            ])
        ));
    }
}
