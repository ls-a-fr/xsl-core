<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\ListProperties as FopListProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\ListProperties as NotListProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class ListProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'list_properties';

        parent::__construct([
            new FopListProperties(),
            new NotListProperties(),
        ]);
    }
}
