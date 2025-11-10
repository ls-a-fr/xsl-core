<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates BackgroundRepeat property.
 *
 * @see https://www.w3.org/TR/xsl11/#background-repeat
 */
class BackgroundRepeatType extends Type implements Validator
{
    /**
     * The image is repeated both horizontally and vertically.
     */
    public const REPEAT = 'repeat';

    /**
     * The image is repeated horizontally only.
     */
    public const REPEAT_X = 'repeat-x';

    /**
     * The image is repeated vertically only.
     */
    public const REPEAT_Y = 'repeat-y';

    /**
     * The image is not repeated: only one copy of the image is drawn.
     */
    public const NO_REPEAT = 'no-repeat';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::REPEAT,
            self::REPEAT_X,
            self::REPEAT_Y,
            self::NO_REPEAT,
            self::INHERIT,
        ]));
    }
}
