<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\PageBreakAfterType;

/**
 * This class is used to validate against fop.xsd file.
 */
class BlockProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'block_properties_Not';
        parent::__construct([
            new TypedAttribute('page-break-after', PageBreakAfterType::class),
            new TypedAttribute('page-break-before', PageBreakAfterType::class),
        ]);
    }
}
