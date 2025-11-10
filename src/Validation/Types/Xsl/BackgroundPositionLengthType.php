<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;

/**
 * Specifies that the left-edge of the image shall be placed at the specified length
 * to the right of the left-edge of the padding-rectangle.
 *
 * @see https://www.w3.org/TR/xsl11/#background-position-horizontal
 */
class BackgroundPositionLengthType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache((new CompoundValidator(
            min: 1,
            max: 2,
            validator: new LengthType()
        ))->separator(' ')->shouldTrim());
    }
}
