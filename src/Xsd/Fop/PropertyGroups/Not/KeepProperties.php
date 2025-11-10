<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\Xsl\KeepIntegerType;

/**
 * This class is used to validate against fop.xsd file.
 *
 * Applies the value to each component:
 * - keep-with-previous.within-line,
 * - keep-with-previous.within-column,
 * - keep-with-previous.within-page=auto
 */
class KeepProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'keep_Properties_List_Not';
        parent::__construct([
            new TypedAttribute('keep-with-previous', KeepIntegerType::class),
        ]);
    }
}
