<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;

/**
 * Part from `<space>` data type.
 *
 * Space datatype:
 * A compound datatype, with components: minimum, optimum, maximum, precedence, and conditionality.
 * - The minimum, optimum, and maximum components are <length>s.
 * - The precedence component is either "force" or an <integer>.
 * - The conditionality component is either "discard" or "retain".
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class SpacePrecedenceType extends Type implements Validator
{
    /**
     * The precedence is higher than any <integer>.
     */
    public const FORCE = 'force';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new IntegerType(),
            new EnumValidator([
                self::FORCE,
            ])
        ));
    }
}
