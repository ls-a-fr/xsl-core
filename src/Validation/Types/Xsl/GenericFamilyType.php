<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * <generic-family>
 * The following generic families are defined: "serif", "sans-serif", "cursive", "fantasy", and
 * "monospace". Please see the section on generic font families for descriptions of these families.
 * Generic font family names are keywords, and therefore must not be quoted.
 */
class GenericFamilyType extends Type implements Validator
{
    public const SERIF = 'serif';

    public const SANS_SERIF = 'sans-serif';

    public const CURSIVE = 'cursive';

    public const FANTASY = 'fantasy';

    public const MONOSPACE = 'monospace';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::SERIF,
            self::SANS_SERIF,
            self::CURSIVE,
            self::FANTASY,
            self::MONOSPACE,
        ]));
    }
}
