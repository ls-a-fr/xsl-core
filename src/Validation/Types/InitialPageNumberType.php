<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\NumberType;

/**
 * Validates InitialPageNumber property.
 *
 * @link https://www.w3.org/TR/xsl11/#initial-page-number
 */
class InitialPageNumberType extends Type implements Validator
{
    /**
     * The initial folio number shall be set to 1 if no previous fo:page-sequence exists in the document.
     * If a preceding page-sequence exists, the initial folio number will be one greater than the last
     * number for that sequence.
     */
    public const AUTO = 'auto';

    /**
     * A value is determined in the same manner as for "auto". If that value is an even number 1 is added.
     */
    public const AUTO_ODD = 'auto-odd';

    /**
     * A value is determined in the same manner as for "auto". If that value is an odd number 1 is added.
     */
    public const AUTO_EVEN = 'auto-even';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new NumberType(),
            new EnumValidator([
                self::AUTO,
                self::AUTO_ODD,
                self::AUTO_EVEN,
                self::INHERIT,
            ])
        ));
    }
}
