<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\TreatAsWordSpaceType;

/**
 * XSL Definition:
 * - Value:  auto | true | false | inherit
 * - Initial:  auto
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property determines if the character shall be treated as a word space or as a normal letter.
 *
 * @link https://www.w3.org/TR/xsl11/#treat-as-word-space
 */
class TreatAsWordSpace extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('treat-as-word-space', TreatAsWordSpaceType::class);
    }

    public function getDefaultValue(): string
    {
        return TreatAsWordSpaceType::AUTO;
    }
}
