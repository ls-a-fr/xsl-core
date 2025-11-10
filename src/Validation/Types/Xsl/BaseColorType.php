<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Functions\ColorRgbIccType;
use Lsa\Xsl\Core\Validation\Types\Functions\ColorRgbType;
use Lsa\Xsl\Core\Validation\Types\Icc\ColorNameType;

/**
 * Either a string of characters representing a keyword or a
 * color function defined in 5.10.2 Color Functions. The list
 * of keyword color names is: aqua, black, blue, fuchsia, gray,
 * green, lime, maroon, navy, olive, purple, red, silver, teal,
 * white, and yellow.
 * <enumeration value = "red"/>
 * <enumeration value = "blue"/>
 * <enumeration value = "yellow"/>
 * <enumeration value = "green"/>
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class BaseColorType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new ColorHexType(),
            new ColorRgbType(),
            new ColorRgbIccType(),
            new ColorNameType()
        ));
    }
}
