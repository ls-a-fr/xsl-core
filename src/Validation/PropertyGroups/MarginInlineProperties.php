<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\MarginBottom;
use Lsa\Xsl\Core\Validation\Properties\MarginLeft;
use Lsa\Xsl\Core\Validation\Properties\MarginRight;
use Lsa\Xsl\Core\Validation\Properties\MarginTop;
use Lsa\Xsl\Core\Validation\Properties\SpaceEnd;
use Lsa\Xsl\Core\Validation\Properties\SpaceStart;

/**
 * Common margin properties - inline
 *
 * @see https://www.w3.org/TR/xsl11/#common-margin-properties-inline
 */
class MarginInlineProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            MarginTop::class,
            MarginBottom::class,
            MarginLeft::class,
            MarginRight::class,
            SpaceEnd::class,
            SpaceStart::class,
        ]);
    }
}
