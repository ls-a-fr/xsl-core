<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;

/**
 * Maximum value for inline-progression-dimension.
 *
 * @see https://www.w3.org/TR/xsl11/#inline-progression-dimension
 */
class InlineProgressionDimensionMaximumType extends Type implements Validator
{
    /**
     * A value of "auto" may be specified for inline-progression-dimension.maximum. This indicates
     * that there is no absolute maximum limit, and the object may be sized to its intrinsic size.
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
