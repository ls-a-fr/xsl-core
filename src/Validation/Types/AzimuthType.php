<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CumulativeOptionalValidator;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\AngleType;

/**
 * Validates Azimuth property.
 *
 * @link https://www.w3.org/TR/xsl11/#azimuth
 */
class AzimuthType extends Type implements Validator
{
    /**
     * Same as '270deg'. With 'behind', '270deg'.
     */
    public const LEFT_SIDE = 'left-side';

    /**
     * Same as '300deg'. With 'behind', '240deg'.
     */
    public const FAR_LEFT = 'far-left';

    /**
     * Same as '320deg'. With 'behind', '220deg'.
     */
    public const LEFT = 'left';

    /**
     * Same as '340deg'. With 'behind', '200deg'.
     */
    public const CENTER_LEFT = 'center-left';

    /**
     * Same as '0deg'. With 'behind', '180deg'.
     */
    public const CENTER = 'center';

    /**
     * Same as '20deg'. With 'behind', '160deg'.
     */
    public const CENTER_RIGHT = 'center-right';

    /**
     * Same as '40deg'. With 'behind', '140deg'.
     */
    public const RIGHT = 'right';

    /**
     * Same as '60deg'. With 'behind', '120deg'.
     */
    public const FAR_RIGHT = 'far-right';

    /**
     * Same as '90deg'. With 'behind', '90deg'.
     */
    public const RIGHT_SIDE = 'right-side';

    /**
     * If spatial-azimuth is specified and the output device cannot produce sounds behind the listening
     * position, user agents should convert values in the rearwards hemisphere to forwards hemisphere
     * values.
     */
    public const BEHIND = 'behind';

    /**
     * Moves the sound to the left, relative to the current angle. More precisely, subtracts 20 degrees.
     * Arithmetic is carried out modulo 360 degrees. Note that 'leftwards' is more accurately described as
     * "turned counter-clockwise," since it always subtracts 20 degrees, even if the inherited azimuth is
     * already behind the listener (in which case the sound actually appears to move to the right).
     */
    public const LEFTWARDS = 'leftwards';

    /**
     * Moves the sound to the right, relative to the current angle. More precisely, adds 20 degrees. See
     * 'leftwards' for arithmetic.
     */
    public const RIGHTWARDS = 'rightwards';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new AngleType(),
            (new CumulativeOptionalValidator(
                [
                    [
                        CumulativeOptionalValidator::OPTIONAL,
                        new EnumValidator([
                            self::LEFT_SIDE,
                            self::FAR_LEFT,
                            self::LEFT,
                            self::CENTER_LEFT,
                            self::CENTER,
                            self::CENTER_RIGHT,
                            self::RIGHT,
                            self::FAR_RIGHT,
                            self::RIGHT_SIDE,
                        ]),
                    ],
                    [
                        CumulativeOptionalValidator::OPTIONAL,
                        new EnumValidator([
                            self::BEHIND,
                        ]),
                    ],
                ],
                CumulativeOptionalValidator::AT_LEAST_ONE
            ))->separator(' ')->shouldTrim(),
            new EnumValidator([
                self::LEFTWARDS,
                self::RIGHTWARDS,
                self::INHERIT,
            ]),
        ));
    }
}
