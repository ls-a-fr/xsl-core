<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates RetrieveBoundaryWithinTable property.
 *
 * @link https://www.w3.org/TR/xsl11/#retrieve-boundary-within-table
 */
class RetrieveBoundaryWithinTableType extends Type implements Validator
{
    /**
     * The retrieve scope area set is limited to the primary retrieve scope area and the
     * retrieve scope areas that precede the primary retrieve scope area.
     */
    public const TABLE = 'table';

    /**
     * The retrieve scope area set is limited to the primary retrieve scope area.
     */
    public const TABLE_FRAGMENT = 'table-fragment';

    /**
     * The retrieve scope area set is limited to the primary retrieve scope area and the retrieve
     * scope areas that both precede this primary retrieve scope and are on the same page as the
     * primary retrieve scope area.
     */
    public const PAGE = 'page';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::TABLE,
            self::TABLE_FRAGMENT,
            self::PAGE,
        ]));
    }
}
