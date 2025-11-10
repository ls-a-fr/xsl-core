<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\TagGroups\Xsl;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Indexing\IndexKeyReference;
use Lsa\Xsl\Core\Tags\Indexing\IndexPageCitationList;
use Lsa\Xsl\Core\Tags\Indexing\IndexPageCitationListSeparator;
use Lsa\Xsl\Core\Tags\Indexing\IndexPageCitationRangeSeparator;
use Lsa\Xsl\Core\Tags\Indexing\IndexPageNumberPrefix;
use Lsa\Xsl\Core\Tags\Indexing\IndexPageNumberSuffix;
use Lsa\Xsl\Core\Tags\Indexing\IndexRangeBegin;
use Lsa\Xsl\Core\Tags\Indexing\IndexRangeEnd;

/**
 * List of formatting objects for indexing
 *
 * @see https://www.w3.org/TR/xsl11/#d0e13293
 */
class IndexingList extends Choice
{
    public function __construct()
    {
        parent::__construct(
            new Element(IndexPageNumberPrefix::class),
            new Element(IndexPageNumberSuffix::class),
            new Element(IndexRangeBegin::class),
            new Element(IndexRangeEnd::class),
            new Element(IndexKeyReference::class),
            new Element(IndexPageCitationList::class),
            new Element(IndexPageCitationListSeparator::class),
            new Element(IndexPageCitationRangeSeparator::class)
        );
    }
}
