<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * `<length>`:
 * - Sets length for leader-pattern-repeating.
 * - The leader will have an inline-space inserted after each pattern cycle to account for any difference
 *   between the width of the pattern as determined by the font metrics and the width specified in this
 *   property.
 * - If the length specified is less than the value that would be determined via the use-font-metrics choice,
 *   the value of this property is computed as if use-font-metrics choice had been specified.
 *
 * @link https://www.w3.org/TR/xsl11/#leader-pattern-width
 */
class LeaderPatternWidthType extends Type implements Validator
{
    /**
     * Use the width of the leader-pattern as determined from its font metrics.
     */
    public const USE_FONT_METRICS = 'use-font-metrics';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new LengthType(),
            new PercentageType(),
            new EnumValidator([
                self::USE_FONT_METRICS,
                self::INHERIT,
            ])
        ));
    }
}
