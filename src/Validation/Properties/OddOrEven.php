<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\OddOrEvenType;

/**
 * XSL Definition:
 * - Value:  odd | even | any | inherit
 * - Initial:  any
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property forms part of a selection rule to determine if the referenced page-master is
 * eligible for selection at this point in the page-sequence.
 *
 * @link https://www.w3.org/TR/xsl11/#odd-or-even
 */
class OddOrEven extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('odd-or-even', OddOrEvenType::class);
    }

    public function getDefaultValue(): string
    {
        return OddOrEvenType::ANY;
    }
}
