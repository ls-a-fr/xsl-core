<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * A compound datatype, with components: length, conditionality. The length component is a
 * `<length>`. The conditionality component is either "discard" or "retain". A property may define
 * additional constraints on the values.
 *
 * Some properties have more than one way in which the property value can be specified. The simplest
 * example of such properties are those which can be specified either in terms of a direction relative to
 * the writing-mode (e.g., padding-before) or a direction in terms of the absolute geometric orientation
 * of the viewport (e.g., padding-top). These two properties are called the relative property and the
 * absolute property, respectively. Collectively, they are called "corresponding properties".
 *
 * Specifying a value for one property determines both a computed value for the specified property and a
 * computed value for the corresponding property. Which relative property corresponds to which absolute
 * property depends on the writing-mode. For example, if the "writing-mode" at the top level of a document
 * is "lr-tb", then "padding-start" corresponds to "padding-left", but if the "writing-mode" is "rl-tb",
 * then "padding-start" corresponds to "padding-right". The exact specification of how to compute the values
 * of corresponding properties is given in 5.3 Computing the Values of Corresponding Properties.
 *
 * In most cases, elements inherit computed values. However, there are some properties whose specified
 * value may be inherited (e.g., some values for the "line-height" property). In the cases where child
 * elements do not inherit the computed value, this is described in the property definition.
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class LengthConditionalType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new RegexValidator('\+?\d+\.?\d*(px|pt|mm|cm|in|em|%) (retain|discard)'));
    }
}
