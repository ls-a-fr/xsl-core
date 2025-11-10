<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\PauseAfterType;

/**
 * CSS2 Definition:
 * - Value:   `<time>` | `<percentage>` | inherit
 * - Initial:     depends on user agent
 * - Inherited:   no
 * - Percentages:     see prose
 * - Media:   aural
 *
 * This property specify a pause to be observed after speaking an element's content.
 *
 * @link https://www.w3.org/TR/xsl11/#pause-after
 * @link http://www.w3.org/TR/REC-CSS2/aural.html#propdef-pause-after
 */
class PauseAfter extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('pause-after', PauseAfterType::class);
    }

    public function getDefaultValue(): string
    {
        /**
         * Depends on User-Agent, but CSS2 specifies initial value as 0.
         */
        return '0';
    }
}
