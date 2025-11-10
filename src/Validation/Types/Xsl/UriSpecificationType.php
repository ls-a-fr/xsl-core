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
class UriSpecificationType extends RegexValidator implements Validator
{
    use ProvidesSelfValidation;

    public const REGULAR_EXPRESSION = 'url\( *([\'"]?)([^\'"]+)\1 *\)';

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

        return (bool) filter_var(trim($matches[2]), FILTER_VALIDATE_URL);
    }
}
