<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xsl\Core\Validation\Types\Css\BorderStyleType as CssBorderStyleType;

/**
 * Validates BorderAfterStyle, BorderBeforeStyle, BorderBottomStyle, BorderEndStyle, BorderLeftStyle,
 * BorderRightStyle, BorderStartStyle and BorderTopStyle properties.
 *
 * @see https://www.w3.org/TR/xsl11/#border-top-style
 */
class BorderStyleType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        /**
         * BorderStyleType from CSS namespace returns an EnumValidator
         *
         * @var EnumValidator $enumValidator
         */
        $enumValidator = (new CssBorderStyleType())->getValidator();

        return $this->cache(new EnumValidator([
            self::INHERIT,
            ...$enumValidator->values,
        ]));
    }
}
