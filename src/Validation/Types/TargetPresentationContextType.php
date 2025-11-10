<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\UriSpecificationType;

/**
 * Validates TargetPresentationContext property.
 *
 * `<uri-specification>`:
 *
 * Specifies the limited context in which the resource should be presented if the external destination
 * is a resource of a processed structured media type for which a limited presentational context makes
 * sense (e.g., XML, XHTML, SVG).
 *
 * This property is ignored if the "external-destination" property has an empty string value or if the
 * external destination is not of a processed structured media type for which a limited presentational
 * context makes sense.
 *
 * Note: For example, an XML and XSL implementation may parse the XML document, but begin XSLT
 * processing by applying templates to the node set indicated by the "target-presentation-context"
 * property.
 *
 * Note: If this is a node other than the document root, numbering and other contextually-dependent
 * presentation may differ between implementations. Some implementations may want to make this tradeoff
 * for memory or performance reasons.
 *
 * @see https://www.w3.org/TR/xsl11/#target-presentation-context
 */
class TargetPresentationContextType extends Type implements Validator
{
    /**
     * The context specified by the "target-processing-context" property shall be used.
     */
    public const USE_TARGET_PROCESSING_CONTEXT = 'use-target-processing-context';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new UriSpecificationType(),
            new EnumValidator([
                self::USE_TARGET_PROCESSING_CONTEXT,
            ])
        ));
    }
}
