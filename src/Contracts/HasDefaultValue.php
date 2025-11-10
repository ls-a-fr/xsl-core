<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Contracts;

interface HasDefaultValue
{
    /**
     * Returns this property default value.
     *
     * @return string The default value
     */
    public function getDefaultValue(): string;
}
