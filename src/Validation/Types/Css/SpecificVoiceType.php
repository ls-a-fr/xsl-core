<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Css;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;
use Lsa\Xml\Utils\Validation\Xml\IdentifierType;

/**
 * A comma-separated, prioritized list of voice family names. CSS2 Reference: "voice-family" property
 *
 * @see https://www.w3.org/TR/xsl11/#cssdatat
 */
class SpecificVoiceType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new RegexValidator(
            /* phpcs:disable Squiz.PHP.CommentedOutCode.Found, Squiz.Strings.ConcatenationSpacing.PaddingFound, Generic.Strings.UnnecessaryStringConcat.Found
             *
             * Remove keywords, both lower and uppercase
             * This will create the following regular expression parts:
             * - (?![cC][hH][iI][lL][dD])
             * - (?![fF][eE][mM][aA][lL][eE])
             * - (?![mM][aA][lL][eE])
             * - ...
             */
            implode('', array_map(
                fn ($v) => '(?!'.implode('', array_map(
                    fn ($c) => '['.strtolower($c).strtoupper($c).']',
                    str_split($v)
                )).')',
                [
                    GenericVoiceType::CHILD,
                    GenericVoiceType::FEMALE,
                    GenericVoiceType::MALE,
                    'inherit',
                ]
            )).
                IdentifierType::INVALID_START.
                '(?<svq>[\'"]?)'.
                IdentifierType::IDENTIFIER_START_CHAR.
                '(?: |'.IdentifierType::IDENTIFIER_CHAR.')*'.
                '\k<svq>',
            'u'
        ));
    }
}
