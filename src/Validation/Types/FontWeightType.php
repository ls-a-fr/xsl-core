<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates FontWeight property.
 *
 * @link https://www.w3.org/TR/xsl11/#font-weight
 */
class FontWeightType extends Type implements Validator
{
    /**
     * Same as "400".
     */
    public const NORMAL = 'normal';

    /**
     * Same as "700".
     */
    public const BOLD = 'bold';

    /**
     * Specifies the next weight that is assigned to a font that is darker than the inherited one. If there
     * is no such weight, it simply results in the next darker numerical value (and the font remains
     * unchanged), unless the inherited value was "900", in which case the resulting weight is also "900".
     */
    public const BOLDER = 'bolder';

    /**
     * Specifies the next weight that is assigned to a font that is lighter than the inherited one. If there
     * is no such weight, it simply results in the next lighter numerical value (and the font remains
     * unchanged), unless the inherited value was "100", in which case the resulting weight is also "100".
     */
    public const LIGHTER = 'lighter';

    /**
     * These values form an ordered sequence, where each number indicates a weight that is at least as dark
     * as its predecessor.
     */
    public const WEIGHT_100 = '100';

    /**
     * These values form an ordered sequence, where each number indicates a weight that is at least as dark
     * as its predecessor.
     */
    public const WEIGHT_200 = '200';

    /**
     * These values form an ordered sequence, where each number indicates a weight that is at least as dark
     * as its predecessor.
     */
    public const WEIGHT_300 = '300';

    /**
     * These values form an ordered sequence, where each number indicates a weight that is at least as dark
     * as its predecessor.
     */
    public const WEIGHT_400 = '400';

    /**
     * These values form an ordered sequence, where each number indicates a weight that is at least as dark
     * as its predecessor.
     */
    public const WEIGHT_500 = '500';

    /**
     * These values form an ordered sequence, where each number indicates a weight that is at least as dark
     * as its predecessor.
     */
    public const WEIGHT_600 = '600';

    /**
     * These values form an ordered sequence, where each number indicates a weight that is at least as dark
     * as its predecessor.
     */
    public const WEIGHT_700 = '700';

    /**
     * These values form an ordered sequence, where each number indicates a weight that is at least as dark
     * as its predecessor.
     */
    public const WEIGHT_800 = '800';

    /**
     * These values form an ordered sequence, where each number indicates a weight that is at least as dark
     * as its predecessor.
     */
    public const WEIGHT_900 = '900';

    /**
     * These values form an ordered sequence, where each number indicates a weight that is at least as dark
     * as its predecessor.
     */
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::NORMAL,
            self::BOLD,
            self::BOLDER,
            self::LIGHTER,
            self::WEIGHT_100,
            self::WEIGHT_200,
            self::WEIGHT_300,
            self::WEIGHT_400,
            self::WEIGHT_500,
            self::WEIGHT_600,
            self::WEIGHT_700,
            self::WEIGHT_800,
            self::WEIGHT_900,
            self::INHERIT,
        ]));
    }
}
