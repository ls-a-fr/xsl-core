<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\RefIndexKeyType;

/**
 * XSL Definition:
 * - Value:  <string>
 * - Initial:  none, value required
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  all
 *
 * References an index key.
 *
 * Reference to the objects having an "index-key" trait equal to the specified "ref-index-key". It is an
 * error if there are no formatting objects with the specified index key.
 *
 * @link https://www.w3.org/TR/xsl11/#ref-index-key
 */
class RefIndexKey extends TypedAttribute
{
    public function __construct()
    {
        parent::__construct('ref-index-key', RefIndexKeyType::class);
    }
}
