<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\PageHeightType;

/**
 * XSL Definition:
 * Value: auto | indefinite | <length> | inherit
 * Initial: auto
 * Inherited: no
 * Percentages: N/A
 * Media: visual
 *
 * Specifies the height of a page.
 *
 * Note:
 * The values for the "page-width" and "page-height" properties are intended to permit the size specification
 * to match the handling of a frameset in a browser window when the media is continuous and to match pages
 * when the media is paged.
 *
 * A User Agent may provide a way to declare the media for which formatting is to be done. This may be
 * different from the media on which the formatted result is viewed. For example, a browser User Agent may be
 * used to preview pages that are formatted for sheet media. In that case, the size calculation is based on
 * the media for which formatting is done rather than the media being currently used.
 *
 * @link https://www.w3.org/TR/xsl/#page-height
 */
class PageHeight extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('page-height', PageHeightType::class);
    }

    public function getDefaultValue(): string
    {
        return PageHeightType::AUTO;
    }
}
