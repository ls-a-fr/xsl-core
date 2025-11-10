<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Validation\Xml\NcNameType;

/**
 * XSL Definition:
 * - Value:  `<name>`
 * - Initial:  none, a value is required
 * - Inherited:  no, a value is required
 * - Percentages:  N/A
 * - Media:  interactive
 *
 * `<name>`: A name to allow pairing of fo:change-bar-begin and fo:change-bar-end elements.
 *
 * This property associates a name with an fo:change-bar-begin or fo:change-bar-end element so that they
 * can be matched to each other even if other fo:change-bar-begin and fo:change-bar-end elements are
 * interspersed. This allows for "straddling pairs" of these elements.
 *
 * @link https://www.w3.org/TR/xsl11/#change-bar-class
 */
class ChangeBarClass extends TypedAttribute
{
    public function __construct()
    {
        parent::__construct('change-bar-class', NcNameType::class);
    }
}
