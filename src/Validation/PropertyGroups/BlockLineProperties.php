<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\HyphenationKeep;
use Lsa\Xsl\Core\Validation\Properties\HyphenationLadderCount;
use Lsa\Xsl\Core\Validation\Properties\LastLineEndIndent;
use Lsa\Xsl\Core\Validation\Properties\LinefeedTreatment;
use Lsa\Xsl\Core\Validation\Properties\LineHeight;
use Lsa\Xsl\Core\Validation\Properties\LineHeightShiftAdjustment;
use Lsa\Xsl\Core\Validation\Properties\LineStackingStrategy;
use Lsa\Xsl\Core\Validation\Properties\TextAlign;
use Lsa\Xsl\Core\Validation\Properties\TextAlignLast;
use Lsa\Xsl\Core\Validation\Properties\TextIndent;
use Lsa\Xsl\Core\Validation\Properties\WhiteSpaceCollapse;
use Lsa\Xsl\Core\Validation\Properties\WhiteSpaceTreatment;
use Lsa\Xsl\Core\Validation\Properties\WrapOption;

/**
 * Block and line-related properties
 *
 * @see https://www.w3.org/TR/xsl11/#d0e24119
 */
class BlockLineProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            HyphenationKeep::class,
            HyphenationLadderCount::class,
            LastLineEndIndent::class,
            LineHeight::class,
            LineHeightShiftAdjustment::class,
            LineStackingStrategy::class,
            LinefeedTreatment::class,
            WhiteSpaceTreatment::class,
            TextAlign::class,
            TextAlignLast::class,
            TextIndent::class,
            WhiteSpaceCollapse::class,
            WrapOption::class,
        ]);
    }
}
