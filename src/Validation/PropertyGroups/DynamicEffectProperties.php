<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\ActiveState;
use Lsa\Xsl\Core\Validation\Properties\AutoRestore;
use Lsa\Xsl\Core\Validation\Properties\CaseName;
use Lsa\Xsl\Core\Validation\Properties\CaseTitle;
use Lsa\Xsl\Core\Validation\Properties\DestinationPlacementOffset;
use Lsa\Xsl\Core\Validation\Properties\ExternalDestination;
use Lsa\Xsl\Core\Validation\Properties\IndicateDestination;
use Lsa\Xsl\Core\Validation\Properties\InternalDestination;
use Lsa\Xsl\Core\Validation\Properties\ShowDestination;
use Lsa\Xsl\Core\Validation\Properties\StartingState;
use Lsa\Xsl\Core\Validation\Properties\SwitchTo;
use Lsa\Xsl\Core\Validation\Properties\TargetPresentationContext;
use Lsa\Xsl\Core\Validation\Properties\TargetProcessingContext;
use Lsa\Xsl\Core\Validation\Properties\TargetStylesheet;

/**
 * Properties for dynamic effects formatting objects
 *
 * @see https://www.w3.org/TR/xsl11/#d0e27719
 */
class DynamicEffectProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            ActiveState::class,
            AutoRestore::class,
            CaseName::class,
            CaseTitle::class,
            DestinationPlacementOffset::class,
            ExternalDestination::class,
            IndicateDestination::class,
            InternalDestination::class,
            ShowDestination::class,
            StartingState::class,
            SwitchTo::class,
            TargetPresentationContext::class,
            TargetProcessingContext::class,
            TargetStylesheet::class,
        ]);
    }
}
