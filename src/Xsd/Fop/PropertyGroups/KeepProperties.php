<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\KeepProperties as FopKeepProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\KeepProperties as NotKeepProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class KeepProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'keep_Properties_List';

        parent::__construct([
            new FopKeepProperties(),
            new NotKeepProperties(),
        ]);
    }
}
