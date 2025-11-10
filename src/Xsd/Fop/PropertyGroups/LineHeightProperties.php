<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\LineHeightProperties as FopLineHeightProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\LineHeightProperties as NotLineHeightProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class LineHeightProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'line_height_Properties_List';

        parent::__construct([
            new FopLineHeightProperties(),
            new NotLineHeightProperties(),
        ]);
    }
}
