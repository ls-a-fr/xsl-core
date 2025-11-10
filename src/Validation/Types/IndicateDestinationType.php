<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates IndicateDestination property.
 *
 * @link https://www.w3.org/TR/xsl11/#indicate-destination
 */
class IndicateDestinationType extends Type implements Validator
{
    /**
     * The areas that belong to the link target when traversed should, in a system-dependent manner,
     * be indicated.
     */
    public const TRUE = 'true';

    /**
     * No special indication should be made.
     * Note: This could be indicated in any feasible way, e.g., by reversed video, etc.
     */
    public const FALSE = 'false';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::TRUE,
            self::FALSE,
        ]));
    }
}
