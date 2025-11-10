<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates Scaling property.
 *
 * @link https://www.w3.org/TR/xsl11/#scaling
 */
class ScalingType extends Type implements Validator
{
    /**
     * Scaling should preserve the aspect ratio.
     */
    public const UNIFORM = 'uniform';

    /**
     * Scaling need not preserve the aspect ratio.
     */
    public const NON_UNIFORM = 'non-uniform';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::UNIFORM,
            self::NON_UNIFORM,
            self::INHERIT,
        ]));
    }
}
