<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * This class is used to validate against fop.xsd file.
 */
class LanguageType extends Type implements Validator
{
    public const NONE = 'none';

    public const INHERIT = 'inherit';

    public const AY = 'AY';

    public const GN = 'GN';

    public const QU = 'QU';

    public const DZ = 'DZ';

    public const MY = 'MY';

    public const KM = 'KM';

    public const ZH = 'ZH';

    public const JA = 'JA';

    public const KO = 'KO';

    public const LO = 'LO';

    public const TH = 'TH';

    public const BO = 'BO';

    public const VI = 'VI';

    public const LV = 'LV';

    public const LT = 'LT';

    public const EU = 'EU';

    public const BR = 'BR';

    public const GA = 'GA';

    public const GD = 'GD';

    public const CY = 'CY';

    public const KN = 'KN';

    public const ML = 'ML';

    public const TA = 'TA';

    public const TE = 'TE';

    public const KL = 'KL';

    public const IK = 'IK';

    public const ET = 'ET';

    public const FI = 'FI';

    public const HU = 'HU';

    public const AF = 'AF';

    public const DA = 'DA';

    public const NL = 'NL';

    public const EN = 'EN';

    public const FO = 'FO';

    public const FY = 'FY';

    public const DE = 'DE';

    public const IS = 'IS';

    public const NO = 'NO';

    public const SV = 'SV';

    public const YI = 'YI';

    public const OM = 'OM';

    public const AA = 'AA';

    public const SO = 'SO';

    public const AB = 'AB';

    public const KA = 'KA';

    public const AS = 'AS';

    public const BN = 'BN';

    public const BH = 'BH';

    public const GU = 'GU';

    public const HI = 'HI';

    public const KS = 'KS';

    public const MR = 'MR';

    public const NE = 'NE';

    public const OR = 'OR';

    public const PA = 'PA';

    public const SA = 'SA';

    public const SD = 'SD';

    public const SI = 'SI';

    public const UR = 'UR';

    public const SQ = 'SQ';

    public const HY = 'HY';

    public const EO = 'EO';

    public const IA = 'IA';

    public const IE = 'IE';

    public const VO = 'VO';

    public const KU = 'KU';

    public const PS = 'PS';

    public const FA = 'FA';

    public const TG = 'TG';

    public const EL = 'EL';

    public const LA = 'LA';

    public const HA = 'HA';

    public const RW = 'RW';

    public const RN = 'RN';

    public const LN = 'LN';

    public const SG = 'SG';

    public const ST = 'ST';

    public const TN = 'TN';

    public const SN = 'SN';

    public const SS = 'SS';

    public const SW = 'SW';

    public const TS = 'TS';

    public const TW = 'TW';

    public const WO = 'WO';

    public const XH = 'XH';

    public const YO = 'YO';

    public const ZU = 'ZU';

    public const FJ = 'FJ';

    public const ID = 'ID';

    public const JV = 'JV';

    public const MG = 'MG';

    public const MS = 'MS';

    public const MI = 'MI';

    public const SM = 'SM';

    public const SU = 'SU';

    public const TL = 'TL';

    public const TO = 'TO';

    public const CA = 'CA';

    public const CO = 'CO';

    public const FR = 'FR';

    public const GL = 'GL';

    public const IT = 'IT';

    public const MO = 'MO';

    public const OC = 'OC';

    public const PT = 'PT';

    public const RM = 'RM';

    public const RO = 'RO';

    public const ES = 'ES';

    public const AM = 'AM';

    public const AR = 'AR';

    public const HE = 'HE';

    public const MT = 'MT';

    public const TI = 'TI';

    public const BG = 'BG';

    public const BE = 'BE';

    public const HR = 'HR';

    public const CS = 'CS';

    public const MK = 'MK';

    public const PL = 'PL';

    public const RU = 'RU';

    public const SR = 'SR';

    public const SH = 'SH';

    public const SK = 'SK';

    public const SL = 'SL';

    public const UK = 'UK';

    public const AZ = 'AZ';

    public const BA = 'BA';

    public const KK = 'KK';

    public const KY = 'KY';

    public const TT = 'TT';

    public const TR = 'TR';

    public const TK = 'TK';

    public const UZ = 'UZ';

    public const BI = 'BI';

    public const MN = 'MN';

    public const NA = 'NA';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::NONE,
            self::INHERIT,
            self::AY,
            self::GN,
            self::QU,
            self::DZ,
            self::MY,
            self::KM,
            self::ZH,
            self::JA,
            self::KO,
            self::LO,
            self::TH,
            self::BO,
            self::VI,
            self::LV,
            self::LT,
            self::EU,
            self::BR,
            self::GA,
            self::GD,
            self::CY,
            self::KN,
            self::ML,
            self::TA,
            self::TE,
            self::KL,
            self::IK,
            self::ET,
            self::FI,
            self::HU,
            self::AF,
            self::DA,
            self::NL,
            self::EN,
            self::FO,
            self::FY,
            self::DE,
            self::IS,
            self::NO,
            self::SV,
            self::YI,
            self::OM,
            self::AA,
            self::SO,
            self::AB,
            self::KA,
            self::AS,
            self::BN,
            self::BH,
            self::GU,
            self::HI,
            self::KS,
            self::MR,
            self::NE,
            self::OR,
            self::PA,
            self::SA,
            self::SD,
            self::SI,
            self::UR,
            self::SQ,
            self::HY,
            self::EO,
            self::IA,
            self::IE,
            self::VO,
            self::KU,
            self::PS,
            self::FA,
            self::TG,
            self::EL,
            self::LA,
            self::HA,
            self::RW,
            self::RN,
            self::LN,
            self::SG,
            self::ST,
            self::TN,
            self::SN,
            self::SS,
            self::SW,
            self::TS,
            self::TW,
            self::WO,
            self::XH,
            self::YO,
            self::ZU,
            self::FJ,
            self::ID,
            self::JV,
            self::MG,
            self::MS,
            self::MI,
            self::SM,
            self::SU,
            self::TL,
            self::TO,
            self::CA,
            self::CO,
            self::FR,
            self::GL,
            self::IT,
            self::MO,
            self::OC,
            self::PT,
            self::RM,
            self::RO,
            self::ES,
            self::AM,
            self::AR,
            self::HE,
            self::MT,
            self::TI,
            self::BG,
            self::BE,
            self::HR,
            self::CS,
            self::MK,
            self::PL,
            self::RU,
            self::SR,
            self::SH,
            self::SK,
            self::SL,
            self::UK,
            self::AZ,
            self::BA,
            self::KK,
            self::KY,
            self::TT,
            self::TR,
            self::TK,
            self::UZ,
            self::BI,
            self::MN,
            self::NA,
        ]));
    }
}
