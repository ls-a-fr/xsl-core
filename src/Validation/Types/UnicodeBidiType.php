<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates UnicodeBidi property.
 *
 * @link https://www.w3.org/TR/xsl11/#unicode-bidi
 */
class UnicodeBidiType extends Type implements Validator
{
    /**
     * The element does not open an additional level of embedding with respect to the bidirectional
     * algorithm.
     * For inline-level elements, implicit reordering works across element boundaries.
     */
    public const NORMAL = 'normal';

    /**
     * If the element is inline-level, this value opens an additional level of embedding with respect
     * to the bidirectional algorithm. The direction of this embedding level is given by the 'direction'
     * property. Inside the element, reordering is done implicitly. This corresponds to adding a LRE
     * (U+202A; for 'direction: ltr') or RLE (U+202B; for 'direction: rtl') at the start of the element
     * and a PDF (U+202C) at the end of the element.
     */
    public const EMBED = 'embed';

    /**
     * If the element is inline-level or a block-level element that contains only inline-level elements,
     * this creates an override. This means that inside the element, reordering is strictly in sequence
     * according to the 'direction' property; the implicit part of the bidirectional algorithm is
     * ignored. This corresponds to adding a LRO (U+202D; for 'direction: ltr') or RLO (U+202E; for
     * 'direction: rtl') at the start of the element and a PDF (U+202C) at the end of the element.
     */
    public const BIDI_OVERRIDE = 'bidi-override';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::NORMAL,
            self::EMBED,
            self::BIDI_OVERRIDE,
            self::INHERIT,
        ]));
    }
}
