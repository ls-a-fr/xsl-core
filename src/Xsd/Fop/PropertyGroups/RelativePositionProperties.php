<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\RelativePositionProperties as FopRelativePositionProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\RelativePositionProperties as NotRelativePositionProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class RelativePositionProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Relative_Position_Properties_List';

        parent::__construct([
            new FopRelativePositionProperties(),
            new NotRelativePositionProperties(),
        ]);
    }
}
