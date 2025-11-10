<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\ReferenceOrientationType;

/**
 * XSL Definition:
 * - Value:  0 | 90 | 180 | 270 | -90 | -180 | -270 | inherit
 * - Initial:  0
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * The reference-orientation specifies the direction for "top" for the content-rectangle of the
 * "reference-area". This is used as the reference for deriving directions, such as the
 * block-progression-direction, inline-progression-direction, etc. as specified by the "writing-mode"
 * and "direction" properties, and the orientation, placement, and tiling of the background.
 *
 * The "reference-orientation" property is applied only on formatting objects that establish a
 * reference-area. Each value of "reference-orientation" sets the absolute direction for "top",
 * "left", "bottom", and "right"; which is used by "writing-mode", "direction", and all positioning
 * operations that are referenced to the reference-area or are nested within it.
 *
 * The reference-orientation trait on an area is indirectly derived from the "reference-orientation"
 * property on the formatting object that generates the area or the formatting object ancestors of
 * that formatting object.
 *
 * @link https://www.w3.org/TR/xsl11/#reference-orientation
 */
class ReferenceOrientation extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('reference-orientation', ReferenceOrientationType::class);
    }

    public function getDefaultValue(): string
    {
        return '0';
    }
}
