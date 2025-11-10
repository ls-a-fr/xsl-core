<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates AbsolutePosition property.
 *
 * @link https://www.w3.org/TR/xsl11/#absolute-position
 */
class AbsolutePositionType extends Type implements Validator
{
    /**
     * There is no absolute-positioning constraint. Positioning is in accordance with the
     * relative-position property.
     */
    public const AUTO = 'auto';

    /**
     * The area's position (and possibly size) is specified with the "left", "right", "top",
     * and "bottom" properties. These properties specify offsets with respect to the area's
     * nearest ancestor reference area. Absolutely positioned areas are taken out of the normal
     * flow. This means they have no impact on the layout of later siblings. Also, though
     * absolutely positioned areas have margins, they do not collapse with any other margins.
     */
    public const ABSOLUTE = 'absolute';

    /**
     * The area's position is calculated according to the "absolute" model, but in addition, the
     * area is fixed with respect to some reference. In the case of continuous media, the area is
     * fixed with respect to the viewport (and doesn't move when scrolled). In the case of paged
     * media, the area is fixed with respect to the page, even if that page is seen through a
     * viewport (in the case of a print-preview, for example). Authors may wish to specify "fixed"
     * in a media-dependent way. For instance, an author may want an area to remain at the top of
     * the viewport on the screen, but not at the top of each printed page.
     */
    public const FIXED = 'fixed';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::ABSOLUTE,
            self::FIXED,
            self::INHERIT,
        ]));
    }
}
