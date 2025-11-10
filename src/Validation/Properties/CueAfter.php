<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\CueSingleType;

/**
 * CSS2 Definition:
 * Value:  `<uri-specification>` | none | inherit
 * Initial:  none
 * Inherited:  no
 * Percentages:  N/A
 * Media:  aural
 *
 * @link https://www.w3.org/TR/xsl11/#cue-after
 * @link http://www.w3.org/TR/REC-CSS2/aural.html#propdef-cue-after
 */
class CueAfter extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('cue-after', CueSingleType::class);
    }

    public function getDefaultValue(): string
    {
        return CueSingleType::NONE;
    }
}
