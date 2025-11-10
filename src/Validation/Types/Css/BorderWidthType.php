<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Css;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\PositiveLengthType;

/**
 * The following "datatypes" are used in the definitions of some CSS2 properties. These are not
 * considered datatypes in XSL, as they are merely notational shorthand.
 *
 * @see https://www.w3.org/TR/xsl11/#cssdatat
 */
class BorderWidthType extends Type implements Validator
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

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new EnumValidator([
                self::THIN,
                self::MEDIUM,
                self::THICK,
            ]),
            new PositiveLengthType()
        ));
    }
}
