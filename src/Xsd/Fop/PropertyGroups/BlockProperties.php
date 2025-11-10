<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\BlockProperties as FopBlockProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\BlockProperties as NotBlockProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class BlockProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'block_properties';
        parent::__construct([
            new FopBlockProperties(),
            new NotBlockProperties(),
        ]);
    }
}
