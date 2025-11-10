<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\MaximumRepeatsType;

/**
 * XSL Definition:
 * - Value:  <number> | no-limit | inherit
 * - Initial:  no-limit
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies the constraint on the maximum number of pages in the sub-sequence of pages that may be generated
 * by an fo:page-sequence that uses the fo:repeatable-page-master-reference or
 * fo:repeatable-page-master-alternatives on which this property is specified.
 *
 * @link https://www.w3.org/TR/xsl11/#maximum-repeats
 */
class MaximumRepeats extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('maximum-repeats', MaximumRepeatsType::class);
    }

    public function getDefaultValue(): string
    {
        return MaximumRepeatsType::NO_LIMIT;
    }
}
