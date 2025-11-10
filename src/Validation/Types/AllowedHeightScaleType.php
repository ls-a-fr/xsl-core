<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * Validates AllowedHeightScale property.
 *
 * `<percentage>`: Specifies a constraint on the scale-factor to match the specified value.
 *
 * @link https://www.w3.org/TR/xsl11/#allowed-height-scale
 */
class AllowedHeightScaleType extends Type implements Validator
{
    /**
     * No constraint on the scale-factor.
     */
    public const ANY = 'any';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            (new CompoundValidator(
                min: 1,
                validator: new UnionValidator(
                    new PercentageType(),
                    new EnumValidator([
                        self::ANY,
                    ])
                )
            ))->separator(' ')->shouldTrim(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
