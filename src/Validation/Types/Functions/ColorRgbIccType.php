<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Functions;

use Lsa\Xml\Utils\Contracts\DataAwareValidator;
use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Traits\ProvidesSelfValidation;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;
use Lsa\Xml\Utils\Validation\Xml\NcNameType;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Exceptions\ValidationException;

/**
 * Matches the following function:
 * `color rgb-icc(numeric, numeric, numeric, NCName, numeric, numeric)`
 *
 * The rgb-icc function returns a specific color from the ICC Color Profile. The color profile is specified
 * by the name parameter (the fourth parameter). This color profile must have been declared in the
 * fo:declarations formatting object using an fo:color-profile formatting object.
 *
 * The first three parameters specify a fallback color from the sRGB color space. This color is used when
 * the color profile is not available.
 *
 * The color is specified by a sequence of one or more color values (real numbers) specified after the name
 * parameter. These values are specific to the color profile.
 */
class ColorRgbIccType extends RegexValidator implements DataAwareValidator, Validator
{
    use ProvidesSelfValidation;

    public const REGULAR_EXPRESSION = 'rgb\-icc\( *(?:([0-9]+) *, *){3}([^,]+) *, *(?:([0-9.]+) *,? *){1,}\)';

    public function __construct()
    {
        parent::__construct(self::REGULAR_EXPRESSION);
    }

    /**
     * Validates ColorRgbIccType
     *
     * Mandatory: $root
     *
     * @throws ValidationException
     *
     * phpcs:disable Generic.CodeAnalysis.UnusedFunctionParameter.FoundInExtendedClassAfterLastUsed
     */
    public function validateWithContext(string $value, ?Tag $root, ?EmptyTag $current): bool
    {
        $matches = [];
        // phpcs:disable Squiz.Operators.ComparisonOperatorUsage.NotAllowed
        if (! preg_match('/^'.self::REGULAR_EXPRESSION.'$/', $value, $matches, PREG_OFFSET_CAPTURE)) {
            return false;
        }

        // Parse the string
        $values = $this->parseValue($value);

        // Validate first three through ColorRgbType
        $rgb = array_splice($values, 0, 3);
        if ((new ColorRgbType())->validate('rgb('.implode(',', $rgb).')') === false) {
            return false;
        }

        // Validate name
        $name = array_shift($values);
        if ($name === null || (new NcNameType())->validate($name) === false) {
            return false;
        }

        if ($root === null) {
            throw new ValidationException('ColorRgccIccType needs root context to validate value.');
        }

        $colorProfiles = $root->xpath('//color-profile[@color-profile-name="'.$name.'"]');
        if ($colorProfiles->isEmpty() === true) {
            return false;
        }

        // Validate only real values
        foreach ($values as $color) {
            // Handles ".5" notation
            if (preg_match('/^\.\d+$/', $color) === 1) {
                $color = '0'.$color;
            }
            if (is_numeric($color) === true && floatval($color) >= 0 && floatval($color) <= 1) {
                continue;
            }

            return false;
        }

        return true;
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
        if (str_starts_with($colorsMatch, 'rgb-icc(') === false) {
            return [];
        }
        $colorsMatch = substr($colorsMatch, 8);
        if (str_ends_with($colorsMatch, ')') === false) {
            return [];
        }
        $colorsMatch = substr($colorsMatch, 0, -1);

        return explode(',', $colorsMatch);
    }
}
