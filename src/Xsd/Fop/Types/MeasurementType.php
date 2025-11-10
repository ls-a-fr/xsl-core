<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * This class is used to validate against fop.xsd file.
 */
class MeasurementType extends Type implements Validator
{
    public const PX = 'px';

    public const PT = 'pt';

    public const MM = 'mm';

    public const IN = 'in';

    public const CM = 'cm';

    public const EM = 'em';

    public function getValidator(): Validator
    {
        return new EnumValidator([
            self::PX,
            self::PT,
            self::MM,
            self::IN,
            self::CM,
            self::EM,
        ], true);
    }
}
