<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarClass;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarColor;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarOffset;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarPlacement;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarStyle;
use Lsa\Xsl\Core\Validation\Properties\ChangeBarWidth;
use Lsa\Xsl\Core\Validation\Properties\ContentType;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IntrinsicScaleValue;
use Lsa\Xsl\Core\Validation\Properties\PageCitationStrategy;
use Lsa\Xsl\Core\Validation\Properties\ProvisionalDistanceBetweenStarts;
use Lsa\Xsl\Core\Validation\Properties\ProvisionalLabelSeparation;
use Lsa\Xsl\Core\Validation\Properties\RefId;
use Lsa\Xsl\Core\Validation\Properties\ScaleOption;
use Lsa\Xsl\Core\Validation\Properties\ScoreSpaces;
use Lsa\Xsl\Core\Validation\Properties\Source;
use Lsa\Xsl\Core\Validation\Properties\Visibility;
use Lsa\Xsl\Core\Validation\Properties\ZIndex;

/**
 * Miscellaneous properties
 *
 * @see https://www.w3.org/TR/xsl11/#d0e32871
 */
class MiscellaneousProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            ChangeBarClass::class,
            ChangeBarColor::class,
            ChangeBarOffset::class,
            ChangeBarPlacement::class,
            ChangeBarStyle::class,
            ChangeBarWidth::class,
            ContentType::class,
            Id::class,
            IntrinsicScaleValue::class,
            PageCitationStrategy::class,
            ProvisionalLabelSeparation::class,
            ProvisionalDistanceBetweenStarts::class,
            RefId::class,
            ScaleOption::class,
            ScoreSpaces::class,
            Source::class,
            Visibility::class,
            ZIndex::class,
        ]);
    }
}
