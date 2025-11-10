<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Validation\Xml\StringType;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;

/**
 * XSL Definition:
 * - Value:  `<string>`
 * - Initial:  empty string
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  all
 *
 * Associates an index class with a formatting object that also has an index key specified.
 *
 * All elements with an index class that is an empty string are in the same index class. That class is
 * distinct from all other classes.
 * The index-class property is ignored on any formatting object for which an index-key property has not been
 * specified.
 *
 * Note:
 * Index class values enable control over how page numbers are merged into ranges. Page numbers from different
 * classes are not merged so specifying an index class can be used to control, for example, whether a range
 * of pages crossing from the preface into the first chapter will be rendered as "vi-14" or "vi-xx, 1-14".
 *
 * @link https://www.w3.org/TR/xsl11/#index-class
 */
class IndexClass extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('index-class', StringType::class);
    }

    public function getDefaultValue(): string
    {
        return '';
    }
}
