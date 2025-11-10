<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xsl\Core\Validation\Types\ReferenceOrientationType;

/**
 * This class is used to validate against fop.xsd file.
 */
class OrientationType extends Type implements Validator
{
    public const ANGLE_0_DEG = '0deg';

    public const ANGLE_90_DEG = '90deg';

    public const ANGLE_180_DEG = '180deg';

    public const ANGLE_270_DEG = '270deg';

    public const ANGLE_MINUS_90_DEG = '-90deg';

    public const ANGLE_MINUS_180_DEG = '-180deg';

    public const ANGLE_MINUS_270_DEG = '-270deg';

    public function getValidator(): Validator
    {
        return new EnumValidator([
            ReferenceOrientationType::INHERIT,
            ReferenceOrientationType::ANGLE_0,
            ReferenceOrientationType::ANGLE_90,
            ReferenceOrientationType::ANGLE_180,
            ReferenceOrientationType::ANGLE_270,
            ReferenceOrientationType::ANGLE_MINUS_90,
            ReferenceOrientationType::ANGLE_MINUS_180,
            ReferenceOrientationType::ANGLE_MINUS_270,
            self::ANGLE_0_DEG,
            self::ANGLE_90_DEG,
            self::ANGLE_180_DEG,
            self::ANGLE_270_DEG,
            self::ANGLE_MINUS_90_DEG,
            self::ANGLE_MINUS_180_DEG,
            self::ANGLE_MINUS_270_DEG,
        ]);
    }
}
