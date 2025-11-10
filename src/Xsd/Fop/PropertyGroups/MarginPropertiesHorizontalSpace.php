<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\MarginPropertiesHorizontalSpace as FopMarginPropertiesHorizontalSpace;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\MarginPropertiesHorizontalSpace as NotMarginPropertiesHorizontalSpace;

/**
 * This class is used to validate against fop.xsd file.
 */
class MarginPropertiesHorizontalSpace extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Margin_Properties_Horizontal_Space_List';

        parent::__construct([
            new FopMarginPropertiesHorizontalSpace(),
            new NotMarginPropertiesHorizontalSpace(),
        ]);
    }
}
