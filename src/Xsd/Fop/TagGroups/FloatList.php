<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\TagGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\Fop\FloatList as FopFloatList;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\Not\FloatList as NotFloatList;

/**
 * This class is used to validate against fop.xsd file.
 */
class FloatList extends Choice
{
    use HasName;

    public function __construct()
    {
        $this->name = 'float_List';
        parent::__construct(
            // This one was commented out in fop.xsd
            new FopFloatList(),
            new NotFloatList(),
        );
    }
}
