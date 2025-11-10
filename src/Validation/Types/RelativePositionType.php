<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates RelativePosition property.
 *
 * @see https://www.w3.org/TR/xsl11/#relative-position
 */
class RelativePositionType extends Type implements Validator
{
    /**
     * The area is normally stacked.
     */
    public const STATIC = 'static';

    /**
     * The area's position is determined as if it was normally stacked. Only during rendering is the
     * area rendered offset relative to this position. The fact that one area is relatively positioned
     * does not influence the position on any other area.
     *
     * For areas that break over a page boundary, only the portion that would have been on a given page
     * originally is included in the repositioned area on that page. Any portion of the repositioned
     * area that was originally on the current page, but falls off the current page due to repositioning
     * is "off" (typically clipped), thus does not fall onto any other page.
     */
    public const RELATIVE = 'relative';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::STATIC,
            self::RELATIVE,
            self::INHERIT,
        ]));
    }
}
