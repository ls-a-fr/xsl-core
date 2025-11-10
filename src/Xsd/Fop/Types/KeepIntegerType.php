<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * This class is used to validate against fop.xsd file.
 */
class KeepIntegerType extends Type implements Validator
{
    use HasName;

    public function __construct()
    {
        $this->name = 'keep_integer_Type';
    }

    public function getValidator(): Validator
    {
        return new RegexValidator('(\+?\d+|auto|always)');
    }
}
