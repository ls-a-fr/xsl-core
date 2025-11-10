<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\ChangeBarPlacementType;

/**
 * XSL Definition:
 * - Value:  start | end | left | right | inside | outside | alternate
 * - Initial:  start
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property determines where, relative to the column areas, the change bars will occur.
 *
 * @see https://www.w3.org/TR/xsl11/#change-bar-offset
 */
class ChangeBarPlacement extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('change-bar-placement', ChangeBarPlacementType::class);
    }

    public function getDefaultValue(): string
    {
        return ChangeBarPlacementType::START;
    }
}
