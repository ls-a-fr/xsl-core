<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\NumberType;

/**
 * Validates SpeechRate property.
 *
 * @see https://www.w3.org/TR/xsl11/#speech-rate
 */
class SpeechRateType extends Type implements Validator
{
    /**
     * Same as 80 words per minute.
     */
    public const X_SLOW = 'x-slow';

    /**
     * Same as 120 words per minute.
     */
    public const SLOW = 'slow';

    /**
     * Same as 180 - 200 words per minute.
     */
    public const MEDIUM = 'medium';

    /**
     * Same as 300 words per minute.
     */
    public const FAST = 'fast';

    /**
     * Same as 500 words per minute.
     */
    public const X_FAST = 'x-fast';

    /**
     * Adds 40 words per minute to the current speech rate.
     */
    public const FASTER = 'faster';

    /**
     * Subtracts 40 words per minutes from the current speech rate.
     */
    public const SLOWER = 'slower';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new EnumValidator([
                self::X_SLOW,
                self::SLOW,
                self::MEDIUM,
                self::FAST,
                self::X_FAST,
                self::FASTER,
                self::SLOWER,
                self::INHERIT,
            ]),
            new NumberType()
        ));
    }
}
