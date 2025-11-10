<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop\AccessibilityProperties as FopAccessibilityProperties;
use Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not\AccessibilityProperties as NotAccessibilityProperties;

/**
 * This class is used to validate against fop.xsd file.
 */
class AccessibilityProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Accessibility_Properties_List';
        parent::__construct([
            new FopAccessibilityProperties(),
            new NotAccessibilityProperties(),
        ]);
    }
}
