<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\Clip;
use Lsa\Xsl\Core\Validation\Properties\Overflow;
use Lsa\Xsl\Core\Validation\Properties\ReferenceOrientation;
use Lsa\Xsl\Core\Validation\Properties\Span;

/**
 * Layout-related properties
 *
 * @see https://www.w3.org/TR/xsl11/#d0e26965
 */
class LayoutProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            Clip::class,
            Overflow::class,
            ReferenceOrientation::class,
            Span::class,
        ]);
    }
}
