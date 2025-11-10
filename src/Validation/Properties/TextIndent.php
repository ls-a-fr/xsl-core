<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\TextIndentType;

/**
 * CSS2 Definition: as amended by http://www.w3.org/Style/css2-updates/REC-CSS2-19980512-errata.html#x76
 * - Value:  `<length>` | `<percentage>` | inherit
 * - Initial:  0pt
 * - Inherited:  yes
 * - Percentages:  refer to width of containing block
 * - Media:  visual
 *
 * This property specifies the indentation of the first line of text in a block. More precisely, it
 * specifies the indentation of the first box that flows into the block's first line box. The box is
 * indented with respect to the left (or right, for right-to-left layout) edge of the line box. User
 * agents should render this indentation as blank space.
 *
 * The value of 'text-indent' may be negative, but there may be implementation-specific limits. If
 * the value of 'text-indent' is negative, the value of 'overflow' will affect whether the text is
 * visible.
 *
 * XSL modifications to the CSS definition:
 * - The "text-indent" property specifies an adjustment to the start-indent of the first child L of
 *   the first block-area generated and returned by the formatting object, provided L is a line-area.
 *
 * A negative value specifies a hanging indent (outdent) on the first line.
 *
 * @link https://www.w3.org/TR/xsl11/#text-indent
 * @link http://www.w3.org/TR/REC-CSS2/text.html#propdef-text-indent
 */
class TextIndent extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('text-indent', TextIndentType::class);
    }

    public function getDefaultValue(): string
    {
        return '0pt';
    }
}
