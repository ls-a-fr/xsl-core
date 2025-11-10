<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;
use Lsa\Xsl\Core\Validation\Types\Xsl\TimeType;

/**
 * Validates PauseAfter property.
 *
 * @link https://www.w3.org/TR/xsl11/#pause-after
 */
class PauseAfterType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new TimeType(),
            new PercentageType(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
