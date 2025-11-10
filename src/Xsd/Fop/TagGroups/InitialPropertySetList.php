<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\TagGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\Fop\InitialPropertySetList as FopInitialPropertySetList;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\Not\InitialPropertySetList as NotInitialPropertySetList;

/**
 * This class is used to validate against fop.xsd file.
 */
class InitialPropertySetList extends Choice
{
    use HasName;

    public function __construct()
    {
        $this->name = 'initial_property_set_List';
        parent::__construct(
            // This one was commented out in fop.xsd
            new FopInitialPropertySetList(),
            new NotInitialPropertySetList(),
        );
    }
}
