<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\SpacePrecedenceType;

/**
 * Validates BorderAfterPrecedence, BorderBeforePrecedence, BorderEndPrecedence and BorderStartPrecedence
 * properties.
 *
 * <integer>
 * A numeric precedence specification. A higher value has a higher precedence than a lower one.
 *
 * @link https://www.w3.org/TR/xsl11/#border-after-precedence
 */
class BorderPrecedenceType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new SpacePrecedenceType(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
