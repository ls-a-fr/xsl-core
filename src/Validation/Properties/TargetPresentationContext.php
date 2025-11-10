<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\TargetPresentationContextType;

/**
 * XSL Definition:
 * - Value:  use-target-processing-context | `<uri-specification>`
 * - Initial:  use-target-processing-context
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  interactive
 *
 * @link https://www.w3.org/TR/xsl11/#target-presentation-context
 */
class TargetPresentationContext extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('target-presentation-context', TargetPresentationContextType::class);
    }

    public function getDefaultValue(): string
    {
        return TargetPresentationContextType::USE_TARGET_PROCESSING_CONTEXT;
    }
}
