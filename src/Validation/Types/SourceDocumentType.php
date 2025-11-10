<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\UriSpecificationMultipleType;

/**
 * Validates SourceDocument property.
 *
 * `<uri-specification>`:
 * - A URI-specification giving a reference to the (sub)resource used as input to the stylesheet.
 *
 * @link https://www.w3.org/TR/xsl11/#source-document
 */
class SourceDocumentType extends Type implements Validator
{
    /**
     * The source document is transient, unknown, or unspecified.
     */
    public const NONE = 'none';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new UriSpecificationMultipleType(),
            new EnumValidator([
                self::NONE,
                self::INHERIT,
            ])
        ));
    }
}
