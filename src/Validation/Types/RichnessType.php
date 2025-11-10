<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\NumberType;

/**
 * Validates Richness property.
 *
 * `<number>`:
 * - A value between '0' and '100'. The higher the value, the more the voice will carry. A lower value
 *   will produce a soft, mellifluous voice.
 *
 * @link https://www.w3.org/TR/xsl11/#richness
 */
class RichnessType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new NumberType(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
