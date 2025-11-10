<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\AutoRestoreType;

/**
 * XSL Definition:
 * - Value:  true | false
 * - Initial:  false
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  interactive
 *
 * Specifies if the initial fo:multi-case should be restored when the fo:multi-switch gets hidden
 * by an ancestor fo:multi-switch.
 *
 * Note: A common case of using this property with a "true" value is when several nested fo:multi-switch
 * objects build an expandable/collapsible table-of-contents view. If the table-of-contents is
 * expanded far down the hierarchy, and an (far above) ancestor is closed, one would want all
 * subtitles to have restored to their original state when that ancestor is opened again.
 *
 * @link https://www.w3.org/TR/xsl11/#auto-restore
 */
class AutoRestore extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('auto-restore', AutoRestoreType::class);
    }

    public function getDefaultValue(): string
    {
        return AutoRestoreType::FALSE;
    }
}
