<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xml\Utils\Validation\Xml\CharacterType;

/**
 * Validates GroupingSeparator property.
 *
 * @see https://www.w3.org/TR/xsl11/#grouping-separator
 */
class GroupingSeparatorType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new EnumValidator(['']),
            new CharacterType()
        ));
    }
}
