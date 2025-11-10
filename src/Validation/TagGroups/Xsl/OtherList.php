<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\TagGroups\Xsl;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Other\ChangeBarBegin;
use Lsa\Xsl\Core\Tags\Other\ChangeBarEnd;
use Lsa\Xsl\Core\Tags\Other\Marker;
use Lsa\Xsl\Core\Tags\Other\RetrieveMarker;
use Lsa\Xsl\Core\Tags\Other\RetrieveTableMarker;
use Lsa\Xsl\Core\Tags\Other\Wrapper;

/**
 * List of other formatting objects
 *
 * @see https://www.w3.org/TR/xsl11/#d0e14653
 */
class OtherList extends Choice
{
    public function __construct()
    {
        parent::__construct(
            new Element(ChangeBarBegin::class),
            new Element(ChangeBarEnd::class),
            new Element(Wrapper::class),
            new Element(Marker::class),
            new Element(RetrieveMarker::class),
            new Element(RetrieveTableMarker::class)
        );
    }
}
