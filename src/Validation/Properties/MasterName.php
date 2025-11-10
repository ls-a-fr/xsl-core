<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\MasterNameType;

/**
 * XSL Definition:
 * - Value:  `<name>`
 * - Initial:  an empty name
 * - Inherited:  no, a value is required
 * - Percentages:  N/A
 * - Media:  visual
 *
 * If this property is specified on an fo:simple-page-master, it provides an identifying name of the master.
 * This name is subsequently referenced as the value of properties on the following formatting objects:
 * fo:single-page-master-reference, fo:repeatable-page-master-reference, and
 * fo:conditional-page-master-reference to request the use of this master when creating a page instance. It
 * may also be used on an fo:page-sequence to specify the use of this master when creating page instances.
 *
 * If this property is specified on an fo:page-sequence-master, it provides an identifying name of the master.
 * This name is subsequently referenced as the value of properties on the fo:page-sequence to request the use
 * of this page-sequence-master when creating page instances.
 *
 * A master-name must be unique across all page-masters and page-sequence-masters.
 *
 * If the name is empty or if a name-conflict is encountered, an error shall be reported. A processor may then
 * continue processing.
 *
 * Names identify masters, may not be empty and must be unique.
 *
 * @link https://www.w3.org/TR/xsl11/#master-name
 */
class MasterName extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('master-name', MasterNameType::class);
    }

    public function getDefaultValue(): string
    {
        return '';
    }
}
