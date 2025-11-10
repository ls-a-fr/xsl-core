<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\ProgressionProperties as FopProgressionProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\ProgressionProperties as NotProgressionProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class ProgressionProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'progression_Properties_List';

        parent::__construct([
            new FopProgressionProperties(),
            new NotProgressionProperties(),
        ]);
    }
}
