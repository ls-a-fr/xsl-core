<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\UriSpecificationType;

/**
 * Validates CueAfter and CueBefore properties.
 */
class CueSingleType extends Type implements Validator
{
    /**
     * No auditory icon is specified.
     */
    public const NONE = 'none';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new UriSpecificationType(),
            new EnumValidator([
                self::NONE,
                self::INHERIT,
            ])
        ));
    }
}
