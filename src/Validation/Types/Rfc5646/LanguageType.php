<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Rfc5646;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Traits\ProvidesSelfValidation;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xsl\Core\Validation\Types\Iso15924\ScriptAlphabeticType;
use Lsa\Xsl\Core\Validation\Types\Iso3166\CountryType;
use Lsa\Xsl\Core\Validation\Types\Iso639\LanguageType as Iso639LanguageType;
use Lsa\Xsl\Core\Validation\Types\Iso639\SublanguageType;

/**
 * Validates a RFC5646 language
 *
 * @see https://www.rfc-editor.org/rfc/rfc5646.html
 */
class LanguageType extends Type implements Validator
{
    use ProvidesSelfValidation;

    /**
     *  Language-Tag  = langtag               ; normal language tags
     *                / privateuse            ; private use tag
     *                / grandfathered         ; grandfathered tags
     * phpcs:disable Generic.Strings.UnnecessaryStringConcat.Found,Squiz.Strings.ConcatenationSpacing.PaddingFound
     */
    public const LANGUAGE_TAG = '^'.self::LANGTAG.
        '|(?<mainprivateuse>'.self::PRIVATE_USE.')|(?<grandfathered>'.
        self::GRANDFATHERED.')$';

    /**
     * Format :
     *  langtag       = language
     *                  ["-" script]
     *                  ["-" region]
     *                  *("-" variant)
     *                  *("-" extension)
     *                  ["-" privateuse]
     * phpcs:disable Generic.Strings.UnnecessaryStringConcat.Found,Squiz.Strings.ConcatenationSpacing.PaddingFound
     */
    public const LANGTAG = '((?<language>'.self::LANGUAGE.')'.
        '-?(?<sublanguage>'.self::SUBLANGUAGE.'(?:-))?'.
        '|(?<reserved>'.self::RESERVED_LANGUAGE.'))'.
        '-?(?<script>'.self::SCRIPT.')?'.
        '-?(?<region>'.self::REGION.')?'.
        '-?(?<variant>('.self::VARIANT.')+)?'.
        '-?(?<extension>('.self::EXTENSION.'-?)+)?'.
        '-?(?<privateuse>'.self::PRIVATE_USE.'-?('.self::EXTENSION_PART.')?)?';

    /**
     * Format:
     *  language      = 2*3ALPHA              ; shortest ISO 639 code
     *                  ["-" extlang]         ; sometimes followed by
     *                                        ; extended language subtags
     *                / 4ALPHA                ; or reserved for future use
     *                / 5*8ALPHA              ; or registered language subtag
     */
    public const LANGUAGE = '[a-z]{2,3}';

    /**
     * Used to build LANGTAG
     */
    public const SUBLANGUAGE = '[a-z]{3}';

    /**
     * Used to build RESERVED_LANGUAGE
     */
    public const RESERVED_LANGUAGE = '[a-z]{4,8}';

    /**
     * Format:
     *  extlang       = 3ALPHA                ; selected ISO 639 codes
     *                  *2("-" 3ALPHA)        ; permanently reserved
     */
    public const EXTLANG = '[a-z]{3}|[a-z]{3}-[a-z]{3}';

    /**
     * Format:
     *  script        = 4ALPHA                ; ISO 15924 code
     */
    public const SCRIPT = '[A-Z][a-z]{3}';

    /**
     * Format:
     *  region        = 2ALPHA                ; ISO 3166-1 code
     *                / 3DIGIT                ; UN M.49 code
     */
    public const REGION = '[A-Z]{2}|[0-9]{3}';

    /**
     * Format:
     *  variant       = 5*8alphanum           ; registered variants
     *                / (DIGIT 3alphanum)
     */
    public const VARIANT = '[a-zA-Z0-9]{5,8}-?|[0-9]{3,4}-?';

    /**
     * Format:
     *  extension     = singleton 1*("-" (2*8alphanum))
     */
    public const EXTENSION = self::SINGLETON.'-'.self::EXTENSION_PART.'-?'.self::EXTENSION_PART.'?';

    /**
     * Used to build EXTENSION
     */
    public const EXTENSION_PART = '[0-9A-Za-z]{2,8}';

    /**
     * Format:
     *                                        ; Single alphanumerics
     *                                        ; "x" reserved for private use
     *  singleton     = DIGIT                 ; 0 - 9
     *                / %x41-57               ; A - W
     *                / %x59-5A               ; Y - Z
     *                / %x61-77               ; a - w
     *                / %x79-7A               ; y - z
     */
    public const SINGLETON = '[0-9A-WY-Za-wy-z]';

    /**
     * Format:
     *  privateuse    = "x" 1*("-" (1*8alphanum))
     */
    public const PRIVATE_USE = '[xX]-[0-9A-Za-z]{1,8}';

    /**
     * Used to create LANGTAG
     */
    public const GRANDFATHERED = self::IRREGULAR.'|'.self::REGULAR;

    /**
     * Format:
     *  irregular     = "en-GB-oed"         ; irregular tags do not match
     *               / "i-ami"              ; the 'langtag' production and
     *               / "i-bnn"              ; would not otherwise be
     *               / "i-default"          ; considered 'well-formed'
     *               / "i-enochian"         ; These tags are all valid,
     *               / "i-hak"              ; but most are deprecated
     *               / "i-klingon"          ; in favor of more modern
     *               / "i-lux"              ; subtags or subtag
     *               / "i-mingo"            ; combination
     */
    public const IRREGULAR = 'en-GB-oed|i-ami|i-bnn|i-default|i-enochian|i-hak|i-klingon|i-lux|i-mingo';

    /**
     * Format:
     *  regular       = "art-lojban"        ; these tags match the 'langtag'
     *               / "cel-gaulish"        ; production, but their subtags
     *               / "no-bok"             ; are not extended language
     *               / "no-nyn"             ; or variant subtags: their meaning
     *               / "zh-guoyu"           ; is defined by their registration
     *               / "zh-hakka"           ; and all of these are deprecated
     *               / "zh-min"             ; in favor of a more modern
     *               / "zh-min-nan"         ; subtag or sequence of subtags
     *               / "zh-xiang"
     */
    public const REGULAR = 'art-lojban|cel-gaulish|no-bok|no-nyn|zh-guoyu|zh-hakka|zh-min|zh-min-nan|zh-xiang';

    /**
     * Utility function to get a group match in regular expression result
     *
     * @param  string  $chunkName  Regular Expression group name
     * @param  array<string|int,string>  $matches  Regular Expression matches
     * @return ?string Result
     */
    protected function getChunk(string $chunkName, array $matches)
    {
        if (isset($matches[$chunkName]) === true && $matches[$chunkName] !== '') {
            return trim($matches[$chunkName], '-');
        }

        return null;
    }

    public function validate(string $value): bool
    {
        $matches = [];
        // phpcs:disable Squiz.Operators.ComparisonOperatorUsage.NotAllowed
        if (! \preg_match('/'.self::LANGUAGE_TAG.'/', $value, $matches)) {
            return false;
        }
        // For a reason that I don't get, ^ and $ does not match start and end of string
        if (strlen($matches[0]) !== strlen($value)) {
            return false;
        }

        $language = $this->getChunk('language', $matches);
        $sublanguage = $this->getChunk('sublanguage', $matches);
        $script = $this->getChunk('script', $matches);
        $region = $this->getChunk('region', $matches);
        $grandfathered = $this->getChunk('grandfathered', $matches);
        $mainprivateuse = $this->getChunk('mainprivateuse', $matches);

        // Elements mainprivateuse and grandfathered are considered valid
        if ($mainprivateuse !== null || $grandfathered !== null) {
            return true;
        }

        // Invalid form found, stop here
        if ($language === null && $sublanguage === null) {
            return false;
        }

        // Language and sublanguage may be mixed up
        if ($language !== null && $sublanguage === null && (new SublanguageType())->validate($language) === true) {
            $sublanguage = $language;
            $language = null;
        }

        // Note: reserved, extension, variant and privateuse are not validated
        if ($language !== null && (new Iso639LanguageType())->validate($language) === false) {
            return false;
        }
        if ($sublanguage !== null && (new SublanguageType())->validate($sublanguage) === false) {
            return false;
        }
        if ($script !== null && (new ScriptAlphabeticType())->validate($script) === false) {
            return false;
        }
        // Note: Numeric regions are not validated
        if ($region !== null && \is_numeric($region) === false && (new CountryType())->validate($region) === false) {
            return false;
        }

        return true;
    }
}
