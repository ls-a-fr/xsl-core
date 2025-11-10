<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;

/**
 * Part of KeepType. The value of each component is either "auto", "always", or an `<integer>`.
 *
 * `<integer>`:
 *     Imposes a keep-together condition with strength of the given <integer> in the appropriate context.
 *
 * @link https://www.w3.org/TR/xsl11/#datatype
 */
class KeepIntegerType extends Type implements Validator
{
    /**
     * There are no keep-together conditions imposed by this property.
     */
    public const AUTO = 'auto';

    /**
     * Imposes a keep-together condition with strength "always" in the appropriate context.
     */
    public const ALWAYS = 'always';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new IntegerType(),
            new EnumValidator([
                self::AUTO,
                self::ALWAYS,
            ])
        ));
    }
}
