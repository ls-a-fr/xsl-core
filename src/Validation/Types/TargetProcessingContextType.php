<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\UriSpecificationType;

/**
 * Validates TargetProcessingContext property.
 *
 * `<uri-specification>`:
 *
 * Specifies the root of a virtual document that the processor preparing the new presentation
 * should process if the external destination is a resource of a processed structured media type
 * (e.g., XML, SVG).
 *
 * This property is ignored if the "external-destination" property has an empty string value or
 * if the external destination is not of a processed structured media type.
 *
 * Note: Not all URI-specifications will be sensible roots, e.g., an XPointer that gives a string
 * range into an XML document.
 *
 * If the root is not valid for the media type the processor may ignore this property.
 *
 * @link https://www.w3.org/TR/xsl11/#target-processing-context
 */
class TargetProcessingContextType extends Type implements Validator
{
    /**
     * The root of the document of the external-destination is used.
     */
    public const DOCUMENT_ROOT = 'document-root';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new UriSpecificationType(),
            new EnumValidator([
                self::DOCUMENT_ROOT,
            ])
        ));
    }
}
