<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\CaseNameType;

/**
 * XSL Definition:
 * - Value:  `<name>`
 * - Initial:  none, a value is required
 * - Inherited:  no, a value is required
 * - Percentages:  N/A
 * - Media:  interactive
 *
 * The purpose of this property is to allow fo:multi-toggle objects to select fo:multi-case objects to switch to.
 *
 * @link https://www.w3.org/TR/xsl11/#case-name
 */
class CaseName extends TypedAttribute
{
    public function __construct()
    {
        parent::__construct('case-name', CaseNameType::class);
    }
}
