<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\CompoundTypedAttribute;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\LeaderLengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;

/**
 * XSL Definition:
 * - Value:  `<length-range>` | `<percentage>` | inherit
 * - Initial:  leader-length.minimum=0pt, .optimum=12.0pt, .maximum=100%
 * - Inherited:  yes
 * - Percentages:  refer to the inline-progression-dimension of content-rectangle of parent area
 * - Media:  visual
 *
 * Specifies the minimum, optimum, and maximum length of an fo:leader.
 *
 * `<length-range>`:
 * - leader-length.minimum=sets minimum length for a leader
 * - leader-length.optimum=sets optimum length for a leader
 * - leader-length.maximum=sets maximum length for a leader
 *
 * This property constrains the length of the leader to be between the minimum and maximum lengths.
 * Note: User agents may choose to use the value of "leader-length.optimum" to determine where to break
 * the line, then use the minimum and maximum values during line justification.
 *
 * Leader length values such as:
 * ```xml
 * <fo:leader
 *      leader-length.minimum="0pt"
 *      leader-length.optimum="12pt"
 *      leader-length.maximum="100%">
 * ```
 * would specify constraints that would cause the leader to fill all available space within the current
 * line area as part of the process of justifying that line area.
 *
 * Note: As with all other space and formatting objects within a line area whose
 * inline-progression-dimension provides minimum/optimum/maximum constraints, a leader formatting
 * object's length-range provides further flexibility to the justification process. Though any result
 * that satisfies the specified constraints would conform to this specification, current typographic
 * practice would tend to make use of leader length flexibility in preference to other flexibility
 * (e.g. word spaces) within the same line area when justifying the line. If multiple leader formatting
 * objects occur within the same line area, current typographic practice would tend to make use of the
 * length flexibility of all of them in some implementation defined manner (e.g. equally or
 * proportionally to the specified leader-length.maximum values).
 *
 * @link https://www.w3.org/TR/xsl11/#leader-length
 */
class LeaderLength extends CompoundTypedAttribute
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct(
            'leader-length',
            LeaderLengthType::class,
            [
                'maximum' => LengthType::class,
                'minimum' => LengthType::class,
                'optimum' => LengthType::class,
            ]
        );
    }
}
