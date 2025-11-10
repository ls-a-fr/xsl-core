<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates EmptyCell property.
 *
 * @link https://www.w3.org/TR/xsl11/#empty-cells
 */
class EmptyCellsType extends Type implements Validator
{
    /**
     * When this property has the value "show", borders are drawn around empty cells (like normal cells).
     */
    public const SHOW = 'show';

    /**
     * A value of "hide" means that no borders are drawn around empty cells. Furthermore, if all the cells
     * in a row have a value of "hide" and have no visible content, the entire row behaves as if it had
     * "display: none".
     */
    public const HIDE = 'hide';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::SHOW,
            self::HIDE,
            self::INHERIT,
        ]));
    }
}
