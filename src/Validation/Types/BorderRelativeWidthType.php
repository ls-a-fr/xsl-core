<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthConditionalType;

/**
 * Validates BorderAfterWidth, BorderBeforeWidth, BorderEndWidth and BorderStartWidth properties.
 *
 * @see https://www.w3.org/TR/xsl11/#border-before-width
 * @see https://www.w3.org/TR/xsl11/#d0e4211
 */
class BorderRelativeWidthType extends Type implements Validator
{
    /**
     * A thin border.
     */
    public const THIN = 'thin';

    /**
     * A medium border.
     */
    public const MEDIUM = 'medium';

    /**
     * A thick border.
     */
    public const THICK = 'thick';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new EnumValidator([
                self::THIN,
                self::MEDIUM,
                self::THICK,
                self::INHERIT,
            ]),
            new PositiveLengthType(),
            new LengthConditionalType()
        ));
    }
}
