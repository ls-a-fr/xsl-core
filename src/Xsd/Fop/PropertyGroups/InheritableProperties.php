<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\InheritableProperties as FopInheritableProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\InheritableProperties as NotInheritableProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class InheritableProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'inheritable_properties_List';

        parent::__construct([
            new NotInheritableProperties(),
            new FopInheritableProperties(),
        ]);
    }
}
