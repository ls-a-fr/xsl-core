<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\RelativePositionType;

/**
 * This class is used to validate against fop.xsd file.
 */
class RelativePositionProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Relative_Position_Properties_List_Not';

        parent::__construct([
            new TypedAttribute('relative-position', RelativePositionType::class),
        ]);
    }
}
