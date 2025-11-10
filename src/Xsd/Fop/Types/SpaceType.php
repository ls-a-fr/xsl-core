<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * This class is used to validate against fop.xsd file.
 */
class SpaceType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return new RegexValidator('([ ]?\+?\d+\.?\d*(px|pt|mm|cm|in|em|%)){1,3}( \+?\d+| force)?( retain| discard)?');
    }
}
