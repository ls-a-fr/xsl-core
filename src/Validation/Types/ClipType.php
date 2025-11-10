<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\ShapeType;

/**
 * The 'clip' property applies to elements that have a 'overflow' property with a value other than
 * 'visible'.
 *
 * The element's ancestors may also have clipping regions (in case their "overflow" property is not
 * "visible"); what is rendered is the intersection of the various clipping regions.
 *
 * If the clipping region exceeds the bounds of the UA's document window, content may be clipped to
 * that window by the native operating environment.
 *
 * `<shape>`:
 *   In CSS2, the only valid `<shape>` value is: rect (`<top>`, `<right>`, `<bottom>`, `<left>`) where
 *   `<top>`, `<bottom>` `<right>`, and `<left>` specify offsets from the respective sides of the box.
 *   `<top>`, `<right>`, `<bottom>`, and `<left>` may either have a <length> value or "auto".
 *   Negative lengths are permitted. The value "auto" means that a given edge of the clipping region will be
 *   the same as the edge of the element's generated box (i.e., "auto" means the same as "0".)
 *   When coordinates are rounded to pixel coordinates, care should be taken that no pixels remain visible
 *   when `<left>` + `<right>` is equal to the element's width (or <top> + <bottom> equals the element's
 *   height), and conversely that no pixels remain hidden when these values are 0.
 *
 * @link https://www.w3.org/TR/xsl11/#clip
 */
class ClipType extends Type implements Validator
{
    /**
     * The clipping region has the same size and location as the element's box(es).
     */
    public const AUTO = 'auto';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new ShapeType(),
            new EnumValidator([
                self::AUTO,
                self::INHERIT,
            ])
        ));
    }
}
