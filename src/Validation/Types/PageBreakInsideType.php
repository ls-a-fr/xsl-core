<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates PageBreakInside property.
 *
 * @link https://www.w3.org/TR/xsl11/#page-break-inside
 */
class PageBreakInsideType extends Type implements Validator
{
    /**
     * Neither force nor forbid a page break inside the generated box.
     */
    public const AUTO = 'auto';

    /**
     * Avoid a page break inside the generated box.
     */
    public const AVOID = 'avoid';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::AVOID,
            self::INHERIT,
        ]));
    }
}
