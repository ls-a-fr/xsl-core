<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Contracts;

use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * Provides an aural fallback for this element
 */
interface HasAuralFallback
{
    /**
     * Returns the aural fallback representation of this tag
     *
     * @param  Root  $root  The root element
     * @return ?Tag Fallback representation of this tag, or null if unrenderable.
     */
    public function getAuralFallback(Root $root): ?Tag;
}
