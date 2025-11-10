<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates Position property.
 *
 * @link https://www.w3.org/TR/xsl11/#position
 */
class PositionType extends Type implements Validator
{
    /**
     * The box is a normal box, laid out according to the normal flow. The "top", "right", "bottom", and "left"
     * properties do not apply.
     */
    public const STATIC = 'static';

    /**
     * The box's position is calculated according to the normal flow (this is called the position in normal flow).
     * Then the box is offset relative to its normal position. When a box B is relatively positioned, the
     * position of the following box is calculated as though B were not offset.
     */
    public const RELATIVE = 'relative';

    /**
     * The box's position (and possibly size) is specified with the "left", "right", "top", and "bottom"
     * properties. These properties specify offsets with respect to the box's containing block. Absolutely
     * positioned boxes are taken out of the normal flow. This means they have no impact on the layout of later
     * siblings. Also, though absolutely positioned boxes have margins, they do not collapse with any other
     * margins.
     */
    public const ABSOLUTE = 'absolute';

    /**
     * The box's position is calculated according to the "absolute" model, but in addition, the box is fixed
     * with respect to some reference. In the case of continuous media, the box is fixed with respect to the
     * viewport (and doesn't move when scrolled). In the case of paged media, the box is fixed with respect to
     * the page, even if that page is seen through a viewport (in the case of a print-preview, for example).
     * Authors may wish to specify "fixed" in a media-dependent way. For instance, an author may want a box to
     * remain at the top the viewport on the screen, but not at the top of each printed page.
     */
    public const FIXED = 'fixed';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::STATIC,
            self::RELATIVE,
            self::ABSOLUTE,
            self::FIXED,
            self::INHERIT,
        ]));
    }
}
