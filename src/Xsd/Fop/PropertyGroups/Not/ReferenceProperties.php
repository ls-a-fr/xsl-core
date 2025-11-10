<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;

/**
 * This class is used to validate against fop.xsd file.
 */
class ReferenceProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'reference_Properties_List_Not';
        parent::__construct([]);
    }
}
