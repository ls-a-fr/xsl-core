<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\TagGroups\Fop;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\Choice;

/**
 * This class is used to validate against fop.xsd file.
 */
class InitialPropertySetList extends Choice
{
    use HasName;

    public function __construct()
    {
        $this->name = 'initial_property_set_List_FOP';
        parent::__construct();
    }
}
