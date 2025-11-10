<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates Precedence property.
 *
 * @link https://www.w3.org/TR/xsl/#precedence
 */
class PrecedenceType extends Type implements Validator
{
    /**
     * A value of true specifies that the inline-progression-dimension of this region extends up to the
     * start-edge and end-edge of the content-rectangle of the page-reference-area.
     */
    public const TRUE = 'true';

    /**
     * A value of false specifies that this region does not extend up to the start-edge and end-edge of the
     * content-rectangle of the page-reference-area, but has its inline-progression-dimension reduced by the
     * incursions of the adjacent regions.
     */
    public const FALSE = 'false';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::TRUE,
            self::FALSE,
            self::INHERIT,
        ]));
    }
}
