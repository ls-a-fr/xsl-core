<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\UriSpecificationType;

/**
 * Validates BackgroundImage property.
 *
 * @link https://www.w3.org/TR/xsl11/#background-image
 */
class BackgroundImageType extends Type implements Validator
{
    /**
     * No image is specified.
     */
    public const NONE = 'none';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new UriSpecificationType(),
            new EnumValidator([
                self::NONE,
                self::INHERIT,
            ])
        ));
    }
}
