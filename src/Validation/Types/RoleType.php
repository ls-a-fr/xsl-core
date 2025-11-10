<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xml\Utils\Validation\Xml\NcNameType;
use Lsa\Xsl\Core\Validation\Types\Xsl\UriSpecificationType;

/**
 * Validates Role property.
 *
 * @link https://www.w3.org/TR/xsl11/#role
 */
class RoleType extends Type implements Validator
{
    /**
     * Indicates that no semantic tag is cited by this formatting object.
     */
    public const NONE = 'none';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new EnumValidator([
                self::NONE,
                self::INHERIT,
            ]),
            new NcNameType(),
            new UriSpecificationType()
        ));
    }
}
