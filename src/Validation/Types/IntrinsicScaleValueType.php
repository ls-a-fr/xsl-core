<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * Validates IntrinsicScaleValue property.
 *
 * @link https://www.w3.org/TR/xsl11/#intrinsic-scale-value
 */
class IntrinsicScaleValueType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new PercentageType(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
