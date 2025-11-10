<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Css;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * The following "datatypes" are used in the definitions of some CSS2 properties. These are not
 * considered datatypes in XSL, as they are merely notational shorthand.
 *
 * @see https://www.w3.org/TR/xsl11/#cssdatat
 */
class BorderStyleType extends Type implements Validator
{
    /**
     * No border. This value forces the computed value of 'border-width' to be '0'.
     */
    public const NONE = 'none';

    /**
     * Same as 'none', except in terms of border conflict resolution for table elements.
     */
    public const HIDDEN = 'hidden';

    /**
     * The border is a series of dots.
     */
    public const DOTTED = 'dotted';

    /**
     * The border is a series of short line segments.
     */
    public const DASHED = 'dashed';

    /**
     * The border is a single line segment.
     */
    public const SOLID = 'solid';

    /**
     * The border is two solid lines. The sum of the two lines and the space between them equals
     * the value of 'border-width'.
     */
    public const DOUBLE = 'double';

    /**
     * The border looks as though it were carved into the canvas.
     */
    public const GROOVE = 'groove';

    /**
     * The opposite of 'groove': the border looks as though it were coming out of the canvas.
     */
    public const RIDGE = 'ridge';

    /**
     * The border makes the entire box look as though it were embedded in the canvas.
     */
    public const INSET = 'inset';

    /**
     * The opposite of 'inset': the border makes the entire box look as though it were coming out
     * of the canvas.
     */
    public const OUTSET = 'outset';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::NONE,
            self::HIDDEN,
            self::DOTTED,
            self::DASHED,
            self::SOLID,
            self::DOUBLE,
            self::GROOVE,
            self::RIDGE,
            self::INSET,
            self::OUTSET,
        ]));
    }
}
