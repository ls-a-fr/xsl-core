<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\BackgroundColorType;

/**
 * CSS2 Definition:
 * - Value:  `<color>` | transparent | inherit
 * - Initial:  transparent
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property sets the background color of an element, either a `<color>` value or the keyword
 * transparent, to make the underlying colors shine through.
 *
 * @link https://www.w3.org/TR/xsl11/#background-color
 * @link http://www.w3.org/TR/REC-CSS2/colors.html#propdef-background-color
 */
class BackgroundColor extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('background-color', BackgroundColorType::class);
    }

    public function getDefaultValue(): string
    {
        return BackgroundColorType::TRANSPARENT;
    }
}
