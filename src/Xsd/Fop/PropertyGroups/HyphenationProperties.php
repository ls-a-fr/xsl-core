<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\HyphenationProperties as FopHyphenationProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\HyphenationProperties as NotHyphenationProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class HyphenationProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Hyphenation_Properties_List';

        parent::__construct([
            new NotHyphenationProperties(),
            new FopHyphenationProperties(),
        ]);
    }
}
