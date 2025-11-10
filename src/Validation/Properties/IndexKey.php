<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Validation\Xml\StringType;

/**
 * XSL Definition:
 * - Value:  `<string>`
 * - Initial:  none
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  all
 *
 * Associates an index key with the formatting object on which it is specified.
 * All index keys with the same value identify the same index item for the purpose of generating lists
 * of page number citations.
 *
 * @link https://www.w3.org/TR/xsl11/#index-key
 */
class IndexKey extends TypedAttribute
{
    public function __construct()
    {
        parent::__construct('index-key', StringType::class);
    }
}
