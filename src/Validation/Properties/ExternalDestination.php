<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\ExternalDestinationType;

/**
 * XSL Definition:
 * - Value:   empty string | `<uri-specification>`
 * - Initial:     empty string
 * - Inherited:   no
 * - Percentages:     N/A
 * - Media:   interactive
 *
 * `<uri-specification>`
 *     Specifies the destination resource (or, when a fragment identifier is given, sub-resource).
 *
 * How the destination (sub-)resource is used and/or displayed is application and
 * implementation-dependent. In typical browsing applications, the destination resource is displayed in
 * the browser positioned so that some rendered portion resulting from the processing of some part of the
 * specific destination sub-resource indicated by the fragment identifier is in view.
 */
class ExternalDestination extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('external-destination', ExternalDestinationType::class);
    }

    public function getDefaultValue(): string
    {
        return '';
    }
}
