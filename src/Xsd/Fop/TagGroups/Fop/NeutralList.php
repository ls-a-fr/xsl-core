<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\TagGroups\Fop;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Other\RetrieveMarker;
use Lsa\Xsl\Core\Tags\Other\Wrapper;

/**
 * This class is used to validate against fop.xsd file.
 */
class NeutralList extends Choice
{
    use HasName;

    public function __construct()
    {
        $this->name = 'neutral_List_FOP';

        parent::__construct(
            new Element(Wrapper::class),
            new Element(RetrieveMarker::class)
        );
    }
}
