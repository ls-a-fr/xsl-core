<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates OddOrEven property.
 *
 * @link https://www.w3.org/TR/xsl11/#odd-or-even
 */
class OddOrEvenType extends Type implements Validator
{
    /**
     * This master is eligible for selection if the folio number is odd.
     */
    public const ODD = 'odd';

    /**
     * This master is eligible for selection if the folio number is even.
     */
    public const EVEN = 'even';

    /**
     * This master is eligible for selection regardless of whether the folio number is odd or even.
     * Note: "Folio number" refers to the folio-number trait for the page to be generated.
     */
    public const ANY = 'any';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::ODD,
            self::EVEN,
            self::ANY,
            self::INHERIT,
        ]));
    }
}
