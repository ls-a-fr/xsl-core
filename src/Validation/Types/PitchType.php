<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\FrequencyType;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * Validates Pitch property.
 *
 * @link https://www.w3.org/TR/xsl11/#pitch
 */
class PitchType extends Type implements Validator
{
    public const X_LOW = 'x-low';

    public const LOW = 'low';

    public const MEDIUM = 'medium';

    public const HIGH = 'high';

    public const X_HIGH = 'x-high';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new FrequencyType(),
            new PercentageType(),
            new EnumValidator([
                self::X_LOW,
                self::LOW,
                self::MEDIUM,
                self::HIGH,
                self::X_HIGH,
                self::INHERIT,
            ])
        ));
    }
}
