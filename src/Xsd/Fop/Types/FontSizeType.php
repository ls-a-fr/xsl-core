<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\FontSizeType as TypesFontSizeType;

/**
 * This class is used to validate against fop.xsd file.
 */
class FontSizeType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        /**
         * FontSizeType must be an UnionValidator for this to work
         *
         * @var \Lsa\Xml\Utils\Validation\Validators\UnionValidator
         */
        $unionValidator = (new TypesFontSizeType())->getValidator();
        $otherValidators = array_filter($unionValidator->validators, fn ($v) => ! ($v instanceof EnumValidator));

        return new UnionValidator(
            new AbsoluteSizeType(),
            new RelativeSizeType(),
            new InheritType(),
            ...$otherValidators
        );
    }
}
