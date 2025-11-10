<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\BaseColorType;

/**
 * Validates BorderAfterColor, BorderBeforeColor, BorderBottomColor, BorderEndColor, BorderLeftColor,
 * BorderRightColor, BorderStartColor and BorderTopColor properties.
 */
class BorderColorType extends Type implements Validator
{
    /**
     * The border is transparent (though it may have width).
     */
    public const TRANSPARENT = 'transparent';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(
            new UnionValidator(
                new BaseColorType(),
                new EnumValidator([
                    self::INHERIT,
                    self::TRANSPARENT,
                ])
            )
        );
    }
}
