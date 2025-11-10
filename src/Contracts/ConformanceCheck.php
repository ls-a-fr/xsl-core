<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Contracts;

use Lsa\Xsl\Core\Enums\Conformance;

/**
 * Allows to check against the conformance level
 */
interface ConformanceCheck
{
    /**
     * Gets the visual conformance for this element
     *
     * @return Conformance Visual conformance for this element
     */
    public function getVisualConformance(): Conformance;

    /**
     * Gets the aural conformance for this element
     *
     * @return Conformance Aural conformance for this element
     */
    public function getAuralConformance(): Conformance;
}
