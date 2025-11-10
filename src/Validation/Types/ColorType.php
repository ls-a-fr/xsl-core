<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\BaseColorType;

/**
 * Validates the Color property.
 *
 * @see https://www.w3.org/TR/xsl11/#color
 */
class ColorType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return new UnionValidator(
            new EnumValidator([
                self::INHERIT,
            ]),
            new BaseColorType()
        );
    }
}
