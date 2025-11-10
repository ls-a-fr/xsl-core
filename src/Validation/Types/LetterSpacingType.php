<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\SpaceType;

/**
 * Validates LetterSpacing property.
 *
 * `<length>`:
 *     This value indicates inter-character space in addition to the default space between characters. Values
 *     may be negative, but there may be implementation-specific limits. User agents may not further increase
 *     or decrease the inter-character space in order to justify text.
 *
 * @link https://www.w3.org/TR/xsl11/#letter-spacing
 */
class LetterSpacingType extends Type implements Validator
{
    /**
     * The spacing is the normal spacing for the current font. This value allows the user agent to
     * alter the space between characters in order to justify text.
     */
    public const NORMAL = 'normal';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new LengthType(),
            new SpaceType(),
            new EnumValidator([
                self::NORMAL,
                self::INHERIT,
            ])
        ));
    }
}
