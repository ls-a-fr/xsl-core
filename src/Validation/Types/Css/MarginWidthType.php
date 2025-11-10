<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Css;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * See the CSS2 section on computing widths and margins for behavior.
 * `<length>`:
 *     Specifies a fixed width.
 * `<percentage>`:
 *     The percentage is calculated with respect to the width of the generated box's containing block. This is true for 'margin-top' and 'margin-bottom', except in the page context, where percentages refer to page box height.
 *
 * Negative values for margin properties are allowed, but there may be implementation-specific limits.
 *
 * @see https://www.w3.org/TR/xsl11/#margin-top
 */
class MarginWidthType extends Type implements Validator
{
    /**
     * See the CSS2 section on computing widths and margins for behavior.
     */
    public const AUTO = 'auto';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new LengthType(),
            new PercentageType(),
            new EnumValidator([
                self::AUTO,
                self::INHERIT,
            ])
        ));
    }
}
