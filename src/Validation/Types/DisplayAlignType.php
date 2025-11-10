<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates DisplayAlign property.
 *
 * @see https://www.w3.org/TR/xsl11/#display-align
 */
class DisplayAlignType extends Type
{
    /**
     * If the "relative-align" property applies to this formatting object the "relative-align" property
     * is used. If not, this value is treated as if "before" had been specified.
     */
    public const AUTO = 'auto';

    /**
     * The before-edge of the allocation-rectangle of the first child area is placed coincident with the
     * before-edge of the content-rectangle of the reference-area.
     */
    public const BEFORE = 'before';

    /**
     * The child areas are placed such that the distance between the before-edge of the allocation-rectangle
     * of the first child area and the before-edge of the content-rectangle of the reference-area is the
     * same as the distance between the after-edge of the allocation-rectangle of the last child area and
     * the after-edge of the content-rectangle of the reference-area.
     */
    public const CENTER = 'center';

    /**
     * The after-edge of the allocation-rectangle of the last child area is placed coincident with the
     * after-edge of the content-rectangle of the reference-area.
     */
    public const AFTER = 'after';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::BEFORE,
            self::CENTER,
            self::AFTER,
            self::INHERIT,
        ]));
    }
}
