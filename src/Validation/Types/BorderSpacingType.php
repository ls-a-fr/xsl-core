<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;

/**
 * Validates BorderSpacing property.
 *
 * `<length>`
 * `- The lengths specify the distance that separates adjacent cell borders. If one length
 *    is specified, it gives both the horizontal and vertical spacing. If two are specified,
 *    the first gives the horizontal spacing and the second the vertical spacing. Lengths
 *    may not be negative.
 *
 * @link https://www.w3.org/TR/xsl11/#border-spacing
 */
class BorderSpacingType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            (new CompoundValidator(
                min: 1,
                max: 2,
                validator: new LengthType()
            ))->separator(' '),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
