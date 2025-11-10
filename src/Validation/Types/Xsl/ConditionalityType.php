<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Conditionality is an enumerated value which controls whether a space-specifier has effect at the
 * beginning or end of a reference-area or a line-area. Possible values are retain and discard; a
 * conditional space-specifier is one for which this value is discard.
 *
 * @see https://www.w3.org/TR/xsl11/#spacecond
 */
class ConditionalityType extends Type implements Validator
{
    public const RETAIN = 'retain';

    public const DISCARD = 'discard';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::RETAIN,
            self::DISCARD,
        ]));
    }
}
