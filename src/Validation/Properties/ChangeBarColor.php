<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xsl\Core\Contracts\HasDefaultValueWithContext;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Properties\Virtual\SingleColor;
use Lsa\Xsl\Core\Validation\Types\Xsl\BaseColorType;

/**
 * XSL Definition:
 * - Value:  `<color>`
 * - Initial:  the value of the color property
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  visual
 *
 * Values have the following meanings:
 * `<color>`
 *     Specifies the color of the change bar.
 *
 * Note:
 * The color of any change bar is determined by the value of this property at the fo:change-bar-begin that
 * starts the change bar; changes to this property after that do not affect the color of the change bar
 * begin generated.
 *
 * @link https://www.w3.org/TR/xsl11/#change-bar-color
 */
class ChangeBarColor extends SingleColor implements HasDefaultValueWithContext
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('change-bar-color', BaseColorType::class);
    }
}
