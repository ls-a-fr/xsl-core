<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * This class is used to validate against fop.xsd file.
 */
class MarginWidthType extends Type implements Validator
{
    public const AUTO = 'auto';

    public function getValidator(): Validator
    {
        return new UnionValidator(
            new LengthType(),
            new PercentageType(),
            new EnumValidator([
                self::AUTO,
            ])
        );
    }
}
