<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\CompoundTypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\Xsl\KeepIntegerType;
use Lsa\Xsl\Core\Validation\Types\Xsl\KeepType;

/**
 * XSL Definition:
 * - Value:  `<keep>` | inherit
 * - Initial:  .within-line=auto, .within-column=auto, .within-page=auto
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property imposes keep-with-next conditions on formatting objects.
 *
 * The `<keep>` datatype is composed of three components: within-line, within-column, and within-page.
 * Different components apply to different classes of formatting objects and provide keep conditions
 * relative to different contexts. In the case of the within-line component, the keep context consists
 * of line-areas; for the within-column component, the keep context consists of column-areas; for the
 * within-page component, the keep context consists of page-areas. In the descriptions below, the term
 * "appropriate context" should be interpreted in terms of the previous sentence.
 *
 * The semantics of keeps and breaks are further described in 4.8 Keeps and Breaks.
 *
 * @link https://www.w3.org/TR/xsl11/#keep-with-next
 * @link https://www.w3.org/TR/xsl11/#keepbreak
 */
class KeepWithNext extends CompoundTypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct(
            'keep-with-next',
            KeepType::class,
            [
                'within-column' => KeepIntegerType::class,
                'within-line' => KeepIntegerType::class,
                'within-page' => KeepIntegerType::class,
            ]
        );
    }

    public function getDefaultValue(): string
    {
        return KeepIntegerType::AUTO;
    }
}
