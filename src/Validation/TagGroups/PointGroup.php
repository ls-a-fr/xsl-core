<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\TagGroups;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Other\ChangeBarBegin;
use Lsa\Xsl\Core\Tags\Other\ChangeBarEnd;

/**
 * A group that encloses every tags behaving as a point
 *
 * @see https://www.w3.org/TR/xsl11/#d0e6532
 */
class PointGroup extends Choice
{
    public function __construct()
    {
        parent::__construct(
            new Element(ChangeBarBegin::class),
            new Element(ChangeBarEnd::class)
        );
    }
}
