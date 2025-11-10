<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates WritingMode property.
 *
 * @link https://www.w3.org/TR/xsl11/#writing-mode
 */
class WritingModeType extends Type implements Validator
{
    /**
     * Inline components and text within a line are written left-to-right. Lines and blocks are
     * placed top-to-bottom.
     *
     * Note: Typically, this is the writing-mode for normal "alphabetic" text.
     *
     * Establishes the following directions:
     * - inline-progression-direction to left-to-right. If any right-to-left reading characters
     * are present in the text, the inline-progression-direction for glyph-areas may be further
     * modified by the Unicode BIDI algorithm.
     * - block-progression-direction to top-to-bottom
     * - shift-direction to bottom-to-top
     */
    public const LR_TB = 'lr-tb';

    /**
     * Inline components and text within a line are written right-to-left. Lines and blocks are
     * placed top-to-bottom.
     *
     * Note: Typically, this writing mode is used in Arabic and Hebrew text.
     *
     * Establishes the following directions:
     * - inline-progression-direction to right-to-left. If any left-to-right reading characters or
     * numbers are present in the text, the inline-progression-direction for glyph-areas may be
     * further modified by the Unicode BIDI algorithm.
     * - block-progression-direction to top-to-bottom
     * - shift-direction to bottom-to-top
     */
    public const RL_TB = 'rl-tb';

    /**
     * Inline components and text within a line are written top-to-bottom. Lines and blocks are
     * placed right-to-left.
     *
     * Note: Typically, this writing mode is used in Chinese and Japanese text.
     *
     * Establishes the following directions:
     * - inline-progression-direction to top-to-bottom
     * - block-progression-direction to right-to-left
     * - shift-direction to left-to-right
     */
    public const TB_RL = 'tb-rl';

    /**
     * Inline components and text within a line are stacked top-to-bottom. Lines and blocks are
     * stacked left-to-right.
     *
     * Establishes the following directions:
     * - inline-progression-direction to top-to-bottom
     * - block-progression-direction to left-to-right
     * - shift-direction to right-to-left
     */
    public const TB_LR = 'tb-lr';

    /**
     * Inline components and text within a line are stacked bottom-to-top. Lines and blocks are
     * stacked left-to-right.
     *
     * Establishes the following directions:
     * - inline-progression-direction to bottom-to-top
     * - block-progression-direction to left-to-right
     * - shift-direction to right-to-left
     */
    public const BT_LR = 'bt-lr';

    /**
     * Inline components and text within a line are stacked bottom-to-top. Lines and blocks are
     * stacked right-to-left.
     *
     * Establishes the following directions:
     * - inline-progression-direction to bottom-to-top
     * - block-progression-direction to right-to-left
     * - shift-direction to left-to-right
     */
    public const BT_RL = 'bt-rl';

    /**
     * Inline components and text within a line are stacked left-to-right. Lines and blocks are
     * stacked bottom-to-top.
     *
     * Establishes the following directions:
     * - inline-progression-direction to left-to-right
     * - block-progression-direction to bottom-to-top
     * - shift-direction to bottom-to-top
     */
    public const LR_BT = 'lr-bt';

    /**
     * Inline components and text within a line are stacked right-to-left. Lines and blocks are
     * stacked bottom-to-top.
     *
     * Establishes the following directions:
     * - inline-progression-direction to right-to-left
     * - block-progression-direction to bottom-to-top
     * - shift-direction to bottom-to-top
     */
    public const RL_BT = 'rl-bt';

    /**
     * Inline components and text within the first line are stacked left-to-right, within the
     * second line they are stacked right-to-left; continuing in alternation. Lines and blocks
     * are stacked bottom-to-top.
     *
     * Establishes the following directions:
     * - inline-progression-direction to left-to-right for odd-numbered lines, right-to-left
     * for even-numbered lines
     * - block-progression-direction to bottom-to-top
     * - shift-direction to bottom-to-top
     */
    public const LR_ALTERNATING_RL_BT = 'lr-alternating-rl-bt';

    /**
     * Inline components and text within the first line are stacked left-to-right, within the
     * second line they are stacked right-to-left; continuing in alternation. Lines and blocks
     * are stacked top-to-bottom.
     *
     * Establishes the following directions:
     * - inline-progression-direction to left-to-right for odd-numbered lines, right-to-left
     * for even-numbered lines
     * - block-progression-direction to top-to-bottom
     * - shift-direction to bottom-to-top
     */
    public const LR_ALTERNATING_RL_TB = 'lr-alternating-rl-tb';

    /**
     * Inline components and text within the first line are stacked left-to-right, within the
     * second line they inverted and are stacked right-to-left; continuing in alternation. Lines
     * and blocks are stacked bottom-to-top.
     *
     * Establishes the following directions:
     * - inline-progression-direction to left-to-right for odd-numbered lines, right-to-left
     * for even-numbered lines
     * - block-progression-direction to bottom-to-top
     * - shift-direction to bottom-to-top for odd-numbered lines, top-to-bottom for even-numbered lines
     */
    public const LR_INVERTING_RL_BT = 'lr-inverting-rl-bt';

    /**
     * Inline components and text within the first line are stacked left-to-right, within the
     * second line they inverted and are stacked right-to-left; continuing in alternation. Lines
     * and blocks are stacked top-to-bottom.
     *
     * Establishes the following directions:
     * - inline-progression-direction to left-to-right for odd-numbered lines, right-to-left
     * for even-numbered lines
     * - block-progression-direction to top-to-bottom
     * - shift-direction to bottom-to-top for odd-numbered lines, top-to-bottom for even-numbered lines
     */
    public const LR_INVERTING_RL_TB = 'lr-inverting-rl-tb';

    /**
     * Text is written in two character, left-to-right, pairs. The pairs are then stacked
     * top-to-bottom to form a line. Lines and blocks are stacked left-to-right.
     *
     * Establishes the following directions:
     * - inline-progression-direction to top-to-bottom
     * - block-progression-direction to left-to-right
     * - shift-direction to right-to-left
     *
     * The two glyph areas in the pair are aligned in the inline-progression-direction in the same
     * manner as for lines with a left-to-right inline progression direction using the values of the
     * "alignment-baseline", "alignment-adjust", "baseline-shift", and "dominant-baseline" properties.
     *
     * Note: Informally: the two glyph areas are placed with respect to each other vertically as if
     * they were part of a line written left-to-right.
     *
     * For stacking into lines each pair is considered a glyph area with an allocation rectangle that
     * is the minimum rectangle required to enclose the allocation rectangles of the glyphs in the pair.
     * In the block-progression-direction the pairs are aligned on a line that is half-way between the
     * end-edge of the first glyph area and the start-edge of the second glyph area in the pair.
     */
    public const TB_LR_IN_LR_PAIRS = 'tb-lr-in-lr-pairs';

    /**
     * Shorthand for lr-tb.
     */
    public const LR = 'lr';

    /**
     * Shorthand for rl-tb.
     */
    public const RL = 'rl';

    /**
     * Shorthand for tb-rl.
     */
    public const TB = 'tb';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::LR_TB,
            self::RL_TB,
            self::TB_RL,
            self::TB_LR,
            self::BT_LR,
            self::BT_RL,
            self::LR_BT,
            self::RL_BT,
            self::LR_ALTERNATING_RL_BT,
            self::LR_ALTERNATING_RL_TB,
            self::LR_INVERTING_RL_BT,
            self::LR_INVERTING_RL_TB,
            self::TB_LR_IN_LR_PAIRS,
            self::LR,
            self::RL,
            self::TB,
            self::INHERIT,
        ]));
    }
}
