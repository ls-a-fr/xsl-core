<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\TagGroups\Not;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\OutOfLine\FloatElement;

/**
 * This class is used to validate against fop.xsd file.
 */
class FloatList extends Choice
{
    use HasName;

    public function __construct()
    {
        $this->name = 'float_List_Not';
        parent::__construct(
            new Element(FloatElement::class)
        );
    }
}
