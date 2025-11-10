<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\FontFamily;
use Lsa\Xsl\Core\Validation\Properties\FontSelectionStrategy;
use Lsa\Xsl\Core\Validation\Properties\FontSize;
use Lsa\Xsl\Core\Validation\Properties\FontSizeAdjust;
use Lsa\Xsl\Core\Validation\Properties\FontStretch;
use Lsa\Xsl\Core\Validation\Properties\FontStyle;
use Lsa\Xsl\Core\Validation\Properties\FontVariant;
use Lsa\Xsl\Core\Validation\Properties\FontWeight;

/**
 * Common font properties
 *
 * @see https://www.w3.org/TR/xsl11/#common-font-properties
 */
class FontProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            FontFamily::class,
            FontSelectionStrategy::class,
            FontSize::class,
            FontStretch::class,
            FontSizeAdjust::class,
            FontStyle::class,
            FontVariant::class,
            FontWeight::class,
        ]);
    }
}
