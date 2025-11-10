<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsd\Generator\Transformers\Services\RegexService;
use Lsa\Xsl\Core\Validation\Types\FontFamilyType;

/**
 * A string of characters identifying a font.
 * <enumeration value = "serif"/>
 * <enumeration value = "sans-serif"/>
 * <enumeration value = "Arial"/>
 * <enumeration value = "Times"/>
 * <enumeration value = "Courier"/>
 * <enumeration value = "Zapf Dingbats"/>
 * <enumeration value = "code39"/>
 * <enumeration value = "cyberbit"/>
 * <enumeration value = "Edwardian Script ITC"/>
 * <enumeration value = "Viner Hand ITC"/>
 * <enumeration value = "Georgia"/>
 * <enumeration value = "Bookman Old Style"/>
 * <enumeration value = "Book Antiqua"/>
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class FamilyNameType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new GenericFamilyType(),
            new RegexValidator(
                // Remove keywords, both lower and uppercase
                RegexService::excludeTokens(
                    [
                        GenericFamilyType::SERIF,
                        GenericFamilyType::SANS_SERIF,
                        GenericFamilyType::CURSIVE,
                        GenericFamilyType::FANTASY,
                        GenericFamilyType::MONOSPACE,
                        FontFamilyType::INHERIT,
                    ]
                ).'(?<fnq>[\'"]?)([^\'"]+)\k<fnq>'
            )
        ));
    }
}
