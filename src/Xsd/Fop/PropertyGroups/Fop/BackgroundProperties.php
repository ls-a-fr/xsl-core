<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\BackgroundColorType;

/**
 * This class is used to validate against fop.xsd file.
 */
class BackgroundProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Background_Properties_List_FOP';
        parent::__construct([
            new TypedAttribute('background-color', BackgroundColorType::class),
        ]);
    }
}
