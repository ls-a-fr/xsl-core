<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Contracts;

use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * Provides a visual fallback for this element
 */
interface HasVisualFallback
{
    /**
     * Returns the visual fallback representation of this tag
     *
     * @param  Root  $root  The root element
     * @return ?Tag Fallback representation of this tag, or null if unrenderable.
     */
    public function getVisualFallback(Root $root): ?Tag;
}
