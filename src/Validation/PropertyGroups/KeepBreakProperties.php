<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\BreakAfter;
use Lsa\Xsl\Core\Validation\Properties\BreakBefore;
use Lsa\Xsl\Core\Validation\Properties\KeepTogether;
use Lsa\Xsl\Core\Validation\Properties\KeepWithNext;
use Lsa\Xsl\Core\Validation\Properties\KeepWithPrevious;
use Lsa\Xsl\Core\Validation\Properties\Orphans;
use Lsa\Xsl\Core\Validation\Properties\Widows;

/**
 * Keeps and breaks properties
 *
 * @see https://www.w3.org/TR/xsl11/#d0e26492
 */
class KeepBreakProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            BreakAfter::class,
            BreakBefore::class,
            KeepTogether::class,
            KeepWithNext::class,
            KeepWithPrevious::class,
            Orphans::class,
            Widows::class,
        ]);
    }
}
