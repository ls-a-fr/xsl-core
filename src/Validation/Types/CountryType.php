<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xsl\Core\Validation\Types\Iso3166\CountryType as Iso3166CountryType;

/**
 * Validates ContryType property.
 *
 * @see https://www.w3.org/TR/xsl11/#country
 */
class CountryType extends Type implements Validator
{
    /**
     * Indicates the country is unknown or is not significant to the proper formatting of this object.
     */
    public const NONE = 'none';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        /**
         * CountryType is an EnumValidator
         *
         * @var EnumValidator $enumValidator
         */
        $enumValidator = (new Iso3166CountryType())->getValidator();

        // phpcs:disable Squiz.Arrays.ArrayDeclaration.ValueNoNewline
        return $this->cache(new EnumValidator([
            ...$enumValidator->values,
            ...[
                self::NONE,
                self::INHERIT,
            ],
        ]));
    }
}
