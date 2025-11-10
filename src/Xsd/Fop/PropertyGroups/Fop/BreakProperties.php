<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Fop;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\BreaksType;

/**
 * This class is used to validate against fop.xsd file.
 */
class BreakProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'break_Properties_List_FOP';
        parent::__construct([
            new TypedAttribute('break-after', BreaksType::class),
            new TypedAttribute('break-before', BreaksType::class),
        ]);
    }
}
