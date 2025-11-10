<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\TextAltitudeType;
use Lsa\Xsl\Core\Validation\Types\TextDepthType;

/**
 * This class is used to validate against fop.xsd file.
 */
class TextOneProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'text_one_Properties_List_Not';
        parent::__construct([
            new TypedAttribute('text-depth', TextDepthType::class),
            new TypedAttribute('text-altitude', TextAltitudeType::class),
        ]);
    }
}
