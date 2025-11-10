<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\HeightType as TypesHeightType;
use Lsa\Xsl\Core\Validation\Types\PositiveLengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * This class is used to validate against fop.xsd file.
 */
class HeightType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        /**
         * HeightType must be an UnionValidator for this to work
         *
         * @var \Lsa\Xml\Utils\Validation\Validators\UnionValidator
         */
        $unionValidator = (new TypesHeightType())->getValidator();
        $otherValidators = array_filter($unionValidator->validators, fn ($v) => ! ($v instanceof EnumValidator) &&
            ! ($v instanceof PositiveLengthType));

        return new UnionValidator(
            new PercentageType(),
            new LengthType(),
            new AutoType(),
            new InheritType(),
            ...$otherValidators
        );
    }
}
