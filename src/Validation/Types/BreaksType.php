<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates BreakAfter and BreakBefore properties.
 *
 * @see https://www.w3.org/TR/xsl11/#d0e26492
 */
class BreaksType extends Type implements Validator
{
    /**
     * No break shall be forced.
     * Note: Page breaks may occur as determined by the formatter's processing as affected by the
     * "widow", "orphan", "keep-with-next", "keep-with-previous", and "keep-together" properties.
     */
    public const AUTO = 'auto';

    /**
     * Imposes a break condition with a context consisting of column-areas.
     */
    public const COLUMN = 'column';

    /**
     * Imposes a break condition with a context consisting of page-areas.
     */
    public const PAGE = 'page';

    /**
     * Imposes a break condition with a context consisting of even
     * page-areas (a blank page may be generated if necessary).
     */
    public const EVEN_PAGE = 'even-page';

    /**
     * Imposes a break condition with a context consisting of odd page-areas
     * (a blank page may be generated if necessary).
     */
    public const ODD_PAGE = 'odd-page';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::COLUMN,
            self::PAGE,
            self::EVEN_PAGE,
            self::ODD_PAGE,
            self::INHERIT,
        ]));
    }
}
