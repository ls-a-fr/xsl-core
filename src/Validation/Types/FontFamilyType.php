<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\FamilyNameType;
use Lsa\Xsl\Core\Validation\Types\Xsl\GenericFamilyType;

/**
 * Validates FontFamily property.
 *
 * @see https://www.w3.org/TR/xsl11/#font-family
 */
class FontFamilyType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            (new CompoundValidator(
                min: 1,
                validator: new UnionValidator(
                    new GenericFamilyType(),
                    new FamilyNameType()
                )
            ))->separator(',')->shouldTrim(),
            new EnumValidator([
                self::INHERIT,
            ]),
        ));
    }
}
