<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\MasterReferenceType;

/**
 * XSL Definition:
 * - Value:  `<name>`
 * - Initial:  an empty name
 * - Inherited:  no, a value is required
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Selecting a master:
 * - If this property is specified on the fo:page-sequence it specifies the name of the page-sequence-master
 *   or page-master to be used to create pages in the sequence.
 * - If this property is specified on the fo:single-page-master-reference, it specifies the name of the
 *   page-master to be used to create a single page instance.
 * - If this property is specified on the fo:repeatable-page-master-reference, it specifies the name of the
 *   page-master to be used in repetition until the content is exhausted or the maximum-repeats limit is
 *   reached, whichever occurs first.
 * - If this property is specified on the fo:conditional-page-master-reference, it specifies the name of the
 *   page-master to be used whenever this alternative is chosen.
 *
 * If the name is empty or if a name-conflict is encountered, an error shall be reported. A processor may then
 * continue processing.
 * The names need not be unique, but may not be empty and must refer to a master-name that exists within the
 * document.
 *
 * @link https://www.w3.org/TR/xsl11/#master-reference
 */
class MasterReference extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('master-reference', MasterReferenceType::class);
    }

    public function getDefaultValue(): string
    {
        return '';
    }
}
