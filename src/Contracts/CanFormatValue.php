<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Contracts;

interface CanFormatValue
{
    /**
     * Formats a value.
     *
     * @param  string  $value  Value to format
     * @return string Formatted value
     */
    public static function formatValue(string $value): string;
}
