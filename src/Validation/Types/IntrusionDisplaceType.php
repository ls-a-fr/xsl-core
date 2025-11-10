<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates IntrusionDisplaceType property.
 *
 * @link https://www.w3.org/TR/xsl11/#intrusion-displace
 */
class IntrusionDisplaceType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    /**
     * For a reference-area, this value is treated as if "block" had been specified. For any other
     * area, this value is treated as if "line" had been specified.
     */
    public const AUTO = 'auto';

    /**
     * Neither line areas nor block areas are displaced (nor have any adjustment to their inline
     * progression dimension) due to the intrusion of the float. The float overlays the area without
     * affecting any of the content of the area, unless the "clear" property has a specified value
     * other than "none".
     */
    public const NONE = 'none';

    /**
     * The start and end edges of line areas are displaced just enough so that any intrusions no longer
     * intersects the content rectangle of the line area. For the purposes of this test, the allocation
     * rectangle of the intrusion is used in the intersection. Also, such intersections are done with
     * respect to the line area prior to its adjustment of any "text-indent". This will cause a reduction
     * in the inline progression dimension of the line area.
     * Note: This is the behavior of floats described in CSS2.
     */
    public const LINE = 'line';

    /**
     * The start edge (and end edge) of each line within the block area on which the property occurs is
     * displaced (a) by at least the same amount it would be displaced by the "line" value of this
     * property and (b) in addition, by an amount that preserves the relative offset of that start edge
     * (or end edge) with respect to the start edge (or end edge) of any other line displaced by any
     * intrusion that cause the current line to be displaced. If there is more than one intrusion that
     * could cause a displacement of the line, the largest such displacement is used.
     */
    public const INDENT = 'indent';

    /**
     * The start edge (and end edge) of the block is displaced by the least amount necessary to insure
     * that (a) the start edge (end edge) of the block does not intersect any of the start intrusions
     * (end intrusions) that overlap that block and (b) the amount by which it is displaced is at least
     * as much as the displacement of the parent area, provided the parent is a block-area which is not
     * a reference-area. An intrusion is said to overlap a block if the there is a line parallel to the
     * inline progression direction that intersects the allocation rectangles of both the block and the
     * intrusion.
     */
    public const BLOCK = 'block';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::INHERIT,
            self::AUTO,
            self::NONE,
            self::LINE,
            self::INDENT,
            self::BLOCK,
        ]));
    }
}
