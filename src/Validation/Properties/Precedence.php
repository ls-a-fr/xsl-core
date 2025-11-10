<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\PrecedenceType;

/**
 * XSL Definition:
 * Value: true | false | inherit
 * Initial: false
 * Inherited: no
 * Percentages: N/A
 * Media: visual
 *
 * Specifies which region (i.e., region-before, region-after, region-start, or region-end) takes precedence
 * in terms of which may extend into the corners of the simple-page-master.
 *
 * @link https://www.w3.org/TR/xsl/#precedence
 */
class Precedence extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('precedence', PrecedenceType::class);
    }

    public function getDefaultValue(): string
    {
        return PrecedenceType::FALSE;
    }
}
