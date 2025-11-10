<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\UriSpecificationType;

/**
 * Validates TargetStylesheet property.
 *
 * `<uri-specification>`:
 *
 * Specifies the stylesheet that shall be used for processing the resource. This stylesheet shall
 * be used instead of any other stylesheet that otherwise would be used.
 *
 * Note: For example from HTTP header information, XML stylesheet processing instructions, or XHTML
 * style and link elements.
 *
 * This property is ignored if the "external-destination" property has an empty string value or if
 * the external destination is not of a media type that uses stylesheets.
 *
 * Note: In this version of XSL, only a single stylesheet URI-specification is permitted. A future
 * version of XSL may extend the stylesheet specification.
 *
 * @see https://www.w3.org/TR/xsl11/#target-stylesheet
 */
class TargetStylesheetType extends Type implements Validator
{
    /**
     * The implementation will discover stylesheets using its usual methods.
     */
    public const USE_NORMAL_STYLESHEET = 'use-normal-stylesheet';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new UriSpecificationType(),
            new EnumValidator([
                self::USE_NORMAL_STYLESHEET,
            ])
        ));
    }
}
