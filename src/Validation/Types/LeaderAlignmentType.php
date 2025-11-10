<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates LeaderAlignment property.
 *
 * @link https://www.w3.org/TR/xsl11/#leader-alignment
 */
class LeaderAlignmentType extends Type implements Validator
{
    /**
     * Leader-pattern has no special alignment.
     */
    public const NONE = 'none';

    /**
     * Leader-pattern is aligned as if it began on the current reference-area's content-rectangle start-edge.
     */
    public const REFERENCE_AREA = 'reference-area';

    /**
     * Leader-pattern is aligned as if it began on the current page's start-edge.
     */
    public const PAGE = 'page';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::NONE,
            self::REFERENCE_AREA,
            self::PAGE,
            self::INHERIT,
        ]));
    }
}
