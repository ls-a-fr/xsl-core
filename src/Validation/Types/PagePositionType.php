<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates PagePositionType property.
 *
 * @see https://www.w3.org/TR/xsl11/#page-position
 */
class PagePositionType extends Type implements Validator
{
    /**
     * This master is eligible for selection if this is the only page (i.e. the page is both first and
     * last) page in the page-sequence.
     */
    public const ONLY = 'only';

    /**
     * This master is eligible for selection if this is the first page in the page-sequence.
     */
    public const FIRST = 'first';

    /**
     * This master is eligible for selection if this is the last page in the page-sequence.
     */
    public const LAST = 'last';

    /**
     * This master is eligible for selection if this is not the first page nor the last page in the
     * page-sequence.
     */
    public const REST = 'rest';

    /**
     * This master is eligible for selection regardless of page positioning within the page-sequence.
     */
    public const ANY = 'any';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::ONLY,
            self::FIRST,
            self::LAST,
            self::REST,
            self::ANY,
            self::INHERIT,
        ]));
    }
}
