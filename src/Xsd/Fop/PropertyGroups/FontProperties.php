<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\FontProperties as FopFontProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\FontProperties as NotFontProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class FontProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Font_Properties_List';

        parent::__construct([
            new NotFontProperties(),
            new FopFontProperties(),
        ]);
    }
}
