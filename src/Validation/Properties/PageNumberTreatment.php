<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\PageNumberTreatmentType;

/**
 * XSL Definition:
 * - Value:  link | no-link
 * - Initial:  no-link
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  interactive
 *
 * Specifies whether or not page numbers in the index should be hyperlinks.
 *
 * @link https://www.w3.org/TR/xsl11/#page-number-treatment
 */
class PageNumberTreatment extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('page-number-treatment', PageNumberTreatmentType::class);
    }

    public function getDefaultValue(): string
    {
        return PageNumberTreatmentType::NO_LINK;
    }
}
