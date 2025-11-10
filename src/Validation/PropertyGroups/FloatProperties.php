<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\Clear;
use Lsa\Xsl\Core\Validation\Properties\FloatProperty;
use Lsa\Xsl\Core\Validation\Properties\IntrusionDisplace;

/**
 * Float-related properties
 *
 * @see https://www.w3.org/TR/xsl11/#d0e26080
 */
class FloatProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            Clear::class,
            FloatProperty::class,
            IntrusionDisplace::class,
        ]);
    }
}
