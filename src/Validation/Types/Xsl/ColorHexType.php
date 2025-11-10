<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * A color is a set of values used to identify a particular color from a color space. Only RGB [sRGB]
 * (Red, Green, Blue) and ICC (International Color Consortium) [ICC] colors are included in this
 * Recommendation.
 * RGB colors are directly represented in the expression language using a hexadecimal notation.
 *
 * @see https://www.w3.org/TR/xsl11/#d0e5460
 */
class ColorHexType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new RegexValidator('#[0-9A-Fa-f]{6}'));
    }
}
