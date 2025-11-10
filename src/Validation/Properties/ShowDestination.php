<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\ShowDestinationType;

/**
 * XSL Definition:
 * - Value:  replace | new
 * - Initial:  replace
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  interactive
 *
 * Specifies where the destination resource should be displayed.
 *
 * @link https://www.w3.org/TR/xsl11/#show-destination
 */
class ShowDestination extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('show-destination', ShowDestinationType::class);
    }

    public function getDefaultValue(): string
    {
        return ShowDestinationType::REPLACE;
    }
}
