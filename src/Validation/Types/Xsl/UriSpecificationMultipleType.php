<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Traits\ProvidesSelfValidation;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;

/**
 * A sequence of characters that is "url(", followed by optional white space, followed by an optional
 * single quote (') or double quote (") character, followed by an IRI reference as defined in [RFC3987],
 * followed by an optional single quote (') or double quote (") character, followed by optional white space,
 * followed by ")". The two quote characters must be the same and must both be present or absent. If the
 * IRI reference contains a single quote, the two quote characters must be present and be double quotes.
 * Note: The definition differs from that in CSS2 in that this Recommendation allows IRIs whereas CSS2
 * only allows URIs.
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class UriSpecificationMultipleType extends RegexValidator implements Validator
{
    use ProvidesSelfValidation;

    public const REGULAR_EXPRESSION = '( *url\( *([\'"]?)([^\'"]+)\2 *\) *)*( *url\( *([\'"]?)([^\'"]+)\5 *\))';

    public function __construct()
    {
        parent::__construct(self::REGULAR_EXPRESSION);
    }

    public function validate(string $value): bool
    {
        $matches = [];
        // phpcs:disable Squiz.Operators.ComparisonOperatorUsage.NotAllowed
        if (! preg_match('/^'.self::REGULAR_EXPRESSION.'$/', $value, $matches, PREG_OFFSET_CAPTURE)) {
            return false;
        }

        // Parse the string
        $urls = $this->parseValue($value);
        foreach ($urls as $url) {
            if ((bool) filter_var($url, FILTER_VALIDATE_URL) === false) {
                return false;
            }
        }

        return true;
    }

    /**
     * Parses the tag attribute value
     *
     * @param  string  $value  The value to parse
     * @return string[] URLs found in this value
     */
    protected function parseValue(string $value): array
    {
        $urls = [];
        $hasQuotes = null;
        $parenthesis = false;
        $inUrl = false;
        $currentIndex = 0;
        $valueLength = strlen($value);

        for ($i = 0; $i < $valueLength; $i++) {
            if ($value[$i] === '(') {
                $parenthesis = true;

                continue;
            }
            if ($value[$i] === ')') {
                $parenthesis = false;
                $inUrl = false;
                $hasQuotes = null;
                $currentIndex++;

                continue;
            }
            if ($parenthesis === true && $inUrl === false && ($value[$i] === "'" || $value[$i] === '"')) {
                $hasQuotes = true;
            }
            if ($parenthesis === true && $inUrl === false && $value[$i] !== ' ') {
                $inUrl = true;
                $hasQuotes = false;
            }
            if ($parenthesis === true && $inUrl === true && $value[$i] !== "'" && $value[$i] !== '"') {
                if (! isset($urls[$currentIndex])) {
                    $urls[$currentIndex] = '';
                }
                if ($value[$i] == ' ' && ! $hasQuotes) {
                    continue;
                }
                $urls[$currentIndex] .= $value[$i];
            }
            if ($parenthesis === true && $inUrl === true && ($value[$i] === "'" || $value[$i] === '"')) {
                $inUrl = false;
            }
        }

        return $urls;
    }
}
