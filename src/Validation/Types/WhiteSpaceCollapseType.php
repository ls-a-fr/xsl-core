<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates WhiteSpaceCollapse property.
 *
 * @link https://www.w3.org/TR/xsl11/#white-space-collapse
 */
class WhiteSpaceCollapseType extends Type implements Validator
{
    /**
     * Specifies no special action.
     */
    public const FALSE = 'false';

    /**
     * Specifies, for any character flow object such that:
     * - its character is classified as white space in XML, and
     * - it is not, however, a U+000A (linefeed) character, and
     * - the immediately preceding flow object is a character flow object with a character classified as
     * white space in XML or the immediately following flow object is a linefeed,
     * - that flow object shall not generate an area.
     */
    public const TRUE = 'true';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::FALSE,
            self::TRUE,
            self::INHERIT,
        ]));
    }
}
