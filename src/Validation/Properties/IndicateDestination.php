<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\IndicateDestinationType;

/**
 * XSL Definition:
 * - Value:  true | false
 * - Initial:  false
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  interactive
 *
 * @link https://www.w3.org/TR/xsl11/#indicate-destination
 */
class IndicateDestination extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('indicate-destination', IndicateDestinationType::class);
    }

    public function getDefaultValue(): string
    {
        return IndicateDestinationType::FALSE;
    }
}
