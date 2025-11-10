<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\TargetProcessingContextType;

/**
 * XSL Definition:
 * - Value:  document-root | `<uri-specification>`
 * - Initial:  document-root
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  interactive
 *
 * @link https://www.w3.org/TR/xsl11/#target-processing-context
 */
class TargetProcessingContext extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('target-processing-context', TargetProcessingContextType::class);
    }

    public function getDefaultValue(): string
    {
        return TargetProcessingContextType::DOCUMENT_ROOT;
    }
}
