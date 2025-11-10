<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\SourceDocumentType;

/**
 * XSL Definition:
 * - Value:  `<uri-specification>` [`<uri-specification>`]* | none | inherit
 * - Initial:  none
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  all
 *
 * This property provides a pointer back to the original XML document(s) used to create this formatting
 * object tree, in accordance with the Dublin Core definition of "Source" ("A Reference to a resource
 * from which the present resource is derived." See: http://purl.org/DC/documents/rec-dces-19990702.htm.)
 * The value is not validated by and has no inherent standardized semantics for any XSL processor.
 *
 * W3C Accessibility guidelines, http://www.w3.org/TR/WCAG20/, http://www.w3.org/TR/ATAG10/, and
 * http://www.w3.org/TR/UAAG10/, strongly encourage the use of this property either on the fo:root or on
 * the first formatting object generated from a given source document.
 *
 * The URI-specification is useful for alternate renderers (aural readers, etc.) whenever the structure of
 * the formatting object tree is inappropriate for that renderer.
 *
 * @link https://www.w3.org/TR/xsl11/#source-document
 */
class SourceDocument extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('source-document', SourceDocumentType::class);
    }

    public function getDefaultValue(): string
    {
        return SourceDocumentType::NONE;
    }
}
