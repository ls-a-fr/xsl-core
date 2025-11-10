<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\BaseColorType;

/**
 * Validates BackgroundAttachment property.
 *
 * @link https://www.w3.org/TR/xsl11/#background-color
 */
class BackgroundColorType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    /**
     * The underlying colors will shine through.
     */
    public const TRANSPARENT = 'transparent';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new BaseColorType(),
            new EnumValidator([
                self::INHERIT,
                self::TRANSPARENT,
            ])
        ));
    }
}
