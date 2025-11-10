<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Iso15924;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * The script to be used by the formatter in language-/locale-coupled services, such as
 * line-justification strategy, line-breaking, and hyphenation.
 *
 * @see http://www.w3.org/TR/xsl11/#script
 * @see https://datypic.com/sc/fo11/a-script-1.html
 * @see https://en.wikipedia.org/wiki/ISO_15924
 */
class ScriptAlphabeticType extends Type implements Validator
{
    /**
     * Adlam
     */
    public const ADLM = 'Adlm';

    /**
     * Afaka
     */
    public const AFAK = 'Afak';

    /**
     * Caucasian Albanian (Caucasian_Albanian)
     */
    public const AGHB = 'Aghb';

    /**
     * Ahom, Tai Ahom (Ahom)
     */
    public const AHOM = 'Ahom';

    /**
     * Arabic
     */
    public const ARAB = 'Arab';

    /**
     * Arabic (Nastaliq variant)
     */
    public const ARAN = 'Aran';

    /**
     * Imperial Aramaic (Imperial_Aramaic)
     */
    public const ARMI = 'Armi';

    /**
     * Armenian
     */
    public const ARMN = 'Armn';

    /**
     * Avestan
     */
    public const AVST = 'Avst';

    /**
     * Balinese
     */
    public const BALI = 'Bali';

    /**
     * Bamum
     */
    public const BAMU = 'Bamu';

    /**
     * Bassa Vah (Bassa_Vah)
     */
    public const BASS = 'Bass';

    /**
     * Batak
     */
    public const BATK = 'Batk';

    /**
     * Bengali (Bangla) (Bengali)
     */
    public const BENG = 'Beng';

    /**
     * Beria Erfe
     */
    public const BERF = 'Berf';

    /**
     * Bhaiksuki
     */
    public const BHKS = 'Bhks';

    /**
     * Blissymbols
     */
    public const BLIS = 'Blis';

    /**
     * Bopomofo
     */
    public const BOPO = 'Bopo';

    /**
     * Brahmi
     */
    public const BRAH = 'Brah';

    /**
     * Braille
     */
    public const BRAI = 'Brai';

    /**
     * Buginese
     */
    public const BUGI = 'Bugi';

    /**
     * Buhid
     */
    public const BUHD = 'Buhd';

    /**
     * Chakma
     */
    public const CAKM = 'Cakm';

    /**
     * Unified Canadian Aboriginal Syllabics (Canadian_Aboriginal)
     */
    public const CANS = 'Cans';

    /**
     * Carian
     */
    public const CARI = 'Cari';

    /**
     * Cham
     */
    public const CHAM = 'Cham';

    /**
     * Cherokee
     */
    public const CHER = 'Cher';

    /**
     * Chisoi
     */
    public const CHIS = 'Chis';

    /**
     * Chorasmian
     */
    public const CHRS = 'Chrs';

    /**
     * Cirth
     */
    public const CIRT = 'Cirt';

    /**
     * Coptic
     */
    public const COPT = 'Copt';

    /**
     * Cyprooan (Cypro_Minoan)
     */
    public const CPMN = 'Cpmn';

    /**
     * Cypriot syllabary (Cypriot)
     */
    public const CPRT = 'Cprt';

    /**
     * Cyrillic
     */
    public const CYRL = 'Cyrl';

    /**
     * Cyrillic (Old Church Slavonic variant)
     */
    public const CYRS = 'Cyrs';

    /**
     * Devanagari (Nagari) (Devanagari)
     */
    public const DEVA = 'Deva';

    /**
     * Dives Akuru (Dives_Akuru)
     */
    public const DIAK = 'Diak';

    /**
     * Dogra
     */
    public const DOGR = 'Dogr';

    /**
     * Deseret (Mormon) (Deseret)
     */
    public const DSRT = 'Dsrt';

    /**
     * Duployan shorthand, Duployan stenography (Duployan)
     */
    public const DUPL = 'Dupl';

    /**
     * Egyptian demotic
     */
    public const EGYD = 'Egyd';

    /**
     * Egyptian hieratic
     */
    public const EGYH = 'Egyh';

    /**
     * Egyptian hieroglyphs (Egyptian_Hieroglyphs)
     */
    public const EGYP = 'Egyp';

    /**
     * Elbasan
     */
    public const ELBA = 'Elba';

    /**
     * Elymaic
     */
    public const ELYM = 'Elym';

    /**
     * Ethiopic (Ge╩╗ez) (Ethiopic)
     */
    public const ETHI = 'Ethi';

    /**
     * Garay
     */
    public const GARA = 'Gara';

    /**
     * Khutsuri (Asomtavruli and Nuskhuri) (Georgian)
     */
    public const GEOK = 'Geok';

    /**
     * Georgian (Mkhedruli and Mtavruli) (Georgian)
     */
    public const GEOR = 'Geor';

    /**
     * Glagolitic
     */
    public const GLAG = 'Glag';

    /**
     * Gunjala Gondi (Gunjala_Gondi)
     */
    public const GONG = 'Gong';

    /**
     * Masaram Gondi (Masaram_Gondi)
     */
    public const GONM = 'Gonm';

    /**
     * Gothic
     */
    public const GOTH = 'Goth';

    /**
     * Grantha
     */
    public const GRAN = 'Gran';

    /**
     * Greek
     */
    public const GREK = 'Grek';

    /**
     * Gujarati
     */
    public const GUJR = 'Gujr';

    /**
     * Gurung Khema (Gurung_Khema)
     */
    public const GUKH = 'Gukh';

    /**
     * Gurmukhi
     */
    public const GURU = 'Guru';

    /**
     * Han with Bopomofo (alias for Han + Bopomofo)
     */
    public const HANB = 'Hanb';

    /**
     * Hangul (Hang┼¡l, Hangeul) (Hangul)
     */
    public const HANG = 'Hang';

    /**
     * Han (Hanzi, Kanji, Hanja) (Han)
     */
    public const HANI = 'Hani';

    /**
     * Hanunoo (Hanun├│o) (Hanunoo)
     */
    public const HANO = 'Hano';

    /**
     * Han (Simplified variant)
     */
    public const HANS = 'Hans';

    /**
     * Han (Traditional variant)
     */
    public const HANT = 'Hant';

    /**
     * Hatran
     */
    public const HATR = 'Hatr';

    /**
     * Hebrew
     */
    public const HEBR = 'Hebr';

    /**
     * Hiragana
     */
    public const HIRA = 'Hira';

    /**
     * Anatolian Hieroglyphs (Luwian Hieroglyphs, Hittite Hieroglyphs) (Anatolian_Hieroglyphs)
     */
    public const HLUW = 'Hluw';

    /**
     * Pahawh Hmong (Pahawh_Hmong)
     */
    public const HMNG = 'Hmng';

    /**
     * Nyiakeng Puachue Hmong (Nyiakeng_Puachue_Hmong)
     */
    public const HMNP = 'Hmnp';

    /**
     * Han (Traditional variant) with Latin (alias for Hant + Latn)
     */
    public const HNTL = 'Hntl';

    /**
     * Japanese syllabaries (alias for Hiragana + Katakana) (Katakana_Or_Hiragana)
     */
    public const HRKT = 'Hrkt';

    /**
     * Old Hungarian (Hungarian Runic) (Old_Hungarian)
     */
    public const HUNG = 'Hung';

    /**
     * Indus (Harappan)
     */
    public const INDS = 'Inds';

    /**
     * Old Italic (Etruscan, Oscan, etc.) (Old_Italic)
     */
    public const ITAL = 'Ital';

    /**
     * Jamo (alias for Jamo subset of Hangul)
     */
    public const JAMO = 'Jamo';

    /**
     * Javanese
     */
    public const JAVA = 'Java';

    /**
     * Japanese (alias for Han + Hiragana + Katakana)
     */
    public const JPAN = 'Jpan';

    /**
     * Jurchen
     */
    public const JURC = 'Jurc';

    /**
     * Kayah Li (Kayah_Li)
     */
    public const KALI = 'Kali';

    /**
     * Katakana
     */
    public const KANA = 'Kana';

    /**
     * Kawi
     */
    public const KAWI = 'Kawi';

    /**
     * Kharoshthi
     */
    public const KHAR = 'Khar';

    /**
     * Khmer
     */
    public const KHMR = 'Khmr';

    /**
     * Khojki
     */
    public const KHOJ = 'Khoj';

    /**
     * Khitan large script
     */
    public const KITL = 'Kitl';

    /**
     * Khitan small script (Khitan_Small_Script)
     */
    public const KITS = 'Kits';

    /**
     * Kannada
     */
    public const KNDA = 'Knda';

    /**
     * Korean (alias for Hangul + Han)
     */
    public const KORE = 'Kore';

    /**
     * Kpelle
     */
    public const KPEL = 'Kpel';

    /**
     * Kirat Rai (Kirat_Rai)
     */
    public const KRAI = 'Krai';

    /**
     * Kaithi
     */
    public const KTHI = 'Kthi';

    /**
     * Tai Tham (Lanna) (Tai_Tham)
     */
    public const LANA = 'Lana';

    /**
     * Lao
     */
    public const LAOO = 'Laoo';

    /**
     * Latin (Fraktur variant)
     */
    public const LATF = 'Latf';

    /**
     * Latin (Gaelic variant)
     */
    public const LATG = 'Latg';

    /**
     * Latin
     */
    public const LATN = 'Latn';

    /**
     * Leke
     */
    public const LEKE = 'Leke';

    /**
     * Lepcha (R├│ng) (Lepcha)
     */
    public const LEPC = 'Lepc';

    /**
     * Limbu
     */
    public const LIMB = 'Limb';

    /**
     * Linear A (Linear_A)
     */
    public const LINA = 'Lina';

    /**
     * Linear B (Linear_B)
     */
    public const LINB = 'Linb';

    /**
     * Lisu (Fraser) (Lisu)
     */
    public const LISU = 'Lisu';

    /**
     * Loma
     */
    public const LOMA = 'Loma';

    /**
     * Lycian
     */
    public const LYCI = 'Lyci';

    /**
     * Lydian
     */
    public const LYDI = 'Lydi';

    /**
     * Mahajani
     */
    public const MAHJ = 'Mahj';

    /**
     * Makasar
     */
    public const MAKA = 'Maka';

    /**
     * Mandaic, Mandaean (Mandaic)
     */
    public const MAND = 'Mand';

    /**
     * Manichaean
     */
    public const MANI = 'Mani';

    /**
     * Marchen
     */
    public const MARC = 'Marc';

    /**
     * Mayan hieroglyphs
     */
    public const MAYA = 'Maya';

    /**
     * Medefaidrin (Oberi Okaime, Oberi ãåkaim╔ø) (Medefaidrin)
     */
    public const MEDF = 'Medf';

    /**
     * Mende Kikakui (Mende_Kikakui)
     */
    public const MEND = 'Mend';

    /**
     * Meroitic Cursive (Meroitic_Cursive)
     */
    public const MERC = 'Merc';

    /**
     * Meroitic Hieroglyphs (Meroitic_Hieroglyphs)
     */
    public const MERO = 'Mero';

    /**
     * Malayalam
     */
    public const MLYM = 'Mlym';

    /**
     * Modi, Moß©ì─½ (Modi)
     */
    public const MODI = 'Modi';

    /**
     * Mongolian
     */
    public const MONG = 'Mong';

    /**
     * Moon (Moon code, Moon script, Moon type)
     */
    public const MOON = 'Moon';

    /**
     * Mro, Mru (Mro)
     */
    public const MROO = 'Mroo';

    /**
     * Meitei Mayek (Meithei, Meetei) (Meetei_Mayek)
     */
    public const MTEI = 'Mtei';

    /**
     * Multani
     */
    public const MULT = 'Mult';

    /**
     * Myanmar (Burmese) (Myanmar)
     */
    public const MYMR = 'Mymr';

    /**
     * Nag Mundari (Nag_Mundari)
     */
    public const NAGM = 'Nagm';

    /**
     * Nandinagari
     */
    public const NAND = 'Nand';

    /**
     * Old North Arabian (Ancient North Arabian) (Old_North_Arabian)
     */
    public const NARB = 'Narb';

    /**
     * Nabataean
     */
    public const NBAT = 'Nbat';

    /**
     * Newa, Newar, Newari, Nep─üla lipi (Newa)
     */
    public const NEWA = 'Newa';

    /**
     * Naxi Dongba (na┬▓┬╣╔òi┬│┬│ to┬│┬│ba┬▓┬╣, Nakhi Tomba)
     */
    public const NKDB = 'Nkdb';

    /**
     * Naxi Geba (na┬▓┬╣╔òi┬│┬│ g╩î┬▓┬╣ba┬▓┬╣, 'Nai ┬▓Gg┼Åaw, Nakhi Geba)
     */
    public const NKGB = 'Nkgb';

    /**
     * NÔÇÖKo (Nko)
     */
    public const NKOO = 'Nkoo';

    /**
     * N├╝shu (Nushu)
     */
    public const NSHU = 'Nshu';

    /**
     * Ogham
     */
    public const OGAM = 'Ogam';

    /**
     * Ol Chiki (Ol CemetÔÇÖ, Ol, Santali) (Ol_Chiki)
     */
    public const OLCK = 'Olck';

    /**
     * Ol Onal (Ol_Onal)
     */
    public const ONAO = 'Onao';

    /**
     * Old Turkic, Orkhon Runic (Old_Turkic)
     */
    public const ORKH = 'Orkh';

    /**
     * Oriya (Odia) (Oriya)
     */
    public const ORYA = 'Orya';

    /**
     * Osage
     */
    public const OSGE = 'Osge';

    /**
     * Osmanya
     */
    public const OSMA = 'Osma';

    /**
     * Old Uyghur (Old_Uyghur)
     */
    public const OUGR = 'Ougr';

    /**
     * Palmyrene
     */
    public const PALM = 'Palm';

    /**
     * Pau Cin Hau (Pau_Cin_Hau)
     */
    public const PAUC = 'Pauc';

    /**
     * Protoeiform
     */
    public const PCUN = 'Pcun';

    /**
     * Protomite
     */
    public const PELM = 'Pelm';

    /**
     * Old Permic (Old_Permic)
     */
    public const PERM = 'Perm';

    /**
     * Phags(Phags_Pa)
     */
    public const PHAG = 'Phag';

    /**
     * Inscriptional Pahlavi (Inscriptional_Pahlavi)
     */
    public const PHLI = 'Phli';

    /**
     * Psalter Pahlavi (Psalter_Pahlavi)
     */
    public const PHLP = 'Phlp';

    /**
     * Book Pahlavi
     */
    public const PHLV = 'Phlv';

    /**
     * Phoenician
     */
    public const PHNX = 'Phnx';

    /**
     * Miao (Pollard) (Miao)
     */
    public const PLRD = 'Plrd';

    /**
     * Klingon (KLI pIqaD)
     */
    public const PIQD = 'Piqd';

    /**
     * Inscriptional Parthian (Inscriptional_Parthian)
     */
    public const PRTI = 'Prti';

    /**
     * Protoaitic
     */
    public const PSIN = 'Psin';

    /**
     * Reserved for private use (start)
     */
    public const QAAA = 'Qaaa';

    /**
     * Reserved for private use (end)
     */
    public const QABX = 'Qabx';

    /**
     * Ranjana
     */
    public const RANJ = 'Ranj';

    /**
     * Rejang (Redjang, Kaganga) (Rejang)
     */
    public const RJNG = 'Rjng';

    /**
     * Hanifi Rohingya (Hanifi_Rohingya)
     */
    public const ROHG = 'Rohg';

    /**
     * Rongorongo
     */
    public const RORO = 'Roro';

    /**
     * Runic
     */
    public const RUNR = 'Runr';

    /**
     * Samaritan
     */
    public const SAMR = 'Samr';

    /**
     * Sarati
     */
    public const SARA = 'Sara';

    /**
     * Old South Arabian (Old_South_Arabian)
     */
    public const SARB = 'Sarb';

    /**
     * Saurashtra
     */
    public const SAUR = 'Saur';

    /**
     * (Small) Seal
     */
    public const SEAL = 'Seal';

    /**
     * SignWriting
     */
    public const SGNW = 'Sgnw';

    /**
     * Shavian (Shaw) (Shavian)
     */
    public const SHAW = 'Shaw';

    /**
     * Sharada, ┼Ü─ürad─ü (Sharada)
     */
    public const SHRD = 'Shrd';

    /**
     * Shuishu
     */
    public const SHUI = 'Shui';

    /**
     * Siddham, Siddhaß╣â, Siddham─ütß╣øk─ü (Siddham)
     */
    public const SIDD = 'Sidd';

    /**
     * Sidetic
     */
    public const SIDT = 'Sidt';

    /**
     * Khudawadi, Sindhi (Khudawadi)
     */
    public const SIND = 'Sind';

    /**
     * Sinhala
     */
    public const SINH = 'Sinh';

    /**
     * Sogdian
     */
    public const SOGD = 'Sogd';

    /**
     * Old Sogdian (Old_Sogdian)
     */
    public const SOGO = 'Sogo';

    /**
     * Sora Sompeng (Sora_Sompeng)
     */
    public const SORA = 'Sora';

    /**
     * Soyombo
     */
    public const SOYO = 'Soyo';

    /**
     * Sundanese
     */
    public const SUND = 'Sund';

    /**
     * Sunuwar
     */
    public const SUNU = 'Sunu';

    /**
     * Syloti Nagri (Syloti_Nagri)
     */
    public const SYLO = 'Sylo';

    /**
     * Syriac
     */
    public const SYRC = 'Syrc';

    /**
     * Syriac (Estrangelo variant)
     */
    public const SYRE = 'Syre';

    /**
     * Syriac (Western variant)
     */
    public const SYRJ = 'Syrj';

    /**
     * Syriac (Eastern variant)
     */
    public const SYRN = 'Syrn';

    /**
     * Tagbanwa
     */
    public const TAGB = 'Tagb';

    /**
     * Takri, ß╣¼─ükr─½, ß╣¼─üß╣àkr─½ (Takri)
     */
    public const TAKR = 'Takr';

    /**
     * Tai Le (Tai_Le)
     */
    public const TALE = 'Tale';

    /**
     * New Tai Lue (New_Tai_Lue)
     */
    public const TALU = 'Talu';

    /**
     * Tamil
     */
    public const TAML = 'Taml';

    /**
     * Tangut
     */
    public const TANG = 'Tang';

    /**
     * Tai Viet (Tai_Viet)
     */
    public const TAVT = 'Tavt';

    /**
     * Tai Yo
     */
    public const TAYO = 'Tayo';

    /**
     * Telugu
     */
    public const TELU = 'Telu';

    /**
     * Tengwar
     */
    public const TENG = 'Teng';

    /**
     * Tifinagh (Berber) (Tifinagh)
     */
    public const TFNG = 'Tfng';

    /**
     * Tagalog (Baybayin, Alibata) (Tagalog)
     */
    public const TGLG = 'Tglg';

    /**
     * Thaana
     */
    public const THAA = 'Thaa';

    /**
     * Thai
     */
    public const THAI = 'Thai';

    /**
     * Tibetan
     */
    public const TIBT = 'Tibt';

    /**
     * Tirhuta
     */
    public const TIRH = 'Tirh';

    /**
     * Tangsa
     */
    public const TNSA = 'Tnsa';

    /**
     * Todhri
     */
    public const TODR = 'Todr';

    /**
     * Tolong Siki
     */
    public const TOLS = 'Tols';

    /**
     * Toto
     */
    public const TOTO = 'Toto';

    /**
     * Tulualari (Tulu_Tigalari)
     */
    public const TUTG = 'Tutg';

    /**
     * Ugaritic
     */
    public const UGAR = 'Ugar';

    /**
     * Vai
     */
    public const VAII = 'Vaii';

    /**
     * Visible Speech
     */
    public const VISP = 'Visp';

    /**
     * Vithkuqi
     */
    public const VITH = 'Vith';

    /**
     * Warang Citi (Varang Kshiti) (Warang_Citi)
     */
    public const WARA = 'Wara';

    /**
     * Wancho
     */
    public const WCHO = 'Wcho';

    /**
     * Woleai
     */
    public const WOLE = 'Wole';

    /**
     * Old Persian (Old_Persian)
     */
    public const XPEO = 'Xpeo';

    /**
     * Cuneiform, Sumeroadian (Cuneiform)
     */
    public const XSUX = 'Xsux';

    /**
     * Yezidi
     */
    public const YEZI = 'Yezi';

    /**
     * Yi
     */
    public const YIII = 'Yiii';

    /**
     * Zanabazar Square (Zanabazarin D├Ârb├Âljin Useg, Xewtee D├Ârb├Âljin Bicig, Horizontal Square Script)
     * (Zanabazar_Square)
     */
    public const ZANB = 'Zanb';

    /**
     * Code for inherited script (Inherited)
     */
    public const ZINH = 'Zinh';

    /**
     * Mathematical notation
     */
    public const ZMTH = 'Zmth';

    /**
     * Symbols (Emoji variant)
     */
    public const ZSYE = 'Zsye';

    /**
     * Symbols
     */
    public const ZSYM = 'Zsym';

    /**
     * Code for unwritten documents
     */
    public const ZXXX = 'Zxxx';

    /**
     * Code for undetermined script (Common)
     */
    public const ZYYY = 'Zyyy';

    /**
     * Code for uncoded script (Unknown)
     */
    public const ZZZZ = 'Zzzz';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::ADLM,
            self::AFAK,
            self::AGHB,
            self::AHOM,
            self::ARAB,
            self::ARAN,
            self::ARMI,
            self::ARMN,
            self::AVST,
            self::BALI,
            self::BAMU,
            self::BASS,
            self::BATK,
            self::BENG,
            self::BERF,
            self::BHKS,
            self::BLIS,
            self::BOPO,
            self::BRAH,
            self::BRAI,
            self::BUGI,
            self::BUHD,
            self::CAKM,
            self::CANS,
            self::CARI,
            self::CHAM,
            self::CHER,
            self::CHIS,
            self::CHRS,
            self::CIRT,
            self::COPT,
            self::CPMN,
            self::CPRT,
            self::CYRL,
            self::CYRS,
            self::DEVA,
            self::DIAK,
            self::DOGR,
            self::DSRT,
            self::DUPL,
            self::EGYD,
            self::EGYH,
            self::EGYP,
            self::ELBA,
            self::ELYM,
            self::ETHI,
            self::GARA,
            self::GEOK,
            self::GEOR,
            self::GLAG,
            self::GONG,
            self::GONM,
            self::GOTH,
            self::GRAN,
            self::GREK,
            self::GUJR,
            self::GUKH,
            self::GURU,
            self::HANB,
            self::HANG,
            self::HANI,
            self::HANO,
            self::HANS,
            self::HANT,
            self::HATR,
            self::HEBR,
            self::HIRA,
            self::HLUW,
            self::HMNG,
            self::HMNP,
            self::HNTL,
            self::HRKT,
            self::HUNG,
            self::INDS,
            self::ITAL,
            self::JAMO,
            self::JAVA,
            self::JPAN,
            self::JURC,
            self::KALI,
            self::KANA,
            self::KAWI,
            self::KHAR,
            self::KHMR,
            self::KHOJ,
            self::KITL,
            self::KITS,
            self::KNDA,
            self::KORE,
            self::KPEL,
            self::KRAI,
            self::KTHI,
            self::LANA,
            self::LAOO,
            self::LATF,
            self::LATG,
            self::LATN,
            self::LEKE,
            self::LEPC,
            self::LIMB,
            self::LINA,
            self::LINB,
            self::LISU,
            self::LOMA,
            self::LYCI,
            self::LYDI,
            self::MAHJ,
            self::MAKA,
            self::MAND,
            self::MANI,
            self::MARC,
            self::MAYA,
            self::MEDF,
            self::MEND,
            self::MERC,
            self::MERO,
            self::MLYM,
            self::MODI,
            self::MONG,
            self::MOON,
            self::MROO,
            self::MTEI,
            self::MULT,
            self::MYMR,
            self::NAGM,
            self::NAND,
            self::NARB,
            self::NBAT,
            self::NEWA,
            self::NKDB,
            self::NKGB,
            self::NKOO,
            self::NSHU,
            self::OGAM,
            self::OLCK,
            self::ONAO,
            self::ORKH,
            self::ORYA,
            self::OSGE,
            self::OSMA,
            self::OUGR,
            self::PALM,
            self::PAUC,
            self::PCUN,
            self::PELM,
            self::PERM,
            self::PHAG,
            self::PHLI,
            self::PHLP,
            self::PHLV,
            self::PHNX,
            self::PLRD,
            self::PIQD,
            self::PRTI,
            self::PSIN,
            self::QAAA,
            self::QABX,
            self::RANJ,
            self::RJNG,
            self::ROHG,
            self::RORO,
            self::RUNR,
            self::SAMR,
            self::SARA,
            self::SARB,
            self::SAUR,
            self::SEAL,
            self::SGNW,
            self::SHAW,
            self::SHRD,
            self::SHUI,
            self::SIDD,
            self::SIDT,
            self::SIND,
            self::SINH,
            self::SOGD,
            self::SOGO,
            self::SORA,
            self::SOYO,
            self::SUND,
            self::SUNU,
            self::SYLO,
            self::SYRC,
            self::SYRE,
            self::SYRJ,
            self::SYRN,
            self::TAGB,
            self::TAKR,
            self::TALE,
            self::TALU,
            self::TAML,
            self::TANG,
            self::TAVT,
            self::TAYO,
            self::TELU,
            self::TENG,
            self::TFNG,
            self::TGLG,
            self::THAA,
            self::THAI,
            self::TIBT,
            self::TIRH,
            self::TNSA,
            self::TODR,
            self::TOLS,
            self::TOTO,
            self::TUTG,
            self::UGAR,
            self::VAII,
            self::VISP,
            self::VITH,
            self::WARA,
            self::WCHO,
            self::WOLE,
            self::XPEO,
            self::XSUX,
            self::YEZI,
            self::YIII,
            self::ZANB,
            self::ZINH,
            self::ZMTH,
            self::ZSYE,
            self::ZSYM,
            self::ZXXX,
            self::ZYYY,
            self::ZZZZ,
        ]));
    }
}
