<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\TagGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Other\Marker;

/**
 * This class is used to validate against fop.xsd file.
 */
class MarkerList extends Choice
{
    use HasName;

    public function __construct()
    {
        $this->name = 'marker_List';
        parent::__construct(
            new Element(Marker::class)
        );
    }
}
