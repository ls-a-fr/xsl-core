<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\InternalDestinationType;

/**
 * XSL Definition:
 * - Value:   empty string | `<idref>`
 * - Initial:     empty string
 * - Inherited:   no
 * - Percentages:     N/A
 * - Media:   interactive
 *
 * Specifies the destination flow object within the formatting object tree. This property allows the
 * destination flow object node to be explicitly specified.
 *
 * @link https://www.w3.org/TR/xsl11/#internal-destination
 */
class InternalDestination extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('internal-destination', InternalDestinationType::class);
    }

    public function getDefaultValue(): string
    {
        return '';
    }
}
