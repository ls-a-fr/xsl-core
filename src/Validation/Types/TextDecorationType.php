<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CumulativeOptionalValidator;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;

/**
 * Validates TextDecoration property.
 *
 * @see https://www.w3.org/TR/xsl11/#text-decoration
 */
class TextDecorationType extends Type implements Validator
{
    /**
     * Produces no text decoration.
     */
    public const NONE = 'none';

    /**
     * Each line of text is underlined.
     */
    public const UNDERLINE = 'underline';

    /**
     * Turns off underlining, if any.
     */
    public const NO_UNDERLINE = 'no-underline';

    /**
     * Each line of text has a line above it.
     */
    public const OVERLINE = 'overline';

    /**
     * Turns off overlining, if any.
     */
    public const NO_OVERLINE = 'no-overline';

    /**
     * Each line of text has a line through the middle
     */
    public const LINE_THROUGH = 'line-through';

    /**
     * Turns off line-through, if any.
     */
    public const NO_LINE_THROUGH = 'no-line-through';

    /**
     * Text blinks (alternates between visible and invisible). Conforming user agents are not
     * required to support this value.
     */
    public const BLINK = 'blink';

    /**
     * Turns off blinking, if any.
     */
    public const NO_BLINK = 'no-blink';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            (new CumulativeOptionalValidator([
                [
                    CumulativeOptionalValidator::OPTIONAL,
                    new EnumValidator([
                        self::UNDERLINE,
                        self::NO_UNDERLINE,
                    ]),
                ],
                [
                    CumulativeOptionalValidator::OPTIONAL,
                    new EnumValidator([
                        self::OVERLINE,
                        self::NO_OVERLINE,
                    ]),
                ],
                [
                    CumulativeOptionalValidator::OPTIONAL,
                    new EnumValidator([
                        self::LINE_THROUGH,
                        self::NO_LINE_THROUGH,
                    ]),
                ],
                [
                    CumulativeOptionalValidator::OPTIONAL,
                    new EnumValidator([
                        self::BLINK,
                        self::NO_BLINK,
                    ]),
                ],
            ], CumulativeOptionalValidator::AT_LEAST_ONE))->separator(' ')->shouldTrim(),
            new EnumValidator([
                self::NONE,
                self::INHERIT,
            ])
        ));
    }
}
