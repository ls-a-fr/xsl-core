<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;

/**
 * Validates Size property.
 *
 * @link https://www.w3.org/TR/xsl11/#size
 */
class SizeType extends Type implements Validator
{
    /**
     * The page box will be set to the size and orientation of the target sheet.
     */
    public const AUTO = 'auto';

    /**
     * Overrides the target's orientation. The page box is the same size as the target, and the longer
     * sides are horizontal.
     */
    public const LANDSCAPE = 'landscape';

    /**
     * Overrides the target's orientation. The page box is the same size as the target, and the shorter
     * sides are horizontal.
     */
    public const PORTRAIT = 'portrait';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            (new CompoundValidator(
                min: 1,
                max: 2,
                validator: new LengthType()
            ))->separator(' ')->shouldTrim(),
            new EnumValidator([
                self::AUTO,
                self::LANDSCAPE,
                self::PORTRAIT,
                self::INHERIT,
            ])
        ));
    }
}
