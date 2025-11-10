<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Css;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CumulativeValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Iso3166\CountryType;
use Lsa\Xsl\Core\Validation\Types\Iso639\LanguageType;

/**
 * The following "datatypes" are used in the definitions of some CSS2 properties. These are not
 * considered datatypes in XSL, as they are merely notational shorthand.
 *
 * <string>: a language and optionally a country specifier in conformance with [RFC3066]
 *
 * @see https://www.w3.org/TR/xsl11/#cssdatat
 */
class LanguageCountryType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new LanguageType(),
            (new CumulativeValidator(
                new LanguageType(),
                new CountryType()
            ))->separator('-')
        ));
    }
}
