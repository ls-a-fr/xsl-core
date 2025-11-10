<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\BackgroundProperties as FopBackgroundProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\BackgroundProperties as NotBackgroundProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class BackgroundProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Background_Properties_List';
        parent::__construct([
            new FopBackgroundProperties(),
            new NotBackgroundProperties(),
        ]);
    }
}
