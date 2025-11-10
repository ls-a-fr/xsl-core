<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * This class is used to validate against fop.xsd file.
 */
class DominantBaselineType extends Type implements Validator
{
    public const AUTO = 'auto';

    public const USE_SCRIPT = 'use-script';

    public const NO_CHANGE = 'no-change';

    public const RESET_SIZE = 'reset-size';

    public const IDEOGRAPHIC = 'ideographic';

    public const ALPHABETIC = 'alphabetic';

    public const HANGING = 'hanging';

    public const MATHEMATICAL = 'mathematical';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::USE_SCRIPT,
            self::NO_CHANGE,
            self::RESET_SIZE,
            self::IDEOGRAPHIC,
            self::ALPHABETIC,
            self::HANGING,
            self::MATHEMATICAL,
            self::INHERIT,
        ]));
    }
}
