<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates RuleStyle property.
 *
 * @link https://www.w3.org/TR/xsl11/#rule-style
 */
class RuleStyleType extends Type implements Validator
{
    /**
     * No rule, forces rule-thickness to 0.
     */
    public const NONE = 'none';

    /**
     * The rule is a series of dots.
     */
    public const DOTTED = 'dotted';

    /**
     * The rule is a series of short line segments.
     */
    public const DASHED = 'dashed';

    /**
     * The rule is a single line segment.
     */
    public const SOLID = 'solid';

    /**
     * The rule is two solid lines. The sum of the two lines and the space between them equals the
     * value of "rule-thickness".
     */
    public const DOUBLE = 'double';

    /**
     * The rule looks as though it were carved into the canvas. (Top/left half of the rule's thickness
     * is the color specified; the other half is white.)
     */
    public const GROOVE = 'groove';

    /**
     * The opposite of "groove", the rule looks as though it were coming out of the canvas.
     * (Bottom/right half of the rule's thickness is the color specified; the other half is white.)
     */
    public const RIDGE = 'ridge';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::NONE,
            self::DOTTED,
            self::DASHED,
            self::SOLID,
            self::DOUBLE,
            self::GROOVE,
            self::RIDGE,
            self::INHERIT,
        ]));
    }
}
