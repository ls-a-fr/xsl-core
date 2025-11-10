<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\AlignmentAdjust;
use Lsa\Xsl\Core\Validation\Properties\AlignmentBaseline;
use Lsa\Xsl\Core\Validation\Properties\BaselineShift;
use Lsa\Xsl\Core\Validation\Properties\DisplayAlign;
use Lsa\Xsl\Core\Validation\Properties\DominantBaseline;
use Lsa\Xsl\Core\Validation\Properties\RelativeAlign;

/**
 * Common area alignment properties
 *
 * @see https://www.w3.org/TR/xsl11/#area-alignment
 */
class AreaAlignmentProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            AlignmentAdjust::class,
            AlignmentBaseline::class,
            BaselineShift::class,
            DisplayAlign::class,
            DominantBaseline::class,
            RelativeAlign::class,
        ]);
    }
}
