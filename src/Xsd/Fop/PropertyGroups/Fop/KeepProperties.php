<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\Xsl\KeepIntegerType;

/**
 * This class is used to validate against fop.xsd file.
 *
 * Applies the value to each component:
 * - keep-with-next.within-line,
 * - keep-with-next.within-column,
 * - keep-with-next.within-page=auto
 */
class KeepProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'keep_Properties_List_FOP';
        parent::__construct([
            new TypedAttribute('keep-with-next', KeepIntegerType::class),
        ]);
    }
}
