<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates Hyphenate property.
 *
 * @link https://www.w3.org/TR/xsl11/#hyphenate
 */
class HyphenateType extends Type implements Validator
{
    /**
     * Hyphenation may not be used in the line-breaking algorithm between characters with this value.
     */
    public const TRUE = 'true';

    /**
     * Hyphenation may be used in the line-breaking algorithm between characters with this value.
     */
    public const FALSE = 'false';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::TRUE,
            self::FALSE,
            self::INHERIT,
        ]));
    }
}
