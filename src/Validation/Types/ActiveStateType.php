<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates ActiveState property.
 *
 * @link https://www.w3.org/TR/xsl11/#active-state
 */
class ActiveStateType extends Type implements Validator
{
    /**
     * This fo:multi-property-set applies if there is an fo:basic-link descendant of the parent
     * fo:multi-properties and that link has not yet been visited.
     *
     * @see https://www.w3.org/TR/xsl11/#absolute-position
     */
    public const LINK = 'link';

    /**
     * This fo:multi-property-set applies if there is an fo:basic-link descendant of the parent
     * fo:multi-properties and that link has been visited.
     */
    public const VISITED = 'visited';

    /**
     * This fo:multi-property-set applies while a normal area returned by the parent
     * fo:multi-properties is being activated by the user. For example, between the times the user
     * presses the mouse button and releases it.
     */
    public const ACTIVE = 'active';

    /**
     * This fo:multi-property-set applies while the user designates a normal area returned by the
     * parent fo:multi-properties (with some pointing device), but does not activate it. For example
     * the cursor (mouse pointer) hovers over such an area.
     */
    public const HOVER = 'hover';

    /**
     * This fo:multi-property-set applies while a normal area returned by the parent fo:multi-properties
     * has the focus (accepts keyboard events or other forms of text input).
     */
    public const FOCUS = 'focus';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::LINK,
            self::VISITED,
            self::ACTIVE,
            self::HOVER,
            self::FOCUS,
        ]));
    }
}
