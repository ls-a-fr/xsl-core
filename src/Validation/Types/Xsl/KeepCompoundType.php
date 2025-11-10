<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;

/**
 * Part of KeepType. The <keep> datatype is composed of three components:
 * within-line, within-column, and within-page.
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class KeepCompoundType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache((new CompoundValidator(
            min: 1,
            max: 3,
            validator: new KeepIntegerType()
        ))->separator(' ')->shouldTrim());
    }
}
