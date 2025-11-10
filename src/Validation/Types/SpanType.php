<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates Span property.
 *
 * @link https://www.w3.org/TR/xsl11/#span
 */
class SpanType extends Type implements Validator
{
    /**
     * This object does not span multiple columns.
     */
    public const NONE = 'none';

    /**
     * The areas resulting from this flow object shall span all the columns of a multi-column region.
     */
    public const ALL = 'all';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::NONE,
            self::ALL,
            self::INHERIT,
        ]));
    }
}
