<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\MarginPropertiesVerticalSpace as FopMarginPropertiesVerticalSpace;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\MarginPropertiesVerticalSpace as NotMarginPropertiesVerticalSpace;

/**
 * This class is used to validate against fop.xsd file.
 */
class MarginPropertiesVerticalSpace extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Margin_Properties_vertical_Space_List';

        parent::__construct([
            new FopMarginPropertiesVerticalSpace(),
            new NotMarginPropertiesVerticalSpace(),
        ]);
    }
}
