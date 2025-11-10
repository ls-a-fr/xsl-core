<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Traits;

use Lsa\Xsl\Core\Enums\Conformance;

trait BasicAuralConformance
{
    /**
     * Get aural conformance
     *
     * @return Conformance The conformance level
     */
    public function getAuralConformance(): Conformance
    {
        return Conformance::BASIC;
    }
}
