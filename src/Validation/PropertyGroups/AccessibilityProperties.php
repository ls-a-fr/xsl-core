<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\Role;
use Lsa\Xsl\Core\Validation\Properties\SourceDocument;

/**
 * Common accessibility properties
 *
 * @see https://www.w3.org/TR/xsl11/#common-accessibility-properties
 */
class AccessibilityProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            SourceDocument::class,
            Role::class,
        ]);
    }
}
