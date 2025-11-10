<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates BlankOrNotBlank property.
 *
 * @see https://www.w3.org/TR/xsl11/#blank-or-not-blank
 */
class BlankOrNotBlankType extends Type implements Validator
{
    /**
     * This master is eligible for selection if a page must be generated (e.g., to maintain proper
     * page parity at the start or end of the page-sequence) and there are no areas from any of the
     * fo:flow flows within the containing fo:page-sequence to be put on that page.
     */
    public const BLANK = 'blank';

    /**
     * This master is eligible for selection if this page contains areas from any of the fo:flow
     * flows within the containing fo:page-sequence.
     */
    public const NOT_BLANK = 'not-blank';

    /**
     * This master is always eligible for selection.
     */
    public const ANY = 'any';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::BLANK,
            self::NOT_BLANK,
            self::ANY,
            self::INHERIT,
        ]));
    }
}
