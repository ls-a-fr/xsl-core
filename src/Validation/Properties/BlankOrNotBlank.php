<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\BlankOrNotBlankType;

/**
 * XSL Definition:
 * - Value:  blank | not-blank | any | inherit
 * - Initial:  any
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property forms part of a selection rule to determine if the referenced page-master is
 * eligible for selection at this point in the page-sequence.
 */
class BlankOrNotBlank extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('blank-or-not-blank', BlankOrNotBlankType::class);
    }

    public function getDefaultValue(): string
    {
        return BlankOrNotBlankType::ANY;
    }
}
