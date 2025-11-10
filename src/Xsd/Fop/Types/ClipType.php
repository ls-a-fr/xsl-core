<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * This class is used to validate against fop.xsd file.
 */
class ClipType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        // phpcs:disable Generic.Files.LineLength
        return $this->cache(new RegexValidator('(rect\((\+?\d+\.?\d*(px|pt|mm|cm|in|em|%)|auto),(\+?\d+\.?\d*(px|pt|mm|cm|in|em|%)|auto),(\+?\d+\.?\d*(px|pt|mm|cm|in|em|%)|auto),(\+?\d+\.?\d*(px|pt|mm|cm|in|em|%)|auto)\)|auto|inherit)', '', true));
    }
}
