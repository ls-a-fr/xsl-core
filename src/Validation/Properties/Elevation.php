<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\ElevationType;

/**
 * CSS2 Definition:
 * - Value:  <angle> | below | level | above | higher | lower | inherit
 * - Initial:  level
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  aural
 *
 * The precise means used to achieve this effect and the number of speakers used to do so are undefined.
 * This property merely identifies the desired end result.
 *
 * @link https://www.w3.org/TR/xsl11/#elevation
 * @link http://www.w3.org/TR/REC-CSS2/aural.html#propdef-elevation
 */
class Elevation extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('elevation', ElevationType::class);
    }

    public function getDefaultValue(): string
    {
        return ElevationType::LEVEL;
    }
}
