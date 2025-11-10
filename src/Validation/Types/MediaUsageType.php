<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates MediaUsage property.
 *
 * @link https://www.w3.org/TR/xsl11/#media-usage
 */
class MediaUsageType extends Type implements Validator
{
    /**
     * The User Agent determines which value of "media-usage" (other than the "auto" value) is used.
     * The User Agent may consider the type of media on which the presentation is to be placed in
     * making this determination.
     * Note: For example, the User Agent could use the following decision process. If the media is
     * not continuous and is of fixed bounded size, then the "paginate" (described below) is used.
     * Otherwise, the "bounded-in-one-dimension" is used.
     */
    public const AUTO = 'auto';

    /**
     * A sequence of pages is generated from the fo:page-sequences that are children of the fo:root as
     * described in 6.4.5 fo:page-sequence.
     */
    public const PAGINATE = 'paginate';

    /**
     * Only one page is generated per fo:page-sequence descendant from the fo:root. Exactly one of
     * "page-height" or "page-width" must be specified on the first page master that is used. The size
     * of the page in the other dimension is determined by the content flowed into the page.
     * It is an error if more or less than one of "page-height" or "page-width" is specified on the
     * first page master that is used. The User Agent may recover as follows: The recovery depends on
     * the "reference-orientation" of the page and "writing-mode" of the region to which the fo:flow
     * is assigned. There are four cases: (1) the "reference-orientation" is "0" or "180" and the
     * "writing-mode" is horizontal; (2) the "reference-orientation" is "0" or "180" and the
     * "writing-mode" is vertical; (3) the "reference-orientation" is "90" or "270" and the
     * "writing-mode" is horizontal; (4) the "reference-orientation" is "90" or "270" and the
     * "writing-mode" is vertical. For cases (1) and (4), the "page-width" is bounded and the
     * "page-height" is not bounded. For case (2) and (3), the "page-height" is bounded and the
     * "page-width" is not bounded.
     */
    public const BOUNDED_IN_ONE_DIMENSION = 'bounded-in-one-dimension';

    /**
     * Only one page is generated per fo:page-sequence descendant from the fo:root. Neither "page-height"
     * nor "page-width" may be specified on any page master that is used. If a value is specified for
     * either property, it is an error and a User Agent may recover by ignoring the specified value. Each
     * page begins at the before-edge and start-edge of the page and the page extends as far as necessary
     * toward the after-edge and end-edge to contain all the content of the page-sequence which generates
     * the page.
     * Note: This implies that no text content is automatically wrapped; that is, each block will have a
     * single line for each text node that does not contain a U+000A character. If more than one line is
     * generated, then the sequence of characters that generated the glyphs in each such line must have
     * been bounded in the original text node, either by the beginning or end of that text node or by
     * an U+000A character within that text node. Control over the treatment of the U+000A character is
     * described in 7.16.7 linefeed-treatment.
     */
    public const UNBOUNDED = 'unbounded';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::PAGINATE,
            self::BOUNDED_IN_ONE_DIMENSION,
            self::UNBOUNDED,
        ]));
    }
}
