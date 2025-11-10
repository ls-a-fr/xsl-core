<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates WrapOption property.
 *
 * @see https://www.w3.org/TR/xsl11/#wrap-option
 */
class WrapOptionType extends Type implements Validator
{
    /**
     * No line-wrapping will be performed.
     * In the case when lines are longer than the available width of the content-rectangle, the
     * overflow will be treated in accordance with the "overflow" property specified on the
     * reference-area.
     */
    public const NO_WRAP = 'no-wrap';

    /**
     * Line-breaking will occur if the line overflows the available block width. No special markers
     * or other treatment will occur.
     */
    public const WRAP = 'wrap';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::NO_WRAP,
            self::WRAP,
            self::INHERIT,
        ]));
    }
}
