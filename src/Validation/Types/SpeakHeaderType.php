<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates SpeakHeader property.
 *
 * @see https://www.w3.org/TR/xsl11/#speak-header
 */
class SpeakHeaderType extends Type implements Validator
{
    /**
     * The header is spoken one time, before a series of cells.
     */
    public const ONCE = 'once';

    /**
     * The header is spoken before every pertinent cell.
     */
    public const ALWAYS = 'always';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::ONCE,
            self::ALWAYS,
            self::INHERIT,
        ]));
    }
}
