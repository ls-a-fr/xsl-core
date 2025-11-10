<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;

/**
 * Specifies that a point, at the given percentage across the image from left-to-right,
 * shall be placed at a point at the given percentage across, from left-to-right, the
 * area's padding-rectangle.
 *
 * Note: For example with a value of 0%, the left-edge of the image is aligned with the
 * left-edge of the area's padding-rectangle. A value of 100% places the right-edge of
 * the image aligned with the right-edge of the padding-rectangle. With a value of 14%,
 * a point 14% across the image is to be placed at a point 14% across the
 * padding-rectangle.
 *
 * @see https://www.w3.org/TR/xsl11/#background-position-horizontal
 */
class BackgroundPositionPercentageType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache((new CompoundValidator(
            min: 1,
            max: 2,
            validator: new PercentageType()
        ))->separator(' ')->shouldTrim());
    }
}
