<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;

/**
 * Validates KeepTogether, KeepWithNext and KeepWithPrevious properties.
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class KeepType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new KeepCompoundType(),
            new EnumValidator([
                self::INHERIT,
            ]),
        ));
    }
}
