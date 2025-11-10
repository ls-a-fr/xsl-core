<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\Css\MarginWidthType;

/**
 * This class is used to validate against fop.xsd file.
 */
class MarginPropertiesBasic extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Margin_Properties_Basic_List';

        parent::__construct([
            new TypedAttribute('margin-top', MarginWidthType::class),
            new TypedAttribute('margin-bottom', MarginWidthType::class),
            new TypedAttribute('margin-left', MarginWidthType::class),
            new TypedAttribute('margin-right', MarginWidthType::class),
        ]);
    }
}
