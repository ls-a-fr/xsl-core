<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates HyphenationKeep property.
 *
 * @link https://www.w3.org/TR/xsl11/#hyphenation-keep
 */
class HyphenationKeepType extends Type implements Validator
{
    /**
     * No restriction applies. The word may be hyphenated at the end of any region.
     */
    public const AUTO = 'auto';

    /**
     * Both parts of a hyphenated word shall lie within a single column.
     */
    public const COLUMN = 'column';

    /**
     * Both parts of a hyphenated word shall lie within a single page.
     */
    public const PAGE = 'page';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::COLUMN,
            self::PAGE,
            self::INHERIT,
        ]));
    }
}
