<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\AlignmentAdjustType as TypesAlignmentAdjustType;

/**
 * This class is used to validate against fop.xsd file.
 */
class AlignmentAdjustType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        /**
         * AlignmentAdjustType must be an UnionValidator for this to work
         *
         * @var \Lsa\Xml\Utils\Validation\Validators\UnionValidator
         */
        $unionValidator = (new TypesAlignmentAdjustType())->getValidator();
        $otherValidators = array_filter($unionValidator->validators, fn ($v) => ! ($v instanceof EnumValidator));

        return new UnionValidator(
            new AutoType(),
            new InheritType(),
            new AlignmentType(),
            ...$otherValidators
        );
    }
}
