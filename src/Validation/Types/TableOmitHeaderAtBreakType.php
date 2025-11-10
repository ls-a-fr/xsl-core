<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * The "table-omit-header-at-break" property specifies if a table whose first area is not at
 * the beginning of an area produced by the table should start with the content of the
 * fo:table-header formatting object or not.
 *
 * @see https://www.w3.org/TR/xsl11/#table-omit-header-at-break
 */
class TableOmitHeaderAtBreakType extends Type implements Validator
{
    /**
     * This property specifies that the header should be omitted.
     */
    public const TRUE = 'true';

    /**
     * This property specifies that the header should not be omitted.
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
