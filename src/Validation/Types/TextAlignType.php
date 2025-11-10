<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates TextAlign property.
 *
 * @link https://www.w3.org/TR/xsl11/#text-align
 */
class TextAlignType extends Type implements Validator
{
    /**
     * Specifies that the content is to be aligned on the start-edge in the inline-progression-direction.
     */
    public const START = 'start';

    /**
     * Specifies that the content is to be centered in the inline-progression-direction.
     */
    public const CENTER = 'center';

    /**
     * Specifies that the content is to be aligned on the end-edge in the inline-progression-direction.
     */
    public const END = 'end';

    /**
     * Specifies that the contents is to be expanded to fill the available width in the
     * inline-progression-direction.
     */
    public const JUSTIFY = 'justify';

    /**
     * If the page binding edge is on the start-edge, the alignment will be start. If the
     * binding is the end-edge, the alignment will be end. If neither, use start alignment.
     */
    public const INSIDE = 'inside';

    /**
     * If the page binding edge is on the start-edge, the alignment will be end. If the
     * binding is the end-edge, the alignment will be start. If neither, use end alignment.
     */
    public const OUTSIDE = 'outside';

    /**
     * Interpreted as "text-align='start'".
     */
    public const LEFT = 'left';

    /**
     * Interpreted as "text-align='end'".
     */
    public const RIGHT = 'right';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::START,
            self::CENTER,
            self::END,
            self::JUSTIFY,
            self::INSIDE,
            self::OUTSIDE,
            self::LEFT,
            self::RIGHT,
            self::INHERIT,
        ]));
    }
}
