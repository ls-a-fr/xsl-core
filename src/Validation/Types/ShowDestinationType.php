<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates ShowDestination property.
 *
 * @link https://www.w3.org/TR/xsl11/#show-destination
 */
class ShowDestinationType extends Type implements Validator
{
    /**
     * The current document view should be replaced. However, if the destination area(s) are already
     * available in a page/region, those areas should simply be moved/scrolled "into sight".
     */
    public const REPLACE = 'replace';

    /**
     * A new (additional) document view should always be opened.
     */
    public const NEW = 'new';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::REPLACE,
            self::NEW,
        ]));
    }
}
