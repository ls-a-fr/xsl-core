<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * This property determines where, relative to the column areas, the change bars will occur.
 *
 * @see https://www.w3.org/TR/xsl11/#change-bar-placement
 */
class ChangeBarPlacementType extends Type implements Validator
{
    /**
     * The change bar will be offset from the start edge of all column areas.
     */
    public const START = 'start';

    /**
     * The change bar will be offset from the end edge of all column areas.
     */
    public const END = 'end';

    /**
     * The change bar will be offset from the left edge of all column areas.
     */
    public const LEFT = 'left';

    /**
     * The change bar will be offset from the right edge of all column areas.
     */
    public const RIGHT = 'right';

    /**
     * If the page binding edge is on the start-edge, the change bar will be offset from the
     * start edge of all column areas. If the binding is the end-edge, the change bar will be
     * offset from the end edge of all column areas. If the page binding edge is on neither
     * the start-edge nor end-edge, the change bar will be offset from the start edge of all
     * column areas.
     */
    public const INSIDE = 'inside';

    /**
     * If the page binding edge is on the start-edge, the change bar will be offset from the end
     * edge of all column areas. If the binding is the end-edge, the change bar will be offset
     * from the start edge of all column areas. If the page binding edge is on neither the
     * start-edge nor end-edge, the change bar will be offset from the end edge of all column areas.
     */
    public const OUTSIDE = 'outside';

    /**
     * When there are exactly two columns, the change bar will be offset from the start edge of
     * all column one areas and the end edge of all column two areas; when there are any other
     * number of columns, this value is equivalent to 'outside'.
     */
    public const ALTERNATE = 'alternate';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::START,
            self::END,
            self::LEFT,
            self::RIGHT,
            self::INSIDE,
            self::OUTSIDE,
            self::ALTERNATE,
        ]));
    }
}
