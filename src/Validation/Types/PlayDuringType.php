<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CumulativeOptionalOrderedValidator;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\UriSpecificationType;

/**
 * Validates PlayDuring property.
 *
 * @link https://www.w3.org/TR/xsl11/#play-during
 */
class PlayDuringType extends Type implements Validator
{
    public const NONE = 'none';

    public const AUTO = 'auto';

    public const INHERIT = 'inherit';

    /**
     * When present, this keyword means that the sound inherited from the parent
     * element's 'play-during' property continues to play and the sound designated
     * by the <uri> is mixed with it. If 'mix' is not specified, the element's
     * background sound replaces the parent's.
     */
    public const MIX = 'mix';

    /**
     * When present, this keyword means that the sound will repeat if it is too short
     * to fill the entire duration of the element. Otherwise, the sound plays once and
     * then stops. This is similar to the 'background-repeat' property. If the sound is
     * too long for the element, it is clipped once the element has been spoken.
     */
    public const REPEAT = 'repeat';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            (new CumulativeOptionalOrderedValidator([
                [
                    CumulativeOptionalOrderedValidator::MANDATORY,
                    new UriSpecificationType(),
                ],
                [
                    CumulativeOptionalOrderedValidator::OPTIONAL,
                    new EnumValidator([
                        self::MIX,
                        self::REPEAT,
                    ]),
                ],
            ]))->separator(' ')->shouldTrim(),
            new EnumValidator([
                self::AUTO,
                self::NONE,
                self::INHERIT,
            ])
        ));
    }
}
