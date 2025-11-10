<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\LeaderAlignment;
use Lsa\Xsl\Core\Validation\Properties\LeaderLength;
use Lsa\Xsl\Core\Validation\Properties\LeaderPattern;
use Lsa\Xsl\Core\Validation\Properties\LeaderPatternWidth;
use Lsa\Xsl\Core\Validation\Properties\RuleStyle;
use Lsa\Xsl\Core\Validation\Properties\RuleThickness;

/**
 * Leader and rule properties
 *
 * @see https://www.w3.org/TR/xsl11/#d0e27308
 */
class LeaderRuleProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            LeaderAlignment::class,
            LeaderPattern::class,
            LeaderPatternWidth::class,
            LeaderLength::class,
            RuleStyle::class,
            RuleThickness::class,
        ]);
    }
}
