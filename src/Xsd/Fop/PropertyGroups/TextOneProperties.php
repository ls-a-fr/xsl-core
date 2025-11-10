<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\TextOneProperties as FopTextOneProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\TextOneProperties as NotTextOneProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class TextOneProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'text_one_Properties_List';

        parent::__construct([
            new FopTextOneProperties(),
            new NotTextOneProperties(),
        ]);
    }
}
