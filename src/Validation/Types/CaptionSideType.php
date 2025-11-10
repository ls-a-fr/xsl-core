<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates CaptionSide property.
 *
 * @link https://www.w3.org/TR/xsl11/#caption-side
 */
class CaptionSideType extends Type implements Validator
{
    /**
     * Positions the caption before the table in the block-progression-direction.
     */
    public const BEFORE = 'before';

    /**
     * Positions the caption after the table in the block-progression-direction.
     */
    public const AFTER = 'after';

    /**
     * Positions the caption before the table in the inline-progression-direction.
     */
    public const START = 'start';

    /**
     * Positions the caption after the table in the inline-progression-direction.
     */
    public const END = 'end';

    /**
     * Positions the caption box above the table box.
     */
    public const TOP = 'top';

    /**
     * Positions the caption box below the table box.
     */
    public const BOTTOM = 'bottom';

    /**
     * Positions the caption box to the left of the table box.
     */
    public const LEFT = 'left';

    /**
     * Positions the caption box to the right of the table box.
     */
    public const RIGHT = 'right';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::BEFORE,
            self::AFTER,
            self::START,
            self::END,
            self::TOP,
            self::BOTTOM,
            self::LEFT,
            self::RIGHT,
            self::INHERIT,
        ]));
    }
}
