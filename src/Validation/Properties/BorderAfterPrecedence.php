<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xsl\Core\Contracts\HasDefaultValueWithContext;
use Lsa\Xsl\Core\Validation\Properties\Virtual\BorderPrecedence;
use Lsa\Xsl\Core\Validation\Types\BorderPrecedenceType;

/**
 * XSL Definition:
 * - Value:   force | `<integer>` | inherit
 * - Initial:     fo:table: 6, fo:table-cell: 5, fo:table-column: 4, fo:table-row: 3, fo:table-body: 2,
 *     fo:table-header: 1, fo:table-footer: 0
 * - Inherited:   no
 * - Percentages:     N/A
 * - Media:   visual
 *
 * Specifies the precedence of the border specification on this formatting object for the border-after
 * (and the likes).
 *
 * @link https://www.w3.org/TR/xsl11/#border-after-precedence
 */
class BorderAfterPrecedence extends BorderPrecedence implements HasDefaultValueWithContext
{
    public function __construct()
    {
        parent::__construct('border-after-precedence', BorderPrecedenceType::class);
    }
}
