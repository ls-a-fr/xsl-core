<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates Overflow property.
 *
 * @link https://www.w3.org/TR/xsl11/#overflow
 */
class OverflowType extends Type implements Validator
{
    /**
     * The behavior of the "auto" value is user agent dependent, but should cause a scrolling mechanism
     * to be provided for overflowing boxes.
     */
    public const AUTO = 'auto';

    /**
     * This value indicates that content is not clipped, i.e., it may be rendered outside the block box.
     */
    public const VISIBLE = 'visible';

    /**
     * This value indicates that the content is clipped and that no scrolling mechanism should be provided
     * to view the content outside the clipping region; users will not have access to clipped content. The
     * size and shape of the clipping region is specified by the "clip" property.
     */
    public const HIDDEN = 'hidden';

    /**
     * This value indicates that the content is clipped and that if the user agent uses a scrolling
     * mechanism that is visible on the screen (such as a scroll bar or a panner), that mechanism should be
     * displayed for a box whether or not any of its content is clipped. This avoids any problem with
     * scrollbars appearing and disappearing in a dynamic environment. When this value is specified and the
     * target medium is "print", overflowing content should be printed.
     */
    public const SCROLL = 'scroll';

    /**
     * This value implies the same semantics as the value "hidden" with the additional semantic that an
     * error shall be indicated; implementations may recover by clipping the region.
     */
    public const ERROR_IF_OVERFLOW = 'error-if-overflow';

    /**
     * On a formatting object which generates and returns normal viewport/reference pairs, this value
     * specifies that additional viewport/reference pairs are to be generated so that the reference-area
     * component of each pair is no larger than its parent viewport-area. On other formatting objects
     * (including formatting objects whose absolute-position trait is "absolute" or "fixed"), it acts as if
     * an overflow value of "auto" were specified.
     */
    public const REPEAT = 'repeat';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::VISIBLE,
            self::HIDDEN,
            self::SCROLL,
            self::ERROR_IF_OVERFLOW,
            self::REPEAT,
            self::INHERIT,
        ]));
    }
}
