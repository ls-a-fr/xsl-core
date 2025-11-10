<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates PageBreakBefore property.
 *
 * @link https://www.w3.org/TR/xsl11/#page-break-before
 */
class PageBreakBeforeType extends Type implements Validator
{
    /**
     * Neither force nor forbid a page break before (after, inside) the generated box.
     */
    public const AUTO = 'auto';

    /**
     * Always force a page break before (after) the generated box.
     */
    public const ALWAYS = 'always';

    /**
     * Avoid a page break before (after, inside) the generated box.
     */
    public const AVOID = 'avoid';

    /**
     * Force one or two page breaks before (after) the generated box so that the next page is formatted as a
     * left page.
     */
    public const LEFT = 'left';

    /**
     * Force one or two page breaks before (after) the generated box so that the next page is formatted as a
     * right page.
     */
    public const RIGHT = 'right';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::ALWAYS,
            self::AVOID,
            self::LEFT,
            self::RIGHT,
            self::INHERIT,
        ]));
    }
}
