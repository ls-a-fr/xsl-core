<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * This class is used to validate against fop.xsd file.
 */
class InheritType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return new EnumValidator([
            self::INHERIT,
        ]);
    }
}
