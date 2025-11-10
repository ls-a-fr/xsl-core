<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Textual accepted values for background-position
 *
 * @see https://www.w3.org/TR/xsl11/#background-position
 */
class BackgroundPositionTextType extends Type implements Validator
{
    /**
     * Same as 0% 0%.
     */
    public const TOP_LEFT = 'top left';

    /**
     * Same as 0% 0%.
     */
    public const LEFT_TOP = 'left top';

    /**
     * Same as 50% 0%.
     */
    public const TOP = 'top';

    /**
     * Same as 50% 0%.
     */
    public const TOP_CENTER = 'top center';

    /**
     * Same as 50% 0%.
     */
    public const CENTER_TOP = 'center top';

    /**
     * Same as 100% 0%.
     */
    public const RIGHT_TOP = 'right top';

    /**
     * Same as 100% 0%.
     */
    public const TOP_RIGHT = 'top right';

    /**
     * Same as 0% 50%.
     */
    public const LEFT = 'left';

    /**
     * Same as 0% 50%.
     */
    public const LEFT_CENTER = 'left center';

    /**
     * Same as 0% 50%.
     */
    public const CENTER_LEFT = 'center left';

    /**
     * Same as 50% 50%.
     */
    public const CENTER = 'center';

    /**
     * Same as 50% 50%.
     */
    public const CENTER_CENTER = 'center center';

    /**
     * Same as 100% 50%.
     */
    public const RIGHT = 'right';

    /**
     * Same as 100% 50%.
     */
    public const RIGHT_CENTER = 'right center';

    /**
     * Same as 100% 50%.
     */
    public const CENTER_RIGHT = 'center right';

    /**
     * Same as 0% 100%.
     */
    public const BOTTOM_LEFT = 'left bottom';

    /**
     * Same as 0% 100%.
     */
    public const LEFT_BOTTOM = 'left bottom';

    /**
     * Same as 50% 100%.
     */
    public const BOTTOM = 'bottom';

    /**
     * Same as 50% 100%.
     */
    public const BOTTOM_CENTER = 'bottom center';

    /**
     * Same as 50% 100%.
     */
    public const CENTER_BOTTOM = 'center bottom';

    /**
     * Same as 100% 100%.
     */
    public const BOTTOM_RIGHT = 'bottom right';

    /**
     * Same as 100% 100%.
     */
    public const RIGHT_BOTTOM = 'right bottom';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::TOP_LEFT,
            self::LEFT_TOP,
            self::TOP,
            self::TOP_CENTER,
            self::CENTER_TOP,
            self::RIGHT_TOP,
            self::TOP_RIGHT,
            self::LEFT,
            self::LEFT_CENTER,
            self::CENTER_LEFT,
            self::CENTER,
            self::CENTER_CENTER,
            self::RIGHT,
            self::RIGHT_CENTER,
            self::CENTER_RIGHT,
            self::BOTTOM_LEFT,
            self::LEFT_BOTTOM,
            self::BOTTOM,
            self::BOTTOM_CENTER,
            self::CENTER_BOTTOM,
            self::BOTTOM_RIGHT,
            self::RIGHT_BOTTOM,
        ]));
    }
}
