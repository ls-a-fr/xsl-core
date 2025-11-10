<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\UriSpecificationType;

/**
 * Validates Cue property.
 *
 * @link https://www.w3.org/TR/xsl11/#cue
 */
class CueType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            (new CompoundValidator(
                min: 1,
                max: 2,
                validator: new UnionValidator(
                    new UriSpecificationType(),
                    new EnumValidator([
                        CueSingleType::NONE,
                    ])
                )
            ))->separator(' ')->shouldTrim(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
