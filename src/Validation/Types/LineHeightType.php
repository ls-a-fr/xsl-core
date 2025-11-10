<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\PositiveSpaceType;

/**
 * Validates LineHeight property.
 *
 * @link https://www.w3.org/TR/xsl11/#line-height
 */
class LineHeightType extends Type implements Validator
{
    /**
     * Tells user agents to set the computed value to a "reasonable" value based on the font size of
     * the element. The value has the same meaning as <number>. We recommend a computed value for
     * "normal" between 1.0 to 1.2.
     */
    public const NORMAL = 'normal';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new PositiveLengthType(),
            new PositiveNumberType(),
            new PositiveSpaceType(),
            new EnumValidator([
                self::NORMAL,
                self::INHERIT,
            ])
        ));
    }
}
