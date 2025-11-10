<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;

/**
 * Specifies the width of a page.
 *
 * XSL Definition:
 * Value: auto | indefinite | <length> | inherit
 * Initial: auto
 * Inherited: no
 * Percentages: N/A
 * Media: visual
 *
 * @see https://www.w3.org/TR/xsl/#page-width
 */
class PageWidthType extends Type implements Validator
{
    /**
     * The "page-width" shall be determined, in the case of continuous media, from the size of the
     * User Agent window, otherwise from the size of the media. If media information is not
     * available this dimension shall be implementation-defined.
     *
     * Note: A fallback to 8.26in would fit on both 8+1/2x11 and A4 pages.
     */
    public const AUTO = 'auto';

    /**
     * The width of the page is determined from the size of the laid-out content.
     * "Page-width" and "page-height" properties may not both be set to "indefinite". Should that
     * occur, the dimension that is parallel to the block-progression-direction, as determined by
     * the "reference-orientation" and "writing-mode" of the page-reference-area will remain
     * "indefinite" and the other will revert to "auto".
     */
    public const INDEFINITE = 'indefinite';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new LengthType(),
            new EnumValidator([
                self::AUTO,
                self::INDEFINITE,
                self::INHERIT,
            ])
        ));
    }
}
