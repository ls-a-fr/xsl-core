<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\IntrusionDisplaceProperties as FopIntrusionDisplaceProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\IntrusionDisplaceProperties as NotIntrusionDisplaceProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class IntrusionDisplaceProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'intrusion_displace_Properties_List';

        parent::__construct([
            new NotIntrusionDisplaceProperties(),
            new FopIntrusionDisplaceProperties(),
        ]);
    }
}
