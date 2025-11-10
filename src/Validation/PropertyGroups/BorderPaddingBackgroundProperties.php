<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\Background;
use Lsa\Xsl\Core\Validation\Properties\Border;
use Lsa\Xsl\Core\Validation\Properties\Padding;

/**
 * Common border, padding and backgrund properties
 *
 * @see https://www.w3.org/TR/xsl11/#common-border-padding-and-background-properties
 */
class BorderPaddingBackgroundProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            Background::class,
            Border::class,
            Padding::class,
        ]);
    }
}
