<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CumulativeOptionalOrderedValidator;

/**
 * A compound datatype, with components: minimum, optimum, maximum, precedence, and conditionality.
 * The minimum, optimum, and maximum components are `<length>`s.
 * The precedence component is either "force" or an `<integer>`.
 * The conditionality component is either "discard" or "retain".
 *
 * If "minimum" is greater than optimum, it will be treated as if it had been set to "optimum".
 * If "maximum" is less than optimum, it will be treated as if it had been set to "optimum".
 *
 * <enumeration value = "1mm 2mm 3mm force retain"/>
 * <enumeration value = "1mm 2mm 3mm force discard"/>
 * <enumeration value = "1mm 2mm 3mm 3 retain"/>
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class SpaceType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache((new CumulativeOptionalOrderedValidator([
            [
                CumulativeOptionalOrderedValidator::OPTIONAL,
                new LengthType(),
            ],
            [
                CumulativeOptionalOrderedValidator::OPTIONAL,
                new LengthType(),
            ],
            [
                CumulativeOptionalOrderedValidator::OPTIONAL,
                new LengthType(),
            ],
            [
                CumulativeOptionalOrderedValidator::OPTIONAL,
                new SpacePrecedenceType(),
            ],
            [
                CumulativeOptionalOrderedValidator::OPTIONAL,
                new ConditionalityType(),
            ],
        ], CumulativeOptionalOrderedValidator::AT_LEAST_ONE))->separator(' ')->shouldTrim());
    }
}
