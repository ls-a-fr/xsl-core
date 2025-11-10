<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates ScaleOption property.
 *
 * @link http://www.w3.org/TR/xsl11/#scale-option
 */
class ScaleOptionType extends Type implements Validator
{
    /**
     * Requests the scale-factor applied to the width of the graphic.
     */
    public const WIDTH = 'width';

    /**
     * Requests the scale-factor applied to the height of the graphic.
     */
    public const HEIGHT = 'height';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::WIDTH,
            self::HEIGHT,
            self::INHERIT,
        ]));
    }
}
