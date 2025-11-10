<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Css\MarginWidthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * Validates Margin property.
 *
 * @link https://www.w3.org/TR/xsl11/#margin
 */
class MarginType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            (new CompoundValidator(
                min: 1,
                max: 4,
                validator: new UnionValidator(
                    // Same as MarginWidthType, without INHERIT
                    new LengthType(),
                    new PercentageType(),
                    new EnumValidator([
                        MarginWidthType::AUTO,
                    ])
                )
            ))->separator(' ')->shouldTrim(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
