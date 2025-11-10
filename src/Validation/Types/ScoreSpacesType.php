<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates ScoreSpaces property.
 *
 * @see https://www.w3.org/TR/xsl11/#score-spaces
 */
class ScoreSpacesType extends Type implements Validator
{
    /**
     * Text-decoration will be applied to spaces
     */
    public const TRUE = 'true';

    /**
     * Text-decoration will not be applied to spaces
     */
    public const FALSE = 'false';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::TRUE,
            self::FALSE,
            self::INHERIT,
        ]));
    }
}
