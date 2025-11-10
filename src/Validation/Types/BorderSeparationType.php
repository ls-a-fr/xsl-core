<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthBpIpDirectionType;

/**
 * Validates BorderSeparation property.
 *
 * `<length-bp-ip-direction>`
 * - The lengths specify the distance that separates adjacent cell borders in the row-stacking-direction
 *   (given by the block-progression-direction of the table), and in the column-stacking-direction (given
 *   by the inline-progression-direction of the table).
 *
 * @link https://www.w3.org/TR/xsl11/#border-separation
 */
class BorderSeparationType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new LengthBpIpDirectionType(),
            new EnumValidator([
                self::INHERIT,
            ]),
        ));
    }
}
