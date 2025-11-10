<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\BackgroundPositionType;
use Lsa\Xsl\Core\Validation\Types\PageBreakAfterType;

/**
 * This class is used to validate against fop.xsd file.
 */
class ListProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'list_properties_Not';
        parent::__construct([
            new TypedAttribute('page-break-after', PageBreakAfterType::class),
            new TypedAttribute('page-break-before', PageBreakAfterType::class),
            new TypedAttribute('background-position', BackgroundPositionType::class),
        ]);
    }
}
