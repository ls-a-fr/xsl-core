<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;

/**
 * This class is used to validate against fop.xsd file.
 */
class AbsoluteOrRelativePositionProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'absolute_or_Relative_Position_Properties_List';
        parent::__construct([
            new \Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\AbsoluteOrRelativePositionProperties(),
            new \Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\AbsoluteOrRelativePositionProperties(),
        ]);
    }
}
