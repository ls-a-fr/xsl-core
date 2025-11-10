<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates LineStackingStrategy property.
 *
 * @link https://www.w3.org/TR/xsl11/#line-stacking-strategy
 */
class LineStackingStrategyType extends Type implements Validator
{
    /**
     * Uses the per-inline-height-rectangle as described in 4.5 Line-areas.
     * Note: This matches CSS's line-height and positioning strategy.
     */
    public const LINE_HEIGHT = 'line-height';

    /**
     * Uses the nominal-requested-line-rectangle as described in 4.5 Line-areas.
     */
    public const FONT_HEIGHT = 'font-height';

    /**
     * Uses the maximal-line-rectangle as described in 4.5 Line-areas.
     */
    public const MAX_HEIGHT = 'max-height';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::LINE_HEIGHT,
            self::FONT_HEIGHT,
            self::MAX_HEIGHT,
            self::INHERIT,
        ]));
    }
}
