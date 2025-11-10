<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Specifies how the formatting object to which it applies is initially displayed.
 *
 * @see https://www.w3.org/TR/xsl11/#starting-state
 */
class StartingStateType extends Type implements Validator
{
    /**
     * The content of the formatting object is a candidate for being displayed initially.
     */
    public const SHOW = 'show';

    /**
     * The content of the formatting object is not a candidate for being displayed initially.
     * Note: For details of the typical usage of this property, see the description of
     * 6.9.3 fo:multi-switch and 6.11.2 fo:bookmark.
     */
    public const HIDE = 'hide';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::SHOW,
            self::HIDE,
        ]));
    }
}
