<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\MergeSequentialPageNumbersType;

/**
 * XSL Definition:
 * - Value:  merge | leave-separate
 * - Initial:  merge
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  all
 *
 * Specifies whether or not consecutive page numbers from different fo:index-key-reference formatting
 * objects are to be merged into single ranges.
 *
 * @link https://www.w3.org/TR/xsl11/#merge-ranges-across-index-key-references
 */
class MergeRangesAcrossIndexKeyReferences extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('merge-ranges-across-index-key-references', MergeSequentialPageNumbersType::class);
    }

    public function getDefaultValue(): string
    {
        return MergeSequentialPageNumbersType::MERGE;
    }
}
