<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\RelativePositionProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class AbsoluteOrRelativePositionProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'absolute_or_Relative_Position_Properties_List_FOP';
        parent::__construct([
            new RelativePositionProperties(),
        ]);
    }
}
