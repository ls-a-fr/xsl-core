<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\MergePagesAcrossIndexKeyReferences;
use Lsa\Xsl\Core\Validation\Properties\MergeRangesAcrossIndexKeyReferences;
use Lsa\Xsl\Core\Validation\Properties\MergeSequentialPageNumbers;
use Lsa\Xsl\Core\Validation\Properties\PageNumberTreatment;
use Lsa\Xsl\Core\Validation\Properties\RefIndexKey;

/**
 * Properties for indexing
 *
 * @see https://www.w3.org/TR/xsl11/#d0e28521
 */
class IndexingProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            IndexClass::class,
            IndexKey::class,
            PageNumberTreatment::class,
            MergeRangesAcrossIndexKeyReferences::class,
            MergeSequentialPageNumbers::class,
            MergePagesAcrossIndexKeyReferences::class,
            RefIndexKey::class,
        ]);
    }
}
