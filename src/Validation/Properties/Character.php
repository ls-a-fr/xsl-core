<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Validation\Xml\CharacterType;

/**
 * XSL Definition:
 * - Value:  `<character>`
 * - Initial:  N/A, value is required
 * - Inherited:  no, a value is required
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies the Unicode character to be presented.
 *
 * @link https://www.w3.org/TR/xsl11/#character
 */
class Character extends TypedAttribute
{
    public function __construct()
    {
        parent::__construct('character', CharacterType::class);
    }
}
