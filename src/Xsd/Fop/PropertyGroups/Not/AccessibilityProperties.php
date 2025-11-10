<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Validation\Xml\StringType;
use Lsa\Xsl\Core\Validation\Types\SourceDocumentType;

/**
 * This class is used to validate against fop.xsd file.
 */
class AccessibilityProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Accessibility_Properties_List_Not';
        parent::__construct([
            new TypedAttribute('source-document', SourceDocumentType::class),
            new TypedAttribute('role', StringType::class),
        ]);
    }
}
