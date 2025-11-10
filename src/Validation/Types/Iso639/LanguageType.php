<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Iso639;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;

/**
 * A 3-letter code conforming to a [ISO639-2] terminology or bibliographic code or a 2-letter code
 * conforming to a [ISO639] 2-letter code.
 *
 * Specifies the language to be used by the formatter in language-/locale-coupled services, such as
 * line-justification strategy, line-breaking, and hyphenation.
 *
 * Note: This may affect line composition in a system-dependent way.
 * Note: ISO 639 2-letter and ISO 639-2 terminology 3-letter codes are also used in the language
 * component of [RFC3066], but user-defined and IANA registered language codes that are allowed in
 * RFC 3066 are not allowed as the value of this property.
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 * @see https://en.wikipedia.org/wiki/List_of_ISO_639-2_codes
 */
class LanguageType extends Type implements Validator
{
    /**
     * Afar
     */
    public const AA = 'aa';

    /**
     * Abkhazian
     */
    public const AB = 'ab';

    /**
     * Afrikaans
     */
    public const AF = 'af';

    /**
     * Akan
     */
    public const AK = 'ak';

    /**
     * Amharic
     */
    public const AM = 'am';

    /**
     * Arabic
     */
    public const AR = 'ar';

    /**
     * Aragonese
     */
    public const AN = 'an';

    /**
     * Assamese
     */
    public const AS = 'as';

    /**
     * Avaric
     */
    public const AV = 'av';

    /**
     * Avestan
     */
    public const AE = 'ae';

    /**
     * Aymara
     */
    public const AY = 'ay';

    /**
     * Azerbaijani
     */
    public const AZ = 'az';

    /**
     * Bashkir
     */
    public const BA = 'ba';

    /**
     * Bambara
     */
    public const BM = 'bm';

    /**
     * Belarusian
     */
    public const BE = 'be';

    /**
     * Bengali
     */
    public const BN = 'bn';

    /**
     * Bislama
     */
    public const BI = 'bi';

    /**
     * Tibetan
     */
    public const BO = 'bo';

    /**
     * Bosnian
     */
    public const BS = 'bs';

    /**
     * Breton
     */
    public const BR = 'br';

    /**
     * Bulgarian
     */
    public const BG = 'bg';

    /**
     * Catalan; Valencian
     */
    public const CA = 'ca';

    /**
     * Czech
     */
    public const CS = 'cs';

    /**
     * Chamorro
     */
    public const CH = 'ch';

    /**
     * Chechen
     */
    public const CE = 'ce';

    /**
     * Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic
     */
    public const CU = 'cu';

    /**
     * Chuvash
     */
    public const CV = 'cv';

    /**
     * Cornish
     */
    public const KW = 'kw';

    /**
     * Corsican
     */
    public const CO = 'co';

    /**
     * Cree
     */
    public const CR = 'cr';

    /**
     * Welsh
     */
    public const CY = 'cy';

    /**
     * Danish
     */
    public const DA = 'da';

    /**
     * German
     */
    public const DE = 'de';

    /**
     * Divehi; Dhivehi; Maldivian
     */
    public const DV = 'dv';

    /**
     * Dzongkha
     */
    public const DZ = 'dz';

    /**
     * Greek, Modern (1453–)
     */
    public const EL = 'el';

    /**
     * English
     */
    public const EN = 'en';

    /**
     * Esperanto
     */
    public const EO = 'eo';

    /**
     * Estonian
     */
    public const ET = 'et';

    /**
     * Basque
     */
    public const EU = 'eu';

    /**
     * Ewe
     */
    public const EE = 'ee';

    /**
     * Faroese
     */
    public const FO = 'fo';

    /**
     * Persian
     */
    public const FA = 'fa';

    /**
     * Fijian
     */
    public const FJ = 'fj';

    /**
     * Finnish
     */
    public const FI = 'fi';

    /**
     * French
     */
    public const FR = 'fr';

    /**
     * Western Frisian
     */
    public const FY = 'fy';

    /**
     * Fulah
     */
    public const FF = 'ff';

    /**
     * Gaelic; Scottish Gaelic
     */
    public const GD = 'gd';

    /**
     * Irish
     */
    public const GA = 'ga';

    /**
     * Galician
     */
    public const GL = 'gl';

    /**
     * Manx
     */
    public const GV = 'gv';

    /**
     * Guarani
     */
    public const GN = 'gn';

    /**
     * Gujarati
     */
    public const GU = 'gu';

    /**
     * Haitian; Haitian Creole
     */
    public const HT = 'ht';

    /**
     * Hausa
     */
    public const HA = 'ha';

    /**
     * Hebrew
     */
    public const HE = 'he';

    /**
     * Herero
     */
    public const HZ = 'hz';

    /**
     * Hindi
     */
    public const HI = 'hi';

    /**
     * Hiri Motu
     */
    public const HO = 'ho';

    /**
     * Croatian
     */
    public const HR = 'hr';

    /**
     * Hungarian
     */
    public const HU = 'hu';

    /**
     * Armenian
     */
    public const HY = 'hy';

    /**
     * Igbo
     */
    public const IG = 'ig';

    /**
     * Ido
     */
    public const IO = 'io';

    /**
     * Sichuan Yi; Nuosu
     */
    public const II = 'ii';

    /**
     * Inuktitut
     */
    public const IU = 'iu';

    /**
     * Interlingue; Occidental
     */
    public const IE = 'ie';

    /**
     * Interlingua (International Auxiliary Language Association)
     */
    public const IA = 'ia';

    /**
     * Indonesian
     */
    public const ID = 'id';

    /**
     * Inupiaq
     */
    public const IK = 'ik';

    /**
     * Icelandic
     */
    public const IS = 'is';

    /**
     * Italian
     */
    public const IT = 'it';

    /**
     * Javanese
     */
    public const JV = 'jv';

    /**
     * Japanese
     */
    public const JA = 'ja';

    /**
     * Kalaallisut; Greenlandic
     */
    public const KL = 'kl';

    /**
     * Kannada
     */
    public const KN = 'kn';

    /**
     * Kashmiri
     */
    public const KS = 'ks';

    /**
     * Georgian
     */
    public const KA = 'ka';

    /**
     * Kanuri
     */
    public const KR = 'kr';

    /**
     * Kazakh
     */
    public const KK = 'kk';

    /**
     * Central Khmer
     */
    public const KM = 'km';

    /**
     * Kikuyu; Gikuyu
     */
    public const KI = 'ki';

    /**
     * Kinyarwanda
     */
    public const RW = 'rw';

    /**
     * Kirghiz; Kyrgyz
     */
    public const KY = 'ky';

    /**
     * Komi
     */
    public const KV = 'kv';

    /**
     * Kongo
     */
    public const KG = 'kg';

    /**
     * Korean
     */
    public const KO = 'ko';

    /**
     * Kuanyama; Kwanyama
     */
    public const KJ = 'kj';

    /**
     * Kurdish
     */
    public const KU = 'ku';

    /**
     * Lao
     */
    public const LO = 'lo';

    /**
     * Latin
     */
    public const LA = 'la';

    /**
     * Latvian
     */
    public const LV = 'lv';

    /**
     * Limburgan; Limburger; Limburgish
     */
    public const LI = 'li';

    /**
     * Lingala
     */
    public const LN = 'ln';

    /**
     * Lithuanian
     */
    public const LT = 'lt';

    /**
     * Luxembourgish; Letzeburgesch
     */
    public const LB = 'lb';

    /**
     * Luba-Katanga
     */
    public const LU = 'lu';

    /**
     * Ganda
     */
    public const LG = 'lg';

    /**
     * Marshallese
     */
    public const MH = 'mh';

    /**
     * Malayalam
     */
    public const ML = 'ml';

    /**
     * Marathi
     */
    public const MR = 'mr';

    /**
     * Macedonian
     */
    public const MK = 'mk';

    /**
     * Malagasy
     */
    public const MG = 'mg';

    /**
     * Maltese
     */
    public const MT = 'mt';

    /**
     * Mongolian
     */
    public const MN = 'mn';

    /**
     * Maori
     */
    public const MI = 'mi';

    /**
     * Malay
     */
    public const MS = 'ms';

    /**
     * Burmese
     */
    public const MY = 'my';

    /**
     * Nauru
     */
    public const NA = 'na';

    /**
     * Navajo; Navaho
     */
    public const NV = 'nv';

    /**
     * Ndebele, South; South Ndebele
     */
    public const NR = 'nr';

    /**
     * Ndebele, North; North Ndebele
     */
    public const ND = 'nd';

    /**
     * Ndonga
     */
    public const NG = 'ng';

    /**
     * Nepali
     */
    public const NE = 'ne';

    /**
     * Dutch; Flemish
     */
    public const NL = 'nl';

    /**
     * Norwegian Nynorsk; Nynorsk, Norwegian
     */
    public const NN = 'nn';

    /**
     * Bokmål, Norwegian; Norwegian Bokmål
     */
    public const NB = 'nb';

    /**
     * Norwegian
     */
    public const NO = 'no';

    /**
     * Chichewa; Chewa; Nyanja
     */
    public const NY = 'ny';

    /**
     * Occitan (post 1500)
     */
    public const OC = 'oc';

    /**
     * Ojibwa
     */
    public const OJ = 'oj';

    /**
     * Oriya
     */
    public const OR = 'or';

    /**
     * Oromo
     */
    public const OM = 'om';

    /**
     * Ossetian; Ossetic
     */
    public const OS = 'os';

    /**
     * Panjabi; Punjabi
     */
    public const PA = 'pa';

    /**
     * Pali
     */
    public const PI = 'pi';

    /**
     * Polish
     */
    public const PL = 'pl';

    /**
     * Portuguese
     */
    public const PT = 'pt';

    /**
     * Pushto; Pashto
     */
    public const PS = 'ps';

    /**
     * Quechua
     */
    public const QU = 'qu';

    /**
     * Romansh
     */
    public const RM = 'rm';

    /**
     * Romanian; Moldavian; Moldovan
     */
    public const RO = 'ro';

    /**
     * Rundi
     */
    public const RN = 'rn';

    /**
     * Russian
     */
    public const RU = 'ru';

    /**
     * Sango
     */
    public const SG = 'sg';

    /**
     * Sanskrit
     */
    public const SA = 'sa';

    /**
     * Sinhala; Sinhalese
     */
    public const SI = 'si';

    /**
     * Slovak
     */
    public const SK = 'sk';

    /**
     * Slovenian
     */
    public const SL = 'sl';

    /**
     * Northern Sami
     */
    public const SE = 'se';

    /**
     * Samoan
     */
    public const SM = 'sm';

    /**
     * Shona
     */
    public const SN = 'sn';

    /**
     * Sindhi
     */
    public const SD = 'sd';

    /**
     * Somali
     */
    public const SO = 'so';

    /**
     * Sotho, Southern
     */
    public const ST = 'st';

    /**
     * Spanish; Castilian
     */
    public const ES = 'es';

    /**
     * Albanian
     */
    public const SQ = 'sq';

    /**
     * Sardinian
     */
    public const SC = 'sc';

    /**
     * Serbian
     */
    public const SR = 'sr';

    /**
     * Swati
     */
    public const SS = 'ss';

    /**
     * Sundanese
     */
    public const SU = 'su';

    /**
     * Swahili
     */
    public const SW = 'sw';

    /**
     * Swedish
     */
    public const SV = 'sv';

    /**
     * Tahitian
     */
    public const TY = 'ty';

    /**
     * Tamil
     */
    public const TA = 'ta';

    /**
     * Tatar
     */
    public const TT = 'tt';

    /**
     * Telugu
     */
    public const TE = 'te';

    /**
     * Tajik
     */
    public const TG = 'tg';

    /**
     * Tagalog
     */
    public const TL = 'tl';

    /**
     * Thai
     */
    public const TH = 'th';

    /**
     * Tigrinya
     */
    public const TI = 'ti';

    /**
     * Tonga (Tonga Islands)
     */
    public const TO = 'to';

    /**
     * Tswana
     */
    public const TN = 'tn';

    /**
     * Tsonga
     */
    public const TS = 'ts';

    /**
     * Turkmen
     */
    public const TK = 'tk';

    /**
     * Turkish
     */
    public const TR = 'tr';

    /**
     * Twi
     */
    public const TW = 'tw';

    /**
     * Uighur; Uyghur
     */
    public const UG = 'ug';

    /**
     * Ukrainian
     */
    public const UK = 'uk';

    /**
     * Urdu
     */
    public const UR = 'ur';

    /**
     * Uzbek
     */
    public const UZ = 'uz';

    /**
     * Venda
     */
    public const VE = 've';

    /**
     * Vietnamese
     */
    public const VI = 'vi';

    /**
     * Volapük
     */
    public const VO = 'vo';

    /**
     * Walloon
     */
    public const WA = 'wa';

    /**
     * Wolof
     */
    public const WO = 'wo';

    /**
     * Xhosa
     */
    public const XH = 'xh';

    /**
     * Yiddish
     */
    public const YI = 'yi';

    /**
     * Yoruba
     */
    public const YO = 'yo';

    /**
     * Zhuang; Chuang
     */
    public const ZA = 'za';

    /**
     * Chinese
     */
    public const ZH = 'zh';

    /**
     * Zulu
     */
    public const ZU = 'zu';

    /**
     * Afar
     * Two letter code: aa
     * Scope: Individual
     * Type: Living
     * Native name(s) : Qafaraf; ’Afar Af; Afaraf; Qafar af
     */
    public const AAR = 'aar';

    /**
     * Abkhazian
     * Two letter code: ab
     * Scope: Individual
     * Type: Living
     * Native name(s) : Аҧсуа бызшәа Aƥsua bızšwa; Аҧсшәа Aƥsua
     */
    public const ABK = 'abk';

    /**
     * Achinese
     * Scope: Individual
     * Type: Living
     * Native name(s) : بهسا اچيه, Basa Acèh
     */
    public const ACE = 'ace';

    /**
     * Acoli
     * Scope: Individual
     * Type: Living
     * Native name(s) : Lwo
     */
    public const ACH = 'ach';

    /**
     * Adangme
     * Scope: Individual
     * Type: Living
     * Native name(s) : Dangme
     */
    public const ADA = 'ada';

    /**
     * Adyghe; Adygei
     * Scope: Individual
     * Type: Living
     * Native name(s) : Адыгабзэ; Кӏахыбзэ
     */
    public const ADY = 'ady';

    /**
     * Afro-Asiatic languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const AFA = 'afa';

    /**
     * Afrihili
     * Scope: Individual
     * Type: Constructed
     * Native name(s) : El-Afrihili
     */
    public const AFH = 'afh';

    /**
     * Afrikaans
     * Two letter code: af
     * Scope: Individual
     * Type: Living
     * Native name(s) : Afrikaans
     */
    public const AFR = 'afr';

    /**
     * Ainu
     * Scope: Individual
     * Type: Living
     * Native name(s) : アイヌ・イタㇰ, Ainu-itak
     */
    public const AIN = 'ain';

    /**
     * Akan
     * Two letter code: ak
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Akan
     */
    public const AKA = 'aka';

    /**
     * Akkadian
     * Scope: Individual
     * Type: Ancient
     * Native name(s) : 𒀝𒅗𒁺𒌑, Akkadû
     */
    public const AKK = 'akk';

    /**
     * Aleut
     * Scope: Individual
     * Type: Living
     * Native name(s) : Уна́ӈам тунуу́; Унаӈан умсуу
     */
    public const ALE = 'ale';

    /**
     * Algonquian languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const ALG = 'alg';

    /**
     * Southern Altai
     * Scope: Individual
     * Type: Living
     * Native name(s) : Алтай тили
     */
    public const ALT = 'alt';

    /**
     * Amharic
     * Two letter code: am
     * Scope: Individual
     * Type: Living
     * Native name(s) : አማርኛ; Amârıñâ
     */
    public const AMH = 'amh';

    /**
     * English, Old (ca.450–1100)
     * Scope: Individual
     * Type: Historical
     * Native name(s) : Ænglisc; Anglisc; Englisc
     */
    public const ANG = 'ang';

    /**
     * Angika
     * Scope: Individual
     * Type: Living
     * Native name(s) : अंगिका
     */
    public const ANP = 'anp';

    /**
     * Apache languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const APA = 'apa';

    /**
     * Arabic
     * Two letter code: ar
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : العربية; al'Arabiyyeẗ
     */
    public const ARA = 'ara';

    /**
     * Official Aramaic (700–300 BCE); Imperial Aramaic (700–300 BCE)
     * Scope: Individual
     * Type: Ancient
     * Native name(s) :
     */
    public const ARC = 'arc';

    /**
     * Aragonese
     * Two letter code: an
     * Scope: Individual
     * Type: Living
     * Native name(s) : Aragonés
     */
    public const ARG = 'arg';

    /**
     * Mapudungun; Mapuche
     * Scope: Individual
     * Type: Living
     * Native name(s) : Mapudungun
     */
    public const ARN = 'arn';

    /**
     * Arapaho
     * Scope: Individual
     * Type: Living
     * Native name(s) : Hinónoʼeitíít
     */
    public const ARP = 'arp';

    /**
     * Artificial languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const ART = 'art';

    /**
     * Arawak
     * Scope: Individual
     * Type: Living
     * Native name(s) : Lokono
     */
    public const ARW = 'arw';

    /**
     * Assamese
     * Two letter code: as
     * Scope: Individual
     * Type: Living
     * Native name(s) : অসমীয়া
     */
    public const ASM = 'asm';

    /**
     * Asturian; Bable; Leonese; Asturleonese
     * Scope: Individual
     * Type: Living
     * Native name(s) : Asturianu; Llïonés
     */
    public const AST = 'ast';

    /**
     * Athapascan languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const ATH = 'ath';

    /**
     * Australian languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const AUS = 'aus';

    /**
     * Avaric
     * Two letter code: av
     * Scope: Individual
     * Type: Living
     * Native name(s) : Авар мацӏ; Магӏарул мацӏ
     */
    public const AVA = 'ava';

    /**
     * Avestan
     * Two letter code: ae
     * Scope: Individual
     * Type: Ancient
     * Native name(s) :
     */
    public const AVE = 'ave';

    /**
     * Awadhi
     * Scope: Individual
     * Type: Living
     * Native name(s) : अवधी, Avadhī
     */
    public const AWA = 'awa';

    /**
     * Aymara
     * Two letter code: ay
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Aymar aru
     */
    public const AYM = 'aym';

    /**
     * Azerbaijani
     * Two letter code: az
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Azərbaycan dili; آذربایجان دیلی; Азәрбајҹан дили
     */
    public const AZE = 'aze';

    /**
     * Banda languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const BAD = 'bad';

    /**
     * Bamileke languages
     * Scope: Collective
     * Type:
     * Native name(s) : Bamiléké
     */
    public const BAI = 'bai';

    /**
     * Bashkir
     * Two letter code: ba
     * Scope: Individual
     * Type: Living
     * Native name(s) : Башҡорт теле; Başqort tele
     */
    public const BAK = 'bak';

    /**
     * Baluchi
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : بلۏچی
     */
    public const BAL = 'bal';

    /**
     * Bambara
     * Two letter code: bm
     * Scope: Individual
     * Type: Living
     * Native name(s) : ߓߡߊߣߊ߲ߞߊ߲, Bamanankan
     */
    public const BAM = 'bam';

    /**
     * Balinese
     * Scope: Individual
     * Type: Living
     * Native name(s) : ᬪᬵᬱᬩᬮᬶ; ᬩᬲᬩᬮᬶ; Basa Bali
     */
    public const BAN = 'ban';

    /**
     * Basa
     * Scope: Individual
     * Type: Living
     * Native name(s) : Mbene; Ɓasaá
     */
    public const BAS = 'bas';

    /**
     * Baltic languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const BAT = 'bat';

    /**
     * Beja; Bedawiyet
     * Scope: Individual
     * Type: Living
     * Native name(s) : Bidhaawyeet
     */
    public const BEJ = 'bej';

    /**
     * Belarusian
     * Two letter code: be
     * Scope: Individual
     * Type: Living
     * Native name(s) : Беларуская мова, Belaruskaâ mova
     */
    public const BEL = 'bel';

    /**
     * Bemba
     * Scope: Individual
     * Type: Living
     * Native name(s) : Chibemba
     */
    public const BEM = 'bem';

    /**
     * Bengali
     * Two letter code: bn
     * Scope: Individual
     * Type: Living
     * Native name(s) : বাংলা, Bāŋlā
     */
    public const BEN = 'ben';

    /**
     * Berber languages
     * Scope: Collective
     * Type:
     * Native name(s) : ⵜⴰⵎⴰⵣⵉⵖⵜ; ⵝⴰⵎⴰⵣⵉⵗⵝ; ⵜⴰⵎⴰⵣⵉⵗⵜ; Tamaziɣt; Tamazight
     */
    public const BER = 'ber';

    /**
     * Bhojpuri
     * Scope: Individual
     * Type: Living
     * Native name(s) : भोजपुरी
     */
    public const BHO = 'bho';

    /**
     * Bihari languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const BIH = 'bih';

    /**
     * Bikol
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Bikol
     */
    public const BIK = 'bik';

    /**
     * Bini; Edo
     * Scope: Individual
     * Type: Living
     * Native name(s) : Ẹ̀dó
     */
    public const BIN = 'bin';

    /**
     * Bislama
     * Two letter code: bi
     * Scope: Individual
     * Type: Living
     * Native name(s) : Bislama
     */
    public const BIS = 'bis';

    /**
     * Siksika
     * Scope: Individual
     * Type: Living
     * Native name(s) : ᓱᖽᐧᖿ
     */
    public const BLA = 'bla';

    /**
     * Bantu languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const BNT = 'bnt';

    /**
     * Tibetan
     * Two letter code: bo
     * Scope: Individual
     * Type: Living
     * Native name(s) : བོད་སྐད་, Bodskad; ལྷ་སའི་སྐད་, Lhas'iskad
     */
    public const BOD = 'bod';

    /**
     * Tibetan
     * Two letter code: bo
     * Scope: Individual
     * Type: Living
     * Native name(s) : བོད་སྐད་, Bodskad; ལྷ་སའི་སྐད་, Lhas'iskad
     */
    public const TIB = 'bod';

    /**
     * Bosnian
     * Two letter code: bs
     * Scope: Individual
     * Type: Living
     * Native name(s) : Bosanski
     */
    public const BOS = 'bos';

    /**
     * Braj
     * Scope: Individual
     * Type: Living
     * Native name(s) : ब्रजभाषा, Brij Bhasha
     */
    public const BRA = 'bra';

    /**
     * Breton
     * Two letter code: br
     * Scope: Individual
     * Type: Living
     * Native name(s) : Brezhoneg
     */
    public const BRE = 'bre';

    /**
     * Batak languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const BTK = 'btk';

    /**
     * Buriat
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : буряад хэлэн
     */
    public const BUA = 'bua';

    /**
     * Buginese
     * Scope: Individual
     * Type: Living
     * Native name(s) : ᨅᨔ ᨕᨘᨁᨗ
     */
    public const BUG = 'bug';

    /**
     * Bulgarian
     * Two letter code: bg
     * Scope: Individual
     * Type: Living
     * Native name(s) : български език, Bălgarski ezik
     */
    public const BUL = 'bul';

    /**
     * Blin; Bilin
     * Scope: Individual
     * Type: Living
     * Native name(s) : ብሊና; ብሊን
     */
    public const BYN = 'byn';

    /**
     * Caddo
     * Scope: Individual
     * Type: Living
     * Native name(s) : Hasí:nay
     */
    public const CAD = 'cad';

    /**
     * Central American Indian languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const CAI = 'cai';

    /**
     * Galibi Carib
     * Scope: Individual
     * Type: Living
     * Native name(s) : Kari'nja
     */
    public const CAR = 'car';

    /**
     * Catalan; Valencian
     * Two letter code: ca
     * Scope: Individual
     * Type: Living
     * Native name(s) : Català, Valencià
     */
    public const CAT = 'cat';

    /**
     * Caucasian languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const CAU = 'cau';

    /**
     * Cebuano
     * Scope: Individual
     * Type: Living
     * Native name(s) : Sinugbuanong Binisayâ
     */
    public const CEB = 'ceb';

    /**
     * Celtic languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const CEL = 'cel';

    /**
     * Czech
     * Two letter code: cs
     * Scope: Individual
     * Type: Living
     * Native name(s) : Čeština; Český jazyk
     */
    public const CES = 'ces';

    /**
     * Czech
     * Two letter code: cs
     * Scope: Individual
     * Type: Living
     * Native name(s) : Čeština; Český jazyk
     */
    public const CZE = 'ces';

    /**
     * Chamorro
     * Two letter code: ch
     * Scope: Individual
     * Type: Living
     * Native name(s) : Finu' Chamoru
     */
    public const CHA = 'cha';

    /**
     * Chibcha
     * Scope: Individual
     * Type: Extinct
     * Native name(s) : Muysccubun
     */
    public const CHB = 'chb';

    /**
     * Chechen
     * Two letter code: ce
     * Scope: Individual
     * Type: Living
     * Native name(s) : Нохчийн мотт; نَاخچیین موٓتت; ნახჩიე მუოთთ
     */
    public const CHE = 'che';

    /**
     * Chagatai
     * Scope: Individual
     * Type: Extinct
     * Native name(s) : جغتای
     */
    public const CHG = 'chg';

    /**
     * Chuukese
     * Scope: Individual
     * Type: Living
     * Native name(s) : Chuukese
     */
    public const CHK = 'chk';

    /**
     * Mari
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : марий йылме
     */
    public const CHM = 'chm';

    /**
     * Chinook Jargon
     * Scope: Individual
     * Type: Living
     * Native name(s) : Chinuk wawa; wawa; Chinook lelang; lelang
     */
    public const CHN = 'chn';

    /**
     * Choctaw
     * Scope: Individual
     * Type: Living
     * Native name(s) : Chahta'
     */
    public const CHO = 'cho';

    /**
     * Chipewyan; Dene Suline
     * Scope: Individual
     * Type: Living
     * Native name(s) : ᑌᓀᓱᒼᕄᓀ; Dënesųłiné
     */
    public const CHP = 'chp';

    /**
     * Cherokee
     * Scope: Individual
     * Type: Living
     * Native name(s) : ᏣᎳᎩ ᎦᏬᏂᎯᏍᏗ; Tsalagi gawonihisdi
     */
    public const CHR = 'chr';

    /**
     * Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic
     * Two letter code: cu
     * Scope: Individual
     * Type: Ancient
     * Native name(s) : Славе́нскїй ѧ҆зы́къ
     */
    public const CHU = 'chu';

    /**
     * Chuvash
     * Two letter code: cv
     * Scope: Individual
     * Type: Living
     * Native name(s) : Чӑвашла
     */
    public const CHV = 'chv';

    /**
     * Cheyenne
     * Scope: Individual
     * Type: Living
     * Native name(s) : Tsėhésenėstsestȯtse
     */
    public const CHY = 'chy';

    /**
     * Chamic languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const CMC = 'cmc';

    /**
     * Montenegrin
     * Scope: Individual
     * Type: Living
     * Native name(s) : Црногорски; Crnogorski
     */
    public const CNR = 'cnr';

    /**
     * Coptic
     * Scope: Individual
     * Type: Extinct
     * Native name(s) : ϯⲙⲉⲑⲣⲉⲙⲛ̀ⲭⲏⲙⲓ; ⲧⲙⲛ̄ⲧⲣⲙ̄ⲛ̄ⲕⲏⲙⲉ
     */
    public const COP = 'cop';

    /**
     * Cornish
     * Two letter code: kw
     * Scope: Individual
     * Type: Living
     * Native name(s) : Kernowek
     */
    public const COR = 'cor';

    /**
     * Corsican
     * Two letter code: co
     * Scope: Individual
     * Type: Living
     * Native name(s) : Corsu; Lingua corsa
     */
    public const COS = 'cos';

    /**
     * Creoles and pidgins, English based
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const CPE = 'cpe';

    /**
     * Creoles and pidgins, French-based
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const CPF = 'cpf';

    /**
     * Creoles and pidgins, Portuguese-based
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const CPP = 'cpp';

    /**
     * Cree
     * Two letter code: cr
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : ᓀᐦᐃᔭᐍᐏᐣ
     */
    public const CRE = 'cre';

    /**
     * Crimean Tatar; Crimean Turkish
     * Scope: Individual
     * Type: Living
     * Native name(s) : Къырымтатарджа; Къырымтатар тили; Ҡырымтатарҗа; Ҡырымтатар тили; Qırımtatar tili
     */
    public const CRH = 'crh';

    /**
     * Creoles and pidgins
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const CRP = 'crp';

    /**
     * Kashubian
     * Scope: Individual
     * Type: Living
     * Native name(s) : Kaszëbsczi jãzëk
     */
    public const CSB = 'csb';

    /**
     * Cushitic languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const CUS = 'cus';

    /**
     * Welsh
     * Two letter code: cy
     * Scope: Individual
     * Type: Living
     * Native name(s) : Cymraeg; y Gymraeg
     */
    public const CYM = 'cym';

    /**
     * Welsh
     * Two letter code: cy
     * Scope: Individual
     * Type: Living
     * Native name(s) : Cymraeg; y Gymraeg
     */
    public const WEL = 'cym';

    /**
     * Dakota
     * Scope: Individual
     * Type: Living
     * Native name(s) : Dakhótiyapi; Dakȟótiyapi
     */
    public const DAK = 'dak';

    /**
     * Danish
     * Two letter code: da
     * Scope: Individual
     * Type: Living
     * Native name(s) : Dansk
     */
    public const DAN = 'dan';

    /**
     * Dargwa
     * Scope: Individual
     * Type: Living
     * Native name(s) : Дарган мез
     */
    public const DAR = 'dar';

    /**
     * Land Dayak languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const DAY = 'day';

    /**
     * Delaware
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Lënapei èlixsuwakàn
     */
    public const DEL = 'del';

    /**
     * Slave (Athapascan)
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Dene K'e
     */
    public const DEN = 'den';

    /**
     * German
     * Two letter code: de
     * Scope: Individual
     * Type: Living
     * Native name(s) : Deutsch
     */
    public const DEU = 'deu';

    /**
     * German
     * Two letter code: de
     * Scope: Individual
     * Type: Living
     * Native name(s) : Deutsch
     */
    public const GER = 'deu';

    /**
     * Tlicho; Dogrib
     * Scope: Individual
     * Type: Living
     * Native name(s) : Tłı̨chǫ Yatıì
     */
    public const DGR = 'dgr';

    /**
     * Dinka
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Thuɔŋjäŋ
     */
    public const DIN = 'din';

    /**
     * Divehi; Dhivehi; Maldivian
     * Two letter code: dv
     * Scope: Individual
     * Type: Living
     * Native name(s) : ދިވެހި ދިވެހިބަސް, Divehi
     */
    public const DIV = 'div';

    /**
     * Dogri
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : 𑠖𑠵𑠌𑠤𑠮; डोगरी; ڈوگرى
     */
    public const DOI = 'doi';

    /**
     * Dravidian languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const DRA = 'dra';

    /**
     * Lower Sorbian
     * Scope: Individual
     * Type: Living
     * Native name(s) : Dolnoserbski; Dolnoserbšćina
     */
    public const DSB = 'dsb';

    /**
     * Duala
     * Scope: Individual
     * Type: Living
     * Native name(s) : Duálá
     */
    public const DUA = 'dua';

    /**
     * Dutch, Middle (ca. 1050–1350)
     * Scope: Individual
     * Type: Historical
     * Native name(s) :
     */
    public const DUM = 'dum';

    /**
     * Dyula
     * Scope: Individual
     * Type: Living
     * Native name(s) : Julakan
     */
    public const DYU = 'dyu';

    /**
     * Dzongkha
     * Two letter code: dz
     * Scope: Individual
     * Type: Living
     * Native name(s) : རྫོང་ཁ་, Ĵoŋkha
     */
    public const DZO = 'dzo';

    /**
     * Efik
     * Scope: Individual
     * Type: Living
     * Native name(s) : Usem Efịk
     */
    public const EFI = 'efi';

    /**
     * Egyptian (Ancient)
     * Scope: Individual
     * Type: Ancient
     * Native name(s) :
     */
    public const EGY = 'egy';

    /**
     * Ekajuk
     * Scope: Individual
     * Type: Living
     * Native name(s) : Ekajuk
     */
    public const EKA = 'eka';

    /**
     * Greek, Modern (1453–)
     * Two letter code: el
     * Scope: Individual
     * Type: Living
     * Native name(s) : Νέα Ελληνικά, Néa Ellêniká
     */
    public const ELL = 'ell';

    /**
     * Greek, Modern (1453–)
     * Two letter code: el
     * Scope: Individual
     * Type: Living
     * Native name(s) : Νέα Ελληνικά, Néa Ellêniká
     */
    public const GRE = 'ell';

    /**
     * Elamite
     * Scope: Individual
     * Type: Ancient
     * Native name(s) :
     */
    public const ELX = 'elx';

    /**
     * English
     * Two letter code: en
     * Scope: Individual
     * Type: Living
     * Native name(s) : English
     */
    public const ENG = 'eng';

    /**
     * English, Middle (1100–1500)
     * Scope: Individual
     * Type: Historical
     * Native name(s) :
     */
    public const ENM = 'enm';

    /**
     * Esperanto
     * Two letter code: eo
     * Scope: Individual
     * Type: Constructed
     * Native name(s) : Esperanto
     */
    public const EPO = 'epo';

    /**
     * Estonian
     * Two letter code: et
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Eesti keel
     */
    public const EST = 'est';

    /**
     * Basque
     * Two letter code: eu
     * Scope: Individual
     * Type: Living
     * Native name(s) : Euskara
     */
    public const EUS = 'eus';

    /**
     * Basque
     * Two letter code: eu
     * Scope: Individual
     * Type: Living
     * Native name(s) : Euskara
     */
    public const BAQ = 'eus';

    /**
     * Ewe
     * Two letter code: ee
     * Scope: Individual
     * Type: Living
     * Native name(s) : Èʋegbe
     */
    public const EWE = 'ewe';

    /**
     * Ewondo
     * Scope: Individual
     * Type: Living
     * Native name(s) : Ewondo
     */
    public const EWO = 'ewo';

    /**
     * Fang
     * Scope: Individual
     * Type: Living
     * Native name(s) : Fang
     */
    public const FAN = 'fan';

    /**
     * Faroese
     * Two letter code: fo
     * Scope: Individual
     * Type: Living
     * Native name(s) : Føroyskt
     */
    public const FAO = 'fao';

    /**
     * Persian
     * Two letter code: fa
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : فارسی, Fārsiy
     */
    public const FAS = 'fas';

    /**
     * Persian
     * Two letter code: fa
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : فارسی, Fārsiy
     */
    public const PER = 'fas';

    /**
     * Fanti
     * Scope: Individual
     * Type: Living
     * Native name(s) : Mfantse; Fante; Fanti
     */
    public const FAT = 'fat';

    /**
     * Fijian
     * Two letter code: fj
     * Scope: Individual
     * Type: Living
     * Native name(s) : Na Vosa Vakaviti
     */
    public const FIJ = 'fij';

    /**
     * Filipino; Pilipino
     * Scope: Individual
     * Type: Living
     * Native name(s) : Wikang Filipino
     */
    public const FIL = 'fil';

    /**
     * Finnish
     * Two letter code: fi
     * Scope: Individual
     * Type: Living
     * Native name(s) : suomen kieli
     */
    public const FIN = 'fin';

    /**
     * Finno-Ugrian languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const FIU = 'fiu';

    /**
     * Fon
     * Scope: Individual
     * Type: Living
     * Native name(s) : Fon gbè
     */
    public const FON = 'fon';

    /**
     * French
     * Two letter code: fr
     * Scope: Individual
     * Type: Living
     * Native name(s) : Français
     */
    public const FRA = 'fra';

    /**
     * French
     * Two letter code: fr
     * Scope: Individual
     * Type: Living
     * Native name(s) : Français
     */
    public const FRE = 'fra';

    /**
     * French, Middle (ca. 1400–1600)
     * Scope: Individual
     * Type: Historical
     * Native name(s) : François; Franceis
     */
    public const FRM = 'frm';

    /**
     * French, Old (842–ca. 1400)
     * Scope: Individual
     * Type: Historical
     * Native name(s) : Franceis; François; Romanz
     */
    public const FRO = 'fro';

    /**
     * Northern Frisian
     * Scope: Individual
     * Type: Living
     * Native name(s) : Frasch; Fresk; Freesk; Friisk
     */
    public const FRR = 'frr';

    /**
     * Eastern Frisian
     * Scope: Individual
     * Type: Living
     * Native name(s) : Oostfräsk; Oostfreesk; Plattdüütsk
     */
    public const FRS = 'frs';

    /**
     * Western Frisian
     * Two letter code: fy
     * Scope: Individual
     * Type: Living
     * Native name(s) : Frysk
     */
    public const FRY = 'fry';

    /**
     * Fulah
     * Two letter code: ff
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Fulfulde; Pulaar; Pular
     */
    public const FUL = 'ful';

    /**
     * Friulian
     * Scope: Individual
     * Type: Living
     * Native name(s) : Furlan
     */
    public const FUR = 'fur';

    /**
     * Ga
     * Scope: Individual
     * Type: Living
     * Native name(s) : Gã
     */
    public const GAA = 'gaa';

    /**
     * Gayo
     * Scope: Individual
     * Type: Living
     * Native name(s) : Basa Gayo
     */
    public const GAY = 'gay';

    /**
     * Gbaya
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Gbaya
     */
    public const GBA = 'gba';

    /**
     * Germanic languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const GEM = 'gem';

    /**
     * Geez
     * Scope: Individual
     * Type: Ancient
     * Native name(s) : ግዕዝ
     */
    public const GEZ = 'gez';

    /**
     * Gilbertese
     * Scope: Individual
     * Type: Living
     * Native name(s) : Taetae ni Kiribati
     */
    public const GIL = 'gil';

    /**
     * Gaelic; Scottish Gaelic
     * Two letter code: gd
     * Scope: Individual
     * Type: Living
     * Native name(s) : Gàidhlig
     */
    public const GLA = 'gla';

    /**
     * Irish
     * Two letter code: ga
     * Scope: Individual
     * Type: Living
     * Native name(s) : Gaeilge
     */
    public const GLE = 'gle';

    /**
     * Galician
     * Two letter code: gl
     * Scope: Individual
     * Type: Living
     * Native name(s) : Galego
     */
    public const GLG = 'glg';

    /**
     * Manx
     * Two letter code: gv
     * Scope: Individual
     * Type: Living
     * Native name(s) : Gaelg; Gailck
     */
    public const GLV = 'glv';

    /**
     * German, Middle High (ca. 1050–1500)
     * Scope: Individual
     * Type: Historical
     * Native name(s) : Diutsch
     */
    public const GMH = 'gmh';

    /**
     * German, Old High (ca. 750–1050)
     * Scope: Individual
     * Type: Historical
     * Native name(s) : Diutisk
     */
    public const GOH = 'goh';

    /**
     * Gondi
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : गोण्डि; Koitur
     */
    public const GON = 'gon';

    /**
     * Gorontalo
     * Scope: Individual
     * Type: Living
     * Native name(s) : Bahasa Hulontalo
     */
    public const GOR = 'gor';

    /**
     * Gothic
     * Scope: Individual
     * Type: Ancient
     * Native name(s) : Gutiska
     */
    public const GOT = 'got';

    /**
     * Grebo
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Kréébo
     */
    public const GRB = 'grb';

    /**
     * Greek, Ancient (to 1453)
     * Scope: Individual
     * Type: Historical
     * Native name(s) : Ἑλληνική
     */
    public const GRC = 'grc';

    /**
     * Guarani
     * Two letter code: gn
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Avañe'ẽ
     */
    public const GRN = 'grn';

    /**
     * Swiss German; Alemannic; Alsatian
     * Scope: Individual
     * Type: Living
     * Native name(s) : Schwiizerdütsch
     */
    public const GSW = 'gsw';

    /**
     * Gujarati
     * Two letter code: gu
     * Scope: Individual
     * Type: Living
     * Native name(s) : ગુજરાતી, Gujarātī
     */
    public const GUJ = 'guj';

    /**
     * Gwich'in
     * Scope: Individual
     * Type: Living
     * Native name(s) : Dinjii Zhu’ Ginjik
     */
    public const GWI = 'gwi';

    /**
     * Haida
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : X̱aat Kíl; X̱aadas Kíl; X̱aayda Kil; Xaad kil
     */
    public const HAI = 'hai';

    /**
     * Haitian; Haitian Creole
     * Two letter code: ht
     * Scope: Individual
     * Type: Living
     * Native name(s) : Kreyòl Ayisyen
     */
    public const HAT = 'hat';

    /**
     * Hausa
     * Two letter code: ha
     * Scope: Individual
     * Type: Living
     * Native name(s) : Harshen Hausa; هَرْشَن
     */
    public const HAU = 'hau';

    /**
     * Hawaiian
     * Scope: Individual
     * Type: Living
     * Native name(s) : ʻŌlelo Hawaiʻi
     */
    public const HAW = 'haw';

    /**
     * Hebrew
     * Two letter code: he
     * Scope: Individual
     * Type: Living
     * Native name(s) : עברית, 'Ivriyþ
     */
    public const HEB = 'heb';

    /**
     * Herero
     * Two letter code: hz
     * Scope: Individual
     * Type: Living
     * Native name(s) : Otjiherero
     */
    public const HER = 'her';

    /**
     * Hiligaynon
     * Scope: Individual
     * Type: Living
     * Native name(s) : Ilonggo
     */
    public const HIL = 'hil';

    /**
     * Himachali languages; Pahari languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const HIM = 'him';

    /**
     * Hindi
     * Two letter code: hi
     * Scope: Individual
     * Type: Living
     * Native name(s) : हिन्दी, Hindī
     */
    public const HIN = 'hin';

    /**
     * Hittite
     * Scope: Individual
     * Type: Ancient
     * Native name(s) : 𒉈𒅆𒇷
     */
    public const HIT = 'hit';

    /**
     * Hmong; Mong
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : lus Hmoob; lug Moob; lol Hmongb; 𖬇𖬰𖬞 𖬌𖬣𖬵
     */
    public const HMN = 'hmn';

    /**
     * Hiri Motu
     * Two letter code: ho
     * Scope: Individual
     * Type: Living
     * Native name(s) : Police Motu
     */
    public const HMO = 'hmo';

    /**
     * Croatian
     * Two letter code: hr
     * Scope: Individual
     * Type: Living
     * Native name(s) : Hrvatski
     */
    public const HRV = 'hrv';

    /**
     * Upper Sorbian
     * Scope: Individual
     * Type: Living
     * Native name(s) : Hornjoserbšćina
     */
    public const HSB = 'hsb';

    /**
     * Hungarian
     * Two letter code: hu
     * Scope: Individual
     * Type: Living
     * Native name(s) : Magyar nyelv
     */
    public const HUN = 'hun';

    /**
     * Hupa
     * Scope: Individual
     * Type: Living
     * Native name(s) : Na:tinixwe Mixine:whe'
     */
    public const HUP = 'hup';

    /**
     * Armenian
     * Two letter code: hy
     * Scope: Individual
     * Type: Living
     * Native name(s) : Հայերէն, Hayerèn; Հայերեն, Hayeren
     */
    public const HYE = 'hye';

    /**
     * Armenian
     * Two letter code: hy
     * Scope: Individual
     * Type: Living
     * Native name(s) : Հայերէն, Hayerèn; Հայերեն, Hayeren
     */
    public const ARM = 'hye';

    /**
     * Iban
     * Scope: Individual
     * Type: Living
     * Native name(s) : Jaku Iban
     */
    public const IBA = 'iba';

    /**
     * Igbo
     * Two letter code: ig
     * Scope: Individual
     * Type: Living
     * Native name(s) : Asụsụ Igbo
     */
    public const IBO = 'ibo';

    /**
     * Ido
     * Two letter code: io
     * Scope: Individual
     * Type: Constructed
     * Native name(s) :
     */
    public const IDO = 'ido';

    /**
     * Sichuan Yi; Nuosu
     * Two letter code: ii
     * Scope: Individual
     * Type: Living
     * Native name(s) : ꆈꌠꉙ, Nuosuhxop
     */
    public const III = 'iii';

    /**
     * Ijo languages
     * Scope: Collective
     * Type:
     * Native name(s) : Ịjọ
     */
    public const IJO = 'ijo';

    /**
     * Inuktitut
     * Two letter code: iu
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : ᐃᓄᒃᑎᑐᑦ, Inuktitut
     */
    public const IKU = 'iku';

    /**
     * Interlingue; Occidental
     * Two letter code: ie
     * Scope: Individual
     * Type: Constructed
     * Native name(s) :
     */
    public const ILE = 'ile';

    /**
     * Iloko
     * Scope: Individual
     * Type: Living
     * Native name(s) : Pagsasao nga Ilokano; Ilokano
     */
    public const ILO = 'ilo';

    /**
     * Interlingua (International Auxiliary Language Association)
     * Two letter code: ia
     * Scope: Individual
     * Type: Constructed
     * Native name(s) :
     */
    public const INA = 'ina';

    /**
     * Indic languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const INC = 'inc';

    /**
     * Indonesian
     * Two letter code: id
     * Scope: Individual
     * Type: Living
     * Native name(s) : bahasa Indonesia
     */
    public const IND = 'ind';

    /**
     * Indo-European languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const INE = 'ine';

    /**
     * Ingush
     * Scope: Individual
     * Type: Living
     * Native name(s) : ГӀалгӀай мотт
     */
    public const INH = 'inh';

    /**
     * Inupiaq
     * Two letter code: ik
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Iñupiaq
     */
    public const IPK = 'ipk';

    /**
     * Iranian languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const IRA = 'ira';

    /**
     * Iroquoian languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const IRO = 'iro';

    /**
     * Icelandic
     * Two letter code: is
     * Scope: Individual
     * Type: Living
     * Native name(s) : Íslenska
     */
    public const ISL = 'isl';

    /**
     * Icelandic
     * Two letter code: is
     * Scope: Individual
     * Type: Living
     * Native name(s) : Íslenska
     */
    public const ICE = 'isl';

    /**
     * Italian
     * Two letter code: it
     * Scope: Individual
     * Type: Living
     * Native name(s) : Italiano; lingua italiana
     */
    public const ITA = 'ita';

    /**
     * Javanese
     * Two letter code: jv
     * Scope: Individual
     * Type: Living
     * Native name(s) : ꦧꦱꦗꦮ; Basa Jawa
     */
    public const JAV = 'jav';

    /**
     * Lojban
     * Scope: Individual
     * Type: Constructed
     * Native name(s) : la .lojban.
     */
    public const JBO = 'jbo';

    /**
     * Japanese
     * Two letter code: ja
     * Scope: Individual
     * Type: Living
     * Native name(s) : 日本語; Nihongo
     */
    public const JPN = 'jpn';

    /**
     * Judeo-Persian
     * Scope: Individual
     * Type: Living
     * Native name(s) : Dzhidi
     */
    public const JPR = 'jpr';

    /**
     * Judeo-Arabic
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : ערבית יהודית; عربية يهودية
     */
    public const JRB = 'jrb';

    /**
     * Kara-Kalpak
     * Scope: Individual
     * Type: Living
     * Native name(s) : Qaraqalpaq tili; Қарақалпақ тили
     */
    public const KAA = 'kaa';

    /**
     * Kabyle
     * Scope: Individual
     * Type: Living
     * Native name(s) : Tamaziɣt Taqbaylit; Tazwawt
     */
    public const KAB = 'kab';

    /**
     * Kachin; Jingpho
     * Scope: Individual
     * Type: Living
     * Native name(s) : Jingpho
     */
    public const KAC = 'kac';

    /**
     * Kalaallisut; Greenlandic
     * Two letter code: kl
     * Scope: Individual
     * Type: Living
     * Native name(s) : Kalaallisut
     */
    public const KAL = 'kal';

    /**
     * Kamba
     * Scope: Individual
     * Type: Living
     * Native name(s) : Kikamba
     */
    public const KAM = 'kam';

    /**
     * Kannada
     * Two letter code: kn
     * Scope: Individual
     * Type: Living
     * Native name(s) : ಕನ್ನಡ; Kannađa
     */
    public const KAN = 'kan';

    /**
     * Karen languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const KAR = 'kar';

    /**
     * Kashmiri
     * Two letter code: ks
     * Scope: Individual
     * Type: Living
     * Native name(s) : कॉशुर; كأشُر
     */
    public const KAS = 'kas';

    /**
     * Georgian
     * Two letter code: ka
     * Scope: Individual
     * Type: Living
     * Native name(s) : ქართული; Kharthuli
     */
    public const KAT = 'kat';

    /**
     * Georgian
     * Two letter code: ka
     * Scope: Individual
     * Type: Living
     * Native name(s) : ქართული; Kharthuli
     */
    public const GEO = 'kat';

    /**
     * Kanuri
     * Two letter code: kr
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Kànùrí
     */
    public const KAU = 'kau';

    /**
     * Kawi
     * Scope: Individual
     * Type: Ancient
     * Native name(s) : ꦧꦱꦗꦮ
     */
    public const KAW = 'kaw';

    /**
     * Kazakh
     * Two letter code: kk
     * Scope: Individual
     * Type: Living
     * Native name(s) : Қазақ тілі; Qazaq tili
     */
    public const KAZ = 'kaz';

    /**
     * Kabardian
     * Scope: Individual
     * Type: Living
     * Native name(s) : Адыгэбзэ (Къэбэрдейбзэ); Adıgăbză (Qăbărdeĭbză)
     */
    public const KBD = 'kbd';

    /**
     * Khasi
     * Scope: Individual
     * Type: Living
     * Native name(s) : কা কতিয়েন খাশি, Ka Ktien Khasi
     */
    public const KHA = 'kha';

    /**
     * Khoisan languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const KHI = 'khi';

    /**
     * Central Khmer
     * Two letter code: km
     * Scope: Individual
     * Type: Living
     * Native name(s) : ភាសាខ្មែរ, Phiəsaakhmær
     */
    public const KHM = 'khm';

    /**
     * Khotanese; Sakan
     * Scope: Individual
     * Type: Ancient
     * Native name(s) :
     */
    public const KHO = 'kho';

    /**
     * Kikuyu; Gikuyu
     * Two letter code: ki
     * Scope: Individual
     * Type: Living
     * Native name(s) : Gĩkũyũ
     */
    public const KIK = 'kik';

    /**
     * Kinyarwanda
     * Two letter code: rw
     * Scope: Individual
     * Type: Living
     * Native name(s) : Ikinyarwanda
     */
    public const KIN = 'kin';

    /**
     * Kirghiz; Kyrgyz
     * Two letter code: ky
     * Scope: Individual
     * Type: Living
     * Native name(s) : Кыргызча, Kırgızça; Кыргыз тили, Kırgız tili
     */
    public const KIR = 'kir';

    /**
     * Kimbundu
     * Scope: Individual
     * Type: Living
     * Native name(s) : Kimbundu
     */
    public const KMB = 'kmb';

    /**
     * Konkani
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : कोंकणी
     */
    public const KOK = 'kok';

    /**
     * Komi
     * Two letter code: kv
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Коми кыв
     */
    public const KOM = 'kom';

    /**
     * Kongo
     * Two letter code: kg
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Kikongo
     */
    public const KON = 'kon';

    /**
     * Korean
     * Two letter code: ko
     * Scope: Individual
     * Type: Living
     * Native name(s) : 한국어, Han'gug'ô
     */
    public const KOR = 'kor';

    /**
     * Kosraean
     * Scope: Individual
     * Type: Living
     * Native name(s) : Kosraean
     */
    public const KOS = 'kos';

    /**
     * Kpelle
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Kpɛlɛwoo
     */
    public const KPE = 'kpe';

    /**
     * Karachay-Balkar
     * Scope: Individual
     * Type: Living
     * Native name(s) : Къарачай-Малкъар тил; Таулу тил
     */
    public const KRC = 'krc';

    /**
     * Karelian
     * Scope: Individual
     * Type: Living
     * Native name(s) : Kard'al; Kariela; Karjala
     */
    public const KRL = 'krl';

    /**
     * Kru languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const KRO = 'kro';

    /**
     * Kurukh
     * Scope: Individual
     * Type: Living
     * Native name(s) : कुड़ुख़
     */
    public const KRU = 'kru';

    /**
     * Kuanyama; Kwanyama
     * Two letter code: kj
     * Scope: Individual
     * Type: Living
     * Native name(s) : Oshikwanyama
     */
    public const KUA = 'kua';

    /**
     * Kumyk
     * Scope: Individual
     * Type: Living
     * Native name(s) : Къумукъ тил, Qumuq til
     */
    public const KUM = 'kum';

    /**
     * Kurdish
     * Two letter code: ku
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : کوردی, Kurdî
     */
    public const KUR = 'kur';

    /**
     * Kutenai
     * Scope: Individual
     * Type: Living
     * Native name(s) : Ktunaxa
     */
    public const KUT = 'kut';

    /**
     * Ladino
     * Scope: Individual
     * Type: Living
     * Native name(s) : Judeo-español
     */
    public const LAD = 'lad';

    /**
     * Lahnda
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : بھارت کا
     */
    public const LAH = 'lah';

    /**
     * Lamba
     * Scope: Individual
     * Type: Living
     * Native name(s) : Ichilamba
     */
    public const LAM = 'lam';

    /**
     * Lao
     * Two letter code: lo
     * Scope: Individual
     * Type: Living
     * Native name(s) : ພາສາລາວ, Phasalaw
     */
    public const LAO = 'lao';

    /**
     * Latin
     * Two letter code: la
     * Scope: Individual
     * Type: Ancient
     * Native name(s) : Lingua latīna
     */
    public const LAT = 'lat';

    /**
     * Latvian
     * Two letter code: lv
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Latviešu valoda
     */
    public const LAV = 'lav';

    /**
     * Lezghian
     * Scope: Individual
     * Type: Living
     * Native name(s) : Лезги чӏал
     */
    public const LEZ = 'lez';

    /**
     * Limburgan; Limburger; Limburgish
     * Two letter code: li
     * Scope: Individual
     * Type: Living
     * Native name(s) : Lèmburgs
     */
    public const LIM = 'lim';

    /**
     * Lingala
     * Two letter code: ln
     * Scope: Individual
     * Type: Living
     * Native name(s) : Lingála
     */
    public const LIN = 'lin';

    /**
     * Lithuanian
     * Two letter code: lt
     * Scope: Individual
     * Type: Living
     * Native name(s) : Lietuvių kalba
     */
    public const LIT = 'lit';

    /**
     * Mongo
     * Scope: Individual
     * Type: Living
     * Native name(s) : Lomongo
     */
    public const LOL = 'lol';

    /**
     * Lozi
     * Scope: Individual
     * Type: Living
     * Native name(s) : Silozi
     */
    public const LOZ = 'loz';

    /**
     * Luxembourgish; Letzeburgesch
     * Two letter code: lb
     * Scope: Individual
     * Type: Living
     * Native name(s) : Lëtzebuergesch
     */
    public const LTZ = 'ltz';

    /**
     * Luba-Lulua
     * Scope: Individual
     * Type: Living
     * Native name(s) : Cilubà; Tshiluba
     */
    public const LUA = 'lua';

    /**
     * Luba-Katanga
     * Two letter code: lu
     * Scope: Individual
     * Type: Living
     * Native name(s) : Kiluba
     */
    public const LUB = 'lub';

    /**
     * Ganda
     * Two letter code: lg
     * Scope: Individual
     * Type: Living
     * Native name(s) : Luganda
     */
    public const LUG = 'lug';

    /**
     * Luiseno
     * Scope: Individual
     * Type: Extinct
     * Native name(s) : Cham'teela
     */
    public const LUI = 'lui';

    /**
     * Lunda
     * Scope: Individual
     * Type: Living
     * Native name(s) : Chilunda
     */
    public const LUN = 'lun';

    /**
     * Luo (Kenya and Tanzania)
     * Scope: Individual
     * Type: Living
     * Native name(s) : Dholuo
     */
    public const LUO = 'luo';

    /**
     * Lushai
     * Scope: Individual
     * Type: Living
     * Native name(s) : Mizo ṭawng
     */
    public const LUS = 'lus';

    /**
     * Madurese
     * Scope: Individual
     * Type: Living
     * Native name(s) : Madhura
     */
    public const MAD = 'mad';

    /**
     * Magahi
     * Scope: Individual
     * Type: Living
     * Native name(s) : मगही
     */
    public const MAG = 'mag';

    /**
     * Marshallese
     * Two letter code: mh
     * Scope: Individual
     * Type: Living
     * Native name(s) : Kajin M̧ajeļ
     */
    public const MAH = 'mah';

    /**
     * Maithili
     * Scope: Individual
     * Type: Living
     * Native name(s) : मैथिली; মৈথিলী
     */
    public const MAI = 'mai';

    /**
     * Makasar
     * Scope: Individual
     * Type: Living
     * Native name(s) : ᨅᨔ ᨆᨀᨔᨑ, basa Mangkasara'
     */
    public const MAK = 'mak';

    /**
     * Malayalam
     * Two letter code: ml
     * Scope: Individual
     * Type: Living
     * Native name(s) : മലയാളം, Malayāḷaṁ
     */
    public const MAL = 'mal';

    /**
     * Mandingo
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Mandi'nka kango, ߡߊ߲߬ߘߌ߲߬ߞߊ, مَانْدِنْجَوْ
     */
    public const MAN = 'man';

    /**
     * Austronesian languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const MAP = 'map';

    /**
     * Marathi
     * Two letter code: mr
     * Scope: Individual
     * Type: Living
     * Native name(s) : मराठी, Marāţhī
     */
    public const MAR = 'mar';

    /**
     * Masai
     * Scope: Individual
     * Type: Living
     * Native name(s) : ɔl Maa
     */
    public const MAS = 'mas';

    /**
     * Moksha
     * Scope: Individual
     * Type: Living
     * Native name(s) : Мокшень кяль
     */
    public const MDF = 'mdf';

    /**
     * Mandar
     * Scope: Individual
     * Type: Living
     * Native name(s) : Mandar
     */
    public const MDR = 'mdr';

    /**
     * Mende
     * Scope: Individual
     * Type: Living
     * Native name(s) : Mɛnde yia
     */
    public const MEN = 'men';

    /**
     * Irish, Middle (900–1200)
     * Scope: Individual
     * Type: Historical
     * Native name(s) : Gaoidhealg
     */
    public const MGA = 'mga';

    /**
     * Mi'kmaq; Micmac
     * Scope: Individual
     * Type: Living
     * Native name(s) : Míkmawísimk
     */
    public const MIC = 'mic';

    /**
     * Minangkabau
     * Scope: Individual
     * Type: Living
     * Native name(s) : Baso Minang
     */
    public const MIN = 'min';

    /**
     * Uncoded languages
     * Scope: Special
     * Type:
     * Native name(s) :
     */
    public const MIS = 'mis';

    /**
     * Macedonian
     * Two letter code: mk
     * Scope: Individual
     * Type: Living
     * Native name(s) : Македонски јазик, Makedonski jazik
     */
    public const MKD = 'mkd';

    /**
     * Macedonian
     * Two letter code: mk
     * Scope: Individual
     * Type: Living
     * Native name(s) : Македонски јазик, Makedonski jazik
     */
    public const MAC = 'mkd';

    /**
     * Mon-Khmer languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const MKH = 'mkh';

    /**
     * Malagasy
     * Two letter code: mg
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : مَلَغَسِ
     */
    public const MLG = 'mlg';

    /**
     * Maltese
     * Two letter code: mt
     * Scope: Individual
     * Type: Living
     * Native name(s) : Malti
     */
    public const MLT = 'mlt';

    /**
     * Manchu
     * Scope: Individual
     * Type: Living
     * Native name(s) : ᠮᠠᠨᠵᡠ ᡤᡳᠰᡠᠨ, Manju gisun
     */
    public const MNC = 'mnc';

    /**
     * Manipuri
     * Scope: Individual
     * Type: Living
     * Native name(s) : মৈতৈলোন, ꯃꯩꯇꯩꯂꯣꯟ, Meiteilon
     */
    public const MNI = 'mni';

    /**
     * Manobo languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const MNO = 'mno';

    /**
     * Mohawk
     * Scope: Individual
     * Type: Living
     * Native name(s) : Kanien’kéha
     */
    public const MOH = 'moh';

    /**
     * Mongolian
     * Two letter code: mn
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : ᠮᠣᠩᠭᠣᠯ ᠬᠡᠯᠡ, Монгол хэл
     */
    public const MON = 'mon';

    /**
     * Mossi
     * Scope: Individual
     * Type: Living
     * Native name(s) : Mooré
     */
    public const MOS = 'mos';

    /**
     * Maori
     * Two letter code: mi
     * Scope: Individual
     * Type: Living
     * Native name(s) : Te Reo Māori
     */
    public const MRI = 'mri';

    /**
     * Maori
     * Two letter code: mi
     * Scope: Individual
     * Type: Living
     * Native name(s) : Te Reo Māori
     */
    public const MAO = 'mri';

    /**
     * Malay
     * Two letter code: ms
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Bahasa Melayu
     */
    public const MSA = 'msa';

    /**
     * Malay
     * Two letter code: ms
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Bahasa Melayu
     */
    public const MAY = 'msa';

    /**
     * Multiple languages
     * Scope: Special
     * Type:
     * Native name(s) :
     */
    public const MUL = 'mul';

    /**
     * Munda languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const MUN = 'mun';

    /**
     * Creek
     * Scope: Individual
     * Type: Living
     * Native name(s) : Mvskoke
     */
    public const MUS = 'mus';

    /**
     * Mirandese
     * Scope: Individual
     * Type: Living
     * Native name(s) : Mirandés; lhéngua Mirandesa
     */
    public const MWL = 'mwl';

    /**
     * Marwari
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : मारवाड़ी
     */
    public const MWR = 'mwr';

    /**
     * Burmese
     * Two letter code: my
     * Scope: Individual
     * Type: Living
     * Native name(s) : မြန်မာစာ, Mrãmācā; မြန်မာစကား, Mrãmākā:
     */
    public const MYA = 'mya';

    /**
     * Burmese
     * Two letter code: my
     * Scope: Individual
     * Type: Living
     * Native name(s) : မြန်မာစာ, Mrãmācā; မြန်မာစကား, Mrãmākā:
     */
    public const BUR = 'mya';

    /**
     * Mayan languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const MYN = 'myn';

    /**
     * Erzya
     * Scope: Individual
     * Type: Living
     * Native name(s) : Ерзянь кель
     */
    public const MYV = 'myv';

    /**
     * Nahuatl languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const NAH = 'nah';

    /**
     * North American Indian languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const NAI = 'nai';

    /**
     * Neapolitan
     * Scope: Individual
     * Type: Living
     * Native name(s) : Napulitano
     */
    public const NAP = 'nap';

    /**
     * Nauru
     * Two letter code: na
     * Scope: Individual
     * Type: Living
     * Native name(s) : dorerin Naoero
     */
    public const NAU = 'nau';

    /**
     * Navajo; Navaho
     * Two letter code: nv
     * Scope: Individual
     * Type: Living
     * Native name(s) : Diné bizaad; Naabeehó bizaad
     */
    public const NAV = 'nav';

    /**
     * Ndebele, South; South Ndebele
     * Two letter code: nr
     * Scope: Individual
     * Type: Living
     * Native name(s) : isiNdebele seSewula
     */
    public const NBL = 'nbl';

    /**
     * Ndebele, North; North Ndebele
     * Two letter code: nd
     * Scope: Individual
     * Type: Living
     * Native name(s) : siNdebele saseNyakatho
     */
    public const NDE = 'nde';

    /**
     * Ndonga
     * Two letter code: ng
     * Scope: Individual
     * Type: Living
     * Native name(s) : Ndonga
     */
    public const NDO = 'ndo';

    /**
     * Low German; Low Saxon; German, Low; Saxon, Low
     * Scope: Individual
     * Type: Living
     * Native name(s) : Plattdütsch
     */
    public const NDS = 'nds';

    /**
     * Nepali
     * Two letter code: ne
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : नेपाली, Gorkhali
     */
    public const NEP = 'nep';

    /**
     * Nepal Bhasa; Newari
     * Scope: Individual
     * Type: Living
     * Native name(s) : नेपाल भाषा, Nepāla bhāṣā
     */
    public const NEW = 'new';

    /**
     * Nias
     * Scope: Individual
     * Type: Living
     * Native name(s) : Li Niha
     */
    public const NIA = 'nia';

    /**
     * Niger-Kordofanian languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const NIC = 'nic';

    /**
     * Niuean
     * Scope: Individual
     * Type: Living
     * Native name(s) : ko e vagahau Niuē
     */
    public const NIU = 'niu';

    /**
     * Dutch; Flemish
     * Two letter code: nl
     * Scope: Individual
     * Type: Living
     * Native name(s) : Nederlands; Vlaams
     */
    public const NLD = 'nld';

    /**
     * Dutch; Flemish
     * Two letter code: nl
     * Scope: Individual
     * Type: Living
     * Native name(s) : Nederlands; Vlaams
     */
    public const DUT = 'nld';

    /**
     * Norwegian Nynorsk; Nynorsk, Norwegian
     * Two letter code: nn
     * Scope: Individual
     * Type: Living
     * Native name(s) : Norsk Nynorsk
     */
    public const NNO = 'nno';

    /**
     * Bokmål, Norwegian; Norwegian Bokmål
     * Two letter code: nb
     * Scope: Individual
     * Type: Living
     * Native name(s) : Norsk Bokmål
     */
    public const NOB = 'nob';

    /**
     * Nogai
     * Scope: Individual
     * Type: Living
     * Native name(s) : Ногай тили
     */
    public const NOG = 'nog';

    /**
     * Norse, Old
     * Scope: Individual
     * Type: Historical
     * Native name(s) : Dǫnsk tunga; Norrœnt mál
     */
    public const NON = 'non';

    /**
     * Norwegian
     * Two letter code: no
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Norsk
     */
    public const NOR = 'nor';

    /**
     * N'Ko
     * Scope: Individual
     * Type: Living
     * Native name(s) : ߒߞߏ
     */
    public const NQO = 'nqo';

    /**
     * Pedi; Sepedi; Northern Sotho
     * Scope: Individual
     * Type: Living
     * Native name(s) : Sesotho sa Leboa
     */
    public const NSO = 'nso';

    /**
     * Nubian languages
     * Scope: Collective
     * Type:
     * Native name(s) : لغات نوبية
     */
    public const NUB = 'nub';

    /**
     * Classical Newari; Old Newari; Classical Nepal Bhasa
     * Scope: Individual
     * Type: Historical
     * Native name(s) : पुलां भाय्; पुलाङु नेपाल भाय्
     */
    public const NWC = 'nwc';

    /**
     * Chichewa; Chewa; Nyanja
     * Two letter code: ny
     * Scope: Individual
     * Type: Living
     * Native name(s) : Chichewa; Chinyanja
     */
    public const NYA = 'nya';

    /**
     * Nyamwezi
     * Scope: Individual
     * Type: Living
     * Native name(s) : KiNyamwezi
     */
    public const NYM = 'nym';

    /**
     * Nyankole
     * Scope: Individual
     * Type: Living
     * Native name(s) : Orunyankore
     */
    public const NYN = 'nyn';

    /**
     * Nyoro
     * Scope: Individual
     * Type: Living
     * Native name(s) : Orunyoro
     */
    public const NYO = 'nyo';

    /**
     * Nzima
     * Scope: Individual
     * Type: Living
     * Native name(s) : Nzema
     */
    public const NZI = 'nzi';

    /**
     * Occitan (post 1500)
     * Two letter code: oc
     * Scope: Individual
     * Type: Living
     * Native name(s) : Occitan; lenga d'Òc
     */
    public const OCI = 'oci';

    /**
     * Ojibwa
     * Two letter code: oj
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : ᐊᓂᐦᔑᓈᐯᒧᐎᓐ; Anishinaabemowin
     */
    public const OJI = 'oji';

    /**
     * Oriya
     * Two letter code: or
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : ଓଡ଼ିଆ
     */
    public const ORI = 'ori';

    /**
     * Oromo
     * Two letter code: om
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Afaan Oromoo
     */
    public const ORM = 'orm';

    /**
     * Osage
     * Scope: Individual
     * Type: Living
     * Native name(s) : 𐓏𐓘𐓻𐓘𐓻𐓟 𐒻𐓟, Wazhazhe ie
     */
    public const OSA = 'osa';

    /**
     * Ossetian; Ossetic
     * Two letter code: os
     * Scope: Individual
     * Type: Living
     * Native name(s) : Ирон ӕвзаг, Iron ævzag
     */
    public const OSS = 'oss';

    /**
     * Turkish, Ottoman (1500–1928)
     * Scope: Individual
     * Type: Historical
     * Native name(s) : لسان عثمانى, lisân-ı Osmânî
     */
    public const OTA = 'ota';

    /**
     * Otomian languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const OTO = 'oto';

    /**
     * Papuan languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const PAA = 'paa';

    /**
     * Pangasinan
     * Scope: Individual
     * Type: Living
     * Native name(s) : Salitan Pangasinan
     */
    public const PAG = 'pag';

    /**
     * Pahlavi
     * Scope: Individual
     * Type: Ancient
     * Native name(s) : Pārsīk; Pārsīg
     */
    public const PAL = 'pal';

    /**
     * Pampanga; Kapampangan
     * Scope: Individual
     * Type: Living
     * Native name(s) : Amánung Kapampangan; Amánung Sísuan
     */
    public const PAM = 'pam';

    /**
     * Panjabi; Punjabi
     * Two letter code: pa
     * Scope: Individual
     * Type: Living
     * Native name(s) : ਪੰਜਾਬੀ, پنجابی, Pãjābī
     */
    public const PAN = 'pan';

    /**
     * Papiamento
     * Scope: Individual
     * Type: Living
     * Native name(s) : Papiamentu
     */
    public const PAP = 'pap';

    /**
     * Palauan
     * Scope: Individual
     * Type: Living
     * Native name(s) : a tekoi er a Belau
     */
    public const PAU = 'pau';

    /**
     * Persian, Old (c. 600–400 B.C.)
     * Scope: Individual
     * Type: Historical
     * Native name(s) :
     */
    public const PEO = 'peo';

    /**
     * Philippine languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const PHI = 'phi';

    /**
     * Phoenician
     * Scope: Individual
     * Type: Ancient
     * Native name(s) : 𐤃𐤁𐤓𐤉𐤌 𐤊𐤍𐤏𐤍𐤉𐤌, Dabariym Kana'aniym
     */
    public const PHN = 'phn';

    /**
     * Pali
     * Two letter code: pi
     * Scope: Individual
     * Type: Ancient
     * Native name(s) : Pāli
     */
    public const PLI = 'pli';

    /**
     * Polish
     * Two letter code: pl
     * Scope: Individual
     * Type: Living
     * Native name(s) : Język polski
     */
    public const POL = 'pol';

    /**
     * Pohnpeian
     * Scope: Individual
     * Type: Living
     * Native name(s) : Lokaiahn Pohnpei
     */
    public const PON = 'pon';

    /**
     * Portuguese
     * Two letter code: pt
     * Scope: Individual
     * Type: Living
     * Native name(s) : Português
     */
    public const POR = 'por';

    /**
     * Prakrit languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const PRA = 'pra';

    /**
     * Provençal, Old (to 1500); Old Occitan (to 1500)
     * Scope: Individual
     * Type: Historical
     * Native name(s) :
     */
    public const PRO = 'pro';

    /**
     * Pushto; Pashto
     * Two letter code: ps
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : پښتو, Pax̌tow
     */
    public const PUS = 'pus';

    /**
     * Quechua
     * Two letter code: qu
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Runa simi; kichwa simi; Nuna shimi
     */
    public const QUE = 'que';

    /**
     * Rajasthani
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : राजस्थानी
     */
    public const RAJ = 'raj';

    /**
     * Rapanui
     * Scope: Individual
     * Type: Living
     * Native name(s) : Vananga rapa nui
     */
    public const RAP = 'rap';

    /**
     * Rarotongan; Cook Islands Maori
     * Scope: Individual
     * Type: Living
     * Native name(s) : Māori Kūki 'Āirani
     */
    public const RAR = 'rar';

    /**
     * Romance languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const ROA = 'roa';

    /**
     * Romansh
     * Two letter code: rm
     * Scope: Individual
     * Type: Living
     * Native name(s) : Rumantsch; Rumàntsch; Romauntsch; Romontsch
     */
    public const ROH = 'roh';

    /**
     * Romany
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Romani čhib
     */
    public const ROM = 'rom';

    /**
     * Romanian; Moldavian; Moldovan
     * Two letter code: ro
     * Scope: Individual
     * Type: Living
     * Native name(s) : limba Română
     */
    public const RON = 'ron';

    /**
     * Romanian; Moldavian; Moldovan
     * Two letter code: ro
     * Scope: Individual
     * Type: Living
     * Native name(s) : limba Română
     */
    public const RUM = 'ron';

    /**
     * Rundi
     * Two letter code: rn
     * Scope: Individual
     * Type: Living
     * Native name(s) : Ikirundi
     */
    public const RUN = 'run';

    /**
     * Aromanian; Arumanian; Macedo-Romanian[b]
     * Scope: Individual
     * Type: Living
     * Native name(s) : Armãneashce; Armãneashti; Rrãmãneshti
     */
    public const RUP = 'rup';

    /**
     * Russian
     * Two letter code: ru
     * Scope: Individual
     * Type: Living
     * Native name(s) : Русский язык
     */
    public const RUS = 'rus';

    /**
     * Sandawe
     * Scope: Individual
     * Type: Living
     * Native name(s) : Sàndàwé kì’ìng
     */
    public const SAD = 'sad';

    /**
     * Sango
     * Two letter code: sg
     * Scope: Individual
     * Type: Living
     * Native name(s) : yângâ tî Sängö
     */
    public const SAG = 'sag';

    /**
     * Yakut
     * Scope: Individual
     * Type: Living
     * Native name(s) : Сахалыы
     */
    public const SAH = 'sah';

    /**
     * South American Indian languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const SAI = 'sai';

    /**
     * Salishan languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const SAL = 'sal';

    /**
     * Samaritan Aramaic
     * Scope: Individual
     * Type: Extinct
     * Native name(s) : ארמית
     */
    public const SAM = 'sam';

    /**
     * Sanskrit
     * Two letter code: sa
     * Scope: Macrolanguage
     * Type: Ancient
     * Native name(s) : संस्कृतम् Sąskŕtam; 𑌸𑌂𑌸𑍍𑌕𑍃𑌤𑌮𑍍
     */
    public const SAN = 'san';

    /**
     * Sasak
     * Scope: Individual
     * Type: Living
     * Native name(s) : ᬪᬵᬲᬵᬲᬓ᭄ᬱᬓ᭄, Base Sasak
     */
    public const SAS = 'sas';

    /**
     * Santali
     * Scope: Individual
     * Type: Living
     * Native name(s) : ᱥᱟᱱᱛᱟᱲᱤ
     */
    public const SAT = 'sat';

    /**
     * Sicilian
     * Scope: Individual
     * Type: Living
     * Native name(s) : Sicilianu
     */
    public const SCN = 'scn';

    /**
     * Scots
     * Scope: Individual
     * Type: Living
     * Native name(s) : Braid Scots; Lallans
     */
    public const SCO = 'sco';

    /**
     * Selkup
     * Scope: Individual
     * Type: Living
     * Native name(s) : Чу́мэл шэ
     */
    public const SEL = 'sel';

    /**
     * Semitic languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const SEM = 'sem';

    /**
     * Irish, Old (to 900)
     * Scope: Individual
     * Type: Historical
     * Native name(s) : Goídelc
     */
    public const SGA = 'sga';

    /**
     * Sign languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const SGN = 'sgn';

    /**
     * Shan
     * Scope: Individual
     * Type: Living
     * Native name(s) : ၵႂၢမ်းတႆးယႂ်, Kwam Tai Yai
     */
    public const SHN = 'shn';

    /**
     * Sidamo
     * Scope: Individual
     * Type: Living
     * Native name(s) : Sidaamu Afoo
     */
    public const SID = 'sid';

    /**
     * Sinhala; Sinhalese
     * Two letter code: si
     * Scope: Individual
     * Type: Living
     * Native name(s) : සිංහල, Sĩhala
     */
    public const SIN = 'sin';

    /**
     * Siouan languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const SIO = 'sio';

    /**
     * Sino-Tibetan languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const SIT = 'sit';

    /**
     * Slavic languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const SLA = 'sla';

    /**
     * Slovak
     * Two letter code: sk
     * Scope: Individual
     * Type: Living
     * Native name(s) : Slovenčina; Slovenský jazyk
     */
    public const SLK = 'slk';

    /**
     * Slovak
     * Two letter code: sk
     * Scope: Individual
     * Type: Living
     * Native name(s) : Slovenčina; Slovenský jazyk
     */
    public const SLO = 'slk';

    /**
     * Slovenian
     * Two letter code: sl
     * Scope: Individual
     * Type: Living
     * Native name(s) : Slovenščina; Slovenski jezik
     */
    public const SLV = 'slv';

    /**
     * Southern Sami
     * Scope: Individual
     * Type: Living
     * Native name(s) : Åarjelsaemien gïele
     */
    public const SMA = 'sma';

    /**
     * Northern Sami
     * Two letter code: se
     * Scope: Individual
     * Type: Living
     * Native name(s) : Davvisámegiella
     */
    public const SME = 'sme';

    /**
     * Sami languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const SMI = 'smi';

    /**
     * Lule Sami
     * Scope: Individual
     * Type: Living
     * Native name(s) : Julevsámegiella
     */
    public const SMJ = 'smj';

    /**
     * Inari Sami
     * Scope: Individual
     * Type: Living
     * Native name(s) : Anarâškielâ
     */
    public const SMN = 'smn';

    /**
     * Samoan
     * Two letter code: sm
     * Scope: Individual
     * Type: Living
     * Native name(s) : Gagana faʻa Sāmoa
     */
    public const SMO = 'smo';

    /**
     * Skolt Sami
     * Scope: Individual
     * Type: Living
     * Native name(s) : Sääʹmǩiõll
     */
    public const SMS = 'sms';

    /**
     * Shona
     * Two letter code: sn
     * Scope: Individual
     * Type: Living
     * Native name(s) : chiShona
     */
    public const SNA = 'sna';

    /**
     * Sindhi
     * Two letter code: sd
     * Scope: Individual
     * Type: Living
     * Native name(s) : सिन्धी, سنڌي
     */
    public const SND = 'snd';

    /**
     * Soninke
     * Scope: Individual
     * Type: Living
     * Native name(s) : Sooninkanxanne
     */
    public const SNK = 'snk';

    /**
     * Sogdian
     * Scope: Individual
     * Type: Ancient
     * Native name(s) :
     */
    public const SOG = 'sog';

    /**
     * Somali
     * Two letter code: so
     * Scope: Individual
     * Type: Living
     * Native name(s) : af Soomaali
     */
    public const SOM = 'som';

    /**
     * Songhai languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const SON = 'son';

    /**
     * Sotho, Southern
     * Two letter code: st
     * Scope: Individual
     * Type: Living
     * Native name(s) : Sesotho; Sesotho sa Borwa
     */
    public const SOT = 'sot';

    /**
     * Spanish; Castilian
     * Two letter code: es
     * Scope: Individual
     * Type: Living
     * Native name(s) : Español; Castellano
     */
    public const SPA = 'spa';

    /**
     * Albanian
     * Two letter code: sq
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Shqip
     */
    public const SQI = 'sqi';

    /**
     * Albanian
     * Two letter code: sq
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Shqip
     */
    public const ALB = 'sqi';

    /**
     * Sardinian
     * Two letter code: sc
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Sardu; limba Sarda; lingua Sarda
     */
    public const SRD = 'srd';

    /**
     * Sranan Tongo
     * Scope: Individual
     * Type: Living
     * Native name(s) : Sranan Tongo
     */
    public const SRN = 'srn';

    /**
     * Serbian
     * Two letter code: sr
     * Scope: Individual
     * Type: Living
     * Native name(s) : Ссрпски, Srpski
     */
    public const SRP = 'srp';

    /**
     * Serer
     * Scope: Individual
     * Type: Living
     * Native name(s) : Seereer
     */
    public const SRR = 'srr';

    /**
     * Nilo-Saharan languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const SSA = 'ssa';

    /**
     * Swati
     * Two letter code: ss
     * Scope: Individual
     * Type: Living
     * Native name(s) : siSwati
     */
    public const SSW = 'ssw';

    /**
     * Sukuma
     * Scope: Individual
     * Type: Living
     * Native name(s) : Kɪsukuma
     */
    public const SUK = 'suk';

    /**
     * Sundanese
     * Two letter code: su
     * Scope: Individual
     * Type: Living
     * Native name(s) : ᮘᮞ ᮞᮥᮔ᮪ᮓ, basa Sunda
     */
    public const SUN = 'sun';

    /**
     * Susu
     * Scope: Individual
     * Type: Living
     * Native name(s) : Sosoxui
     */
    public const SUS = 'sus';

    /**
     * Sumerian
     * Scope: Individual
     * Type: Ancient
     * Native name(s) : 𒅴𒂠
     */
    public const SUX = 'sux';

    /**
     * Swahili
     * Two letter code: sw
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Kiswahili
     */
    public const SWA = 'swa';

    /**
     * Swedish
     * Two letter code: sv
     * Scope: Individual
     * Type: Living
     * Native name(s) : Svenska
     */
    public const SWE = 'swe';

    /**
     * Classical Syriac
     * Scope: Individual
     * Type: Historical
     * Native name(s) :
     */
    public const SYC = 'syc';

    /**
     * Syriac
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : ܠܫܢܐ ܣܘܪܝܝܐ, Lešānā Suryāyā
     */
    public const SYR = 'syr';

    /**
     * Tahitian
     * Two letter code: ty
     * Scope: Individual
     * Type: Living
     * Native name(s) : Reo Tahiti; Reo Mā'ohi
     */
    public const TAH = 'tah';

    /**
     * Tai languages
     * Scope: Collective
     * Type:
     * Native name(s) : ภาษาไท; ภาษาไต
     */
    public const TAI = 'tai';

    /**
     * Tamil
     * Two letter code: ta
     * Scope: Individual
     * Type: Living
     * Native name(s) : தமிழ், Tamił
     */
    public const TAM = 'tam';

    /**
     * Tatar
     * Two letter code: tt
     * Scope: Individual
     * Type: Living
     * Native name(s) : Татар теле, Tatar tele, تاتار
     */
    public const TAT = 'tat';

    /**
     * Telugu
     * Two letter code: te
     * Scope: Individual
     * Type: Living
     * Native name(s) : తెలుగు, Telugu
     */
    public const TEL = 'tel';

    /**
     * Timne
     * Scope: Individual
     * Type: Living
     * Native name(s) : KʌThemnɛ
     */
    public const TEM = 'tem';

    /**
     * Tereno
     * Scope: Individual
     * Type: Living
     * Native name(s) : Terêna
     */
    public const TER = 'ter';

    /**
     * Tetum
     * Scope: Individual
     * Type: Living
     * Native name(s) : Lia-Tetun
     */
    public const TET = 'tet';

    /**
     * Tajik
     * Two letter code: tg
     * Scope: Individual
     * Type: Living
     * Native name(s) : Тоҷикӣ, toçikī
     */
    public const TGK = 'tgk';

    /**
     * Tagalog
     * Two letter code: tl
     * Scope: Individual
     * Type: Living
     * Native name(s) : Wikang Tagalog
     */
    public const TGL = 'tgl';

    /**
     * Thai
     * Two letter code: th
     * Scope: Individual
     * Type: Living
     * Native name(s) : ภาษาไทย, Phasathay
     */
    public const THA = 'tha';

    /**
     * Tigre
     * Scope: Individual
     * Type: Living
     * Native name(s) : ትግረ; ትግሬ; ኻሳ; ትግራይት
     */
    public const TIG = 'tig';

    /**
     * Tigrinya
     * Two letter code: ti
     * Scope: Individual
     * Type: Living
     * Native name(s) : ትግርኛ
     */
    public const TIR = 'tir';

    /**
     * Tiv
     * Scope: Individual
     * Type: Living
     * Native name(s) : Tiv
     */
    public const TIV = 'tiv';

    /**
     * Tokelau
     * Scope: Individual
     * Type: Living
     * Native name(s) : gagana Tokelau
     */
    public const TKL = 'tkl';

    /**
     * Klingon; tlhIngan-Hol
     * Scope: Individual
     * Type: Constructed
     * Native name(s) :
     */
    public const TLH = 'tlh';

    /**
     * Tlingit
     * Scope: Individual
     * Type: Living
     * Native name(s) : Lingít
     */
    public const TLI = 'tli';

    /**
     * Tamashek
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) :
     */
    public const TMH = 'tmh';

    /**
     * Tonga (Nyasa)
     * Scope: Individual
     * Type: Living
     * Native name(s) : chiTonga
     */
    public const TOG = 'tog';

    /**
     * Tonga (Tonga Islands)
     * Two letter code: to
     * Scope: Individual
     * Type: Living
     * Native name(s) : lea faka-Tonga
     */
    public const TON = 'ton';

    /**
     * Tok Pisin
     * Scope: Individual
     * Type: Living
     * Native name(s) : Tok Pisin
     */
    public const TPI = 'tpi';

    /**
     * Tsimshian
     * Scope: Individual
     * Type: Living
     * Native name(s) : Tsmksian
     */
    public const TSI = 'tsi';

    /**
     * Tswana
     * Two letter code: tn
     * Scope: Individual
     * Type: Living
     * Native name(s) : Setswana
     */
    public const TSN = 'tsn';

    /**
     * Tsonga
     * Two letter code: ts
     * Scope: Individual
     * Type: Living
     * Native name(s) : Xitsonga
     */
    public const TSO = 'tso';

    /**
     * Turkmen
     * Two letter code: tk
     * Scope: Individual
     * Type: Living
     * Native name(s) : Türkmençe, Түркменче, تۆرکمنچه Türkmen dili, Түркмен дили, تۆرکمن ديلی
     */
    public const TUK = 'tuk';

    /**
     * Tumbuka
     * Scope: Individual
     * Type: Living
     * Native name(s) : chiTumbuka
     */
    public const TUM = 'tum';

    /**
     * Tupi languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const TUP = 'tup';

    /**
     * Turkish
     * Two letter code: tr
     * Scope: Individual
     * Type: Living
     * Native name(s) : Türkçe
     */
    public const TUR = 'tur';

    /**
     * Altaic languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const TUT = 'tut';

    /**
     * Tuvalu
     * Scope: Individual
     * Type: Living
     * Native name(s) : Te Ggana Tuuvalu; Te Gagana Tuuvalu
     */
    public const TVL = 'tvl';

    /**
     * Twi
     * Two letter code: tw
     * Scope: Individual
     * Type: Living
     * Native name(s) : Twi
     */
    public const TWI = 'twi';

    /**
     * Tuvinian
     * Scope: Individual
     * Type: Living
     * Native name(s) : Тыва дыл
     */
    public const TYV = 'tyv';

    /**
     * Udmurt
     * Scope: Individual
     * Type: Living
     * Native name(s) : Удмурт кыл
     */
    public const UDM = 'udm';

    /**
     * Ugaritic
     * Scope: Individual
     * Type: Ancient
     * Native name(s) :
     */
    public const UGA = 'uga';

    /**
     * Uighur; Uyghur
     * Two letter code: ug
     * Scope: Individual
     * Type: Living
     * Native name(s) : ئۇيغۇر تىلى, Uyghur tili
     */
    public const UIG = 'uig';

    /**
     * Ukrainian
     * Two letter code: uk
     * Scope: Individual
     * Type: Living
     * Native name(s) : Українська мова; Українська
     */
    public const UKR = 'ukr';

    /**
     * Umbundu
     * Scope: Individual
     * Type: Living
     * Native name(s) : Úmbúndú
     */
    public const UMB = 'umb';

    /**
     * Undetermined
     * Scope: Special
     * Type:
     * Native name(s) :
     */
    public const UND = 'und';

    /**
     * Urdu
     * Two letter code: ur
     * Scope: Individual
     * Type: Living
     * Native name(s) : اُردُو Urduw
     */
    public const URD = 'urd';

    /**
     * Uzbek
     * Two letter code: uz
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Oʻzbekcha, Ózbekça, ўзбекча, ئوزبېچه; oʻzbek tili, ўзбек тили, ئوبېک تیلی
     */
    public const UZB = 'uzb';

    /**
     * Vai
     * Scope: Individual
     * Type: Living
     * Native name(s) : ꕙꔤ
     */
    public const VAI = 'vai';

    /**
     * Venda
     * Two letter code: ve
     * Scope: Individual
     * Type: Living
     * Native name(s) : Tshivenḓa
     */
    public const VEN = 'ven';

    /**
     * Vietnamese
     * Two letter code: vi
     * Scope: Individual
     * Type: Living
     * Native name(s) : Tiếng Việt
     */
    public const VIE = 'vie';

    /**
     * Volapük
     * Two letter code: vo
     * Scope: Individual
     * Type: Constructed
     * Native name(s) :
     */
    public const VOL = 'vol';

    /**
     * Votic
     * Scope: Individual
     * Type: Living
     * Native name(s) : Vaďďa tšeeli
     */
    public const VOT = 'vot';

    /**
     * Wakashan languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const WAK = 'wak';

    /**
     * Wolaitta; Wolaytta
     * Scope: Individual
     * Type: Living
     * Native name(s) : Wolayttatto Doonaa
     */
    public const WAL = 'wal';

    /**
     * Waray
     * Scope: Individual
     * Type: Living
     * Native name(s) : Winaray; Samareño; Lineyte-Samarnon; Binisayâ nga Winaray;
     * Binisayâ nga Samar-Leyte; Binisayâ nga Waray
     */
    public const WAR = 'war';

    /**
     * Washo
     * Scope: Individual
     * Type: Living
     * Native name(s) : Wá:šiw ʔítlu
     */
    public const WAS = 'was';

    /**
     * Sorbian languages
     * Scope: Collective
     * Type:
     * Native name(s) : Serbsce; Serbski
     */
    public const WEN = 'wen';

    /**
     * Walloon
     * Two letter code: wa
     * Scope: Individual
     * Type: Living
     * Native name(s) : Walon
     */
    public const WLN = 'wln';

    /**
     * Wolof
     * Two letter code: wo
     * Scope: Individual
     * Type: Living
     * Native name(s) : Wolof làkk
     */
    public const WOL = 'wol';

    /**
     * Kalmyk; Oirat
     * Scope: Individual
     * Type: Living
     * Native name(s) : Хальмг келн, Xaľmg keln
     */
    public const XAL = 'xal';

    /**
     * Xhosa
     * Two letter code: xh
     * Scope: Individual
     * Type: Living
     * Native name(s) : isiXhosa
     */
    public const XHO = 'xho';

    /**
     * Yao
     * Scope: Individual
     * Type: Living
     * Native name(s) : chiYao
     */
    public const YAO = 'yao';

    /**
     * Yapese
     * Scope: Individual
     * Type: Living
     * Native name(s) : Thin nu Waqaab
     */
    public const YAP = 'yap';

    /**
     * Yiddish
     * Two letter code: yi
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : ייִדיש; יידיש; אידיש Yidiš
     */
    public const YID = 'yid';

    /**
     * Yoruba
     * Two letter code: yo
     * Scope: Individual
     * Type: Living
     * Native name(s) : èdè Yorùbá
     */
    public const YOR = 'yor';

    /**
     * Yupik languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const YPK = 'ypk';

    /**
     * Zapotec
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Diidxazá, Dizhsa
     */
    public const ZAP = 'zap';

    /**
     * Blissymbols; Blissymbolics; Bliss
     * Scope: Individual
     * Type: Constructed
     * Native name(s) :
     */
    public const ZBL = 'zbl';

    /**
     * Zenaga
     * Scope: Individual
     * Type: Living
     * Native name(s) : Tuẓẓungiyya
     */
    public const ZEN = 'zen';

    /**
     * Standard Moroccan Tamazight
     * Scope: Individual
     * Type: Living
     * Native name(s) : ⵜⴰⵎⴰⵣⵉⵖⵜ ⵜⴰⵏⴰⵡⴰⵢⵜ
     */
    public const ZGH = 'zgh';

    /**
     * Zhuang; Chuang
     * Two letter code: za
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : 話僮, Vahcuengh
     */
    public const ZHA = 'zha';

    /**
     * Chinese
     * Two letter code: zh
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : 中文; Zhōngwén; 汉语; 漢語; Hànyǔ
     */
    public const ZHO = 'zho';

    /**
     * Chinese
     * Two letter code: zh
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : 中文; Zhōngwén; 汉语; 漢語; Hànyǔ
     */
    public const CHI = 'zho';

    /**
     * Zande languages
     * Scope: Collective
     * Type:
     * Native name(s) :
     */
    public const ZND = 'znd';

    /**
     * Zulu
     * Two letter code: zu
     * Scope: Individual
     * Type: Living
     * Native name(s) : isiZulu
     */
    public const ZUL = 'zul';

    /**
     * Zuni
     * Scope: Individual
     * Type: Living
     * Native name(s) : Shiwi'ma
     */
    public const ZUN = 'zun';

    /**
     * No linguistic content; Not applicable
     * Scope: Special
     * Type:
     * Native name(s) :
     */
    public const ZXX = 'zxx';

    /**
     * Zaza; Dimili; Dimli; Kirdki; Kirmanjki; Zazaki
     * Scope: Macrolanguage
     * Type: Living
     * Native name(s) : Kirmanckî; Dimilkî; Kirdkî; Zazakî
     */
    public const ZZA = 'zza';

    public function getValidator(): Validator
    {
        return $this->cache(
            new UnionValidator(
                new EnumValidator([
                    self::AA,
                    self::AB,
                    self::AF,
                    self::AK,
                    self::AM,
                    self::AR,
                    self::AN,
                    self::AS,
                    self::AV,
                    self::AE,
                    self::AY,
                    self::AZ,
                    self::BA,
                    self::BM,
                    self::BE,
                    self::BN,
                    self::BI,
                    self::BO,
                    self::BS,
                    self::BR,
                    self::BG,
                    self::CA,
                    self::CS,
                    self::CH,
                    self::CE,
                    self::CU,
                    self::CV,
                    self::KW,
                    self::CO,
                    self::CR,
                    self::CY,
                    self::DA,
                    self::DE,
                    self::DV,
                    self::DZ,
                    self::EL,
                    self::EN,
                    self::EO,
                    self::ET,
                    self::EU,
                    self::EE,
                    self::FO,
                    self::FA,
                    self::FJ,
                    self::FI,
                    self::FR,
                    self::FY,
                    self::FF,
                    self::GD,
                    self::GA,
                    self::GL,
                    self::GV,
                    self::GN,
                    self::GU,
                    self::HT,
                    self::HA,
                    self::HE,
                    self::HZ,
                    self::HI,
                    self::HO,
                    self::HR,
                    self::HU,
                    self::HY,
                    self::IG,
                    self::IO,
                    self::II,
                    self::IU,
                    self::IE,
                    self::IA,
                    self::ID,
                    self::IK,
                    self::IS,
                    self::IT,
                    self::JV,
                    self::JA,
                    self::KL,
                    self::KN,
                    self::KS,
                    self::KA,
                    self::KR,
                    self::KK,
                    self::KM,
                    self::KI,
                    self::RW,
                    self::KY,
                    self::KV,
                    self::KG,
                    self::KO,
                    self::KJ,
                    self::KU,
                    self::LO,
                    self::LA,
                    self::LV,
                    self::LI,
                    self::LN,
                    self::LT,
                    self::LB,
                    self::LU,
                    self::LG,
                    self::MH,
                    self::ML,
                    self::MR,
                    self::MK,
                    self::MG,
                    self::MT,
                    self::MN,
                    self::MI,
                    self::MS,
                    self::MY,
                    self::NA,
                    self::NV,
                    self::NR,
                    self::ND,
                    self::NG,
                    self::NE,
                    self::NL,
                    self::NN,
                    self::NB,
                    self::NO,
                    self::NY,
                    self::OC,
                    self::OJ,
                    self::OR,
                    self::OM,
                    self::OS,
                    self::PA,
                    self::PI,
                    self::PL,
                    self::PT,
                    self::PS,
                    self::QU,
                    self::RM,
                    self::RO,
                    self::RN,
                    self::RU,
                    self::SG,
                    self::SA,
                    self::SI,
                    self::SK,
                    self::SK,
                    self::SL,
                    self::SE,
                    self::SM,
                    self::SN,
                    self::SD,
                    self::SO,
                    self::ST,
                    self::ES,
                    self::SQ,
                    self::SC,
                    self::SR,
                    self::SS,
                    self::SU,
                    self::SW,
                    self::SV,
                    self::TY,
                    self::TA,
                    self::TT,
                    self::TE,
                    self::TG,
                    self::TL,
                    self::TH,
                    self::TI,
                    self::TO,
                    self::TN,
                    self::TS,
                    self::TK,
                    self::TR,
                    self::TW,
                    self::UG,
                    self::UK,
                    self::UR,
                    self::UZ,
                    self::VE,
                    self::VI,
                    self::VO,
                    self::WA,
                    self::WO,
                    self::XH,
                    self::YI,
                    self::YO,
                    self::ZA,
                    self::ZH,
                    self::ZU,
                    self::AAR,
                    self::ABK,
                    self::ACE,
                    self::ACH,
                    self::ADA,
                    self::ADY,
                    self::AFA,
                    self::AFH,
                    self::AFR,
                    self::AIN,
                    self::AKA,
                    self::AKK,
                    self::ALE,
                    self::ALG,
                    self::ALT,
                    self::AMH,
                    self::ANG,
                    self::ANP,
                    self::APA,
                    self::ARA,
                    self::ARC,
                    self::ARG,
                    self::ARN,
                    self::ARP,
                    self::ART,
                    self::ARW,
                    self::ASM,
                    self::AST,
                    self::ATH,
                    self::AUS,
                    self::AVA,
                    self::AVE,
                    self::AWA,
                    self::AYM,
                    self::AZE,
                    self::BAD,
                    self::BAI,
                    self::BAK,
                    self::BAL,
                    self::BAM,
                    self::BAN,
                    self::BAS,
                    self::BAT,
                    self::BEJ,
                    self::BEL,
                    self::BEM,
                    self::BEN,
                    self::BER,
                    self::BHO,
                    self::BIH,
                    self::BIK,
                    self::BIN,
                    self::BIS,
                    self::BLA,
                    self::BNT,
                    self::BOD,
                    self::TIB,
                    self::BOS,
                    self::BRA,
                    self::BRE,
                    self::BTK,
                    self::BUA,
                    self::BUG,
                    self::BUL,
                    self::BYN,
                    self::CAD,
                    self::CAI,
                    self::CAR,
                    self::CAT,
                    self::CAU,
                    self::CEB,
                    self::CEL,
                    self::CES,
                    self::CZE,
                    self::CHA,
                    self::CHB,
                    self::CHE,
                    self::CHG,
                    self::CHK,
                    self::CHM,
                    self::CHN,
                    self::CHO,
                    self::CHP,
                    self::CHR,
                    self::CHU,
                    self::CHV,
                    self::CHY,
                    self::CMC,
                    self::CNR,
                    self::COP,
                    self::COR,
                    self::COS,
                    self::CPE,
                    self::CPF,
                    self::CPP,
                    self::CRE,
                    self::CRH,
                    self::CRP,
                    self::CSB,
                    self::CUS,
                    self::CYM,
                    self::WEL,
                    self::DAK,
                    self::DAN,
                    self::DAR,
                    self::DAY,
                    self::DEL,
                    self::DEN,
                    self::DEU,
                    self::GER,
                    self::DGR,
                    self::DIN,
                    self::DIV,
                    self::DOI,
                    self::DRA,
                    self::DSB,
                    self::DUA,
                    self::DUM,
                    self::DYU,
                    self::DZO,
                    self::EFI,
                    self::EGY,
                    self::EKA,
                    self::ELL,
                    self::GRE,
                    self::ELX,
                    self::ENG,
                    self::ENM,
                    self::EPO,
                    self::EST,
                    self::EUS,
                    self::BAQ,
                    self::EWE,
                    self::EWO,
                    self::FAN,
                    self::FAO,
                    self::FAS,
                    self::PER,
                    self::FAT,
                    self::FIJ,
                    self::FIL,
                    self::FIN,
                    self::FIU,
                    self::FON,
                    self::FRA,
                    self::FRE,
                    self::FRM,
                    self::FRO,
                    self::FRR,
                    self::FRS,
                    self::FRY,
                    self::FUL,
                    self::FUR,
                    self::GAA,
                    self::GAY,
                    self::GBA,
                    self::GEM,
                    self::GEZ,
                    self::GIL,
                    self::GLA,
                    self::GLE,
                    self::GLG,
                    self::GLV,
                    self::GMH,
                    self::GOH,
                    self::GON,
                    self::GOR,
                    self::GOT,
                    self::GRB,
                    self::GRC,
                    self::GRN,
                    self::GSW,
                    self::GUJ,
                    self::GWI,
                    self::HAI,
                    self::HAT,
                    self::HAU,
                    self::HAW,
                    self::HEB,
                    self::HER,
                    self::HIL,
                    self::HIM,
                    self::HIN,
                    self::HIT,
                    self::HMN,
                    self::HMO,
                    self::HRV,
                    self::HSB,
                    self::HUN,
                    self::HUP,
                    self::HYE,
                    self::ARM,
                    self::IBA,
                    self::IBO,
                    self::IDO,
                    self::III,
                    self::IJO,
                    self::IKU,
                    self::ILE,
                    self::ILO,
                    self::INA,
                    self::INC,
                    self::IND,
                    self::INE,
                    self::INH,
                    self::IPK,
                    self::IRA,
                    self::IRO,
                    self::ISL,
                    self::ICE,
                    self::ITA,
                    self::JAV,
                    self::JBO,
                    self::JPN,
                    self::JPR,
                    self::JRB,
                    self::KAA,
                    self::KAB,
                    self::KAC,
                    self::KAL,
                    self::KAM,
                    self::KAN,
                    self::KAR,
                    self::KAS,
                    self::KAT,
                    self::GEO,
                    self::KAU,
                    self::KAW,
                    self::KAZ,
                    self::KBD,
                    self::KHA,
                    self::KHI,
                    self::KHM,
                    self::KHO,
                    self::KIK,
                    self::KIN,
                    self::KIR,
                    self::KMB,
                    self::KOK,
                    self::KOM,
                    self::KON,
                    self::KOR,
                    self::KOS,
                    self::KPE,
                    self::KRC,
                    self::KRL,
                    self::KRO,
                    self::KRU,
                    self::KUA,
                    self::KUM,
                    self::KUR,
                    self::KUT,
                    self::LAD,
                    self::LAH,
                    self::LAM,
                    self::LAO,
                    self::LAT,
                    self::LAV,
                    self::LEZ,
                    self::LIM,
                    self::LIN,
                    self::LIT,
                    self::LOL,
                    self::LOZ,
                    self::LTZ,
                    self::LUA,
                    self::LUB,
                    self::LUG,
                    self::LUI,
                    self::LUN,
                    self::LUO,
                    self::LUS,
                    self::MAD,
                    self::MAG,
                    self::MAH,
                    self::MAI,
                    self::MAK,
                    self::MAL,
                    self::MAN,
                    self::MAP,
                    self::MAR,
                    self::MAS,
                    self::MDF,
                    self::MDR,
                    self::MEN,
                    self::MGA,
                    self::MIC,
                    self::MIN,
                    self::MIS,
                    self::MKD,
                    self::MAC,
                    self::MKH,
                    self::MLG,
                    self::MLT,
                    self::MNC,
                    self::MNI,
                    self::MNO,
                    self::MOH,
                    self::MON,
                    self::MOS,
                    self::MRI,
                    self::MAO,
                    self::MSA,
                    self::MAY,
                    self::MUL,
                    self::MUN,
                    self::MUS,
                    self::MWL,
                    self::MWR,
                    self::MYA,
                    self::BUR,
                    self::MYN,
                    self::MYV,
                    self::NAH,
                    self::NAI,
                    self::NAP,
                    self::NAU,
                    self::NAV,
                    self::NBL,
                    self::NDE,
                    self::NDO,
                    self::NDS,
                    self::NEP,
                    self::NEW,
                    self::NIA,
                    self::NIC,
                    self::NIU,
                    self::NLD,
                    self::DUT,
                    self::NNO,
                    self::NOB,
                    self::NOG,
                    self::NON,
                    self::NOR,
                    self::NQO,
                    self::NSO,
                    self::NUB,
                    self::NWC,
                    self::NYA,
                    self::NYM,
                    self::NYN,
                    self::NYO,
                    self::NZI,
                    self::OCI,
                    self::OJI,
                    self::ORI,
                    self::ORM,
                    self::OSA,
                    self::OSS,
                    self::OTA,
                    self::OTO,
                    self::PAA,
                    self::PAG,
                    self::PAL,
                    self::PAM,
                    self::PAN,
                    self::PAP,
                    self::PAU,
                    self::PEO,
                    self::PHI,
                    self::PHN,
                    self::PLI,
                    self::POL,
                    self::PON,
                    self::POR,
                    self::PRA,
                    self::PRO,
                    self::PUS,
                    self::QUE,
                    self::RAJ,
                    self::RAP,
                    self::RAR,
                    self::ROA,
                    self::ROH,
                    self::ROM,
                    self::RON,
                    self::RUM,
                    self::RUN,
                    self::RUP,
                    self::RUS,
                    self::SAD,
                    self::SAG,
                    self::SAH,
                    self::SAI,
                    self::SAL,
                    self::SAM,
                    self::SAN,
                    self::SAS,
                    self::SAT,
                    self::SCN,
                    self::SCO,
                    self::SEL,
                    self::SEM,
                    self::SGA,
                    self::SGN,
                    self::SHN,
                    self::SID,
                    self::SIN,
                    self::SIO,
                    self::SIT,
                    self::SLA,
                    self::SLK,
                    self::SLO,
                    self::SLV,
                    self::SMA,
                    self::SME,
                    self::SMI,
                    self::SMJ,
                    self::SMN,
                    self::SMO,
                    self::SMS,
                    self::SNA,
                    self::SND,
                    self::SNK,
                    self::SOG,
                    self::SOM,
                    self::SON,
                    self::SOT,
                    self::SPA,
                    self::SQI,
                    self::ALB,
                    self::SRD,
                    self::SRN,
                    self::SRP,
                    self::SRR,
                    self::SSA,
                    self::SSW,
                    self::SUK,
                    self::SUN,
                    self::SUS,
                    self::SUX,
                    self::SWA,
                    self::SWE,
                    self::SYC,
                    self::SYR,
                    self::TAH,
                    self::TAI,
                    self::TAM,
                    self::TAT,
                    self::TEL,
                    self::TEM,
                    self::TER,
                    self::TET,
                    self::TGK,
                    self::TGL,
                    self::THA,
                    self::TIG,
                    self::TIR,
                    self::TIV,
                    self::TKL,
                    self::TLH,
                    self::TLI,
                    self::TMH,
                    self::TOG,
                    self::TON,
                    self::TPI,
                    self::TSI,
                    self::TSN,
                    self::TSO,
                    self::TUK,
                    self::TUM,
                    self::TUP,
                    self::TUR,
                    self::TUT,
                    self::TVL,
                    self::TWI,
                    self::TYV,
                    self::UDM,
                    self::UGA,
                    self::UIG,
                    self::UKR,
                    self::UMB,
                    self::UND,
                    self::URD,
                    self::UZB,
                    self::VAI,
                    self::VEN,
                    self::VIE,
                    self::VOL,
                    self::VOT,
                    self::WAK,
                    self::WAL,
                    self::WAR,
                    self::WAS,
                    self::WEN,
                    self::WLN,
                    self::WOL,
                    self::XAL,
                    self::XHO,
                    self::YAO,
                    self::YAP,
                    self::YID,
                    self::YOR,
                    self::YPK,
                    self::ZAP,
                    self::ZBL,
                    self::ZEN,
                    self::ZGH,
                    self::ZHA,
                    self::ZHO,
                    self::CHI,
                    self::ZND,
                    self::ZUL,
                    self::ZUN,
                    self::ZXX,
                    self::ZZA,
                ]),
                // Language qaa–qtz, a range reserved for local use;
                new RegexValidator('q[a-t][a-z]')
            )
        );
    }
}
