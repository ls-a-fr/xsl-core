<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * This class is used to validate against fop.xsd file.
 */
class BorderType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        // phpcs:disable Generic.Files.LineLength
        return new RegexValidator('(none|hidden|dotted|dashed|solid|double|groove|ridge|inset|outset) \+?\d+\.?\d*(px|pt|mm|cm|in|em|%) (#[0-9A-F]{6}|[a-z]{3,16})');
    }
}
