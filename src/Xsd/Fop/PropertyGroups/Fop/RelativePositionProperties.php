<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\BottomType;
use Lsa\Xsl\Core\Validation\Types\LeftType;
use Lsa\Xsl\Core\Validation\Types\RightType;
use Lsa\Xsl\Core\Validation\Types\TopType;

/**
 * This class is used to validate against fop.xsd file.
 */
class RelativePositionProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Relative_Position_Properties_List_FOP';
        parent::__construct([
            new TypedAttribute('top', TopType::class),
            new TypedAttribute('right', RightType::class),
            new TypedAttribute('bottom', BottomType::class),
            new TypedAttribute('left', LeftType::class),
        ]);
    }
}
