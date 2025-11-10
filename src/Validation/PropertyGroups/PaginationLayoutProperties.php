<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\BlankOrNotBlank;
use Lsa\Xsl\Core\Validation\Properties\ColumnCount;
use Lsa\Xsl\Core\Validation\Properties\ColumnGap;
use Lsa\Xsl\Core\Validation\Properties\Extent;
use Lsa\Xsl\Core\Validation\Properties\FlowMapName;
use Lsa\Xsl\Core\Validation\Properties\FlowMapReference;
use Lsa\Xsl\Core\Validation\Properties\FlowName;
use Lsa\Xsl\Core\Validation\Properties\FlowNameReference;
use Lsa\Xsl\Core\Validation\Properties\ForcePageCount;
use Lsa\Xsl\Core\Validation\Properties\InitialPageNumber;
use Lsa\Xsl\Core\Validation\Properties\MasterName;
use Lsa\Xsl\Core\Validation\Properties\MasterReference;
use Lsa\Xsl\Core\Validation\Properties\MaximumRepeats;
use Lsa\Xsl\Core\Validation\Properties\MediaUsage;
use Lsa\Xsl\Core\Validation\Properties\OddOrEven;
use Lsa\Xsl\Core\Validation\Properties\PageHeight;
use Lsa\Xsl\Core\Validation\Properties\PagePosition;
use Lsa\Xsl\Core\Validation\Properties\PageWidth;
use Lsa\Xsl\Core\Validation\Properties\Precedence;
use Lsa\Xsl\Core\Validation\Properties\RegionName;
use Lsa\Xsl\Core\Validation\Properties\RegionNameReference;

/**
 * Pagination and layout properties
 *
 * @see https://www.w3.org/TR/xsl11/#d0e29484
 */
class PaginationLayoutProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            BlankOrNotBlank::class,
            ColumnCount::class,
            ColumnGap::class,
            Extent::class,
            FlowName::class,
            ForcePageCount::class,
            InitialPageNumber::class,
            MasterName::class,
            MasterReference::class,
            MaximumRepeats::class,
            MediaUsage::class,
            OddOrEven::class,
            PageHeight::class,
            PagePosition::class,
            PageWidth::class,
            Precedence::class,
            RegionName::class,
            FlowMapName::class,
            FlowMapReference::class,
            FlowNameReference::class,
            RegionNameReference::class,
        ]);
    }
}
