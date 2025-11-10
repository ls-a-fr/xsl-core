<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\RetrieveBoundaryType;

/**
 * XSL Definition:
 * - Value:  page | page-sequence | document
 * - Initial:  page-sequence
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  paged
 *
 * The term "containing page" is used here to mean the page that contains the first area generated or
 * returned by the children of the retrieved fo:marker.
 *
 * @link https://www.w3.org/TR/xsl11/#retrieve-boundary
 */
class RetrieveBoundary extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('retrieve-boundary', RetrieveBoundaryType::class);
    }

    public function getDefaultValue(): string
    {
        return RetrieveBoundaryType::PAGE_SEQUENCE;
    }
}
