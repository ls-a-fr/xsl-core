<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthRangeType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;

/**
 * Validates InlineProgressionDimension property.
 *
 * @link https://www.w3.org/TR/xsl11/#inline-progression-dimension
 */
class InlineProgressionDimensionType extends Type implements Validator
{
    /**
     * No constraint is imposed by this property. The inline-progression-dimension is determined
     * by the formatter taking all other constraints into account.
     *
     * Specifying inline-progression-dimension=auto will set:
     * - `inline-progression-dimension.minimum=auto`
     * - `inline-progression-dimension.optimum=auto`
     * - `inline-progression-dimension.maximum=auto`
     */
    public const AUTO = 'auto';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new EnumValidator([
                self::AUTO,
                self::INHERIT,
            ]),
            new LengthType(),
            new LengthRangeType()
        ));
    }
}
