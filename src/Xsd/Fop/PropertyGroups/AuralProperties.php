<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\AuralProperties as FopAuralProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\AuralProperties as NotAuralProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class AuralProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Aural_Properties_List';
        parent::__construct([
            new FopAuralProperties(),
            new NotAuralProperties(),
        ]);
    }
}
