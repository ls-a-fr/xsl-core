<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\BackgroundPositionLengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\BackgroundPositionPercentageType;
use Lsa\Xsl\Core\Validation\Types\Xsl\BackgroundPositionTextType;

/**
 * Validates BackgroundPosition property.
 *
 * @link https://www.w3.org/TR/xsl11/#background-position
 */
class BackgroundPositionType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new BackgroundPositionPercentageType(),
            new BackgroundPositionLengthType(),
            new BackgroundPositionTextType(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
