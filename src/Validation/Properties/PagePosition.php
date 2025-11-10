<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\PagePositionType;

/**
 * XSL Definition:
 * - Value:   only | first | last | rest | any | inherit
 * - Initial:     any
 * - Inherited:   no
 * - Percentages:     N/A
 * - Media:   visual
 *
 * This property forms part of a selection rule to determine if the referenced page-master is eligible
 * for selection at this point in the page-sequence.
 *
 * Note: Several of these values can be true simultaneously; for example, 'any' is always true and 'only'
 * is true when both 'first' and 'last' are true. For that reason, it is necessary to order the
 * fo:conditional-page-master-references so that the least inclusive test is performed before the more
 * inclusive test which are also true.
 */
class PagePosition extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('page-position', PagePositionType::class);
    }

    public function getDefaultValue(): string
    {
        return PagePositionType::ANY;
    }
}
