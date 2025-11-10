<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\LetterValueType;

/**
 * XSL Definition:
 * - Value:  auto | alphabetic | traditional
 * - Initial:  auto
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  all
 *
 * This property is defined in [XSLT]: Number to String Conversion Attributes.
 *
 * @link https://www.w3.org/TR/xsl11/#letter-value
 * @link https://www.w3.org/TR/xslt-30/#convert
 */
class LetterValue extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('letter-value', LetterValueType::class);
    }

    public function getDefaultValue(): string
    {
        return LetterValueType::AUTO;
    }
}
