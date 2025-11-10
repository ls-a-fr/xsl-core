<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xsl\Core\Validation\Types\AlignmentBaselineType;

/**
 * This class is used to validate against fop.xsd file.
 */
class AlignmentType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return new EnumValidator([
            AlignmentBaselineType::BASELINE,
            AlignmentBaselineType::BEFORE_EDGE,
            AlignmentBaselineType::TEXT_BEFORE_EDGE,
            AlignmentBaselineType::MIDDLE,
            AlignmentBaselineType::CENTRAL,
            AlignmentBaselineType::AFTER_EDGE,
            AlignmentBaselineType::TEXT_AFTER_EDGE,
            AlignmentBaselineType::IDEOGRAPHIC,
            AlignmentBaselineType::ALPHABETIC,
            AlignmentBaselineType::HANGING,
            AlignmentBaselineType::MATHEMATICAL,
        ]);
    }
}
