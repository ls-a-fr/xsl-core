<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Iso3166;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * A string of characters conforming to an ISO 3166 country code.
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class CountryType extends Type implements Validator
{
    /**
     * Code country-name = "AFGHANISTAN"/
     */
    public const AF = 'AF';

    /**
     * Code country-name = "ALBANIA"/
     */
    public const AL = 'AL';

    /**
     * Code country-name = "ALGERIA"/
     */
    public const DZ = 'DZ';

    /**
     * Code country-name = "AMERICANSAMOA"/
     */
    public const AS = 'AS';

    /**
     * Code country-name = "ANDORRA"/
     */
    public const AD = 'AD';

    /**
     * Code country-name = "ANGOLA"/
     */
    public const AO = 'AO';

    /**
     * Code country-name = "ANGUILLA"/
     */
    public const AI = 'AI';

    /**
     * Code country-name = "ANTARCTICA"/
     */
    public const AQ = 'AQ';

    /**
     * Code country-name = "ANTIGUAANDBARBUDA"/
     */
    public const AG = 'AG';

    /**
     * Code country-name = "ARGENTINA"/
     */
    public const AR = 'AR';

    /**
     * Code country-name = "ARMENIA"/
     */
    public const AM = 'AM';

    /**
     * Code country-name = "ARUBA"/
     */
    public const AW = 'AW';

    /**
     * Code country-name = "AUSTRALIA"/
     */
    public const AU = 'AU';

    /**
     * Code country-name = "AUSTRIA"/
     */
    public const AT = 'AT';

    /**
     * Code country-name = "AZERBAIJAN"/
     */
    public const AZ = 'AZ';

    /**
     * Code country-name = "BAHAMAS"/
     */
    public const BS = 'BS';

    /**
     * Code country-name = "BAHRAIN"/
     */
    public const BH = 'BH';

    /**
     * Code country-name = "BANGLADESH"/
     */
    public const BD = 'BD';

    /**
     * Code country-name = "BARBADOS"/
     */
    public const BB = 'BB';

    /**
     * Code country-name = "BELARUS"/
     */
    public const BY = 'BY';

    /**
     * Code country-name = "BELGIUM"/
     */
    public const BE = 'BE';

    /**
     * Code country-name = "BELIZE"/
     */
    public const BZ = 'BZ';

    /**
     * Code country-name = "BENIN"/
     */
    public const BJ = 'BJ';

    /**
     * Code country-name = "BERMUDA"/
     */
    public const BM = 'BM';

    /**
     * Code country-name = "BHUTAN"/
     */
    public const BT = 'BT';

    /**
     * Code country-name = "BOLIVIA"/
     */
    public const BO = 'BO';

    /**
     * Code country-name = "BOSNIAANDHERZEGOVINA"/
     */
    public const BA = 'BA';

    /**
     * Code country-name = "BOTSWANA"/
     */
    public const BW = 'BW';

    /**
     * Code country-name = "BOUVETISLAND"/
     */
    public const BV = 'BV';

    /**
     * Code country-name = "BRAZIL"/
     */
    public const BR = 'BR';

    /**
     * Code country-name = "BRITISHINDIANOCEANTERRITORY"/
     */
    public const IO = 'IO';

    /**
     * Code country-name = "BRUNEIDARUSSALAM"/
     */
    public const BN = 'BN';

    /**
     * Code country-name = "BULGARIA"/
     */
    public const BG = 'BG';

    /**
     * Code country-name = "BURKINAFASO"/
     */
    public const BF = 'BF';

    /**
     * Code country-name = "BURUNDI"/
     */
    public const BI = 'BI';

    /**
     * Code country-name = "CAMBODIA"/
     */
    public const KH = 'KH';

    /**
     * Code country-name = "CAMEROON"/
     */
    public const CM = 'CM';

    /**
     * Code country-name = "CANADA"/
     */
    public const CA = 'CA';

    /**
     * Code country-name = "CAPEVERDE"/
     */
    public const CV = 'CV';

    /**
     * Code country-name = "CAYMANISLANDS"/
     */
    public const KY = 'KY';

    /**
     * Code country-name = "CENTRALAFRICANREPUBLIC"/
     */
    public const CF = 'CF';

    /**
     * Code country-name = "CHAD"/
     */
    public const TD = 'TD';

    /**
     * Code country-name = "CHILE"/
     */
    public const CL = 'CL';

    /**
     * Code country-name = "CHINA"/
     */
    public const CN = 'CN';

    /**
     * Code country-name = "CHRISTMASISLAND"/
     */
    public const CX = 'CX';

    /**
     * Code country-name = "COCOS(KEELING)ISLANDS"/
     */
    public const CC = 'CC';

    /**
     * Code country-name = "COLOMBIA"/
     */
    public const CO = 'CO';

    /**
     * Code country-name = "COMOROS"/
     */
    public const KM = 'KM';

    /**
     * Code country-name = "CONGO"/
     */
    public const CG = 'CG';

    /**
     * Code country-name = "CONGO,THEDEMOCRATICREPUBLICOFTHE"/
     */
    public const CD = 'CD';

    /**
     * Code country-name = "COOKISLANDS"/
     */
    public const CK = 'CK';

    /**
     * Code country-name = "COSTARICA"/
     */
    public const CR = 'CR';

    /**
     * Code country-name = "COTED'IVOIRE"/
     */
    public const CI = 'CI';

    /**
     * Code country-name = "CROATIA"/
     */
    public const HR = 'HR';

    /**
     * Code country-name = "CUBA"/
     */
    public const CU = 'CU';

    /**
     * Code country-name = "CYPRUS"/
     */
    public const CY = 'CY';

    /**
     * Code country-name = "CZECHREPUBLIC"/
     */
    public const CZ = 'CZ';

    /**
     * Code country-name = "DENMARK"/
     */
    public const DK = 'DK';

    /**
     * Code country-name = "DJIBOUTI"/
     */
    public const DJ = 'DJ';

    /**
     * Code country-name = "DOMINICA"/
     */
    public const DM = 'DM';

    /**
     * Code country-name = "DOMINICANREPUBLIC"/
     */
    public const DO = 'DO';

    /**
     * Code country-name = "EASTTIMOR"/
     */
    public const TP = 'TP';

    /**
     * Code country-name = "ECUADOR"/
     */
    public const EC = 'EC';

    /**
     * Code country-name = "EGYPT"/
     */
    public const EG = 'EG';

    /**
     * Code country-name = "ELSALVADOR"/
     */
    public const SV = 'SV';

    /**
     * Code country-name = "EQUATORIALGUINEA"/
     */
    public const GQ = 'GQ';

    /**
     * Code country-name = "ERITREA"/
     */
    public const ER = 'ER';

    /**
     * Code country-name = "ESTONIA"/
     */
    public const EE = 'EE';

    /**
     * Code country-name = "ETHIOPIA"/
     */
    public const ET = 'ET';

    /**
     * Code country-name = "FALKLANDISLANDS(MALVINAS)"/
     */
    public const FK = 'FK';

    /**
     * Code country-name = "FAROEISLANDS"/
     */
    public const FO = 'FO';

    /**
     * Code country-name = "FIJI"/
     */
    public const FJ = 'FJ';

    /**
     * Code country-name = "FINLAND"/
     */
    public const FI = 'FI';

    /**
     * Code country-name = "FRANCE"/
     */
    public const FR = 'FR';

    /**
     * Code country-name = "FRENCHGUIANA"/
     */
    public const GF = 'GF';

    /**
     * Code country-name = "FRENCHPOLYNESIA"/
     */
    public const PF = 'PF';

    /**
     * Code country-name = "FRENCHSOUTHERNTERRITORIES"/
     */
    public const TF = 'TF';

    /**
     * Code country-name = "GABON"/
     */
    public const GA = 'GA';

    /**
     * Code country-name = "GAMBIA"/
     */
    public const GM = 'GM';

    /**
     * Code country-name = "GEORGIA"/
     */
    public const GE = 'GE';

    /**
     * Code country-name = "GERMANY"/
     */
    public const DE = 'DE';

    /**
     * Code country-name = "GHANA"/
     */
    public const GH = 'GH';

    /**
     * Code country-name = "GIBRALTAR"/
     */
    public const GI = 'GI';

    /**
     * Code country-name = "GREECE"/
     */
    public const GR = 'GR';

    /**
     * Code country-name = "GREENLAND"/
     */
    public const GL = 'GL';

    /**
     * Code country-name = "GRENADA"/
     */
    public const GD = 'GD';

    /**
     * Code country-name = "GUADELOUPE"/
     */
    public const GP = 'GP';

    /**
     * Code country-name = "GUAM"/
     */
    public const GU = 'GU';

    /**
     * Code country-name = "GUATEMALA"/
     */
    public const GT = 'GT';

    /**
     * Code country-name = "GUINEA"/
     */
    public const GN = 'GN';

    /**
     * Code country-name = "GUINEA-BISSAU"/
     */
    public const GW = 'GW';

    /**
     * Code country-name = "GUYANA"/
     */
    public const GY = 'GY';

    /**
     * Code country-name = "HAITI"/
     */
    public const HT = 'HT';

    /**
     * Code country-name = "HEARDISLANDANDMCDONALDISLANDS"/
     */
    public const HM = 'HM';

    /**
     * Code country-name = "HOLYSEE(VATICANCITYSTATE)"/
     */
    public const VA = 'VA';

    /**
     * Code country-name = "HONDURAS"/
     */
    public const HN = 'HN';

    /**
     * Code country-name = "HONGKONG"/
     */
    public const HK = 'HK';

    /**
     * Code country-name = "HUNGARY"/
     */
    public const HU = 'HU';

    /**
     * Code country-name = "ICELAND"/
     */
    public const IS = 'IS';

    /**
     * Code country-name = "INDIA"/
     */
    public const IN = 'IN';

    /**
     * Code country-name = "INDONESIA"/
     */
    public const ID = 'ID';

    /**
     * Code country-name = "IRAN,ISLAMICREPUBLICOF"/
     */
    public const IR = 'IR';

    /**
     * Code country-name = "IRAQ"/
     */
    public const IQ = 'IQ';

    /**
     * Code country-name = "IRELAND"/
     */
    public const IE = 'IE';

    /**
     * Code country-name = "ISRAEL"/
     */
    public const IL = 'IL';

    /**
     * Code country-name = "ITALY"/
     */
    public const IT = 'IT';

    /**
     * Code country-name = "JAMAICA"/
     */
    public const JM = 'JM';

    /**
     * Code country-name = "JAPAN"/
     */
    public const JP = 'JP';

    /**
     * Code country-name = "JORDAN"/
     */
    public const JO = 'JO';

    /**
     * Code country-name = "KAZAKSTAN"/
     */
    public const KZ = 'KZ';

    /**
     * Code country-name = "KENYA"/
     */
    public const KE = 'KE';

    /**
     * Code country-name = "KIRIBATI"/
     */
    public const KI = 'KI';

    /**
     * Code country-name = "KOREA,DEMOCRATICPEOPLE'SREPUBLICOF"/
     */
    public const KP = 'KP';

    /**
     * Code country-name = "KOREA,REPUBLICOF"/
     */
    public const KR = 'KR';

    /**
     * Code country-name = "KUWAIT"/
     */
    public const KW = 'KW';

    /**
     * Code country-name = "KYRGYZSTAN"/
     */
    public const KG = 'KG';

    /**
     * Code country-name = "LAOPEOPLE'SDEMOCRATICREPUBLIC"/
     */
    public const LA = 'LA';

    /**
     * Code country-name = "LATVIA"/
     */
    public const LV = 'LV';

    /**
     * Code country-name = "LEBANON"/
     */
    public const LB = 'LB';

    /**
     * Code country-name = "LESOTHO"/
     */
    public const LS = 'LS';

    /**
     * Code country-name = "LIBERIA"/
     */
    public const LR = 'LR';

    /**
     * Code country-name = "LIBYANARABJAMAHIRIYA"/
     */
    public const LY = 'LY';

    /**
     * Code country-name = "LIECHTENSTEIN"/
     */
    public const LI = 'LI';

    /**
     * Code country-name = "LITHUANIA"/
     */
    public const LT = 'LT';

    /**
     * Code country-name = "LUXEMBOURG"/
     */
    public const LU = 'LU';

    /**
     * Code country-name = "MACAU"/
     */
    public const MO = 'MO';

    /**
     * Code country-name = "MACEDONIA,THEFORMERYUGOSLAVREPUBLICOF"/
     */
    public const MK = 'MK';

    /**
     * Code country-name = "MADAGASCAR"/
     */
    public const MG = 'MG';

    /**
     * Code country-name = "MALAWI"/
     */
    public const MW = 'MW';

    /**
     * Code country-name = "MALAYSIA"/
     */
    public const MY = 'MY';

    /**
     * Code country-name = "MALDIVES"/
     */
    public const MV = 'MV';

    /**
     * Code country-name = "MALI"/
     */
    public const ML = 'ML';

    /**
     * Code country-name = "MALTA"/
     */
    public const MT = 'MT';

    /**
     * Code country-name = "MARSHALLISLANDS"/
     */
    public const MH = 'MH';

    /**
     * Code country-name = "MARTINIQUE"/
     */
    public const MQ = 'MQ';

    /**
     * Code country-name = "MAURITANIA"/
     */
    public const MR = 'MR';

    /**
     * Code country-name = "MAURITIUS"/
     */
    public const MU = 'MU';

    /**
     * Code country-name = "MAYOTTE"/
     */
    public const YT = 'YT';

    /**
     * Code country-name = "MEXICO"/
     */
    public const MX = 'MX';

    /**
     * Code country-name = "MICRONESIA,FEDERATEDSTATESOF"/
     */
    public const FM = 'FM';

    /**
     * Code country-name = "MOLDOVA,REPUBLICOF"/
     */
    public const MD = 'MD';

    /**
     * Code country-name = "MONACO"/
     */
    public const MC = 'MC';

    /**
     * Code country-name = "MONGOLIA"/
     */
    public const MN = 'MN';

    /**
     * Code country-name = "MONTSERRAT"/
     */
    public const MS = 'MS';

    /**
     * Code country-name = "MOROCCO"/
     */
    public const MA = 'MA';

    /**
     * Code country-name = "MOZAMBIQUE"/
     */
    public const MZ = 'MZ';

    /**
     * Code country-name = "MYANMAR"/
     */
    public const MM = 'MM';

    /**
     * Code country-name = "NAMIBIA"/
     */
    public const NA = 'NA';

    /**
     * Code country-name = "NAURU"/
     */
    public const NR = 'NR';

    /**
     * Code country-name = "NEPAL"/
     */
    public const NP = 'NP';

    /**
     * Code country-name = "NETHERLANDS"/
     */
    public const NL = 'NL';

    /**
     * Code country-name = "NETHERLANDSANTILLES"/
     */
    public const AN = 'AN';

    /**
     * Code country-name = "NEWCALEDONIA"/
     */
    public const NC = 'NC';

    /**
     * Code country-name = "NEWZEALAND"/
     */
    public const NZ = 'NZ';

    /**
     * Code country-name = "NICARAGUA"/
     */
    public const NI = 'NI';

    /**
     * Code country-name = "NIGER"/
     */
    public const NE = 'NE';

    /**
     * Code country-name = "NIGERIA"/
     */
    public const NG = 'NG';

    /**
     * Code country-name = "NIUE"/
     */
    public const NU = 'NU';

    /**
     * Code country-name = "NORFOLKISLAND"/
     */
    public const NF = 'NF';

    /**
     * Code country-name = "NORTHERNMARIANAISLANDS"/
     */
    public const MP = 'MP';

    /**
     * Code country-name = "NORWAY"/
     */
    public const NO = 'NO';

    /**
     * Code country-name = "OMAN"/
     */
    public const OM = 'OM';

    /**
     * Code country-name = "PAKISTAN"/
     */
    public const PK = 'PK';

    /**
     * Code country-name = "PALAU"/
     */
    public const PW = 'PW';

    /**
     * Code country-name = "PALESTINIANTERRITORY,OCCUPIED"/
     */
    public const PS = 'PS';

    /**
     * Code country-name = "PANAMA"/
     */
    public const PA = 'PA';

    /**
     * Code country-name = "PAPUANEWGUINEA"/
     */
    public const PG = 'PG';

    /**
     * Code country-name = "PARAGUAY"/
     */
    public const PY = 'PY';

    /**
     * Code country-name = "PERU"/
     */
    public const PE = 'PE';

    /**
     * Code country-name = "PHILIPPINES"/
     */
    public const PH = 'PH';

    /**
     * Code country-name = "PITCAIRN"/
     */
    public const PN = 'PN';

    /**
     * Code country-name = "POLAND"/
     */
    public const PL = 'PL';

    /**
     * Code country-name = "PORTUGAL"/
     */
    public const PT = 'PT';

    /**
     * Code country-name = "PUERTORICO"/
     */
    public const PR = 'PR';

    /**
     * Code country-name = "QATAR"/
     */
    public const QA = 'QA';

    /**
     * Code country-name = "PRIVATE"/
     */
    public const QM = 'QM';

    /**
     * Code country-name = "R+UNION"/
     */
    public const RE = 'RE';

    /**
     * Code country-name = "ROMANIA"/
     */
    public const RO = 'RO';

    /**
     * Code country-name = "RUSSIANFEDERATION"/
     */
    public const RU = 'RU';

    /**
     * Code country-name = "RWANDA"/
     */
    public const RW = 'RW';

    /**
     * Code country-name = "SAINTHELENA"/
     */
    public const SH = 'SH';

    /**
     * Code country-name = "SAINTKITTSANDNEVIS"/
     */
    public const KN = 'KN';

    /**
     * Code country-name = "SAINTLUCIA"/
     */
    public const LC = 'LC';

    /**
     * Code country-name = "SAINTPIERREANDMIQUELON"/
     */
    public const PM = 'PM';

    /**
     * Code country-name = "SAINTVINCENTANDTHEGRENADINES"/
     */
    public const VC = 'VC';

    /**
     * Code country-name = "SAMOA"/
     */
    public const WS = 'WS';

    /**
     * Code country-name = "SANMARINO"/
     */
    public const SM = 'SM';

    /**
     * Code country-name = "SAOTOMEANDPRINCIPE"/
     */
    public const ST = 'ST';

    /**
     * Code country-name = "SAUDIARABIA"/
     */
    public const SA = 'SA';

    /**
     * Code country-name = "SENEGAL"/
     */
    public const SN = 'SN';

    /**
     * Code country-name = "SEYCHELLES"/
     */
    public const SC = 'SC';

    /**
     * Code country-name = "SIERRALEONE"/
     */
    public const SL = 'SL';

    /**
     * Code country-name = "SINGAPORE"/
     */
    public const SG = 'SG';

    /**
     * Code country-name = "SLOVAKIA"/
     */
    public const SK = 'SK';

    /**
     * Code country-name = "SLOVENIA"/
     */
    public const SI = 'SI';

    /**
     * Code country-name = "SOLOMONISLANDS"/
     */
    public const SB = 'SB';

    /**
     * Code country-name = "SOMALIA"/
     */
    public const SO = 'SO';

    /**
     * Code country-name = "SOUTHAFRICA"/
     */
    public const ZA = 'ZA';

    /**
     * Code country-name = "SOUTHGEORGIAANDTHESOUTHSANDWICHISLANDS"/
     */
    public const GS = 'GS';

    /**
     * Code country-name = "SPAIN"/
     */
    public const ES = 'ES';

    /**
     * Code country-name = "SRILANKA"/
     */
    public const LK = 'LK';

    /**
     * Code country-name = "SUDAN"/
     */
    public const SD = 'SD';

    /**
     * Code country-name = "SURINAME"/
     */
    public const SR = 'SR';

    /**
     * Code country-name = "SVALBARDANDJANMAYEN"/
     */
    public const SJ = 'SJ';

    /**
     * Code country-name = "SWAZILAND"/
     */
    public const SZ = 'SZ';

    /**
     * Code country-name = "SWEDEN"/
     */
    public const SE = 'SE';

    /**
     * Code country-name = "SWITZERLAND"/
     */
    public const CH = 'CH';

    /**
     * Code country-name = "SYRIANARABREPUBLIC"/
     */
    public const SY = 'SY';

    /**
     * Code country-name = "TAIWAN,PROVINCEOFCHINA"/
     */
    public const TW = 'TW';

    /**
     * Code country-name = "TAJIKISTAN"/
     */
    public const TJ = 'TJ';

    /**
     * Code country-name = "TANZANIA,UNITEDREPUBLICOF"/
     */
    public const TZ = 'TZ';

    /**
     * Code country-name = "THAILAND"/
     */
    public const TH = 'TH';

    /**
     * Code country-name = "TOGO"/
     */
    public const TG = 'TG';

    /**
     * Code country-name = "TOKELAU"/
     */
    public const TK = 'TK';

    /**
     * Code country-name = "TONGA"/
     */
    public const TO = 'TO';

    /**
     * Code country-name = "TRINIDADANDTOBAGO"/
     */
    public const TT = 'TT';

    /**
     * Code country-name = "TUNISIA"/
     */
    public const TN = 'TN';

    /**
     * Code country-name = "TURKEY"/
     */
    public const TR = 'TR';

    /**
     * Code country-name = "TURKMENISTAN"/
     */
    public const TM = 'TM';

    /**
     * Code country-name = "TURKSANDCAICOSISLANDS"/
     */
    public const TC = 'TC';

    /**
     * Code country-name = "TUVALU"/
     */
    public const TV = 'TV';

    /**
     * Code country-name = "UGANDA"/
     */
    public const UG = 'UG';

    /**
     * Code country-name = "UKRAINE"/
     */
    public const UA = 'UA';

    /**
     * Code country-name = "UNITEDARABEMIRATES"/
     */
    public const AE = 'AE';

    /**
     * Code country-name = "UNITEDKINGDOM"/
     */
    public const GB = 'GB';

    /**
     * Code country-name = "UNITEDSTATES"/
     */
    public const US = 'US';

    /**
     * Code country-name = "UNITEDSTATESMINOROUTLYINGISLANDS"/
     */
    public const UM = 'UM';

    /**
     * Code country-name = "URUGUAY"/
     */
    public const UY = 'UY';

    /**
     * Code country-name = "UZBEKISTAN"/
     */
    public const UZ = 'UZ';

    /**
     * Code country-name = "VANUATU"/
     */
    public const VU = 'VU';

    /**
     * Code country-name = "VENEZUELA"/
     */
    public const VE = 'VE';

    /**
     * Code country-name = "VIETNAM"/
     */
    public const VN = 'VN';

    /**
     * Code country-name = "VIRGINISLANDS,BRITISH"/
     */
    public const VG = 'VG';

    /**
     * Code country-name = "VIRGINISLANDS,U.S."/
     */
    public const VI = 'VI';

    /**
     * Code country-name = "WALLISANDFUTUNA"/
     */
    public const WF = 'WF';

    /**
     * Code country-name = "WESTERNSAHARA"/
     */
    public const EH = 'EH';

    /**
     * Code country-name = "YEMEN"/
     */
    public const YE = 'YE';

    /**
     * Code country-name = "YUGOSLAVIA"/
     */
    public const YU = 'YU';

    /**
     * Code country-name = "ZAMBIA"/
     */
    public const ZM = 'ZM';

    /**
     * Code country-name = "ZIMBABWE"/
     */
    public const ZW = 'ZW';

    /**
     * Code country-name = "SERBIA"/
     */
    public const RS = 'RS';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AF,
            self::AL,
            self::DZ,
            self::AS,
            self::AD,
            self::AO,
            self::AI,
            self::AQ,
            self::AG,
            self::AR,
            self::AM,
            self::AW,
            self::AU,
            self::AT,
            self::AZ,
            self::BS,
            self::BH,
            self::BD,
            self::BB,
            self::BY,
            self::BE,
            self::BZ,
            self::BJ,
            self::BM,
            self::BT,
            self::BO,
            self::BA,
            self::BW,
            self::BV,
            self::BR,
            self::IO,
            self::BN,
            self::BG,
            self::BF,
            self::BI,
            self::KH,
            self::CM,
            self::CA,
            self::CV,
            self::KY,
            self::CF,
            self::TD,
            self::CL,
            self::CN,
            self::CX,
            self::CC,
            self::CO,
            self::KM,
            self::CG,
            self::CD,
            self::CK,
            self::CR,
            self::CI,
            self::HR,
            self::CU,
            self::CY,
            self::CZ,
            self::DK,
            self::DJ,
            self::DM,
            self::DO,
            self::TP,
            self::EC,
            self::EG,
            self::SV,
            self::GQ,
            self::ER,
            self::EE,
            self::ET,
            self::FK,
            self::FO,
            self::FJ,
            self::FI,
            self::FR,
            self::GF,
            self::PF,
            self::TF,
            self::GA,
            self::GM,
            self::GE,
            self::DE,
            self::GH,
            self::GI,
            self::GR,
            self::GL,
            self::GD,
            self::GP,
            self::GU,
            self::GT,
            self::GN,
            self::GW,
            self::GY,
            self::HT,
            self::HM,
            self::VA,
            self::HN,
            self::HK,
            self::HU,
            self::IS,
            self::IN,
            self::ID,
            self::IR,
            self::IQ,
            self::IE,
            self::IL,
            self::IT,
            self::JM,
            self::JP,
            self::JO,
            self::KZ,
            self::KE,
            self::KI,
            self::KP,
            self::KR,
            self::KW,
            self::KG,
            self::LA,
            self::LV,
            self::LB,
            self::LS,
            self::LR,
            self::LY,
            self::LI,
            self::LT,
            self::LU,
            self::MO,
            self::MK,
            self::MG,
            self::MW,
            self::MY,
            self::MV,
            self::ML,
            self::MT,
            self::MH,
            self::MQ,
            self::MR,
            self::MU,
            self::YT,
            self::MX,
            self::FM,
            self::MD,
            self::MC,
            self::MN,
            self::MS,
            self::MA,
            self::MZ,
            self::MM,
            self::NA,
            self::NR,
            self::NP,
            self::NL,
            self::AN,
            self::NC,
            self::NZ,
            self::NI,
            self::NE,
            self::NG,
            self::NU,
            self::NF,
            self::MP,
            self::NO,
            self::OM,
            self::PK,
            self::PW,
            self::PS,
            self::PA,
            self::PG,
            self::PY,
            self::PE,
            self::PH,
            self::PN,
            self::PL,
            self::PT,
            self::PR,
            self::QA,
            self::QM,
            self::RE,
            self::RO,
            self::RU,
            self::RW,
            self::SH,
            self::KN,
            self::LC,
            self::PM,
            self::VC,
            self::WS,
            self::SM,
            self::ST,
            self::SA,
            self::SN,
            self::SC,
            self::SL,
            self::SG,
            self::SK,
            self::SI,
            self::SB,
            self::SO,
            self::ZA,
            self::GS,
            self::ES,
            self::LK,
            self::SD,
            self::SR,
            self::SJ,
            self::SZ,
            self::SE,
            self::CH,
            self::SY,
            self::TW,
            self::TJ,
            self::TZ,
            self::TH,
            self::TG,
            self::TK,
            self::TO,
            self::TT,
            self::TN,
            self::TR,
            self::TM,
            self::TC,
            self::TV,
            self::UG,
            self::UA,
            self::AE,
            self::GB,
            self::US,
            self::UM,
            self::UY,
            self::UZ,
            self::VU,
            self::VE,
            self::VN,
            self::VG,
            self::VI,
            self::WF,
            self::EH,
            self::YE,
            self::YU,
            self::ZM,
            self::ZW,
            self::RS,
        ]));
    }
}
