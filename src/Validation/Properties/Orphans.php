<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\OrphansType;

/**
 * CSS2 Definition:
 * - Value:  <integer> | inherit
 * - Initial:  2
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * See definition of property widows (7.20.7 widows).
 *
 * @link https://www.w3.org/TR/xsl11/#orphans
 * @link http://www.w3.org/TR/REC-CSS2/page.html#propdef-orphans
 * @link https://www.w3.org/TR/xsl11/#widows
 */
class Orphans extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('orphans', OrphansType::class);
    }

    public function getDefaultValue(): string
    {
        return '2';
    }
}
