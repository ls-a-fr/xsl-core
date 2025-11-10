<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\CompoundTypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\BorderSeparationType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;

/**
 * XSL Definition:
 * - Value:   `<length-bp-ip-direction>` | inherit
 * - Initial:     .block-progression-direction="0pt" .inline-progression-direction="0pt"
 * - Inherited:   yes
 * - Percentages:     N/A
 * - Media:   visual
 *
 * In the separate borders model, each cell has an individual border. The "border-separation" property
 * specifies the distance between the borders of adjacent cells. This space is filled with the background
 * of the table element. Rows, columns, row groups, and column groups cannot have borders (i.e., user
 * agents must ignore the border properties for those elements).
 *
 * @link https://www.w3.org/TR/xsl11/#border-separation
 */
class BorderSeparation extends CompoundTypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct(
            'border-separation',
            BorderSeparationType::class,
            [
                'block-progression-direction' => LengthType::class,
                'inline-progression-direction' => LengthType::class,
            ]
        );
    }

    public function getDefaultValue(): string
    {
        return '0pt 0pt';
    }
}
