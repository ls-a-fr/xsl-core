<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Functions;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Traits\ProvidesSelfValidation;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * Matches the following function:
 * `color rgb(numeric, numeric, numeric)`
 *
 * The rgb function returns a specific color from the RGB color space. The parameters to this function must
 * be numerics (real numbers) with a length power of zero.
 *
 * @see https://www.w3.org/TR/xsl/#expr-color-functions
 */
class ColorRgbType extends RegexValidator implements Validator
{
    use ProvidesSelfValidation;

    public const REGULAR_EXPRESSION = 'rgb\( *(\d*\.?\d+,? *){3}\)';

    public function __construct()
    {
        parent::__construct(self::REGULAR_EXPRESSION);
    }

    public function validate(string $value): bool
    {
        $matches = [];
        // phpcs:disable Squiz.Operators.ComparisonOperatorUsage.NotAllowed
        if (! preg_match('/^'.self::REGULAR_EXPRESSION.'$/', $value, $matches)) {
            return false;
        }

        // Parse the string
        $colors = $this->parseValue($value);
        if (count($colors) !== 3) {
            return false;
        }

        if ($this->hasMismatchedColors($colors) === true) {
            return false;
        }

        return true;
    }

    /**
     * Checks if the supplied value has mismatched colors.
     * Example: rgb(100, 100, 100) is valid, rgb(0.7, 0.7, 0.7) too, but not
     * rgb(100, 0.5, 100).
     *
     * @param  non-empty-array<string>  $colors  Supplied color values
     * @return bool True if the supplied value is invalid, false otherwise.
     */
    protected function hasMismatchedColors(array $colors): bool
    {
        $format = null;
        foreach ($colors as $color) {
            if (is_numeric($color) === false) {
                return false;
            }
            // Handles ".5" notation
            if (preg_match('/^\.\d+$/', $color) === 1) {
                $color = '0'.$color;
            }

            // Validates against float values
            if (floatval($color) >= 0 && floatval($color) <= 1) {
                if ($format === null) {
                    $format = 'real';
                }
                if (intval($color) != floatval($color) && $format != 'real') {
                    return true;
                }

                continue;
            }

            // Validates against int values
            if (intval($color) >= 0 && intval($color) <= 255) {
                if ($format === null) {
                    $format = 'byte';
                }
                if ($format != 'byte') {
                    return true;
                }

                continue;
            }

            return true;
        }

        return false;
    }

    /**
     * Parses the tag attribute value
     *
     * @param  string  $colorsMatch  The value to parse
     * @return string[] Colors found in this value
     */
    protected function parseValue(string $colorsMatch): array
    {
        $colorsMatch = str_replace(' ', '', $colorsMatch);
        if (str_starts_with($colorsMatch, 'rgb(') === false) {
            return [];
        }
        $colorsMatch = substr($colorsMatch, 4);
        if (str_ends_with($colorsMatch, ')') === false) {
            return [];
        }
        $colorsMatch = substr($colorsMatch, 0, -1);

        return explode(',', $colorsMatch);
    }
}
