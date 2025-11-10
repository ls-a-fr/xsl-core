<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\SourceType;

/**
 * XSL Definition:
 * - Value:  `<uri-specification>` | inherit
 * - Initial:  none, value required
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies the URI-specification to locate an external resource such as image/graphic data to be included
 * as the content of this object, or color-profile data.
 *
 * @link https://www.w3.org/TR/xsl11/#src
 */
class Source extends TypedAttribute
{
    public function __construct()
    {
        parent::__construct('src', SourceType::class);
    }
}
