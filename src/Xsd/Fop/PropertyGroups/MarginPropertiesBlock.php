<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;

/**
 * This class is used to validate against fop.xsd file.
 */
class MarginPropertiesBlock extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Margin_Properties_Block_List';

        parent::__construct([
            new MarginPropertiesBasic(),
            new MarginPropertiesVerticalSpace(),
        ]);
    }
}
