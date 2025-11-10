<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Traits;

use Lsa\Xsl\Core\Enums\Conformance;

trait BasicVisualConformance
{
    /**
     * Get visual conformance
     *
     * @return Conformance The conformance level
     */
    public function getVisualConformance(): Conformance
    {
        return Conformance::BASIC;
    }
}
