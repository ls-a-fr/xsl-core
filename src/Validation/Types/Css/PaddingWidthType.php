<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Css;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\PositiveLengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\PositivePercentageType;

/**
 * The following "datatypes" are used in the definitions of some CSS2 properties. These are not
 * considered datatypes in XSL, as they are merely notational shorthand.
 *
 * @see CSS2 Reference: "padding-top" property
 */
class PaddingWidthType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new PositiveLengthType(),
            new PositivePercentageType()
        ));
    }
}
