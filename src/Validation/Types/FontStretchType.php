<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates FontStretch property.
 *
 * @see https://www.w3.org/TR/xsl11/#font-stretch
 */
class FontStretchType extends Type implements Validator
{
    /**
     * The relative keyword "wider" sets the value to the next expanded value above the inherited
     * value (while not increasing it above "ultra-expanded").
     */
    public const WIDER = 'wider';

    /**
     * The relative keyword "narrower" sets the value to the next condensed value below the inherited
     * value (while not decreasing it below "ultra-condensed").
     */
    public const NARROWER = 'narrower';

    /**
     * From narrowest (1) to widest (9) : ultra-condensed (1)
     */
    public const ULTRA_CONDENSED = 'ultra-condensed';

    /**
     * From narrowest (1) to widest (9) : extra-condensed (2)
     */
    public const EXTRA_CONDENSED = 'extra-condensed';

    /**
     * From narrowest (1) to widest (9) : condensed (3)
     */
    public const CONDENSED = 'condensed';

    /**
     * From narrowest (1) to widest (9) : semi-condensed (4)
     */
    public const SEMI_CONDENSED = 'semi-condensed';

    /**
     * From narrowest (1) to widest (9) : normal (5)
     */
    public const NORMAL = 'normal';

    /**
     * From narrowest (1) to widest (9) : semi-expanded (6)
     */
    public const SEMI_EXPANDED = 'semi-expanded';

    /**
     * From narrowest (1) to widest (9) : expanded (7)
     */
    public const EXPANDED = 'expanded';

    /**
     * From narrowest (1) to widest (9) : extra-expanded (8)
     */
    public const EXTRA_EXPANDED = 'extra-expanded';

    /**
     * From narrowest (1) to widest (9) : ultra-expanded (9)
     */
    public const ULTRA_EXPANDED = 'ultra-expanded';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::NORMAL,
            self::WIDER,
            self::NARROWER,
            self::ULTRA_CONDENSED,
            self::EXTRA_CONDENSED,
            self::CONDENSED,
            self::SEMI_CONDENSED,
            self::SEMI_EXPANDED,
            self::EXPANDED,
            self::EXTRA_EXPANDED,
            self::ULTRA_EXPANDED,
            self::INHERIT,
        ]));
    }
}
