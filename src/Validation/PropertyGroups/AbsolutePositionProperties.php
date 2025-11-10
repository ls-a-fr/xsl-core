<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\AbsolutePosition;
use Lsa\Xsl\Core\Validation\Properties\Bottom;
use Lsa\Xsl\Core\Validation\Properties\Left;
use Lsa\Xsl\Core\Validation\Properties\Right;
use Lsa\Xsl\Core\Validation\Properties\Top;

/**
 * Common absolute position properties
 *
 * @see https://www.w3.org/TR/xsl11/#common-absolute-position-properties
 */
class AbsolutePositionProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            AbsolutePosition::class,
            Top::class,
            Right::class,
            Bottom::class,
            Left::class,
        ]);
    }
}
