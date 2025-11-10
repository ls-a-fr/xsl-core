<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates TableOmitFooterAtBreak property.
 *
 * @see https://www.w3.org/TR/xsl11/#table-omit-footer-at-break
 */
class TableOmitFooterAtBreakType extends Type implements Validator
{
    /**
     * This property specifies that the footer should be omitted.
     */
    public const TRUE = 'true';

    /**
     * This property specifies that the footer should not be omitted.
     */
    public const FALSE = 'false';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::TRUE,
            self::FALSE,
        ]));
    }
}
