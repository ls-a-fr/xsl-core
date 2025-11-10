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
 * Specifies whether or not sequential page numbers within an fo:index-key-reference or
 * fo:index-page-citation-list (if merge-ranges-across-index-key-references is "merge") are merged into
 * a range.
 *
 * @link https://www.w3.org/TR/xsl11/#merge-sequential-page-numbers
 */
class MergeSequentialPageNumbers extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('merge-sequential-page-numbers', MergeSequentialPageNumbersType::class);
    }

    public function getDefaultValue(): string
    {
        return MergeSequentialPageNumbersType::MERGE;
    }
}
