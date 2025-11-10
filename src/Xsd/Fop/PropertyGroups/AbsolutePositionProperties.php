<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\AbsolutePositionProperties as FopAbsolutePositionProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\AbsolutePositionProperties as NotAbsolutePositionProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class AbsolutePositionProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Absolute_Position_Properties_List';

        parent::__construct([
            new FopAbsolutePositionProperties(),
            new NotAbsolutePositionProperties(),
        ]);
    }
}
