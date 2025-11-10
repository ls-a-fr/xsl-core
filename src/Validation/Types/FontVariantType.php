<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates FontVariant property.
 *
 * @link https://www.w3.org/TR/xsl11/#font-variant
 */
class FontVariantType extends Type implements Validator
{
    /**
     * Specifies a font that is not labeled as a small-caps font.
     */
    public const NORMAL = 'normal';

    /**
     * Specifies a font that is labeled as a small-caps font. If a genuine small-caps font is not
     * available, user agents should simulate a small-caps font, for example by taking a normal font
     * and replacing the lowercase letters by scaled uppercase characters. As a last resort, unscaled
     * uppercase letter glyphs in a normal font may replace glyphs in a small-caps font so that the text
     * appears in all uppercase letters.
     */
    public const SMALL_CAPS = 'small-caps';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::NORMAL,
            self::SMALL_CAPS,
            self::INHERIT,
        ]));
    }
}
