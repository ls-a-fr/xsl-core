<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates MergePagesAcrossIndexKeyReferences, MergeRangesAcrossIndexKeyReferences and
 * MergeSequentialPageNumbers properties.
 *
 * @link https://www.w3.org/TR/xsl11/#merge-pages-across-index-key-references
 * @link https://www.w3.org/TR/xsl11/#merge-ranges-across-index-key-references
 * @link https://www.w3.org/TR/xsl11/#merge-sequential-page-numbers
 */
class MergeSequentialPageNumbersType extends Type implements Validator
{
    /**
     * Merge three or more consecutive page numbers into a range.
     */
    public const MERGE = 'merge';

    /**
     * Do not merge page numbers into ranges.
     */
    public const LEAVE_SEPARATE = 'leave-separate';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::MERGE,
            self::LEAVE_SEPARATE,
        ]));
    }
}
