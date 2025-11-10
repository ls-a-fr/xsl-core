<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\Color;
use Lsa\Xsl\Core\Validation\Properties\ColorProfileName;
use Lsa\Xsl\Core\Validation\Properties\RenderingIntent;

/**
 * Color-related properties
 *
 * @see https://www.w3.org/TR/xsl11/#d0e25895
 */
class ColorProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            Color::class,
            ColorProfileName::class,
            RenderingIntent::class,
        ]);
    }
}
