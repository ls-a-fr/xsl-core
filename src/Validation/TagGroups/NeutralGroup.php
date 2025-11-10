<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\TagGroups;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Indexing\IndexRangeBegin;
use Lsa\Xsl\Core\Tags\Indexing\IndexRangeEnd;
use Lsa\Xsl\Core\Tags\Multi\MultiProperties;
use Lsa\Xsl\Core\Tags\Multi\MultiSwitch;
use Lsa\Xsl\Core\Tags\Other\RetrieveMarker;
use Lsa\Xsl\Core\Tags\Other\Wrapper;

/**
 * A group that encloses every tags behaving neutral
 *
 * @see https://www.w3.org/TR/xsl11/#d0e6532
 */
class NeutralGroup extends Choice
{
    public function __construct()
    {
        parent::__construct(
            new Element(MultiSwitch::class),
            new Element(MultiProperties::class),
            new Element(IndexRangeBegin::class),
            new Element(IndexRangeEnd::class),
            new Element(Wrapper::class),
            new Element(RetrieveMarker::class)
        );
    }
}
