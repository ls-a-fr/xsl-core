<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;

/**
 * Validates Height property.
 *
 * @see https://www.w3.org/TR/xsl11/#height
 */
class HeightType extends Type implements Validator
{
    /**
     * The height depends on the values of other properties.
     */
    public const AUTO = 'auto';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new PositiveLengthType(),
            new EnumValidator([
                self::AUTO,
                self::INHERIT,
            ])
        ));
    }
}
