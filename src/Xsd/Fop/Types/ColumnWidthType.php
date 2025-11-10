<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\ColumnWidthType as TypesColumnWidthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * This class is used to validate against fop.xsd file.
 */
class ColumnWidthType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        /**
         * ColumnWidthType must be an UnionValidator for this to work
         *
         * @var \Lsa\Xml\Utils\Validation\Validators\UnionValidator
         */
        $unionValidator = (new TypesColumnWidthType())->getValidator();
        $otherValidators = array_filter($unionValidator->validators, fn ($v) => ! ($v instanceof RegexValidator) &&
            ! ($v instanceof LengthType) &&
            ! ($v instanceof PercentageType));

        return new UnionValidator(
            new ProportionalColumnWidthType(),
            new LengthPercentageType(),
            ...$otherValidators
        );
    }
}
