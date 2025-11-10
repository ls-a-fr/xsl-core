<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;

/**
 * This is the preferred dimension of the area created; if minimum and maximum are identical, the area
 * is of a fixed dimension. If they are, respectively, smaller and larger than optimum, then the area
 * may be adjusted in dimension within that range.
 *
 * @see https://www.w3.org/TR/xsl11/#block-progression-dimension
 */
class BlockProgressionDimensionOptimumType extends Type implements Validator
{
    /**
     * A value of "auto" may be specified for optimum, indicating that there is no preferred dimension,
     * but that the intrinsic or resolved dimension of the area should be used. If minimum and/or
     * maximum are not also auto, then the dimension shall be constrained between those limits.
     */
    public const AUTO = 'auto';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new EnumValidator([
                self::AUTO,
            ]),
            new LengthType()
        ));
    }
}
