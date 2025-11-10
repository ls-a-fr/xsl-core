<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates BorderCollapse property.
 *
 * @link https://www.w3.org/TR/xsl11/#border-collapse
 */
class BorderCollapseType extends Type implements Validator
{
    /**
     * The value "collapse" selects the collapsing borders model.
     */
    public const COLLAPSE = 'collapse';

    /**
     * The value "collapse-with-precedence" selects the collapsing borders model and the use of the
     * border precedence properties for conflict resolution.
     */
    public const COLLAPSE_WITH_PRECEDENCE = 'collapse-with-precedence';

    /**
     * The value "separate" selects the separated borders border model.
     */
    public const SEPARATE = 'separate';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::COLLAPSE,
            self::COLLAPSE_WITH_PRECEDENCE,
            self::SEPARATE,
            self::INHERIT,
        ]));
    }
}
