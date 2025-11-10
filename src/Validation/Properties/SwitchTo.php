<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\SwitchToType;
use Lsa\Xsl\Core\Validation\Types\TopType;

/**
 * XSL Definition:
 * - Value:  xsl-preceding | xsl-following | xsl-any | <name>[ <name>]*
 * - Initial:  xsl-any
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  interactive
 *
 * What fo:multi-case object(s) this fo:multi-toggle shall switch to.
 *
 * If switch-to is a name list, the user can switch to any of the named multi-case objects. If a multi-toggle
 * with a single name is activated, it should immediately switch to the named multi-case.
 *
 * Note:
 * How to actually select the multi-case from a list is system dependent.
 *
 * @link https://www.w3.org/TR/xsl11/#switch-to
 */
class SwitchTo extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('switch-to', SwitchToType::class);
    }

    public function getDefaultValue(): string
    {
        return TopType::AUTO;
    }
}
