<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Iso15924\ScriptAlphabeticType;

/**
 * Validates Script property.
 *
 * @link http://www.w3.org/TR/xsl11/#script
 */
class ScriptType extends Type implements Validator
{
    public const AUTO = 'auto';

    public const NONE = 'none';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new ScriptAlphabeticType(),
            new EnumValidator([
                self::AUTO,
                self::NONE,
                self::INHERIT,
            ]),
        ));
    }
}
