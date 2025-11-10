<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\WritingModeType;

/**
 * XSL Definition:
 * - Value:  lr-tb | rl-tb | tb-rl | tb-lr | bt-lr | bt-rl | lr-bt | rl-bt | lr-alternating-rl-bt
 *    | lr-alternating-rl-tb | lr-inverting-rl-bt | lr-inverting-rl-tb | tb-lr-in-lr-pairs | lr | rl | tb
 *    | inherit
 * - Initial:  lr-tb
 * - Inherited:  yes (see prose)
 * - Percentages:  N/A
 * - Media:  visual
 *
 * The writing-mode trait on an area is indirectly derived from the "writing-mode" property on the
 * formatting object that generates the area or the formatting object ancestors of that formatting
 * object. The "writing-mode" property applies only to formatting objects that set up a
 * reference-area. Each value of writing-mode sets all three of the direction traits indicated in
 * each of the value descriptions above on the reference-area. (See the area model for a description
 * of the direction traits and their usage.)
 *
 * Note: To change the "writing-mode" within an fo:flow or fo:static-content, either the
 * fo:block-container or the fo:inline-container, as appropriate, should be used.
 *
 * If one only wishes to change the inline-progression-direction to override the Unicode BIDI-rule,
 * one need not use an fo:inline-container. Instead, one may use the "direction" property on the
 * fo:bidi-override.
 *
 * Implementations must support at least one of the "writing-mode" values defined in this
 * Recommendation.
 *
 * @link https://www.w3.org/TR/xsl11/#writing-mode
 */
class WritingMode extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('writing-mode', WritingModeType::class);
    }

    public function getDefaultValue(): string
    {
        return WritingModeType::LR_TB;
    }
}
