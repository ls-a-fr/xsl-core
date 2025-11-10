<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;

/**
 * Validates MaxWidth property.
 *
 * @link https://www.w3.org/TR/xsl11/#max-width
 */
class MaxWidthType extends Type implements Validator
{
    /**
     * (Only on "max-width") No limit on the width of the box.
     */
    public const NONE = 'none';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new PositiveLengthType(),
            new EnumValidator([
                self::NONE,
                self::INHERIT,
            ])
        ));
    }
}
