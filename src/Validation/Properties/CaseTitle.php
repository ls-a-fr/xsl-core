<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Validation\Xml\NcNameType;

/**
 * XSL Definition:
 * - Value:  `<string>`
 * - Initial:  none, a value is required
 * - Inherited:  no, a value is required
 * - Percentages:  N/A
 * - Media:  interactive
 *
 * `<string>`:
 *   Specifies a descriptive title for the fo:multi-case. The title can be displayed in a menu to
 *   represent this fo:multi-case when an fo:multi-toggle object names several fo:multi-case objects
 *   as allowed destinations.
 *
 * @link https://www.w3.org/TR/xsl11/#case-title
 */
class CaseTitle extends TypedAttribute
{
    public function __construct()
    {
        parent::__construct('case-title', NcNameType::class);
    }
}
