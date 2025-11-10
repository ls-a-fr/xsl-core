<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\BackgroundAttachmentType;
use Lsa\Xsl\Core\Validation\Types\BackgroundImageType;
use Lsa\Xsl\Core\Validation\Types\BackgroundPositionHorizontalType;
use Lsa\Xsl\Core\Validation\Types\BackgroundPositionVerticalType;
use Lsa\Xsl\Core\Validation\Types\BackgroundRepeatType;

/**
 * This class is used to validate against fop.xsd file.
 */
class BackgroundProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Background_Properties_List_Not';
        parent::__construct([
            new TypedAttribute('background-attachment', BackgroundAttachmentType::class),
            new TypedAttribute('background-image', BackgroundImageType::class),
            new TypedAttribute('background-repeat', BackgroundRepeatType::class),
            new TypedAttribute('background-position-horizontal', BackgroundPositionHorizontalType::class),
            new TypedAttribute('background-position-vertical', BackgroundPositionVerticalType::class),
        ]);
    }
}
