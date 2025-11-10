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
 * Validates WordSpacing property.
 *
 * `<length>`:
 * - This value indicates inter-word space in addition to the default space between
 *   words. Values may be negative, but there may be implementation-specific limits.
 *
 * @link https://www.w3.org/TR/xsl11/#word-spacing
 */
class WordSpacingType extends Type implements Validator
{
    /**
     * The normal inter-word space, as defined by the current font and/or the UA.
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
