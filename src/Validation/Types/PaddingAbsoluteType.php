<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Css\PaddingWidthType;

/**
 * Specifies the width of the padding on the top-edge of a block-area or inline-area. Unlike
 * margin properties, values for padding properties cannot be negative.
 *
 * @see CSS2 Reference: "padding-top" property
 */
class PaddingAbsoluteType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new PaddingWidthType(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
