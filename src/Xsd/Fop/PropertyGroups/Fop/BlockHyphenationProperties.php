<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;

/**
 * This class is used to validate against fop.xsd file.
 */
class BlockHyphenationProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'block_hyphenation_Properties_List_FOP';
        parent::__construct([]);
    }
}
