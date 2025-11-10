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
class ScriptAlphanumericType extends Type implements Validator
{
    /**
     * Adlam
     */
    public const ADLM = 'Adlm-166';

    /**
     * Afaka
     */
    public const AFAK = 'Afak-439';

    /**
     * Caucasian Albanian (Caucasian_Albanian)
     */
    public const AGHB = 'Aghb-239';

    /**
     * Ahom, Tai Ahom (Ahom)
     */
    public const AHOM = 'Ahom-338';

    /**
     * Arabic
     */
    public const ARAB = 'Arab-160';

    /**
     * Arabic (Nastaliq variant)
     */
    public const ARAN = 'Aran-161';

    /**
     * Imperial Aramaic (Imperial_Aramaic)
     */
    public const ARMI = 'Armi-124';

    /**
     * Armenian
     */
    public const ARMN = 'Armn-230';

    /**
     * Avestan
     */
    public const AVST = 'Avst-134';

    /**
     * Balinese
     */
    public const BALI = 'Bali-360';

    /**
     * Bamum
     */
    public const BAMU = 'Bamu-435';

    /**
     * Bassa Vah (Bassa_Vah)
     */
    public const BASS = 'Bass-259';

    /**
     * Batak
     */
    public const BATK = 'Batk-365';

    /**
     * Bengali (Bangla) (Bengali)
     */
    public const BENG = 'Beng-325';

    /**
     * Beria Erfe
     */
    public const BERF = 'Berf-258';

    /**
     * Bhaiksuki
     */
    public const BHKS = 'Bhks-334';

    /**
     * Blissymbols
     */
    public const BLIS = 'Blis-550';

    /**
     * Bopomofo
     */
    public const BOPO = 'Bopo-285';

    /**
     * Brahmi
     */
    public const BRAH = 'Brah-300';

    /**
     * Braille
     */
    public const BRAI = 'Brai-570';

    /**
     * Buginese
     */
    public const BUGI = 'Bugi-367';

    /**
     * Buhid
     */
    public const BUHD = 'Buhd-372';

    /**
     * Chakma
     */
    public const CAKM = 'Cakm-349';

    /**
     * Unified Canadian Aboriginal Syllabics (Canadian_Aboriginal)
     */
    public const CANS = 'Cans-440';

    /**
     * Carian
     */
    public const CARI = 'Cari-201';

    /**
     * Cham
     */
    public const CHAM = 'Cham-358';

    /**
     * Cherokee
     */
    public const CHER = 'Cher-445';

    /**
     * Chisoi
     */
    public const CHIS = 'Chis-298';

    /**
     * Chorasmian
     */
    public const CHRS = 'Chrs-109';

    /**
     * Cirth
     */
    public const CIRT = 'Cirt-291';

    /**
     * Coptic
     */
    public const COPT = 'Copt-204';

    /**
     * Cypro-Minoan (Cypro_Minoan)
     */
    public const CPMN = 'Cpmn-402';

    /**
     * Cypriot syllabary (Cypriot)
     */
    public const CPRT = 'Cprt-403';

    /**
     * Cyrillic
     */
    public const CYRL = 'Cyrl-220';

    /**
     * Cyrillic (Old Church Slavonic variant)
     */
    public const CYRS = 'Cyrs-221';

    /**
     * Devanagari (Nagari) (Devanagari)
     */
    public const DEVA = 'Deva-315';

    /**
     * Dives Akuru (Dives_Akuru)
     */
    public const DIAK = 'Diak-342';

    /**
     * Dogra
     */
    public const DOGR = 'Dogr-328';

    /**
     * Deseret (Mormon) (Deseret)
     */
    public const DSRT = 'Dsrt-250';

    /**
     * Duployan shorthand, Duployan stenography (Duployan)
     */
    public const DUPL = 'Dupl-755';

    /**
     * Egyptian demotic
     */
    public const EGYD = 'Egyd-070';

    /**
     * Egyptian hieratic
     */
    public const EGYH = 'Egyh-060';

    /**
     * Egyptian hieroglyphs (Egyptian_Hieroglyphs)
     */
    public const EGYP = 'Egyp-050';

    /**
     * Elbasan
     */
    public const ELBA = 'Elba-226';

    /**
     * Elymaic
     */
    public const ELYM = 'Elym-128';

    /**
     * Ethiopic (Ge╩╗ez) (Ethiopic)
     */
    public const ETHI = 'Ethi-430';

    /**
     * Garay
     */
    public const GARA = 'Gara-164';

    /**
     * Khutsuri (Asomtavruli and Nuskhuri) (Georgian)
     */
    public const GEOK = 'Geok-241';

    /**
     * Georgian (Mkhedruli and Mtavruli) (Georgian)
     */
    public const GEOR = 'Geor-240';

    /**
     * Glagolitic
     */
    public const GLAG = 'Glag-225';

    /**
     * Gunjala Gondi (Gunjala_Gondi)
     */
    public const GONG = 'Gong-312';

    /**
     * Masaram Gondi (Masaram_Gondi)
     */
    public const GONM = 'Gonm-313';

    /**
     * Gothic
     */
    public const GOTH = 'Goth-206';

    /**
     * Grantha
     */
    public const GRAN = 'Gran-343';

    /**
     * Greek
     */
    public const GREK = 'Grek-200';

    /**
     * Gujarati
     */
    public const GUJR = 'Gujr-320';

    /**
     * Gurung Khema (Gurung_Khema)
     */
    public const GUKH = 'Gukh-397';

    /**
     * Gurmukhi
     */
    public const GURU = 'Guru-310';

    /**
     * Han with Bopomofo (alias for Han + Bopomofo)
     */
    public const HANB = 'Hanb-503';

    /**
     * Hangul (Hang┼¡l, Hangeul) (Hangul)
     */
    public const HANG = 'Hang-286';

    /**
     * Han (Hanzi, Kanji, Hanja) (Han)
     */
    public const HANI = 'Hani-500';

    /**
     * Hanunoo (Hanun├│o) (Hanunoo)
     */
    public const HANO = 'Hano-371';

    /**
     * Han (Simplified variant)
     */
    public const HANS = 'Hans-501';

    /**
     * Han (Traditional variant)
     */
    public const HANT = 'Hant-502';

    /**
     * Hatran
     */
    public const HATR = 'Hatr-127';

    /**
     * Hebrew
     */
    public const HEBR = 'Hebr-125';

    /**
     * Hiragana
     */
    public const HIRA = 'Hira-410';

    /**
     * Anatolian Hieroglyphs (Luwian Hieroglyphs, Hittite Hieroglyphs) (Anatolian_Hieroglyphs)
     */
    public const HLUW = 'Hluw-080';

    /**
     * Pahawh Hmong (Pahawh_Hmong)
     */
    public const HMNG = 'Hmng-450';

    /**
     * Nyiakeng Puachue Hmong (Nyiakeng_Puachue_Hmong)
     */
    public const HMNP = 'Hmnp-451';

    /**
     * Han (Traditional variant) with Latin (alias for Hant + Latn)
     */
    public const HNTL = 'Hntl-504';

    /**
     * Japanese syllabaries (alias for Hiragana + Katakana) (Katakana_Or_Hiragana)
     */
    public const HRKT = 'Hrkt-412';

    /**
     * Old Hungarian (Hungarian Runic) (Old_Hungarian)
     */
    public const HUNG = 'Hung-176';

    /**
     * Indus (Harappan)
     */
    public const INDS = 'Inds-610';

    /**
     * Old Italic (Etruscan, Oscan, etc.) (Old_Italic)
     */
    public const ITAL = 'Ital-210';

    /**
     * Jamo (alias for Jamo subset of Hangul)
     */
    public const JAMO = 'Jamo-284';

    /**
     * Javanese
     */
    public const JAVA = 'Java-361';

    /**
     * Japanese (alias for Han + Hiragana + Katakana)
     */
    public const JPAN = 'Jpan-413';

    /**
     * Jurchen
     */
    public const JURC = 'Jurc-510';

    /**
     * Kayah Li (Kayah_Li)
     */
    public const KALI = 'Kali-357';

    /**
     * Katakana
     */
    public const KANA = 'Kana-411';

    /**
     * Kawi
     */
    public const KAWI = 'Kawi-368';

    /**
     * Kharoshthi
     */
    public const KHAR = 'Khar-305';

    /**
     * Khmer
     */
    public const KHMR = 'Khmr-355';

    /**
     * Khojki
     */
    public const KHOJ = 'Khoj-322';

    /**
     * Khitan large script
     */
    public const KITL = 'Kitl-505';

    /**
     * Khitan small script (Khitan_Small_Script)
     */
    public const KITS = 'Kits-288';

    /**
     * Kannada
     */
    public const KNDA = 'Knda-345';

    /**
     * Korean (alias for Hangul + Han)
     */
    public const KORE = 'Kore-287';

    /**
     * Kpelle
     */
    public const KPEL = 'Kpel-436';

    /**
     * Kirat Rai (Kirat_Rai)
     */
    public const KRAI = 'Krai-396';

    /**
     * Kaithi
     */
    public const KTHI = 'Kthi-317';

    /**
     * Tai Tham (Lanna) (Tai_Tham)
     */
    public const LANA = 'Lana-351';

    /**
     * Lao
     */
    public const LAOO = 'Laoo-356';

    /**
     * Latin (Fraktur variant)
     */
    public const LATF = 'Latf-217';

    /**
     * Latin (Gaelic variant)
     */
    public const LATG = 'Latg-216';

    /**
     * Latin
     */
    public const LATN = 'Latn-215';

    /**
     * Leke
     */
    public const LEKE = 'Leke-364';

    /**
     * Lepcha (R├│ng) (Lepcha)
     */
    public const LEPC = 'Lepc-335';

    /**
     * Limbu
     */
    public const LIMB = 'Limb-336';

    /**
     * Linear A (Linear_A)
     */
    public const LINA = 'Lina-400';

    /**
     * Linear B (Linear_B)
     */
    public const LINB = 'Linb-401';

    /**
     * Lisu (Fraser) (Lisu)
     */
    public const LISU = 'Lisu-399';

    /**
     * Loma
     */
    public const LOMA = 'Loma-437';

    /**
     * Lycian
     */
    public const LYCI = 'Lyci-202';

    /**
     * Lydian
     */
    public const LYDI = 'Lydi-116';

    /**
     * Mahajani
     */
    public const MAHJ = 'Mahj-314';

    /**
     * Makasar
     */
    public const MAKA = 'Maka-366';

    /**
     * Mandaic, Mandaean (Mandaic)
     */
    public const MAND = 'Mand-140';

    /**
     * Manichaean
     */
    public const MANI = 'Mani-139';

    /**
     * Marchen
     */
    public const MARC = 'Marc-332';

    /**
     * Mayan hieroglyphs
     */
    public const MAYA = 'Maya-090';

    /**
     * Medefaidrin (Oberi Okaime, Oberi ãåkaim╔ø) (Medefaidrin)
     */
    public const MEDF = 'Medf-265';

    /**
     * Mende Kikakui (Mende_Kikakui)
     */
    public const MEND = 'Mend-438';

    /**
     * Meroitic Cursive (Meroitic_Cursive)
     */
    public const MERC = 'Merc-101';

    /**
     * Meroitic Hieroglyphs (Meroitic_Hieroglyphs)
     */
    public const MERO = 'Mero-100';

    /**
     * Malayalam
     */
    public const MLYM = 'Mlym-347';

    /**
     * Modi, Moß©ì─½ (Modi)
     */
    public const MODI = 'Modi-324';

    /**
     * Mongolian
     */
    public const MONG = 'Mong-145';

    /**
     * Moon (Moon code, Moon script, Moon type)
     */
    public const MOON = 'Moon-218';

    /**
     * Mro, Mru (Mro)
     */
    public const MROO = 'Mroo-264';

    /**
     * Meitei Mayek (Meithei, Meetei) (Meetei_Mayek)
     */
    public const MTEI = 'Mtei-337';

    /**
     * Multani
     */
    public const MULT = 'Mult-323';

    /**
     * Myanmar (Burmese) (Myanmar)
     */
    public const MYMR = 'Mymr-350';

    /**
     * Nag Mundari (Nag_Mundari)
     */
    public const NAGM = 'Nagm-295';

    /**
     * Nandinagari
     */
    public const NAND = 'Nand-311';

    /**
     * Old North Arabian (Ancient North Arabian) (Old_North_Arabian)
     */
    public const NARB = 'Narb-106';

    /**
     * Nabataean
     */
    public const NBAT = 'Nbat-159';

    /**
     * Newa, Newar, Newari, Nep─üla lipi (Newa)
     */
    public const NEWA = 'Newa-333';

    /**
     * Naxi Dongba (na┬▓┬╣╔òi┬│┬│ to┬│┬│ba┬▓┬╣, Nakhi Tomba)
     */
    public const NKDB = 'Nkdb-085';

    /**
     * Naxi Geba (na┬▓┬╣╔òi┬│┬│ g╩î┬▓┬╣ba┬▓┬╣, 'Na-'Khi ┬▓Gg┼Å-┬╣baw, Nakhi Geba)
     */
    public const NKGB = 'Nkgb-420';

    /**
     * NÔÇÖKo (Nko)
     */
    public const NKOO = 'Nkoo-165';

    /**
     * N├╝shu (Nushu)
     */
    public const NSHU = 'Nshu-499';

    /**
     * Ogham
     */
    public const OGAM = 'Ogam-212';

    /**
     * Ol Chiki (Ol CemetÔÇÖ, Ol, Santali) (Ol_Chiki)
     */
    public const OLCK = 'Olck-261';

    /**
     * Ol Onal (Ol_Onal)
     */
    public const ONAO = 'Onao-296';

    /**
     * Old Turkic, Orkhon Runic (Old_Turkic)
     */
    public const ORKH = 'Orkh-175';

    /**
     * Oriya (Odia) (Oriya)
     */
    public const ORYA = 'Orya-327';

    /**
     * Osage
     */
    public const OSGE = 'Osge-219';

    /**
     * Osmanya
     */
    public const OSMA = 'Osma-260';

    /**
     * Old Uyghur (Old_Uyghur)
     */
    public const OUGR = 'Ougr-143';

    /**
     * Palmyrene
     */
    public const PALM = 'Palm-126';

    /**
     * Pau Cin Hau (Pau_Cin_Hau)
     */
    public const PAUC = 'Pauc-263';

    /**
     * Proto-Cuneiform
     */
    public const PCUN = 'Pcun-015';

    /**
     * Proto-Elamite
     */
    public const PELM = 'Pelm-016';

    /**
     * Old Permic (Old_Permic)
     */
    public const PERM = 'Perm-227';

    /**
     * Phags-pa (Phags_Pa)
     */
    public const PHAG = 'Phag-331';

    /**
     * Inscriptional Pahlavi (Inscriptional_Pahlavi)
     */
    public const PHLI = 'Phli-131';

    /**
     * Psalter Pahlavi (Psalter_Pahlavi)
     */
    public const PHLP = 'Phlp-132';

    /**
     * Book Pahlavi
     */
    public const PHLV = 'Phlv-133';

    /**
     * Phoenician
     */
    public const PHNX = 'Phnx-115';

    /**
     * Miao (Pollard) (Miao)
     */
    public const PLRD = 'Plrd-282';

    /**
     * Klingon (KLI pIqaD)
     */
    public const PIQD = 'Piqd-293';

    /**
     * Inscriptional Parthian (Inscriptional_Parthian)
     */
    public const PRTI = 'Prti-130';

    /**
     * Proto-Sinaitic
     */
    public const PSIN = 'Psin-103';

    /**
     * Reserved for private use (start)
     */
    public const QAAA = 'Qaaa-900';

    /**
     * Reserved for private use (end)
     */
    public const QABX = 'Qabx-949';

    /**
     * Ranjana
     */
    public const RANJ = 'Ranj-303';

    /**
     * Rejang (Redjang, Kaganga) (Rejang)
     */
    public const RJNG = 'Rjng-363';

    /**
     * Hanifi Rohingya (Hanifi_Rohingya)
     */
    public const ROHG = 'Rohg-167';

    /**
     * Rongorongo
     */
    public const RORO = 'Roro-620';

    /**
     * Runic
     */
    public const RUNR = 'Runr-211';

    /**
     * Samaritan
     */
    public const SAMR = 'Samr-123';

    /**
     * Sarati
     */
    public const SARA = 'Sara-292';

    /**
     * Old South Arabian (Old_South_Arabian)
     */
    public const SARB = 'Sarb-105';

    /**
     * Saurashtra
     */
    public const SAUR = 'Saur-344';

    /**
     * (Small) Seal
     */
    public const SEAL = 'Seal-590';

    /**
     * SignWriting
     */
    public const SGNW = 'Sgnw-095';

    /**
     * Shavian (Shaw) (Shavian)
     */
    public const SHAW = 'Shaw-281';

    /**
     * Sharada, ┼Ü─ürad─ü (Sharada)
     */
    public const SHRD = 'Shrd-319';

    /**
     * Shuishu
     */
    public const SHUI = 'Shui-530';

    /**
     * Siddham, Siddhaß╣â, Siddham─ütß╣øk─ü (Siddham)
     */
    public const SIDD = 'Sidd-302';

    /**
     * Sidetic
     */
    public const SIDT = 'Sidt-180';

    /**
     * Khudawadi, Sindhi (Khudawadi)
     */
    public const SIND = 'Sind-318';

    /**
     * Sinhala
     */
    public const SINH = 'Sinh-348';

    /**
     * Sogdian
     */
    public const SOGD = 'Sogd-141';

    /**
     * Old Sogdian (Old_Sogdian)
     */
    public const SOGO = 'Sogo-142';

    /**
     * Sora Sompeng (Sora_Sompeng)
     */
    public const SORA = 'Sora-398';

    /**
     * Soyombo
     */
    public const SOYO = 'Soyo-329';

    /**
     * Sundanese
     */
    public const SUND = 'Sund-362';

    /**
     * Sunuwar
     */
    public const SUNU = 'Sunu-274';

    /**
     * Syloti Nagri (Syloti_Nagri)
     */
    public const SYLO = 'Sylo-316';

    /**
     * Syriac
     */
    public const SYRC = 'Syrc-135';

    /**
     * Syriac (Estrangelo variant)
     */
    public const SYRE = 'Syre-138';

    /**
     * Syriac (Western variant)
     */
    public const SYRJ = 'Syrj-137';

    /**
     * Syriac (Eastern variant)
     */
    public const SYRN = 'Syrn-136';

    /**
     * Tagbanwa
     */
    public const TAGB = 'Tagb-373';

    /**
     * Takri, ß╣¼─ükr─½, ß╣¼─üß╣àkr─½ (Takri)
     */
    public const TAKR = 'Takr-321';

    /**
     * Tai Le (Tai_Le)
     */
    public const TALE = 'Tale-353';

    /**
     * New Tai Lue (New_Tai_Lue)
     */
    public const TALU = 'Talu-354';

    /**
     * Tamil
     */
    public const TAML = 'Taml-346';

    /**
     * Tangut
     */
    public const TANG = 'Tang-520';

    /**
     * Tai Viet (Tai_Viet)
     */
    public const TAVT = 'Tavt-359';

    /**
     * Tai Yo
     */
    public const TAYO = 'Tayo-380';

    /**
     * Telugu
     */
    public const TELU = 'Telu-340';

    /**
     * Tengwar
     */
    public const TENG = 'Teng-290';

    /**
     * Tifinagh (Berber) (Tifinagh)
     */
    public const TFNG = 'Tfng-120';

    /**
     * Tagalog (Baybayin, Alibata) (Tagalog)
     */
    public const TGLG = 'Tglg-370';

    /**
     * Thaana
     */
    public const THAA = 'Thaa-170';

    /**
     * Thai
     */
    public const THAI = 'Thai-352';

    /**
     * Tibetan
     */
    public const TIBT = 'Tibt-330';

    /**
     * Tirhuta
     */
    public const TIRH = 'Tirh-326';

    /**
     * Tangsa
     */
    public const TNSA = 'Tnsa-275';

    /**
     * Todhri
     */
    public const TODR = 'Todr-229';

    /**
     * Tolong Siki
     */
    public const TOLS = 'Tols-299';

    /**
     * Toto
     */
    public const TOTO = 'Toto-294';

    /**
     * Tulu-Tigalari (Tulu_Tigalari)
     */
    public const TUTG = 'Tutg-341';

    /**
     * Ugaritic
     */
    public const UGAR = 'Ugar-040';

    /**
     * Vai
     */
    public const VAII = 'Vaii-470';

    /**
     * Visible Speech
     */
    public const VISP = 'Visp-280';

    /**
     * Vithkuqi
     */
    public const VITH = 'Vith-228';

    /**
     * Warang Citi (Varang Kshiti) (Warang_Citi)
     */
    public const WARA = 'Wara-262';

    /**
     * Wancho
     */
    public const WCHO = 'Wcho-283';

    /**
     * Woleai
     */
    public const WOLE = 'Wole-480';

    /**
     * Old Persian (Old_Persian)
     */
    public const XPEO = 'Xpeo-030';

    /**
     * Cuneiform, Sumero-Akkadian (Cuneiform)
     */
    public const XSUX = 'Xsux-020';

    /**
     * Yezidi
     */
    public const YEZI = 'Yezi-192';

    /**
     * Yi
     */
    public const YIII = 'Yiii-460';

    /**
     * Zanabazar Square (Zanabazarin D├Ârb├Âljin Useg, Xewtee D├Ârb├Âljin Bicig, Horizontal Square Script)
     * (Zanabazar_Square)
     */
    public const ZANB = 'Zanb-339';

    /**
     * Code for inherited script (Inherited)
     */
    public const ZINH = 'Zinh-994';

    /**
     * Mathematical notation
     */
    public const ZMTH = 'Zmth-995';

    /**
     * Symbols (Emoji variant)
     */
    public const ZSYE = 'Zsye-993';

    /**
     * Symbols
     */
    public const ZSYM = 'Zsym-996';

    /**
     * Code for unwritten documents
     */
    public const ZXXX = 'Zxxx-997';

    /**
     * Code for undetermined script (Common)
     */
    public const ZYYY = 'Zyyy-998';

    /**
     * Code for uncoded script (Unknown)
     */
    public const ZZZZ = 'Zzzz-999';

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
