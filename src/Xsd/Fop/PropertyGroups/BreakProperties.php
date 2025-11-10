<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\BreakProperties as FopBreakProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\BreakProperties as NotBreakProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class BreakProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'break_Properties_List';

        parent::__construct([
            new FopBreakProperties(),
            new NotBreakProperties(),
        ]);
    }
}
