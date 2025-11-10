<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Css\BorderWidthType as CssBorderWidthType;

/**
 * Validates BorderAfterWidth, BorderBeforeWidth, BorderBottomWidth, BorderEndWidth, BorderLeftWidth,
 * BorderRightWidth, BorderStartWidth and BorderTopWidth properties.
 */
class BorderWidthType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(
            new UnionValidator(
                new CssBorderWidthType(),
                new EnumValidator([
                    self::INHERIT,
                ])
            )
        );
    }
}
