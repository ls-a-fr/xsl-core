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
 * Specifies whether or not multiple references to the same page by different fo:index-key-reference
 * formatting objects will be retained as individual cited page items or if only a single cited page item
 * will be retained.
 *
 * @link https://www.w3.org/TR/xsl11/#merge-pages-across-index-key-references
 */
class MergePagesAcrossIndexKeyReferences extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('merge-pages-across-index-key-references', MergeSequentialPageNumbersType::class);
    }

    public function getDefaultValue(): string
    {
        return MergeSequentialPageNumbersType::MERGE;
    }
}
