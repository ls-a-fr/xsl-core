<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\Background;
use Lsa\Xsl\Core\Validation\Properties\Border;
use Lsa\Xsl\Core\Validation\Properties\BorderBottom;
use Lsa\Xsl\Core\Validation\Properties\BorderColor;
use Lsa\Xsl\Core\Validation\Properties\BorderLeft;
use Lsa\Xsl\Core\Validation\Properties\BorderRight;
use Lsa\Xsl\Core\Validation\Properties\BorderSpacing;
use Lsa\Xsl\Core\Validation\Properties\BorderStyle;
use Lsa\Xsl\Core\Validation\Properties\BorderTop;
use Lsa\Xsl\Core\Validation\Properties\BorderWidth;
use Lsa\Xsl\Core\Validation\Properties\Cue;
use Lsa\Xsl\Core\Validation\Properties\Font;
use Lsa\Xsl\Core\Validation\Properties\Margin;
use Lsa\Xsl\Core\Validation\Properties\Padding;
use Lsa\Xsl\Core\Validation\Properties\PageBreakAfter;
use Lsa\Xsl\Core\Validation\Properties\PageBreakBefore;
use Lsa\Xsl\Core\Validation\Properties\PageBreakInside;
use Lsa\Xsl\Core\Validation\Properties\Pause;
use Lsa\Xsl\Core\Validation\Properties\Position;
use Lsa\Xsl\Core\Validation\Properties\Size;
use Lsa\Xsl\Core\Validation\Properties\VerticalAlign;
use Lsa\Xsl\Core\Validation\Properties\WhiteSpace;
use Lsa\Xsl\Core\Validation\Properties\XmlLang;

/**
 * Shorthand properties
 *
 * @see https://www.w3.org/TR/xsl11/#d0e33965
 */
class ShorthandProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            Background::class,
            Border::class,
            BorderBottom::class,
            BorderColor::class,
            BorderLeft::class,
            BorderRight::class,
            BorderStyle::class,
            BorderSpacing::class,
            BorderTop::class,
            BorderWidth::class,
            Cue::class,
            Font::class,
            Margin::class,
            Padding::class,
            PageBreakAfter::class,
            PageBreakBefore::class,
            PageBreakInside::class,
            Pause::class,
            Position::class,
            Size::class,
            VerticalAlign::class,
            WhiteSpace::class,
            XmlLang::class,
        ]);
    }
}
