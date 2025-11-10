<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\IntegerType;

/**
 * Validates HyphenationLadderCount and HyphenationRemainCharacterCount properties.
 *
 * @link https://www.w3.org/TR/xsl11/#hyphenation-ladder-count
 */
class HyphenationLadderCountType extends Type implements Validator
{
    /**
     * Any number of successive lines may be hyphenated.
     */
    public const NO_LIMIT = 'no-limit';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new IntegerType(),
            new EnumValidator([
                self::NO_LIMIT,
                self::INHERIT,
            ])
        ));
    }
}
