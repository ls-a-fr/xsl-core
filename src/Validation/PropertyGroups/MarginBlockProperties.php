<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\EndIndent;
use Lsa\Xsl\Core\Validation\Properties\MarginBottom;
use Lsa\Xsl\Core\Validation\Properties\MarginLeft;
use Lsa\Xsl\Core\Validation\Properties\MarginRight;
use Lsa\Xsl\Core\Validation\Properties\MarginTop;
use Lsa\Xsl\Core\Validation\Properties\SpaceAfter;
use Lsa\Xsl\Core\Validation\Properties\SpaceBefore;
use Lsa\Xsl\Core\Validation\Properties\StartIndent;

/**
 * Common margin properties - block
 *
 * @see https://www.w3.org/TR/xsl11/#common-margin-properties-block
 */
class MarginBlockProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            MarginTop::class,
            MarginBottom::class,
            MarginLeft::class,
            MarginRight::class,
            SpaceBefore::class,
            SpaceAfter::class,
            StartIndent::class,
            EndIndent::class,
        ]);
    }
}
