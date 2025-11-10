<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\IntegerType;

/**
 * Validates ZIndex property.
 *
 * `<integer>`:
 * - This integer is the stack level of the generated box in the current stacking context. The box also
 *   establishes a local stacking context in which its stack level is "0".
 *
 * @link https://www.w3.org/TR/xsl11/#z-index
 */
class ZIndexType extends Type implements Validator
{
    /**
     * The stack level of the generated box in the current stacking context is the same as its
     * parent's box. The box does not establish a new local stacking context.
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
            new IntegerType()
        ));
    }
}
