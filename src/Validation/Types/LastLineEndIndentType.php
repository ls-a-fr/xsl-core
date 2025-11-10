<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * Validates LastLineEndIndent property.
 *
 * `<length>`:
 *     The "last-line-end-indent" is specified as a length.
 *
 * `<percentage>`:
 *     The "last-line-end-indent" is specified as a percentage of the inline-progression-dimension of the
 *     closest ancestor block-area.
 *
 * @see https://www.w3.org/TR/xsl11/#last-line-end-indent
 */
class LastLineEndIndentType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new LengthType(),
            new PercentageType(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
