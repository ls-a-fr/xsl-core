<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * Validates ProvisionalDistanceBetweenStarts property.
 *
 * `<length>`:
 * - The "provisional-distance-between-starts" is specified as a length.
 *
 * `<percentage>`:
 * - The "provisional-distance-between-starts" is specified as a percentage of the
 *   inline-progression-dimension of the closest ancestor block-area.
 *
 * @link https://www.w3.org/TR/xsl/#provisional-distance-between-starts
 */
class ProvisionalDistanceBetweenStartsType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new LengthType(),
            new PercentageType(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
