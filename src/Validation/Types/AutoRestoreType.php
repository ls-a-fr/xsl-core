<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates AutoRestore property.
 *
 * @link https://www.w3.org/TR/xsl11/#auto-restore
 */
class AutoRestoreType extends Type implements Validator
{
    /**
     * If this fo:multi-switch is contained in another fo:multi-switch, and that fo:multi-switch
     * changes the active fo:multi-case (hiding this fo:multi-switch), then this fo:multi-switch
     * should restore its initial fo:multi-case.
     */
    public const TRUE = 'true';

    /**
     * This fo:multi-switch should retain its current fo:multi-case.
     */
    public const FALSE = 'false';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::TRUE,
            self::FALSE,
        ]));
    }
}
