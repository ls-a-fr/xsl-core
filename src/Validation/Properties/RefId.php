<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\Xsl\IdRefType;

/**
 * XSL Definition:
 * - Value:  `<idref>` | inherit
 * - Initial:  none, value required
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  all
 *
 * Reference to the object having the specified unique identifier.
 */
class RefId extends TypedAttribute
{
    public function __construct()
    {
        parent::__construct('ref-id', IdRefType::class);
    }
}
