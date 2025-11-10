<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\InitialPageNumberType;

/**
 * XSL Definition:
 * - Value: auto | auto-odd | auto-even | `<number>` | inherit
 * - Initial: auto
 * - Inherited: no
 * - Percentages: N/A
 * - Media: visual
 *
 * Sets the initial folio number to be used in this page-sequence.
 *
 * @link https://www.w3.org/TR/xsl11/#initial-page-number
 */
class InitialPageNumber extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('initial-page-number', InitialPageNumberType::class);
    }

    public function getDefaultValue(): string
    {
        return InitialPageNumberType::AUTO;
    }
}
