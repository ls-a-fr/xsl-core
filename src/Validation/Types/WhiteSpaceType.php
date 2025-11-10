<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates WhiteSpace property.
 *
 * @link https://www.w3.org/TR/xsl11/#white-space
 */
class WhiteSpaceType extends Type implements Validator
{
    /**
     * This value directs user agents to collapse sequences of whitespace, and break lines as
     * necessary to fill line boxes. Additional line breaks may be created by occurrences of
     * "\A" in generated content (e.g., for the BR element in HTML).
     */
    public const NORMAL = 'normal';

    /**
     * This value prevents user agents from collapsing sequences of whitespace. Lines are only
     * broken at newlines in the source, or at occurrences of "\A" in generated content.
     */
    public const PRE = 'pre';

    /**
     * This value collapses whitespace as for 'normal', but suppresses line breaks within text
     * except for those created by "\A" in generated content (e.g., for the BR element in HTML).
     */
    public const NOWRAP = 'nowrap';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::NORMAL,
            self::PRE,
            self::NOWRAP,
            self::INHERIT,
        ]));
    }
}
