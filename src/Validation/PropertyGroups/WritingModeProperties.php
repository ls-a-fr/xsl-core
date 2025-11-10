<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\Direction;
use Lsa\Xsl\Core\Validation\Properties\GlyphOrientationHorizontal;
use Lsa\Xsl\Core\Validation\Properties\GlyphOrientationVertical;
use Lsa\Xsl\Core\Validation\Properties\TextAltitude;
use Lsa\Xsl\Core\Validation\Properties\TextDepth;
use Lsa\Xsl\Core\Validation\Properties\UnicodeBidi;
use Lsa\Xsl\Core\Validation\Properties\WritingMode;

/**
 * Writing-mode-related properties
 *
 * @see https://www.w3.org/TR/xsl11/#writing-mode-related
 */
class WritingModeProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            Direction::class,
            GlyphOrientationHorizontal::class,
            GlyphOrientationVertical::class,
            TextAltitude::class,
            TextDepth::class,
            UnicodeBidi::class,
            WritingMode::class,
        ]);
    }
}
