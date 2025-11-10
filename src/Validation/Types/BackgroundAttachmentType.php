<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates BackgroundAttachment property.
 *
 * @link https://www.w3.org/TR/xsl11/#background-attachment
 */
class BackgroundAttachmentType extends Type implements Validator
{
    /**
     * The background-image may scroll with the enclosing object.
     */
    public const SCROLL = 'scroll';

    /**
     * The background-image is to be fixed within the viewable area of the enclosing object.
     */
    public const FIXED = 'fixed';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::SCROLL,
            self::FIXED,
            self::INHERIT,
        ]));
    }
}
