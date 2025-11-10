<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\MediaUsageType;

/**
 * XSL Definition:
 * - Value:  auto | paginate | bounded-in-one-dimension | unbounded
 * - Initial:  auto
 * - Inherited:  no
 * - Percentages:  NA
 * - Media:  visual
 *
 * The "media-usage" property is used to control how the selected display medium is used to present
 * the page(s) specified by the stylesheet.
 *
 * @link https://www.w3.org/TR/xsl11/#media-usage
 */
class MediaUsage extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('media-usage', MediaUsageType::class);
    }

    public function getDefaultValue(): string
    {
        return MediaUsageType::AUTO;
    }
}
