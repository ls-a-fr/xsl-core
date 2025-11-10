<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\ForcePageCountType;

/**
 * XSL Definition:
 * - Value:  auto | even | odd | end-on-even | end-on-odd | no-force | inherit
 * - Initial:  auto
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual

 * Force-page-count is used to impose a constraint on the number of pages in a page-sequence. In the
 * event that this constraint is not satisfied, an additional page will be added to the end of the
 * sequence. This page becomes the "last" page of that sequence.
 *
 * The values have the following meanings.
 *
 * @link https://www.w3.org/TR/xsl11/#force-page-count
 */
class ForcePageCount extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('force-page-count', ForcePageCountType::class);
    }

    public function getDefaultValue(): string
    {
        return ForcePageCountType::AUTO;
    }
}
