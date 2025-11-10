<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\ReferenceProperties as FopReferenceProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\ReferenceProperties as NotReferenceProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class ReferenceProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'reference_Properties_List';

        parent::__construct([
            new FopReferenceProperties(),
            new NotReferenceProperties(),
        ]);
    }
}
