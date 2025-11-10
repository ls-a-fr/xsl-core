<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\RelativePositionType;

/**
 * A Property Derived from a CSS2 Property.
 * - Value:  static | relative | inherit
 * - Initial:  static
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * @link https://www.w3.org/TR/xsl11/#relative-position
 */
class RelativePosition extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('relative-position', RelativePositionType::class);
    }

    public function getDefaultValue(): string
    {
        return RelativePositionType::STATIC;
    }
}
