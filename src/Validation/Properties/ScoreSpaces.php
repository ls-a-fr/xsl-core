<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\ScoreSpacesType;

/**
 * XSL Definition:
 * - Value:  true | false | inherit
 * - Initial:  true
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Specifies whether the text-decoration property shall be applied to spaces.
 *
 * @link https://www.w3.org/TR/xsl11/#score-spaces
 */
class ScoreSpaces extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('score-spaces', ScoreSpacesType::class);
    }

    public function getDefaultValue(): string
    {
        return ScoreSpacesType::TRUE;
    }
}
