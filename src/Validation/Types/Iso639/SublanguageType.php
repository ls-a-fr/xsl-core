<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Iso639;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;

// phpcs:disable Generic.Commenting.DocComment.ShortNotCapital
/**
 * ISO 639-3 is a set of codes that defines three-letter identifiers for all known human
 * languages. At the core of ISO 639-3 are the individual languages already accounted
 * for in ISO 639-2. The large number of living languages in the initial inventory of
 * ISO 639-3 beyond those already included in ISO 639-2 was derived primarily from
 * Ethnologue (15th edition). Additional extinct, historic, and constructed languages
 * were obtained from the Linguist List.
 *
 * @see https://iso639-3.sil.org/code_tables/639/data
 */
class SublanguageType extends Type implements Validator
{
    /**
     * Ghotuo
     */
    public const AAA = 'aaa';

    /**
     * Alumu-Tesu
     */
    public const AAB = 'aab';

    /**
     * Ari
     */
    public const AAC = 'aac';

    /**
     * Amal
     */
    public const AAD = 'aad';

    /**
     * Arbëreshë Albanian
     */
    public const AAE = 'aae';

    /**
     * Aranadan
     */
    public const AAF = 'aaf';

    /**
     * Ambrak
     */
    public const AAG = 'aag';

    /**
     * Abu' Arapesh
     */
    public const AAH = 'aah';

    /**
     * Arifama-Miniafia
     */
    public const AAI = 'aai';

    /**
     * Ankave
     */
    public const AAK = 'aak';

    /**
     * Afade
     */
    public const AAL = 'aal';

    /**
     * Anambé
     */
    public const AAN = 'aan';

    /**
     * Algerian Saharan Arabic
     */
    public const AAO = 'aao';

    /**
     * Pará Arára
     */
    public const AAP = 'aap';

    /**
     * Eastern Abnaki
     */
    public const AAQ = 'aaq';

    /**
     * Afar
     */
    public const AAR = 'aar';

    /**
     * Aasáx
     */
    public const AAS = 'aas';

    /**
     * Arvanitika Albanian
     */
    public const AAT = 'aat';

    /**
     * Abau
     */
    public const AAU = 'aau';

    /**
     * Solong
     */
    public const AAW = 'aaw';

    /**
     * Mandobo Atas
     */
    public const AAX = 'aax';

    /**
     * Amarasi
     */
    public const AAZ = 'aaz';

    /**
     * Abé
     */
    public const ABA = 'aba';

    /**
     * Bankon
     */
    public const ABB = 'abb';

    /**
     * Ambala Ayta
     */
    public const ABC = 'abc';

    /**
     * Manide
     */
    public const ABD = 'abd';

    /**
     * Western Abnaki
     */
    public const ABE = 'abe';

    /**
     * Abai Sungai
     */
    public const ABF = 'abf';

    /**
     * Abaga
     */
    public const ABG = 'abg';

    /**
     * Tajiki Arabic
     */
    public const ABH = 'abh';

    /**
     * Abidji
     */
    public const ABI = 'abi';

    /**
     * Aka-Bea
     */
    public const ABJ = 'abj';

    /**
     * Abkhazian
     */
    public const ABK = 'abk';

    /**
     * Lampung Nyo
     */
    public const ABL = 'abl';

    /**
     * Abanyom
     */
    public const ABM = 'abm';

    /**
     * Abua
     */
    public const ABN = 'abn';

    /**
     * Abon
     */
    public const ABO = 'abo';

    /**
     * Abellen Ayta
     */
    public const ABP = 'abp';

    /**
     * Abaza
     */
    public const ABQ = 'abq';

    /**
     * Abron
     */
    public const ABR = 'abr';

    /**
     * Ambonese Malay
     */
    public const ABS = 'abs';

    /**
     * Ambulas
     */
    public const ABT = 'abt';

    /**
     * Abure
     */
    public const ABU = 'abu';

    /**
     * Baharna Arabic
     */
    public const ABV = 'abv';

    /**
     * Pal
     */
    public const ABW = 'abw';

    /**
     * Inabaknon
     */
    public const ABX = 'abx';

    /**
     * Aneme Wake
     */
    public const ABY = 'aby';

    /**
     * Abui
     */
    public const ABZ = 'abz';

    /**
     * Achagua
     */
    public const ACA = 'aca';

    /**
     * Áncá
     */
    public const ACB = 'acb';

    /**
     * Gikyode
     */
    public const ACD = 'acd';

    /**
     * Achinese
     */
    public const ACE = 'ace';

    /**
     * Saint Lucian Creole French
     */
    public const ACF = 'acf';

    /**
     * Acoli
     */
    public const ACH = 'ach';

    /**
     * Aka-Cari
     */
    public const ACI = 'aci';

    /**
     * Aka-Kora
     */
    public const ACK = 'ack';

    /**
     * Akar-Bale
     */
    public const ACL = 'acl';

    /**
     * Mesopotamian Arabic
     */
    public const ACM = 'acm';

    /**
     * Achang
     */
    public const ACN = 'acn';

    /**
     * Eastern Acipa
     */
    public const ACP = 'acp';

    /**
     * Ta'izzi-Adeni Arabic
     */
    public const ACQ = 'acq';

    /**
     * Achi
     */
    public const ACR = 'acr';

    /**
     * Acroá
     */
    public const ACS = 'acs';

    /**
     * Achterhoeks
     */
    public const ACT = 'act';

    /**
     * Achuar-Shiwiar
     */
    public const ACU = 'acu';

    /**
     * Achumawi
     */
    public const ACV = 'acv';

    /**
     * Hijazi Arabic
     */
    public const ACW = 'acw';

    /**
     * Omani Arabic
     */
    public const ACX = 'acx';

    /**
     * Cypriot Arabic
     */
    public const ACY = 'acy';

    /**
     * Acheron
     */
    public const ACZ = 'acz';

    /**
     * Adangme
     */
    public const ADA = 'ada';

    /**
     * Atauran
     */
    public const ADB = 'adb';

    /**
     * Lidzonka
     */
    public const ADD = 'add';

    /**
     * Adele
     */
    public const ADE = 'ade';

    /**
     * Dhofari Arabic
     */
    public const ADF = 'adf';

    /**
     * Andegerebinha
     */
    public const ADG = 'adg';

    /**
     * Adhola
     */
    public const ADH = 'adh';

    /**
     * Adi
     */
    public const ADI = 'adi';

    /**
     * Adioukrou
     */
    public const ADJ = 'adj';

    /**
     * Galo
     */
    public const ADL = 'adl';

    /**
     * Adang
     */
    public const ADN = 'adn';

    /**
     * Abu
     */
    public const ADO = 'ado';

    /**
     * Adangbe
     */
    public const ADQ = 'adq';

    /**
     * Adonara
     */
    public const ADR = 'adr';

    /**
     * Adamorobe Sign Language
     */
    public const ADS = 'ads';

    /**
     * Adnyamathanha
     */
    public const ADT = 'adt';

    /**
     * Aduge
     */
    public const ADU = 'adu';

    /**
     * Amundava
     */
    public const ADW = 'adw';

    /**
     * Amdo Tibetan
     */
    public const ADX = 'adx';

    /**
     * Adyghe
     */
    public const ADY = 'ady';

    /**
     * Adzera
     */
    public const ADZ = 'adz';

    /**
     * Areba
     */
    public const AEA = 'aea';

    /**
     * Tunisian Arabic
     */
    public const AEB = 'aeb';

    /**
     * Saidi Arabic
     */
    public const AEC = 'aec';

    /**
     * Argentine Sign Language
     */
    public const AED = 'aed';

    /**
     * Northeast Pashai
     */
    public const AEE = 'aee';

    /**
     * Haeke
     */
    public const AEK = 'aek';

    /**
     * Ambele
     */
    public const AEL = 'ael';

    /**
     * Arem
     */
    public const AEM = 'aem';

    /**
     * Armenian Sign Language
     */
    public const AEN = 'aen';

    /**
     * Aer
     */
    public const AEQ = 'aeq';

    /**
     * Eastern Arrernte
     */
    public const AER = 'aer';

    /**
     * Alsea
     */
    public const AES = 'aes';

    /**
     * Akeu
     */
    public const AEU = 'aeu';

    /**
     * Ambakich
     */
    public const AEW = 'aew';

    /**
     * Amele
     */
    public const AEY = 'aey';

    /**
     * Aeka
     */
    public const AEZ = 'aez';

    /**
     * Gulf Arabic
     */
    public const AFB = 'afb';

    /**
     * Andai
     */
    public const AFD = 'afd';

    /**
     * Putukwam
     */
    public const AFE = 'afe';

    /**
     * Afghan Sign Language
     */
    public const AFG = 'afg';

    /**
     * Afrihili
     */
    public const AFH = 'afh';

    /**
     * Akrukay
     */
    public const AFI = 'afi';

    /**
     * Nanubae
     */
    public const AFK = 'afk';

    /**
     * Defaka
     */
    public const AFN = 'afn';

    /**
     * Eloyi
     */
    public const AFO = 'afo';

    /**
     * Tapei
     */
    public const AFP = 'afp';

    /**
     * Afrikaans
     */
    public const AFR = 'afr';

    /**
     * Afro-Seminole Creole
     */
    public const AFS = 'afs';

    /**
     * Afitti
     */
    public const AFT = 'aft';

    /**
     * Awutu
     */
    public const AFU = 'afu';

    /**
     * Obokuitai
     */
    public const AFZ = 'afz';

    /**
     * Aguano
     */
    public const AGA = 'aga';

    /**
     * Legbo
     */
    public const AGB = 'agb';

    /**
     * Agatu
     */
    public const AGC = 'agc';

    /**
     * Agarabi
     */
    public const AGD = 'agd';

    /**
     * Angal
     */
    public const AGE = 'age';

    /**
     * Arguni
     */
    public const AGF = 'agf';

    /**
     * Angor
     */
    public const AGG = 'agg';

    /**
     * Ngelima
     */
    public const AGH = 'agh';

    /**
     * Agariya
     */
    public const AGI = 'agi';

    /**
     * Argobba
     */
    public const AGJ = 'agj';

    /**
     * Isarog Agta
     */
    public const AGK = 'agk';

    /**
     * Fembe
     */
    public const AGL = 'agl';

    /**
     * Angaataha
     */
    public const AGM = 'agm';

    /**
     * Agutaynen
     */
    public const AGN = 'agn';

    /**
     * Tainae
     */
    public const AGO = 'ago';

    /**
     * Aghem
     */
    public const AGQ = 'agq';

    /**
     * Aguaruna
     */
    public const AGR = 'agr';

    /**
     * Esimbi
     */
    public const AGS = 'ags';

    /**
     * Central Cagayan Agta
     */
    public const AGT = 'agt';

    /**
     * Aguacateco
     */
    public const AGU = 'agu';

    /**
     * Remontado Dumagat
     */
    public const AGV = 'agv';

    /**
     * Kahua
     */
    public const AGW = 'agw';

    /**
     * Aghul
     */
    public const AGX = 'agx';

    /**
     * Southern Alta
     */
    public const AGY = 'agy';

    /**
     * Mt. Iriga Agta
     */
    public const AGZ = 'agz';

    /**
     * Ahanta
     */
    public const AHA = 'aha';

    /**
     * Axamb
     */
    public const AHB = 'ahb';

    /**
     * Qimant
     */
    public const AHG = 'ahg';

    /**
     * Aghu
     */
    public const AHH = 'ahh';

    /**
     * Tiagbamrin Aizi
     */
    public const AHI = 'ahi';

    /**
     * Akha
     */
    public const AHK = 'ahk';

    /**
     * Igo
     */
    public const AHL = 'ahl';

    /**
     * Mobumrin Aizi
     */
    public const AHM = 'ahm';

    /**
     * Àhàn
     */
    public const AHN = 'ahn';

    /**
     * Ahom
     */
    public const AHO = 'aho';

    /**
     * Aproumu Aizi
     */
    public const AHP = 'ahp';

    /**
     * Ahirani
     */
    public const AHR = 'ahr';

    /**
     * Ashe
     */
    public const AHS = 'ahs';

    /**
     * Ahtena
     */
    public const AHT = 'aht';

    /**
     * Arosi
     */
    public const AIA = 'aia';

    /**
     * Ainu (China)
     */
    public const AIB = 'aib';

    /**
     * Ainbai
     */
    public const AIC = 'aic';

    /**
     * Alngith
     */
    public const AID = 'aid';

    /**
     * Amara
     */
    public const AIE = 'aie';

    /**
     * Agi
     */
    public const AIF = 'aif';

    /**
     * Antigua and Barbuda Creole English
     */
    public const AIG = 'aig';

    /**
     * Ai-Cham
     */
    public const AIH = 'aih';

    /**
     * Assyrian Neo-Aramaic
     */
    public const AII = 'aii';

    /**
     * Lishanid Noshan
     */
    public const AIJ = 'aij';

    /**
     * Ake
     */
    public const AIK = 'aik';

    /**
     * Aimele
     */
    public const AIL = 'ail';

    /**
     * Aimol
     */
    public const AIM = 'aim';

    /**
     * Ainu (Japan)
     */
    public const AIN = 'ain';

    /**
     * Aiton
     */
    public const AIO = 'aio';

    /**
     * Burumakok
     */
    public const AIP = 'aip';

    /**
     * Aimaq
     */
    public const AIQ = 'aiq';

    /**
     * Airoran
     */
    public const AIR = 'air';

    /**
     * Arikem
     */
    public const AIT = 'ait';

    /**
     * Aari
     */
    public const AIW = 'aiw';

    /**
     * Aighon
     */
    public const AIX = 'aix';

    /**
     * Ali
     */
    public const AIY = 'aiy';

    /**
     * Aja (South Sudan)
     */
    public const AJA = 'aja';

    /**
     * Aja (Benin)
     */
    public const AJG = 'ajg';

    /**
     * Ajië
     */
    public const AJI = 'aji';

    /**
     * Andajin
     */
    public const AJN = 'ajn';

    /**
     * Algerian Jewish Sign Language
     */
    public const AJS = 'ajs';

    /**
     * Judeo-Moroccan Arabic
     */
    public const AJU = 'aju';

    /**
     * Ajawa
     */
    public const AJW = 'ajw';

    /**
     * Amri Karbi
     */
    public const AJZ = 'ajz';

    /**
     * Akan
     */
    public const AKA = 'aka';

    /**
     * Batak Angkola
     */
    public const AKB = 'akb';

    /**
     * Mpur
     */
    public const AKC = 'akc';

    /**
     * Ukpet-Ehom
     */
    public const AKD = 'akd';

    /**
     * Akawaio
     */
    public const AKE = 'ake';

    /**
     * Akpa
     */
    public const AKF = 'akf';

    /**
     * Anakalangu
     */
    public const AKG = 'akg';

    /**
     * Angal Heneng
     */
    public const AKH = 'akh';

    /**
     * Aiome
     */
    public const AKI = 'aki';

    /**
     * Aka-Jeru
     */
    public const AKJ = 'akj';

    /**
     * Akkadian
     */
    public const AKK = 'akk';

    /**
     * Aklanon
     */
    public const AKL = 'akl';

    /**
     * Aka-Bo
     */
    public const AKM = 'akm';

    /**
     * Akurio
     */
    public const AKO = 'ako';

    /**
     * Siwu
     */
    public const AKP = 'akp';

    /**
     * Ak
     */
    public const AKQ = 'akq';

    /**
     * Araki
     */
    public const AKR = 'akr';

    /**
     * Akaselem
     */
    public const AKS = 'aks';

    /**
     * Akolet
     */
    public const AKT = 'akt';

    /**
     * Akum
     */
    public const AKU = 'aku';

    /**
     * Akhvakh
     */
    public const AKV = 'akv';

    /**
     * Akwa
     */
    public const AKW = 'akw';

    /**
     * Aka-Kede
     */
    public const AKX = 'akx';

    /**
     * Aka-Kol
     */
    public const AKY = 'aky';

    /**
     * Alabama
     */
    public const AKZ = 'akz';

    /**
     * Alago
     */
    public const ALA = 'ala';

    /**
     * Qawasqar
     */
    public const ALC = 'alc';

    /**
     * Alladian
     */
    public const ALD = 'ald';

    /**
     * Aleut
     */
    public const ALE = 'ale';

    /**
     * Alege
     */
    public const ALF = 'alf';

    /**
     * Alawa
     */
    public const ALH = 'alh';

    /**
     * Amaimon
     */
    public const ALI = 'ali';

    /**
     * Alangan
     */
    public const ALJ = 'alj';

    /**
     * Alak
     */
    public const ALK = 'alk';

    /**
     * Allar
     */
    public const ALL = 'all';

    /**
     * Amblong
     */
    public const ALM = 'alm';

    /**
     * Gheg Albanian
     */
    public const ALN = 'aln';

    /**
     * Larike-Wakasihu
     */
    public const ALO = 'alo';

    /**
     * Alune
     */
    public const ALP = 'alp';

    /**
     * Algonquin
     */
    public const ALQ = 'alq';

    /**
     * Alutor
     */
    public const ALR = 'alr';

    /**
     * Tosk Albanian
     */
    public const ALS = 'als';

    /**
     * Southern Altai
     */
    public const ALT = 'alt';

    /**
     * 'Are'are
     */
    public const ALU = 'alu';

    /**
     * Alaba-K’abeena
     */
    public const ALW = 'alw';

    /**
     * Amol
     */
    public const ALX = 'alx';

    /**
     * Alyawarr
     */
    public const ALY = 'aly';

    /**
     * Alur
     */
    public const ALZ = 'alz';

    /**
     * Amanayé
     */
    public const AMA = 'ama';

    /**
     * Ambo
     */
    public const AMB = 'amb';

    /**
     * Amahuaca
     */
    public const AMC = 'amc';

    /**
     * Yanesha'
     */
    public const AME = 'ame';

    /**
     * Hamer-Banna
     */
    public const AMF = 'amf';

    /**
     * Amurdak
     */
    public const AMG = 'amg';

    /**
     * Amharic
     */
    public const AMH = 'amh';

    /**
     * Amis
     */
    public const AMI = 'ami';

    /**
     * Amdang
     */
    public const AMJ = 'amj';

    /**
     * Ambai
     */
    public const AMK = 'amk';

    /**
     * War-Jaintia
     */
    public const AML = 'aml';

    /**
     * Ama (Papua New Guinea)
     */
    public const AMM = 'amm';

    /**
     * Amanab
     */
    public const AMN = 'amn';

    /**
     * Amo
     */
    public const AMO = 'amo';

    /**
     * Alamblak
     */
    public const AMP = 'amp';

    /**
     * Amahai
     */
    public const AMQ = 'amq';

    /**
     * Amarakaeri
     */
    public const AMR = 'amr';

    /**
     * Southern Amami-Oshima
     */
    public const AMS = 'ams';

    /**
     * Amto
     */
    public const AMT = 'amt';

    /**
     * Guerrero Amuzgo
     */
    public const AMU = 'amu';

    /**
     * Ambelau
     */
    public const AMV = 'amv';

    /**
     * Western Neo-Aramaic
     */
    public const AMW = 'amw';

    /**
     * Anmatyerre
     */
    public const AMX = 'amx';

    /**
     * Ami
     */
    public const AMY = 'amy';

    /**
     * Atampaya
     */
    public const AMZ = 'amz';

    /**
     * Andaqui
     */
    public const ANA = 'ana';

    /**
     * Andoa
     */
    public const ANB = 'anb';

    /**
     * Ngas
     */
    public const ANC = 'anc';

    /**
     * Ansus
     */
    public const AND = 'and';

    /**
     * Xârâcùù
     */
    public const ANE = 'ane';

    /**
     * Animere
     */
    public const ANF = 'anf';

    /**
     * Old English (ca. 450-1100)
     */
    public const ANG = 'ang';

    /**
     * Nend
     */
    public const ANH = 'anh';

    /**
     * Andi
     */
    public const ANI = 'ani';

    /**
     * Anor
     */
    public const ANJ = 'anj';

    /**
     * Goemai
     */
    public const ANK = 'ank';

    /**
     * Anu-Hkongso Chin
     */
    public const ANL = 'anl';

    /**
     * Anal
     */
    public const ANM = 'anm';

    /**
     * Obolo
     */
    public const ANN = 'ann';

    /**
     * Andoque
     */
    public const ANO = 'ano';

    /**
     * Angika
     */
    public const ANP = 'anp';

    /**
     * Jarawa (India)
     */
    public const ANQ = 'anq';

    /**
     * Andh
     */
    public const ANR = 'anr';

    /**
     * Anserma
     */
    public const ANS = 'ans';

    /**
     * Antakarinya
     */
    public const ANT = 'ant';

    /**
     * Anuak
     */
    public const ANU = 'anu';

    /**
     * Denya
     */
    public const ANV = 'anv';

    /**
     * Anaang
     */
    public const ANW = 'anw';

    /**
     * Andra-Hus
     */
    public const ANX = 'anx';

    /**
     * Anyin
     */
    public const ANY = 'any';

    /**
     * Anem
     */
    public const ANZ = 'anz';

    /**
     * Angolar
     */
    public const AOA = 'aoa';

    /**
     * Abom
     */
    public const AOB = 'aob';

    /**
     * Pemon
     */
    public const AOC = 'aoc';

    /**
     * Andarum
     */
    public const AOD = 'aod';

    /**
     * Angal Enen
     */
    public const AOE = 'aoe';

    /**
     * Bragat
     */
    public const AOF = 'aof';

    /**
     * Angoram
     */
    public const AOG = 'aog';

    /**
     * Anindilyakwa
     */
    public const AOI = 'aoi';

    /**
     * Mufian
     */
    public const AOJ = 'aoj';

    /**
     * Arhö
     */
    public const AOK = 'aok';

    /**
     * Alor
     */
    public const AOL = 'aol';

    /**
     * Ömie
     */
    public const AOM = 'aom';

    /**
     * Bumbita Arapesh
     */
    public const AON = 'aon';

    /**
     * Aore
     */
    public const AOR = 'aor';

    /**
     * Taikat
     */
    public const AOS = 'aos';

    /**
     * Atong (India)
     */
    public const AOT = 'aot';

    /**
     * A'ou
     */
    public const AOU = 'aou';

    /**
     * Atorada
     */
    public const AOX = 'aox';

    /**
     * Uab Meto
     */
    public const AOZ = 'aoz';

    /**
     * Sa'a
     */
    public const APB = 'apb';

    /**
     * Levantine Arabic
     */
    public const APC = 'apc';

    /**
     * Sudanese Arabic
     */
    public const APD = 'apd';

    /**
     * Bukiyip
     */
    public const APE = 'ape';

    /**
     * Pahanan Agta
     */
    public const APF = 'apf';

    /**
     * Ampanang
     */
    public const APG = 'apg';

    /**
     * Athpariya
     */
    public const APH = 'aph';

    /**
     * Apiaká
     */
    public const API = 'api';

    /**
     * Jicarilla Apache
     */
    public const APJ = 'apj';

    /**
     * Kiowa Apache
     */
    public const APK = 'apk';

    /**
     * Lipan Apache
     */
    public const APL = 'apl';

    /**
     * Mescalero-Chiricahua Apache
     */
    public const APM = 'apm';

    /**
     * Apinayé
     */
    public const APN = 'apn';

    /**
     * Ambul
     */
    public const APO = 'apo';

    /**
     * Apma
     */
    public const APP = 'app';

    /**
     * A-Pucikwar
     */
    public const APQ = 'apq';

    /**
     * Arop-Lokep
     */
    public const APR = 'apr';

    /**
     * Arop-Sissano
     */
    public const APS = 'aps';

    /**
     * Apatani
     */
    public const APT = 'apt';

    /**
     * Apurinã
     */
    public const APU = 'apu';

    /**
     * Alapmunte
     */
    public const APV = 'apv';

    /**
     * Western Apache
     */
    public const APW = 'apw';

    /**
     * Aputai
     */
    public const APX = 'apx';

    /**
     * Apalaí
     */
    public const APY = 'apy';

    /**
     * Safeyoka
     */
    public const APZ = 'apz';

    /**
     * Archi
     */
    public const AQC = 'aqc';

    /**
     * Ampari Dogon
     */
    public const AQD = 'aqd';

    /**
     * Arigidi
     */
    public const AQG = 'aqg';

    /**
     * Aninka
     */
    public const AQK = 'aqk';

    /**
     * Atohwaim
     */
    public const AQM = 'aqm';

    /**
     * Northern Alta
     */
    public const AQN = 'aqn';

    /**
     * Atakapa
     */
    public const AQP = 'aqp';

    /**
     * Arhâ
     */
    public const AQR = 'aqr';

    /**
     * Angaité
     */
    public const AQT = 'aqt';

    /**
     * Akuntsu
     */
    public const AQZ = 'aqz';

    /**
     * Arabic
     */
    public const ARA = 'ara';

    /**
     * Standard Arabic
     */
    public const ARB = 'arb';

    /**
     * Official Aramaic (700-300 BCE)
     */
    public const ARC = 'arc';

    /**
     * Arabana
     */
    public const ARD = 'ard';

    /**
     * Western Arrarnta
     */
    public const ARE = 'are';

    /**
     * Aragonese
     */
    public const ARG = 'arg';

    /**
     * Arhuaco
     */
    public const ARH = 'arh';

    /**
     * Arikara
     */
    public const ARI = 'ari';

    /**
     * Arapaso
     */
    public const ARJ = 'arj';

    /**
     * Arikapú
     */
    public const ARK = 'ark';

    /**
     * Arabela
     */
    public const ARL = 'arl';

    /**
     * Mapudungun
     */
    public const ARN = 'arn';

    /**
     * Araona
     */
    public const ARO = 'aro';

    /**
     * Arapaho
     */
    public const ARP = 'arp';

    /**
     * Algerian Arabic
     */
    public const ARQ = 'arq';

    /**
     * Karo (Brazil)
     */
    public const ARR = 'arr';

    /**
     * Najdi Arabic
     */
    public const ARS = 'ars';

    /**
     * Aruá (Amazonas State)
     */
    public const ARU = 'aru';

    /**
     * Arbore
     */
    public const ARV = 'arv';

    /**
     * Arawak
     */
    public const ARW = 'arw';

    /**
     * Aruá (Rodonia State)
     */
    public const ARX = 'arx';

    /**
     * Moroccan Arabic
     */
    public const ARY = 'ary';

    /**
     * Egyptian Arabic
     */
    public const ARZ = 'arz';

    /**
     * Asu (Tanzania)
     */
    public const ASA = 'asa';

    /**
     * Assiniboine
     */
    public const ASB = 'asb';

    /**
     * Casuarina Coast Asmat
     */
    public const ASC = 'asc';

    /**
     * American Sign Language
     */
    public const ASE = 'ase';

    /**
     * Auslan
     */
    public const ASF = 'asf';

    /**
     * Cishingini
     */
    public const ASG = 'asg';

    /**
     * Abishira
     */
    public const ASH = 'ash';

    /**
     * Buruwai
     */
    public const ASI = 'asi';

    /**
     * Sari
     */
    public const ASJ = 'asj';

    /**
     * Ashkun
     */
    public const ASK = 'ask';

    /**
     * Asilulu
     */
    public const ASL = 'asl';

    /**
     * Assamese
     */
    public const ASM = 'asm';

    /**
     * Xingú Asuriní
     */
    public const ASN = 'asn';

    /**
     * Dano
     */
    public const ASO = 'aso';

    /**
     * Algerian Sign Language
     */
    public const ASP = 'asp';

    /**
     * Austrian Sign Language
     */
    public const ASQ = 'asq';

    /**
     * Asuri
     */
    public const ASR = 'asr';

    /**
     * Ipulo
     */
    public const ASS = 'ass';

    /**
     * Asturian
     */
    public const AST = 'ast';

    /**
     * Tocantins Asurini
     */
    public const ASU = 'asu';

    /**
     * Asoa
     */
    public const ASV = 'asv';

    /**
     * Australian Aborigines Sign Language
     */
    public const ASW = 'asw';

    /**
     * Muratayak
     */
    public const ASX = 'asx';

    /**
     * Yaosakor Asmat
     */
    public const ASY = 'asy';

    /**
     * As
     */
    public const ASZ = 'asz';

    /**
     * Pele-Ata
     */
    public const ATA = 'ata';

    /**
     * Zaiwa
     */
    public const ATB = 'atb';

    /**
     * Atsahuaca
     */
    public const ATC = 'atc';

    /**
     * Ata Manobo
     */
    public const ATD = 'atd';

    /**
     * Atemble
     */
    public const ATE = 'ate';

    /**
     * Ivbie North-Okpela-Arhe
     */
    public const ATG = 'atg';

    /**
     * Attié
     */
    public const ATI = 'ati';

    /**
     * Atikamekw
     */
    public const ATJ = 'atj';

    /**
     * Ati
     */
    public const ATK = 'atk';

    /**
     * Mt. Iraya Agta
     */
    public const ATL = 'atl';

    /**
     * Ata
     */
    public const ATM = 'atm';

    /**
     * Ashtiani
     */
    public const ATN = 'atn';

    /**
     * Atong (Cameroon)
     */
    public const ATO = 'ato';

    /**
     * Pudtol Atta
     */
    public const ATP = 'atp';

    /**
     * Aralle-Tabulahan
     */
    public const ATQ = 'atq';

    /**
     * Waimiri-Atroari
     */
    public const ATR = 'atr';

    /**
     * Gros Ventre
     */
    public const ATS = 'ats';

    /**
     * Pamplona Atta
     */
    public const ATT = 'att';

    /**
     * Reel
     */
    public const ATU = 'atu';

    /**
     * Northern Altai
     */
    public const ATV = 'atv';

    /**
     * Atsugewi
     */
    public const ATW = 'atw';

    /**
     * Arutani
     */
    public const ATX = 'atx';

    /**
     * Aneityum
     */
    public const ATY = 'aty';

    /**
     * Arta
     */
    public const ATZ = 'atz';

    /**
     * Asumboa
     */
    public const AUA = 'aua';

    /**
     * Alugu
     */
    public const AUB = 'aub';

    /**
     * Waorani
     */
    public const AUC = 'auc';

    /**
     * Anuta
     */
    public const AUD = 'aud';

    /**
     * Aguna
     */
    public const AUG = 'aug';

    /**
     * Aushi
     */
    public const AUH = 'auh';

    /**
     * Anuki
     */
    public const AUI = 'aui';

    /**
     * Awjilah
     */
    public const AUJ = 'auj';

    /**
     * Heyo
     */
    public const AUK = 'auk';

    /**
     * Aulua
     */
    public const AUL = 'aul';

    /**
     * Asu (Nigeria)
     */
    public const AUM = 'aum';

    /**
     * Molmo One
     */
    public const AUN = 'aun';

    /**
     * Auyokawa
     */
    public const AUO = 'auo';

    /**
     * Makayam
     */
    public const AUP = 'aup';

    /**
     * Anus
     */
    public const AUQ = 'auq';

    /**
     * Aruek
     */
    public const AUR = 'aur';

    /**
     * Austral
     */
    public const AUT = 'aut';

    /**
     * Auye
     */
    public const AUU = 'auu';

    /**
     * Awyi
     */
    public const AUW = 'auw';

    /**
     * Aurá
     */
    public const AUX = 'aux';

    /**
     * Awiyaana
     */
    public const AUY = 'auy';

    /**
     * Uzbeki Arabic
     */
    public const AUZ = 'auz';

    /**
     * Avaric
     */
    public const AVA = 'ava';

    /**
     * Avau
     */
    public const AVB = 'avb';

    /**
     * Alviri-Vidari
     */
    public const AVD = 'avd';

    /**
     * Avestan
     */
    public const AVE = 'ave';

    /**
     * Avikam
     */
    public const AVI = 'avi';

    /**
     * Kotava
     */
    public const AVK = 'avk';

    /**
     * Eastern Egyptian Bedawi Arabic
     */
    public const AVL = 'avl';

    /**
     * Angkamuthi
     */
    public const AVM = 'avm';

    /**
     * Avatime
     */
    public const AVN = 'avn';

    /**
     * Agavotaguerra
     */
    public const AVO = 'avo';

    /**
     * Aushiri
     */
    public const AVS = 'avs';

    /**
     * Au
     */
    public const AVT = 'avt';

    /**
     * Avokaya
     */
    public const AVU = 'avu';

    /**
     * Avá-Canoeiro
     */
    public const AVV = 'avv';

    /**
     * Awadhi
     */
    public const AWA = 'awa';

    /**
     * Awa (Papua New Guinea)
     */
    public const AWB = 'awb';

    /**
     * Cicipu
     */
    public const AWC = 'awc';

    /**
     * Awetí
     */
    public const AWE = 'awe';

    /**
     * Anguthimri
     */
    public const AWG = 'awg';

    /**
     * Awbono
     */
    public const AWH = 'awh';

    /**
     * Aekyom
     */
    public const AWI = 'awi';

    /**
     * Awabakal
     */
    public const AWK = 'awk';

    /**
     * Arawum
     */
    public const AWM = 'awm';

    /**
     * Awngi
     */
    public const AWN = 'awn';

    /**
     * Awak
     */
    public const AWO = 'awo';

    /**
     * Awera
     */
    public const AWR = 'awr';

    /**
     * South Awyu
     */
    public const AWS = 'aws';

    /**
     * Araweté
     */
    public const AWT = 'awt';

    /**
     * Central Awyu
     */
    public const AWU = 'awu';

    /**
     * Jair Awyu
     */
    public const AWV = 'awv';

    /**
     * Awun
     */
    public const AWW = 'aww';

    /**
     * Awara
     */
    public const AWX = 'awx';

    /**
     * Edera Awyu
     */
    public const AWY = 'awy';

    /**
     * Abipon
     */
    public const AXB = 'axb';

    /**
     * Ayerrerenge
     */
    public const AXE = 'axe';

    /**
     * Mato Grosso Arára
     */
    public const AXG = 'axg';

    /**
     * Yaka (Central African Republic)
     */
    public const AXK = 'axk';

    /**
     * Lower Southern Aranda
     */
    public const AXL = 'axl';

    /**
     * Middle Armenian
     */
    public const AXM = 'axm';

    /**
     * Xârâgurè
     */
    public const AXX = 'axx';

    /**
     * Awar
     */
    public const AYA = 'aya';

    /**
     * Ayizo Gbe
     */
    public const AYB = 'ayb';

    /**
     * Southern Aymara
     */
    public const AYC = 'ayc';

    /**
     * Ayabadhu
     */
    public const AYD = 'ayd';

    /**
     * Ayere
     */
    public const AYE = 'aye';

    /**
     * Ginyanga
     */
    public const AYG = 'ayg';

    /**
     * Hadrami Arabic
     */
    public const AYH = 'ayh';

    /**
     * Leyigha
     */
    public const AYI = 'ayi';

    /**
     * Akuku
     */
    public const AYK = 'ayk';

    /**
     * Libyan Arabic
     */
    public const AYL = 'ayl';

    /**
     * Aymara
     */
    public const AYM = 'aym';

    /**
     * Sanaani Arabic
     */
    public const AYN = 'ayn';

    /**
     * Ayoreo
     */
    public const AYO = 'ayo';

    /**
     * North Mesopotamian Arabic
     */
    public const AYP = 'ayp';

    /**
     * Ayi (Papua New Guinea)
     */
    public const AYQ = 'ayq';

    /**
     * Central Aymara
     */
    public const AYR = 'ayr';

    /**
     * Sorsogon Ayta
     */
    public const AYS = 'ays';

    /**
     * Magbukun Ayta
     */
    public const AYT = 'ayt';

    /**
     * Ayu
     */
    public const AYU = 'ayu';

    /**
     * Mai Brat
     */
    public const AYZ = 'ayz';

    /**
     * Azha
     */
    public const AZA = 'aza';

    /**
     * South Azerbaijani
     */
    public const AZB = 'azb';

    /**
     * Eastern Durango Nahuatl
     */
    public const AZD = 'azd';

    /**
     * Azerbaijani
     */
    public const AZE = 'aze';

    /**
     * San Pedro Amuzgos Amuzgo
     */
    public const AZG = 'azg';

    /**
     * North Azerbaijani
     */
    public const AZJ = 'azj';

    /**
     * Ipalapa Amuzgo
     */
    public const AZM = 'azm';

    /**
     * Western Durango Nahuatl
     */
    public const AZN = 'azn';

    /**
     * Awing
     */
    public const AZO = 'azo';

    /**
     * Faire Atta
     */
    public const AZT = 'azt';

    /**
     * Highland Puebla Nahuatl
     */
    public const AZZ = 'azz';

    /**
     * Babatana
     */
    public const BAA = 'baa';

    /**
     * Bainouk-Gunyuño
     */
    public const BAB = 'bab';

    /**
     * Badui
     */
    public const BAC = 'bac';

    /**
     * Baré
     */
    public const BAE = 'bae';

    /**
     * Nubaca
     */
    public const BAF = 'baf';

    /**
     * Tuki
     */
    public const BAG = 'bag';

    /**
     * Bahamas Creole English
     */
    public const BAH = 'bah';

    /**
     * Barakai
     */
    public const BAJ = 'baj';

    /**
     * Bashkir
     */
    public const BAK = 'bak';

    /**
     * Baluchi
     */
    public const BAL = 'bal';

    /**
     * Bambara
     */
    public const BAM = 'bam';

    /**
     * Balinese
     */
    public const BAN = 'ban';

    /**
     * Waimaha
     */
    public const BAO = 'bao';

    /**
     * Bantawa
     */
    public const BAP = 'bap';

    /**
     * Bavarian
     */
    public const BAR = 'bar';

    /**
     * Basa (Cameroon)
     */
    public const BAS = 'bas';

    /**
     * Bada (Nigeria)
     */
    public const BAU = 'bau';

    /**
     * Vengo
     */
    public const BAV = 'bav';

    /**
     * Bambili-Bambui
     */
    public const BAW = 'baw';

    /**
     * Bamun
     */
    public const BAX = 'bax';

    /**
     * Batuley
     */
    public const BAY = 'bay';

    /**
     * Baatonum
     */
    public const BBA = 'bba';

    /**
     * Barai
     */
    public const BBB = 'bbb';

    /**
     * Batak Toba
     */
    public const BBC = 'bbc';

    /**
     * Bau
     */
    public const BBD = 'bbd';

    /**
     * Bangba
     */
    public const BBE = 'bbe';

    /**
     * Baibai
     */
    public const BBF = 'bbf';

    /**
     * Barama
     */
    public const BBG = 'bbg';

    /**
     * Bugan
     */
    public const BBH = 'bbh';

    /**
     * Barombi
     */
    public const BBI = 'bbi';

    /**
     * Ghomálá'
     */
    public const BBJ = 'bbj';

    /**
     * Babanki
     */
    public const BBK = 'bbk';

    /**
     * Bats
     */
    public const BBL = 'bbl';

    /**
     * Babango
     */
    public const BBM = 'bbm';

    /**
     * Uneapa
     */
    public const BBN = 'bbn';

    /**
     * Northern Bobo Madaré
     */
    public const BBO = 'bbo';

    /**
     * West Central Banda
     */
    public const BBP = 'bbp';

    /**
     * Bamali
     */
    public const BBQ = 'bbq';

    /**
     * Girawa
     */
    public const BBR = 'bbr';

    /**
     * Bakpinka
     */
    public const BBS = 'bbs';

    /**
     * Mburku
     */
    public const BBT = 'bbt';

    /**
     * Kulung (Nigeria)
     */
    public const BBU = 'bbu';

    /**
     * Karnai
     */
    public const BBV = 'bbv';

    /**
     * Baba
     */
    public const BBW = 'bbw';

    /**
     * Bubia
     */
    public const BBX = 'bbx';

    /**
     * Befang
     */
    public const BBY = 'bby';

    /**
     * Central Bai
     */
    public const BCA = 'bca';

    /**
     * Bainouk-Samik
     */
    public const BCB = 'bcb';

    /**
     * Southern Balochi
     */
    public const BCC = 'bcc';

    /**
     * North Babar
     */
    public const BCD = 'bcd';

    /**
     * Bamenyam
     */
    public const BCE = 'bce';

    /**
     * Bamu
     */
    public const BCF = 'bcf';

    /**
     * Baga Pokur
     */
    public const BCG = 'bcg';

    /**
     * Bariai
     */
    public const BCH = 'bch';

    /**
     * Baoulé
     */
    public const BCI = 'bci';

    /**
     * Bardi
     */
    public const BCJ = 'bcj';

    /**
     * Bunuba
     */
    public const BCK = 'bck';

    /**
     * Central Bikol
     */
    public const BCL = 'bcl';

    /**
     * Bannoni
     */
    public const BCM = 'bcm';

    /**
     * Bali (Nigeria)
     */
    public const BCN = 'bcn';

    /**
     * Kaluli
     */
    public const BCO = 'bco';

    /**
     * Bali (Democratic Republic of Congo)
     */
    public const BCP = 'bcp';

    /**
     * Bench
     */
    public const BCQ = 'bcq';

    /**
     * Babine
     */
    public const BCR = 'bcr';

    /**
     * Kohumono
     */
    public const BCS = 'bcs';

    /**
     * Bendi
     */
    public const BCT = 'bct';

    /**
     * Awad Bing
     */
    public const BCU = 'bcu';

    /**
     * Shoo-Minda-Nye
     */
    public const BCV = 'bcv';

    /**
     * Bana
     */
    public const BCW = 'bcw';

    /**
     * Bacama
     */
    public const BCY = 'bcy';

    /**
     * Bainouk-Gunyaamolo
     */
    public const BCZ = 'bcz';

    /**
     * Bayot
     */
    public const BDA = 'bda';

    /**
     * Basap
     */
    public const BDB = 'bdb';

    /**
     * Emberá-Baudó
     */
    public const BDC = 'bdc';

    /**
     * Bunama
     */
    public const BDD = 'bdd';

    /**
     * Bade
     */
    public const BDE = 'bde';

    /**
     * Biage
     */
    public const BDF = 'bdf';

    /**
     * Bonggi
     */
    public const BDG = 'bdg';

    /**
     * Baka (South Sudan)
     */
    public const BDH = 'bdh';

    /**
     * Burun
     */
    public const BDI = 'bdi';

    /**
     * Bai (South Sudan)
     */
    public const BDJ = 'bdj';

    /**
     * Budukh
     */
    public const BDK = 'bdk';

    /**
     * Indonesian Bajau
     */
    public const BDL = 'bdl';

    /**
     * Buduma
     */
    public const BDM = 'bdm';

    /**
     * Baldemu
     */
    public const BDN = 'bdn';

    /**
     * Morom
     */
    public const BDO = 'bdo';

    /**
     * Bende
     */
    public const BDP = 'bdp';

    /**
     * Bahnar
     */
    public const BDQ = 'bdq';

    /**
     * West Coast Bajau
     */
    public const BDR = 'bdr';

    /**
     * Burunge
     */
    public const BDS = 'bds';

    /**
     * Bokoto
     */
    public const BDT = 'bdt';

    /**
     * Oroko
     */
    public const BDU = 'bdu';

    /**
     * Bodo Parja
     */
    public const BDV = 'bdv';

    /**
     * Baham
     */
    public const BDW = 'bdw';

    /**
     * Budong-Budong
     */
    public const BDX = 'bdx';

    /**
     * Bandjalang
     */
    public const BDY = 'bdy';

    /**
     * Badeshi
     */
    public const BDZ = 'bdz';

    /**
     * Beaver
     */
    public const BEA = 'bea';

    /**
     * Bebele
     */
    public const BEB = 'beb';

    /**
     * Iceve-Maci
     */
    public const BEC = 'bec';

    /**
     * Bedoanas
     */
    public const BED = 'bed';

    /**
     * Byangsi
     */
    public const BEE = 'bee';

    /**
     * Benabena
     */
    public const BEF = 'bef';

    /**
     * Belait
     */
    public const BEG = 'beg';

    /**
     * Biali
     */
    public const BEH = 'beh';

    /**
     * Bekati'
     */
    public const BEI = 'bei';

    /**
     * Beja
     */
    public const BEJ = 'bej';

    /**
     * Bebeli
     */
    public const BEK = 'bek';

    /**
     * Belarusian
     */
    public const BEL = 'bel';

    /**
     * Bemba (Zambia)
     */
    public const BEM = 'bem';

    /**
     * Bengali
     */
    public const BEN = 'ben';

    /**
     * Beami
     */
    public const BEO = 'beo';

    /**
     * Besoa
     */
    public const BEP = 'bep';

    /**
     * Beembe
     */
    public const BEQ = 'beq';

    /**
     * Besme
     */
    public const BES = 'bes';

    /**
     * Guiberoua Béte
     */
    public const BET = 'bet';

    /**
     * Blagar
     */
    public const BEU = 'beu';

    /**
     * Daloa Bété
     */
    public const BEV = 'bev';

    /**
     * Betawi
     */
    public const BEW = 'bew';

    /**
     * Jur Modo
     */
    public const BEX = 'bex';

    /**
     * Beli (Papua New Guinea)
     */
    public const BEY = 'bey';

    /**
     * Bena (Tanzania)
     */
    public const BEZ = 'bez';

    /**
     * Bari
     */
    public const BFA = 'bfa';

    /**
     * Pauri Bareli
     */
    public const BFB = 'bfb';

    /**
     * Panyi Bai
     */
    public const BFC = 'bfc';

    /**
     * Bafut
     */
    public const BFD = 'bfd';

    /**
     * Betaf
     */
    public const BFE = 'bfe';

    /**
     * Bofi
     */
    public const BFF = 'bff';

    /**
     * Busang Kayan
     */
    public const BFG = 'bfg';

    /**
     * Blafe
     */
    public const BFH = 'bfh';

    /**
     * British Sign Language
     */
    public const BFI = 'bfi';

    /**
     * Bafanji
     */
    public const BFJ = 'bfj';

    /**
     * Ban Khor Sign Language
     */
    public const BFK = 'bfk';

    /**
     * Banda-Ndélé
     */
    public const BFL = 'bfl';

    /**
     * Mmen
     */
    public const BFM = 'bfm';

    /**
     * Bunak
     */
    public const BFN = 'bfn';

    /**
     * Malba Birifor
     */
    public const BFO = 'bfo';

    /**
     * Beba
     */
    public const BFP = 'bfp';

    /**
     * Badaga
     */
    public const BFQ = 'bfq';

    /**
     * Bazigar
     */
    public const BFR = 'bfr';

    /**
     * Southern Bai
     */
    public const BFS = 'bfs';

    /**
     * Balti
     */
    public const BFT = 'bft';

    /**
     * Gahri
     */
    public const BFU = 'bfu';

    /**
     * Bondo
     */
    public const BFW = 'bfw';

    /**
     * Bantayanon
     */
    public const BFX = 'bfx';

    /**
     * Bagheli
     */
    public const BFY = 'bfy';

    /**
     * Mahasu Pahari
     */
    public const BFZ = 'bfz';

    /**
     * Gwamhi-Wuri
     */
    public const BGA = 'bga';

    /**
     * Bobongko
     */
    public const BGB = 'bgb';

    /**
     * Haryanvi
     */
    public const BGC = 'bgc';

    /**
     * Rathwi Bareli
     */
    public const BGD = 'bgd';

    /**
     * Bauria
     */
    public const BGE = 'bge';

    /**
     * Bangandu
     */
    public const BGF = 'bgf';

    /**
     * Bugun
     */
    public const BGG = 'bgg';

    /**
     * Giangan
     */
    public const BGI = 'bgi';

    /**
     * Bangolan
     */
    public const BGJ = 'bgj';

    /**
     * Bit
     */
    public const BGK = 'bgk';

    /**
     * Bo (Laos)
     */
    public const BGL = 'bgl';

    /**
     * Western Balochi
     */
    public const BGN = 'bgn';

    /**
     * Baga Koga
     */
    public const BGO = 'bgo';

    /**
     * Eastern Balochi
     */
    public const BGP = 'bgp';

    /**
     * Bagri
     */
    public const BGQ = 'bgq';

    /**
     * Bawm Chin
     */
    public const BGR = 'bgr';

    /**
     * Tagabawa
     */
    public const BGS = 'bgs';

    /**
     * Bughotu
     */
    public const BGT = 'bgt';

    /**
     * Mbongno
     */
    public const BGU = 'bgu';

    /**
     * Warkay-Bipim
     */
    public const BGV = 'bgv';

    /**
     * Bhatri
     */
    public const BGW = 'bgw';

    /**
     * Balkan Gagauz Turkish
     */
    public const BGX = 'bgx';

    /**
     * Benggoi
     */
    public const BGY = 'bgy';

    /**
     * Banggai
     */
    public const BGZ = 'bgz';

    /**
     * Bharia
     */
    public const BHA = 'bha';

    /**
     * Bhili
     */
    public const BHB = 'bhb';

    /**
     * Biga
     */
    public const BHC = 'bhc';

    /**
     * Bhadrawahi
     */
    public const BHD = 'bhd';

    /**
     * Bhaya
     */
    public const BHE = 'bhe';

    /**
     * Odiai
     */
    public const BHF = 'bhf';

    /**
     * Binandere
     */
    public const BHG = 'bhg';

    /**
     * Bukharic
     */
    public const BHH = 'bhh';

    /**
     * Bhilali
     */
    public const BHI = 'bhi';

    /**
     * Bahing
     */
    public const BHJ = 'bhj';

    /**
     * Bimin
     */
    public const BHL = 'bhl';

    /**
     * Bathari
     */
    public const BHM = 'bhm';

    /**
     * Bohtan Neo-Aramaic
     */
    public const BHN = 'bhn';

    /**
     * Bhojpuri
     */
    public const BHO = 'bho';

    /**
     * Bima
     */
    public const BHP = 'bhp';

    /**
     * Tukang Besi South
     */
    public const BHQ = 'bhq';

    /**
     * Bara Malagasy
     */
    public const BHR = 'bhr';

    /**
     * Buwal
     */
    public const BHS = 'bhs';

    /**
     * Bhattiyali
     */
    public const BHT = 'bht';

    /**
     * Bhunjia
     */
    public const BHU = 'bhu';

    /**
     * Bahau
     */
    public const BHV = 'bhv';

    /**
     * Biak
     */
    public const BHW = 'bhw';

    /**
     * Bhalay
     */
    public const BHX = 'bhx';

    /**
     * Bhele
     */
    public const BHY = 'bhy';

    /**
     * Bada (Indonesia)
     */
    public const BHZ = 'bhz';

    /**
     * Badimaya
     */
    public const BIA = 'bia';

    /**
     * Bissa
     */
    public const BIB = 'bib';

    /**
     * Bidiyo
     */
    public const BID = 'bid';

    /**
     * Bepour
     */
    public const BIE = 'bie';

    /**
     * Biafada
     */
    public const BIF = 'bif';

    /**
     * Biangai
     */
    public const BIG = 'big';

    /**
     * Bikol
     */
    public const BIK = 'bik';

    /**
     * Bile
     */
    public const BIL = 'bil';

    /**
     * Bimoba
     */
    public const BIM = 'bim';

    /**
     * Bini
     */
    public const BIN = 'bin';

    /**
     * Nai
     */
    public const BIO = 'bio';

    /**
     * Bila
     */
    public const BIP = 'bip';

    /**
     * Bipi
     */
    public const BIQ = 'biq';

    /**
     * Bisorio
     */
    public const BIR = 'bir';

    /**
     * Bislama
     */
    public const BIS = 'bis';

    /**
     * Berinomo
     */
    public const BIT = 'bit';

    /**
     * Biete
     */
    public const BIU = 'biu';

    /**
     * Southern Birifor
     */
    public const BIV = 'biv';

    /**
     * Kol (Cameroon)
     */
    public const BIW = 'biw';

    /**
     * Bijori
     */
    public const BIX = 'bix';

    /**
     * Birhor
     */
    public const BIY = 'biy';

    /**
     * Baloi
     */
    public const BIZ = 'biz';

    /**
     * Budza
     */
    public const BJA = 'bja';

    /**
     * Banggarla
     */
    public const BJB = 'bjb';

    /**
     * Bariji
     */
    public const BJC = 'bjc';

    /**
     * Biao-Jiao Mien
     */
    public const BJE = 'bje';

    /**
     * Barzani Jewish Neo-Aramaic
     */
    public const BJF = 'bjf';

    /**
     * Bidyogo
     */
    public const BJG = 'bjg';

    /**
     * Bahinemo
     */
    public const BJH = 'bjh';

    /**
     * Burji
     */
    public const BJI = 'bji';

    /**
     * Kanauji
     */
    public const BJJ = 'bjj';

    /**
     * Barok
     */
    public const BJK = 'bjk';

    /**
     * Bulu (Papua New Guinea)
     */
    public const BJL = 'bjl';

    /**
     * Bajelani
     */
    public const BJM = 'bjm';

    /**
     * Banjar
     */
    public const BJN = 'bjn';

    /**
     * Mid-Southern Banda
     */
    public const BJO = 'bjo';

    /**
     * Fanamaket
     */
    public const BJP = 'bjp';

    /**
     * Binumarien
     */
    public const BJR = 'bjr';

    /**
     * Bajan
     */
    public const BJS = 'bjs';

    /**
     * Balanta-Ganja
     */
    public const BJT = 'bjt';

    /**
     * Busuu
     */
    public const BJU = 'bju';

    /**
     * Bedjond
     */
    public const BJV = 'bjv';

    /**
     * Bakwé
     */
    public const BJW = 'bjw';

    /**
     * Banao Itneg
     */
    public const BJX = 'bjx';

    /**
     * Bayali
     */
    public const BJY = 'bjy';

    /**
     * Baruga
     */
    public const BJZ = 'bjz';

    /**
     * Kyak
     */
    public const BKA = 'bka';

    /**
     * Baka (Cameroon)
     */
    public const BKC = 'bkc';

    /**
     * Binukid
     */
    public const BKD = 'bkd';

    /**
     * Beeke
     */
    public const BKF = 'bkf';

    /**
     * Buraka
     */
    public const BKG = 'bkg';

    /**
     * Bakoko
     */
    public const BKH = 'bkh';

    /**
     * Baki
     */
    public const BKI = 'bki';

    /**
     * Pande
     */
    public const BKJ = 'bkj';

    /**
     * Brokskat
     */
    public const BKK = 'bkk';

    /**
     * Berik
     */
    public const BKL = 'bkl';

    /**
     * Kom (Cameroon)
     */
    public const BKM = 'bkm';

    /**
     * Bukitan
     */
    public const BKN = 'bkn';

    /**
     * Kwa'
     */
    public const BKO = 'bko';

    /**
     * Boko (Democratic Republic of Congo)
     */
    public const BKP = 'bkp';

    /**
     * Bakairí
     */
    public const BKQ = 'bkq';

    /**
     * Bakumpai
     */
    public const BKR = 'bkr';

    /**
     * Northern Sorsoganon
     */
    public const BKS = 'bks';

    /**
     * Boloki
     */
    public const BKT = 'bkt';

    /**
     * Buhid
     */
    public const BKU = 'bku';

    /**
     * Bekwarra
     */
    public const BKV = 'bkv';

    /**
     * Bekwel
     */
    public const BKW = 'bkw';

    /**
     * Baikeno
     */
    public const BKX = 'bkx';

    /**
     * Bokyi
     */
    public const BKY = 'bky';

    /**
     * Bungku
     */
    public const BKZ = 'bkz';

    /**
     * Siksika
     */
    public const BLA = 'bla';

    /**
     * Bilua
     */
    public const BLB = 'blb';

    /**
     * Bella Coola
     */
    public const BLC = 'blc';

    /**
     * Bolango
     */
    public const BLD = 'bld';

    /**
     * Balanta-Kentohe
     */
    public const BLE = 'ble';

    /**
     * Buol
     */
    public const BLF = 'blf';

    /**
     * Kuwaa
     */
    public const BLH = 'blh';

    /**
     * Bolia
     */
    public const BLI = 'bli';

    /**
     * Bolongan
     */
    public const BLJ = 'blj';

    /**
     * Pa'o Karen
     */
    public const BLK = 'blk';

    /**
     * Biloxi
     */
    public const BLL = 'bll';

    /**
     * Beli (South Sudan)
     */
    public const BLM = 'blm';

    /**
     * Southern Catanduanes Bikol
     */
    public const BLN = 'bln';

    /**
     * Anii
     */
    public const BLO = 'blo';

    /**
     * Blablanga
     */
    public const BLP = 'blp';

    /**
     * Baluan-Pam
     */
    public const BLQ = 'blq';

    /**
     * Blang
     */
    public const BLR = 'blr';

    /**
     * Balaesang
     */
    public const BLS = 'bls';

    /**
     * Tai Dam
     */
    public const BLT = 'blt';

    /**
     * Kibala
     */
    public const BLV = 'blv';

    /**
     * Balangao
     */
    public const BLW = 'blw';

    /**
     * Mag-Indi Ayta
     */
    public const BLX = 'blx';

    /**
     * Notre
     */
    public const BLY = 'bly';

    /**
     * Balantak
     */
    public const BLZ = 'blz';

    /**
     * Lame
     */
    public const BMA = 'bma';

    /**
     * Bembe
     */
    public const BMB = 'bmb';

    /**
     * Biem
     */
    public const BMC = 'bmc';

    /**
     * Baga Manduri
     */
    public const BMD = 'bmd';

    /**
     * Limassa
     */
    public const BME = 'bme';

    /**
     * Bom-Kim
     */
    public const BMF = 'bmf';

    /**
     * Bamwe
     */
    public const BMG = 'bmg';

    /**
     * Kein
     */
    public const BMH = 'bmh';

    /**
     * Bagirmi
     */
    public const BMI = 'bmi';

    /**
     * Bote-Majhi
     */
    public const BMJ = 'bmj';

    /**
     * Ghayavi
     */
    public const BMK = 'bmk';

    /**
     * Bomboli
     */
    public const BML = 'bml';

    /**
     * Northern Betsimisaraka Malagasy
     */
    public const BMM = 'bmm';

    /**
     * Bina (Papua New Guinea)
     */
    public const BMN = 'bmn';

    /**
     * Bambalang
     */
    public const BMO = 'bmo';

    /**
     * Bulgebi
     */
    public const BMP = 'bmp';

    /**
     * Bomu
     */
    public const BMQ = 'bmq';

    /**
     * Muinane
     */
    public const BMR = 'bmr';

    /**
     * Bilma Kanuri
     */
    public const BMS = 'bms';

    /**
     * Biao Mon
     */
    public const BMT = 'bmt';

    /**
     * Somba-Siawari
     */
    public const BMU = 'bmu';

    /**
     * Bum
     */
    public const BMV = 'bmv';

    /**
     * Bomwali
     */
    public const BMW = 'bmw';

    /**
     * Baimak
     */
    public const BMX = 'bmx';

    /**
     * Baramu
     */
    public const BMZ = 'bmz';

    /**
     * Bonerate
     */
    public const BNA = 'bna';

    /**
     * Bookan
     */
    public const BNB = 'bnb';

    /**
     * Bontok
     */
    public const BNC = 'bnc';

    /**
     * Banda (Indonesia)
     */
    public const BND = 'bnd';

    /**
     * Bintauna
     */
    public const BNE = 'bne';

    /**
     * Masiwang
     */
    public const BNF = 'bnf';

    /**
     * Benga
     */
    public const BNG = 'bng';

    /**
     * Bangi
     */
    public const BNI = 'bni';

    /**
     * Eastern Tawbuid
     */
    public const BNJ = 'bnj';

    /**
     * Bierebo
     */
    public const BNK = 'bnk';

    /**
     * Boon
     */
    public const BNL = 'bnl';

    /**
     * Batanga
     */
    public const BNM = 'bnm';

    /**
     * Bunun
     */
    public const BNN = 'bnn';

    /**
     * Bantoanon
     */
    public const BNO = 'bno';

    /**
     * Bola
     */
    public const BNP = 'bnp';

    /**
     * Bantik
     */
    public const BNQ = 'bnq';

    /**
     * Butmas-Tur
     */
    public const BNR = 'bnr';

    /**
     * Bundeli
     */
    public const BNS = 'bns';

    /**
     * Bentong
     */
    public const BNU = 'bnu';

    /**
     * Bonerif
     */
    public const BNV = 'bnv';

    /**
     * Bisis
     */
    public const BNW = 'bnw';

    /**
     * Bangubangu
     */
    public const BNX = 'bnx';

    /**
     * Bintulu
     */
    public const BNY = 'bny';

    /**
     * Beezen
     */
    public const BNZ = 'bnz';

    /**
     * Bora
     */
    public const BOA = 'boa';

    /**
     * Aweer
     */
    public const BOB = 'bob';

    /**
     * Tibetan
     */
    public const BOD = 'bod';

    /**
     * Mundabli
     */
    public const BOE = 'boe';

    /**
     * Bolon
     */
    public const BOF = 'bof';

    /**
     * Bamako Sign Language
     */
    public const BOG = 'bog';

    /**
     * Boma
     */
    public const BOH = 'boh';

    /**
     * Barbareño
     */
    public const BOI = 'boi';

    /**
     * Anjam
     */
    public const BOJ = 'boj';

    /**
     * Bonjo
     */
    public const BOK = 'bok';

    /**
     * Bole
     */
    public const BOL = 'bol';

    /**
     * Berom
     */
    public const BOM = 'bom';

    /**
     * Bine
     */
    public const BON = 'bon';

    /**
     * Tiemacèwè Bozo
     */
    public const BOO = 'boo';

    /**
     * Bonkiman
     */
    public const BOP = 'bop';

    /**
     * Bogaya
     */
    public const BOQ = 'boq';

    /**
     * Borôro
     */
    public const BOR = 'bor';

    /**
     * Bosnian
     */
    public const BOS = 'bos';

    /**
     * Bongo
     */
    public const BOT = 'bot';

    /**
     * Bondei
     */
    public const BOU = 'bou';

    /**
     * Tuwuli
     */
    public const BOV = 'bov';

    /**
     * Rema
     */
    public const BOW = 'bow';

    /**
     * Buamu
     */
    public const BOX = 'box';

    /**
     * Bodo (Central African Republic)
     */
    public const BOY = 'boy';

    /**
     * Tiéyaxo Bozo
     */
    public const BOZ = 'boz';

    /**
     * Daakaka
     */
    public const BPA = 'bpa';

    /**
     * Mbuk
     */
    public const BPC = 'bpc';

    /**
     * Banda-Banda
     */
    public const BPD = 'bpd';

    /**
     * Bauni
     */
    public const BPE = 'bpe';

    /**
     * Bonggo
     */
    public const BPG = 'bpg';

    /**
     * Botlikh
     */
    public const BPH = 'bph';

    /**
     * Bagupi
     */
    public const BPI = 'bpi';

    /**
     * Binji
     */
    public const BPJ = 'bpj';

    /**
     * Orowe
     */
    public const BPK = 'bpk';

    /**
     * Broome Pearling Lugger Pidgin
     */
    public const BPL = 'bpl';

    /**
     * Biyom
     */
    public const BPM = 'bpm';

    /**
     * Dzao Min
     */
    public const BPN = 'bpn';

    /**
     * Anasi
     */
    public const BPO = 'bpo';

    /**
     * Kaure
     */
    public const BPP = 'bpp';

    /**
     * Banda Malay
     */
    public const BPQ = 'bpq';

    /**
     * Koronadal Blaan
     */
    public const BPR = 'bpr';

    /**
     * Sarangani Blaan
     */
    public const BPS = 'bps';

    /**
     * Barrow Point
     */
    public const BPT = 'bpt';

    /**
     * Bongu
     */
    public const BPU = 'bpu';

    /**
     * Bian Marind
     */
    public const BPV = 'bpv';

    /**
     * Bo (Papua New Guinea)
     */
    public const BPW = 'bpw';

    /**
     * Palya Bareli
     */
    public const BPX = 'bpx';

    /**
     * Bishnupriya
     */
    public const BPY = 'bpy';

    /**
     * Bilba
     */
    public const BPZ = 'bpz';

    /**
     * Tchumbuli
     */
    public const BQA = 'bqa';

    /**
     * Bagusa
     */
    public const BQB = 'bqb';

    /**
     * Boko (Benin)
     */
    public const BQC = 'bqc';

    /**
     * Bung
     */
    public const BQD = 'bqd';

    /**
     * Baga Kaloum
     */
    public const BQF = 'bqf';

    /**
     * Bago-Kusuntu
     */
    public const BQG = 'bqg';

    /**
     * Baima
     */
    public const BQH = 'bqh';

    /**
     * Bakhtiari
     */
    public const BQI = 'bqi';

    /**
     * Bandial
     */
    public const BQJ = 'bqj';

    /**
     * Banda-Mbrès
     */
    public const BQK = 'bqk';

    /**
     * Karian
     */
    public const BQL = 'bql';

    /**
     * Wumboko
     */
    public const BQM = 'bqm';

    /**
     * Bulgarian Sign Language
     */
    public const BQN = 'bqn';

    /**
     * Balo
     */
    public const BQO = 'bqo';

    /**
     * Busa
     */
    public const BQP = 'bqp';

    /**
     * Biritai
     */
    public const BQQ = 'bqq';

    /**
     * Burusu
     */
    public const BQR = 'bqr';

    /**
     * Bosngun
     */
    public const BQS = 'bqs';

    /**
     * Bamukumbit
     */
    public const BQT = 'bqt';

    /**
     * Boguru
     */
    public const BQU = 'bqu';

    /**
     * Koro Wachi
     */
    public const BQV = 'bqv';

    /**
     * Buru (Nigeria)
     */
    public const BQW = 'bqw';

    /**
     * Baangi
     */
    public const BQX = 'bqx';

    /**
     * Bengkala Sign Language
     */
    public const BQY = 'bqy';

    /**
     * Bakaka
     */
    public const BQZ = 'bqz';

    /**
     * Braj
     */
    public const BRA = 'bra';

    /**
     * Brao
     */
    public const BRB = 'brb';

    /**
     * Berbice Creole Dutch
     */
    public const BRC = 'brc';

    /**
     * Baraamu
     */
    public const BRD = 'brd';

    /**
     * Breton
     */
    public const BRE = 'bre';

    /**
     * Bira
     */
    public const BRF = 'brf';

    /**
     * Baure
     */
    public const BRG = 'brg';

    /**
     * Brahui
     */
    public const BRH = 'brh';

    /**
     * Mokpwe
     */
    public const BRI = 'bri';

    /**
     * Bieria
     */
    public const BRJ = 'brj';

    /**
     * Birked
     */
    public const BRK = 'brk';

    /**
     * Birwa
     */
    public const BRL = 'brl';

    /**
     * Barambu
     */
    public const BRM = 'brm';

    /**
     * Boruca
     */
    public const BRN = 'brn';

    /**
     * Brokkat
     */
    public const BRO = 'bro';

    /**
     * Barapasi
     */
    public const BRP = 'brp';

    /**
     * Breri
     */
    public const BRQ = 'brq';

    /**
     * Birao
     */
    public const BRR = 'brr';

    /**
     * Baras
     */
    public const BRS = 'brs';

    /**
     * Bitare
     */
    public const BRT = 'brt';

    /**
     * Eastern Bru
     */
    public const BRU = 'bru';

    /**
     * Western Bru
     */
    public const BRV = 'brv';

    /**
     * Bellari
     */
    public const BRW = 'brw';

    /**
     * Bodo (India)
     */
    public const BRX = 'brx';

    /**
     * Burui
     */
    public const BRY = 'bry';

    /**
     * Bilbil
     */
    public const BRZ = 'brz';

    /**
     * Abinomn
     */
    public const BSA = 'bsa';

    /**
     * Brunei Bisaya
     */
    public const BSB = 'bsb';

    /**
     * Bassari
     */
    public const BSC = 'bsc';

    /**
     * Wushi
     */
    public const BSE = 'bse';

    /**
     * Bauchi
     */
    public const BSF = 'bsf';

    /**
     * Bashkardi
     */
    public const BSG = 'bsg';

    /**
     * Kati
     */
    public const BSH = 'bsh';

    /**
     * Bassossi
     */
    public const BSI = 'bsi';

    /**
     * Bangwinji
     */
    public const BSJ = 'bsj';

    /**
     * Burushaski
     */
    public const BSK = 'bsk';

    /**
     * Basa-Gumna
     */
    public const BSL = 'bsl';

    /**
     * Busami
     */
    public const BSM = 'bsm';

    /**
     * Barasana-Eduria
     */
    public const BSN = 'bsn';

    /**
     * Buso
     */
    public const BSO = 'bso';

    /**
     * Baga Sitemu
     */
    public const BSP = 'bsp';

    /**
     * Bassa
     */
    public const BSQ = 'bsq';

    /**
     * Bassa-Kontagora
     */
    public const BSR = 'bsr';

    /**
     * Akoose
     */
    public const BSS = 'bss';

    /**
     * Basketo
     */
    public const BST = 'bst';

    /**
     * Bahonsuai
     */
    public const BSU = 'bsu';

    /**
     * Baga Sobané
     */
    public const BSV = 'bsv';

    /**
     * Baiso
     */
    public const BSW = 'bsw';

    /**
     * Yangkam
     */
    public const BSX = 'bsx';

    /**
     * Sabah Bisaya
     */
    public const BSY = 'bsy';

    /**
     * Bata
     */
    public const BTA = 'bta';

    /**
     * Bati (Cameroon)
     */
    public const BTC = 'btc';

    /**
     * Batak Dairi
     */
    public const BTD = 'btd';

    /**
     * Gamo-Ningi
     */
    public const BTE = 'bte';

    /**
     * Birgit
     */
    public const BTF = 'btf';

    /**
     * Gagnoa Bété
     */
    public const BTG = 'btg';

    /**
     * Biatah Bidayuh
     */
    public const BTH = 'bth';

    /**
     * Burate
     */
    public const BTI = 'bti';

    /**
     * Bacanese Malay
     */
    public const BTJ = 'btj';

    /**
     * Batak Mandailing
     */
    public const BTM = 'btm';

    /**
     * Ratagnon
     */
    public const BTN = 'btn';

    /**
     * Rinconada Bikol
     */
    public const BTO = 'bto';

    /**
     * Budibud
     */
    public const BTP = 'btp';

    /**
     * Batek
     */
    public const BTQ = 'btq';

    /**
     * Baetora
     */
    public const BTR = 'btr';

    /**
     * Batak Simalungun
     */
    public const BTS = 'bts';

    /**
     * Bete-Bendi
     */
    public const BTT = 'btt';

    /**
     * Batu
     */
    public const BTU = 'btu';

    /**
     * Bateri
     */
    public const BTV = 'btv';

    /**
     * Butuanon
     */
    public const BTW = 'btw';

    /**
     * Batak Karo
     */
    public const BTX = 'btx';

    /**
     * Bobot
     */
    public const BTY = 'bty';

    /**
     * Batak Alas-Kluet
     */
    public const BTZ = 'btz';

    /**
     * Buriat
     */
    public const BUA = 'bua';

    /**
     * Bua
     */
    public const BUB = 'bub';

    /**
     * Bushi
     */
    public const BUC = 'buc';

    /**
     * Ntcham
     */
    public const BUD = 'bud';

    /**
     * Beothuk
     */
    public const BUE = 'bue';

    /**
     * Bushoong
     */
    public const BUF = 'buf';

    /**
     * Buginese
     */
    public const BUG = 'bug';

    /**
     * Younuo Bunu
     */
    public const BUH = 'buh';

    /**
     * Bongili
     */
    public const BUI = 'bui';

    /**
     * Basa-Gurmana
     */
    public const BUJ = 'buj';

    /**
     * Bugawac
     */
    public const BUK = 'buk';

    /**
     * Bulgarian
     */
    public const BUL = 'bul';

    /**
     * Bulu (Cameroon)
     */
    public const BUM = 'bum';

    /**
     * Sherbro
     */
    public const BUN = 'bun';

    /**
     * Terei
     */
    public const BUO = 'buo';

    /**
     * Busoa
     */
    public const BUP = 'bup';

    /**
     * Brem
     */
    public const BUQ = 'buq';

    /**
     * Bokobaru
     */
    public const BUS = 'bus';

    /**
     * Bungain
     */
    public const BUT = 'but';

    /**
     * Budu
     */
    public const BUU = 'buu';

    /**
     * Bun
     */
    public const BUV = 'buv';

    /**
     * Bubi
     */
    public const BUW = 'buw';

    /**
     * Boghom
     */
    public const BUX = 'bux';

    /**
     * Bullom So
     */
    public const BUY = 'buy';

    /**
     * Bukwen
     */
    public const BUZ = 'buz';

    /**
     * Barein
     */
    public const BVA = 'bva';

    /**
     * Bube
     */
    public const BVB = 'bvb';

    /**
     * Baelelea
     */
    public const BVC = 'bvc';

    /**
     * Baeggu
     */
    public const BVD = 'bvd';

    /**
     * Berau Malay
     */
    public const BVE = 'bve';

    /**
     * Boor
     */
    public const BVF = 'bvf';

    /**
     * Bonkeng
     */
    public const BVG = 'bvg';

    /**
     * Bure
     */
    public const BVH = 'bvh';

    /**
     * Belanda Viri
     */
    public const BVI = 'bvi';

    /**
     * Baan
     */
    public const BVJ = 'bvj';

    /**
     * Bukat
     */
    public const BVK = 'bvk';

    /**
     * Bolivian Sign Language
     */
    public const BVL = 'bvl';

    /**
     * Bamunka
     */
    public const BVM = 'bvm';

    /**
     * Buna
     */
    public const BVN = 'bvn';

    /**
     * Bolgo
     */
    public const BVO = 'bvo';

    /**
     * Bumang
     */
    public const BVP = 'bvp';

    /**
     * Birri
     */
    public const BVQ = 'bvq';

    /**
     * Burarra
     */
    public const BVR = 'bvr';

    /**
     * Bati (Indonesia)
     */
    public const BVT = 'bvt';

    /**
     * Bukit Malay
     */
    public const BVU = 'bvu';

    /**
     * Baniva
     */
    public const BVV = 'bvv';

    /**
     * Boga
     */
    public const BVW = 'bvw';

    /**
     * Dibole
     */
    public const BVX = 'bvx';

    /**
     * Baybayanon
     */
    public const BVY = 'bvy';

    /**
     * Bauzi
     */
    public const BVZ = 'bvz';

    /**
     * Bwatoo
     */
    public const BWA = 'bwa';

    /**
     * Namosi-Naitasiri-Serua
     */
    public const BWB = 'bwb';

    /**
     * Bwile
     */
    public const BWC = 'bwc';

    /**
     * Bwaidoka
     */
    public const BWD = 'bwd';

    /**
     * Bwe Karen
     */
    public const BWE = 'bwe';

    /**
     * Boselewa
     */
    public const BWF = 'bwf';

    /**
     * Barwe
     */
    public const BWG = 'bwg';

    /**
     * Bishuo
     */
    public const BWH = 'bwh';

    /**
     * Baniwa
     */
    public const BWI = 'bwi';

    /**
     * Láá Láá Bwamu
     */
    public const BWJ = 'bwj';

    /**
     * Bauwaki
     */
    public const BWK = 'bwk';

    /**
     * Bwela
     */
    public const BWL = 'bwl';

    /**
     * Biwat
     */
    public const BWM = 'bwm';

    /**
     * Wunai Bunu
     */
    public const BWN = 'bwn';

    /**
     * Boro (Ethiopia)
     */
    public const BWO = 'bwo';

    /**
     * Mandobo Bawah
     */
    public const BWP = 'bwp';

    /**
     * Southern Bobo Madaré
     */
    public const BWQ = 'bwq';

    /**
     * Bura-Pabir
     */
    public const BWR = 'bwr';

    /**
     * Bomboma
     */
    public const BWS = 'bws';

    /**
     * Bafaw-Balong
     */
    public const BWT = 'bwt';

    /**
     * Buli (Ghana)
     */
    public const BWU = 'bwu';

    /**
     * Bwa
     */
    public const BWW = 'bww';

    /**
     * Bu-Nao Bunu
     */
    public const BWX = 'bwx';

    /**
     * Cwi Bwamu
     */
    public const BWY = 'bwy';

    /**
     * Bwisi
     */
    public const BWZ = 'bwz';

    /**
     * Tairaha
     */
    public const BXA = 'bxa';

    /**
     * Belanda Bor
     */
    public const BXB = 'bxb';

    /**
     * Molengue
     */
    public const BXC = 'bxc';

    /**
     * Pela
     */
    public const BXD = 'bxd';

    /**
     * Birale
     */
    public const BXE = 'bxe';

    /**
     * Bilur
     */
    public const BXF = 'bxf';

    /**
     * Bangala
     */
    public const BXG = 'bxg';

    /**
     * Buhutu
     */
    public const BXH = 'bxh';

    /**
     * Pirlatapa
     */
    public const BXI = 'bxi';

    /**
     * Bayungu
     */
    public const BXJ = 'bxj';

    /**
     * Bukusu
     */
    public const BXK = 'bxk';

    /**
     * Jalkunan
     */
    public const BXL = 'bxl';

    /**
     * Mongolia Buriat
     */
    public const BXM = 'bxm';

    /**
     * Burduna
     */
    public const BXN = 'bxn';

    /**
     * Barikanchi
     */
    public const BXO = 'bxo';

    /**
     * Bebil
     */
    public const BXP = 'bxp';

    /**
     * Beele
     */
    public const BXQ = 'bxq';

    /**
     * Russia Buriat
     */
    public const BXR = 'bxr';

    /**
     * Busam
     */
    public const BXS = 'bxs';

    /**
     * China Buriat
     */
    public const BXU = 'bxu';

    /**
     * Berakou
     */
    public const BXV = 'bxv';

    /**
     * Bankagooma
     */
    public const BXW = 'bxw';

    /**
     * Binahari
     */
    public const BXZ = 'bxz';

    /**
     * Batak
     */
    public const BYA = 'bya';

    /**
     * Bikya
     */
    public const BYB = 'byb';

    /**
     * Ubaghara
     */
    public const BYC = 'byc';

    /**
     * Benyadu'
     */
    public const BYD = 'byd';

    /**
     * Pouye
     */
    public const BYE = 'bye';

    /**
     * Bete
     */
    public const BYF = 'byf';

    /**
     * Baygo
     */
    public const BYG = 'byg';

    /**
     * Bhujel
     */
    public const BYH = 'byh';

    /**
     * Buyu
     */
    public const BYI = 'byi';

    /**
     * Bina (Nigeria)
     */
    public const BYJ = 'byj';

    /**
     * Biao
     */
    public const BYK = 'byk';

    /**
     * Bayono
     */
    public const BYL = 'byl';

    /**
     * Bidjara
     */
    public const BYM = 'bym';

    /**
     * Bilin
     */
    public const BYN = 'byn';

    /**
     * Biyo
     */
    public const BYO = 'byo';

    /**
     * Bumaji
     */
    public const BYP = 'byp';

    /**
     * Basay
     */
    public const BYQ = 'byq';

    /**
     * Baruya
     */
    public const BYR = 'byr';

    /**
     * Burak
     */
    public const BYS = 'bys';

    /**
     * Berti
     */
    public const BYT = 'byt';

    /**
     * Medumba
     */
    public const BYV = 'byv';

    /**
     * Belhariya
     */
    public const BYW = 'byw';

    /**
     * Qaqet
     */
    public const BYX = 'byx';

    /**
     * Banaro
     */
    public const BYZ = 'byz';

    /**
     * Bandi
     */
    public const BZA = 'bza';

    /**
     * Andio
     */
    public const BZB = 'bzb';

    /**
     * Southern Betsimisaraka Malagasy
     */
    public const BZC = 'bzc';

    /**
     * Bribri
     */
    public const BZD = 'bzd';

    /**
     * Jenaama Bozo
     */
    public const BZE = 'bze';

    /**
     * Boikin
     */
    public const BZF = 'bzf';

    /**
     * Babuza
     */
    public const BZG = 'bzg';

    /**
     * Mapos Buang
     */
    public const BZH = 'bzh';

    /**
     * Bisu
     */
    public const BZI = 'bzi';

    /**
     * Belize Kriol English
     */
    public const BZJ = 'bzj';

    /**
     * Nicaragua Creole English
     */
    public const BZK = 'bzk';

    /**
     * Boano (Sulawesi)
     */
    public const BZL = 'bzl';

    /**
     * Bolondo
     */
    public const BZM = 'bzm';

    /**
     * Boano (Maluku)
     */
    public const BZN = 'bzn';

    /**
     * Bozaba
     */
    public const BZO = 'bzo';

    /**
     * Kemberano
     */
    public const BZP = 'bzp';

    /**
     * Buli (Indonesia)
     */
    public const BZQ = 'bzq';

    /**
     * Biri
     */
    public const BZR = 'bzr';

    /**
     * Brazilian Sign Language
     */
    public const BZS = 'bzs';

    /**
     * Brithenig
     */
    public const BZT = 'bzt';

    /**
     * Burmeso
     */
    public const BZU = 'bzu';

    /**
     * Naami
     */
    public const BZV = 'bzv';

    /**
     * Basa (Nigeria)
     */
    public const BZW = 'bzw';

    /**
     * Kɛlɛngaxo Bozo
     */
    public const BZX = 'bzx';

    /**
     * Obanliku
     */
    public const BZY = 'bzy';

    /**
     * Evant
     */
    public const BZZ = 'bzz';

    /**
     * Chortí
     */
    public const CAA = 'caa';

    /**
     * Garifuna
     */
    public const CAB = 'cab';

    /**
     * Chuj
     */
    public const CAC = 'cac';

    /**
     * Caddo
     */
    public const CAD = 'cad';

    /**
     * Lehar
     */
    public const CAE = 'cae';

    /**
     * Southern Carrier
     */
    public const CAF = 'caf';

    /**
     * Nivaclé
     */
    public const CAG = 'cag';

    /**
     * Cahuarano
     */
    public const CAH = 'cah';

    /**
     * Chané
     */
    public const CAJ = 'caj';

    /**
     * Kaqchikel
     */
    public const CAK = 'cak';

    /**
     * Carolinian
     */
    public const CAL = 'cal';

    /**
     * Cemuhî
     */
    public const CAM = 'cam';

    /**
     * Chambri
     */
    public const CAN = 'can';

    /**
     * Chácobo
     */
    public const CAO = 'cao';

    /**
     * Chipaya
     */
    public const CAP = 'cap';

    /**
     * Car Nicobarese
     */
    public const CAQ = 'caq';

    /**
     * Galibi Carib
     */
    public const CAR = 'car';

    /**
     * Tsimané
     */
    public const CAS = 'cas';

    /**
     * Catalan
     */
    public const CAT = 'cat';

    /**
     * Cavineña
     */
    public const CAV = 'cav';

    /**
     * Callawalla
     */
    public const CAW = 'caw';

    /**
     * Chiquitano
     */
    public const CAX = 'cax';

    /**
     * Cayuga
     */
    public const CAY = 'cay';

    /**
     * Canichana
     */
    public const CAZ = 'caz';

    /**
     * Cabiyarí
     */
    public const CBB = 'cbb';

    /**
     * Carapana
     */
    public const CBC = 'cbc';

    /**
     * Carijona
     */
    public const CBD = 'cbd';

    /**
     * Chimila
     */
    public const CBG = 'cbg';

    /**
     * Chachi
     */
    public const CBI = 'cbi';

    /**
     * Ede Cabe
     */
    public const CBJ = 'cbj';

    /**
     * Chavacano
     */
    public const CBK = 'cbk';

    /**
     * Bualkhaw Chin
     */
    public const CBL = 'cbl';

    /**
     * Nyahkur
     */
    public const CBN = 'cbn';

    /**
     * Izora
     */
    public const CBO = 'cbo';

    /**
     * Tsucuba
     */
    public const CBQ = 'cbq';

    /**
     * Cashibo-Cacataibo
     */
    public const CBR = 'cbr';

    /**
     * Cashinahua
     */
    public const CBS = 'cbs';

    /**
     * Chayahuita
     */
    public const CBT = 'cbt';

    /**
     * Candoshi-Shapra
     */
    public const CBU = 'cbu';

    /**
     * Cacua
     */
    public const CBV = 'cbv';

    /**
     * Kinabalian
     */
    public const CBW = 'cbw';

    /**
     * Carabayo
     */
    public const CBY = 'cby';

    /**
     * Chamicuro
     */
    public const CCC = 'ccc';

    /**
     * Cafundo Creole
     */
    public const CCD = 'ccd';

    /**
     * Chopi
     */
    public const CCE = 'cce';

    /**
     * Samba Daka
     */
    public const CCG = 'ccg';

    /**
     * Atsam
     */
    public const CCH = 'cch';

    /**
     * Kasanga
     */
    public const CCJ = 'ccj';

    /**
     * Cutchi-Swahili
     */
    public const CCL = 'ccl';

    /**
     * Malaccan Creole Malay
     */
    public const CCM = 'ccm';

    /**
     * Comaltepec Chinantec
     */
    public const CCO = 'cco';

    /**
     * Chakma
     */
    public const CCP = 'ccp';

    /**
     * Cacaopera
     */
    public const CCR = 'ccr';

    /**
     * Choni
     */
    public const CDA = 'cda';

    /**
     * Chenchu
     */
    public const CDE = 'cde';

    /**
     * Chiru
     */
    public const CDF = 'cdf';

    /**
     * Chambeali
     */
    public const CDH = 'cdh';

    /**
     * Chodri
     */
    public const CDI = 'cdi';

    /**
     * Churahi
     */
    public const CDJ = 'cdj';

    /**
     * Chepang
     */
    public const CDM = 'cdm';

    /**
     * Chaudangsi
     */
    public const CDN = 'cdn';

    /**
     * Min Dong Chinese
     */
    public const CDO = 'cdo';

    /**
     * Cinda-Regi-Tiyal
     */
    public const CDR = 'cdr';

    /**
     * Chadian Sign Language
     */
    public const CDS = 'cds';

    /**
     * Chadong
     */
    public const CDY = 'cdy';

    /**
     * Koda
     */
    public const CDZ = 'cdz';

    /**
     * Lower Chehalis
     */
    public const CEA = 'cea';

    /**
     * Cebuano
     */
    public const CEB = 'ceb';

    /**
     * Chamacoco
     */
    public const CEG = 'ceg';

    /**
     * Eastern Khumi Chin
     */
    public const CEK = 'cek';

    /**
     * Cen
     */
    public const CEN = 'cen';

    /**
     * Czech
     */
    public const CES = 'ces';

    /**
     * Centúúm
     */
    public const CET = 'cet';

    /**
     * Ekai Chin
     */
    public const CEY = 'cey';

    /**
     * Dijim-Bwilim
     */
    public const CFA = 'cfa';

    /**
     * Cara
     */
    public const CFD = 'cfd';

    /**
     * Como Karim
     */
    public const CFG = 'cfg';

    /**
     * Falam Chin
     */
    public const CFM = 'cfm';

    /**
     * Changriwa
     */
    public const CGA = 'cga';

    /**
     * Kagayanen
     */
    public const CGC = 'cgc';

    /**
     * Chiga
     */
    public const CGG = 'cgg';

    /**
     * Chocangacakha
     */
    public const CGK = 'cgk';

    /**
     * Chamorro
     */
    public const CHA = 'cha';

    /**
     * Chibcha
     */
    public const CHB = 'chb';

    /**
     * Catawba
     */
    public const CHC = 'chc';

    /**
     * Highland Oaxaca Chontal
     */
    public const CHD = 'chd';

    /**
     * Chechen
     */
    public const CHE = 'che';

    /**
     * Tabasco Chontal
     */
    public const CHF = 'chf';

    /**
     * Chagatai
     */
    public const CHG = 'chg';

    /**
     * Chinook
     */
    public const CHH = 'chh';

    /**
     * Ojitlán Chinantec
     */
    public const CHJ = 'chj';

    /**
     * Chuukese
     */
    public const CHK = 'chk';

    /**
     * Cahuilla
     */
    public const CHL = 'chl';

    /**
     * Mari (Russia)
     */
    public const CHM = 'chm';

    /**
     * Chinook jargon
     */
    public const CHN = 'chn';

    /**
     * Choctaw
     */
    public const CHO = 'cho';

    /**
     * Chipewyan
     */
    public const CHP = 'chp';

    /**
     * Quiotepec Chinantec
     */
    public const CHQ = 'chq';

    /**
     * Cherokee
     */
    public const CHR = 'chr';

    /**
     * Cholón
     */
    public const CHT = 'cht';

    /**
     * Church Slavic
     */
    public const CHU = 'chu';

    /**
     * Chuvash
     */
    public const CHV = 'chv';

    /**
     * Chuwabu
     */
    public const CHW = 'chw';

    /**
     * Chantyal
     */
    public const CHX = 'chx';

    /**
     * Cheyenne
     */
    public const CHY = 'chy';

    /**
     * Ozumacín Chinantec
     */
    public const CHZ = 'chz';

    /**
     * Cia-Cia
     */
    public const CIA = 'cia';

    /**
     * Ci Gbe
     */
    public const CIB = 'cib';

    /**
     * Chickasaw
     */
    public const CIC = 'cic';

    /**
     * Chimariko
     */
    public const CID = 'cid';

    /**
     * Cineni
     */
    public const CIE = 'cie';

    /**
     * Chinali
     */
    public const CIH = 'cih';

    /**
     * Chitkuli Kinnauri
     */
    public const CIK = 'cik';

    /**
     * Cimbrian
     */
    public const CIM = 'cim';

    /**
     * Cinta Larga
     */
    public const CIN = 'cin';

    /**
     * Chiapanec
     */
    public const CIP = 'cip';

    /**
     * Tiri
     */
    public const CIR = 'cir';

    /**
     * Chippewa
     */
    public const CIW = 'ciw';

    /**
     * Chaima
     */
    public const CIY = 'ciy';

    /**
     * Western Cham
     */
    public const CJA = 'cja';

    /**
     * Chru
     */
    public const CJE = 'cje';

    /**
     * Upper Chehalis
     */
    public const CJH = 'cjh';

    /**
     * Chamalal
     */
    public const CJI = 'cji';

    /**
     * Chokwe
     */
    public const CJK = 'cjk';

    /**
     * Eastern Cham
     */
    public const CJM = 'cjm';

    /**
     * Chenapian
     */
    public const CJN = 'cjn';

    /**
     * Ashéninka Pajonal
     */
    public const CJO = 'cjo';

    /**
     * Cabécar
     */
    public const CJP = 'cjp';

    /**
     * Shor
     */
    public const CJS = 'cjs';

    /**
     * Chuave
     */
    public const CJV = 'cjv';

    /**
     * Jinyu Chinese
     */
    public const CJY = 'cjy';

    /**
     * Central Kurdish
     */
    public const CKB = 'ckb';

    /**
     * Chak
     */
    public const CKH = 'ckh';

    /**
     * Cibak
     */
    public const CKL = 'ckl';

    /**
     * Chakavian
     */
    public const CKM = 'ckm';

    /**
     * Kaang Chin
     */
    public const CKN = 'ckn';

    /**
     * Anufo
     */
    public const CKO = 'cko';

    /**
     * Kajakse
     */
    public const CKQ = 'ckq';

    /**
     * Kairak
     */
    public const CKR = 'ckr';

    /**
     * Tayo
     */
    public const CKS = 'cks';

    /**
     * Chukot
     */
    public const CKT = 'ckt';

    /**
     * Koasati
     */
    public const CKU = 'cku';

    /**
     * Kavalan
     */
    public const CKV = 'ckv';

    /**
     * Caka
     */
    public const CKX = 'ckx';

    /**
     * Cakfem-Mushere
     */
    public const CKY = 'cky';

    /**
     * Cakchiquel-Quiché Mixed Language
     */
    public const CKZ = 'ckz';

    /**
     * Ron
     */
    public const CLA = 'cla';

    /**
     * Chilcotin
     */
    public const CLC = 'clc';

    /**
     * Chaldean Neo-Aramaic
     */
    public const CLD = 'cld';

    /**
     * Lealao Chinantec
     */
    public const CLE = 'cle';

    /**
     * Chilisso
     */
    public const CLH = 'clh';

    /**
     * Chakali
     */
    public const CLI = 'cli';

    /**
     * Laitu Chin
     */
    public const CLJ = 'clj';

    /**
     * Idu-Mishmi
     */
    public const CLK = 'clk';

    /**
     * Chala
     */
    public const CLL = 'cll';

    /**
     * Klallam
     */
    public const CLM = 'clm';

    /**
     * Lowland Oaxaca Chontal
     */
    public const CLO = 'clo';

    /**
     * Classical Sanskrit
     */
    public const CLS = 'cls';

    /**
     * Lautu Chin
     */
    public const CLT = 'clt';

    /**
     * Caluyanun
     */
    public const CLU = 'clu';

    /**
     * Chulym
     */
    public const CLW = 'clw';

    /**
     * Eastern Highland Chatino
     */
    public const CLY = 'cly';

    /**
     * Maa
     */
    public const CMA = 'cma';

    /**
     * Cerma
     */
    public const CME = 'cme';

    /**
     * Classical Mongolian
     */
    public const CMG = 'cmg';

    /**
     * Emberá-Chamí
     */
    public const CMI = 'cmi';

    /**
     * Campalagian
     */
    public const CML = 'cml';

    /**
     * Michigamea
     */
    public const CMM = 'cmm';

    /**
     * Mandarin Chinese
     */
    public const CMN = 'cmn';

    /**
     * Central Mnong
     */
    public const CMO = 'cmo';

    /**
     * Mro-Khimi Chin
     */
    public const CMR = 'cmr';

    /**
     * Messapic
     */
    public const CMS = 'cms';

    /**
     * Camtho
     */
    public const CMT = 'cmt';

    /**
     * Changthang
     */
    public const CNA = 'cna';

    /**
     * Chinbon Chin
     */
    public const CNB = 'cnb';

    /**
     * Côông
     */
    public const CNC = 'cnc';

    /**
     * Northern Qiang
     */
    public const CNG = 'cng';

    /**
     * Hakha Chin
     */
    public const CNH = 'cnh';

    /**
     * Asháninka
     */
    public const CNI = 'cni';

    /**
     * Khumi Chin
     */
    public const CNK = 'cnk';

    /**
     * Lalana Chinantec
     */
    public const CNL = 'cnl';

    /**
     * Con
     */
    public const CNO = 'cno';

    /**
     * Northern Ping Chinese
     */
    public const CNP = 'cnp';

    /**
     * Chung
     */
    public const CNQ = 'cnq';

    /**
     * Montenegrin
     */
    public const CNR = 'cnr';

    /**
     * Central Asmat
     */
    public const CNS = 'cns';

    /**
     * Tepetotutla Chinantec
     */
    public const CNT = 'cnt';

    /**
     * Chenoua
     */
    public const CNU = 'cnu';

    /**
     * Ngawn Chin
     */
    public const CNW = 'cnw';

    /**
     * Middle Cornish
     */
    public const CNX = 'cnx';

    /**
     * Cocos Islands Malay
     */
    public const COA = 'coa';

    /**
     * Chicomuceltec
     */
    public const COB = 'cob';

    /**
     * Cocopa
     */
    public const COC = 'coc';

    /**
     * Cocama-Cocamilla
     */
    public const COD = 'cod';

    /**
     * Koreguaje
     */
    public const COE = 'coe';

    /**
     * Colorado
     */
    public const COF = 'cof';

    /**
     * Chong
     */
    public const COG = 'cog';

    /**
     * Chonyi-Dzihana-Kauma
     */
    public const COH = 'coh';

    /**
     * Cochimi
     */
    public const COJ = 'coj';

    /**
     * Santa Teresa Cora
     */
    public const COK = 'cok';

    /**
     * Columbia-Wenatchi
     */
    public const COL = 'col';

    /**
     * Comanche
     */
    public const COM = 'com';

    /**
     * Cofán
     */
    public const CON = 'con';

    /**
     * Comox
     */
    public const COO = 'coo';

    /**
     * Coptic
     */
    public const COP = 'cop';

    /**
     * Coquille
     */
    public const COQ = 'coq';

    /**
     * Cornish
     */
    public const COR = 'cor';

    /**
     * Corsican
     */
    public const COS = 'cos';

    /**
     * Caquinte
     */
    public const COT = 'cot';

    /**
     * Wamey
     */
    public const COU = 'cou';

    /**
     * Cao Miao
     */
    public const COV = 'cov';

    /**
     * Cowlitz
     */
    public const COW = 'cow';

    /**
     * Nanti
     */
    public const COX = 'cox';

    /**
     * Chochotec
     */
    public const COZ = 'coz';

    /**
     * Palantla Chinantec
     */
    public const CPA = 'cpa';

    /**
     * Ucayali-Yurúa Ashéninka
     */
    public const CPB = 'cpb';

    /**
     * Ajyíninka Apurucayali
     */
    public const CPC = 'cpc';

    /**
     * Cappadocian Greek
     */
    public const CPG = 'cpg';

    /**
     * Chinese Pidgin English
     */
    public const CPI = 'cpi';

    /**
     * Cherepon
     */
    public const CPN = 'cpn';

    /**
     * Kpeego
     */
    public const CPO = 'cpo';

    /**
     * Capiznon
     */
    public const CPS = 'cps';

    /**
     * Pichis Ashéninka
     */
    public const CPU = 'cpu';

    /**
     * Pu-Xian Chinese
     */
    public const CPX = 'cpx';

    /**
     * South Ucayali Ashéninka
     */
    public const CPY = 'cpy';

    /**
     * Chuanqiandian Cluster Miao
     */
    public const CQD = 'cqd';

    /**
     * Chara
     */
    public const CRA = 'cra';

    /**
     * Island Carib
     */
    public const CRB = 'crb';

    /**
     * Lonwolwol
     */
    public const CRC = 'crc';

    /**
     * Coeur d'Alene
     */
    public const CRD = 'crd';

    /**
     * Cree
     */
    public const CRE = 'cre';

    /**
     * Caramanta
     */
    public const CRF = 'crf';

    /**
     * Michif
     */
    public const CRG = 'crg';

    /**
     * Crimean Tatar
     */
    public const CRH = 'crh';

    /**
     * Sãotomense
     */
    public const CRI = 'cri';

    /**
     * Southern East Cree
     */
    public const CRJ = 'crj';

    /**
     * Plains Cree
     */
    public const CRK = 'crk';

    /**
     * Northern East Cree
     */
    public const CRL = 'crl';

    /**
     * Moose Cree
     */
    public const CRM = 'crm';

    /**
     * El Nayar Cora
     */
    public const CRN = 'crn';

    /**
     * Crow
     */
    public const CRO = 'cro';

    /**
     * Iyo'wujwa Chorote
     */
    public const CRQ = 'crq';

    /**
     * Carolina Algonquian
     */
    public const CRR = 'crr';

    /**
     * Seselwa Creole French
     */
    public const CRS = 'crs';

    /**
     * Iyojwa'ja Chorote
     */
    public const CRT = 'crt';

    /**
     * Chaura
     */
    public const CRV = 'crv';

    /**
     * Chrau
     */
    public const CRW = 'crw';

    /**
     * Carrier
     */
    public const CRX = 'crx';

    /**
     * Cori
     */
    public const CRY = 'cry';

    /**
     * Cruzeño
     */
    public const CRZ = 'crz';

    /**
     * Chiltepec Chinantec
     */
    public const CSA = 'csa';

    /**
     * Kashubian
     */
    public const CSB = 'csb';

    /**
     * Catalan Sign Language
     */
    public const CSC = 'csc';

    /**
     * Chiangmai Sign Language
     */
    public const CSD = 'csd';

    /**
     * Czech Sign Language
     */
    public const CSE = 'cse';

    /**
     * Cuba Sign Language
     */
    public const CSF = 'csf';

    /**
     * Chilean Sign Language
     */
    public const CSG = 'csg';

    /**
     * Asho Chin
     */
    public const CSH = 'csh';

    /**
     * Coast Miwok
     */
    public const CSI = 'csi';

    /**
     * Songlai Chin
     */
    public const CSJ = 'csj';

    /**
     * Jola-Kasa
     */
    public const CSK = 'csk';

    /**
     * Chinese Sign Language
     */
    public const CSL = 'csl';

    /**
     * Central Sierra Miwok
     */
    public const CSM = 'csm';

    /**
     * Colombian Sign Language
     */
    public const CSN = 'csn';

    /**
     * Sochiapam Chinantec
     */
    public const CSO = 'cso';

    /**
     * Southern Ping Chinese
     */
    public const CSP = 'csp';

    /**
     * Croatia Sign Language
     */
    public const CSQ = 'csq';

    /**
     * Costa Rican Sign Language
     */
    public const CSR = 'csr';

    /**
     * Southern Ohlone
     */
    public const CSS = 'css';

    /**
     * Northern Ohlone
     */
    public const CST = 'cst';

    /**
     * Sumtu Chin
     */
    public const CSV = 'csv';

    /**
     * Swampy Cree
     */
    public const CSW = 'csw';

    /**
     * Cambodian Sign Language
     */
    public const CSX = 'csx';

    /**
     * Siyin Chin
     */
    public const CSY = 'csy';

    /**
     * Coos
     */
    public const CSZ = 'csz';

    /**
     * Tataltepec Chatino
     */
    public const CTA = 'cta';

    /**
     * Chetco
     */
    public const CTC = 'ctc';

    /**
     * Tedim Chin
     */
    public const CTD = 'ctd';

    /**
     * Tepinapa Chinantec
     */
    public const CTE = 'cte';

    /**
     * Chittagonian
     */
    public const CTG = 'ctg';

    /**
     * Thaiphum Chin
     */
    public const CTH = 'cth';

    /**
     * Tlacoatzintepec Chinantec
     */
    public const CTL = 'ctl';

    /**
     * Chitimacha
     */
    public const CTM = 'ctm';

    /**
     * Chhintange
     */
    public const CTN = 'ctn';

    /**
     * Emberá-Catío
     */
    public const CTO = 'cto';

    /**
     * Western Highland Chatino
     */
    public const CTP = 'ctp';

    /**
     * Northern Catanduanes Bikol
     */
    public const CTS = 'cts';

    /**
     * Wayanad Chetti
     */
    public const CTT = 'ctt';

    /**
     * Chol
     */
    public const CTU = 'ctu';

    /**
     * Moundadan Chetty
     */
    public const CTY = 'cty';

    /**
     * Zacatepec Chatino
     */
    public const CTZ = 'ctz';

    /**
     * Cua
     */
    public const CUA = 'cua';

    /**
     * Cubeo
     */
    public const CUB = 'cub';

    /**
     * Usila Chinantec
     */
    public const CUC = 'cuc';

    /**
     * Chuka
     */
    public const CUH = 'cuh';

    /**
     * Cuiba
     */
    public const CUI = 'cui';

    /**
     * Mashco Piro
     */
    public const CUJ = 'cuj';

    /**
     * San Blas Kuna
     */
    public const CUK = 'cuk';

    /**
     * Culina
     */
    public const CUL = 'cul';

    /**
     * Cumanagoto
     */
    public const CUO = 'cuo';

    /**
     * Cupeño
     */
    public const CUP = 'cup';

    /**
     * Cun
     */
    public const CUQ = 'cuq';

    /**
     * Chhulung
     */
    public const CUR = 'cur';

    /**
     * Teutila Cuicatec
     */
    public const CUT = 'cut';

    /**
     * Tai Ya
     */
    public const CUU = 'cuu';

    /**
     * Cuvok
     */
    public const CUV = 'cuv';

    /**
     * Chukwa
     */
    public const CUW = 'cuw';

    /**
     * Tepeuxila Cuicatec
     */
    public const CUX = 'cux';

    /**
     * Cuitlatec
     */
    public const CUY = 'cuy';

    /**
     * Chug
     */
    public const CVG = 'cvg';

    /**
     * Valle Nacional Chinantec
     */
    public const CVN = 'cvn';

    /**
     * Kabwa
     */
    public const CWA = 'cwa';

    /**
     * Maindo
     */
    public const CWB = 'cwb';

    /**
     * Woods Cree
     */
    public const CWD = 'cwd';

    /**
     * Kwere
     */
    public const CWE = 'cwe';

    /**
     * Chewong
     */
    public const CWG = 'cwg';

    /**
     * Kuwaataay
     */
    public const CWT = 'cwt';

    /**
     * Cha'ari
     */
    public const CXH = 'cxh';

    /**
     * Nopala Chatino
     */
    public const CYA = 'cya';

    /**
     * Cayubaba
     */
    public const CYB = 'cyb';

    /**
     * Welsh
     */
    public const CYM = 'cym';

    /**
     * Cuyonon
     */
    public const CYO = 'cyo';

    /**
     * Huizhou Chinese
     */
    public const CZH = 'czh';

    /**
     * Knaanic
     */
    public const CZK = 'czk';

    /**
     * Zenzontepec Chatino
     */
    public const CZN = 'czn';

    /**
     * Min Zhong Chinese
     */
    public const CZO = 'czo';

    /**
     * Zotung Chin
     */
    public const CZT = 'czt';

    /**
     * Dangaléat
     */
    public const DAA = 'daa';

    /**
     * Dambi
     */
    public const DAC = 'dac';

    /**
     * Marik
     */
    public const DAD = 'dad';

    /**
     * Duupa
     */
    public const DAE = 'dae';

    /**
     * Dagbani
     */
    public const DAG = 'dag';

    /**
     * Gwahatike
     */
    public const DAH = 'dah';

    /**
     * Day
     */
    public const DAI = 'dai';

    /**
     * Dar Fur Daju
     */
    public const DAJ = 'daj';

    /**
     * Dakota
     */
    public const DAK = 'dak';

    /**
     * Dahalo
     */
    public const DAL = 'dal';

    /**
     * Damakawa
     */
    public const DAM = 'dam';

    /**
     * Danish
     */
    public const DAN = 'dan';

    /**
     * Daai Chin
     */
    public const DAO = 'dao';

    /**
     * Dandami Maria
     */
    public const DAQ = 'daq';

    /**
     * Dargwa
     */
    public const DAR = 'dar';

    /**
     * Daho-Doo
     */
    public const DAS = 'das';

    /**
     * Dar Sila Daju
     */
    public const DAU = 'dau';

    /**
     * Taita
     */
    public const DAV = 'dav';

    /**
     * Davawenyo
     */
    public const DAW = 'daw';

    /**
     * Dayi
     */
    public const DAX = 'dax';

    /**
     * Moi-Wadea
     */
    public const DAZ = 'daz';

    /**
     * Bangime
     */
    public const DBA = 'dba';

    /**
     * Deno
     */
    public const DBB = 'dbb';

    /**
     * Dadiya
     */
    public const DBD = 'dbd';

    /**
     * Dabe
     */
    public const DBE = 'dbe';

    /**
     * Edopi
     */
    public const DBF = 'dbf';

    /**
     * Dogul Dom Dogon
     */
    public const DBG = 'dbg';

    /**
     * Doka
     */
    public const DBI = 'dbi';

    /**
     * Ida'an
     */
    public const DBJ = 'dbj';

    /**
     * Dyirbal
     */
    public const DBL = 'dbl';

    /**
     * Duguri
     */
    public const DBM = 'dbm';

    /**
     * Duriankere
     */
    public const DBN = 'dbn';

    /**
     * Dulbu
     */
    public const DBO = 'dbo';

    /**
     * Duwai
     */
    public const DBP = 'dbp';

    /**
     * Daba
     */
    public const DBQ = 'dbq';

    /**
     * Dabarre
     */
    public const DBR = 'dbr';

    /**
     * Ben Tey Dogon
     */
    public const DBT = 'dbt';

    /**
     * Bondum Dom Dogon
     */
    public const DBU = 'dbu';

    /**
     * Dungu
     */
    public const DBV = 'dbv';

    /**
     * Bankan Tey Dogon
     */
    public const DBW = 'dbw';

    /**
     * Dibiyaso
     */
    public const DBY = 'dby';

    /**
     * Deccan
     */
    public const DCC = 'dcc';

    /**
     * Negerhollands
     */
    public const DCR = 'dcr';

    /**
     * Dadi Dadi
     */
    public const DDA = 'dda';

    /**
     * Dongotono
     */
    public const DDD = 'ddd';

    /**
     * Doondo
     */
    public const DDE = 'dde';

    /**
     * Fataluku
     */
    public const DDG = 'ddg';

    /**
     * West Goodenough
     */
    public const DDI = 'ddi';

    /**
     * Jaru
     */
    public const DDJ = 'ddj';

    /**
     * Dendi (Benin)
     */
    public const DDN = 'ddn';

    /**
     * Dido
     */
    public const DDO = 'ddo';

    /**
     * Dhudhuroa
     */
    public const DDR = 'ddr';

    /**
     * Donno So Dogon
     */
    public const DDS = 'dds';

    /**
     * Dawera-Daweloor
     */
    public const DDW = 'ddw';

    /**
     * Dagik
     */
    public const DEC = 'dec';

    /**
     * Dedua
     */
    public const DED = 'ded';

    /**
     * Dewoin
     */
    public const DEE = 'dee';

    /**
     * Dezfuli
     */
    public const DEF = 'def';

    /**
     * Degema
     */
    public const DEG = 'deg';

    /**
     * Dehwari
     */
    public const DEH = 'deh';

    /**
     * Demisa
     */
    public const DEI = 'dei';

    /**
     * Delaware
     */
    public const DEL = 'del';

    /**
     * Dem
     */
    public const DEM = 'dem';

    /**
     * Slave (Athapascan)
     */
    public const DEN = 'den';

    /**
     * Pidgin Delaware
     */
    public const DEP = 'dep';

    /**
     * Dendi (Central African Republic)
     */
    public const DEQ = 'deq';

    /**
     * Deori
     */
    public const DER = 'der';

    /**
     * Desano
     */
    public const DES = 'des';

    /**
     * German
     */
    public const DEU = 'deu';

    /**
     * Domung
     */
    public const DEV = 'dev';

    /**
     * Dengese
     */
    public const DEZ = 'dez';

    /**
     * Southern Dagaare
     */
    public const DGA = 'dga';

    /**
     * Bunoge Dogon
     */
    public const DGB = 'dgb';

    /**
     * Casiguran Dumagat Agta
     */
    public const DGC = 'dgc';

    /**
     * Dagaari Dioula
     */
    public const DGD = 'dgd';

    /**
     * Degenan
     */
    public const DGE = 'dge';

    /**
     * Doga
     */
    public const DGG = 'dgg';

    /**
     * Dghwede
     */
    public const DGH = 'dgh';

    /**
     * Northern Dagara
     */
    public const DGI = 'dgi';

    /**
     * Dagba
     */
    public const DGK = 'dgk';

    /**
     * Andaandi
     */
    public const DGL = 'dgl';

    /**
     * Dagoman
     */
    public const DGN = 'dgn';

    /**
     * Dogri (individual language)
     */
    public const DGO = 'dgo';

    /**
     * Tlicho
     */
    public const DGR = 'dgr';

    /**
     * Dogoso
     */
    public const DGS = 'dgs';

    /**
     * Ndra'ngith
     */
    public const DGT = 'dgt';

    /**
     * Daungwurrung
     */
    public const DGW = 'dgw';

    /**
     * Doghoro
     */
    public const DGX = 'dgx';

    /**
     * Daga
     */
    public const DGZ = 'dgz';

    /**
     * Dhundari
     */
    public const DHD = 'dhd';

    /**
     * Dhangu-Djangu
     */
    public const DHG = 'dhg';

    /**
     * Dhimal
     */
    public const DHI = 'dhi';

    /**
     * Dhalandji
     */
    public const DHL = 'dhl';

    /**
     * Zemba
     */
    public const DHM = 'dhm';

    /**
     * Dhanki
     */
    public const DHN = 'dhn';

    /**
     * Dhodia
     */
    public const DHO = 'dho';

    /**
     * Dhargari
     */
    public const DHR = 'dhr';

    /**
     * Dhaiso
     */
    public const DHS = 'dhs';

    /**
     * Dhurga
     */
    public const DHU = 'dhu';

    /**
     * Dehu
     */
    public const DHV = 'dhv';

    /**
     * Dhanwar (Nepal)
     */
    public const DHW = 'dhw';

    /**
     * Dhungaloo
     */
    public const DHX = 'dhx';

    /**
     * Dia
     */
    public const DIA = 'dia';

    /**
     * South Central Dinka
     */
    public const DIB = 'dib';

    /**
     * Lakota Dida
     */
    public const DIC = 'dic';

    /**
     * Didinga
     */
    public const DID = 'did';

    /**
     * Dieri
     */
    public const DIF = 'dif';

    /**
     * Digo
     */
    public const DIG = 'dig';

    /**
     * Kumiai
     */
    public const DIH = 'dih';

    /**
     * Dimbong
     */
    public const DII = 'dii';

    /**
     * Dai
     */
    public const DIJ = 'dij';

    /**
     * Southwestern Dinka
     */
    public const DIK = 'dik';

    /**
     * Dilling
     */
    public const DIL = 'dil';

    /**
     * Dime
     */
    public const DIM = 'dim';

    /**
     * Dinka
     */
    public const DIN = 'din';

    /**
     * Dibo
     */
    public const DIO = 'dio';

    /**
     * Northeastern Dinka
     */
    public const DIP = 'dip';

    /**
     * Dimli (individual language)
     */
    public const DIQ = 'diq';

    /**
     * Dirim
     */
    public const DIR = 'dir';

    /**
     * Dimasa
     */
    public const DIS = 'dis';

    /**
     * Diriku
     */
    public const DIU = 'diu';

    /**
     * Divehi
     */
    public const DIV = 'div';

    /**
     * Northwestern Dinka
     */
    public const DIW = 'diw';

    /**
     * Dixon Reef
     */
    public const DIX = 'dix';

    /**
     * Diuwe
     */
    public const DIY = 'diy';

    /**
     * Ding
     */
    public const DIZ = 'diz';

    /**
     * Djadjawurrung
     */
    public const DJA = 'dja';

    /**
     * Djinba
     */
    public const DJB = 'djb';

    /**
     * Dar Daju Daju
     */
    public const DJC = 'djc';

    /**
     * Djamindjung
     */
    public const DJD = 'djd';

    /**
     * Zarma
     */
    public const DJE = 'dje';

    /**
     * Djangun
     */
    public const DJF = 'djf';

    /**
     * Djinang
     */
    public const DJI = 'dji';

    /**
     * Djeebbana
     */
    public const DJJ = 'djj';

    /**
     * Eastern Maroon Creole
     */
    public const DJK = 'djk';

    /**
     * Jamsay Dogon
     */
    public const DJM = 'djm';

    /**
     * Jawoyn
     */
    public const DJN = 'djn';

    /**
     * Jangkang
     */
    public const DJO = 'djo';

    /**
     * Djambarrpuyngu
     */
    public const DJR = 'djr';

    /**
     * Kapriman
     */
    public const DJU = 'dju';

    /**
     * Djawi
     */
    public const DJW = 'djw';

    /**
     * Dakpakha
     */
    public const DKA = 'dka';

    /**
     * Kadung
     */
    public const DKG = 'dkg';

    /**
     * Dakka
     */
    public const DKK = 'dkk';

    /**
     * Kuijau
     */
    public const DKR = 'dkr';

    /**
     * Southeastern Dinka
     */
    public const DKS = 'dks';

    /**
     * Mazagway
     */
    public const DKX = 'dkx';

    /**
     * Dolgan
     */
    public const DLG = 'dlg';

    /**
     * Dahalik
     */
    public const DLK = 'dlk';

    /**
     * Dalmatian
     */
    public const DLM = 'dlm';

    /**
     * Darlong
     */
    public const DLN = 'dln';

    /**
     * Duma
     */
    public const DMA = 'dma';

    /**
     * Mombo Dogon
     */
    public const DMB = 'dmb';

    /**
     * Gavak
     */
    public const DMC = 'dmc';

    /**
     * Madhi Madhi
     */
    public const DMD = 'dmd';

    /**
     * Dugwor
     */
    public const DME = 'dme';

    /**
     * Medefaidrin
     */
    public const DMF = 'dmf';

    /**
     * Upper Kinabatangan
     */
    public const DMG = 'dmg';

    /**
     * Domaaki
     */
    public const DMK = 'dmk';

    /**
     * Dameli
     */
    public const DML = 'dml';

    /**
     * Dama
     */
    public const DMM = 'dmm';

    /**
     * Kemedzung
     */
    public const DMO = 'dmo';

    /**
     * East Damar
     */
    public const DMR = 'dmr';

    /**
     * Dampelas
     */
    public const DMS = 'dms';

    /**
     * Dubu
     */
    public const DMU = 'dmu';

    /**
     * Dumpas
     */
    public const DMV = 'dmv';

    /**
     * Mudburra
     */
    public const DMW = 'dmw';

    /**
     * Dema
     */
    public const DMX = 'dmx';

    /**
     * Demta
     */
    public const DMY = 'dmy';

    /**
     * Upper Grand Valley Dani
     */
    public const DNA = 'dna';

    /**
     * Daonda
     */
    public const DND = 'dnd';

    /**
     * Ndendeule
     */
    public const DNE = 'dne';

    /**
     * Dungan
     */
    public const DNG = 'dng';

    /**
     * Lower Grand Valley Dani
     */
    public const DNI = 'dni';

    /**
     * Dan
     */
    public const DNJ = 'dnj';

    /**
     * Dengka
     */
    public const DNK = 'dnk';

    /**
     * Dzùùngoo
     */
    public const DNN = 'dnn';

    /**
     * Ndrulo
     */
    public const DNO = 'dno';

    /**
     * Danaru
     */
    public const DNR = 'dnr';

    /**
     * Mid Grand Valley Dani
     */
    public const DNT = 'dnt';

    /**
     * Danau
     */
    public const DNU = 'dnu';

    /**
     * Danu
     */
    public const DNV = 'dnv';

    /**
     * Western Dani
     */
    public const DNW = 'dnw';

    /**
     * Dení
     */
    public const DNY = 'dny';

    /**
     * Dom
     */
    public const DOA = 'doa';

    /**
     * Dobu
     */
    public const DOB = 'dob';

    /**
     * Northern Dong
     */
    public const DOC = 'doc';

    /**
     * Doe
     */
    public const DOE = 'doe';

    /**
     * Domu
     */
    public const DOF = 'dof';

    /**
     * Dong
     */
    public const DOH = 'doh';

    /**
     * Dogri (macrolanguage)
     */
    public const DOI = 'doi';

    /**
     * Dondo
     */
    public const DOK = 'dok';

    /**
     * Doso
     */
    public const DOL = 'dol';

    /**
     * Toura (Papua New Guinea)
     */
    public const DON = 'don';

    /**
     * Dongo
     */
    public const DOO = 'doo';

    /**
     * Lukpa
     */
    public const DOP = 'dop';

    /**
     * Dominican Sign Language
     */
    public const DOQ = 'doq';

    /**
     * Dori'o
     */
    public const DOR = 'dor';

    /**
     * Dogosé
     */
    public const DOS = 'dos';

    /**
     * Dass
     */
    public const DOT = 'dot';

    /**
     * Dombe
     */
    public const DOV = 'dov';

    /**
     * Doyayo
     */
    public const DOW = 'dow';

    /**
     * Bussa
     */
    public const DOX = 'dox';

    /**
     * Dompo
     */
    public const DOY = 'doy';

    /**
     * Dorze
     */
    public const DOZ = 'doz';

    /**
     * Papar
     */
    public const DPP = 'dpp';

    /**
     * Dair
     */
    public const DRB = 'drb';

    /**
     * Minderico
     */
    public const DRC = 'drc';

    /**
     * Darmiya
     */
    public const DRD = 'drd';

    /**
     * Dolpo
     */
    public const DRE = 'dre';

    /**
     * Rungus
     */
    public const DRG = 'drg';

    /**
     * C'Lela
     */
    public const DRI = 'dri';

    /**
     * Paakantyi
     */
    public const DRL = 'drl';

    /**
     * West Damar
     */
    public const DRN = 'drn';

    /**
     * Daro-Matu Melanau
     */
    public const DRO = 'dro';

    /**
     * Dura
     */
    public const DRQ = 'drq';

    /**
     * Gedeo
     */
    public const DRS = 'drs';

    /**
     * Drents
     */
    public const DRT = 'drt';

    /**
     * Rukai
     */
    public const DRU = 'dru';

    /**
     * Darai
     */
    public const DRY = 'dry';

    /**
     * Lower Sorbian
     */
    public const DSB = 'dsb';

    /**
     * Dutch Sign Language
     */
    public const DSE = 'dse';

    /**
     * Daasanach
     */
    public const DSH = 'dsh';

    /**
     * Disa
     */
    public const DSI = 'dsi';

    /**
     * Dokshi
     */
    public const DSK = 'dsk';

    /**
     * Danish Sign Language
     */
    public const DSL = 'dsl';

    /**
     * Dusner
     */
    public const DSN = 'dsn';

    /**
     * Desiya
     */
    public const DSO = 'dso';

    /**
     * Tadaksahak
     */
    public const DSQ = 'dsq';

    /**
     * Mardin Sign Language
     */
    public const DSZ = 'dsz';

    /**
     * Daur
     */
    public const DTA = 'dta';

    /**
     * Labuk-Kinabatangan Kadazan
     */
    public const DTB = 'dtb';

    /**
     * Ditidaht
     */
    public const DTD = 'dtd';

    /**
     * Adithinngithigh
     */
    public const DTH = 'dth';

    /**
     * Ana Tinga Dogon
     */
    public const DTI = 'dti';

    /**
     * Tene Kan Dogon
     */
    public const DTK = 'dtk';

    /**
     * Tomo Kan Dogon
     */
    public const DTM = 'dtm';

    /**
     * Daatsʼíin
     */
    public const DTN = 'dtn';

    /**
     * Tommo So Dogon
     */
    public const DTO = 'dto';

    /**
     * Kadazan Dusun
     */
    public const DTP = 'dtp';

    /**
     * Lotud
     */
    public const DTR = 'dtr';

    /**
     * Toro So Dogon
     */
    public const DTS = 'dts';

    /**
     * Toro Tegu Dogon
     */
    public const DTT = 'dtt';

    /**
     * Tebul Ure Dogon
     */
    public const DTU = 'dtu';

    /**
     * Dotyali
     */
    public const DTY = 'dty';

    /**
     * Duala
     */
    public const DUA = 'dua';

    /**
     * Dubli
     */
    public const DUB = 'dub';

    /**
     * Duna
     */
    public const DUC = 'duc';

    /**
     * Umiray Dumaget Agta
     */
    public const DUE = 'due';

    /**
     * Dumbea
     */
    public const DUF = 'duf';

    /**
     * Duruma
     */
    public const DUG = 'dug';

    /**
     * Dungra Bhil
     */
    public const DUH = 'duh';

    /**
     * Dumun
     */
    public const DUI = 'dui';

    /**
     * Uyajitaya
     */
    public const DUK = 'duk';

    /**
     * Alabat Island Agta
     */
    public const DUL = 'dul';

    /**
     * Middle Dutch (ca. 1050-1350)
     */
    public const DUM = 'dum';

    /**
     * Dusun Deyah
     */
    public const DUN = 'dun';

    /**
     * Dupaninan Agta
     */
    public const DUO = 'duo';

    /**
     * Duano
     */
    public const DUP = 'dup';

    /**
     * Dusun Malang
     */
    public const DUQ = 'duq';

    /**
     * Dii
     */
    public const DUR = 'dur';

    /**
     * Dumi
     */
    public const DUS = 'dus';

    /**
     * Drung
     */
    public const DUU = 'duu';

    /**
     * Duvle
     */
    public const DUV = 'duv';

    /**
     * Dusun Witu
     */
    public const DUW = 'duw';

    /**
     * Duungooma
     */
    public const DUX = 'dux';

    /**
     * Dicamay Agta
     */
    public const DUY = 'duy';

    /**
     * Duli-Gey
     */
    public const DUZ = 'duz';

    /**
     * Duau
     */
    public const DVA = 'dva';

    /**
     * Diri
     */
    public const DWA = 'dwa';

    /**
     * Dawik Kui
     */
    public const DWK = 'dwk';

    /**
     * Dawro
     */
    public const DWR = 'dwr';

    /**
     * Dutton World Speedwords
     */
    public const DWS = 'dws';

    /**
     * Dhuwal
     */
    public const DWU = 'dwu';

    /**
     * Dawawa
     */
    public const DWW = 'dww';

    /**
     * Dhuwaya
     */
    public const DWY = 'dwy';

    /**
     * Dewas Rai
     */
    public const DWZ = 'dwz';

    /**
     * Dyan
     */
    public const DYA = 'dya';

    /**
     * Dyaberdyaber
     */
    public const DYB = 'dyb';

    /**
     * Dyugun
     */
    public const DYD = 'dyd';

    /**
     * Villa Viciosa Agta
     */
    public const DYG = 'dyg';

    /**
     * Djimini Senoufo
     */
    public const DYI = 'dyi';

    /**
     * Yanda Dom Dogon
     */
    public const DYM = 'dym';

    /**
     * Dyangadi
     */
    public const DYN = 'dyn';

    /**
     * Jola-Fonyi
     */
    public const DYO = 'dyo';

    /**
     * Dyarim
     */
    public const DYR = 'dyr';

    /**
     * Dyula
     */
    public const DYU = 'dyu';

    /**
     * Djabugay
     */
    public const DYY = 'dyy';

    /**
     * Tunzu
     */
    public const DZA = 'dza';

    /**
     * Daza
     */
    public const DZD = 'dzd';

    /**
     * Djiwarli
     */
    public const DZE = 'dze';

    /**
     * Dazaga
     */
    public const DZG = 'dzg';

    /**
     * Dzalakha
     */
    public const DZL = 'dzl';

    /**
     * Dzando
     */
    public const DZN = 'dzn';

    /**
     * Dzongkha
     */
    public const DZO = 'dzo';

    /**
     * Karenggapa
     */
    public const EAA = 'eaa';

    /**
     * Beginci
     */
    public const EBC = 'ebc';

    /**
     * Ebughu
     */
    public const EBG = 'ebg';

    /**
     * Eastern Bontok
     */
    public const EBK = 'ebk';

    /**
     * Teke-Ebo
     */
    public const EBO = 'ebo';

    /**
     * Ebrié
     */
    public const EBR = 'ebr';

    /**
     * Embu
     */
    public const EBU = 'ebu';

    /**
     * Eteocretan
     */
    public const ECR = 'ecr';

    /**
     * Ecuadorian Sign Language
     */
    public const ECS = 'ecs';

    /**
     * Eteocypriot
     */
    public const ECY = 'ecy';

    /**
     * E
     */
    public const EEE = 'eee';

    /**
     * Efai
     */
    public const EFA = 'efa';

    /**
     * Efe
     */
    public const EFE = 'efe';

    /**
     * Efik
     */
    public const EFI = 'efi';

    /**
     * Ega
     */
    public const EGA = 'ega';

    /**
     * Emilian
     */
    public const EGL = 'egl';

    /**
     * Benamanga
     */
    public const EGM = 'egm';

    /**
     * Eggon
     */
    public const EGO = 'ego';

    /**
     * Egyptian (Ancient)
     */
    public const EGY = 'egy';

    /**
     * Miyakubo Sign Language
     */
    public const EHS = 'ehs';

    /**
     * Ehueun
     */
    public const EHU = 'ehu';

    /**
     * Eipomek
     */
    public const EIP = 'eip';

    /**
     * Eitiep
     */
    public const EIT = 'eit';

    /**
     * Askopan
     */
    public const EIV = 'eiv';

    /**
     * Ejamat
     */
    public const EJA = 'eja';

    /**
     * Ekajuk
     */
    public const EKA = 'eka';

    /**
     * Ekit
     */
    public const EKE = 'eke';

    /**
     * Ekari
     */
    public const EKG = 'ekg';

    /**
     * Eki
     */
    public const EKI = 'eki';

    /**
     * Standard Estonian
     */
    public const EKK = 'ekk';

    /**
     * Kol (Bangladesh)
     */
    public const EKL = 'ekl';

    /**
     * Elip
     */
    public const EKM = 'ekm';

    /**
     * Koti
     */
    public const EKO = 'eko';

    /**
     * Ekpeye
     */
    public const EKP = 'ekp';

    /**
     * Yace
     */
    public const EKR = 'ekr';

    /**
     * Eastern Kayah
     */
    public const EKY = 'eky';

    /**
     * Elepi
     */
    public const ELE = 'ele';

    /**
     * El Hugeirat
     */
    public const ELH = 'elh';

    /**
     * Nding
     */
    public const ELI = 'eli';

    /**
     * Elkei
     */
    public const ELK = 'elk';

    /**
     * Modern Greek (1453-)
     */
    public const ELL = 'ell';

    /**
     * Eleme
     */
    public const ELM = 'elm';

    /**
     * El Molo
     */
    public const ELO = 'elo';

    /**
     * Elu
     */
    public const ELU = 'elu';

    /**
     * Elamite
     */
    public const ELX = 'elx';

    /**
     * Emai-Iuleha-Ora
     */
    public const EMA = 'ema';

    /**
     * Embaloh
     */
    public const EMB = 'emb';

    /**
     * Emerillon
     */
    public const EME = 'eme';

    /**
     * Eastern Meohang
     */
    public const EMG = 'emg';

    /**
     * Mussau-Emira
     */
    public const EMI = 'emi';

    /**
     * Eastern Maninkakan
     */
    public const EMK = 'emk';

    /**
     * Mamulique
     */
    public const EMM = 'emm';

    /**
     * Eman
     */
    public const EMN = 'emn';

    /**
     * Northern Emberá
     */
    public const EMP = 'emp';

    /**
     * Eastern Minyag
     */
    public const EMQ = 'emq';

    /**
     * Pacific Gulf Yupik
     */
    public const EMS = 'ems';

    /**
     * Eastern Muria
     */
    public const EMU = 'emu';

    /**
     * Emplawas
     */
    public const EMW = 'emw';

    /**
     * Erromintxela
     */
    public const EMX = 'emx';

    /**
     * Epigraphic Mayan
     */
    public const EMY = 'emy';

    /**
     * Mbessa
     */
    public const EMZ = 'emz';

    /**
     * Apali
     */
    public const ENA = 'ena';

    /**
     * Markweeta
     */
    public const ENB = 'enb';

    /**
     * En
     */
    public const ENC = 'enc';

    /**
     * Ende
     */
    public const END = 'end';

    /**
     * Forest Enets
     */
    public const ENF = 'enf';

    /**
     * English
     */
    public const ENG = 'eng';

    /**
     * Tundra Enets
     */
    public const ENH = 'enh';

    /**
     * Enlhet
     */
    public const ENL = 'enl';

    /**
     * Middle English (1100-1500)
     */
    public const ENM = 'enm';

    /**
     * Engenni
     */
    public const ENN = 'enn';

    /**
     * Enggano
     */
    public const ENO = 'eno';

    /**
     * Enga
     */
    public const ENQ = 'enq';

    /**
     * Emumu
     */
    public const ENR = 'enr';

    /**
     * Enu
     */
    public const ENU = 'enu';

    /**
     * Enwan (Edo State)
     */
    public const ENV = 'env';

    /**
     * Enwan (Akwa Ibom State)
     */
    public const ENW = 'enw';

    /**
     * Enxet
     */
    public const ENX = 'enx';

    /**
     * Beti (Côte d'Ivoire)
     */
    public const EOT = 'eot';

    /**
     * Epie
     */
    public const EPI = 'epi';

    /**
     * Esperanto
     */
    public const EPO = 'epo';

    /**
     * Eravallan
     */
    public const ERA = 'era';

    /**
     * Sie
     */
    public const ERG = 'erg';

    /**
     * Eruwa
     */
    public const ERH = 'erh';

    /**
     * Ogea
     */
    public const ERI = 'eri';

    /**
     * South Efate
     */
    public const ERK = 'erk';

    /**
     * Horpa
     */
    public const ERO = 'ero';

    /**
     * Erre
     */
    public const ERR = 'err';

    /**
     * Ersu
     */
    public const ERS = 'ers';

    /**
     * Eritai
     */
    public const ERT = 'ert';

    /**
     * Erokwanas
     */
    public const ERW = 'erw';

    /**
     * Ese Ejja
     */
    public const ESE = 'ese';

    /**
     * Aheri Gondi
     */
    public const ESG = 'esg';

    /**
     * Eshtehardi
     */
    public const ESH = 'esh';

    /**
     * North Alaskan Inupiatun
     */
    public const ESI = 'esi';

    /**
     * Northwest Alaska Inupiatun
     */
    public const ESK = 'esk';

    /**
     * Egypt Sign Language
     */
    public const ESL = 'esl';

    /**
     * Esuma
     */
    public const ESM = 'esm';

    /**
     * Salvadoran Sign Language
     */
    public const ESN = 'esn';

    /**
     * Estonian Sign Language
     */
    public const ESO = 'eso';

    /**
     * Esselen
     */
    public const ESQ = 'esq';

    /**
     * Central Siberian Yupik
     */
    public const ESS = 'ess';

    /**
     * Estonian
     */
    public const EST = 'est';

    /**
     * Central Yupik
     */
    public const ESU = 'esu';

    /**
     * Eskayan
     */
    public const ESY = 'esy';

    /**
     * Etebi
     */
    public const ETB = 'etb';

    /**
     * Etchemin
     */
    public const ETC = 'etc';

    /**
     * Ethiopian Sign Language
     */
    public const ETH = 'eth';

    /**
     * Eton (Vanuatu)
     */
    public const ETN = 'etn';

    /**
     * Eton (Cameroon)
     */
    public const ETO = 'eto';

    /**
     * Edolo
     */
    public const ETR = 'etr';

    /**
     * Yekhee
     */
    public const ETS = 'ets';

    /**
     * Etruscan
     */
    public const ETT = 'ett';

    /**
     * Ejagham
     */
    public const ETU = 'etu';

    /**
     * Eten
     */
    public const ETX = 'etx';

    /**
     * Semimi
     */
    public const ETZ = 'etz';

    /**
     * Eudeve
     */
    public const EUD = 'eud';

    /**
     * Basque
     */
    public const EUS = 'eus';

    /**
     * Even
     */
    public const EVE = 'eve';

    /**
     * Uvbie
     */
    public const EVH = 'evh';

    /**
     * Evenki
     */
    public const EVN = 'evn';

    /**
     * Ewe
     */
    public const EWE = 'ewe';

    /**
     * Ewondo
     */
    public const EWO = 'ewo';

    /**
     * Extremaduran
     */
    public const EXT = 'ext';

    /**
     * Eyak
     */
    public const EYA = 'eya';

    /**
     * Keiyo
     */
    public const EYO = 'eyo';

    /**
     * Ezaa
     */
    public const EZA = 'eza';

    /**
     * Uzekwe
     */
    public const EZE = 'eze';

    /**
     * Fasu
     */
    public const FAA = 'faa';

    /**
     * Fa d'Ambu
     */
    public const FAB = 'fab';

    /**
     * Wagi
     */
    public const FAD = 'fad';

    /**
     * Fagani
     */
    public const FAF = 'faf';

    /**
     * Finongan
     */
    public const FAG = 'fag';

    /**
     * Baissa Fali
     */
    public const FAH = 'fah';

    /**
     * Faiwol
     */
    public const FAI = 'fai';

    /**
     * Faita
     */
    public const FAJ = 'faj';

    /**
     * Fang (Cameroon)
     */
    public const FAK = 'fak';

    /**
     * South Fali
     */
    public const FAL = 'fal';

    /**
     * Fam
     */
    public const FAM = 'fam';

    /**
     * Fang (Equatorial Guinea)
     */
    public const FAN = 'fan';

    /**
     * Faroese
     */
    public const FAO = 'fao';

    /**
     * Paloor
     */
    public const FAP = 'fap';

    /**
     * Fataleka
     */
    public const FAR = 'far';

    /**
     * Persian
     */
    public const FAS = 'fas';

    /**
     * Fanti
     */
    public const FAT = 'fat';

    /**
     * Fayu
     */
    public const FAU = 'fau';

    /**
     * Fala
     */
    public const FAX = 'fax';

    /**
     * Southwestern Fars
     */
    public const FAY = 'fay';

    /**
     * Northwestern Fars
     */
    public const FAZ = 'faz';

    /**
     * West Albay Bikol
     */
    public const FBL = 'fbl';

    /**
     * Quebec Sign Language
     */
    public const FCS = 'fcs';

    /**
     * Feroge
     */
    public const FER = 'fer';

    /**
     * Foia Foia
     */
    public const FFI = 'ffi';

    /**
     * Maasina Fulfulde
     */
    public const FFM = 'ffm';

    /**
     * Fongoro
     */
    public const FGR = 'fgr';

    /**
     * Nobiin
     */
    public const FIA = 'fia';

    /**
     * Fyer
     */
    public const FIE = 'fie';

    /**
     * Faifi
     */
    public const FIF = 'fif';

    /**
     * Fijian
     */
    public const FIJ = 'fij';

    /**
     * Filipino
     */
    public const FIL = 'fil';

    /**
     * Finnish
     */
    public const FIN = 'fin';

    /**
     * Fipa
     */
    public const FIP = 'fip';

    /**
     * Firan
     */
    public const FIR = 'fir';

    /**
     * Tornedalen Finnish
     */
    public const FIT = 'fit';

    /**
     * Fiwaga
     */
    public const FIW = 'fiw';

    /**
     * Kirya-Konzəl
     */
    public const FKK = 'fkk';

    /**
     * Kven Finnish
     */
    public const FKV = 'fkv';

    /**
     * Kalispel-Pend d'Oreille
     */
    public const FLA = 'fla';

    /**
     * Foau
     */
    public const FLH = 'flh';

    /**
     * Fali
     */
    public const FLI = 'fli';

    /**
     * North Fali
     */
    public const FLL = 'fll';

    /**
     * Flinders Island
     */
    public const FLN = 'fln';

    /**
     * Fuliiru
     */
    public const FLR = 'flr';

    /**
     * Flaaitaal
     */
    public const FLY = 'fly';

    /**
     * Fe'fe'
     */
    public const FMP = 'fmp';

    /**
     * Far Western Muria
     */
    public const FMU = 'fmu';

    /**
     * Fanbak
     */
    public const FNB = 'fnb';

    /**
     * Fanagalo
     */
    public const FNG = 'fng';

    /**
     * Fania
     */
    public const FNI = 'fni';

    /**
     * Foodo
     */
    public const FOD = 'fod';

    /**
     * Foi
     */
    public const FOI = 'foi';

    /**
     * Foma
     */
    public const FOM = 'fom';

    /**
     * Fon
     */
    public const FON = 'fon';

    /**
     * Fore
     */
    public const FOR = 'for';

    /**
     * Siraya
     */
    public const FOS = 'fos';

    /**
     * Fernando Po Creole English
     */
    public const FPE = 'fpe';

    /**
     * Fas
     */
    public const FQS = 'fqs';

    /**
     * French
     */
    public const FRA = 'fra';

    /**
     * Cajun French
     */
    public const FRC = 'frc';

    /**
     * Fordata
     */
    public const FRD = 'frd';

    /**
     * Frankish
     */
    public const FRK = 'frk';

    /**
     * Middle French (ca. 1400-1600)
     */
    public const FRM = 'frm';

    /**
     * Old French (842-ca. 1400)
     */
    public const FRO = 'fro';

    /**
     * Arpitan
     */
    public const FRP = 'frp';

    /**
     * Forak
     */
    public const FRQ = 'frq';

    /**
     * Northern Frisian
     */
    public const FRR = 'frr';

    /**
     * Eastern Frisian
     */
    public const FRS = 'frs';

    /**
     * Fortsenal
     */
    public const FRT = 'frt';

    /**
     * Western Frisian
     */
    public const FRY = 'fry';

    /**
     * Finnish Sign Language
     */
    public const FSE = 'fse';

    /**
     * French Sign Language
     */
    public const FSL = 'fsl';

    /**
     * Finland-Swedish Sign Language
     */
    public const FSS = 'fss';

    /**
     * Adamawa Fulfulde
     */
    public const FUB = 'fub';

    /**
     * Pulaar
     */
    public const FUC = 'fuc';

    /**
     * East Futuna
     */
    public const FUD = 'fud';

    /**
     * Borgu Fulfulde
     */
    public const FUE = 'fue';

    /**
     * Pular
     */
    public const FUF = 'fuf';

    /**
     * Western Niger Fulfulde
     */
    public const FUH = 'fuh';

    /**
     * Bagirmi Fulfulde
     */
    public const FUI = 'fui';

    /**
     * Ko
     */
    public const FUJ = 'fuj';

    /**
     * Fulah
     */
    public const FUL = 'ful';

    /**
     * Fum
     */
    public const FUM = 'fum';

    /**
     * Fulniô
     */
    public const FUN = 'fun';

    /**
     * Central-Eastern Niger Fulfulde
     */
    public const FUQ = 'fuq';

    /**
     * Friulian
     */
    public const FUR = 'fur';

    /**
     * Futuna-Aniwa
     */
    public const FUT = 'fut';

    /**
     * Furu
     */
    public const FUU = 'fuu';

    /**
     * Nigerian Fulfulde
     */
    public const FUV = 'fuv';

    /**
     * Fuyug
     */
    public const FUY = 'fuy';

    /**
     * Fur
     */
    public const FVR = 'fvr';

    /**
     * Fwâi
     */
    public const FWA = 'fwa';

    /**
     * Fwe
     */
    public const FWE = 'fwe';

    /**
     * Ga
     */
    public const GAA = 'gaa';

    /**
     * Gabri
     */
    public const GAB = 'gab';

    /**
     * Mixed Great Andamanese
     */
    public const GAC = 'gac';

    /**
     * Gaddang
     */
    public const GAD = 'gad';

    /**
     * Guarequena
     */
    public const GAE = 'gae';

    /**
     * Gende
     */
    public const GAF = 'gaf';

    /**
     * Gagauz
     */
    public const GAG = 'gag';

    /**
     * Alekano
     */
    public const GAH = 'gah';

    /**
     * Borei
     */
    public const GAI = 'gai';

    /**
     * Gadsup
     */
    public const GAJ = 'gaj';

    /**
     * Gamkonora
     */
    public const GAK = 'gak';

    /**
     * Galolen
     */
    public const GAL = 'gal';

    /**
     * Kandawo
     */
    public const GAM = 'gam';

    /**
     * Gan Chinese
     */
    public const GAN = 'gan';

    /**
     * Gants
     */
    public const GAO = 'gao';

    /**
     * Gal
     */
    public const GAP = 'gap';

    /**
     * Gata'
     */
    public const GAQ = 'gaq';

    /**
     * Galeya
     */
    public const GAR = 'gar';

    /**
     * Adiwasi Garasia
     */
    public const GAS = 'gas';

    /**
     * Kenati
     */
    public const GAT = 'gat';

    /**
     * Mudhili Gadaba
     */
    public const GAU = 'gau';

    /**
     * Nobonob
     */
    public const GAW = 'gaw';

    /**
     * Borana-Arsi-Guji Oromo
     */
    public const GAX = 'gax';

    /**
     * Gayo
     */
    public const GAY = 'gay';

    /**
     * West Central Oromo
     */
    public const GAZ = 'gaz';

    /**
     * Gbaya (Central African Republic)
     */
    public const GBA = 'gba';

    /**
     * Kaytetye
     */
    public const GBB = 'gbb';

    /**
     * Karajarri
     */
    public const GBD = 'gbd';

    /**
     * Niksek
     */
    public const GBE = 'gbe';

    /**
     * Gaikundi
     */
    public const GBF = 'gbf';

    /**
     * Gbanziri
     */
    public const GBG = 'gbg';

    /**
     * Defi Gbe
     */
    public const GBH = 'gbh';

    /**
     * Galela
     */
    public const GBI = 'gbi';

    /**
     * Bodo Gadaba
     */
    public const GBJ = 'gbj';

    /**
     * Gaddi
     */
    public const GBK = 'gbk';

    /**
     * Gamit
     */
    public const GBL = 'gbl';

    /**
     * Garhwali
     */
    public const GBM = 'gbm';

    /**
     * Mo'da
     */
    public const GBN = 'gbn';

    /**
     * Northern Grebo
     */
    public const GBO = 'gbo';

    /**
     * Gbaya-Bossangoa
     */
    public const GBP = 'gbp';

    /**
     * Gbaya-Bozoum
     */
    public const GBQ = 'gbq';

    /**
     * Gbagyi
     */
    public const GBR = 'gbr';

    /**
     * Gbesi Gbe
     */
    public const GBS = 'gbs';

    /**
     * Gagadu
     */
    public const GBU = 'gbu';

    /**
     * Gbanu
     */
    public const GBV = 'gbv';

    /**
     * Gabi-Gabi
     */
    public const GBW = 'gbw';

    /**
     * Eastern Xwla Gbe
     */
    public const GBX = 'gbx';

    /**
     * Gbari
     */
    public const GBY = 'gby';

    /**
     * Zoroastrian Dari
     */
    public const GBZ = 'gbz';

    /**
     * Mali
     */
    public const GCC = 'gcc';

    /**
     * Ganggalida
     */
    public const GCD = 'gcd';

    /**
     * Galice
     */
    public const GCE = 'gce';

    /**
     * Guadeloupean Creole French
     */
    public const GCF = 'gcf';

    /**
     * Grenadian Creole English
     */
    public const GCL = 'gcl';

    /**
     * Gaina
     */
    public const GCN = 'gcn';

    /**
     * Guianese Creole French
     */
    public const GCR = 'gcr';

    /**
     * Colonia Tovar German
     */
    public const GCT = 'gct';

    /**
     * Gade Lohar
     */
    public const GDA = 'gda';

    /**
     * Pottangi Ollar Gadaba
     */
    public const GDB = 'gdb';

    /**
     * Gugu Badhun
     */
    public const GDC = 'gdc';

    /**
     * Gedaged
     */
    public const GDD = 'gdd';

    /**
     * Gude
     */
    public const GDE = 'gde';

    /**
     * Guduf-Gava
     */
    public const GDF = 'gdf';

    /**
     * Ga'dang
     */
    public const GDG = 'gdg';

    /**
     * Gadjerawang
     */
    public const GDH = 'gdh';

    /**
     * Gundi
     */
    public const GDI = 'gdi';

    /**
     * Gurdjar
     */
    public const GDJ = 'gdj';

    /**
     * Gadang
     */
    public const GDK = 'gdk';

    /**
     * Dirasha
     */
    public const GDL = 'gdl';

    /**
     * Laal
     */
    public const GDM = 'gdm';

    /**
     * Umanakaina
     */
    public const GDN = 'gdn';

    /**
     * Ghodoberi
     */
    public const GDO = 'gdo';

    /**
     * Mehri
     */
    public const GDQ = 'gdq';

    /**
     * Wipi
     */
    public const GDR = 'gdr';

    /**
     * Ghandruk Sign Language
     */
    public const GDS = 'gds';

    /**
     * Kungardutyi
     */
    public const GDT = 'gdt';

    /**
     * Gudu
     */
    public const GDU = 'gdu';

    /**
     * Godwari
     */
    public const GDX = 'gdx';

    /**
     * Geruma
     */
    public const GEA = 'gea';

    /**
     * Kire
     */
    public const GEB = 'geb';

    /**
     * Gboloo Grebo
     */
    public const GEC = 'gec';

    /**
     * Gade
     */
    public const GED = 'ged';

    /**
     * Gerai
     */
    public const GEF = 'gef';

    /**
     * Gengle
     */
    public const GEG = 'geg';

    /**
     * Hutterite German
     */
    public const GEH = 'geh';

    /**
     * Gebe
     */
    public const GEI = 'gei';

    /**
     * Gen
     */
    public const GEJ = 'gej';

    /**
     * Ywom
     */
    public const GEK = 'gek';

    /**
     * ut-Ma'in
     */
    public const GEL = 'gel';

    /**
     * Geme
     */
    public const GEQ = 'geq';

    /**
     * Geser-Gorom
     */
    public const GES = 'ges';

    /**
     * Eviya
     */
    public const GEV = 'gev';

    /**
     * Gera
     */
    public const GEW = 'gew';

    /**
     * Garre
     */
    public const GEX = 'gex';

    /**
     * Enya
     */
    public const GEY = 'gey';

    /**
     * Geez
     */
    public const GEZ = 'gez';

    /**
     * Patpatar
     */
    public const GFK = 'gfk';

    /**
     * Gafat
     */
    public const GFT = 'gft';

    /**
     * Gao
     */
    public const GGA = 'gga';

    /**
     * Gbii
     */
    public const GGB = 'ggb';

    /**
     * Gugadj
     */
    public const GGD = 'ggd';

    /**
     * Gurr-goni
     */
    public const GGE = 'gge';

    /**
     * Gurgula
     */
    public const GGG = 'ggg';

    /**
     * Kungarakany
     */
    public const GGK = 'ggk';

    /**
     * Ganglau
     */
    public const GGL = 'ggl';

    /**
     * Gitua
     */
    public const GGT = 'ggt';

    /**
     * Gagu
     */
    public const GGU = 'ggu';

    /**
     * Gogodala
     */
    public const GGW = 'ggw';

    /**
     * Ghadamès
     */
    public const GHA = 'gha';

    /**
     * Hiberno-Scottish Gaelic
     */
    public const GHC = 'ghc';

    /**
     * Southern Ghale
     */
    public const GHE = 'ghe';

    /**
     * Northern Ghale
     */
    public const GHH = 'ghh';

    /**
     * Geko Karen
     */
    public const GHK = 'ghk';

    /**
     * Ghulfan
     */
    public const GHL = 'ghl';

    /**
     * Ghanongga
     */
    public const GHN = 'ghn';

    /**
     * Ghomara
     */
    public const GHO = 'gho';

    /**
     * Ghera
     */
    public const GHR = 'ghr';

    /**
     * Guhu-Samane
     */
    public const GHS = 'ghs';

    /**
     * Kuke
     */
    public const GHT = 'ght';

    /**
     * Kija
     */
    public const GIA = 'gia';

    /**
     * Gibanawa
     */
    public const GIB = 'gib';

    /**
     * Gail
     */
    public const GIC = 'gic';

    /**
     * Gidar
     */
    public const GID = 'gid';

    /**
     * Gaɓogbo
     */
    public const GIE = 'gie';

    /**
     * Goaria
     */
    public const GIG = 'gig';

    /**
     * Githabul
     */
    public const GIH = 'gih';

    /**
     * Girirra
     */
    public const GII = 'gii';

    /**
     * Gilbertese
     */
    public const GIL = 'gil';

    /**
     * Gimi (Eastern Highlands)
     */
    public const GIM = 'gim';

    /**
     * Hinukh
     */
    public const GIN = 'gin';

    /**
     * Gimi (West New Britain)
     */
    public const GIP = 'gip';

    /**
     * Green Gelao
     */
    public const GIQ = 'giq';

    /**
     * Red Gelao
     */
    public const GIR = 'gir';

    /**
     * North Giziga
     */
    public const GIS = 'gis';

    /**
     * Gitxsan
     */
    public const GIT = 'git';

    /**
     * Mulao
     */
    public const GIU = 'giu';

    /**
     * White Gelao
     */
    public const GIW = 'giw';

    /**
     * Gilima
     */
    public const GIX = 'gix';

    /**
     * Giyug
     */
    public const GIY = 'giy';

    /**
     * South Giziga
     */
    public const GIZ = 'giz';

    /**
     * Kachi Koli
     */
    public const GJK = 'gjk';

    /**
     * Gunditjmara
     */
    public const GJM = 'gjm';

    /**
     * Gonja
     */
    public const GJN = 'gjn';

    /**
     * Gurindji Kriol
     */
    public const GJR = 'gjr';

    /**
     * Gujari
     */
    public const GJU = 'gju';

    /**
     * Guya
     */
    public const GKA = 'gka';

    /**
     * Magɨ (Madang Province)
     */
    public const GKD = 'gkd';

    /**
     * Ndai
     */
    public const GKE = 'gke';

    /**
     * Gokana
     */
    public const GKN = 'gkn';

    /**
     * Kok-Nar
     */
    public const GKO = 'gko';

    /**
     * Guinea Kpelle
     */
    public const GKP = 'gkp';

    /**
     * ǂUngkue
     */
    public const GKU = 'gku';

    /**
     * Scottish Gaelic
     */
    public const GLA = 'gla';

    /**
     * Belning
     */
    public const GLB = 'glb';

    /**
     * Bon Gula
     */
    public const GLC = 'glc';

    /**
     * Nanai
     */
    public const GLD = 'gld';

    /**
     * Irish
     */
    public const GLE = 'gle';

    /**
     * Galician
     */
    public const GLG = 'glg';

    /**
     * Northwest Pashai
     */
    public const GLH = 'glh';

    /**
     * Gula Iro
     */
    public const GLJ = 'glj';

    /**
     * Gilaki
     */
    public const GLK = 'glk';

    /**
     * Garlali
     */
    public const GLL = 'gll';

    /**
     * Galambu
     */
    public const GLO = 'glo';

    /**
     * Glaro-Twabo
     */
    public const GLR = 'glr';

    /**
     * Gula (Chad)
     */
    public const GLU = 'glu';

    /**
     * Manx
     */
    public const GLV = 'glv';

    /**
     * Glavda
     */
    public const GLW = 'glw';

    /**
     * Gule
     */
    public const GLY = 'gly';

    /**
     * Gambera
     */
    public const GMA = 'gma';

    /**
     * Gula'alaa
     */
    public const GMB = 'gmb';

    /**
     * Mághdì
     */
    public const GMD = 'gmd';

    /**
     * Magɨyi
     */
    public const GMG = 'gmg';

    /**
     * Middle High German (ca. 1050-1500)
     */
    public const GMH = 'gmh';

    /**
     * Middle Low German
     */
    public const GML = 'gml';

    /**
     * Gbaya-Mbodomo
     */
    public const GMM = 'gmm';

    /**
     * Gimnime
     */
    public const GMN = 'gmn';

    /**
     * Mirning
     */
    public const GMR = 'gmr';

    /**
     * Gumalu
     */
    public const GMU = 'gmu';

    /**
     * Gamo
     */
    public const GMV = 'gmv';

    /**
     * Magoma
     */
    public const GMX = 'gmx';

    /**
     * Mycenaean Greek
     */
    public const GMY = 'gmy';

    /**
     * Mgbolizhia
     */
    public const GMZ = 'gmz';

    /**
     * Kaansa
     */
    public const GNA = 'gna';

    /**
     * Gangte
     */
    public const GNB = 'gnb';

    /**
     * Guanche
     */
    public const GNC = 'gnc';

    /**
     * Zulgo-Gemzek
     */
    public const GND = 'gnd';

    /**
     * Ganang
     */
    public const GNE = 'gne';

    /**
     * Ngangam
     */
    public const GNG = 'gng';

    /**
     * Lere
     */
    public const GNH = 'gnh';

    /**
     * Gooniyandi
     */
    public const GNI = 'gni';

    /**
     * Ngen
     */
    public const GNJ = 'gnj';

    /**
     * ǁGana
     */
    public const GNK = 'gnk';

    /**
     * Gangulu
     */
    public const GNL = 'gnl';

    /**
     * Ginuman
     */
    public const GNM = 'gnm';

    /**
     * Gumatj
     */
    public const GNN = 'gnn';

    /**
     * Northern Gondi
     */
    public const GNO = 'gno';

    /**
     * Gana
     */
    public const GNQ = 'gnq';

    /**
     * Gureng Gureng
     */
    public const GNR = 'gnr';

    /**
     * Guntai
     */
    public const GNT = 'gnt';

    /**
     * Gnau
     */
    public const GNU = 'gnu';

    /**
     * Western Bolivian Guaraní
     */
    public const GNW = 'gnw';

    /**
     * Ganzi
     */
    public const GNZ = 'gnz';

    /**
     * Guro
     */
    public const GOA = 'goa';

    /**
     * Playero
     */
    public const GOB = 'gob';

    /**
     * Gorakor
     */
    public const GOC = 'goc';

    /**
     * Godié
     */
    public const GOD = 'god';

    /**
     * Gongduk
     */
    public const GOE = 'goe';

    /**
     * Gofa
     */
    public const GOF = 'gof';

    /**
     * Gogo
     */
    public const GOG = 'gog';

    /**
     * Old High German (ca. 750-1050)
     */
    public const GOH = 'goh';

    /**
     * Gobasi
     */
    public const GOI = 'goi';

    /**
     * Gowlan
     */
    public const GOJ = 'goj';

    /**
     * Gowli
     */
    public const GOK = 'gok';

    /**
     * Gola
     */
    public const GOL = 'gol';

    /**
     * Goan Konkani
     */
    public const GOM = 'gom';

    /**
     * Gondi
     */
    public const GON = 'gon';

    /**
     * Gone Dau
     */
    public const GOO = 'goo';

    /**
     * Yeretuar
     */
    public const GOP = 'gop';

    /**
     * Gorap
     */
    public const GOQ = 'goq';

    /**
     * Gorontalo
     */
    public const GOR = 'gor';

    /**
     * Gronings
     */
    public const GOS = 'gos';

    /**
     * Gothic
     */
    public const GOT = 'got';

    /**
     * Gavar
     */
    public const GOU = 'gou';

    /**
     * Goo
     */
    public const GOV = 'gov';

    /**
     * Gorowa
     */
    public const GOW = 'gow';

    /**
     * Gobu
     */
    public const GOX = 'gox';

    /**
     * Goundo
     */
    public const GOY = 'goy';

    /**
     * Gozarkhani
     */
    public const GOZ = 'goz';

    /**
     * Gupa-Abawa
     */
    public const GPA = 'gpa';

    /**
     * Ghanaian Pidgin English
     */
    public const GPE = 'gpe';

    /**
     * Taiap
     */
    public const GPN = 'gpn';

    /**
     * Ga'anda
     */
    public const GQA = 'gqa';

    /**
     * Guiqiong
     */
    public const GQI = 'gqi';

    /**
     * Guana (Brazil)
     */
    public const GQN = 'gqn';

    /**
     * Gor
     */
    public const GQR = 'gqr';

    /**
     * Qau
     */
    public const GQU = 'gqu';

    /**
     * Rajput Garasia
     */
    public const GRA = 'gra';

    /**
     * Grebo
     */
    public const GRB = 'grb';

    /**
     * Ancient Greek (to 1453)
     */
    public const GRC = 'grc';

    /**
     * Guruntum-Mbaaru
     */
    public const GRD = 'grd';

    /**
     * Madi
     */
    public const GRG = 'grg';

    /**
     * Gbiri-Niragu
     */
    public const GRH = 'grh';

    /**
     * Ghari
     */
    public const GRI = 'gri';

    /**
     * Southern Grebo
     */
    public const GRJ = 'grj';

    /**
     * Kota Marudu Talantang
     */
    public const GRM = 'grm';

    /**
     * Guarani
     */
    public const GRN = 'grn';

    /**
     * Groma
     */
    public const GRO = 'gro';

    /**
     * Gorovu
     */
    public const GRQ = 'grq';

    /**
     * Taznatit
     */
    public const GRR = 'grr';

    /**
     * Gresi
     */
    public const GRS = 'grs';

    /**
     * Garo
     */
    public const GRT = 'grt';

    /**
     * Kistane
     */
    public const GRU = 'gru';

    /**
     * Central Grebo
     */
    public const GRV = 'grv';

    /**
     * Gweda
     */
    public const GRW = 'grw';

    /**
     * Guriaso
     */
    public const GRX = 'grx';

    /**
     * Barclayville Grebo
     */
    public const GRY = 'gry';

    /**
     * Guramalum
     */
    public const GRZ = 'grz';

    /**
     * Ghanaian Sign Language
     */
    public const GSE = 'gse';

    /**
     * German Sign Language
     */
    public const GSG = 'gsg';

    /**
     * Gusilay
     */
    public const GSL = 'gsl';

    /**
     * Guatemalan Sign Language
     */
    public const GSM = 'gsm';

    /**
     * Nema
     */
    public const GSN = 'gsn';

    /**
     * Southwest Gbaya
     */
    public const GSO = 'gso';

    /**
     * Wasembo
     */
    public const GSP = 'gsp';

    /**
     * Greek Sign Language
     */
    public const GSS = 'gss';

    /**
     * Swiss German
     */
    public const GSW = 'gsw';

    /**
     * Guató
     */
    public const GTA = 'gta';

    /**
     * Aghu-Tharnggala
     */
    public const GTU = 'gtu';

    /**
     * Shiki
     */
    public const GUA = 'gua';

    /**
     * Guajajára
     */
    public const GUB = 'gub';

    /**
     * Wayuu
     */
    public const GUC = 'guc';

    /**
     * Yocoboué Dida
     */
    public const GUD = 'gud';

    /**
     * Gurindji
     */
    public const GUE = 'gue';

    /**
     * Gupapuyngu
     */
    public const GUF = 'guf';

    /**
     * Paraguayan Guaraní
     */
    public const GUG = 'gug';

    /**
     * Guahibo
     */
    public const GUH = 'guh';

    /**
     * Eastern Bolivian Guaraní
     */
    public const GUI = 'gui';

    /**
     * Gujarati
     */
    public const GUJ = 'guj';

    /**
     * Gumuz
     */
    public const GUK = 'guk';

    /**
     * Sea Island Creole English
     */
    public const GUL = 'gul';

    /**
     * Guambiano
     */
    public const GUM = 'gum';

    /**
     * Mbyá Guaraní
     */
    public const GUN = 'gun';

    /**
     * Guayabero
     */
    public const GUO = 'guo';

    /**
     * Gunwinggu
     */
    public const GUP = 'gup';

    /**
     * Aché
     */
    public const GUQ = 'guq';

    /**
     * Farefare
     */
    public const GUR = 'gur';

    /**
     * Guinean Sign Language
     */
    public const GUS = 'gus';

    /**
     * Maléku Jaíka
     */
    public const GUT = 'gut';

    /**
     * Yanomamö
     */
    public const GUU = 'guu';

    /**
     * Gun
     */
    public const GUW = 'guw';

    /**
     * Gourmanchéma
     */
    public const GUX = 'gux';

    /**
     * Gusii
     */
    public const GUZ = 'guz';

    /**
     * Guana (Paraguay)
     */
    public const GVA = 'gva';

    /**
     * Guanano
     */
    public const GVC = 'gvc';

    /**
     * Duwet
     */
    public const GVE = 'gve';

    /**
     * Golin
     */
    public const GVF = 'gvf';

    /**
     * Guajá
     */
    public const GVJ = 'gvj';

    /**
     * Gulay
     */
    public const GVL = 'gvl';

    /**
     * Gurmana
     */
    public const GVM = 'gvm';

    /**
     * Kuku-Yalanji
     */
    public const GVN = 'gvn';

    /**
     * Gavião Do Jiparaná
     */
    public const GVO = 'gvo';

    /**
     * Pará Gavião
     */
    public const GVP = 'gvp';

    /**
     * Gurung
     */
    public const GVR = 'gvr';

    /**
     * Gumawana
     */
    public const GVS = 'gvs';

    /**
     * Guyani
     */
    public const GVY = 'gvy';

    /**
     * Mbato
     */
    public const GWA = 'gwa';

    /**
     * Gwa
     */
    public const GWB = 'gwb';

    /**
     * Gawri
     */
    public const GWC = 'gwc';

    /**
     * Gawwada
     */
    public const GWD = 'gwd';

    /**
     * Gweno
     */
    public const GWE = 'gwe';

    /**
     * Gowro
     */
    public const GWF = 'gwf';

    /**
     * Moo
     */
    public const GWG = 'gwg';

    /**
     * Gwichʼin
     */
    public const GWI = 'gwi';

    /**
     * ǀGwi
     */
    public const GWJ = 'gwj';

    /**
     * Awngthim
     */
    public const GWM = 'gwm';

    /**
     * Gwandara
     */
    public const GWN = 'gwn';

    /**
     * Gwere
     */
    public const GWR = 'gwr';

    /**
     * Gawar-Bati
     */
    public const GWT = 'gwt';

    /**
     * Guwamu
     */
    public const GWU = 'gwu';

    /**
     * Kwini
     */
    public const GWW = 'gww';

    /**
     * Gua
     */
    public const GWX = 'gwx';

    /**
     * Wè Southern
     */
    public const GXX = 'gxx';

    /**
     * Northwest Gbaya
     */
    public const GYA = 'gya';

    /**
     * Garus
     */
    public const GYB = 'gyb';

    /**
     * Kayardild
     */
    public const GYD = 'gyd';

    /**
     * Gyem
     */
    public const GYE = 'gye';

    /**
     * Gungabula
     */
    public const GYF = 'gyf';

    /**
     * Gbayi
     */
    public const GYG = 'gyg';

    /**
     * Gyele
     */
    public const GYI = 'gyi';

    /**
     * Gayil
     */
    public const GYL = 'gyl';

    /**
     * Ngäbere
     */
    public const GYM = 'gym';

    /**
     * Guyanese Creole English
     */
    public const GYN = 'gyn';

    /**
     * Gyalsumdo
     */
    public const GYO = 'gyo';

    /**
     * Guarayu
     */
    public const GYR = 'gyr';

    /**
     * Gunya
     */
    public const GYY = 'gyy';

    /**
     * Geji
     */
    public const GYZ = 'gyz';

    /**
     * Ganza
     */
    public const GZA = 'gza';

    /**
     * Gazi
     */
    public const GZI = 'gzi';

    /**
     * Gane
     */
    public const GZN = 'gzn';

    /**
     * Hän
     */
    public const HAA = 'haa';

    /**
     * Hanoi Sign Language
     */
    public const HAB = 'hab';

    /**
     * Gurani
     */
    public const HAC = 'hac';

    /**
     * Hatam
     */
    public const HAD = 'had';

    /**
     * Eastern Oromo
     */
    public const HAE = 'hae';

    /**
     * Haiphong Sign Language
     */
    public const HAF = 'haf';

    /**
     * Hanga
     */
    public const HAG = 'hag';

    /**
     * Hahon
     */
    public const HAH = 'hah';

    /**
     * Haida
     */
    public const HAI = 'hai';

    /**
     * Hajong
     */
    public const HAJ = 'haj';

    /**
     * Hakka Chinese
     */
    public const HAK = 'hak';

    /**
     * Halang
     */
    public const HAL = 'hal';

    /**
     * Hewa
     */
    public const HAM = 'ham';

    /**
     * Hangaza
     */
    public const HAN = 'han';

    /**
     * Hakö
     */
    public const HAO = 'hao';

    /**
     * Hupla
     */
    public const HAP = 'hap';

    /**
     * Ha
     */
    public const HAQ = 'haq';

    /**
     * Harari
     */
    public const HAR = 'har';

    /**
     * Haisla
     */
    public const HAS = 'has';

    /**
     * Haitian
     */
    public const HAT = 'hat';

    /**
     * Hausa
     */
    public const HAU = 'hau';

    /**
     * Havu
     */
    public const HAV = 'hav';

    /**
     * Hawaiian
     */
    public const HAW = 'haw';

    /**
     * Southern Haida
     */
    public const HAX = 'hax';

    /**
     * Haya
     */
    public const HAY = 'hay';

    /**
     * Hazaragi
     */
    public const HAZ = 'haz';

    /**
     * Hamba
     */
    public const HBA = 'hba';

    /**
     * Huba
     */
    public const HBB = 'hbb';

    /**
     * Heiban
     */
    public const HBN = 'hbn';

    /**
     * Ancient Hebrew
     */
    public const HBO = 'hbo';

    /**
     * Serbo-Croatian : Code element for 639-1 has been deprecated
     */
    public const HBS = 'hbs';

    /**
     * Habu
     */
    public const HBU = 'hbu';

    /**
     * Andaman Creole Hindi
     */
    public const HCA = 'hca';

    /**
     * Huichol
     */
    public const HCH = 'hch';

    /**
     * Northern Haida
     */
    public const HDN = 'hdn';

    /**
     * Honduras Sign Language
     */
    public const HDS = 'hds';

    /**
     * Hadiyya
     */
    public const HDY = 'hdy';

    /**
     * Northern Qiandong Miao
     */
    public const HEA = 'hea';

    /**
     * Hebrew
     */
    public const HEB = 'heb';

    /**
     * Herdé
     */
    public const HED = 'hed';

    /**
     * Helong
     */
    public const HEG = 'heg';

    /**
     * Hehe
     */
    public const HEH = 'heh';

    /**
     * Heiltsuk
     */
    public const HEI = 'hei';

    /**
     * Hemba
     */
    public const HEM = 'hem';

    /**
     * Herero
     */
    public const HER = 'her';

    /**
     * Haiǁom
     */
    public const HGM = 'hgm';

    /**
     * Haigwai
     */
    public const HGW = 'hgw';

    /**
     * Hoia Hoia
     */
    public const HHI = 'hhi';

    /**
     * Kerak
     */
    public const HHR = 'hhr';

    /**
     * Hoyahoya
     */
    public const HHY = 'hhy';

    /**
     * Lamang
     */
    public const HIA = 'hia';

    /**
     * Hibito
     */
    public const HIB = 'hib';

    /**
     * Hidatsa
     */
    public const HID = 'hid';

    /**
     * Fiji Hindi
     */
    public const HIF = 'hif';

    /**
     * Kamwe
     */
    public const HIG = 'hig';

    /**
     * Pamosu
     */
    public const HIH = 'hih';

    /**
     * Hinduri
     */
    public const HII = 'hii';

    /**
     * Hijuk
     */
    public const HIJ = 'hij';

    /**
     * Seit-Kaitetu
     */
    public const HIK = 'hik';

    /**
     * Hiligaynon
     */
    public const HIL = 'hil';

    /**
     * Hindi
     */
    public const HIN = 'hin';

    /**
     * Tsoa
     */
    public const HIO = 'hio';

    /**
     * Himarimã
     */
    public const HIR = 'hir';

    /**
     * Hittite
     */
    public const HIT = 'hit';

    /**
     * Hiw
     */
    public const HIW = 'hiw';

    /**
     * Hixkaryána
     */
    public const HIX = 'hix';

    /**
     * Haji
     */
    public const HJI = 'hji';

    /**
     * Kahe
     */
    public const HKA = 'hka';

    /**
     * Hunde
     */
    public const HKE = 'hke';

    /**
     * Khah
     */
    public const HKH = 'hkh';

    /**
     * Hunjara-Kaina Ke
     */
    public const HKK = 'hkk';

    /**
     * Mel-Khaonh
     */
    public const HKN = 'hkn';

    /**
     * Hong Kong Sign Language
     */
    public const HKS = 'hks';

    /**
     * Halia
     */
    public const HLA = 'hla';

    /**
     * Halbi
     */
    public const HLB = 'hlb';

    /**
     * Halang Doan
     */
    public const HLD = 'hld';

    /**
     * Hlersu
     */
    public const HLE = 'hle';

    /**
     * Matu Chin
     */
    public const HLT = 'hlt';

    /**
     * Hieroglyphic Luwian
     */
    public const HLU = 'hlu';

    /**
     * Southern Mashan Hmong
     */
    public const HMA = 'hma';

    /**
     * Humburi Senni Songhay
     */
    public const HMB = 'hmb';

    /**
     * Central Huishui Hmong
     */
    public const HMC = 'hmc';

    /**
     * Large Flowery Miao
     */
    public const HMD = 'hmd';

    /**
     * Eastern Huishui Hmong
     */
    public const HME = 'hme';

    /**
     * Hmong Don
     */
    public const HMF = 'hmf';

    /**
     * Southwestern Guiyang Hmong
     */
    public const HMG = 'hmg';

    /**
     * Southwestern Huishui Hmong
     */
    public const HMH = 'hmh';

    /**
     * Northern Huishui Hmong
     */
    public const HMI = 'hmi';

    /**
     * Ge
     */
    public const HMJ = 'hmj';

    /**
     * Maek
     */
    public const HMK = 'hmk';

    /**
     * Luopohe Hmong
     */
    public const HML = 'hml';

    /**
     * Central Mashan Hmong
     */
    public const HMM = 'hmm';

    /**
     * Hmong
     */
    public const HMN = 'hmn';

    /**
     * Hiri Motu
     */
    public const HMO = 'hmo';

    /**
     * Northern Mashan Hmong
     */
    public const HMP = 'hmp';

    /**
     * Eastern Qiandong Miao
     */
    public const HMQ = 'hmq';

    /**
     * Hmar
     */
    public const HMR = 'hmr';

    /**
     * Southern Qiandong Miao
     */
    public const HMS = 'hms';

    /**
     * Hamtai
     */
    public const HMT = 'hmt';

    /**
     * Hamap
     */
    public const HMU = 'hmu';

    /**
     * Hmong Dô
     */
    public const HMV = 'hmv';

    /**
     * Western Mashan Hmong
     */
    public const HMW = 'hmw';

    /**
     * Southern Guiyang Hmong
     */
    public const HMY = 'hmy';

    /**
     * Hmong Shua
     */
    public const HMZ = 'hmz';

    /**
     * Mina (Cameroon)
     */
    public const HNA = 'hna';

    /**
     * Southern Hindko
     */
    public const HND = 'hnd';

    /**
     * Chhattisgarhi
     */
    public const HNE = 'hne';

    /**
     * Hungu
     */
    public const HNG = 'hng';

    /**
     * ǁAni
     */
    public const HNH = 'hnh';

    /**
     * Hani
     */
    public const HNI = 'hni';

    /**
     * Hmong Njua
     */
    public const HNJ = 'hnj';

    /**
     * Hainanese
     */
    public const HNM = 'hnm';

    /**
     * Hanunoo
     */
    public const HNN = 'hnn';

    /**
     * Northern Hindko
     */
    public const HNO = 'hno';

    /**
     * Caribbean Hindustani
     */
    public const HNS = 'hns';

    /**
     * Hung
     */
    public const HNU = 'hnu';

    /**
     * Hoava
     */
    public const HOA = 'hoa';

    /**
     * Mari (Madang Province)
     */
    public const HOB = 'hob';

    /**
     * Ho
     */
    public const HOC = 'hoc';

    /**
     * Holma
     */
    public const HOD = 'hod';

    /**
     * Horom
     */
    public const HOE = 'hoe';

    /**
     * Hobyót
     */
    public const HOH = 'hoh';

    /**
     * Holikachuk
     */
    public const HOI = 'hoi';

    /**
     * Hadothi
     */
    public const HOJ = 'hoj';

    /**
     * Holu
     */
    public const HOL = 'hol';

    /**
     * Homa
     */
    public const HOM = 'hom';

    /**
     * Holoholo
     */
    public const HOO = 'hoo';

    /**
     * Hopi
     */
    public const HOP = 'hop';

    /**
     * Horo
     */
    public const HOR = 'hor';

    /**
     * Ho Chi Minh City Sign Language
     */
    public const HOS = 'hos';

    /**
     * Hote
     */
    public const HOT = 'hot';

    /**
     * Hovongan
     */
    public const HOV = 'hov';

    /**
     * Honi
     */
    public const HOW = 'how';

    /**
     * Holiya
     */
    public const HOY = 'hoy';

    /**
     * Hozo
     */
    public const HOZ = 'hoz';

    /**
     * Hpon
     */
    public const HPO = 'hpo';

    /**
     * Hawai'i Sign Language (HSL)
     */
    public const HPS = 'hps';

    /**
     * Hrangkhol
     */
    public const HRA = 'hra';

    /**
     * Niwer Mil
     */
    public const HRC = 'hrc';

    /**
     * Hre
     */
    public const HRE = 'hre';

    /**
     * Haruku
     */
    public const HRK = 'hrk';

    /**
     * Horned Miao
     */
    public const HRM = 'hrm';

    /**
     * Haroi
     */
    public const HRO = 'hro';

    /**
     * Nhirrpi
     */
    public const HRP = 'hrp';

    /**
     * Hértevin
     */
    public const HRT = 'hrt';

    /**
     * Hruso
     */
    public const HRU = 'hru';

    /**
     * Croatian
     */
    public const HRV = 'hrv';

    /**
     * Warwar Feni
     */
    public const HRW = 'hrw';

    /**
     * Hunsrik
     */
    public const HRX = 'hrx';

    /**
     * Harzani
     */
    public const HRZ = 'hrz';

    /**
     * Upper Sorbian
     */
    public const HSB = 'hsb';

    /**
     * Hungarian Sign Language
     */
    public const HSH = 'hsh';

    /**
     * Hausa Sign Language
     */
    public const HSL = 'hsl';

    /**
     * Xiang Chinese
     */
    public const HSN = 'hsn';

    /**
     * Harsusi
     */
    public const HSS = 'hss';

    /**
     * Hoti
     */
    public const HTI = 'hti';

    /**
     * Minica Huitoto
     */
    public const HTO = 'hto';

    /**
     * Hadza
     */
    public const HTS = 'hts';

    /**
     * Hitu
     */
    public const HTU = 'htu';

    /**
     * Middle Hittite
     */
    public const HTX = 'htx';

    /**
     * Huambisa
     */
    public const HUB = 'hub';

    /**
     * ǂHua
     */
    public const HUC = 'huc';

    /**
     * Huaulu
     */
    public const HUD = 'hud';

    /**
     * San Francisco Del Mar Huave
     */
    public const HUE = 'hue';

    /**
     * Humene
     */
    public const HUF = 'huf';

    /**
     * Huachipaeri
     */
    public const HUG = 'hug';

    /**
     * Huilliche
     */
    public const HUH = 'huh';

    /**
     * Huli
     */
    public const HUI = 'hui';

    /**
     * Northern Guiyang Hmong
     */
    public const HUJ = 'huj';

    /**
     * Hulung
     */
    public const HUK = 'huk';

    /**
     * Hula
     */
    public const HUL = 'hul';

    /**
     * Hungana
     */
    public const HUM = 'hum';

    /**
     * Hungarian
     */
    public const HUN = 'hun';

    /**
     * Hu
     */
    public const HUO = 'huo';

    /**
     * Hupa
     */
    public const HUP = 'hup';

    /**
     * Tsat
     */
    public const HUQ = 'huq';

    /**
     * Halkomelem
     */
    public const HUR = 'hur';

    /**
     * Huastec
     */
    public const HUS = 'hus';

    /**
     * Humla
     */
    public const HUT = 'hut';

    /**
     * Murui Huitoto
     */
    public const HUU = 'huu';

    /**
     * San Mateo Del Mar Huave
     */
    public const HUV = 'huv';

    /**
     * Hukumina
     */
    public const HUW = 'huw';

    /**
     * Nüpode Huitoto
     */
    public const HUX = 'hux';

    /**
     * Hulaulá
     */
    public const HUY = 'huy';

    /**
     * Hunzib
     */
    public const HUZ = 'huz';

    /**
     * Haitian Vodoun Culture Language
     */
    public const HVC = 'hvc';

    /**
     * San Dionisio Del Mar Huave
     */
    public const HVE = 'hve';

    /**
     * Haveke
     */
    public const HVK = 'hvk';

    /**
     * Sabu
     */
    public const HVN = 'hvn';

    /**
     * Santa María Del Mar Huave
     */
    public const HVV = 'hvv';

    /**
     * Wané
     */
    public const HWA = 'hwa';

    /**
     * Hawai'i Creole English
     */
    public const HWC = 'hwc';

    /**
     * Hwana
     */
    public const HWO = 'hwo';

    /**
     * Hya
     */
    public const HYA = 'hya';

    /**
     * Armenian
     */
    public const HYE = 'hye';

    /**
     * Western Armenian
     */
    public const HYW = 'hyw';

    /**
     * Iaai
     */
    public const IAI = 'iai';

    /**
     * Iatmul
     */
    public const IAN = 'ian';

    /**
     * Purari
     */
    public const IAR = 'iar';

    /**
     * Iban
     */
    public const IBA = 'iba';

    /**
     * Ibibio
     */
    public const IBB = 'ibb';

    /**
     * Iwaidja
     */
    public const IBD = 'ibd';

    /**
     * Akpes
     */
    public const IBE = 'ibe';

    /**
     * Ibanag
     */
    public const IBG = 'ibg';

    /**
     * Bih
     */
    public const IBH = 'ibh';

    /**
     * Ibaloi
     */
    public const IBL = 'ibl';

    /**
     * Agoi
     */
    public const IBM = 'ibm';

    /**
     * Ibino
     */
    public const IBN = 'ibn';

    /**
     * Igbo
     */
    public const IBO = 'ibo';

    /**
     * Ibuoro
     */
    public const IBR = 'ibr';

    /**
     * Ibu
     */
    public const IBU = 'ibu';

    /**
     * Ibani
     */
    public const IBY = 'iby';

    /**
     * Ede Ica
     */
    public const ICA = 'ica';

    /**
     * Etkywan
     */
    public const ICH = 'ich';

    /**
     * Icelandic Sign Language
     */
    public const ICL = 'icl';

    /**
     * Islander Creole English
     */
    public const ICR = 'icr';

    /**
     * Idakho-Isukha-Tiriki
     */
    public const IDA = 'ida';

    /**
     * Indo-Portuguese
     */
    public const IDB = 'idb';

    /**
     * Idon
     */
    public const IDC = 'idc';

    /**
     * Ede Idaca
     */
    public const IDD = 'idd';

    /**
     * Idere
     */
    public const IDE = 'ide';

    /**
     * Idi
     */
    public const IDI = 'idi';

    /**
     * Ido
     */
    public const IDO = 'ido';

    /**
     * Indri
     */
    public const IDR = 'idr';

    /**
     * Idesa
     */
    public const IDS = 'ids';

    /**
     * Idaté
     */
    public const IDT = 'idt';

    /**
     * Idoma
     */
    public const IDU = 'idu';

    /**
     * Amganad Ifugao
     */
    public const IFA = 'ifa';

    /**
     * Batad Ifugao
     */
    public const IFB = 'ifb';

    /**
     * Ifè
     */
    public const IFE = 'ife';

    /**
     * Ifo
     */
    public const IFF = 'iff';

    /**
     * Tuwali Ifugao
     */
    public const IFK = 'ifk';

    /**
     * Teke-Fuumu
     */
    public const IFM = 'ifm';

    /**
     * Mayoyao Ifugao
     */
    public const IFU = 'ifu';

    /**
     * Keley-I Kallahan
     */
    public const IFY = 'ify';

    /**
     * Ebira
     */
    public const IGB = 'igb';

    /**
     * Igede
     */
    public const IGE = 'ige';

    /**
     * Igana
     */
    public const IGG = 'igg';

    /**
     * Igala
     */
    public const IGL = 'igl';

    /**
     * Kanggape
     */
    public const IGM = 'igm';

    /**
     * Ignaciano
     */
    public const IGN = 'ign';

    /**
     * Isebe
     */
    public const IGO = 'igo';

    /**
     * Interglossa
     */
    public const IGS = 'igs';

    /**
     * Igwe
     */
    public const IGW = 'igw';

    /**
     * Iha Based Pidgin
     */
    public const IHB = 'ihb';

    /**
     * Ihievbe
     */
    public const IHI = 'ihi';

    /**
     * Iha
     */
    public const IHP = 'ihp';

    /**
     * Bidhawal
     */
    public const IHW = 'ihw';

    /**
     * Sichuan Yi
     */
    public const III = 'iii';

    /**
     * Thiin
     */
    public const IIN = 'iin';

    /**
     * Izon
     */
    public const IJC = 'ijc';

    /**
     * Biseni
     */
    public const IJE = 'ije';

    /**
     * Ede Ije
     */
    public const IJJ = 'ijj';

    /**
     * Kalabari
     */
    public const IJN = 'ijn';

    /**
     * Southeast Ijo
     */
    public const IJS = 'ijs';

    /**
     * Eastern Canadian Inuktitut
     */
    public const IKE = 'ike';

    /**
     * Ikhin-Arokho
     */
    public const IKH = 'ikh';

    /**
     * Iko
     */
    public const IKI = 'iki';

    /**
     * Ika
     */
    public const IKK = 'ikk';

    /**
     * Ikulu
     */
    public const IKL = 'ikl';

    /**
     * Olulumo-Ikom
     */
    public const IKO = 'iko';

    /**
     * Ikpeshi
     */
    public const IKP = 'ikp';

    /**
     * Ikaranggal
     */
    public const IKR = 'ikr';

    /**
     * Inuit Sign Language
     */
    public const IKS = 'iks';

    /**
     * Inuinnaqtun
     */
    public const IKT = 'ikt';

    /**
     * Inuktitut
     */
    public const IKU = 'iku';

    /**
     * Iku-Gora-Ankwa
     */
    public const IKV = 'ikv';

    /**
     * Ikwere
     */
    public const IKW = 'ikw';

    /**
     * Ik
     */
    public const IKX = 'ikx';

    /**
     * Ikizu
     */
    public const IKZ = 'ikz';

    /**
     * Ile Ape
     */
    public const ILA = 'ila';

    /**
     * Ila
     */
    public const ILB = 'ilb';

    /**
     * Interlingue
     */
    public const ILE = 'ile';

    /**
     * Garig-Ilgar
     */
    public const ILG = 'ilg';

    /**
     * Ili Turki
     */
    public const ILI = 'ili';

    /**
     * Ilongot
     */
    public const ILK = 'ilk';

    /**
     * Iranun (Malaysia)
     */
    public const ILM = 'ilm';

    /**
     * Iloko
     */
    public const ILO = 'ilo';

    /**
     * Iranun (Philippines)
     */
    public const ILP = 'ilp';

    /**
     * International Sign
     */
    public const ILS = 'ils';

    /**
     * Ili'uun
     */
    public const ILU = 'ilu';

    /**
     * Ilue
     */
    public const ILV = 'ilv';

    /**
     * Mala Malasar
     */
    public const IMA = 'ima';

    /**
     * Anamgura
     */
    public const IMI = 'imi';

    /**
     * Miluk
     */
    public const IML = 'iml';

    /**
     * Imonda
     */
    public const IMN = 'imn';

    /**
     * Imbongu
     */
    public const IMO = 'imo';

    /**
     * Imroing
     */
    public const IMR = 'imr';

    /**
     * Marsian
     */
    public const IMS = 'ims';

    /**
     * Imotong
     */
    public const IMT = 'imt';

    /**
     * Milyan
     */
    public const IMY = 'imy';

    /**
     * Interlingua (International Auxiliary Language Association)
     */
    public const INA = 'ina';

    /**
     * Inga
     */
    public const INB = 'inb';

    /**
     * Indonesian
     */
    public const IND = 'ind';

    /**
     * Degexit'an
     */
    public const ING = 'ing';

    /**
     * Ingush
     */
    public const INH = 'inh';

    /**
     * Jungle Inga
     */
    public const INJ = 'inj';

    /**
     * Indonesian Sign Language
     */
    public const INL = 'inl';

    /**
     * Minaean
     */
    public const INM = 'inm';

    /**
     * Isinai
     */
    public const INN = 'inn';

    /**
     * Inoke-Yate
     */
    public const INO = 'ino';

    /**
     * Iñapari
     */
    public const INP = 'inp';

    /**
     * Indian Sign Language
     */
    public const INS = 'ins';

    /**
     * Intha
     */
    public const INT = 'int';

    /**
     * Ineseño
     */
    public const INZ = 'inz';

    /**
     * Inor
     */
    public const IOR = 'ior';

    /**
     * Tuma-Irumu
     */
    public const IOU = 'iou';

    /**
     * Iowa-Oto
     */
    public const IOW = 'iow';

    /**
     * Ipili
     */
    public const IPI = 'ipi';

    /**
     * Inupiaq
     */
    public const IPK = 'ipk';

    /**
     * Ipiko
     */
    public const IPO = 'ipo';

    /**
     * Iquito
     */
    public const IQU = 'iqu';

    /**
     * Ikwo
     */
    public const IQW = 'iqw';

    /**
     * Iresim
     */
    public const IRE = 'ire';

    /**
     * Irarutu
     */
    public const IRH = 'irh';

    /**
     * Rigwe
     */
    public const IRI = 'iri';

    /**
     * Iraqw
     */
    public const IRK = 'irk';

    /**
     * Irántxe
     */
    public const IRN = 'irn';

    /**
     * Ir
     */
    public const IRR = 'irr';

    /**
     * Irula
     */
    public const IRU = 'iru';

    /**
     * Kamberau
     */
    public const IRX = 'irx';

    /**
     * Iraya
     */
    public const IRY = 'iry';

    /**
     * Isabi
     */
    public const ISA = 'isa';

    /**
     * Isconahua
     */
    public const ISC = 'isc';

    /**
     * Isnag
     */
    public const ISD = 'isd';

    /**
     * Italian Sign Language
     */
    public const ISE = 'ise';

    /**
     * Irish Sign Language
     */
    public const ISG = 'isg';

    /**
     * Esan
     */
    public const ISH = 'ish';

    /**
     * Nkem-Nkum
     */
    public const ISI = 'isi';

    /**
     * Ishkashimi
     */
    public const ISK = 'isk';

    /**
     * Icelandic
     */
    public const ISL = 'isl';

    /**
     * Masimasi
     */
    public const ISM = 'ism';

    /**
     * Isanzu
     */
    public const ISN = 'isn';

    /**
     * Isoko
     */
    public const ISO = 'iso';

    /**
     * Israeli Sign Language
     */
    public const ISR = 'isr';

    /**
     * Istriot
     */
    public const IST = 'ist';

    /**
     * Isu (Menchum Division)
     */
    public const ISU = 'isu';

    /**
     * Interslavic
     */
    public const ISV = 'isv';

    /**
     * Italian
     */
    public const ITA = 'ita';

    /**
     * Binongan Itneg
     */
    public const ITB = 'itb';

    /**
     * Southern Tidung
     */
    public const ITD = 'itd';

    /**
     * Itene
     */
    public const ITE = 'ite';

    /**
     * Inlaod Itneg
     */
    public const ITI = 'iti';

    /**
     * Judeo-Italian
     */
    public const ITK = 'itk';

    /**
     * Itelmen
     */
    public const ITL = 'itl';

    /**
     * Itu Mbon Uzo
     */
    public const ITM = 'itm';

    /**
     * Itonama
     */
    public const ITO = 'ito';

    /**
     * Iteri
     */
    public const ITR = 'itr';

    /**
     * Isekiri
     */
    public const ITS = 'its';

    /**
     * Maeng Itneg
     */
    public const ITT = 'itt';

    /**
     * Itawit
     */
    public const ITV = 'itv';

    /**
     * Ito
     */
    public const ITW = 'itw';

    /**
     * Itik
     */
    public const ITX = 'itx';

    /**
     * Moyadan Itneg
     */
    public const ITY = 'ity';

    /**
     * Itzá
     */
    public const ITZ = 'itz';

    /**
     * Iu Mien
     */
    public const IUM = 'ium';

    /**
     * Ibatan
     */
    public const IVB = 'ivb';

    /**
     * Ivatan
     */
    public const IVV = 'ivv';

    /**
     * I-Wak
     */
    public const IWK = 'iwk';

    /**
     * Iwam
     */
    public const IWM = 'iwm';

    /**
     * Iwur
     */
    public const IWO = 'iwo';

    /**
     * Sepik Iwam
     */
    public const IWS = 'iws';

    /**
     * Ixcatec
     */
    public const IXC = 'ixc';

    /**
     * Ixil
     */
    public const IXL = 'ixl';

    /**
     * Iyayu
     */
    public const IYA = 'iya';

    /**
     * Mesaka
     */
    public const IYO = 'iyo';

    /**
     * Yaka (Congo)
     */
    public const IYX = 'iyx';

    /**
     * Ingrian
     */
    public const IZH = 'izh';

    /**
     * Kizamani
     */
    public const IZM = 'izm';

    /**
     * Izere
     */
    public const IZR = 'izr';

    /**
     * Izii
     */
    public const IZZ = 'izz';

    /**
     * Jamamadí
     */
    public const JAA = 'jaa';

    /**
     * Hyam
     */
    public const JAB = 'jab';

    /**
     * Popti'
     */
    public const JAC = 'jac';

    /**
     * Jahanka
     */
    public const JAD = 'jad';

    /**
     * Yabem
     */
    public const JAE = 'jae';

    /**
     * Jara
     */
    public const JAF = 'jaf';

    /**
     * Jah Hut
     */
    public const JAH = 'jah';

    /**
     * Zazao
     */
    public const JAJ = 'jaj';

    /**
     * Jakun
     */
    public const JAK = 'jak';

    /**
     * Yalahatan
     */
    public const JAL = 'jal';

    /**
     * Jamaican Creole English
     */
    public const JAM = 'jam';

    /**
     * Jandai
     */
    public const JAN = 'jan';

    /**
     * Yanyuwa
     */
    public const JAO = 'jao';

    /**
     * Yaqay
     */
    public const JAQ = 'jaq';

    /**
     * New Caledonian Javanese
     */
    public const JAS = 'jas';

    /**
     * Jakati
     */
    public const JAT = 'jat';

    /**
     * Yaur
     */
    public const JAU = 'jau';

    /**
     * Javanese
     */
    public const JAV = 'jav';

    /**
     * Jambi Malay
     */
    public const JAX = 'jax';

    /**
     * Yan-nhangu
     */
    public const JAY = 'jay';

    /**
     * Jawe
     */
    public const JAZ = 'jaz';

    /**
     * Judeo-Berber
     */
    public const JBE = 'jbe';

    /**
     * Badjiri
     */
    public const JBI = 'jbi';

    /**
     * Arandai
     */
    public const JBJ = 'jbj';

    /**
     * Barikewa
     */
    public const JBK = 'jbk';

    /**
     * Bijim
     */
    public const JBM = 'jbm';

    /**
     * Nafusi
     */
    public const JBN = 'jbn';

    /**
     * Lojban
     */
    public const JBO = 'jbo';

    /**
     * Jofotek-Bromnya
     */
    public const JBR = 'jbr';

    /**
     * Jabutí
     */
    public const JBT = 'jbt';

    /**
     * Jukun Takum
     */
    public const JBU = 'jbu';

    /**
     * Yawijibaya
     */
    public const JBW = 'jbw';

    /**
     * Jamaican Country Sign Language
     */
    public const JCS = 'jcs';

    /**
     * Krymchak
     */
    public const JCT = 'jct';

    /**
     * Jad
     */
    public const JDA = 'jda';

    /**
     * Jadgali
     */
    public const JDG = 'jdg';

    /**
     * Judeo-Tat
     */
    public const JDT = 'jdt';

    /**
     * Jebero
     */
    public const JEB = 'jeb';

    /**
     * Jerung
     */
    public const JEE = 'jee';

    /**
     * Jeh
     */
    public const JEH = 'jeh';

    /**
     * Yei
     */
    public const JEI = 'jei';

    /**
     * Jeri Kuo
     */
    public const JEK = 'jek';

    /**
     * Yelmek
     */
    public const JEL = 'jel';

    /**
     * Dza
     */
    public const JEN = 'jen';

    /**
     * Jere
     */
    public const JER = 'jer';

    /**
     * Manem
     */
    public const JET = 'jet';

    /**
     * Jonkor Bourmataguil
     */
    public const JEU = 'jeu';

    /**
     * Ngbee
     */
    public const JGB = 'jgb';

    /**
     * Judeo-Georgian
     */
    public const JGE = 'jge';

    /**
     * Gwak
     */
    public const JGK = 'jgk';

    /**
     * Ngomba
     */
    public const JGO = 'jgo';

    /**
     * Jehai
     */
    public const JHI = 'jhi';

    /**
     * Jhankot Sign Language
     */
    public const JHS = 'jhs';

    /**
     * Jina
     */
    public const JIA = 'jia';

    /**
     * Jibu
     */
    public const JIB = 'jib';

    /**
     * Tol
     */
    public const JIC = 'jic';

    /**
     * Bu (Kaduna State)
     */
    public const JID = 'jid';

    /**
     * Jilbe
     */
    public const JIE = 'jie';

    /**
     * Jingulu
     */
    public const JIG = 'jig';

    /**
     * sTodsde
     */
    public const JIH = 'jih';

    /**
     * Jiiddu
     */
    public const JII = 'jii';

    /**
     * Jilim
     */
    public const JIL = 'jil';

    /**
     * Jimi (Cameroon)
     */
    public const JIM = 'jim';

    /**
     * Jiamao
     */
    public const JIO = 'jio';

    /**
     * Guanyinqiao
     */
    public const JIQ = 'jiq';

    /**
     * Jita
     */
    public const JIT = 'jit';

    /**
     * Youle Jinuo
     */
    public const JIU = 'jiu';

    /**
     * Shuar
     */
    public const JIV = 'jiv';

    /**
     * Buyuan Jinuo
     */
    public const JIY = 'jiy';

    /**
     * Jejueo
     */
    public const JJE = 'jje';

    /**
     * Bankal
     */
    public const JJR = 'jjr';

    /**
     * Kaera
     */
    public const JKA = 'jka';

    /**
     * Mobwa Karen
     */
    public const JKM = 'jkm';

    /**
     * Kubo
     */
    public const JKO = 'jko';

    /**
     * Paku Karen
     */
    public const JKP = 'jkp';

    /**
     * Koro (India)
     */
    public const JKR = 'jkr';

    /**
     * Amami Koniya Sign Language
     */
    public const JKS = 'jks';

    /**
     * Labir
     */
    public const JKU = 'jku';

    /**
     * Ngile
     */
    public const JLE = 'jle';

    /**
     * Jamaican Sign Language
     */
    public const JLS = 'jls';

    /**
     * Dima
     */
    public const JMA = 'jma';

    /**
     * Zumbun
     */
    public const JMB = 'jmb';

    /**
     * Machame
     */
    public const JMC = 'jmc';

    /**
     * Yamdena
     */
    public const JMD = 'jmd';

    /**
     * Jimi (Nigeria)
     */
    public const JMI = 'jmi';

    /**
     * Jumli
     */
    public const JML = 'jml';

    /**
     * Makuri Naga
     */
    public const JMN = 'jmn';

    /**
     * Kamara
     */
    public const JMR = 'jmr';

    /**
     * Mashi (Nigeria)
     */
    public const JMS = 'jms';

    /**
     * Mouwase
     */
    public const JMW = 'jmw';

    /**
     * Western Juxtlahuaca Mixtec
     */
    public const JMX = 'jmx';

    /**
     * Jangshung
     */
    public const JNA = 'jna';

    /**
     * Jandavra
     */
    public const JND = 'jnd';

    /**
     * Yangman
     */
    public const JNG = 'jng';

    /**
     * Janji
     */
    public const JNI = 'jni';

    /**
     * Yemsa
     */
    public const JNJ = 'jnj';

    /**
     * Rawat
     */
    public const JNL = 'jnl';

    /**
     * Jaunsari
     */
    public const JNS = 'jns';

    /**
     * Joba
     */
    public const JOB = 'job';

    /**
     * Wojenaka
     */
    public const JOD = 'jod';

    /**
     * Jogi
     */
    public const JOG = 'jog';

    /**
     * Jorá
     */
    public const JOR = 'jor';

    /**
     * Jordanian Sign Language
     */
    public const JOS = 'jos';

    /**
     * Jowulu
     */
    public const JOW = 'jow';

    /**
     * Jewish Palestinian Aramaic
     */
    public const JPA = 'jpa';

    /**
     * Japanese
     */
    public const JPN = 'jpn';

    /**
     * Judeo-Persian
     */
    public const JPR = 'jpr';

    /**
     * Jaqaru
     */
    public const JQR = 'jqr';

    /**
     * Jarai
     */
    public const JRA = 'jra';

    /**
     * Judeo-Arabic
     */
    public const JRB = 'jrb';

    /**
     * Jiru
     */
    public const JRR = 'jrr';

    /**
     * Jakattoe
     */
    public const JRT = 'jrt';

    /**
     * Japrería
     */
    public const JRU = 'jru';

    /**
     * Japanese Sign Language
     */
    public const JSL = 'jsl';

    /**
     * Júma
     */
    public const JUA = 'jua';

    /**
     * Wannu
     */
    public const JUB = 'jub';

    /**
     * Jurchen
     */
    public const JUC = 'juc';

    /**
     * Worodougou
     */
    public const JUD = 'jud';

    /**
     * Hõne
     */
    public const JUH = 'juh';

    /**
     * Ngadjuri
     */
    public const JUI = 'jui';

    /**
     * Wapan
     */
    public const JUK = 'juk';

    /**
     * Jirel
     */
    public const JUL = 'jul';

    /**
     * Jumjum
     */
    public const JUM = 'jum';

    /**
     * Juang
     */
    public const JUN = 'jun';

    /**
     * Jiba
     */
    public const JUO = 'juo';

    /**
     * Hupdë
     */
    public const JUP = 'jup';

    /**
     * Jurúna
     */
    public const JUR = 'jur';

    /**
     * Jumla Sign Language
     */
    public const JUS = 'jus';

    /**
     * Jutish
     */
    public const JUT = 'jut';

    /**
     * Ju
     */
    public const JUU = 'juu';

    /**
     * Wãpha
     */
    public const JUW = 'juw';

    /**
     * Juray
     */
    public const JUY = 'juy';

    /**
     * Javindo
     */
    public const JVD = 'jvd';

    /**
     * Caribbean Javanese
     */
    public const JVN = 'jvn';

    /**
     * Jwira-Pepesa
     */
    public const JWI = 'jwi';

    /**
     * Jiarong
     */
    public const JYA = 'jya';

    /**
     * Judeo-Yemeni Arabic
     */
    public const JYE = 'jye';

    /**
     * Jaya
     */
    public const JYY = 'jyy';

    /**
     * Kara-Kalpak
     */
    public const KAA = 'kaa';

    /**
     * Kabyle
     */
    public const KAB = 'kab';

    /**
     * Kachin
     */
    public const KAC = 'kac';

    /**
     * Adara
     */
    public const KAD = 'kad';

    /**
     * Ketangalan
     */
    public const KAE = 'kae';

    /**
     * Katso
     */
    public const KAF = 'kaf';

    /**
     * Kajaman
     */
    public const KAG = 'kag';

    /**
     * Kara (Central African Republic)
     */
    public const KAH = 'kah';

    /**
     * Karekare
     */
    public const KAI = 'kai';

    /**
     * Jju
     */
    public const KAJ = 'kaj';

    /**
     * Kalanguya
     */
    public const KAK = 'kak';

    /**
     * Kalaallisut
     */
    public const KAL = 'kal';

    /**
     * Kamba (Kenya)
     */
    public const KAM = 'kam';

    /**
     * Kannada
     */
    public const KAN = 'kan';

    /**
     * Xaasongaxango
     */
    public const KAO = 'kao';

    /**
     * Bezhta
     */
    public const KAP = 'kap';

    /**
     * Capanahua
     */
    public const KAQ = 'kaq';

    /**
     * Kashmiri
     */
    public const KAS = 'kas';

    /**
     * Georgian
     */
    public const KAT = 'kat';

    /**
     * Kanuri
     */
    public const KAU = 'kau';

    /**
     * Katukína
     */
    public const KAV = 'kav';

    /**
     * Kawi
     */
    public const KAW = 'kaw';

    /**
     * Kao
     */
    public const KAX = 'kax';

    /**
     * Kamayurá
     */
    public const KAY = 'kay';

    /**
     * Kazakh
     */
    public const KAZ = 'kaz';

    /**
     * Kalarko
     */
    public const KBA = 'kba';

    /**
     * Kaxuiâna
     */
    public const KBB = 'kbb';

    /**
     * Kadiwéu
     */
    public const KBC = 'kbc';

    /**
     * Kabardian
     */
    public const KBD = 'kbd';

    /**
     * Kanju
     */
    public const KBE = 'kbe';

    /**
     * Khamba
     */
    public const KBG = 'kbg';

    /**
     * Camsá
     */
    public const KBH = 'kbh';

    /**
     * Kaptiau
     */
    public const KBI = 'kbi';

    /**
     * Kari
     */
    public const KBJ = 'kbj';

    /**
     * Grass Koiari
     */
    public const KBK = 'kbk';

    /**
     * Kanembu
     */
    public const KBL = 'kbl';

    /**
     * Iwal
     */
    public const KBM = 'kbm';

    /**
     * Kare (Central African Republic)
     */
    public const KBN = 'kbn';

    /**
     * Keliko
     */
    public const KBO = 'kbo';

    /**
     * Kabiyè
     */
    public const KBP = 'kbp';

    /**
     * Kamano
     */
    public const KBQ = 'kbq';

    /**
     * Kafa
     */
    public const KBR = 'kbr';

    /**
     * Kande
     */
    public const KBS = 'kbs';

    /**
     * Abadi
     */
    public const KBT = 'kbt';

    /**
     * Kabutra
     */
    public const KBU = 'kbu';

    /**
     * Dera (Indonesia)
     */
    public const KBV = 'kbv';

    /**
     * Kaiep
     */
    public const KBW = 'kbw';

    /**
     * Ap Ma
     */
    public const KBX = 'kbx';

    /**
     * Manga Kanuri
     */
    public const KBY = 'kby';

    /**
     * Duhwa
     */
    public const KBZ = 'kbz';

    /**
     * Khanty
     */
    public const KCA = 'kca';

    /**
     * Kawacha
     */
    public const KCB = 'kcb';

    /**
     * Lubila
     */
    public const KCC = 'kcc';

    /**
     * Ngkâlmpw Kanum
     */
    public const KCD = 'kcd';

    /**
     * Kaivi
     */
    public const KCE = 'kce';

    /**
     * Ukaan
     */
    public const KCF = 'kcf';

    /**
     * Tyap
     */
    public const KCG = 'kcg';

    /**
     * Vono
     */
    public const KCH = 'kch';

    /**
     * Ngyian
     */
    public const KCI = 'kci';

    /**
     * Kobiana
     */
    public const KCJ = 'kcj';

    /**
     * Kalanga
     */
    public const KCK = 'kck';

    /**
     * Kela (Papua New Guinea)
     */
    public const KCL = 'kcl';

    /**
     * Gula (Central African Republic)
     */
    public const KCM = 'kcm';

    /**
     * Nubi
     */
    public const KCN = 'kcn';

    /**
     * Kinalakna
     */
    public const KCO = 'kco';

    /**
     * Kanga
     */
    public const KCP = 'kcp';

    /**
     * Kamo
     */
    public const KCQ = 'kcq';

    /**
     * Katla
     */
    public const KCR = 'kcr';

    /**
     * Koenoem
     */
    public const KCS = 'kcs';

    /**
     * Kaian
     */
    public const KCT = 'kct';

    /**
     * Kami (Tanzania)
     */
    public const KCU = 'kcu';

    /**
     * Kete
     */
    public const KCV = 'kcv';

    /**
     * Kabwari
     */
    public const KCW = 'kcw';

    /**
     * Kachama-Ganjule
     */
    public const KCX = 'kcx';

    /**
     * Korandje
     */
    public const KCY = 'kcy';

    /**
     * Konongo
     */
    public const KCZ = 'kcz';

    /**
     * Worimi
     */
    public const KDA = 'kda';

    /**
     * Kutu
     */
    public const KDC = 'kdc';

    /**
     * Yankunytjatjara
     */
    public const KDD = 'kdd';

    /**
     * Makonde
     */
    public const KDE = 'kde';

    /**
     * Mamusi
     */
    public const KDF = 'kdf';

    /**
     * Seba
     */
    public const KDG = 'kdg';

    /**
     * Tem
     */
    public const KDH = 'kdh';

    /**
     * Kumam
     */
    public const KDI = 'kdi';

    /**
     * Karamojong
     */
    public const KDJ = 'kdj';

    /**
     * Numèè
     */
    public const KDK = 'kdk';

    /**
     * Tsikimba
     */
    public const KDL = 'kdl';

    /**
     * Kagoma
     */
    public const KDM = 'kdm';

    /**
     * Kunda
     */
    public const KDN = 'kdn';

    /**
     * Kaningdon-Nindem
     */
    public const KDP = 'kdp';

    /**
     * Koch
     */
    public const KDQ = 'kdq';

    /**
     * Karaim
     */
    public const KDR = 'kdr';

    /**
     * Kuy
     */
    public const KDT = 'kdt';

    /**
     * Kadaru
     */
    public const KDU = 'kdu';

    /**
     * Koneraw
     */
    public const KDW = 'kdw';

    /**
     * Kam
     */
    public const KDX = 'kdx';

    /**
     * Keder
     */
    public const KDY = 'kdy';

    /**
     * Kwaja
     */
    public const KDZ = 'kdz';

    /**
     * Kabuverdianu
     */
    public const KEA = 'kea';

    /**
     * Kélé
     */
    public const KEB = 'keb';

    /**
     * Keiga
     */
    public const KEC = 'kec';

    /**
     * Kerewe
     */
    public const KED = 'ked';

    /**
     * Eastern Keres
     */
    public const KEE = 'kee';

    /**
     * Kpessi
     */
    public const KEF = 'kef';

    /**
     * Tese
     */
    public const KEG = 'keg';

    /**
     * Keak
     */
    public const KEH = 'keh';

    /**
     * Kei
     */
    public const KEI = 'kei';

    /**
     * Kadar
     */
    public const KEJ = 'kej';

    /**
     * Kekchí
     */
    public const KEK = 'kek';

    /**
     * Kela (Democratic Republic of Congo)
     */
    public const KEL = 'kel';

    /**
     * Kemak
     */
    public const KEM = 'kem';

    /**
     * Kenyang
     */
    public const KEN = 'ken';

    /**
     * Kakwa
     */
    public const KEO = 'keo';

    /**
     * Kaikadi
     */
    public const KEP = 'kep';

    /**
     * Kamar
     */
    public const KEQ = 'keq';

    /**
     * Kera
     */
    public const KER = 'ker';

    /**
     * Kugbo
     */
    public const KES = 'kes';

    /**
     * Ket
     */
    public const KET = 'ket';

    /**
     * Akebu
     */
    public const KEU = 'keu';

    /**
     * Kanikkaran
     */
    public const KEV = 'kev';

    /**
     * West Kewa
     */
    public const KEW = 'kew';

    /**
     * Kukna
     */
    public const KEX = 'kex';

    /**
     * Kupia
     */
    public const KEY = 'key';

    /**
     * Kukele
     */
    public const KEZ = 'kez';

    /**
     * Kodava
     */
    public const KFA = 'kfa';

    /**
     * Northwestern Kolami
     */
    public const KFB = 'kfb';

    /**
     * Konda-Dora
     */
    public const KFC = 'kfc';

    /**
     * Korra Koraga
     */
    public const KFD = 'kfd';

    /**
     * Kota (India)
     */
    public const KFE = 'kfe';

    /**
     * Koya
     */
    public const KFF = 'kff';

    /**
     * Kudiya
     */
    public const KFG = 'kfg';

    /**
     * Kurichiya
     */
    public const KFH = 'kfh';

    /**
     * Kannada Kurumba
     */
    public const KFI = 'kfi';

    /**
     * Kemiehua
     */
    public const KFJ = 'kfj';

    /**
     * Kinnauri
     */
    public const KFK = 'kfk';

    /**
     * Kung
     */
    public const KFL = 'kfl';

    /**
     * Khunsari
     */
    public const KFM = 'kfm';

    /**
     * Kuk
     */
    public const KFN = 'kfn';

    /**
     * Koro (Côte d'Ivoire)
     */
    public const KFO = 'kfo';

    /**
     * Korwa
     */
    public const KFP = 'kfp';

    /**
     * Korku
     */
    public const KFQ = 'kfq';

    /**
     * Kachhi
     */
    public const KFR = 'kfr';

    /**
     * Bilaspuri
     */
    public const KFS = 'kfs';

    /**
     * Kanjari
     */
    public const KFT = 'kft';

    /**
     * Katkari
     */
    public const KFU = 'kfu';

    /**
     * Kurmukar
     */
    public const KFV = 'kfv';

    /**
     * Kharam Naga
     */
    public const KFW = 'kfw';

    /**
     * Kullu Pahari
     */
    public const KFX = 'kfx';

    /**
     * Kumaoni
     */
    public const KFY = 'kfy';

    /**
     * Koromfé
     */
    public const KFZ = 'kfz';

    /**
     * Koyaga
     */
    public const KGA = 'kga';

    /**
     * Kawe
     */
    public const KGB = 'kgb';

    /**
     * Komering
     */
    public const KGE = 'kge';

    /**
     * Kube
     */
    public const KGF = 'kgf';

    /**
     * Kusunda
     */
    public const KGG = 'kgg';

    /**
     * Selangor Sign Language
     */
    public const KGI = 'kgi';

    /**
     * Gamale Kham
     */
    public const KGJ = 'kgj';

    /**
     * Kaiwá
     */
    public const KGK = 'kgk';

    /**
     * Kunggari
     */
    public const KGL = 'kgl';

    /**
     * Karingani
     */
    public const KGN = 'kgn';

    /**
     * Krongo
     */
    public const KGO = 'kgo';

    /**
     * Kaingang
     */
    public const KGP = 'kgp';

    /**
     * Kamoro
     */
    public const KGQ = 'kgq';

    /**
     * Abun
     */
    public const KGR = 'kgr';

    /**
     * Kumbainggar
     */
    public const KGS = 'kgs';

    /**
     * Somyev
     */
    public const KGT = 'kgt';

    /**
     * Kobol
     */
    public const KGU = 'kgu';

    /**
     * Karas
     */
    public const KGV = 'kgv';

    /**
     * Karon Dori
     */
    public const KGW = 'kgw';

    /**
     * Kamaru
     */
    public const KGX = 'kgx';

    /**
     * Kyerung
     */
    public const KGY = 'kgy';

    /**
     * Khasi
     */
    public const KHA = 'kha';

    /**
     * Lü
     */
    public const KHB = 'khb';

    /**
     * Tukang Besi North
     */
    public const KHC = 'khc';

    /**
     * Bädi Kanum
     */
    public const KHD = 'khd';

    /**
     * Korowai
     */
    public const KHE = 'khe';

    /**
     * Khuen
     */
    public const KHF = 'khf';

    /**
     * Khams Tibetan
     */
    public const KHG = 'khg';

    /**
     * Kehu
     */
    public const KHH = 'khh';

    /**
     * Kuturmi
     */
    public const KHJ = 'khj';

    /**
     * Halh Mongolian
     */
    public const KHK = 'khk';

    /**
     * Lusi
     */
    public const KHL = 'khl';

    /**
     * Khmer
     */
    public const KHM = 'khm';

    /**
     * Khandesi
     */
    public const KHN = 'khn';

    /**
     * Khotanese
     */
    public const KHO = 'kho';

    /**
     * Kapori
     */
    public const KHP = 'khp';

    /**
     * Koyra Chiini Songhay
     */
    public const KHQ = 'khq';

    /**
     * Kharia
     */
    public const KHR = 'khr';

    /**
     * Kasua
     */
    public const KHS = 'khs';

    /**
     * Khamti
     */
    public const KHT = 'kht';

    /**
     * Nkhumbi
     */
    public const KHU = 'khu';

    /**
     * Khvarshi
     */
    public const KHV = 'khv';

    /**
     * Khowar
     */
    public const KHW = 'khw';

    /**
     * Kanu
     */
    public const KHX = 'khx';

    /**
     * Kele (Democratic Republic of Congo)
     */
    public const KHY = 'khy';

    /**
     * Keapara
     */
    public const KHZ = 'khz';

    /**
     * Kim
     */
    public const KIA = 'kia';

    /**
     * Koalib
     */
    public const KIB = 'kib';

    /**
     * Kickapoo
     */
    public const KIC = 'kic';

    /**
     * Koshin
     */
    public const KID = 'kid';

    /**
     * Kibet
     */
    public const KIE = 'kie';

    /**
     * Eastern Parbate Kham
     */
    public const KIF = 'kif';

    /**
     * Kimaama
     */
    public const KIG = 'kig';

    /**
     * Kilmeri
     */
    public const KIH = 'kih';

    /**
     * Kitsai
     */
    public const KII = 'kii';

    /**
     * Kilivila
     */
    public const KIJ = 'kij';

    /**
     * Kikuyu
     */
    public const KIK = 'kik';

    /**
     * Kariya
     */
    public const KIL = 'kil';

    /**
     * Karagas
     */
    public const KIM = 'kim';

    /**
     * Kinyarwanda
     */
    public const KIN = 'kin';

    /**
     * Kiowa
     */
    public const KIO = 'kio';

    /**
     * Sheshi Kham
     */
    public const KIP = 'kip';

    /**
     * Kosadle
     */
    public const KIQ = 'kiq';

    /**
     * Kirghiz
     */
    public const KIR = 'kir';

    /**
     * Kis
     */
    public const KIS = 'kis';

    /**
     * Agob
     */
    public const KIT = 'kit';

    /**
     * Kirmanjki (individual language)
     */
    public const KIU = 'kiu';

    /**
     * Kimbu
     */
    public const KIV = 'kiv';

    /**
     * Northeast Kiwai
     */
    public const KIW = 'kiw';

    /**
     * Khiamniungan Naga
     */
    public const KIX = 'kix';

    /**
     * Kirikiri
     */
    public const KIY = 'kiy';

    /**
     * Kisi
     */
    public const KIZ = 'kiz';

    /**
     * Mlap
     */
    public const KJA = 'kja';

    /**
     * Q'anjob'al
     */
    public const KJB = 'kjb';

    /**
     * Coastal Konjo
     */
    public const KJC = 'kjc';

    /**
     * Southern Kiwai
     */
    public const KJD = 'kjd';

    /**
     * Kisar
     */
    public const KJE = 'kje';

    /**
     * Khmu
     */
    public const KJG = 'kjg';

    /**
     * Khakas
     */
    public const KJH = 'kjh';

    /**
     * Zabana
     */
    public const KJI = 'kji';

    /**
     * Khinalugh
     */
    public const KJJ = 'kjj';

    /**
     * Highland Konjo
     */
    public const KJK = 'kjk';

    /**
     * Western Parbate Kham
     */
    public const KJL = 'kjl';

    /**
     * Kháng
     */
    public const KJM = 'kjm';

    /**
     * Kunjen
     */
    public const KJN = 'kjn';

    /**
     * Harijan Kinnauri
     */
    public const KJO = 'kjo';

    /**
     * Pwo Eastern Karen
     */
    public const KJP = 'kjp';

    /**
     * Western Keres
     */
    public const KJQ = 'kjq';

    /**
     * Kurudu
     */
    public const KJR = 'kjr';

    /**
     * East Kewa
     */
    public const KJS = 'kjs';

    /**
     * Phrae Pwo Karen
     */
    public const KJT = 'kjt';

    /**
     * Kashaya
     */
    public const KJU = 'kju';

    /**
     * Kaikavian Literary Language
     */
    public const KJV = 'kjv';

    /**
     * Ramopa
     */
    public const KJX = 'kjx';

    /**
     * Erave
     */
    public const KJY = 'kjy';

    /**
     * Bumthangkha
     */
    public const KJZ = 'kjz';

    /**
     * Kakanda
     */
    public const KKA = 'kka';

    /**
     * Kwerisa
     */
    public const KKB = 'kkb';

    /**
     * Odoodee
     */
    public const KKC = 'kkc';

    /**
     * Kinuku
     */
    public const KKD = 'kkd';

    /**
     * Kakabe
     */
    public const KKE = 'kke';

    /**
     * Kalaktang Monpa
     */
    public const KKF = 'kkf';

    /**
     * Mabaka Valley Kalinga
     */
    public const KKG = 'kkg';

    /**
     * Khün
     */
    public const KKH = 'kkh';

    /**
     * Kagulu
     */
    public const KKI = 'kki';

    /**
     * Kako
     */
    public const KKJ = 'kkj';

    /**
     * Kokota
     */
    public const KKK = 'kkk';

    /**
     * Kosarek Yale
     */
    public const KKL = 'kkl';

    /**
     * Kiong
     */
    public const KKM = 'kkm';

    /**
     * Kon Keu
     */
    public const KKN = 'kkn';

    /**
     * Karko
     */
    public const KKO = 'kko';

    /**
     * Gugubera
     */
    public const KKP = 'kkp';

    /**
     * Kaeku
     */
    public const KKQ = 'kkq';

    /**
     * Kir-Balar
     */
    public const KKR = 'kkr';

    /**
     * Giiwo
     */
    public const KKS = 'kks';

    /**
     * Koi
     */
    public const KKT = 'kkt';

    /**
     * Tumi
     */
    public const KKU = 'kku';

    /**
     * Kangean
     */
    public const KKV = 'kkv';

    /**
     * Teke-Kukuya
     */
    public const KKW = 'kkw';

    /**
     * Kohin
     */
    public const KKX = 'kkx';

    /**
     * Guugu Yimidhirr
     */
    public const KKY = 'kky';

    /**
     * Kaska
     */
    public const KKZ = 'kkz';

    /**
     * Klamath-Modoc
     */
    public const KLA = 'kla';

    /**
     * Kiliwa
     */
    public const KLB = 'klb';

    /**
     * Kolbila
     */
    public const KLC = 'klc';

    /**
     * Gamilaraay
     */
    public const KLD = 'kld';

    /**
     * Kulung (Nepal)
     */
    public const KLE = 'kle';

    /**
     * Kendeje
     */
    public const KLF = 'klf';

    /**
     * Tagakaulo
     */
    public const KLG = 'klg';

    /**
     * Weliki
     */
    public const KLH = 'klh';

    /**
     * Kalumpang
     */
    public const KLI = 'kli';

    /**
     * Khalaj
     */
    public const KLJ = 'klj';

    /**
     * Kono (Nigeria)
     */
    public const KLK = 'klk';

    /**
     * Kagan Kalagan
     */
    public const KLL = 'kll';

    /**
     * Migum
     */
    public const KLM = 'klm';

    /**
     * Kalenjin
     */
    public const KLN = 'kln';

    /**
     * Kapya
     */
    public const KLO = 'klo';

    /**
     * Kamasa
     */
    public const KLP = 'klp';

    /**
     * Rumu
     */
    public const KLQ = 'klq';

    /**
     * Khaling
     */
    public const KLR = 'klr';

    /**
     * Kalasha
     */
    public const KLS = 'kls';

    /**
     * Nukna
     */
    public const KLT = 'klt';

    /**
     * Klao
     */
    public const KLU = 'klu';

    /**
     * Maskelynes
     */
    public const KLV = 'klv';

    /**
     * Tado
     */
    public const KLW = 'klw';

    /**
     * Koluwawa
     */
    public const KLX = 'klx';

    /**
     * Kalao
     */
    public const KLY = 'kly';

    /**
     * Kabola
     */
    public const KLZ = 'klz';

    /**
     * Konni
     */
    public const KMA = 'kma';

    /**
     * Kimbundu
     */
    public const KMB = 'kmb';

    /**
     * Southern Dong
     */
    public const KMC = 'kmc';

    /**
     * Majukayang Kalinga
     */
    public const KMD = 'kmd';

    /**
     * Bakole
     */
    public const KME = 'kme';

    /**
     * Kare (Papua New Guinea)
     */
    public const KMF = 'kmf';

    /**
     * Kâte
     */
    public const KMG = 'kmg';

    /**
     * Kalam
     */
    public const KMH = 'kmh';

    /**
     * Kami (Nigeria)
     */
    public const KMI = 'kmi';

    /**
     * Kumarbhag Paharia
     */
    public const KMJ = 'kmj';

    /**
     * Limos Kalinga
     */
    public const KMK = 'kmk';

    /**
     * Tanudan Kalinga
     */
    public const KML = 'kml';

    /**
     * Kom (India)
     */
    public const KMM = 'kmm';

    /**
     * Awtuw
     */
    public const KMN = 'kmn';

    /**
     * Kwoma
     */
    public const KMO = 'kmo';

    /**
     * Gimme
     */
    public const KMP = 'kmp';

    /**
     * Kwama
     */
    public const KMQ = 'kmq';

    /**
     * Northern Kurdish
     */
    public const KMR = 'kmr';

    /**
     * Kamasau
     */
    public const KMS = 'kms';

    /**
     * Kemtuik
     */
    public const KMT = 'kmt';

    /**
     * Kanite
     */
    public const KMU = 'kmu';

    /**
     * Karipúna Creole French
     */
    public const KMV = 'kmv';

    /**
     * Komo (Democratic Republic of Congo)
     */
    public const KMW = 'kmw';

    /**
     * Waboda
     */
    public const KMX = 'kmx';

    /**
     * Koma
     */
    public const KMY = 'kmy';

    /**
     * Khorasani Turkish
     */
    public const KMZ = 'kmz';

    /**
     * Dera (Nigeria)
     */
    public const KNA = 'kna';

    /**
     * Lubuagan Kalinga
     */
    public const KNB = 'knb';

    /**
     * Central Kanuri
     */
    public const KNC = 'knc';

    /**
     * Konda
     */
    public const KND = 'knd';

    /**
     * Kankanaey
     */
    public const KNE = 'kne';

    /**
     * Mankanya
     */
    public const KNF = 'knf';

    /**
     * Koongo
     */
    public const KNG = 'kng';

    /**
     * Kanufi
     */
    public const KNI = 'kni';

    /**
     * Western Kanjobal
     */
    public const KNJ = 'knj';

    /**
     * Kuranko
     */
    public const KNK = 'knk';

    /**
     * Keninjal
     */
    public const KNL = 'knl';

    /**
     * Kanamarí
     */
    public const KNM = 'knm';

    /**
     * Konkani (individual language)
     */
    public const KNN = 'knn';

    /**
     * Kono (Sierra Leone)
     */
    public const KNO = 'kno';

    /**
     * Kwanja
     */
    public const KNP = 'knp';

    /**
     * Kintaq
     */
    public const KNQ = 'knq';

    /**
     * Kaningra
     */
    public const KNR = 'knr';

    /**
     * Kensiu
     */
    public const KNS = 'kns';

    /**
     * Panoan Katukína
     */
    public const KNT = 'knt';

    /**
     * Kono (Guinea)
     */
    public const KNU = 'knu';

    /**
     * Tabo
     */
    public const KNV = 'knv';

    /**
     * Kung-Ekoka
     */
    public const KNW = 'knw';

    /**
     * Kendayan
     */
    public const KNX = 'knx';

    /**
     * Kanyok
     */
    public const KNY = 'kny';

    /**
     * Kalamsé
     */
    public const KNZ = 'knz';

    /**
     * Konomala
     */
    public const KOA = 'koa';

    /**
     * Kpati
     */
    public const KOC = 'koc';

    /**
     * Kodi
     */
    public const KOD = 'kod';

    /**
     * Kacipo-Bale Suri
     */
    public const KOE = 'koe';

    /**
     * Kubi
     */
    public const KOF = 'kof';

    /**
     * Cogui
     */
    public const KOG = 'kog';

    /**
     * Koyo
     */
    public const KOH = 'koh';

    /**
     * Komi-Permyak
     */
    public const KOI = 'koi';

    /**
     * Konkani (macrolanguage)
     */
    public const KOK = 'kok';

    /**
     * Kol (Papua New Guinea)
     */
    public const KOL = 'kol';

    /**
     * Komi
     */
    public const KOM = 'kom';

    /**
     * Kongo
     */
    public const KON = 'kon';

    /**
     * Konzo
     */
    public const KOO = 'koo';

    /**
     * Waube
     */
    public const KOP = 'kop';

    /**
     * Kota (Gabon)
     */
    public const KOQ = 'koq';

    /**
     * Korean
     */
    public const KOR = 'kor';

    /**
     * Kosraean
     */
    public const KOS = 'kos';

    /**
     * Lagwan
     */
    public const KOT = 'kot';

    /**
     * Koke
     */
    public const KOU = 'kou';

    /**
     * Kudu-Camo
     */
    public const KOV = 'kov';

    /**
     * Kugama
     */
    public const KOW = 'kow';

    /**
     * Koyukon
     */
    public const KOY = 'koy';

    /**
     * Korak
     */
    public const KOZ = 'koz';

    /**
     * Kutto
     */
    public const KPA = 'kpa';

    /**
     * Mullu Kurumba
     */
    public const KPB = 'kpb';

    /**
     * Curripaco
     */
    public const KPC = 'kpc';

    /**
     * Koba
     */
    public const KPD = 'kpd';

    /**
     * Kpelle
     */
    public const KPE = 'kpe';

    /**
     * Komba
     */
    public const KPF = 'kpf';

    /**
     * Kapingamarangi
     */
    public const KPG = 'kpg';

    /**
     * Kplang
     */
    public const KPH = 'kph';

    /**
     * Kofei
     */
    public const KPI = 'kpi';

    /**
     * Karajá
     */
    public const KPJ = 'kpj';

    /**
     * Kpan
     */
    public const KPK = 'kpk';

    /**
     * Kpala
     */
    public const KPL = 'kpl';

    /**
     * Koho
     */
    public const KPM = 'kpm';

    /**
     * Kepkiriwát
     */
    public const KPN = 'kpn';

    /**
     * Ikposo
     */
    public const KPO = 'kpo';

    /**
     * Korupun-Sela
     */
    public const KPQ = 'kpq';

    /**
     * Korafe-Yegha
     */
    public const KPR = 'kpr';

    /**
     * Tehit
     */
    public const KPS = 'kps';

    /**
     * Karata
     */
    public const KPT = 'kpt';

    /**
     * Kafoa
     */
    public const KPU = 'kpu';

    /**
     * Komi-Zyrian
     */
    public const KPV = 'kpv';

    /**
     * Kobon
     */
    public const KPW = 'kpw';

    /**
     * Mountain Koiali
     */
    public const KPX = 'kpx';

    /**
     * Koryak
     */
    public const KPY = 'kpy';

    /**
     * Kupsabiny
     */
    public const KPZ = 'kpz';

    /**
     * Mum
     */
    public const KQA = 'kqa';

    /**
     * Kovai
     */
    public const KQB = 'kqb';

    /**
     * Doromu-Koki
     */
    public const KQC = 'kqc';

    /**
     * Koy Sanjaq Surat
     */
    public const KQD = 'kqd';

    /**
     * Kalagan
     */
    public const KQE = 'kqe';

    /**
     * Kakabai
     */
    public const KQF = 'kqf';

    /**
     * Khe
     */
    public const KQG = 'kqg';

    /**
     * Kisankasa
     */
    public const KQH = 'kqh';

    /**
     * Koitabu
     */
    public const KQI = 'kqi';

    /**
     * Koromira
     */
    public const KQJ = 'kqj';

    /**
     * Kotafon Gbe
     */
    public const KQK = 'kqk';

    /**
     * Kyenele
     */
    public const KQL = 'kql';

    /**
     * Khisa
     */
    public const KQM = 'kqm';

    /**
     * Kaonde
     */
    public const KQN = 'kqn';

    /**
     * Eastern Krahn
     */
    public const KQO = 'kqo';

    /**
     * Kimré
     */
    public const KQP = 'kqp';

    /**
     * Krenak
     */
    public const KQQ = 'kqq';

    /**
     * Kimaragang
     */
    public const KQR = 'kqr';

    /**
     * Northern Kissi
     */
    public const KQS = 'kqs';

    /**
     * Klias River Kadazan
     */
    public const KQT = 'kqt';

    /**
     * Seroa
     */
    public const KQU = 'kqu';

    /**
     * Okolod
     */
    public const KQV = 'kqv';

    /**
     * Kandas
     */
    public const KQW = 'kqw';

    /**
     * Mser
     */
    public const KQX = 'kqx';

    /**
     * Koorete
     */
    public const KQY = 'kqy';

    /**
     * Korana
     */
    public const KQZ = 'kqz';

    /**
     * Kumhali
     */
    public const KRA = 'kra';

    /**
     * Karkin
     */
    public const KRB = 'krb';

    /**
     * Karachay-Balkar
     */
    public const KRC = 'krc';

    /**
     * Kairui-Midiki
     */
    public const KRD = 'krd';

    /**
     * Panará
     */
    public const KRE = 'kre';

    /**
     * Koro (Vanuatu)
     */
    public const KRF = 'krf';

    /**
     * Kurama
     */
    public const KRH = 'krh';

    /**
     * Krio
     */
    public const KRI = 'kri';

    /**
     * Kinaray-A
     */
    public const KRJ = 'krj';

    /**
     * Kerek
     */
    public const KRK = 'krk';

    /**
     * Karelian
     */
    public const KRL = 'krl';

    /**
     * Sapo
     */
    public const KRN = 'krn';

    /**
     * Durop
     */
    public const KRP = 'krp';

    /**
     * Krung
     */
    public const KRR = 'krr';

    /**
     * Gbaya (Sudan)
     */
    public const KRS = 'krs';

    /**
     * Tumari Kanuri
     */
    public const KRT = 'krt';

    /**
     * Kurukh
     */
    public const KRU = 'kru';

    /**
     * Kavet
     */
    public const KRV = 'krv';

    /**
     * Western Krahn
     */
    public const KRW = 'krw';

    /**
     * Karon
     */
    public const KRX = 'krx';

    /**
     * Kryts
     */
    public const KRY = 'kry';

    /**
     * Sota Kanum
     */
    public const KRZ = 'krz';

    /**
     * Shambala
     */
    public const KSB = 'ksb';

    /**
     * Southern Kalinga
     */
    public const KSC = 'ksc';

    /**
     * Kuanua
     */
    public const KSD = 'ksd';

    /**
     * Kuni
     */
    public const KSE = 'kse';

    /**
     * Bafia
     */
    public const KSF = 'ksf';

    /**
     * Kusaghe
     */
    public const KSG = 'ksg';

    /**
     * Kölsch
     */
    public const KSH = 'ksh';

    /**
     * Krisa
     */
    public const KSI = 'ksi';

    /**
     * Uare
     */
    public const KSJ = 'ksj';

    /**
     * Kansa
     */
    public const KSK = 'ksk';

    /**
     * Kumalu
     */
    public const KSL = 'ksl';

    /**
     * Kumba
     */
    public const KSM = 'ksm';

    /**
     * Kasiguranin
     */
    public const KSN = 'ksn';

    /**
     * Kofa
     */
    public const KSO = 'kso';

    /**
     * Kaba
     */
    public const KSP = 'ksp';

    /**
     * Kwaami
     */
    public const KSQ = 'ksq';

    /**
     * Borong
     */
    public const KSR = 'ksr';

    /**
     * Southern Kisi
     */
    public const KSS = 'kss';

    /**
     * Winyé
     */
    public const KST = 'kst';

    /**
     * Khamyang
     */
    public const KSU = 'ksu';

    /**
     * Kusu
     */
    public const KSV = 'ksv';

    /**
     * S'gaw Karen
     */
    public const KSW = 'ksw';

    /**
     * Kedang
     */
    public const KSX = 'ksx';

    /**
     * Kharia Thar
     */
    public const KSY = 'ksy';

    /**
     * Kodaku
     */
    public const KSZ = 'ksz';

    /**
     * Katua
     */
    public const KTA = 'kta';

    /**
     * Kambaata
     */
    public const KTB = 'ktb';

    /**
     * Kholok
     */
    public const KTC = 'ktc';

    /**
     * Kokata
     */
    public const KTD = 'ktd';

    /**
     * Nubri
     */
    public const KTE = 'kte';

    /**
     * Kwami
     */
    public const KTF = 'ktf';

    /**
     * Kalkutung
     */
    public const KTG = 'ktg';

    /**
     * Karanga
     */
    public const KTH = 'kth';

    /**
     * North Muyu
     */
    public const KTI = 'kti';

    /**
     * Plapo Krumen
     */
    public const KTJ = 'ktj';

    /**
     * Kaniet
     */
    public const KTK = 'ktk';

    /**
     * Koroshi
     */
    public const KTL = 'ktl';

    /**
     * Kurti
     */
    public const KTM = 'ktm';

    /**
     * Karitiâna
     */
    public const KTN = 'ktn';

    /**
     * Kuot
     */
    public const KTO = 'kto';

    /**
     * Kaduo
     */
    public const KTP = 'ktp';

    /**
     * Katabaga
     */
    public const KTQ = 'ktq';

    /**
     * South Muyu
     */
    public const KTS = 'kts';

    /**
     * Ketum
     */
    public const KTT = 'ktt';

    /**
     * Kituba (Democratic Republic of Congo)
     */
    public const KTU = 'ktu';

    /**
     * Eastern Katu
     */
    public const KTV = 'ktv';

    /**
     * Kato
     */
    public const KTW = 'ktw';

    /**
     * Kaxararí
     */
    public const KTX = 'ktx';

    /**
     * Kango (Bas-Uélé District)
     */
    public const KTY = 'kty';

    /**
     * Juǀʼhoan
     */
    public const KTZ = 'ktz';

    /**
     * Kuanyama
     */
    public const KUA = 'kua';

    /**
     * Kutep
     */
    public const KUB = 'kub';

    /**
     * Kwinsu
     */
    public const KUC = 'kuc';

    /**
     * 'Auhelawa
     */
    public const KUD = 'kud';

    /**
     * Kuman (Papua New Guinea)
     */
    public const KUE = 'kue';

    /**
     * Western Katu
     */
    public const KUF = 'kuf';

    /**
     * Kupa
     */
    public const KUG = 'kug';

    /**
     * Kushi
     */
    public const KUH = 'kuh';

    /**
     * Kuikúro-Kalapálo
     */
    public const KUI = 'kui';

    /**
     * Kuria
     */
    public const KUJ = 'kuj';

    /**
     * Kepo'
     */
    public const KUK = 'kuk';

    /**
     * Kulere
     */
    public const KUL = 'kul';

    /**
     * Kumyk
     */
    public const KUM = 'kum';

    /**
     * Kunama
     */
    public const KUN = 'kun';

    /**
     * Kumukio
     */
    public const KUO = 'kuo';

    /**
     * Kunimaipa
     */
    public const KUP = 'kup';

    /**
     * Karipuna
     */
    public const KUQ = 'kuq';

    /**
     * Kurdish
     */
    public const KUR = 'kur';

    /**
     * Kusaal
     */
    public const KUS = 'kus';

    /**
     * Kutenai
     */
    public const KUT = 'kut';

    /**
     * Upper Kuskokwim
     */
    public const KUU = 'kuu';

    /**
     * Kur
     */
    public const KUV = 'kuv';

    /**
     * Kpagua
     */
    public const KUW = 'kuw';

    /**
     * Kukatja
     */
    public const KUX = 'kux';

    /**
     * Kuuku-Ya'u
     */
    public const KUY = 'kuy';

    /**
     * Kunza
     */
    public const KUZ = 'kuz';

    /**
     * Bagvalal
     */
    public const KVA = 'kva';

    /**
     * Kubu
     */
    public const KVB = 'kvb';

    /**
     * Kove
     */
    public const KVC = 'kvc';

    /**
     * Kui (Indonesia)
     */
    public const KVD = 'kvd';

    /**
     * Kalabakan
     */
    public const KVE = 'kve';

    /**
     * Kabalai
     */
    public const KVF = 'kvf';

    /**
     * Kuni-Boazi
     */
    public const KVG = 'kvg';

    /**
     * Komodo
     */
    public const KVH = 'kvh';

    /**
     * Kwang
     */
    public const KVI = 'kvi';

    /**
     * Psikye
     */
    public const KVJ = 'kvj';

    /**
     * Korean Sign Language
     */
    public const KVK = 'kvk';

    /**
     * Kayaw
     */
    public const KVL = 'kvl';

    /**
     * Kendem
     */
    public const KVM = 'kvm';

    /**
     * Border Kuna
     */
    public const KVN = 'kvn';

    /**
     * Dobel
     */
    public const KVO = 'kvo';

    /**
     * Kompane
     */
    public const KVP = 'kvp';

    /**
     * Geba Karen
     */
    public const KVQ = 'kvq';

    /**
     * Kerinci
     */
    public const KVR = 'kvr';

    /**
     * Lahta Karen
     */
    public const KVT = 'kvt';

    /**
     * Yinbaw Karen
     */
    public const KVU = 'kvu';

    /**
     * Kola
     */
    public const KVV = 'kvv';

    /**
     * Wersing
     */
    public const KVW = 'kvw';

    /**
     * Parkari Koli
     */
    public const KVX = 'kvx';

    /**
     * Yintale Karen
     */
    public const KVY = 'kvy';

    /**
     * Tsakwambo
     */
    public const KVZ = 'kvz';

    /**
     * Dâw
     */
    public const KWA = 'kwa';

    /**
     * Kwa
     */
    public const KWB = 'kwb';

    /**
     * Likwala
     */
    public const KWC = 'kwc';

    /**
     * Kwaio
     */
    public const KWD = 'kwd';

    /**
     * Kwerba
     */
    public const KWE = 'kwe';

    /**
     * Kwara'ae
     */
    public const KWF = 'kwf';

    /**
     * Sara Kaba Deme
     */
    public const KWG = 'kwg';

    /**
     * Kowiai
     */
    public const KWH = 'kwh';

    /**
     * Awa-Cuaiquer
     */
    public const KWI = 'kwi';

    /**
     * Kwanga
     */
    public const KWJ = 'kwj';

    /**
     * Kwak'wala
     */
    public const KWK = 'kwk';

    /**
     * Kofyar
     */
    public const KWL = 'kwl';

    /**
     * Kwambi
     */
    public const KWM = 'kwm';

    /**
     * Kwangali
     */
    public const KWN = 'kwn';

    /**
     * Kwomtari
     */
    public const KWO = 'kwo';

    /**
     * Kodia
     */
    public const KWP = 'kwp';

    /**
     * Kwer
     */
    public const KWR = 'kwr';

    /**
     * Kwese
     */
    public const KWS = 'kws';

    /**
     * Kwesten
     */
    public const KWT = 'kwt';

    /**
     * Kwakum
     */
    public const KWU = 'kwu';

    /**
     * Sara Kaba Náà
     */
    public const KWV = 'kwv';

    /**
     * Kwinti
     */
    public const KWW = 'kww';

    /**
     * Khirwar
     */
    public const KWX = 'kwx';

    /**
     * San Salvador Kongo
     */
    public const KWY = 'kwy';

    /**
     * Kwadi
     */
    public const KWZ = 'kwz';

    /**
     * Kairiru
     */
    public const KXA = 'kxa';

    /**
     * Krobu
     */
    public const KXB = 'kxb';

    /**
     * Konso
     */
    public const KXC = 'kxc';

    /**
     * Brunei
     */
    public const KXD = 'kxd';

    /**
     * Manumanaw Karen
     */
    public const KXF = 'kxf';

    /**
     * Karo (Ethiopia)
     */
    public const KXH = 'kxh';

    /**
     * Keningau Murut
     */
    public const KXI = 'kxi';

    /**
     * Kulfa
     */
    public const KXJ = 'kxj';

    /**
     * Zayein Karen
     */
    public const KXK = 'kxk';

    /**
     * Northern Khmer
     */
    public const KXM = 'kxm';

    /**
     * Kanowit-Tanjong Melanau
     */
    public const KXN = 'kxn';

    /**
     * Kanoé
     */
    public const KXO = 'kxo';

    /**
     * Wadiyara Koli
     */
    public const KXP = 'kxp';

    /**
     * Smärky Kanum
     */
    public const KXQ = 'kxq';

    /**
     * Koro (Papua New Guinea)
     */
    public const KXR = 'kxr';

    /**
     * Kangjia
     */
    public const KXS = 'kxs';

    /**
     * Koiwat
     */
    public const KXT = 'kxt';

    /**
     * Kuvi
     */
    public const KXV = 'kxv';

    /**
     * Konai
     */
    public const KXW = 'kxw';

    /**
     * Likuba
     */
    public const KXX = 'kxx';

    /**
     * Kayong
     */
    public const KXY = 'kxy';

    /**
     * Kerewo
     */
    public const KXZ = 'kxz';

    /**
     * Kwaya
     */
    public const KYA = 'kya';

    /**
     * Butbut Kalinga
     */
    public const KYB = 'kyb';

    /**
     * Kyaka
     */
    public const KYC = 'kyc';

    /**
     * Karey
     */
    public const KYD = 'kyd';

    /**
     * Krache
     */
    public const KYE = 'kye';

    /**
     * Kouya
     */
    public const KYF = 'kyf';

    /**
     * Keyagana
     */
    public const KYG = 'kyg';

    /**
     * Karok
     */
    public const KYH = 'kyh';

    /**
     * Kiput
     */
    public const KYI = 'kyi';

    /**
     * Karao
     */
    public const KYJ = 'kyj';

    /**
     * Kamayo
     */
    public const KYK = 'kyk';

    /**
     * Kalapuya
     */
    public const KYL = 'kyl';

    /**
     * Kpatili
     */
    public const KYM = 'kym';

    /**
     * Northern Binukidnon
     */
    public const KYN = 'kyn';

    /**
     * Kelon
     */
    public const KYO = 'kyo';

    /**
     * Kang
     */
    public const KYP = 'kyp';

    /**
     * Kenga
     */
    public const KYQ = 'kyq';

    /**
     * Kuruáya
     */
    public const KYR = 'kyr';

    /**
     * Baram Kayan
     */
    public const KYS = 'kys';

    /**
     * Kayagar
     */
    public const KYT = 'kyt';

    /**
     * Western Kayah
     */
    public const KYU = 'kyu';

    /**
     * Kayort
     */
    public const KYV = 'kyv';

    /**
     * Kudmali
     */
    public const KYW = 'kyw';

    /**
     * Rapoisi
     */
    public const KYX = 'kyx';

    /**
     * Kambaira
     */
    public const KYY = 'kyy';

    /**
     * Kayabí
     */
    public const KYZ = 'kyz';

    /**
     * Western Karaboro
     */
    public const KZA = 'kza';

    /**
     * Kaibobo
     */
    public const KZB = 'kzb';

    /**
     * Bondoukou Kulango
     */
    public const KZC = 'kzc';

    /**
     * Kadai
     */
    public const KZD = 'kzd';

    /**
     * Kosena
     */
    public const KZE = 'kze';

    /**
     * Da'a Kaili
     */
    public const KZF = 'kzf';

    /**
     * Kikai
     */
    public const KZG = 'kzg';

    /**
     * Kelabit
     */
    public const KZI = 'kzi';

    /**
     * Kazukuru
     */
    public const KZK = 'kzk';

    /**
     * Kayeli
     */
    public const KZL = 'kzl';

    /**
     * Kais
     */
    public const KZM = 'kzm';

    /**
     * Kokola
     */
    public const KZN = 'kzn';

    /**
     * Kaningi
     */
    public const KZO = 'kzo';

    /**
     * Kaidipang
     */
    public const KZP = 'kzp';

    /**
     * Kaike
     */
    public const KZQ = 'kzq';

    /**
     * Karang
     */
    public const KZR = 'kzr';

    /**
     * Sugut Dusun
     */
    public const KZS = 'kzs';

    /**
     * Kayupulau
     */
    public const KZU = 'kzu';

    /**
     * Komyandaret
     */
    public const KZV = 'kzv';

    /**
     * Karirí-Xocó
     */
    public const KZW = 'kzw';

    /**
     * Kamarian
     */
    public const KZX = 'kzx';

    /**
     * Kango (Tshopo District)
     */
    public const KZY = 'kzy';

    /**
     * Kalabra
     */
    public const KZZ = 'kzz';

    /**
     * Southern Subanen
     */
    public const LAA = 'laa';

    /**
     * Linear A
     */
    public const LAB = 'lab';

    /**
     * Lacandon
     */
    public const LAC = 'lac';

    /**
     * Ladino
     */
    public const LAD = 'lad';

    /**
     * Pattani
     */
    public const LAE = 'lae';

    /**
     * Lafofa
     */
    public const LAF = 'laf';

    /**
     * Rangi
     */
    public const LAG = 'lag';

    /**
     * Lahnda
     */
    public const LAH = 'lah';

    /**
     * Lambya
     */
    public const LAI = 'lai';

    /**
     * Lango (Uganda)
     */
    public const LAJ = 'laj';

    /**
     * Lalia
     */
    public const LAL = 'lal';

    /**
     * Lamba
     */
    public const LAM = 'lam';

    /**
     * Laru
     */
    public const LAN = 'lan';

    /**
     * Lao
     */
    public const LAO = 'lao';

    /**
     * Laka (Chad)
     */
    public const LAP = 'lap';

    /**
     * Qabiao
     */
    public const LAQ = 'laq';

    /**
     * Larteh
     */
    public const LAR = 'lar';

    /**
     * Lama (Togo)
     */
    public const LAS = 'las';

    /**
     * Latin
     */
    public const LAT = 'lat';

    /**
     * Laba
     */
    public const LAU = 'lau';

    /**
     * Latvian
     */
    public const LAV = 'lav';

    /**
     * Lauje
     */
    public const LAW = 'law';

    /**
     * Tiwa
     */
    public const LAX = 'lax';

    /**
     * Lama Bai
     */
    public const LAY = 'lay';

    /**
     * Aribwatsa
     */
    public const LAZ = 'laz';

    /**
     * Label
     */
    public const LBB = 'lbb';

    /**
     * Lakkia
     */
    public const LBC = 'lbc';

    /**
     * Lak
     */
    public const LBE = 'lbe';

    /**
     * Tinani
     */
    public const LBF = 'lbf';

    /**
     * Laopang
     */
    public const LBG = 'lbg';

    /**
     * La'bi
     */
    public const LBI = 'lbi';

    /**
     * Ladakhi
     */
    public const LBJ = 'lbj';

    /**
     * Central Bontok
     */
    public const LBK = 'lbk';

    /**
     * Libon Bikol
     */
    public const LBL = 'lbl';

    /**
     * Lodhi
     */
    public const LBM = 'lbm';

    /**
     * Rmeet
     */
    public const LBN = 'lbn';

    /**
     * Laven
     */
    public const LBO = 'lbo';

    /**
     * Wampar
     */
    public const LBQ = 'lbq';

    /**
     * Lohorung
     */
    public const LBR = 'lbr';

    /**
     * Libyan Sign Language
     */
    public const LBS = 'lbs';

    /**
     * Lachi
     */
    public const LBT = 'lbt';

    /**
     * Labu
     */
    public const LBU = 'lbu';

    /**
     * Lavatbura-Lamusong
     */
    public const LBV = 'lbv';

    /**
     * Tolaki
     */
    public const LBW = 'lbw';

    /**
     * Lawangan
     */
    public const LBX = 'lbx';

    /**
     * Lamalama
     */
    public const LBY = 'lby';

    /**
     * Lardil
     */
    public const LBZ = 'lbz';

    /**
     * Legenyem
     */
    public const LCC = 'lcc';

    /**
     * Lola
     */
    public const LCD = 'lcd';

    /**
     * Loncong
     */
    public const LCE = 'lce';

    /**
     * Lubu
     */
    public const LCF = 'lcf';

    /**
     * Luchazi
     */
    public const LCH = 'lch';

    /**
     * Lisela
     */
    public const LCL = 'lcl';

    /**
     * Tungag
     */
    public const LCM = 'lcm';

    /**
     * Western Lawa
     */
    public const LCP = 'lcp';

    /**
     * Luhu
     */
    public const LCQ = 'lcq';

    /**
     * Lisabata-Nuniali
     */
    public const LCS = 'lcs';

    /**
     * Kla-Dan
     */
    public const LDA = 'lda';

    /**
     * Dũya
     */
    public const LDB = 'ldb';

    /**
     * Luri
     */
    public const LDD = 'ldd';

    /**
     * Lenyima
     */
    public const LDG = 'ldg';

    /**
     * Lamja-Dengsa-Tola
     */
    public const LDH = 'ldh';

    /**
     * Laari
     */
    public const LDI = 'ldi';

    /**
     * Lemoro
     */
    public const LDJ = 'ldj';

    /**
     * Leelau
     */
    public const LDK = 'ldk';

    /**
     * Kaan
     */
    public const LDL = 'ldl';

    /**
     * Landoma
     */
    public const LDM = 'ldm';

    /**
     * Láadan
     */
    public const LDN = 'ldn';

    /**
     * Loo
     */
    public const LDO = 'ldo';

    /**
     * Tso
     */
    public const LDP = 'ldp';

    /**
     * Lufu
     */
    public const LDQ = 'ldq';

    /**
     * Lega-Shabunda
     */
    public const LEA = 'lea';

    /**
     * Lala-Bisa
     */
    public const LEB = 'leb';

    /**
     * Leco
     */
    public const LEC = 'lec';

    /**
     * Lendu
     */
    public const LED = 'led';

    /**
     * Lyélé
     */
    public const LEE = 'lee';

    /**
     * Lelemi
     */
    public const LEF = 'lef';

    /**
     * Lenje
     */
    public const LEH = 'leh';

    /**
     * Lemio
     */
    public const LEI = 'lei';

    /**
     * Lengola
     */
    public const LEJ = 'lej';

    /**
     * Leipon
     */
    public const LEK = 'lek';

    /**
     * Lele (Democratic Republic of Congo)
     */
    public const LEL = 'lel';

    /**
     * Nomaande
     */
    public const LEM = 'lem';

    /**
     * Lenca
     */
    public const LEN = 'len';

    /**
     * Leti (Cameroon)
     */
    public const LEO = 'leo';

    /**
     * Lepcha
     */
    public const LEP = 'lep';

    /**
     * Lembena
     */
    public const LEQ = 'leq';

    /**
     * Lenkau
     */
    public const LER = 'ler';

    /**
     * Lese
     */
    public const LES = 'les';

    /**
     * Lesing-Gelimi
     */
    public const LET = 'let';

    /**
     * Kara (Papua New Guinea)
     */
    public const LEU = 'leu';

    /**
     * Lamma
     */
    public const LEV = 'lev';

    /**
     * Ledo Kaili
     */
    public const LEW = 'lew';

    /**
     * Luang
     */
    public const LEX = 'lex';

    /**
     * Lemolang
     */
    public const LEY = 'ley';

    /**
     * Lezghian
     */
    public const LEZ = 'lez';

    /**
     * Lefa
     */
    public const LFA = 'lfa';

    /**
     * Lingua Franca Nova
     */
    public const LFN = 'lfn';

    /**
     * Lungga
     */
    public const LGA = 'lga';

    /**
     * Laghu
     */
    public const LGB = 'lgb';

    /**
     * Lugbara
     */
    public const LGG = 'lgg';

    /**
     * Laghuu
     */
    public const LGH = 'lgh';

    /**
     * Lengilu
     */
    public const LGI = 'lgi';

    /**
     * Lingarak
     */
    public const LGK = 'lgk';

    /**
     * Wala
     */
    public const LGL = 'lgl';

    /**
     * Lega-Mwenga
     */
    public const LGM = 'lgm';

    /**
     * T'apo
     */
    public const LGN = 'lgn';

    /**
     * Lango (South Sudan)
     */
    public const LGO = 'lgo';

    /**
     * Logba
     */
    public const LGQ = 'lgq';

    /**
     * Lengo
     */
    public const LGR = 'lgr';

    /**
     * Guinea-Bissau Sign Language
     */
    public const LGS = 'lgs';

    /**
     * Pahi
     */
    public const LGT = 'lgt';

    /**
     * Longgu
     */
    public const LGU = 'lgu';

    /**
     * Ligenza
     */
    public const LGZ = 'lgz';

    /**
     * Laha (Viet Nam)
     */
    public const LHA = 'lha';

    /**
     * Laha (Indonesia)
     */
    public const LHH = 'lhh';

    /**
     * Lahu Shi
     */
    public const LHI = 'lhi';

    /**
     * Lahul Lohar
     */
    public const LHL = 'lhl';

    /**
     * Lhomi
     */
    public const LHM = 'lhm';

    /**
     * Lahanan
     */
    public const LHN = 'lhn';

    /**
     * Lhokpu
     */
    public const LHP = 'lhp';

    /**
     * Mlahsö
     */
    public const LHS = 'lhs';

    /**
     * Lo-Toga
     */
    public const LHT = 'lht';

    /**
     * Lahu
     */
    public const LHU = 'lhu';

    /**
     * West-Central Limba
     */
    public const LIA = 'lia';

    /**
     * Likum
     */
    public const LIB = 'lib';

    /**
     * Hlai
     */
    public const LIC = 'lic';

    /**
     * Nyindrou
     */
    public const LID = 'lid';

    /**
     * Likila
     */
    public const LIE = 'lie';

    /**
     * Limbu
     */
    public const LIF = 'lif';

    /**
     * Ligbi
     */
    public const LIG = 'lig';

    /**
     * Lihir
     */
    public const LIH = 'lih';

    /**
     * Ligurian
     */
    public const LIJ = 'lij';

    /**
     * Lika
     */
    public const LIK = 'lik';

    /**
     * Lillooet
     */
    public const LIL = 'lil';

    /**
     * Limburgan
     */
    public const LIM = 'lim';

    /**
     * Lingala
     */
    public const LIN = 'lin';

    /**
     * Liki
     */
    public const LIO = 'lio';

    /**
     * Sekpele
     */
    public const LIP = 'lip';

    /**
     * Libido
     */
    public const LIQ = 'liq';

    /**
     * Liberian English
     */
    public const LIR = 'lir';

    /**
     * Lisu
     */
    public const LIS = 'lis';

    /**
     * Lithuanian
     */
    public const LIT = 'lit';

    /**
     * Logorik
     */
    public const LIU = 'liu';

    /**
     * Liv
     */
    public const LIV = 'liv';

    /**
     * Col
     */
    public const LIW = 'liw';

    /**
     * Liabuku
     */
    public const LIX = 'lix';

    /**
     * Banda-Bambari
     */
    public const LIY = 'liy';

    /**
     * Libinza
     */
    public const LIZ = 'liz';

    /**
     * Golpa
     */
    public const LJA = 'lja';

    /**
     * Rampi
     */
    public const LJE = 'lje';

    /**
     * Laiyolo
     */
    public const LJI = 'lji';

    /**
     * Li'o
     */
    public const LJL = 'ljl';

    /**
     * Lampung Api
     */
    public const LJP = 'ljp';

    /**
     * Yirandali
     */
    public const LJW = 'ljw';

    /**
     * Yuru
     */
    public const LJX = 'ljx';

    /**
     * Lakalei
     */
    public const LKA = 'lka';

    /**
     * Kabras
     */
    public const LKB = 'lkb';

    /**
     * Kucong
     */
    public const LKC = 'lkc';

    /**
     * Lakondê
     */
    public const LKD = 'lkd';

    /**
     * Kenyi
     */
    public const LKE = 'lke';

    /**
     * Lakha
     */
    public const LKH = 'lkh';

    /**
     * Laki
     */
    public const LKI = 'lki';

    /**
     * Remun
     */
    public const LKJ = 'lkj';

    /**
     * Laeko-Libuat
     */
    public const LKL = 'lkl';

    /**
     * Kalaamaya
     */
    public const LKM = 'lkm';

    /**
     * Lakon
     */
    public const LKN = 'lkn';

    /**
     * Khayo
     */
    public const LKO = 'lko';

    /**
     * Päri
     */
    public const LKR = 'lkr';

    /**
     * Kisa
     */
    public const LKS = 'lks';

    /**
     * Lakota
     */
    public const LKT = 'lkt';

    /**
     * Kungkari
     */
    public const LKU = 'lku';

    /**
     * Lokoya
     */
    public const LKY = 'lky';

    /**
     * Lala-Roba
     */
    public const LLA = 'lla';

    /**
     * Lolo
     */
    public const LLB = 'llb';

    /**
     * Lele (Guinea)
     */
    public const LLC = 'llc';

    /**
     * Ladin
     */
    public const LLD = 'lld';

    /**
     * Lele (Papua New Guinea)
     */
    public const LLE = 'lle';

    /**
     * Hermit
     */
    public const LLF = 'llf';

    /**
     * Lole
     */
    public const LLG = 'llg';

    /**
     * Lamu
     */
    public const LLH = 'llh';

    /**
     * Teke-Laali
     */
    public const LLI = 'lli';

    /**
     * Ladji Ladji
     */
    public const LLJ = 'llj';

    /**
     * Lelak
     */
    public const LLK = 'llk';

    /**
     * Lilau
     */
    public const LLL = 'lll';

    /**
     * Lasalimu
     */
    public const LLM = 'llm';

    /**
     * Lele (Chad)
     */
    public const LLN = 'lln';

    /**
     * North Efate
     */
    public const LLP = 'llp';

    /**
     * Lolak
     */
    public const LLQ = 'llq';

    /**
     * Lithuanian Sign Language
     */
    public const LLS = 'lls';

    /**
     * Lau
     */
    public const LLU = 'llu';

    /**
     * Lauan
     */
    public const LLX = 'llx';

    /**
     * East Limba
     */
    public const LMA = 'lma';

    /**
     * Merei
     */
    public const LMB = 'lmb';

    /**
     * Limilngan
     */
    public const LMC = 'lmc';

    /**
     * Lumun
     */
    public const LMD = 'lmd';

    /**
     * Pévé
     */
    public const LME = 'lme';

    /**
     * South Lembata
     */
    public const LMF = 'lmf';

    /**
     * Lamogai
     */
    public const LMG = 'lmg';

    /**
     * Lambichhong
     */
    public const LMH = 'lmh';

    /**
     * Lombi
     */
    public const LMI = 'lmi';

    /**
     * West Lembata
     */
    public const LMJ = 'lmj';

    /**
     * Lamkang
     */
    public const LMK = 'lmk';

    /**
     * Hano
     */
    public const LML = 'lml';

    /**
     * Lambadi
     */
    public const LMN = 'lmn';

    /**
     * Lombard
     */
    public const LMO = 'lmo';

    /**
     * Limbum
     */
    public const LMP = 'lmp';

    /**
     * Lamatuka
     */
    public const LMQ = 'lmq';

    /**
     * Lamalera
     */
    public const LMR = 'lmr';

    /**
     * Lamenu
     */
    public const LMU = 'lmu';

    /**
     * Lomaiviti
     */
    public const LMV = 'lmv';

    /**
     * Lake Miwok
     */
    public const LMW = 'lmw';

    /**
     * Laimbue
     */
    public const LMX = 'lmx';

    /**
     * Lamboya
     */
    public const LMY = 'lmy';

    /**
     * Langbashe
     */
    public const LNA = 'lna';

    /**
     * Mbalanhu
     */
    public const LNB = 'lnb';

    /**
     * Lundayeh
     */
    public const LND = 'lnd';

    /**
     * Langobardic
     */
    public const LNG = 'lng';

    /**
     * Lanoh
     */
    public const LNH = 'lnh';

    /**
     * Daantanai'
     */
    public const LNI = 'lni';

    /**
     * Leningitij
     */
    public const LNJ = 'lnj';

    /**
     * South Central Banda
     */
    public const LNL = 'lnl';

    /**
     * Langam
     */
    public const LNM = 'lnm';

    /**
     * Lorediakarkar
     */
    public const LNN = 'lnn';

    /**
     * Lamnso'
     */
    public const LNS = 'lns';

    /**
     * Longuda
     */
    public const LNU = 'lnu';

    /**
     * Lanima
     */
    public const LNW = 'lnw';

    /**
     * Lonzo
     */
    public const LNZ = 'lnz';

    /**
     * Loloda
     */
    public const LOA = 'loa';

    /**
     * Lobi
     */
    public const LOB = 'lob';

    /**
     * Inonhan
     */
    public const LOC = 'loc';

    /**
     * Saluan
     */
    public const LOE = 'loe';

    /**
     * Logol
     */
    public const LOF = 'lof';

    /**
     * Logo
     */
    public const LOG = 'log';

    /**
     * Laarim
     */
    public const LOH = 'loh';

    /**
     * Loma (Côte d'Ivoire)
     */
    public const LOI = 'loi';

    /**
     * Lou
     */
    public const LOJ = 'loj';

    /**
     * Loko
     */
    public const LOK = 'lok';

    /**
     * Mongo
     */
    public const LOL = 'lol';

    /**
     * Loma (Liberia)
     */
    public const LOM = 'lom';

    /**
     * Malawi Lomwe
     */
    public const LON = 'lon';

    /**
     * Lombo
     */
    public const LOO = 'loo';

    /**
     * Lopa
     */
    public const LOP = 'lop';

    /**
     * Lobala
     */
    public const LOQ = 'loq';

    /**
     * Téén
     */
    public const LOR = 'lor';

    /**
     * Loniu
     */
    public const LOS = 'los';

    /**
     * Otuho
     */
    public const LOT = 'lot';

    /**
     * Louisiana Creole
     */
    public const LOU = 'lou';

    /**
     * Lopi
     */
    public const LOV = 'lov';

    /**
     * Tampias Lobu
     */
    public const LOW = 'low';

    /**
     * Loun
     */
    public const LOX = 'lox';

    /**
     * Loke
     */
    public const LOY = 'loy';

    /**
     * Lozi
     */
    public const LOZ = 'loz';

    /**
     * Lelepa
     */
    public const LPA = 'lpa';

    /**
     * Lepki
     */
    public const LPE = 'lpe';

    /**
     * Long Phuri Naga
     */
    public const LPN = 'lpn';

    /**
     * Lipo
     */
    public const LPO = 'lpo';

    /**
     * Lopit
     */
    public const LPX = 'lpx';

    /**
     * Logir
     */
    public const LQR = 'lqr';

    /**
     * Rara Bakati'
     */
    public const LRA = 'lra';

    /**
     * Northern Luri
     */
    public const LRC = 'lrc';

    /**
     * Laurentian
     */
    public const LRE = 'lre';

    /**
     * Laragia
     */
    public const LRG = 'lrg';

    /**
     * Marachi
     */
    public const LRI = 'lri';

    /**
     * Loarki
     */
    public const LRK = 'lrk';

    /**
     * Lari
     */
    public const LRL = 'lrl';

    /**
     * Marama
     */
    public const LRM = 'lrm';

    /**
     * Lorang
     */
    public const LRN = 'lrn';

    /**
     * Laro
     */
    public const LRO = 'lro';

    /**
     * Southern Yamphu
     */
    public const LRR = 'lrr';

    /**
     * Larantuka Malay
     */
    public const LRT = 'lrt';

    /**
     * Larevat
     */
    public const LRV = 'lrv';

    /**
     * Lemerig
     */
    public const LRZ = 'lrz';

    /**
     * Lasgerdi
     */
    public const LSA = 'lsa';

    /**
     * Burundian Sign Language
     */
    public const LSB = 'lsb';

    /**
     * Albarradas Sign Language
     */
    public const LSC = 'lsc';

    /**
     * Lishana Deni
     */
    public const LSD = 'lsd';

    /**
     * Lusengo
     */
    public const LSE = 'lse';

    /**
     * Lish
     */
    public const LSH = 'lsh';

    /**
     * Lashi
     */
    public const LSI = 'lsi';

    /**
     * Latvian Sign Language
     */
    public const LSL = 'lsl';

    /**
     * Saamia
     */
    public const LSM = 'lsm';

    /**
     * Tibetan Sign Language
     */
    public const LSN = 'lsn';

    /**
     * Laos Sign Language
     */
    public const LSO = 'lso';

    /**
     * Panamanian Sign Language
     */
    public const LSP = 'lsp';

    /**
     * Aruop
     */
    public const LSR = 'lsr';

    /**
     * Lasi
     */
    public const LSS = 'lss';

    /**
     * Trinidad and Tobago Sign Language
     */
    public const LST = 'lst';

    /**
     * Sivia Sign Language
     */
    public const LSV = 'lsv';

    /**
     * Seychelles Sign Language
     */
    public const LSW = 'lsw';

    /**
     * Mauritian Sign Language
     */
    public const LSY = 'lsy';

    /**
     * Late Middle Chinese
     */
    public const LTC = 'ltc';

    /**
     * Latgalian
     */
    public const LTG = 'ltg';

    /**
     * Thur
     */
    public const LTH = 'lth';

    /**
     * Leti (Indonesia)
     */
    public const LTI = 'lti';

    /**
     * Latundê
     */
    public const LTN = 'ltn';

    /**
     * Tsotso
     */
    public const LTO = 'lto';

    /**
     * Tachoni
     */
    public const LTS = 'lts';

    /**
     * Latu
     */
    public const LTU = 'ltu';

    /**
     * Luxembourgish
     */
    public const LTZ = 'ltz';

    /**
     * Luba-Lulua
     */
    public const LUA = 'lua';

    /**
     * Luba-Katanga
     */
    public const LUB = 'lub';

    /**
     * Aringa
     */
    public const LUC = 'luc';

    /**
     * Ludian
     */
    public const LUD = 'lud';

    /**
     * Luvale
     */
    public const LUE = 'lue';

    /**
     * Laua
     */
    public const LUF = 'luf';

    /**
     * Ganda
     */
    public const LUG = 'lug';

    /**
     * Leizhou Chinese
     */
    public const LUH = 'luh';

    /**
     * Luiseno
     */
    public const LUI = 'lui';

    /**
     * Luna
     */
    public const LUJ = 'luj';

    /**
     * Lunanakha
     */
    public const LUK = 'luk';

    /**
     * Olu'bo
     */
    public const LUL = 'lul';

    /**
     * Luimbi
     */
    public const LUM = 'lum';

    /**
     * Lunda
     */
    public const LUN = 'lun';

    /**
     * Luo (Kenya and Tanzania)
     */
    public const LUO = 'luo';

    /**
     * Lumbu
     */
    public const LUP = 'lup';

    /**
     * Lucumi
     */
    public const LUQ = 'luq';

    /**
     * Laura
     */
    public const LUR = 'lur';

    /**
     * Lushai
     */
    public const LUS = 'lus';

    /**
     * Lushootseed
     */
    public const LUT = 'lut';

    /**
     * Lumba-Yakkha
     */
    public const LUU = 'luu';

    /**
     * Luwati
     */
    public const LUV = 'luv';

    /**
     * Luo (Cameroon)
     */
    public const LUW = 'luw';

    /**
     * Luyia
     */
    public const LUY = 'luy';

    /**
     * Southern Luri
     */
    public const LUZ = 'luz';

    /**
     * Maku'a
     */
    public const LVA = 'lva';

    /**
     * Lavi
     */
    public const LVI = 'lvi';

    /**
     * Lavukaleve
     */
    public const LVK = 'lvk';

    /**
     * Lwel
     */
    public const LVL = 'lvl';

    /**
     * Standard Latvian
     */
    public const LVS = 'lvs';

    /**
     * Levuka
     */
    public const LVU = 'lvu';

    /**
     * Lwalu
     */
    public const LWA = 'lwa';

    /**
     * Lewo Eleng
     */
    public const LWE = 'lwe';

    /**
     * Wanga
     */
    public const LWG = 'lwg';

    /**
     * White Lachi
     */
    public const LWH = 'lwh';

    /**
     * Eastern Lawa
     */
    public const LWL = 'lwl';

    /**
     * Laomian
     */
    public const LWM = 'lwm';

    /**
     * Luwo
     */
    public const LWO = 'lwo';

    /**
     * Malawian Sign Language
     */
    public const LWS = 'lws';

    /**
     * Lewotobi
     */
    public const LWT = 'lwt';

    /**
     * Lawu
     */
    public const LWU = 'lwu';

    /**
     * Lewo
     */
    public const LWW = 'lww';

    /**
     * Lakurumau
     */
    public const LXM = 'lxm';

    /**
     * Layakha
     */
    public const LYA = 'lya';

    /**
     * Lyngngam
     */
    public const LYG = 'lyg';

    /**
     * Luyana
     */
    public const LYN = 'lyn';

    /**
     * Literary Chinese
     */
    public const LZH = 'lzh';

    /**
     * Litzlitz
     */
    public const LZL = 'lzl';

    /**
     * Leinong Naga
     */
    public const LZN = 'lzn';

    /**
     * Laz
     */
    public const LZZ = 'lzz';

    /**
     * San Jerónimo Tecóatl Mazatec
     */
    public const MAA = 'maa';

    /**
     * Yutanduchi Mixtec
     */
    public const MAB = 'mab';

    /**
     * Madurese
     */
    public const MAD = 'mad';

    /**
     * Bo-Rukul
     */
    public const MAE = 'mae';

    /**
     * Mafa
     */
    public const MAF = 'maf';

    /**
     * Magahi
     */
    public const MAG = 'mag';

    /**
     * Marshallese
     */
    public const MAH = 'mah';

    /**
     * Maithili
     */
    public const MAI = 'mai';

    /**
     * Jalapa De Díaz Mazatec
     */
    public const MAJ = 'maj';

    /**
     * Makasar
     */
    public const MAK = 'mak';

    /**
     * Malayalam
     */
    public const MAL = 'mal';

    /**
     * Mam
     */
    public const MAM = 'mam';

    /**
     * Mandingo
     */
    public const MAN = 'man';

    /**
     * Chiquihuitlán Mazatec
     */
    public const MAQ = 'maq';

    /**
     * Marathi
     */
    public const MAR = 'mar';

    /**
     * Masai
     */
    public const MAS = 'mas';

    /**
     * San Francisco Matlatzinca
     */
    public const MAT = 'mat';

    /**
     * Huautla Mazatec
     */
    public const MAU = 'mau';

    /**
     * Sateré-Mawé
     */
    public const MAV = 'mav';

    /**
     * Mampruli
     */
    public const MAW = 'maw';

    /**
     * North Moluccan Malay
     */
    public const MAX = 'max';

    /**
     * Central Mazahua
     */
    public const MAZ = 'maz';

    /**
     * Higaonon
     */
    public const MBA = 'mba';

    /**
     * Western Bukidnon Manobo
     */
    public const MBB = 'mbb';

    /**
     * Macushi
     */
    public const MBC = 'mbc';

    /**
     * Dibabawon Manobo
     */
    public const MBD = 'mbd';

    /**
     * Molale
     */
    public const MBE = 'mbe';

    /**
     * Baba Malay
     */
    public const MBF = 'mbf';

    /**
     * Mangseng
     */
    public const MBH = 'mbh';

    /**
     * Ilianen Manobo
     */
    public const MBI = 'mbi';

    /**
     * Nadëb
     */
    public const MBJ = 'mbj';

    /**
     * Malol
     */
    public const MBK = 'mbk';

    /**
     * Maxakalí
     */
    public const MBL = 'mbl';

    /**
     * Ombamba
     */
    public const MBM = 'mbm';

    /**
     * Macaguán
     */
    public const MBN = 'mbn';

    /**
     * Mbo (Cameroon)
     */
    public const MBO = 'mbo';

    /**
     * Malayo
     */
    public const MBP = 'mbp';

    /**
     * Maisin
     */
    public const MBQ = 'mbq';

    /**
     * Nukak Makú
     */
    public const MBR = 'mbr';

    /**
     * Sarangani Manobo
     */
    public const MBS = 'mbs';

    /**
     * Matigsalug Manobo
     */
    public const MBT = 'mbt';

    /**
     * Mbula-Bwazza
     */
    public const MBU = 'mbu';

    /**
     * Mbulungish
     */
    public const MBV = 'mbv';

    /**
     * Maring
     */
    public const MBW = 'mbw';

    /**
     * Mari (East Sepik Province)
     */
    public const MBX = 'mbx';

    /**
     * Memoni
     */
    public const MBY = 'mby';

    /**
     * Amoltepec Mixtec
     */
    public const MBZ = 'mbz';

    /**
     * Maca
     */
    public const MCA = 'mca';

    /**
     * Machiguenga
     */
    public const MCB = 'mcb';

    /**
     * Bitur
     */
    public const MCC = 'mcc';

    /**
     * Sharanahua
     */
    public const MCD = 'mcd';

    /**
     * Itundujia Mixtec
     */
    public const MCE = 'mce';

    /**
     * Matsés
     */
    public const MCF = 'mcf';

    /**
     * Mapoyo
     */
    public const MCG = 'mcg';

    /**
     * Maquiritari
     */
    public const MCH = 'mch';

    /**
     * Mese
     */
    public const MCI = 'mci';

    /**
     * Mvanip
     */
    public const MCJ = 'mcj';

    /**
     * Mbunda
     */
    public const MCK = 'mck';

    /**
     * Macaguaje
     */
    public const MCL = 'mcl';

    /**
     * Malaccan Creole Portuguese
     */
    public const MCM = 'mcm';

    /**
     * Masana
     */
    public const MCN = 'mcn';

    /**
     * Coatlán Mixe
     */
    public const MCO = 'mco';

    /**
     * Makaa
     */
    public const MCP = 'mcp';

    /**
     * Ese
     */
    public const MCQ = 'mcq';

    /**
     * Menya
     */
    public const MCR = 'mcr';

    /**
     * Mambai
     */
    public const MCS = 'mcs';

    /**
     * Mengisa
     */
    public const MCT = 'mct';

    /**
     * Cameroon Mambila
     */
    public const MCU = 'mcu';

    /**
     * Minanibai
     */
    public const MCV = 'mcv';

    /**
     * Mawa (Chad)
     */
    public const MCW = 'mcw';

    /**
     * Mpiemo
     */
    public const MCX = 'mcx';

    /**
     * South Watut
     */
    public const MCY = 'mcy';

    /**
     * Mawan
     */
    public const MCZ = 'mcz';

    /**
     * Mada (Nigeria)
     */
    public const MDA = 'mda';

    /**
     * Morigi
     */
    public const MDB = 'mdb';

    /**
     * Male (Papua New Guinea)
     */
    public const MDC = 'mdc';

    /**
     * Mbum
     */
    public const MDD = 'mdd';

    /**
     * Maba (Chad)
     */
    public const MDE = 'mde';

    /**
     * Moksha
     */
    public const MDF = 'mdf';

    /**
     * Massalat
     */
    public const MDG = 'mdg';

    /**
     * Maguindanaon
     */
    public const MDH = 'mdh';

    /**
     * Mamvu
     */
    public const MDI = 'mdi';

    /**
     * Mangbetu
     */
    public const MDJ = 'mdj';

    /**
     * Mangbutu
     */
    public const MDK = 'mdk';

    /**
     * Maltese Sign Language
     */
    public const MDL = 'mdl';

    /**
     * Mayogo
     */
    public const MDM = 'mdm';

    /**
     * Mbati
     */
    public const MDN = 'mdn';

    /**
     * Mbala
     */
    public const MDP = 'mdp';

    /**
     * Mbole
     */
    public const MDQ = 'mdq';

    /**
     * Mandar
     */
    public const MDR = 'mdr';

    /**
     * Maria (Papua New Guinea)
     */
    public const MDS = 'mds';

    /**
     * Mbere
     */
    public const MDT = 'mdt';

    /**
     * Mboko
     */
    public const MDU = 'mdu';

    /**
     * Santa Lucía Monteverde Mixtec
     */
    public const MDV = 'mdv';

    /**
     * Mbosi
     */
    public const MDW = 'mdw';

    /**
     * Dizin
     */
    public const MDX = 'mdx';

    /**
     * Male (Ethiopia)
     */
    public const MDY = 'mdy';

    /**
     * Suruí Do Pará
     */
    public const MDZ = 'mdz';

    /**
     * Menka
     */
    public const MEA = 'mea';

    /**
     * Ikobi
     */
    public const MEB = 'meb';

    /**
     * Marra
     */
    public const MEC = 'mec';

    /**
     * Melpa
     */
    public const MED = 'med';

    /**
     * Mengen
     */
    public const MEE = 'mee';

    /**
     * Megam
     */
    public const MEF = 'mef';

    /**
     * Southwestern Tlaxiaco Mixtec
     */
    public const MEH = 'meh';

    /**
     * Midob
     */
    public const MEI = 'mei';

    /**
     * Meyah
     */
    public const MEJ = 'mej';

    /**
     * Mekeo
     */
    public const MEK = 'mek';

    /**
     * Central Melanau
     */
    public const MEL = 'mel';

    /**
     * Mangala
     */
    public const MEM = 'mem';

    /**
     * Mende (Sierra Leone)
     */
    public const MEN = 'men';

    /**
     * Kedah Malay
     */
    public const MEO = 'meo';

    /**
     * Miriwoong
     */
    public const MEP = 'mep';

    /**
     * Merey
     */
    public const MEQ = 'meq';

    /**
     * Meru
     */
    public const MER = 'mer';

    /**
     * Masmaje
     */
    public const MES = 'mes';

    /**
     * Mato
     */
    public const MET = 'met';

    /**
     * Motu
     */
    public const MEU = 'meu';

    /**
     * Mano
     */
    public const MEV = 'mev';

    /**
     * Maaka
     */
    public const MEW = 'mew';

    /**
     * Hassaniyya
     */
    public const MEY = 'mey';

    /**
     * Menominee
     */
    public const MEZ = 'mez';

    /**
     * Pattani Malay
     */
    public const MFA = 'mfa';

    /**
     * Bangka
     */
    public const MFB = 'mfb';

    /**
     * Mba
     */
    public const MFC = 'mfc';

    /**
     * Mendankwe-Nkwen
     */
    public const MFD = 'mfd';

    /**
     * Morisyen
     */
    public const MFE = 'mfe';

    /**
     * Naki
     */
    public const MFF = 'mff';

    /**
     * Mogofin
     */
    public const MFG = 'mfg';

    /**
     * Matal
     */
    public const MFH = 'mfh';

    /**
     * Wandala
     */
    public const MFI = 'mfi';

    /**
     * Mefele
     */
    public const MFJ = 'mfj';

    /**
     * North Mofu
     */
    public const MFK = 'mfk';

    /**
     * Putai
     */
    public const MFL = 'mfl';

    /**
     * Marghi South
     */
    public const MFM = 'mfm';

    /**
     * Cross River Mbembe
     */
    public const MFN = 'mfn';

    /**
     * Mbe
     */
    public const MFO = 'mfo';

    /**
     * Makassar Malay
     */
    public const MFP = 'mfp';

    /**
     * Moba
     */
    public const MFQ = 'mfq';

    /**
     * Marrithiyel
     */
    public const MFR = 'mfr';

    /**
     * Mexican Sign Language
     */
    public const MFS = 'mfs';

    /**
     * Mokerang
     */
    public const MFT = 'mft';

    /**
     * Mbwela
     */
    public const MFU = 'mfu';

    /**
     * Mandjak
     */
    public const MFV = 'mfv';

    /**
     * Mulaha
     */
    public const MFW = 'mfw';

    /**
     * Melo
     */
    public const MFX = 'mfx';

    /**
     * Mayo
     */
    public const MFY = 'mfy';

    /**
     * Mabaan
     */
    public const MFZ = 'mfz';

    /**
     * Middle Irish (900-1200)
     */
    public const MGA = 'mga';

    /**
     * Mararit
     */
    public const MGB = 'mgb';

    /**
     * Morokodo
     */
    public const MGC = 'mgc';

    /**
     * Moru
     */
    public const MGD = 'mgd';

    /**
     * Mango
     */
    public const MGE = 'mge';

    /**
     * Maklew
     */
    public const MGF = 'mgf';

    /**
     * Mpumpong
     */
    public const MGG = 'mgg';

    /**
     * Makhuwa-Meetto
     */
    public const MGH = 'mgh';

    /**
     * Lijili
     */
    public const MGI = 'mgi';

    /**
     * Abureni
     */
    public const MGJ = 'mgj';

    /**
     * Mawes
     */
    public const MGK = 'mgk';

    /**
     * Maleu-Kilenge
     */
    public const MGL = 'mgl';

    /**
     * Mambae
     */
    public const MGM = 'mgm';

    /**
     * Mbangi
     */
    public const MGN = 'mgn';

    /**
     * Meta'
     */
    public const MGO = 'mgo';

    /**
     * Eastern Magar
     */
    public const MGP = 'mgp';

    /**
     * Malila
     */
    public const MGQ = 'mgq';

    /**
     * Mambwe-Lungu
     */
    public const MGR = 'mgr';

    /**
     * Manda (Tanzania)
     */
    public const MGS = 'mgs';

    /**
     * Mongol
     */
    public const MGT = 'mgt';

    /**
     * Mailu
     */
    public const MGU = 'mgu';

    /**
     * Matengo
     */
    public const MGV = 'mgv';

    /**
     * Matumbi
     */
    public const MGW = 'mgw';

    /**
     * Mbunga
     */
    public const MGY = 'mgy';

    /**
     * Mbugwe
     */
    public const MGZ = 'mgz';

    /**
     * Manda (India)
     */
    public const MHA = 'mha';

    /**
     * Mahongwe
     */
    public const MHB = 'mhb';

    /**
     * Mocho
     */
    public const MHC = 'mhc';

    /**
     * Mbugu
     */
    public const MHD = 'mhd';

    /**
     * Besisi
     */
    public const MHE = 'mhe';

    /**
     * Mamaa
     */
    public const MHF = 'mhf';

    /**
     * Margu
     */
    public const MHG = 'mhg';

    /**
     * Ma'di
     */
    public const MHI = 'mhi';

    /**
     * Mogholi
     */
    public const MHJ = 'mhj';

    /**
     * Mungaka
     */
    public const MHK = 'mhk';

    /**
     * Mauwake
     */
    public const MHL = 'mhl';

    /**
     * Makhuwa-Moniga
     */
    public const MHM = 'mhm';

    /**
     * Mòcheno
     */
    public const MHN = 'mhn';

    /**
     * Mashi (Zambia)
     */
    public const MHO = 'mho';

    /**
     * Balinese Malay
     */
    public const MHP = 'mhp';

    /**
     * Mandan
     */
    public const MHQ = 'mhq';

    /**
     * Eastern Mari
     */
    public const MHR = 'mhr';

    /**
     * Buru (Indonesia)
     */
    public const MHS = 'mhs';

    /**
     * Mandahuaca
     */
    public const MHT = 'mht';

    /**
     * Digaro-Mishmi
     */
    public const MHU = 'mhu';

    /**
     * Mbukushu
     */
    public const MHW = 'mhw';

    /**
     * Maru
     */
    public const MHX = 'mhx';

    /**
     * Ma'anyan
     */
    public const MHY = 'mhy';

    /**
     * Mor (Mor Islands)
     */
    public const MHZ = 'mhz';

    /**
     * Miami
     */
    public const MIA = 'mia';

    /**
     * Atatláhuca Mixtec
     */
    public const MIB = 'mib';

    /**
     * Mi'kmaq
     */
    public const MIC = 'mic';

    /**
     * Mandaic
     */
    public const MID = 'mid';

    /**
     * Ocotepec Mixtec
     */
    public const MIE = 'mie';

    /**
     * Mofu-Gudur
     */
    public const MIF = 'mif';

    /**
     * San Miguel El Grande Mixtec
     */
    public const MIG = 'mig';

    /**
     * Chayuco Mixtec
     */
    public const MIH = 'mih';

    /**
     * Chigmecatitlán Mixtec
     */
    public const MII = 'mii';

    /**
     * Abar
     */
    public const MIJ = 'mij';

    /**
     * Mikasuki
     */
    public const MIK = 'mik';

    /**
     * Peñoles Mixtec
     */
    public const MIL = 'mil';

    /**
     * Alacatlatzala Mixtec
     */
    public const MIM = 'mim';

    /**
     * Minangkabau
     */
    public const MIN = 'min';

    /**
     * Pinotepa Nacional Mixtec
     */
    public const MIO = 'mio';

    /**
     * Apasco-Apoala Mixtec
     */
    public const MIP = 'mip';

    /**
     * Mískito
     */
    public const MIQ = 'miq';

    /**
     * Isthmus Mixe
     */
    public const MIR = 'mir';

    /**
     * Uncoded languages
     */
    public const MIS = 'mis';

    /**
     * Southern Puebla Mixtec
     */
    public const MIT = 'mit';

    /**
     * Cacaloxtepec Mixtec
     */
    public const MIU = 'miu';

    /**
     * Akoye
     */
    public const MIW = 'miw';

    /**
     * Mixtepec Mixtec
     */
    public const MIX = 'mix';

    /**
     * Ayutla Mixtec
     */
    public const MIY = 'miy';

    /**
     * Coatzospan Mixtec
     */
    public const MIZ = 'miz';

    /**
     * Makalero
     */
    public const MJB = 'mjb';

    /**
     * San Juan Colorado Mixtec
     */
    public const MJC = 'mjc';

    /**
     * Northwest Maidu
     */
    public const MJD = 'mjd';

    /**
     * Muskum
     */
    public const MJE = 'mje';

    /**
     * Tu
     */
    public const MJG = 'mjg';

    /**
     * Mwera (Nyasa)
     */
    public const MJH = 'mjh';

    /**
     * Kim Mun
     */
    public const MJI = 'mji';

    /**
     * Mawak
     */
    public const MJJ = 'mjj';

    /**
     * Matukar
     */
    public const MJK = 'mjk';

    /**
     * Mandeali
     */
    public const MJL = 'mjl';

    /**
     * Medebur
     */
    public const MJM = 'mjm';

    /**
     * Ma (Papua New Guinea)
     */
    public const MJN = 'mjn';

    /**
     * Malankuravan
     */
    public const MJO = 'mjo';

    /**
     * Malapandaram
     */
    public const MJP = 'mjp';

    /**
     * Malaryan
     */
    public const MJQ = 'mjq';

    /**
     * Malavedan
     */
    public const MJR = 'mjr';

    /**
     * Miship
     */
    public const MJS = 'mjs';

    /**
     * Sauria Paharia
     */
    public const MJT = 'mjt';

    /**
     * Manna-Dora
     */
    public const MJU = 'mju';

    /**
     * Mannan
     */
    public const MJV = 'mjv';

    /**
     * Karbi
     */
    public const MJW = 'mjw';

    /**
     * Mahali
     */
    public const MJX = 'mjx';

    /**
     * Mahican
     */
    public const MJY = 'mjy';

    /**
     * Majhi
     */
    public const MJZ = 'mjz';

    /**
     * Mbre
     */
    public const MKA = 'mka';

    /**
     * Mal Paharia
     */
    public const MKB = 'mkb';

    /**
     * Siliput
     */
    public const MKC = 'mkc';

    /**
     * Macedonian
     */
    public const MKD = 'mkd';

    /**
     * Mawchi
     */
    public const MKE = 'mke';

    /**
     * Miya
     */
    public const MKF = 'mkf';

    /**
     * Mak (China)
     */
    public const MKG = 'mkg';

    /**
     * Dhatki
     */
    public const MKI = 'mki';

    /**
     * Mokilese
     */
    public const MKJ = 'mkj';

    /**
     * Byep
     */
    public const MKK = 'mkk';

    /**
     * Mokole
     */
    public const MKL = 'mkl';

    /**
     * Moklen
     */
    public const MKM = 'mkm';

    /**
     * Kupang Malay
     */
    public const MKN = 'mkn';

    /**
     * Mingang Doso
     */
    public const MKO = 'mko';

    /**
     * Moikodi
     */
    public const MKP = 'mkp';

    /**
     * Bay Miwok
     */
    public const MKQ = 'mkq';

    /**
     * Malas
     */
    public const MKR = 'mkr';

    /**
     * Silacayoapan Mixtec
     */
    public const MKS = 'mks';

    /**
     * Vamale
     */
    public const MKT = 'mkt';

    /**
     * Konyanka Maninka
     */
    public const MKU = 'mku';

    /**
     * Mafea
     */
    public const MKV = 'mkv';

    /**
     * Kituba (Congo)
     */
    public const MKW = 'mkw';

    /**
     * Kinamiging Manobo
     */
    public const MKX = 'mkx';

    /**
     * East Makian
     */
    public const MKY = 'mky';

    /**
     * Makasae
     */
    public const MKZ = 'mkz';

    /**
     * Malo
     */
    public const MLA = 'mla';

    /**
     * Mbule
     */
    public const MLB = 'mlb';

    /**
     * Cao Lan
     */
    public const MLC = 'mlc';

    /**
     * Manambu
     */
    public const MLE = 'mle';

    /**
     * Mal
     */
    public const MLF = 'mlf';

    /**
     * Malagasy
     */
    public const MLG = 'mlg';

    /**
     * Mape
     */
    public const MLH = 'mlh';

    /**
     * Malimpung
     */
    public const MLI = 'mli';

    /**
     * Miltu
     */
    public const MLJ = 'mlj';

    /**
     * Ilwana
     */
    public const MLK = 'mlk';

    /**
     * Malua Bay
     */
    public const MLL = 'mll';

    /**
     * Mulam
     */
    public const MLM = 'mlm';

    /**
     * Malango
     */
    public const MLN = 'mln';

    /**
     * Mlomp
     */
    public const MLO = 'mlo';

    /**
     * Bargam
     */
    public const MLP = 'mlp';

    /**
     * Western Maninkakan
     */
    public const MLQ = 'mlq';

    /**
     * Vame
     */
    public const MLR = 'mlr';

    /**
     * Masalit
     */
    public const MLS = 'mls';

    /**
     * Maltese
     */
    public const MLT = 'mlt';

    /**
     * To'abaita
     */
    public const MLU = 'mlu';

    /**
     * Motlav
     */
    public const MLV = 'mlv';

    /**
     * Moloko
     */
    public const MLW = 'mlw';

    /**
     * Malfaxal
     */
    public const MLX = 'mlx';

    /**
     * Malaynon
     */
    public const MLZ = 'mlz';

    /**
     * Mama
     */
    public const MMA = 'mma';

    /**
     * Momina
     */
    public const MMB = 'mmb';

    /**
     * Michoacán Mazahua
     */
    public const MMC = 'mmc';

    /**
     * Maonan
     */
    public const MMD = 'mmd';

    /**
     * Mae
     */
    public const MME = 'mme';

    /**
     * Mundat
     */
    public const MMF = 'mmf';

    /**
     * North Ambrym
     */
    public const MMG = 'mmg';

    /**
     * Mehináku
     */
    public const MMH = 'mmh';

    /**
     * Hember Avu
     */
    public const MMI = 'mmi';

    /**
     * Majhwar
     */
    public const MMJ = 'mmj';

    /**
     * Mukha-Dora
     */
    public const MMK = 'mmk';

    /**
     * Man Met
     */
    public const MML = 'mml';

    /**
     * Maii
     */
    public const MMM = 'mmm';

    /**
     * Mamanwa
     */
    public const MMN = 'mmn';

    /**
     * Mangga Buang
     */
    public const MMO = 'mmo';

    /**
     * Siawi
     */
    public const MMP = 'mmp';

    /**
     * Musak
     */
    public const MMQ = 'mmq';

    /**
     * Western Xiangxi Miao
     */
    public const MMR = 'mmr';

    /**
     * Malalamai
     */
    public const MMT = 'mmt';

    /**
     * Mmaala
     */
    public const MMU = 'mmu';

    /**
     * Miriti
     */
    public const MMV = 'mmv';

    /**
     * Emae
     */
    public const MMW = 'mmw';

    /**
     * Madak
     */
    public const MMX = 'mmx';

    /**
     * Migaama
     */
    public const MMY = 'mmy';

    /**
     * Mabaale
     */
    public const MMZ = 'mmz';

    /**
     * Mbula
     */
    public const MNA = 'mna';

    /**
     * Muna
     */
    public const MNB = 'mnb';

    /**
     * Manchu
     */
    public const MNC = 'mnc';

    /**
     * Mondé
     */
    public const MND = 'mnd';

    /**
     * Naba
     */
    public const MNE = 'mne';

    /**
     * Mundani
     */
    public const MNF = 'mnf';

    /**
     * Eastern Mnong
     */
    public const MNG = 'mng';

    /**
     * Mono (Democratic Republic of Congo)
     */
    public const MNH = 'mnh';

    /**
     * Manipuri
     */
    public const MNI = 'mni';

    /**
     * Munji
     */
    public const MNJ = 'mnj';

    /**
     * Mandinka
     */
    public const MNK = 'mnk';

    /**
     * Tiale
     */
    public const MNL = 'mnl';

    /**
     * Mapena
     */
    public const MNM = 'mnm';

    /**
     * Southern Mnong
     */
    public const MNN = 'mnn';

    /**
     * Min Bei Chinese
     */
    public const MNP = 'mnp';

    /**
     * Minriq
     */
    public const MNQ = 'mnq';

    /**
     * Mono (USA)
     */
    public const MNR = 'mnr';

    /**
     * Mansi
     */
    public const MNS = 'mns';

    /**
     * Mer
     */
    public const MNU = 'mnu';

    /**
     * Rennell-Bellona
     */
    public const MNV = 'mnv';

    /**
     * Mon
     */
    public const MNW = 'mnw';

    /**
     * Manikion
     */
    public const MNX = 'mnx';

    /**
     * Manyawa
     */
    public const MNY = 'mny';

    /**
     * Moni
     */
    public const MNZ = 'mnz';

    /**
     * Mwan
     */
    public const MOA = 'moa';

    /**
     * Mocoví
     */
    public const MOC = 'moc';

    /**
     * Mobilian
     */
    public const MOD = 'mod';

    /**
     * Innu
     */
    public const MOE = 'moe';

    /**
     * Mongondow
     */
    public const MOG = 'mog';

    /**
     * Mohawk
     */
    public const MOH = 'moh';

    /**
     * Mboi
     */
    public const MOI = 'moi';

    /**
     * Monzombo
     */
    public const MOJ = 'moj';

    /**
     * Morori
     */
    public const MOK = 'mok';

    /**
     * Mangue
     */
    public const MOM = 'mom';

    /**
     * Mongolian
     */
    public const MON = 'mon';

    /**
     * Monom
     */
    public const MOO = 'moo';

    /**
     * Mopán Maya
     */
    public const MOP = 'mop';

    /**
     * Mor (Bomberai Peninsula)
     */
    public const MOQ = 'moq';

    /**
     * Moro
     */
    public const MOR = 'mor';

    /**
     * Mossi
     */
    public const MOS = 'mos';

    /**
     * Barí
     */
    public const MOT = 'mot';

    /**
     * Mogum
     */
    public const MOU = 'mou';

    /**
     * Mohave
     */
    public const MOV = 'mov';

    /**
     * Moi (Congo)
     */
    public const MOW = 'mow';

    /**
     * Molima
     */
    public const MOX = 'mox';

    /**
     * Shekkacho
     */
    public const MOY = 'moy';

    /**
     * Mukulu
     */
    public const MOZ = 'moz';

    /**
     * Mpoto
     */
    public const MPA = 'mpa';

    /**
     * Malak Malak
     */
    public const MPB = 'mpb';

    /**
     * Mangarrayi
     */
    public const MPC = 'mpc';

    /**
     * Machinere
     */
    public const MPD = 'mpd';

    /**
     * Majang
     */
    public const MPE = 'mpe';

    /**
     * Marba
     */
    public const MPG = 'mpg';

    /**
     * Maung
     */
    public const MPH = 'mph';

    /**
     * Mpade
     */
    public const MPI = 'mpi';

    /**
     * Martu Wangka
     */
    public const MPJ = 'mpj';

    /**
     * Mbara (Chad)
     */
    public const MPK = 'mpk';

    /**
     * Middle Watut
     */
    public const MPL = 'mpl';

    /**
     * Yosondúa Mixtec
     */
    public const MPM = 'mpm';

    /**
     * Mindiri
     */
    public const MPN = 'mpn';

    /**
     * Miu
     */
    public const MPO = 'mpo';

    /**
     * Migabac
     */
    public const MPP = 'mpp';

    /**
     * Matís
     */
    public const MPQ = 'mpq';

    /**
     * Vangunu
     */
    public const MPR = 'mpr';

    /**
     * Dadibi
     */
    public const MPS = 'mps';

    /**
     * Mian
     */
    public const MPT = 'mpt';

    /**
     * Makuráp
     */
    public const MPU = 'mpu';

    /**
     * Mungkip
     */
    public const MPV = 'mpv';

    /**
     * Mapidian
     */
    public const MPW = 'mpw';

    /**
     * Misima-Panaeati
     */
    public const MPX = 'mpx';

    /**
     * Mapia
     */
    public const MPY = 'mpy';

    /**
     * Mpi
     */
    public const MPZ = 'mpz';

    /**
     * Maba (Indonesia)
     */
    public const MQA = 'mqa';

    /**
     * Mbuko
     */
    public const MQB = 'mqb';

    /**
     * Mangole
     */
    public const MQC = 'mqc';

    /**
     * Matepi
     */
    public const MQE = 'mqe';

    /**
     * Momuna
     */
    public const MQF = 'mqf';

    /**
     * Kota Bangun Kutai Malay
     */
    public const MQG = 'mqg';

    /**
     * Tlazoyaltepec Mixtec
     */
    public const MQH = 'mqh';

    /**
     * Mariri
     */
    public const MQI = 'mqi';

    /**
     * Mamasa
     */
    public const MQJ = 'mqj';

    /**
     * Rajah Kabunsuwan Manobo
     */
    public const MQK = 'mqk';

    /**
     * Mbelime
     */
    public const MQL = 'mql';

    /**
     * South Marquesan
     */
    public const MQM = 'mqm';

    /**
     * Moronene
     */
    public const MQN = 'mqn';

    /**
     * Modole
     */
    public const MQO = 'mqo';

    /**
     * Manipa
     */
    public const MQP = 'mqp';

    /**
     * Minokok
     */
    public const MQQ = 'mqq';

    /**
     * Mander
     */
    public const MQR = 'mqr';

    /**
     * West Makian
     */
    public const MQS = 'mqs';

    /**
     * Mok
     */
    public const MQT = 'mqt';

    /**
     * Mandari
     */
    public const MQU = 'mqu';

    /**
     * Mosimo
     */
    public const MQV = 'mqv';

    /**
     * Murupi
     */
    public const MQW = 'mqw';

    /**
     * Mamuju
     */
    public const MQX = 'mqx';

    /**
     * Manggarai
     */
    public const MQY = 'mqy';

    /**
     * Pano
     */
    public const MQZ = 'mqz';

    /**
     * Mlabri
     */
    public const MRA = 'mra';

    /**
     * Marino
     */
    public const MRB = 'mrb';

    /**
     * Maricopa
     */
    public const MRC = 'mrc';

    /**
     * Western Magar
     */
    public const MRD = 'mrd';

    /**
     * Martha's Vineyard Sign Language
     */
    public const MRE = 'mre';

    /**
     * Elseng
     */
    public const MRF = 'mrf';

    /**
     * Mising
     */
    public const MRG = 'mrg';

    /**
     * Mara Chin
     */
    public const MRH = 'mrh';

    /**
     * Maori
     */
    public const MRI = 'mri';

    /**
     * Western Mari
     */
    public const MRJ = 'mrj';

    /**
     * Hmwaveke
     */
    public const MRK = 'mrk';

    /**
     * Mortlockese
     */
    public const MRL = 'mrl';

    /**
     * Merlav
     */
    public const MRM = 'mrm';

    /**
     * Cheke Holo
     */
    public const MRN = 'mrn';

    /**
     * Mru
     */
    public const MRO = 'mro';

    /**
     * Morouas
     */
    public const MRP = 'mrp';

    /**
     * North Marquesan
     */
    public const MRQ = 'mrq';

    /**
     * Maria (India)
     */
    public const MRR = 'mrr';

    /**
     * Maragus
     */
    public const MRS = 'mrs';

    /**
     * Marghi Central
     */
    public const MRT = 'mrt';

    /**
     * Mono (Cameroon)
     */
    public const MRU = 'mru';

    /**
     * Mangareva
     */
    public const MRV = 'mrv';

    /**
     * Maranao
     */
    public const MRW = 'mrw';

    /**
     * Maremgi
     */
    public const MRX = 'mrx';

    /**
     * Mandaya
     */
    public const MRY = 'mry';

    /**
     * Marind
     */
    public const MRZ = 'mrz';

    /**
     * Malay (macrolanguage)
     */
    public const MSA = 'msa';

    /**
     * Masbatenyo
     */
    public const MSB = 'msb';

    /**
     * Sankaran Maninka
     */
    public const MSC = 'msc';

    /**
     * Yucatec Maya Sign Language
     */
    public const MSD = 'msd';

    /**
     * Musey
     */
    public const MSE = 'mse';

    /**
     * Mekwei
     */
    public const MSF = 'msf';

    /**
     * Moraid
     */
    public const MSG = 'msg';

    /**
     * Masikoro Malagasy
     */
    public const MSH = 'msh';

    /**
     * Sabah Malay
     */
    public const MSI = 'msi';

    /**
     * Ma (Democratic Republic of Congo)
     */
    public const MSJ = 'msj';

    /**
     * Mansaka
     */
    public const MSK = 'msk';

    /**
     * Molof
     */
    public const MSL = 'msl';

    /**
     * Agusan Manobo
     */
    public const MSM = 'msm';

    /**
     * Vurës
     */
    public const MSN = 'msn';

    /**
     * Mombum
     */
    public const MSO = 'mso';

    /**
     * Maritsauá
     */
    public const MSP = 'msp';

    /**
     * Caac
     */
    public const MSQ = 'msq';

    /**
     * Mongolian Sign Language
     */
    public const MSR = 'msr';

    /**
     * West Masela
     */
    public const MSS = 'mss';

    /**
     * Musom
     */
    public const MSU = 'msu';

    /**
     * Maslam
     */
    public const MSV = 'msv';

    /**
     * Mansoanka
     */
    public const MSW = 'msw';

    /**
     * Moresada
     */
    public const MSX = 'msx';

    /**
     * Aruamu
     */
    public const MSY = 'msy';

    /**
     * Momare
     */
    public const MSZ = 'msz';

    /**
     * Cotabato Manobo
     */
    public const MTA = 'mta';

    /**
     * Anyin Morofo
     */
    public const MTB = 'mtb';

    /**
     * Munit
     */
    public const MTC = 'mtc';

    /**
     * Mualang
     */
    public const MTD = 'mtd';

    /**
     * Mono (Solomon Islands)
     */
    public const MTE = 'mte';

    /**
     * Murik (Papua New Guinea)
     */
    public const MTF = 'mtf';

    /**
     * Una
     */
    public const MTG = 'mtg';

    /**
     * Munggui
     */
    public const MTH = 'mth';

    /**
     * Maiwa (Papua New Guinea)
     */
    public const MTI = 'mti';

    /**
     * Moskona
     */
    public const MTJ = 'mtj';

    /**
     * Mbe'
     */
    public const MTK = 'mtk';

    /**
     * Montol
     */
    public const MTL = 'mtl';

    /**
     * Mator
     */
    public const MTM = 'mtm';

    /**
     * Matagalpa
     */
    public const MTN = 'mtn';

    /**
     * Totontepec Mixe
     */
    public const MTO = 'mto';

    /**
     * Wichí Lhamtés Nocten
     */
    public const MTP = 'mtp';

    /**
     * Muong
     */
    public const MTQ = 'mtq';

    /**
     * Mewari
     */
    public const MTR = 'mtr';

    /**
     * Yora
     */
    public const MTS = 'mts';

    /**
     * Mota
     */
    public const MTT = 'mtt';

    /**
     * Tututepec Mixtec
     */
    public const MTU = 'mtu';

    /**
     * Asaro'o
     */
    public const MTV = 'mtv';

    /**
     * Southern Binukidnon
     */
    public const MTW = 'mtw';

    /**
     * Tidaá Mixtec
     */
    public const MTX = 'mtx';

    /**
     * Nabi
     */
    public const MTY = 'mty';

    /**
     * Mundang
     */
    public const MUA = 'mua';

    /**
     * Mubi
     */
    public const MUB = 'mub';

    /**
     * Ajumbu
     */
    public const MUC = 'muc';

    /**
     * Mednyj Aleut
     */
    public const MUD = 'mud';

    /**
     * Media Lengua
     */
    public const MUE = 'mue';

    /**
     * Musgu
     */
    public const MUG = 'mug';

    /**
     * Mündü
     */
    public const MUH = 'muh';

    /**
     * Musi
     */
    public const MUI = 'mui';

    /**
     * Mabire
     */
    public const MUJ = 'muj';

    /**
     * Mugom
     */
    public const MUK = 'muk';

    /**
     * Multiple languages
     */
    public const MUL = 'mul';

    /**
     * Maiwala
     */
    public const MUM = 'mum';

    /**
     * Nyong
     */
    public const MUO = 'muo';

    /**
     * Malvi
     */
    public const MUP = 'mup';

    /**
     * Eastern Xiangxi Miao
     */
    public const MUQ = 'muq';

    /**
     * Murle
     */
    public const MUR = 'mur';

    /**
     * Creek
     */
    public const MUS = 'mus';

    /**
     * Western Muria
     */
    public const MUT = 'mut';

    /**
     * Yaaku
     */
    public const MUU = 'muu';

    /**
     * Muthuvan
     */
    public const MUV = 'muv';

    /**
     * Bo-Ung
     */
    public const MUX = 'mux';

    /**
     * Muyang
     */
    public const MUY = 'muy';

    /**
     * Mursi
     */
    public const MUZ = 'muz';

    /**
     * Manam
     */
    public const MVA = 'mva';

    /**
     * Mattole
     */
    public const MVB = 'mvb';

    /**
     * Mamboru
     */
    public const MVD = 'mvd';

    /**
     * Marwari (Pakistan)
     */
    public const MVE = 'mve';

    /**
     * Peripheral Mongolian
     */
    public const MVF = 'mvf';

    /**
     * Yucuañe Mixtec
     */
    public const MVG = 'mvg';

    /**
     * Mulgi
     */
    public const MVH = 'mvh';

    /**
     * Miyako
     */
    public const MVI = 'mvi';

    /**
     * Mekmek
     */
    public const MVK = 'mvk';

    /**
     * Mbara (Australia)
     */
    public const MVL = 'mvl';

    /**
     * Minaveha
     */
    public const MVN = 'mvn';

    /**
     * Marovo
     */
    public const MVO = 'mvo';

    /**
     * Duri
     */
    public const MVP = 'mvp';

    /**
     * Moere
     */
    public const MVQ = 'mvq';

    /**
     * Marau
     */
    public const MVR = 'mvr';

    /**
     * Massep
     */
    public const MVS = 'mvs';

    /**
     * Mpotovoro
     */
    public const MVT = 'mvt';

    /**
     * Marfa
     */
    public const MVU = 'mvu';

    /**
     * Tagal Murut
     */
    public const MVV = 'mvv';

    /**
     * Machinga
     */
    public const MVW = 'mvw';

    /**
     * Meoswar
     */
    public const MVX = 'mvx';

    /**
     * Indus Kohistani
     */
    public const MVY = 'mvy';

    /**
     * Mesqan
     */
    public const MVZ = 'mvz';

    /**
     * Mwatebu
     */
    public const MWA = 'mwa';

    /**
     * Juwal
     */
    public const MWB = 'mwb';

    /**
     * Are
     */
    public const MWC = 'mwc';

    /**
     * Mwera (Chimwera)
     */
    public const MWE = 'mwe';

    /**
     * Murrinh-Patha
     */
    public const MWF = 'mwf';

    /**
     * Aiklep
     */
    public const MWG = 'mwg';

    /**
     * Mouk-Aria
     */
    public const MWH = 'mwh';

    /**
     * Labo
     */
    public const MWI = 'mwi';

    /**
     * Kita Maninkakan
     */
    public const MWK = 'mwk';

    /**
     * Mirandese
     */
    public const MWL = 'mwl';

    /**
     * Sar
     */
    public const MWM = 'mwm';

    /**
     * Nyamwanga
     */
    public const MWN = 'mwn';

    /**
     * Central Maewo
     */
    public const MWO = 'mwo';

    /**
     * Kala Lagaw Ya
     */
    public const MWP = 'mwp';

    /**
     * Mün Chin
     */
    public const MWQ = 'mwq';

    /**
     * Marwari
     */
    public const MWR = 'mwr';

    /**
     * Mwimbi-Muthambi
     */
    public const MWS = 'mws';

    /**
     * Moken
     */
    public const MWT = 'mwt';

    /**
     * Mittu
     */
    public const MWU = 'mwu';

    /**
     * Mentawai
     */
    public const MWV = 'mwv';

    /**
     * Hmong Daw
     */
    public const MWW = 'mww';

    /**
     * Moingi
     */
    public const MWZ = 'mwz';

    /**
     * Northwest Oaxaca Mixtec
     */
    public const MXA = 'mxa';

    /**
     * Tezoatlán Mixtec
     */
    public const MXB = 'mxb';

    /**
     * Manyika
     */
    public const MXC = 'mxc';

    /**
     * Modang
     */
    public const MXD = 'mxd';

    /**
     * Mele-Fila
     */
    public const MXE = 'mxe';

    /**
     * Malgbe
     */
    public const MXF = 'mxf';

    /**
     * Mbangala
     */
    public const MXG = 'mxg';

    /**
     * Mvuba
     */
    public const MXH = 'mxh';

    /**
     * Mozarabic
     */
    public const MXI = 'mxi';

    /**
     * Miju-Mishmi
     */
    public const MXJ = 'mxj';

    /**
     * Monumbo
     */
    public const MXK = 'mxk';

    /**
     * Maxi Gbe
     */
    public const MXL = 'mxl';

    /**
     * Meramera
     */
    public const MXM = 'mxm';

    /**
     * Moi (Indonesia)
     */
    public const MXN = 'mxn';

    /**
     * Mbowe
     */
    public const MXO = 'mxo';

    /**
     * Tlahuitoltepec Mixe
     */
    public const MXP = 'mxp';

    /**
     * Juquila Mixe
     */
    public const MXQ = 'mxq';

    /**
     * Murik (Malaysia)
     */
    public const MXR = 'mxr';

    /**
     * Huitepec Mixtec
     */
    public const MXS = 'mxs';

    /**
     * Jamiltepec Mixtec
     */
    public const MXT = 'mxt';

    /**
     * Mada (Cameroon)
     */
    public const MXU = 'mxu';

    /**
     * Metlatónoc Mixtec
     */
    public const MXV = 'mxv';

    /**
     * Namo
     */
    public const MXW = 'mxw';

    /**
     * Mahou
     */
    public const MXX = 'mxx';

    /**
     * Southeastern Nochixtlán Mixtec
     */
    public const MXY = 'mxy';

    /**
     * Central Masela
     */
    public const MXZ = 'mxz';

    /**
     * Burmese
     */
    public const MYA = 'mya';

    /**
     * Mbay
     */
    public const MYB = 'myb';

    /**
     * Mayeka
     */
    public const MYC = 'myc';

    /**
     * Myene
     */
    public const MYE = 'mye';

    /**
     * Bambassi
     */
    public const MYF = 'myf';

    /**
     * Manta
     */
    public const MYG = 'myg';

    /**
     * Makah
     */
    public const MYH = 'myh';

    /**
     * Mangayat
     */
    public const MYJ = 'myj';

    /**
     * Mamara Senoufo
     */
    public const MYK = 'myk';

    /**
     * Moma
     */
    public const MYL = 'myl';

    /**
     * Me'en
     */
    public const MYM = 'mym';

    /**
     * Anfillo
     */
    public const MYO = 'myo';

    /**
     * Pirahã
     */
    public const MYP = 'myp';

    /**
     * Muniche
     */
    public const MYR = 'myr';

    /**
     * Mesmes
     */
    public const MYS = 'mys';

    /**
     * Mundurukú
     */
    public const MYU = 'myu';

    /**
     * Erzya
     */
    public const MYV = 'myv';

    /**
     * Muyuw
     */
    public const MYW = 'myw';

    /**
     * Masaaba
     */
    public const MYX = 'myx';

    /**
     * Macuna
     */
    public const MYY = 'myy';

    /**
     * Classical Mandaic
     */
    public const MYZ = 'myz';

    /**
     * Santa María Zacatepec Mixtec
     */
    public const MZA = 'mza';

    /**
     * Tumzabt
     */
    public const MZB = 'mzb';

    /**
     * Madagascar Sign Language
     */
    public const MZC = 'mzc';

    /**
     * Malimba
     */
    public const MZD = 'mzd';

    /**
     * Morawa
     */
    public const MZE = 'mze';

    /**
     * Monastic Sign Language
     */
    public const MZG = 'mzg';

    /**
     * Wichí Lhamtés Güisnay
     */
    public const MZH = 'mzh';

    /**
     * Ixcatlán Mazatec
     */
    public const MZI = 'mzi';

    /**
     * Manya
     */
    public const MZJ = 'mzj';

    /**
     * Nigeria Mambila
     */
    public const MZK = 'mzk';

    /**
     * Mazatlán Mixe
     */
    public const MZL = 'mzl';

    /**
     * Mumuye
     */
    public const MZM = 'mzm';

    /**
     * Mazanderani
     */
    public const MZN = 'mzn';

    /**
     * Matipuhy
     */
    public const MZO = 'mzo';

    /**
     * Movima
     */
    public const MZP = 'mzp';

    /**
     * Mori Atas
     */
    public const MZQ = 'mzq';

    /**
     * Marúbo
     */
    public const MZR = 'mzr';

    /**
     * Macanese
     */
    public const MZS = 'mzs';

    /**
     * Mintil
     */
    public const MZT = 'mzt';

    /**
     * Inapang
     */
    public const MZU = 'mzu';

    /**
     * Manza
     */
    public const MZV = 'mzv';

    /**
     * Deg
     */
    public const MZW = 'mzw';

    /**
     * Mawayana
     */
    public const MZX = 'mzx';

    /**
     * Mozambican Sign Language
     */
    public const MZY = 'mzy';

    /**
     * Maiadomu
     */
    public const MZZ = 'mzz';

    /**
     * Namla
     */
    public const NAA = 'naa';

    /**
     * Southern Nambikuára
     */
    public const NAB = 'nab';

    /**
     * Narak
     */
    public const NAC = 'nac';

    /**
     * Naka'ela
     */
    public const NAE = 'nae';

    /**
     * Nabak
     */
    public const NAF = 'naf';

    /**
     * Naga Pidgin
     */
    public const NAG = 'nag';

    /**
     * Nalu
     */
    public const NAJ = 'naj';

    /**
     * Nakanai
     */
    public const NAK = 'nak';

    /**
     * Nalik
     */
    public const NAL = 'nal';

    /**
     * Ngan'gityemerri
     */
    public const NAM = 'nam';

    /**
     * Min Nan Chinese
     */
    public const NAN = 'nan';

    /**
     * Naaba
     */
    public const NAO = 'nao';

    /**
     * Neapolitan
     */
    public const NAP = 'nap';

    /**
     * Khoekhoe
     */
    public const NAQ = 'naq';

    /**
     * Iguta
     */
    public const NAR = 'nar';

    /**
     * Naasioi
     */
    public const NAS = 'nas';

    /**
     * Ca̱hungwa̱rya̱
     */
    public const NAT = 'nat';

    /**
     * Nauru
     */
    public const NAU = 'nau';

    /**
     * Navajo
     */
    public const NAV = 'nav';

    /**
     * Nawuri
     */
    public const NAW = 'naw';

    /**
     * Nakwi
     */
    public const NAX = 'nax';

    /**
     * Ngarrindjeri
     */
    public const NAY = 'nay';

    /**
     * Coatepec Nahuatl
     */
    public const NAZ = 'naz';

    /**
     * Nyemba
     */
    public const NBA = 'nba';

    /**
     * Ndoe
     */
    public const NBB = 'nbb';

    /**
     * Chang Naga
     */
    public const NBC = 'nbc';

    /**
     * Ngbinda
     */
    public const NBD = 'nbd';

    /**
     * Konyak Naga
     */
    public const NBE = 'nbe';

    /**
     * Nagarchal
     */
    public const NBG = 'nbg';

    /**
     * Ngamo
     */
    public const NBH = 'nbh';

    /**
     * Mao Naga
     */
    public const NBI = 'nbi';

    /**
     * Ngarinyman
     */
    public const NBJ = 'nbj';

    /**
     * Nake
     */
    public const NBK = 'nbk';

    /**
     * South Ndebele
     */
    public const NBL = 'nbl';

    /**
     * Ngbaka Ma'bo
     */
    public const NBM = 'nbm';

    /**
     * Kuri
     */
    public const NBN = 'nbn';

    /**
     * Nkukoli
     */
    public const NBO = 'nbo';

    /**
     * Nnam
     */
    public const NBP = 'nbp';

    /**
     * Nggem
     */
    public const NBQ = 'nbq';

    /**
     * Numana
     */
    public const NBR = 'nbr';

    /**
     * Namibian Sign Language
     */
    public const NBS = 'nbs';

    /**
     * Na
     */
    public const NBT = 'nbt';

    /**
     * Rongmei Naga
     */
    public const NBU = 'nbu';

    /**
     * Ngamambo
     */
    public const NBV = 'nbv';

    /**
     * Southern Ngbandi
     */
    public const NBW = 'nbw';

    /**
     * Ningera
     */
    public const NBY = 'nby';

    /**
     * Iyo
     */
    public const NCA = 'nca';

    /**
     * Central Nicobarese
     */
    public const NCB = 'ncb';

    /**
     * Ponam
     */
    public const NCC = 'ncc';

    /**
     * Nachering
     */
    public const NCD = 'ncd';

    /**
     * Yale
     */
    public const NCE = 'nce';

    /**
     * Notsi
     */
    public const NCF = 'ncf';

    /**
     * Nisga'a
     */
    public const NCG = 'ncg';

    /**
     * Central Huasteca Nahuatl
     */
    public const NCH = 'nch';

    /**
     * Classical Nahuatl
     */
    public const NCI = 'nci';

    /**
     * Northern Puebla Nahuatl
     */
    public const NCJ = 'ncj';

    /**
     * Na-kara
     */
    public const NCK = 'nck';

    /**
     * Michoacán Nahuatl
     */
    public const NCL = 'ncl';

    /**
     * Nambo
     */
    public const NCM = 'ncm';

    /**
     * Nauna
     */
    public const NCN = 'ncn';

    /**
     * Sibe
     */
    public const NCO = 'nco';

    /**
     * Northern Katang
     */
    public const NCQ = 'ncq';

    /**
     * Ncane
     */
    public const NCR = 'ncr';

    /**
     * Nicaraguan Sign Language
     */
    public const NCS = 'ncs';

    /**
     * Chothe Naga
     */
    public const NCT = 'nct';

    /**
     * Chumburung
     */
    public const NCU = 'ncu';

    /**
     * Central Puebla Nahuatl
     */
    public const NCX = 'ncx';

    /**
     * Natchez
     */
    public const NCZ = 'ncz';

    /**
     * Ndasa
     */
    public const NDA = 'nda';

    /**
     * Kenswei Nsei
     */
    public const NDB = 'ndb';

    /**
     * Ndau
     */
    public const NDC = 'ndc';

    /**
     * Nde-Nsele-Nta
     */
    public const NDD = 'ndd';

    /**
     * North Ndebele
     */
    public const NDE = 'nde';

    /**
     * Nadruvian
     */
    public const NDF = 'ndf';

    /**
     * Ndengereko
     */
    public const NDG = 'ndg';

    /**
     * Ndali
     */
    public const NDH = 'ndh';

    /**
     * Samba Leko
     */
    public const NDI = 'ndi';

    /**
     * Ndamba
     */
    public const NDJ = 'ndj';

    /**
     * Ndaka
     */
    public const NDK = 'ndk';

    /**
     * Ndolo
     */
    public const NDL = 'ndl';

    /**
     * Ndam
     */
    public const NDM = 'ndm';

    /**
     * Ngundi
     */
    public const NDN = 'ndn';

    /**
     * Ndonga
     */
    public const NDO = 'ndo';

    /**
     * Ndo
     */
    public const NDP = 'ndp';

    /**
     * Ndombe
     */
    public const NDQ = 'ndq';

    /**
     * Ndoola
     */
    public const NDR = 'ndr';

    /**
     * Low German
     */
    public const NDS = 'nds';

    /**
     * Ndunga
     */
    public const NDT = 'ndt';

    /**
     * Dugun
     */
    public const NDU = 'ndu';

    /**
     * Ndut
     */
    public const NDV = 'ndv';

    /**
     * Ndobo
     */
    public const NDW = 'ndw';

    /**
     * Nduga
     */
    public const NDX = 'ndx';

    /**
     * Lutos
     */
    public const NDY = 'ndy';

    /**
     * Ndogo
     */
    public const NDZ = 'ndz';

    /**
     * Eastern Ngad'a
     */
    public const NEA = 'nea';

    /**
     * Toura (Côte d'Ivoire)
     */
    public const NEB = 'neb';

    /**
     * Nedebang
     */
    public const NEC = 'nec';

    /**
     * Nde-Gbite
     */
    public const NED = 'ned';

    /**
     * Nêlêmwa-Nixumwak
     */
    public const NEE = 'nee';

    /**
     * Nefamese
     */
    public const NEF = 'nef';

    /**
     * Negidal
     */
    public const NEG = 'neg';

    /**
     * Nyenkha
     */
    public const NEH = 'neh';

    /**
     * Neo-Hittite
     */
    public const NEI = 'nei';

    /**
     * Neko
     */
    public const NEJ = 'nej';

    /**
     * Neku
     */
    public const NEK = 'nek';

    /**
     * Nemi
     */
    public const NEM = 'nem';

    /**
     * Nengone
     */
    public const NEN = 'nen';

    /**
     * Ná-Meo
     */
    public const NEO = 'neo';

    /**
     * Nepali (macrolanguage)
     */
    public const NEP = 'nep';

    /**
     * North Central Mixe
     */
    public const NEQ = 'neq';

    /**
     * Yahadian
     */
    public const NER = 'ner';

    /**
     * Bhoti Kinnauri
     */
    public const NES = 'nes';

    /**
     * Nete
     */
    public const NET = 'net';

    /**
     * Neo
     */
    public const NEU = 'neu';

    /**
     * Nyaheun
     */
    public const NEV = 'nev';

    /**
     * Nepal Bhasa
     */
    public const NEW = 'new';

    /**
     * Neme
     */
    public const NEX = 'nex';

    /**
     * Neyo
     */
    public const NEY = 'ney';

    /**
     * Nez Perce
     */
    public const NEZ = 'nez';

    /**
     * Dhao
     */
    public const NFA = 'nfa';

    /**
     * Ahwai
     */
    public const NFD = 'nfd';

    /**
     * Ayiwo
     */
    public const NFL = 'nfl';

    /**
     * Nafaanra
     */
    public const NFR = 'nfr';

    /**
     * Mfumte
     */
    public const NFU = 'nfu';

    /**
     * Ngbaka
     */
    public const NGA = 'nga';

    /**
     * Northern Ngbandi
     */
    public const NGB = 'ngb';

    /**
     * Ngombe (Democratic Republic of Congo)
     */
    public const NGC = 'ngc';

    /**
     * Ngando (Central African Republic)
     */
    public const NGD = 'ngd';

    /**
     * Ngemba
     */
    public const NGE = 'nge';

    /**
     * Ngbaka Manza
     */
    public const NGG = 'ngg';

    /**
     * Nǁng
     */
    public const NGH = 'ngh';

    /**
     * Ngizim
     */
    public const NGI = 'ngi';

    /**
     * Ngie
     */
    public const NGJ = 'ngj';

    /**
     * Dalabon
     */
    public const NGK = 'ngk';

    /**
     * Lomwe
     */
    public const NGL = 'ngl';

    /**
     * Ngatik Men's Creole
     */
    public const NGM = 'ngm';

    /**
     * Ngwo
     */
    public const NGN = 'ngn';

    /**
     * Ngulu
     */
    public const NGP = 'ngp';

    /**
     * Ngurimi
     */
    public const NGQ = 'ngq';

    /**
     * Engdewu
     */
    public const NGR = 'ngr';

    /**
     * Gvoko
     */
    public const NGS = 'ngs';

    /**
     * Kriang
     */
    public const NGT = 'ngt';

    /**
     * Guerrero Nahuatl
     */
    public const NGU = 'ngu';

    /**
     * Nagumi
     */
    public const NGV = 'ngv';

    /**
     * Ngwaba
     */
    public const NGW = 'ngw';

    /**
     * Nggwahyi
     */
    public const NGX = 'ngx';

    /**
     * Tibea
     */
    public const NGY = 'ngy';

    /**
     * Ngungwel
     */
    public const NGZ = 'ngz';

    /**
     * Nhanda
     */
    public const NHA = 'nha';

    /**
     * Beng
     */
    public const NHB = 'nhb';

    /**
     * Tabasco Nahuatl
     */
    public const NHC = 'nhc';

    /**
     * Chiripá
     */
    public const NHD = 'nhd';

    /**
     * Eastern Huasteca Nahuatl
     */
    public const NHE = 'nhe';

    /**
     * Nhuwala
     */
    public const NHF = 'nhf';

    /**
     * Tetelcingo Nahuatl
     */
    public const NHG = 'nhg';

    /**
     * Nahari
     */
    public const NHH = 'nhh';

    /**
     * Zacatlán-Ahuacatlán-Tepetzintla Nahuatl
     */
    public const NHI = 'nhi';

    /**
     * Isthmus-Cosoleacaque Nahuatl
     */
    public const NHK = 'nhk';

    /**
     * Morelos Nahuatl
     */
    public const NHM = 'nhm';

    /**
     * Central Nahuatl
     */
    public const NHN = 'nhn';

    /**
     * Takuu
     */
    public const NHO = 'nho';

    /**
     * Isthmus-Pajapan Nahuatl
     */
    public const NHP = 'nhp';

    /**
     * Huaxcaleca Nahuatl
     */
    public const NHQ = 'nhq';

    /**
     * Naro
     */
    public const NHR = 'nhr';

    /**
     * Ometepec Nahuatl
     */
    public const NHT = 'nht';

    /**
     * Noone
     */
    public const NHU = 'nhu';

    /**
     * Temascaltepec Nahuatl
     */
    public const NHV = 'nhv';

    /**
     * Western Huasteca Nahuatl
     */
    public const NHW = 'nhw';

    /**
     * Isthmus-Mecayapan Nahuatl
     */
    public const NHX = 'nhx';

    /**
     * Northern Oaxaca Nahuatl
     */
    public const NHY = 'nhy';

    /**
     * Santa María La Alta Nahuatl
     */
    public const NHZ = 'nhz';

    /**
     * Nias
     */
    public const NIA = 'nia';

    /**
     * Nakame
     */
    public const NIB = 'nib';

    /**
     * Ngandi
     */
    public const NID = 'nid';

    /**
     * Niellim
     */
    public const NIE = 'nie';

    /**
     * Nek
     */
    public const NIF = 'nif';

    /**
     * Ngalakgan
     */
    public const NIG = 'nig';

    /**
     * Nyiha (Tanzania)
     */
    public const NIH = 'nih';

    /**
     * Nii
     */
    public const NII = 'nii';

    /**
     * Ngaju
     */
    public const NIJ = 'nij';

    /**
     * Southern Nicobarese
     */
    public const NIK = 'nik';

    /**
     * Nila
     */
    public const NIL = 'nil';

    /**
     * Nilamba
     */
    public const NIM = 'nim';

    /**
     * Ninzo
     */
    public const NIN = 'nin';

    /**
     * Nganasan
     */
    public const NIO = 'nio';

    /**
     * Nandi
     */
    public const NIQ = 'niq';

    /**
     * Nimboran
     */
    public const NIR = 'nir';

    /**
     * Nimi
     */
    public const NIS = 'nis';

    /**
     * Southeastern Kolami
     */
    public const NIT = 'nit';

    /**
     * Niuean
     */
    public const NIU = 'niu';

    /**
     * Gilyak
     */
    public const NIV = 'niv';

    /**
     * Nimo
     */
    public const NIW = 'niw';

    /**
     * Hema
     */
    public const NIX = 'nix';

    /**
     * Ngiti
     */
    public const NIY = 'niy';

    /**
     * Ningil
     */
    public const NIZ = 'niz';

    /**
     * Nzanyi
     */
    public const NJA = 'nja';

    /**
     * Nocte Naga
     */
    public const NJB = 'njb';

    /**
     * Ndonde Hamba
     */
    public const NJD = 'njd';

    /**
     * Lotha Naga
     */
    public const NJH = 'njh';

    /**
     * Gudanji
     */
    public const NJI = 'nji';

    /**
     * Njen
     */
    public const NJJ = 'njj';

    /**
     * Njalgulgule
     */
    public const NJL = 'njl';

    /**
     * Angami Naga
     */
    public const NJM = 'njm';

    /**
     * Liangmai Naga
     */
    public const NJN = 'njn';

    /**
     * Ao Naga
     */
    public const NJO = 'njo';

    /**
     * Njerep
     */
    public const NJR = 'njr';

    /**
     * Nisa
     */
    public const NJS = 'njs';

    /**
     * Ndyuka-Trio Pidgin
     */
    public const NJT = 'njt';

    /**
     * Ngadjunmaya
     */
    public const NJU = 'nju';

    /**
     * Kunyi
     */
    public const NJX = 'njx';

    /**
     * Njyem
     */
    public const NJY = 'njy';

    /**
     * Nyishi
     */
    public const NJZ = 'njz';

    /**
     * Nkoya
     */
    public const NKA = 'nka';

    /**
     * Khoibu Naga
     */
    public const NKB = 'nkb';

    /**
     * Nkongho
     */
    public const NKC = 'nkc';

    /**
     * Koireng
     */
    public const NKD = 'nkd';

    /**
     * Duke
     */
    public const NKE = 'nke';

    /**
     * Inpui Naga
     */
    public const NKF = 'nkf';

    /**
     * Nekgini
     */
    public const NKG = 'nkg';

    /**
     * Khezha Naga
     */
    public const NKH = 'nkh';

    /**
     * Thangal Naga
     */
    public const NKI = 'nki';

    /**
     * Nakai
     */
    public const NKJ = 'nkj';

    /**
     * Nokuku
     */
    public const NKK = 'nkk';

    /**
     * Namat
     */
    public const NKM = 'nkm';

    /**
     * Nkangala
     */
    public const NKN = 'nkn';

    /**
     * Nkonya
     */
    public const NKO = 'nko';

    /**
     * Niuatoputapu
     */
    public const NKP = 'nkp';

    /**
     * Nkami
     */
    public const NKQ = 'nkq';

    /**
     * Nukuoro
     */
    public const NKR = 'nkr';

    /**
     * North Asmat
     */
    public const NKS = 'nks';

    /**
     * Nyika (Tanzania)
     */
    public const NKT = 'nkt';

    /**
     * Bouna Kulango
     */
    public const NKU = 'nku';

    /**
     * Nyika (Malawi and Zambia)
     */
    public const NKV = 'nkv';

    /**
     * Nkutu
     */
    public const NKW = 'nkw';

    /**
     * Nkoroo
     */
    public const NKX = 'nkx';

    /**
     * Nkari
     */
    public const NKZ = 'nkz';

    /**
     * Ngombale
     */
    public const NLA = 'nla';

    /**
     * Nalca
     */
    public const NLC = 'nlc';

    /**
     * Dutch
     */
    public const NLD = 'nld';

    /**
     * East Nyala
     */
    public const NLE = 'nle';

    /**
     * Gela
     */
    public const NLG = 'nlg';

    /**
     * Grangali
     */
    public const NLI = 'nli';

    /**
     * Nyali
     */
    public const NLJ = 'nlj';

    /**
     * Ninia Yali
     */
    public const NLK = 'nlk';

    /**
     * Nihali
     */
    public const NLL = 'nll';

    /**
     * Mankiyali
     */
    public const NLM = 'nlm';

    /**
     * Ngul
     */
    public const NLO = 'nlo';

    /**
     * Lao Naga
     */
    public const NLQ = 'nlq';

    /**
     * Nchumbulu
     */
    public const NLU = 'nlu';

    /**
     * Orizaba Nahuatl
     */
    public const NLV = 'nlv';

    /**
     * Walangama
     */
    public const NLW = 'nlw';

    /**
     * Nahali
     */
    public const NLX = 'nlx';

    /**
     * Nyamal
     */
    public const NLY = 'nly';

    /**
     * Nalögo
     */
    public const NLZ = 'nlz';

    /**
     * Maram Naga
     */
    public const NMA = 'nma';

    /**
     * Big Nambas
     */
    public const NMB = 'nmb';

    /**
     * Ngam
     */
    public const NMC = 'nmc';

    /**
     * Ndumu
     */
    public const NMD = 'nmd';

    /**
     * Mzieme Naga
     */
    public const NME = 'nme';

    /**
     * Tangkhul Naga (India)
     */
    public const NMF = 'nmf';

    /**
     * Kwasio
     */
    public const NMG = 'nmg';

    /**
     * Monsang Naga
     */
    public const NMH = 'nmh';

    /**
     * Nyam
     */
    public const NMI = 'nmi';

    /**
     * Ngombe (Central African Republic)
     */
    public const NMJ = 'nmj';

    /**
     * Namakura
     */
    public const NMK = 'nmk';

    /**
     * Ndemli
     */
    public const NML = 'nml';

    /**
     * Manangba
     */
    public const NMM = 'nmm';

    /**
     * ǃXóõ
     */
    public const NMN = 'nmn';

    /**
     * Moyon Naga
     */
    public const NMO = 'nmo';

    /**
     * Nimanbur
     */
    public const NMP = 'nmp';

    /**
     * Nambya
     */
    public const NMQ = 'nmq';

    /**
     * Nimbari
     */
    public const NMR = 'nmr';

    /**
     * Letemboi
     */
    public const NMS = 'nms';

    /**
     * Namonuito
     */
    public const NMT = 'nmt';

    /**
     * Northeast Maidu
     */
    public const NMU = 'nmu';

    /**
     * Ngamini
     */
    public const NMV = 'nmv';

    /**
     * Nimoa
     */
    public const NMW = 'nmw';

    /**
     * Nama (Papua New Guinea)
     */
    public const NMX = 'nmx';

    /**
     * Namuyi
     */
    public const NMY = 'nmy';

    /**
     * Nawdm
     */
    public const NMZ = 'nmz';

    /**
     * Nyangumarta
     */
    public const NNA = 'nna';

    /**
     * Nande
     */
    public const NNB = 'nnb';

    /**
     * Nancere
     */
    public const NNC = 'nnc';

    /**
     * West Ambae
     */
    public const NND = 'nnd';

    /**
     * Ngandyera
     */
    public const NNE = 'nne';

    /**
     * Ngaing
     */
    public const NNF = 'nnf';

    /**
     * Maring Naga
     */
    public const NNG = 'nng';

    /**
     * Ngiemboon
     */
    public const NNH = 'nnh';

    /**
     * North Nuaulu
     */
    public const NNI = 'nni';

    /**
     * Nyangatom
     */
    public const NNJ = 'nnj';

    /**
     * Nankina
     */
    public const NNK = 'nnk';

    /**
     * Northern Rengma Naga
     */
    public const NNL = 'nnl';

    /**
     * Namia
     */
    public const NNM = 'nnm';

    /**
     * Ngete
     */
    public const NNN = 'nnn';

    /**
     * Norwegian Nynorsk
     */
    public const NNO = 'nno';

    /**
     * Wancho Naga
     */
    public const NNP = 'nnp';

    /**
     * Ngindo
     */
    public const NNQ = 'nnq';

    /**
     * Narungga
     */
    public const NNR = 'nnr';

    /**
     * Nanticoke
     */
    public const NNT = 'nnt';

    /**
     * Dwang
     */
    public const NNU = 'nnu';

    /**
     * Nugunu (Australia)
     */
    public const NNV = 'nnv';

    /**
     * Southern Nuni
     */
    public const NNW = 'nnw';

    /**
     * Nyangga
     */
    public const NNY = 'nny';

    /**
     * Nda'nda'
     */
    public const NNZ = 'nnz';

    /**
     * Woun Meu
     */
    public const NOA = 'noa';

    /**
     * Norwegian Bokmål
     */
    public const NOB = 'nob';

    /**
     * Nuk
     */
    public const NOC = 'noc';

    /**
     * Northern Thai
     */
    public const NOD = 'nod';

    /**
     * Nimadi
     */
    public const NOE = 'noe';

    /**
     * Nomane
     */
    public const NOF = 'nof';

    /**
     * Nogai
     */
    public const NOG = 'nog';

    /**
     * Nomu
     */
    public const NOH = 'noh';

    /**
     * Noiri
     */
    public const NOI = 'noi';

    /**
     * Nonuya
     */
    public const NOJ = 'noj';

    /**
     * Nooksack
     */
    public const NOK = 'nok';

    /**
     * Nomlaki
     */
    public const NOL = 'nol';

    /**
     * Old Norse
     */
    public const NON = 'non';

    /**
     * Numanggang
     */
    public const NOP = 'nop';

    /**
     * Ngongo
     */
    public const NOQ = 'noq';

    /**
     * Norwegian
     */
    public const NOR = 'nor';

    /**
     * Eastern Nisu
     */
    public const NOS = 'nos';

    /**
     * Nomatsiguenga
     */
    public const NOT = 'not';

    /**
     * Ewage-Notu
     */
    public const NOU = 'nou';

    /**
     * Novial
     */
    public const NOV = 'nov';

    /**
     * Nyambo
     */
    public const NOW = 'now';

    /**
     * Noy
     */
    public const NOY = 'noy';

    /**
     * Nayi
     */
    public const NOZ = 'noz';

    /**
     * Nar Phu
     */
    public const NPA = 'npa';

    /**
     * Nupbikha
     */
    public const NPB = 'npb';

    /**
     * Ponyo-Gongwang Naga
     */
    public const NPG = 'npg';

    /**
     * Phom Naga
     */
    public const NPH = 'nph';

    /**
     * Nepali (individual language)
     */
    public const NPI = 'npi';

    /**
     * Southeastern Puebla Nahuatl
     */
    public const NPL = 'npl';

    /**
     * Mondropolon
     */
    public const NPN = 'npn';

    /**
     * Pochuri Naga
     */
    public const NPO = 'npo';

    /**
     * Nipsan
     */
    public const NPS = 'nps';

    /**
     * Puimei Naga
     */
    public const NPU = 'npu';

    /**
     * Noipx
     */
    public const NPX = 'npx';

    /**
     * Napu
     */
    public const NPY = 'npy';

    /**
     * Southern Nago
     */
    public const NQG = 'nqg';

    /**
     * Kura Ede Nago
     */
    public const NQK = 'nqk';

    /**
     * Ngendelengo
     */
    public const NQL = 'nql';

    /**
     * Ndom
     */
    public const NQM = 'nqm';

    /**
     * Nen
     */
    public const NQN = 'nqn';

    /**
     * N'Ko
     */
    public const NQO = 'nqo';

    /**
     * Kyan-Karyaw Naga
     */
    public const NQQ = 'nqq';

    /**
     * Nteng
     */
    public const NQT = 'nqt';

    /**
     * Akyaung Ari Naga
     */
    public const NQY = 'nqy';

    /**
     * Ngom
     */
    public const NRA = 'nra';

    /**
     * Nara
     */
    public const NRB = 'nrb';

    /**
     * Noric
     */
    public const NRC = 'nrc';

    /**
     * Southern Rengma Naga
     */
    public const NRE = 'nre';

    /**
     * Jèrriais
     */
    public const NRF = 'nrf';

    /**
     * Narango
     */
    public const NRG = 'nrg';

    /**
     * Chokri Naga
     */
    public const NRI = 'nri';

    /**
     * Ngarla
     */
    public const NRK = 'nrk';

    /**
     * Ngarluma
     */
    public const NRL = 'nrl';

    /**
     * Narom
     */
    public const NRM = 'nrm';

    /**
     * Norn
     */
    public const NRN = 'nrn';

    /**
     * North Picene
     */
    public const NRP = 'nrp';

    /**
     * Norra
     */
    public const NRR = 'nrr';

    /**
     * Northern Kalapuya
     */
    public const NRT = 'nrt';

    /**
     * Narua
     */
    public const NRU = 'nru';

    /**
     * Ngurmbur
     */
    public const NRX = 'nrx';

    /**
     * Lala
     */
    public const NRZ = 'nrz';

    /**
     * Sangtam Naga
     */
    public const NSA = 'nsa';

    /**
     * Lower Nossob
     */
    public const NSB = 'nsb';

    /**
     * Nshi
     */
    public const NSC = 'nsc';

    /**
     * Southern Nisu
     */
    public const NSD = 'nsd';

    /**
     * Nsenga
     */
    public const NSE = 'nse';

    /**
     * Northwestern Nisu
     */
    public const NSF = 'nsf';

    /**
     * Ngasa
     */
    public const NSG = 'nsg';

    /**
     * Ngoshie
     */
    public const NSH = 'nsh';

    /**
     * Nigerian Sign Language
     */
    public const NSI = 'nsi';

    /**
     * Naskapi
     */
    public const NSK = 'nsk';

    /**
     * Norwegian Sign Language
     */
    public const NSL = 'nsl';

    /**
     * Sumi Naga
     */
    public const NSM = 'nsm';

    /**
     * Nehan
     */
    public const NSN = 'nsn';

    /**
     * Pedi
     */
    public const NSO = 'nso';

    /**
     * Nepalese Sign Language
     */
    public const NSP = 'nsp';

    /**
     * Northern Sierra Miwok
     */
    public const NSQ = 'nsq';

    /**
     * Maritime Sign Language
     */
    public const NSR = 'nsr';

    /**
     * Nali
     */
    public const NSS = 'nss';

    /**
     * Tase Naga
     */
    public const NST = 'nst';

    /**
     * Sierra Negra Nahuatl
     */
    public const NSU = 'nsu';

    /**
     * Southwestern Nisu
     */
    public const NSV = 'nsv';

    /**
     * Navut
     */
    public const NSW = 'nsw';

    /**
     * Nsongo
     */
    public const NSX = 'nsx';

    /**
     * Nasal
     */
    public const NSY = 'nsy';

    /**
     * Nisenan
     */
    public const NSZ = 'nsz';

    /**
     * Northern Tidung
     */
    public const NTD = 'ntd';

    /**
     * Ngantangarra
     */
    public const NTG = 'ntg';

    /**
     * Natioro
     */
    public const NTI = 'nti';

    /**
     * Ngaanyatjarra
     */
    public const NTJ = 'ntj';

    /**
     * Ikoma-Nata-Isenye
     */
    public const NTK = 'ntk';

    /**
     * Nateni
     */
    public const NTM = 'ntm';

    /**
     * Ntomba
     */
    public const NTO = 'nto';

    /**
     * Northern Tepehuan
     */
    public const NTP = 'ntp';

    /**
     * Delo
     */
    public const NTR = 'ntr';

    /**
     * Natügu
     */
    public const NTU = 'ntu';

    /**
     * Nottoway
     */
    public const NTW = 'ntw';

    /**
     * Tangkhul Naga (Myanmar)
     */
    public const NTX = 'ntx';

    /**
     * Mantsi
     */
    public const NTY = 'nty';

    /**
     * Natanzi
     */
    public const NTZ = 'ntz';

    /**
     * Yuanga
     */
    public const NUA = 'nua';

    /**
     * Nukuini
     */
    public const NUC = 'nuc';

    /**
     * Ngala
     */
    public const NUD = 'nud';

    /**
     * Ngundu
     */
    public const NUE = 'nue';

    /**
     * Nusu
     */
    public const NUF = 'nuf';

    /**
     * Nungali
     */
    public const NUG = 'nug';

    /**
     * Ndunda
     */
    public const NUH = 'nuh';

    /**
     * Ngumbi
     */
    public const NUI = 'nui';

    /**
     * Nyole
     */
    public const NUJ = 'nuj';

    /**
     * Nuu-chah-nulth
     */
    public const NUK = 'nuk';

    /**
     * Nusa Laut
     */
    public const NUL = 'nul';

    /**
     * Niuafo'ou
     */
    public const NUM = 'num';

    /**
     * Anong
     */
    public const NUN = 'nun';

    /**
     * Nguôn
     */
    public const NUO = 'nuo';

    /**
     * Nupe-Nupe-Tako
     */
    public const NUP = 'nup';

    /**
     * Nukumanu
     */
    public const NUQ = 'nuq';

    /**
     * Nukuria
     */
    public const NUR = 'nur';

    /**
     * Nuer
     */
    public const NUS = 'nus';

    /**
     * Nung (Viet Nam)
     */
    public const NUT = 'nut';

    /**
     * Ngbundu
     */
    public const NUU = 'nuu';

    /**
     * Northern Nuni
     */
    public const NUV = 'nuv';

    /**
     * Nguluwan
     */
    public const NUW = 'nuw';

    /**
     * Mehek
     */
    public const NUX = 'nux';

    /**
     * Nunggubuyu
     */
    public const NUY = 'nuy';

    /**
     * Tlamacazapa Nahuatl
     */
    public const NUZ = 'nuz';

    /**
     * Nasarian
     */
    public const NVH = 'nvh';

    /**
     * Namiae
     */
    public const NVM = 'nvm';

    /**
     * Nyokon
     */
    public const NVO = 'nvo';

    /**
     * Nawathinehena
     */
    public const NWA = 'nwa';

    /**
     * Nyabwa
     */
    public const NWB = 'nwb';

    /**
     * Classical Newari
     */
    public const NWC = 'nwc';

    /**
     * Ngwe
     */
    public const NWE = 'nwe';

    /**
     * Ngayawung
     */
    public const NWG = 'nwg';

    /**
     * Southwest Tanna
     */
    public const NWI = 'nwi';

    /**
     * Nyamusa-Molo
     */
    public const NWM = 'nwm';

    /**
     * Nauo
     */
    public const NWO = 'nwo';

    /**
     * Nawaru
     */
    public const NWR = 'nwr';

    /**
     * Ndwewe
     */
    public const NWW = 'nww';

    /**
     * Middle Newar
     */
    public const NWX = 'nwx';

    /**
     * Nottoway-Meherrin
     */
    public const NWY = 'nwy';

    /**
     * Nauete
     */
    public const NXA = 'nxa';

    /**
     * Ngando (Democratic Republic of Congo)
     */
    public const NXD = 'nxd';

    /**
     * Nage
     */
    public const NXE = 'nxe';

    /**
     * Ngad'a
     */
    public const NXG = 'nxg';

    /**
     * Nindi
     */
    public const NXI = 'nxi';

    /**
     * Koki Naga
     */
    public const NXK = 'nxk';

    /**
     * South Nuaulu
     */
    public const NXL = 'nxl';

    /**
     * Numidian
     */
    public const NXM = 'nxm';

    /**
     * Ngawun
     */
    public const NXN = 'nxn';

    /**
     * Ndambomo
     */
    public const NXO = 'nxo';

    /**
     * Naxi
     */
    public const NXQ = 'nxq';

    /**
     * Ninggerum
     */
    public const NXR = 'nxr';

    /**
     * Nafri
     */
    public const NXX = 'nxx';

    /**
     * Chichewa
     */
    public const NYA = 'nya';

    /**
     * Nyangbo
     */
    public const NYB = 'nyb';

    /**
     * Nyanga-li
     */
    public const NYC = 'nyc';

    /**
     * Nyore
     */
    public const NYD = 'nyd';

    /**
     * Nyengo
     */
    public const NYE = 'nye';

    /**
     * Giryama
     */
    public const NYF = 'nyf';

    /**
     * Nyindu
     */
    public const NYG = 'nyg';

    /**
     * Nyikina
     */
    public const NYH = 'nyh';

    /**
     * Ama (Sudan)
     */
    public const NYI = 'nyi';

    /**
     * Nyanga
     */
    public const NYJ = 'nyj';

    /**
     * Nyaneka
     */
    public const NYK = 'nyk';

    /**
     * Nyeu
     */
    public const NYL = 'nyl';

    /**
     * Nyamwezi
     */
    public const NYM = 'nym';

    /**
     * Nyankole
     */
    public const NYN = 'nyn';

    /**
     * Nyoro
     */
    public const NYO = 'nyo';

    /**
     * Nyang'i
     */
    public const NYP = 'nyp';

    /**
     * Nayini
     */
    public const NYQ = 'nyq';

    /**
     * Nyiha (Malawi)
     */
    public const NYR = 'nyr';

    /**
     * Nyungar
     */
    public const NYS = 'nys';

    /**
     * Nyawaygi
     */
    public const NYT = 'nyt';

    /**
     * Nyungwe
     */
    public const NYU = 'nyu';

    /**
     * Nyulnyul
     */
    public const NYV = 'nyv';

    /**
     * Nyaw
     */
    public const NYW = 'nyw';

    /**
     * Nganyaywana
     */
    public const NYX = 'nyx';

    /**
     * Nyakyusa-Ngonde
     */
    public const NYY = 'nyy';

    /**
     * Tigon Mbembe
     */
    public const NZA = 'nza';

    /**
     * Njebi
     */
    public const NZB = 'nzb';

    /**
     * Nzadi
     */
    public const NZD = 'nzd';

    /**
     * Nzima
     */
    public const NZI = 'nzi';

    /**
     * Nzakara
     */
    public const NZK = 'nzk';

    /**
     * Zeme Naga
     */
    public const NZM = 'nzm';

    /**
     * Dir-Nyamzak-Mbarimi
     */
    public const NZR = 'nzr';

    /**
     * New Zealand Sign Language
     */
    public const NZS = 'nzs';

    /**
     * Teke-Nzikou
     */
    public const NZU = 'nzu';

    /**
     * Nzakambay
     */
    public const NZY = 'nzy';

    /**
     * Nanga Dama Dogon
     */
    public const NZZ = 'nzz';

    /**
     * Orok
     */
    public const OAA = 'oaa';

    /**
     * Oroch
     */
    public const OAC = 'oac';

    /**
     * Noakhali
     */
    public const OAK = 'oak';

    /**
     * Old Aramaic (up to 700 BCE)
     */
    public const OAR = 'oar';

    /**
     * Old Avar
     */
    public const OAV = 'oav';

    /**
     * Obispeño
     */
    public const OBI = 'obi';

    /**
     * Southern Bontok
     */
    public const OBK = 'obk';

    /**
     * Oblo
     */
    public const OBL = 'obl';

    /**
     * Moabite
     */
    public const OBM = 'obm';

    /**
     * Obo Manobo
     */
    public const OBO = 'obo';

    /**
     * Old Burmese
     */
    public const OBR = 'obr';

    /**
     * Old Breton
     */
    public const OBT = 'obt';

    /**
     * Obulom
     */
    public const OBU = 'obu';

    /**
     * Ocaina
     */
    public const OCA = 'oca';

    /**
     * Old Chinese
     */
    public const OCH = 'och';

    /**
     * Occitan (post 1500)
     */
    public const OCI = 'oci';

    /**
     * Old Cham
     */
    public const OCM = 'ocm';

    /**
     * Old Cornish
     */
    public const OCO = 'oco';

    /**
     * Atzingo Matlatzinca
     */
    public const OCU = 'ocu';

    /**
     * Odut
     */
    public const ODA = 'oda';

    /**
     * Od
     */
    public const ODK = 'odk';

    /**
     * Old Dutch
     */
    public const ODT = 'odt';

    /**
     * Odual
     */
    public const ODU = 'odu';

    /**
     * Ofo
     */
    public const OFO = 'ofo';

    /**
     * Old Frisian
     */
    public const OFS = 'ofs';

    /**
     * Efutop
     */
    public const OFU = 'ofu';

    /**
     * Ogbia
     */
    public const OGB = 'ogb';

    /**
     * Ogbah
     */
    public const OGC = 'ogc';

    /**
     * Old Georgian
     */
    public const OGE = 'oge';

    /**
     * Ogbogolo
     */
    public const OGG = 'ogg';

    /**
     * Khana
     */
    public const OGO = 'ogo';

    /**
     * Ogbronuagum
     */
    public const OGU = 'ogu';

    /**
     * Old Hittite
     */
    public const OHT = 'oht';

    /**
     * Old Hungarian
     */
    public const OHU = 'ohu';

    /**
     * Oirata
     */
    public const OIA = 'oia';

    /**
     * Okolie
     */
    public const OIE = 'oie';

    /**
     * Inebu One
     */
    public const OIN = 'oin';

    /**
     * Northwestern Ojibwa
     */
    public const OJB = 'ojb';

    /**
     * Central Ojibwa
     */
    public const OJC = 'ojc';

    /**
     * Eastern Ojibwa
     */
    public const OJG = 'ojg';

    /**
     * Ojibwa
     */
    public const OJI = 'oji';

    /**
     * Old Japanese
     */
    public const OJP = 'ojp';

    /**
     * Severn Ojibwa
     */
    public const OJS = 'ojs';

    /**
     * Ontong Java
     */
    public const OJV = 'ojv';

    /**
     * Western Ojibwa
     */
    public const OJW = 'ojw';

    /**
     * Okanagan
     */
    public const OKA = 'oka';

    /**
     * Okobo
     */
    public const OKB = 'okb';

    /**
     * Kobo
     */
    public const OKC = 'okc';

    /**
     * Okodia
     */
    public const OKD = 'okd';

    /**
     * Okpe (Southwestern Edo)
     */
    public const OKE = 'oke';

    /**
     * Koko Babangk
     */
    public const OKG = 'okg';

    /**
     * Koresh-e Rostam
     */
    public const OKH = 'okh';

    /**
     * Okiek
     */
    public const OKI = 'oki';

    /**
     * Oko-Juwoi
     */
    public const OKJ = 'okj';

    /**
     * Kwamtim One
     */
    public const OKK = 'okk';

    /**
     * Old Kentish Sign Language
     */
    public const OKL = 'okl';

    /**
     * Middle Korean (10th-16th cent.)
     */
    public const OKM = 'okm';

    /**
     * Oki-No-Erabu
     */
    public const OKN = 'okn';

    /**
     * Old Korean (3rd-9th cent.)
     */
    public const OKO = 'oko';

    /**
     * Kirike
     */
    public const OKR = 'okr';

    /**
     * Oko-Eni-Osayen
     */
    public const OKS = 'oks';

    /**
     * Oku
     */
    public const OKU = 'oku';

    /**
     * Orokaiva
     */
    public const OKV = 'okv';

    /**
     * Okpe (Northwestern Edo)
     */
    public const OKX = 'okx';

    /**
     * Old Khmer
     */
    public const OKZ = 'okz';

    /**
     * Walungge
     */
    public const OLA = 'ola';

    /**
     * Mochi
     */
    public const OLD = 'old';

    /**
     * Olekha
     */
    public const OLE = 'ole';

    /**
     * Olkol
     */
    public const OLK = 'olk';

    /**
     * Oloma
     */
    public const OLM = 'olm';

    /**
     * Livvi
     */
    public const OLO = 'olo';

    /**
     * Olrat
     */
    public const OLR = 'olr';

    /**
     * Old Lithuanian
     */
    public const OLT = 'olt';

    /**
     * Kuvale
     */
    public const OLU = 'olu';

    /**
     * Omaha-Ponca
     */
    public const OMA = 'oma';

    /**
     * East Ambae
     */
    public const OMB = 'omb';

    /**
     * Mochica
     */
    public const OMC = 'omc';

    /**
     * Omagua
     */
    public const OMG = 'omg';

    /**
     * Omi
     */
    public const OMI = 'omi';

    /**
     * Omok
     */
    public const OMK = 'omk';

    /**
     * Ombo
     */
    public const OML = 'oml';

    /**
     * Minoan
     */
    public const OMN = 'omn';

    /**
     * Utarmbung
     */
    public const OMO = 'omo';

    /**
     * Old Manipuri
     */
    public const OMP = 'omp';

    /**
     * Old Marathi
     */
    public const OMR = 'omr';

    /**
     * Omotik
     */
    public const OMT = 'omt';

    /**
     * Omurano
     */
    public const OMU = 'omu';

    /**
     * South Tairora
     */
    public const OMW = 'omw';

    /**
     * Old Mon
     */
    public const OMX = 'omx';

    /**
     * Old Malay
     */
    public const OMY = 'omy';

    /**
     * Ona
     */
    public const ONA = 'ona';

    /**
     * Lingao
     */
    public const ONB = 'onb';

    /**
     * Oneida
     */
    public const ONE = 'one';

    /**
     * Olo
     */
    public const ONG = 'ong';

    /**
     * Onin
     */
    public const ONI = 'oni';

    /**
     * Onjob
     */
    public const ONJ = 'onj';

    /**
     * Kabore One
     */
    public const ONK = 'onk';

    /**
     * Onobasulu
     */
    public const ONN = 'onn';

    /**
     * Onondaga
     */
    public const ONO = 'ono';

    /**
     * Sartang
     */
    public const ONP = 'onp';

    /**
     * Northern One
     */
    public const ONR = 'onr';

    /**
     * Ono
     */
    public const ONS = 'ons';

    /**
     * Ontenu
     */
    public const ONT = 'ont';

    /**
     * Unua
     */
    public const ONU = 'onu';

    /**
     * Old Nubian
     */
    public const ONW = 'onw';

    /**
     * Onin Based Pidgin
     */
    public const ONX = 'onx';

    /**
     * Tohono O'odham
     */
    public const OOD = 'ood';

    /**
     * Ong
     */
    public const OOG = 'oog';

    /**
     * Önge
     */
    public const OON = 'oon';

    /**
     * Oorlams
     */
    public const OOR = 'oor';

    /**
     * Old Ossetic
     */
    public const OOS = 'oos';

    /**
     * Okpamheri
     */
    public const OPA = 'opa';

    /**
     * Kopkaka
     */
    public const OPK = 'opk';

    /**
     * Oksapmin
     */
    public const OPM = 'opm';

    /**
     * Opao
     */
    public const OPO = 'opo';

    /**
     * Opata
     */
    public const OPT = 'opt';

    /**
     * Ofayé
     */
    public const OPY = 'opy';

    /**
     * Oroha
     */
    public const ORA = 'ora';

    /**
     * Orma
     */
    public const ORC = 'orc';

    /**
     * Orejón
     */
    public const ORE = 'ore';

    /**
     * Oring
     */
    public const ORG = 'org';

    /**
     * Oroqen
     */
    public const ORH = 'orh';

    /**
     * Oriya (macrolanguage)
     */
    public const ORI = 'ori';

    /**
     * Oromo
     */
    public const ORM = 'orm';

    /**
     * Orang Kanaq
     */
    public const ORN = 'orn';

    /**
     * Orokolo
     */
    public const ORO = 'oro';

    /**
     * Oruma
     */
    public const ORR = 'orr';

    /**
     * Orang Seletar
     */
    public const ORS = 'ors';

    /**
     * Adivasi Oriya
     */
    public const ORT = 'ort';

    /**
     * Ormuri
     */
    public const ORU = 'oru';

    /**
     * Old Russian
     */
    public const ORV = 'orv';

    /**
     * Oro Win
     */
    public const ORW = 'orw';

    /**
     * Oro
     */
    public const ORX = 'orx';

    /**
     * Odia
     */
    public const ORY = 'ory';

    /**
     * Ormu
     */
    public const ORZ = 'orz';

    /**
     * Osage
     */
    public const OSA = 'osa';

    /**
     * Oscan
     */
    public const OSC = 'osc';

    /**
     * Osing
     */
    public const OSI = 'osi';

    /**
     * Old Sundanese
     */
    public const OSN = 'osn';

    /**
     * Ososo
     */
    public const OSO = 'oso';

    /**
     * Old Spanish
     */
    public const OSP = 'osp';

    /**
     * Ossetian
     */
    public const OSS = 'oss';

    /**
     * Osatu
     */
    public const OST = 'ost';

    /**
     * Southern One
     */
    public const OSU = 'osu';

    /**
     * Old Saxon
     */
    public const OSX = 'osx';

    /**
     * Ottoman Turkish (1500-1928)
     */
    public const OTA = 'ota';

    /**
     * Old Tibetan
     */
    public const OTB = 'otb';

    /**
     * Ot Danum
     */
    public const OTD = 'otd';

    /**
     * Mezquital Otomi
     */
    public const OTE = 'ote';

    /**
     * Oti
     */
    public const OTI = 'oti';

    /**
     * Old Turkish
     */
    public const OTK = 'otk';

    /**
     * Tilapa Otomi
     */
    public const OTL = 'otl';

    /**
     * Eastern Highland Otomi
     */
    public const OTM = 'otm';

    /**
     * Tenango Otomi
     */
    public const OTN = 'otn';

    /**
     * Querétaro Otomi
     */
    public const OTQ = 'otq';

    /**
     * Otoro
     */
    public const OTR = 'otr';

    /**
     * Estado de México Otomi
     */
    public const OTS = 'ots';

    /**
     * Temoaya Otomi
     */
    public const OTT = 'ott';

    /**
     * Otuke
     */
    public const OTU = 'otu';

    /**
     * Ottawa
     */
    public const OTW = 'otw';

    /**
     * Texcatepec Otomi
     */
    public const OTX = 'otx';

    /**
     * Old Tamil
     */
    public const OTY = 'oty';

    /**
     * Ixtenco Otomi
     */
    public const OTZ = 'otz';

    /**
     * Tagargrent
     */
    public const OUA = 'oua';

    /**
     * Glio-Oubi
     */
    public const OUB = 'oub';

    /**
     * Oune
     */
    public const OUE = 'oue';

    /**
     * Old Uighur
     */
    public const OUI = 'oui';

    /**
     * Ouma
     */
    public const OUM = 'oum';

    /**
     * Elfdalian
     */
    public const OVD = 'ovd';

    /**
     * Owiniga
     */
    public const OWI = 'owi';

    /**
     * Old Welsh
     */
    public const OWL = 'owl';

    /**
     * Oy
     */
    public const OYB = 'oyb';

    /**
     * Oyda
     */
    public const OYD = 'oyd';

    /**
     * Wayampi
     */
    public const OYM = 'oym';

    /**
     * Oya'oya
     */
    public const OYY = 'oyy';

    /**
     * Koonzime
     */
    public const OZM = 'ozm';

    /**
     * Parecís
     */
    public const PAB = 'pab';

    /**
     * Pacoh
     */
    public const PAC = 'pac';

    /**
     * Paumarí
     */
    public const PAD = 'pad';

    /**
     * Pagibete
     */
    public const PAE = 'pae';

    /**
     * Paranawát
     */
    public const PAF = 'paf';

    /**
     * Pangasinan
     */
    public const PAG = 'pag';

    /**
     * Tenharim
     */
    public const PAH = 'pah';

    /**
     * Pe
     */
    public const PAI = 'pai';

    /**
     * Parakanã
     */
    public const PAK = 'pak';

    /**
     * Pahlavi
     */
    public const PAL = 'pal';

    /**
     * Pampanga
     */
    public const PAM = 'pam';

    /**
     * Panjabi
     */
    public const PAN = 'pan';

    /**
     * Northern Paiute
     */
    public const PAO = 'pao';

    /**
     * Papiamento
     */
    public const PAP = 'pap';

    /**
     * Parya
     */
    public const PAQ = 'paq';

    /**
     * Panamint
     */
    public const PAR = 'par';

    /**
     * Papasena
     */
    public const PAS = 'pas';

    /**
     * Palauan
     */
    public const PAU = 'pau';

    /**
     * Pakaásnovos
     */
    public const PAV = 'pav';

    /**
     * Pawnee
     */
    public const PAW = 'paw';

    /**
     * Pankararé
     */
    public const PAX = 'pax';

    /**
     * Pech
     */
    public const PAY = 'pay';

    /**
     * Pankararú
     */
    public const PAZ = 'paz';

    /**
     * Páez
     */
    public const PBB = 'pbb';

    /**
     * Patamona
     */
    public const PBC = 'pbc';

    /**
     * Mezontla Popoloca
     */
    public const PBE = 'pbe';

    /**
     * Coyotepec Popoloca
     */
    public const PBF = 'pbf';

    /**
     * Paraujano
     */
    public const PBG = 'pbg';

    /**
     * E'ñapa Woromaipu
     */
    public const PBH = 'pbh';

    /**
     * Parkwa
     */
    public const PBI = 'pbi';

    /**
     * Mak (Nigeria)
     */
    public const PBL = 'pbl';

    /**
     * Puebla Mazatec
     */
    public const PBM = 'pbm';

    /**
     * Kpasam
     */
    public const PBN = 'pbn';

    /**
     * Papel
     */
    public const PBO = 'pbo';

    /**
     * Badyara
     */
    public const PBP = 'pbp';

    /**
     * Pangwa
     */
    public const PBR = 'pbr';

    /**
     * Central Pame
     */
    public const PBS = 'pbs';

    /**
     * Southern Pashto
     */
    public const PBT = 'pbt';

    /**
     * Northern Pashto
     */
    public const PBU = 'pbu';

    /**
     * Pnar
     */
    public const PBV = 'pbv';

    /**
     * Pyu (Papua New Guinea)
     */
    public const PBY = 'pby';

    /**
     * Santa Inés Ahuatempan Popoloca
     */
    public const PCA = 'pca';

    /**
     * Pear
     */
    public const PCB = 'pcb';

    /**
     * Bouyei
     */
    public const PCC = 'pcc';

    /**
     * Picard
     */
    public const PCD = 'pcd';

    /**
     * Ruching Palaung
     */
    public const PCE = 'pce';

    /**
     * Paliyan
     */
    public const PCF = 'pcf';

    /**
     * Paniya
     */
    public const PCG = 'pcg';

    /**
     * Pardhan
     */
    public const PCH = 'pch';

    /**
     * Duruwa
     */
    public const PCI = 'pci';

    /**
     * Parenga
     */
    public const PCJ = 'pcj';

    /**
     * Paite Chin
     */
    public const PCK = 'pck';

    /**
     * Pardhi
     */
    public const PCL = 'pcl';

    /**
     * Nigerian Pidgin
     */
    public const PCM = 'pcm';

    /**
     * Piti
     */
    public const PCN = 'pcn';

    /**
     * Pacahuara
     */
    public const PCP = 'pcp';

    /**
     * Pyapun
     */
    public const PCW = 'pcw';

    /**
     * Anam
     */
    public const PDA = 'pda';

    /**
     * Pennsylvania German
     */
    public const PDC = 'pdc';

    /**
     * Pa Di
     */
    public const PDI = 'pdi';

    /**
     * Podena
     */
    public const PDN = 'pdn';

    /**
     * Padoe
     */
    public const PDO = 'pdo';

    /**
     * Plautdietsch
     */
    public const PDT = 'pdt';

    /**
     * Kayan
     */
    public const PDU = 'pdu';

    /**
     * Peranakan Indonesian
     */
    public const PEA = 'pea';

    /**
     * Eastern Pomo
     */
    public const PEB = 'peb';

    /**
     * Mala (Papua New Guinea)
     */
    public const PED = 'ped';

    /**
     * Taje
     */
    public const PEE = 'pee';

    /**
     * Northeastern Pomo
     */
    public const PEF = 'pef';

    /**
     * Pengo
     */
    public const PEG = 'peg';

    /**
     * Bonan
     */
    public const PEH = 'peh';

    /**
     * Chichimeca-Jonaz
     */
    public const PEI = 'pei';

    /**
     * Northern Pomo
     */
    public const PEJ = 'pej';

    /**
     * Penchal
     */
    public const PEK = 'pek';

    /**
     * Pekal
     */
    public const PEL = 'pel';

    /**
     * Phende
     */
    public const PEM = 'pem';

    /**
     * Old Persian (ca. 600-400 B.C.)
     */
    public const PEO = 'peo';

    /**
     * Kunja
     */
    public const PEP = 'pep';

    /**
     * Southern Pomo
     */
    public const PEQ = 'peq';

    /**
     * Iranian Persian
     */
    public const PES = 'pes';

    /**
     * Pémono
     */
    public const PEV = 'pev';

    /**
     * Petats
     */
    public const PEX = 'pex';

    /**
     * Petjo
     */
    public const PEY = 'pey';

    /**
     * Eastern Penan
     */
    public const PEZ = 'pez';

    /**
     * Pááfang
     */
    public const PFA = 'pfa';

    /**
     * Pere
     */
    public const PFE = 'pfe';

    /**
     * Pfaelzisch
     */
    public const PFL = 'pfl';

    /**
     * Sudanese Creole Arabic
     */
    public const PGA = 'pga';

    /**
     * Gāndhārī
     */
    public const PGD = 'pgd';

    /**
     * Pangwali
     */
    public const PGG = 'pgg';

    /**
     * Pagi
     */
    public const PGI = 'pgi';

    /**
     * Rerep
     */
    public const PGK = 'pgk';

    /**
     * Primitive Irish
     */
    public const PGL = 'pgl';

    /**
     * Paelignian
     */
    public const PGN = 'pgn';

    /**
     * Pangseng
     */
    public const PGS = 'pgs';

    /**
     * Pagu
     */
    public const PGU = 'pgu';

    /**
     * Papua New Guinean Sign Language
     */
    public const PGZ = 'pgz';

    /**
     * Pa-Hng
     */
    public const PHA = 'pha';

    /**
     * Phudagi
     */
    public const PHD = 'phd';

    /**
     * Phuong
     */
    public const PHG = 'phg';

    /**
     * Phukha
     */
    public const PHH = 'phh';

    /**
     * Pahari
     */
    public const PHJ = 'phj';

    /**
     * Phake
     */
    public const PHK = 'phk';

    /**
     * Phalura
     */
    public const PHL = 'phl';

    /**
     * Phimbi
     */
    public const PHM = 'phm';

    /**
     * Phoenician
     */
    public const PHN = 'phn';

    /**
     * Phunoi
     */
    public const PHO = 'pho';

    /**
     * Phana'
     */
    public const PHQ = 'phq';

    /**
     * Pahari-Potwari
     */
    public const PHR = 'phr';

    /**
     * Phu Thai
     */
    public const PHT = 'pht';

    /**
     * Phuan
     */
    public const PHU = 'phu';

    /**
     * Pahlavani
     */
    public const PHV = 'phv';

    /**
     * Phangduwali
     */
    public const PHW = 'phw';

    /**
     * Pima Bajo
     */
    public const PIA = 'pia';

    /**
     * Yine
     */
    public const PIB = 'pib';

    /**
     * Pinji
     */
    public const PIC = 'pic';

    /**
     * Piaroa
     */
    public const PID = 'pid';

    /**
     * Piro
     */
    public const PIE = 'pie';

    /**
     * Pingelapese
     */
    public const PIF = 'pif';

    /**
     * Pisabo
     */
    public const PIG = 'pig';

    /**
     * Pitcairn-Norfolk
     */
    public const PIH = 'pih';

    /**
     * Pijao
     */
    public const PIJ = 'pij';

    /**
     * Yom
     */
    public const PIL = 'pil';

    /**
     * Powhatan
     */
    public const PIM = 'pim';

    /**
     * Piame
     */
    public const PIN = 'pin';

    /**
     * Piapoco
     */
    public const PIO = 'pio';

    /**
     * Pero
     */
    public const PIP = 'pip';

    /**
     * Piratapuyo
     */
    public const PIR = 'pir';

    /**
     * Pijin
     */
    public const PIS = 'pis';

    /**
     * Pitta Pitta
     */
    public const PIT = 'pit';

    /**
     * Pintupi-Luritja
     */
    public const PIU = 'piu';

    /**
     * Pileni
     */
    public const PIV = 'piv';

    /**
     * Pimbwe
     */
    public const PIW = 'piw';

    /**
     * Piu
     */
    public const PIX = 'pix';

    /**
     * Piya-Kwonci
     */
    public const PIY = 'piy';

    /**
     * Pije
     */
    public const PIZ = 'piz';

    /**
     * Pitjantjatjara
     */
    public const PJT = 'pjt';

    /**
     * Ardhamāgadhī Prākrit
     */
    public const PKA = 'pka';

    /**
     * Pokomo
     */
    public const PKB = 'pkb';

    /**
     * Paekche
     */
    public const PKC = 'pkc';

    /**
     * Pak-Tong
     */
    public const PKG = 'pkg';

    /**
     * Pankhu
     */
    public const PKH = 'pkh';

    /**
     * Pakanha
     */
    public const PKN = 'pkn';

    /**
     * Pökoot
     */
    public const PKO = 'pko';

    /**
     * Pukapuka
     */
    public const PKP = 'pkp';

    /**
     * Attapady Kurumba
     */
    public const PKR = 'pkr';

    /**
     * Pakistan Sign Language
     */
    public const PKS = 'pks';

    /**
     * Maleng
     */
    public const PKT = 'pkt';

    /**
     * Paku
     */
    public const PKU = 'pku';

    /**
     * Miani
     */
    public const PLA = 'pla';

    /**
     * Polonombauk
     */
    public const PLB = 'plb';

    /**
     * Central Palawano
     */
    public const PLC = 'plc';

    /**
     * Polari
     */
    public const PLD = 'pld';

    /**
     * Palu'e
     */
    public const PLE = 'ple';

    /**
     * Pilagá
     */
    public const PLG = 'plg';

    /**
     * Paulohi
     */
    public const PLH = 'plh';

    /**
     * Pali
     */
    public const PLI = 'pli';

    /**
     * Kohistani Shina
     */
    public const PLK = 'plk';

    /**
     * Shwe Palaung
     */
    public const PLL = 'pll';

    /**
     * Palenquero
     */
    public const PLN = 'pln';

    /**
     * Oluta Popoluca
     */
    public const PLO = 'plo';

    /**
     * Palaic
     */
    public const PLQ = 'plq';

    /**
     * Palaka Senoufo
     */
    public const PLR = 'plr';

    /**
     * San Marcos Tlacoyalco Popoloca
     */
    public const PLS = 'pls';

    /**
     * Plateau Malagasy
     */
    public const PLT = 'plt';

    /**
     * Palikúr
     */
    public const PLU = 'plu';

    /**
     * Southwest Palawano
     */
    public const PLV = 'plv';

    /**
     * Brooke's Point Palawano
     */
    public const PLW = 'plw';

    /**
     * Bolyu
     */
    public const PLY = 'ply';

    /**
     * Paluan
     */
    public const PLZ = 'plz';

    /**
     * Paama
     */
    public const PMA = 'pma';

    /**
     * Pambia
     */
    public const PMB = 'pmb';

    /**
     * Pallanganmiddang
     */
    public const PMD = 'pmd';

    /**
     * Pwaamei
     */
    public const PME = 'pme';

    /**
     * Pamona
     */
    public const PMF = 'pmf';

    /**
     * Māhārāṣṭri Prākrit
     */
    public const PMH = 'pmh';

    /**
     * Northern Pumi
     */
    public const PMI = 'pmi';

    /**
     * Southern Pumi
     */
    public const PMJ = 'pmj';

    /**
     * Lingua Franca
     */
    public const PML = 'pml';

    /**
     * Pomo
     */
    public const PMM = 'pmm';

    /**
     * Pam
     */
    public const PMN = 'pmn';

    /**
     * Pom
     */
    public const PMO = 'pmo';

    /**
     * Northern Pame
     */
    public const PMQ = 'pmq';

    /**
     * Paynamar
     */
    public const PMR = 'pmr';

    /**
     * Piemontese
     */
    public const PMS = 'pms';

    /**
     * Tuamotuan
     */
    public const PMT = 'pmt';

    /**
     * Plains Miwok
     */
    public const PMW = 'pmw';

    /**
     * Poumei Naga
     */
    public const PMX = 'pmx';

    /**
     * Papuan Malay
     */
    public const PMY = 'pmy';

    /**
     * Southern Pame
     */
    public const PMZ = 'pmz';

    /**
     * Punan Bah-Biau
     */
    public const PNA = 'pna';

    /**
     * Western Panjabi
     */
    public const PNB = 'pnb';

    /**
     * Pannei
     */
    public const PNC = 'pnc';

    /**
     * Mpinda
     */
    public const PND = 'pnd';

    /**
     * Western Penan
     */
    public const PNE = 'pne';

    /**
     * Pangu
     */
    public const PNG = 'png';

    /**
     * Penrhyn
     */
    public const PNH = 'pnh';

    /**
     * Aoheng
     */
    public const PNI = 'pni';

    /**
     * Pinjarup
     */
    public const PNJ = 'pnj';

    /**
     * Paunaka
     */
    public const PNK = 'pnk';

    /**
     * Paleni
     */
    public const PNL = 'pnl';

    /**
     * Punan Batu 1
     */
    public const PNM = 'pnm';

    /**
     * Pinai-Hagahai
     */
    public const PNN = 'pnn';

    /**
     * Panobo
     */
    public const PNO = 'pno';

    /**
     * Pancana
     */
    public const PNP = 'pnp';

    /**
     * Pana (Burkina Faso)
     */
    public const PNQ = 'pnq';

    /**
     * Panim
     */
    public const PNR = 'pnr';

    /**
     * Ponosakan
     */
    public const PNS = 'pns';

    /**
     * Pontic
     */
    public const PNT = 'pnt';

    /**
     * Jiongnai Bunu
     */
    public const PNU = 'pnu';

    /**
     * Pinigura
     */
    public const PNV = 'pnv';

    /**
     * Banyjima
     */
    public const PNW = 'pnw';

    /**
     * Phong-Kniang
     */
    public const PNX = 'pnx';

    /**
     * Pinyin
     */
    public const PNY = 'pny';

    /**
     * Pana (Central African Republic)
     */
    public const PNZ = 'pnz';

    /**
     * Poqomam
     */
    public const POC = 'poc';

    /**
     * San Juan Atzingo Popoloca
     */
    public const POE = 'poe';

    /**
     * Poke
     */
    public const POF = 'pof';

    /**
     * Potiguára
     */
    public const POG = 'pog';

    /**
     * Poqomchi'
     */
    public const POH = 'poh';

    /**
     * Highland Popoluca
     */
    public const POI = 'poi';

    /**
     * Pokangá
     */
    public const POK = 'pok';

    /**
     * Polish
     */
    public const POL = 'pol';

    /**
     * Southeastern Pomo
     */
    public const POM = 'pom';

    /**
     * Pohnpeian
     */
    public const PON = 'pon';

    /**
     * Central Pomo
     */
    public const POO = 'poo';

    /**
     * Pwapwâ
     */
    public const POP = 'pop';

    /**
     * Texistepec Popoluca
     */
    public const POQ = 'poq';

    /**
     * Portuguese
     */
    public const POR = 'por';

    /**
     * Sayula Popoluca
     */
    public const POS = 'pos';

    /**
     * Potawatomi
     */
    public const POT = 'pot';

    /**
     * Upper Guinea Crioulo
     */
    public const POV = 'pov';

    /**
     * San Felipe Otlaltepec Popoloca
     */
    public const POW = 'pow';

    /**
     * Polabian
     */
    public const POX = 'pox';

    /**
     * Pogolo
     */
    public const POY = 'poy';

    /**
     * Papi
     */
    public const PPE = 'ppe';

    /**
     * Paipai
     */
    public const PPI = 'ppi';

    /**
     * Uma
     */
    public const PPK = 'ppk';

    /**
     * Pipil
     */
    public const PPL = 'ppl';

    /**
     * Papuma
     */
    public const PPM = 'ppm';

    /**
     * Papapana
     */
    public const PPN = 'ppn';

    /**
     * Folopa
     */
    public const PPO = 'ppo';

    /**
     * Pelende
     */
    public const PPP = 'ppp';

    /**
     * Pei
     */
    public const PPQ = 'ppq';

    /**
     * San Luís Temalacayuca Popoloca
     */
    public const PPS = 'pps';

    /**
     * Pare
     */
    public const PPT = 'ppt';

    /**
     * Papora
     */
    public const PPU = 'ppu';

    /**
     * Pa'a
     */
    public const PQA = 'pqa';

    /**
     * Malecite-Passamaquoddy
     */
    public const PQM = 'pqm';

    /**
     * Parachi
     */
    public const PRC = 'prc';

    /**
     * Parsi-Dari
     */
    public const PRD = 'prd';

    /**
     * Principense
     */
    public const PRE = 'pre';

    /**
     * Paranan
     */
    public const PRF = 'prf';

    /**
     * Prussian
     */
    public const PRG = 'prg';

    /**
     * Porohanon
     */
    public const PRH = 'prh';

    /**
     * Paicî
     */
    public const PRI = 'pri';

    /**
     * Parauk
     */
    public const PRK = 'prk';

    /**
     * Peruvian Sign Language
     */
    public const PRL = 'prl';

    /**
     * Kibiri
     */
    public const PRM = 'prm';

    /**
     * Prasuni
     */
    public const PRN = 'prn';

    /**
     * Old Provençal (to 1500)
     */
    public const PRO = 'pro';

    /**
     * Ashéninka Perené
     */
    public const PRQ = 'prq';

    /**
     * Puri
     */
    public const PRR = 'prr';

    /**
     * Dari
     */
    public const PRS = 'prs';

    /**
     * Phai
     */
    public const PRT = 'prt';

    /**
     * Puragi
     */
    public const PRU = 'pru';

    /**
     * Parawen
     */
    public const PRW = 'prw';

    /**
     * Purik
     */
    public const PRX = 'prx';

    /**
     * Providencia Sign Language
     */
    public const PRZ = 'prz';

    /**
     * Asue Awyu
     */
    public const PSA = 'psa';

    /**
     * Iranian Sign Language
     */
    public const PSC = 'psc';

    /**
     * Plains Indian Sign Language
     */
    public const PSD = 'psd';

    /**
     * Central Malay
     */
    public const PSE = 'pse';

    /**
     * Penang Sign Language
     */
    public const PSG = 'psg';

    /**
     * Southwest Pashai
     */
    public const PSH = 'psh';

    /**
     * Southeast Pashai
     */
    public const PSI = 'psi';

    /**
     * Puerto Rican Sign Language
     */
    public const PSL = 'psl';

    /**
     * Pauserna
     */
    public const PSM = 'psm';

    /**
     * Panasuan
     */
    public const PSN = 'psn';

    /**
     * Polish Sign Language
     */
    public const PSO = 'pso';

    /**
     * Philippine Sign Language
     */
    public const PSP = 'psp';

    /**
     * Pasi
     */
    public const PSQ = 'psq';

    /**
     * Portuguese Sign Language
     */
    public const PSR = 'psr';

    /**
     * Kaulong
     */
    public const PSS = 'pss';

    /**
     * Central Pashto
     */
    public const PST = 'pst';

    /**
     * Sauraseni Prākrit
     */
    public const PSU = 'psu';

    /**
     * Port Sandwich
     */
    public const PSW = 'psw';

    /**
     * Piscataway
     */
    public const PSY = 'psy';

    /**
     * Pai Tavytera
     */
    public const PTA = 'pta';

    /**
     * Pataxó Hã-Ha-Hãe
     */
    public const PTH = 'pth';

    /**
     * Pindiini
     */
    public const PTI = 'pti';

    /**
     * Patani
     */
    public const PTN = 'ptn';

    /**
     * Zo'é
     */
    public const PTO = 'pto';

    /**
     * Patep
     */
    public const PTP = 'ptp';

    /**
     * Pattapu
     */
    public const PTQ = 'ptq';

    /**
     * Piamatsina
     */
    public const PTR = 'ptr';

    /**
     * Enrekang
     */
    public const PTT = 'ptt';

    /**
     * Bambam
     */
    public const PTU = 'ptu';

    /**
     * Port Vato
     */
    public const PTV = 'ptv';

    /**
     * Pentlatch
     */
    public const PTW = 'ptw';

    /**
     * Pathiya
     */
    public const PTY = 'pty';

    /**
     * Western Highland Purepecha
     */
    public const PUA = 'pua';

    /**
     * Purum
     */
    public const PUB = 'pub';

    /**
     * Punan Merap
     */
    public const PUC = 'puc';

    /**
     * Punan Aput
     */
    public const PUD = 'pud';

    /**
     * Puelche
     */
    public const PUE = 'pue';

    /**
     * Punan Merah
     */
    public const PUF = 'puf';

    /**
     * Phuie
     */
    public const PUG = 'pug';

    /**
     * Puinave
     */
    public const PUI = 'pui';

    /**
     * Punan Tubu
     */
    public const PUJ = 'puj';

    /**
     * Puma
     */
    public const PUM = 'pum';

    /**
     * Puoc
     */
    public const PUO = 'puo';

    /**
     * Pulabu
     */
    public const PUP = 'pup';

    /**
     * Puquina
     */
    public const PUQ = 'puq';

    /**
     * Puruborá
     */
    public const PUR = 'pur';

    /**
     * Pushto
     */
    public const PUS = 'pus';

    /**
     * Putoh
     */
    public const PUT = 'put';

    /**
     * Punu
     */
    public const PUU = 'puu';

    /**
     * Puluwatese
     */
    public const PUW = 'puw';

    /**
     * Puare
     */
    public const PUX = 'pux';

    /**
     * Purisimeño
     */
    public const PUY = 'puy';

    /**
     * Pawaia
     */
    public const PWA = 'pwa';

    /**
     * Panawa
     */
    public const PWB = 'pwb';

    /**
     * Gapapaiwa
     */
    public const PWG = 'pwg';

    /**
     * Patwin
     */
    public const PWI = 'pwi';

    /**
     * Molbog
     */
    public const PWM = 'pwm';

    /**
     * Paiwan
     */
    public const PWN = 'pwn';

    /**
     * Pwo Western Karen
     */
    public const PWO = 'pwo';

    /**
     * Powari
     */
    public const PWR = 'pwr';

    /**
     * Pwo Northern Karen
     */
    public const PWW = 'pww';

    /**
     * Quetzaltepec Mixe
     */
    public const PXM = 'pxm';

    /**
     * Pye Krumen
     */
    public const PYE = 'pye';

    /**
     * Fyam
     */
    public const PYM = 'pym';

    /**
     * Poyanáwa
     */
    public const PYN = 'pyn';

    /**
     * Paraguayan Sign Language
     */
    public const PYS = 'pys';

    /**
     * Puyuma
     */
    public const PYU = 'pyu';

    /**
     * Pyu (Myanmar)
     */
    public const PYX = 'pyx';

    /**
     * Pyen
     */
    public const PYY = 'pyy';

    /**
     * Pesse
     */
    public const PZE = 'pze';

    /**
     * Pazeh
     */
    public const PZH = 'pzh';

    /**
     * Jejara Naga
     */
    public const PZN = 'pzn';

    /**
     * Quapaw
     */
    public const QUA = 'qua';

    /**
     * Huallaga Huánuco Quechua
     */
    public const QUB = 'qub';

    /**
     * K'iche'
     */
    public const QUC = 'quc';

    /**
     * Calderón Highland Quichua
     */
    public const QUD = 'qud';

    /**
     * Quechua
     */
    public const QUE = 'que';

    /**
     * Lambayeque Quechua
     */
    public const QUF = 'quf';

    /**
     * Chimborazo Highland Quichua
     */
    public const QUG = 'qug';

    /**
     * South Bolivian Quechua
     */
    public const QUH = 'quh';

    /**
     * Quileute
     */
    public const QUI = 'qui';

    /**
     * Chachapoyas Quechua
     */
    public const QUK = 'quk';

    /**
     * North Bolivian Quechua
     */
    public const QUL = 'qul';

    /**
     * Sipacapense
     */
    public const QUM = 'qum';

    /**
     * Quinault
     */
    public const QUN = 'qun';

    /**
     * Southern Pastaza Quechua
     */
    public const QUP = 'qup';

    /**
     * Quinqui
     */
    public const QUQ = 'quq';

    /**
     * Yanahuanca Pasco Quechua
     */
    public const QUR = 'qur';

    /**
     * Santiago del Estero Quichua
     */
    public const QUS = 'qus';

    /**
     * Sacapulteco
     */
    public const QUV = 'quv';

    /**
     * Tena Lowland Quichua
     */
    public const QUW = 'quw';

    /**
     * Yauyos Quechua
     */
    public const QUX = 'qux';

    /**
     * Ayacucho Quechua
     */
    public const QUY = 'quy';

    /**
     * Cusco Quechua
     */
    public const QUZ = 'quz';

    /**
     * Ambo-Pasco Quechua
     */
    public const QVA = 'qva';

    /**
     * Cajamarca Quechua
     */
    public const QVC = 'qvc';

    /**
     * Eastern Apurímac Quechua
     */
    public const QVE = 'qve';

    /**
     * Huamalíes-Dos de Mayo Huánuco Quechua
     */
    public const QVH = 'qvh';

    /**
     * Imbabura Highland Quichua
     */
    public const QVI = 'qvi';

    /**
     * Loja Highland Quichua
     */
    public const QVJ = 'qvj';

    /**
     * Cajatambo North Lima Quechua
     */
    public const QVL = 'qvl';

    /**
     * Margos-Yarowilca-Lauricocha Quechua
     */
    public const QVM = 'qvm';

    /**
     * North Junín Quechua
     */
    public const QVN = 'qvn';

    /**
     * Napo Lowland Quechua
     */
    public const QVO = 'qvo';

    /**
     * Pacaraos Quechua
     */
    public const QVP = 'qvp';

    /**
     * San Martín Quechua
     */
    public const QVS = 'qvs';

    /**
     * Huaylla Wanca Quechua
     */
    public const QVW = 'qvw';

    /**
     * Queyu
     */
    public const QVY = 'qvy';

    /**
     * Northern Pastaza Quichua
     */
    public const QVZ = 'qvz';

    /**
     * Corongo Ancash Quechua
     */
    public const QWA = 'qwa';

    /**
     * Classical Quechua
     */
    public const QWC = 'qwc';

    /**
     * Huaylas Ancash Quechua
     */
    public const QWH = 'qwh';

    /**
     * Kuman (Russia)
     */
    public const QWM = 'qwm';

    /**
     * Sihuas Ancash Quechua
     */
    public const QWS = 'qws';

    /**
     * Kwalhioqua-Tlatskanai
     */
    public const QWT = 'qwt';

    /**
     * Chiquián Ancash Quechua
     */
    public const QXA = 'qxa';

    /**
     * Chincha Quechua
     */
    public const QXC = 'qxc';

    /**
     * Panao Huánuco Quechua
     */
    public const QXH = 'qxh';

    /**
     * Salasaca Highland Quichua
     */
    public const QXL = 'qxl';

    /**
     * Northern Conchucos Ancash Quechua
     */
    public const QXN = 'qxn';

    /**
     * Southern Conchucos Ancash Quechua
     */
    public const QXO = 'qxo';

    /**
     * Puno Quechua
     */
    public const QXP = 'qxp';

    /**
     * Qashqa'i
     */
    public const QXQ = 'qxq';

    /**
     * Cañar Highland Quichua
     */
    public const QXR = 'qxr';

    /**
     * Southern Qiang
     */
    public const QXS = 'qxs';

    /**
     * Santa Ana de Tusi Pasco Quechua
     */
    public const QXT = 'qxt';

    /**
     * Arequipa-La Unión Quechua
     */
    public const QXU = 'qxu';

    /**
     * Jauja Wanca Quechua
     */
    public const QXW = 'qxw';

    /**
     * Quenya
     */
    public const QYA = 'qya';

    /**
     * Quiripi
     */
    public const QYP = 'qyp';

    /**
     * Dungmali
     */
    public const RAA = 'raa';

    /**
     * Camling
     */
    public const RAB = 'rab';

    /**
     * Rasawa
     */
    public const RAC = 'rac';

    /**
     * Rade
     */
    public const RAD = 'rad';

    /**
     * Western Meohang
     */
    public const RAF = 'raf';

    /**
     * Logooli
     */
    public const RAG = 'rag';

    /**
     * Rabha
     */
    public const RAH = 'rah';

    /**
     * Ramoaaina
     */
    public const RAI = 'rai';

    /**
     * Rajasthani
     */
    public const RAJ = 'raj';

    /**
     * Tulu-Bohuai
     */
    public const RAK = 'rak';

    /**
     * Ralte
     */
    public const RAL = 'ral';

    /**
     * Canela
     */
    public const RAM = 'ram';

    /**
     * Riantana
     */
    public const RAN = 'ran';

    /**
     * Rao
     */
    public const RAO = 'rao';

    /**
     * Rapanui
     */
    public const RAP = 'rap';

    /**
     * Saam
     */
    public const RAQ = 'raq';

    /**
     * Rarotongan
     */
    public const RAR = 'rar';

    /**
     * Tegali
     */
    public const RAS = 'ras';

    /**
     * Razajerdi
     */
    public const RAT = 'rat';

    /**
     * Raute
     */
    public const RAU = 'rau';

    /**
     * Sampang
     */
    public const RAV = 'rav';

    /**
     * Rawang
     */
    public const RAW = 'raw';

    /**
     * Rang
     */
    public const RAX = 'rax';

    /**
     * Rapa
     */
    public const RAY = 'ray';

    /**
     * Rahambuu
     */
    public const RAZ = 'raz';

    /**
     * Rumai Palaung
     */
    public const RBB = 'rbb';

    /**
     * Northern Bontok
     */
    public const RBK = 'rbk';

    /**
     * Miraya Bikol
     */
    public const RBL = 'rbl';

    /**
     * Barababaraba
     */
    public const RBP = 'rbp';

    /**
     * Réunion Creole French
     */
    public const RCF = 'rcf';

    /**
     * Rudbari
     */
    public const RDB = 'rdb';

    /**
     * Rerau
     */
    public const REA = 'rea';

    /**
     * Rembong
     */
    public const REB = 'reb';

    /**
     * Rejang Kayan
     */
    public const REE = 'ree';

    /**
     * Kara (Tanzania)
     */
    public const REG = 'reg';

    /**
     * Reli
     */
    public const REI = 'rei';

    /**
     * Rejang
     */
    public const REJ = 'rej';

    /**
     * Rendille
     */
    public const REL = 'rel';

    /**
     * Remo
     */
    public const REM = 'rem';

    /**
     * Rengao
     */
    public const REN = 'ren';

    /**
     * Rer Bare
     */
    public const RER = 'rer';

    /**
     * Reshe
     */
    public const RES = 'res';

    /**
     * Retta
     */
    public const RET = 'ret';

    /**
     * Reyesano
     */
    public const REY = 'rey';

    /**
     * Roria
     */
    public const RGA = 'rga';

    /**
     * Romano-Greek
     */
    public const RGE = 'rge';

    /**
     * Rangkas
     */
    public const RGK = 'rgk';

    /**
     * Romagnol
     */
    public const RGN = 'rgn';

    /**
     * Resígaro
     */
    public const RGR = 'rgr';

    /**
     * Southern Roglai
     */
    public const RGS = 'rgs';

    /**
     * Ringgou
     */
    public const RGU = 'rgu';

    /**
     * Rohingya
     */
    public const RHG = 'rhg';

    /**
     * Yahang
     */
    public const RHP = 'rhp';

    /**
     * Riang (India)
     */
    public const RIA = 'ria';

    /**
     * Bribri Sign Language
     */
    public const RIB = 'rib';

    /**
     * Tarifit
     */
    public const RIF = 'rif';

    /**
     * Riang Lang
     */
    public const RIL = 'ril';

    /**
     * Nyaturu
     */
    public const RIM = 'rim';

    /**
     * Nungu
     */
    public const RIN = 'rin';

    /**
     * Ribun
     */
    public const RIR = 'rir';

    /**
     * Ritharrngu
     */
    public const RIT = 'rit';

    /**
     * Riung
     */
    public const RIU = 'riu';

    /**
     * Rajong
     */
    public const RJG = 'rjg';

    /**
     * Raji
     */
    public const RJI = 'rji';

    /**
     * Rajbanshi
     */
    public const RJS = 'rjs';

    /**
     * Kraol
     */
    public const RKA = 'rka';

    /**
     * Rikbaktsa
     */
    public const RKB = 'rkb';

    /**
     * Rakahanga-Manihiki
     */
    public const RKH = 'rkh';

    /**
     * Rakhine
     */
    public const RKI = 'rki';

    /**
     * Marka
     */
    public const RKM = 'rkm';

    /**
     * Rangpuri
     */
    public const RKT = 'rkt';

    /**
     * Arakwal
     */
    public const RKW = 'rkw';

    /**
     * Rama
     */
    public const RMA = 'rma';

    /**
     * Rembarrnga
     */
    public const RMB = 'rmb';

    /**
     * Carpathian Romani
     */
    public const RMC = 'rmc';

    /**
     * Traveller Danish
     */
    public const RMD = 'rmd';

    /**
     * Angloromani
     */
    public const RME = 'rme';

    /**
     * Kalo Finnish Romani
     */
    public const RMF = 'rmf';

    /**
     * Traveller Norwegian
     */
    public const RMG = 'rmg';

    /**
     * Murkim
     */
    public const RMH = 'rmh';

    /**
     * Lomavren
     */
    public const RMI = 'rmi';

    /**
     * Romkun
     */
    public const RMK = 'rmk';

    /**
     * Baltic Romani
     */
    public const RML = 'rml';

    /**
     * Roma
     */
    public const RMM = 'rmm';

    /**
     * Balkan Romani
     */
    public const RMN = 'rmn';

    /**
     * Sinte Romani
     */
    public const RMO = 'rmo';

    /**
     * Rempi
     */
    public const RMP = 'rmp';

    /**
     * Caló
     */
    public const RMQ = 'rmq';

    /**
     * Romanian Sign Language
     */
    public const RMS = 'rms';

    /**
     * Domari
     */
    public const RMT = 'rmt';

    /**
     * Tavringer Romani
     */
    public const RMU = 'rmu';

    /**
     * Romanova
     */
    public const RMV = 'rmv';

    /**
     * Welsh Romani
     */
    public const RMW = 'rmw';

    /**
     * Romam
     */
    public const RMX = 'rmx';

    /**
     * Vlax Romani
     */
    public const RMY = 'rmy';

    /**
     * Marma
     */
    public const RMZ = 'rmz';

    /**
     * Brunca Sign Language
     */
    public const RNB = 'rnb';

    /**
     * Ruund
     */
    public const RND = 'rnd';

    /**
     * Ronga
     */
    public const RNG = 'rng';

    /**
     * Ranglong
     */
    public const RNL = 'rnl';

    /**
     * Roon
     */
    public const RNN = 'rnn';

    /**
     * Rongpo
     */
    public const RNP = 'rnp';

    /**
     * Nari Nari
     */
    public const RNR = 'rnr';

    /**
     * Rungwa
     */
    public const RNW = 'rnw';

    /**
     * Tae'
     */
    public const ROB = 'rob';

    /**
     * Cacgia Roglai
     */
    public const ROC = 'roc';

    /**
     * Rogo
     */
    public const ROD = 'rod';

    /**
     * Ronji
     */
    public const ROE = 'roe';

    /**
     * Rombo
     */
    public const ROF = 'rof';

    /**
     * Northern Roglai
     */
    public const ROG = 'rog';

    /**
     * Romansh
     */
    public const ROH = 'roh';

    /**
     * Romblomanon
     */
    public const ROL = 'rol';

    /**
     * Romany
     */
    public const ROM = 'rom';

    /**
     * Romanian
     */
    public const RON = 'ron';

    /**
     * Rotokas
     */
    public const ROO = 'roo';

    /**
     * Kriol
     */
    public const ROP = 'rop';

    /**
     * Rongga
     */
    public const ROR = 'ror';

    /**
     * Runga
     */
    public const ROU = 'rou';

    /**
     * Dela-Oenale
     */
    public const ROW = 'row';

    /**
     * Repanbitip
     */
    public const RPN = 'rpn';

    /**
     * Rapting
     */
    public const RPT = 'rpt';

    /**
     * Ririo
     */
    public const RRI = 'rri';

    /**
     * Moriori
     */
    public const RRM = 'rrm';

    /**
     * Waima
     */
    public const RRO = 'rro';

    /**
     * Arritinngithigh
     */
    public const RRT = 'rrt';

    /**
     * Romano-Serbian
     */
    public const RSB = 'rsb';

    /**
     * Ruthenian
     */
    public const RSK = 'rsk';

    /**
     * Russian Sign Language
     */
    public const RSL = 'rsl';

    /**
     * Miriwoong Sign Language
     */
    public const RSM = 'rsm';

    /**
     * Rwandan Sign Language
     */
    public const RSN = 'rsn';

    /**
     * Rishiwa
     */
    public const RSW = 'rsw';

    /**
     * Rungtu Chin
     */
    public const RTC = 'rtc';

    /**
     * Ratahan
     */
    public const RTH = 'rth';

    /**
     * Rotuman
     */
    public const RTM = 'rtm';

    /**
     * Yurats
     */
    public const RTS = 'rts';

    /**
     * Rathawi
     */
    public const RTW = 'rtw';

    /**
     * Gungu
     */
    public const RUB = 'rub';

    /**
     * Ruuli
     */
    public const RUC = 'ruc';

    /**
     * Rusyn
     */
    public const RUE = 'rue';

    /**
     * Luguru
     */
    public const RUF = 'ruf';

    /**
     * Roviana
     */
    public const RUG = 'rug';

    /**
     * Ruga
     */
    public const RUH = 'ruh';

    /**
     * Rufiji
     */
    public const RUI = 'rui';

    /**
     * Che
     */
    public const RUK = 'ruk';

    /**
     * Rundi
     */
    public const RUN = 'run';

    /**
     * Istro Romanian
     */
    public const RUO = 'ruo';

    /**
     * Macedo-Romanian
     */
    public const RUP = 'rup';

    /**
     * Megleno Romanian
     */
    public const RUQ = 'ruq';

    /**
     * Russian
     */
    public const RUS = 'rus';

    /**
     * Rutul
     */
    public const RUT = 'rut';

    /**
     * Lanas Lobu
     */
    public const RUU = 'ruu';

    /**
     * Mala (Nigeria)
     */
    public const RUY = 'ruy';

    /**
     * Ruma
     */
    public const RUZ = 'ruz';

    /**
     * Rawo
     */
    public const RWA = 'rwa';

    /**
     * Rwa
     */
    public const RWK = 'rwk';

    /**
     * Ruwila
     */
    public const RWL = 'rwl';

    /**
     * Amba (Uganda)
     */
    public const RWM = 'rwm';

    /**
     * Rawa
     */
    public const RWO = 'rwo';

    /**
     * Marwari (India)
     */
    public const RWR = 'rwr';

    /**
     * Ngardi
     */
    public const RXD = 'rxd';

    /**
     * Karuwali
     */
    public const RXW = 'rxw';

    /**
     * Northern Amami-Oshima
     */
    public const RYN = 'ryn';

    /**
     * Yaeyama
     */
    public const RYS = 'rys';

    /**
     * Central Okinawan
     */
    public const RYU = 'ryu';

    /**
     * Rāziḥī
     */
    public const RZH = 'rzh';

    /**
     * Saba
     */
    public const SAA = 'saa';

    /**
     * Buglere
     */
    public const SAB = 'sab';

    /**
     * Meskwaki
     */
    public const SAC = 'sac';

    /**
     * Sandawe
     */
    public const SAD = 'sad';

    /**
     * Sabanê
     */
    public const SAE = 'sae';

    /**
     * Safaliba
     */
    public const SAF = 'saf';

    /**
     * Sango
     */
    public const SAG = 'sag';

    /**
     * Yakut
     */
    public const SAH = 'sah';

    /**
     * Sahu
     */
    public const SAJ = 'saj';

    /**
     * Sake
     */
    public const SAK = 'sak';

    /**
     * Samaritan Aramaic
     */
    public const SAM = 'sam';

    /**
     * Sanskrit
     */
    public const SAN = 'san';

    /**
     * Sause
     */
    public const SAO = 'sao';

    /**
     * Samburu
     */
    public const SAQ = 'saq';

    /**
     * Saraveca
     */
    public const SAR = 'sar';

    /**
     * Sasak
     */
    public const SAS = 'sas';

    /**
     * Santali
     */
    public const SAT = 'sat';

    /**
     * Saleman
     */
    public const SAU = 'sau';

    /**
     * Saafi-Saafi
     */
    public const SAV = 'sav';

    /**
     * Sawi
     */
    public const SAW = 'saw';

    /**
     * Sa
     */
    public const SAX = 'sax';

    /**
     * Saya
     */
    public const SAY = 'say';

    /**
     * Saurashtra
     */
    public const SAZ = 'saz';

    /**
     * Ngambay
     */
    public const SBA = 'sba';

    /**
     * Simbo
     */
    public const SBB = 'sbb';

    /**
     * Kele (Papua New Guinea)
     */
    public const SBC = 'sbc';

    /**
     * Southern Samo
     */
    public const SBD = 'sbd';

    /**
     * Saliba
     */
    public const SBE = 'sbe';

    /**
     * Chabu
     */
    public const SBF = 'sbf';

    /**
     * Seget
     */
    public const SBG = 'sbg';

    /**
     * Sori-Harengan
     */
    public const SBH = 'sbh';

    /**
     * Seti
     */
    public const SBI = 'sbi';

    /**
     * Surbakhal
     */
    public const SBJ = 'sbj';

    /**
     * Safwa
     */
    public const SBK = 'sbk';

    /**
     * Botolan Sambal
     */
    public const SBL = 'sbl';

    /**
     * Sagala
     */
    public const SBM = 'sbm';

    /**
     * Sindhi Bhil
     */
    public const SBN = 'sbn';

    /**
     * Sabüm
     */
    public const SBO = 'sbo';

    /**
     * Sangu (Tanzania)
     */
    public const SBP = 'sbp';

    /**
     * Sileibi
     */
    public const SBQ = 'sbq';

    /**
     * Sembakung Murut
     */
    public const SBR = 'sbr';

    /**
     * Subiya
     */
    public const SBS = 'sbs';

    /**
     * Kimki
     */
    public const SBT = 'sbt';

    /**
     * Stod Bhoti
     */
    public const SBU = 'sbu';

    /**
     * Sabine
     */
    public const SBV = 'sbv';

    /**
     * Simba
     */
    public const SBW = 'sbw';

    /**
     * Seberuang
     */
    public const SBX = 'sbx';

    /**
     * Soli
     */
    public const SBY = 'sby';

    /**
     * Sara Kaba
     */
    public const SBZ = 'sbz';

    /**
     * Chut
     */
    public const SCB = 'scb';

    /**
     * Dongxiang
     */
    public const SCE = 'sce';

    /**
     * San Miguel Creole French
     */
    public const SCF = 'scf';

    /**
     * Sanggau
     */
    public const SCG = 'scg';

    /**
     * Sakachep
     */
    public const SCH = 'sch';

    /**
     * Sri Lankan Creole Malay
     */
    public const SCI = 'sci';

    /**
     * Sadri
     */
    public const SCK = 'sck';

    /**
     * Shina
     */
    public const SCL = 'scl';

    /**
     * Sicilian
     */
    public const SCN = 'scn';

    /**
     * Scots
     */
    public const SCO = 'sco';

    /**
     * Hyolmo
     */
    public const SCP = 'scp';

    /**
     * Sa'och
     */
    public const SCQ = 'scq';

    /**
     * North Slavey
     */
    public const SCS = 'scs';

    /**
     * Southern Katang
     */
    public const SCT = 'sct';

    /**
     * Shumcho
     */
    public const SCU = 'scu';

    /**
     * Sheni
     */
    public const SCV = 'scv';

    /**
     * Sha
     */
    public const SCW = 'scw';

    /**
     * Sicel
     */
    public const SCX = 'scx';

    /**
     * Toraja-Sa'dan
     */
    public const SDA = 'sda';

    /**
     * Shabak
     */
    public const SDB = 'sdb';

    /**
     * Sassarese Sardinian
     */
    public const SDC = 'sdc';

    /**
     * Surubu
     */
    public const SDE = 'sde';

    /**
     * Sarli
     */
    public const SDF = 'sdf';

    /**
     * Savi
     */
    public const SDG = 'sdg';

    /**
     * Southern Kurdish
     */
    public const SDH = 'sdh';

    /**
     * Suundi
     */
    public const SDJ = 'sdj';

    /**
     * Sos Kundi
     */
    public const SDK = 'sdk';

    /**
     * Saudi Arabian Sign Language
     */
    public const SDL = 'sdl';

    /**
     * Gallurese Sardinian
     */
    public const SDN = 'sdn';

    /**
     * Bukar-Sadung Bidayuh
     */
    public const SDO = 'sdo';

    /**
     * Sherdukpen
     */
    public const SDP = 'sdp';

    /**
     * Semandang
     */
    public const SDQ = 'sdq';

    /**
     * Oraon Sadri
     */
    public const SDR = 'sdr';

    /**
     * Sened
     */
    public const SDS = 'sds';

    /**
     * Shuadit
     */
    public const SDT = 'sdt';

    /**
     * Sarudu
     */
    public const SDU = 'sdu';

    /**
     * Sibu Melanau
     */
    public const SDX = 'sdx';

    /**
     * Sallands
     */
    public const SDZ = 'sdz';

    /**
     * Semai
     */
    public const SEA = 'sea';

    /**
     * Shempire Senoufo
     */
    public const SEB = 'seb';

    /**
     * Sechelt
     */
    public const SEC = 'sec';

    /**
     * Sedang
     */
    public const SED = 'sed';

    /**
     * Seneca
     */
    public const SEE = 'see';

    /**
     * Cebaara Senoufo
     */
    public const SEF = 'sef';

    /**
     * Segeju
     */
    public const SEG = 'seg';

    /**
     * Sena
     */
    public const SEH = 'seh';

    /**
     * Seri
     */
    public const SEI = 'sei';

    /**
     * Sene
     */
    public const SEJ = 'sej';

    /**
     * Sekani
     */
    public const SEK = 'sek';

    /**
     * Selkup
     */
    public const SEL = 'sel';

    /**
     * Nanerigé Sénoufo
     */
    public const SEN = 'sen';

    /**
     * Suarmin
     */
    public const SEO = 'seo';

    /**
     * Sìcìté Sénoufo
     */
    public const SEP = 'sep';

    /**
     * Senara Sénoufo
     */
    public const SEQ = 'seq';

    /**
     * Serrano
     */
    public const SER = 'ser';

    /**
     * Koyraboro Senni Songhai
     */
    public const SES = 'ses';

    /**
     * Sentani
     */
    public const SET = 'set';

    /**
     * Serui-Laut
     */
    public const SEU = 'seu';

    /**
     * Nyarafolo Senoufo
     */
    public const SEV = 'sev';

    /**
     * Sewa Bay
     */
    public const SEW = 'sew';

    /**
     * Secoya
     */
    public const SEY = 'sey';

    /**
     * Senthang Chin
     */
    public const SEZ = 'sez';

    /**
     * Langue des signes de Belgique Francophone
     */
    public const SFB = 'sfb';

    /**
     * Eastern Subanen
     */
    public const SFE = 'sfe';

    /**
     * Small Flowery Miao
     */
    public const SFM = 'sfm';

    /**
     * South African Sign Language
     */
    public const SFS = 'sfs';

    /**
     * Sehwi
     */
    public const SFW = 'sfw';

    /**
     * Old Irish (to 900)
     */
    public const SGA = 'sga';

    /**
     * Mag-antsi Ayta
     */
    public const SGB = 'sgb';

    /**
     * Kipsigis
     */
    public const SGC = 'sgc';

    /**
     * Surigaonon
     */
    public const SGD = 'sgd';

    /**
     * Segai
     */
    public const SGE = 'sge';

    /**
     * Swiss-German Sign Language
     */
    public const SGG = 'sgg';

    /**
     * Shughni
     */
    public const SGH = 'sgh';

    /**
     * Suga
     */
    public const SGI = 'sgi';

    /**
     * Surgujia
     */
    public const SGJ = 'sgj';

    /**
     * Sangkong
     */
    public const SGK = 'sgk';

    /**
     * Singa
     */
    public const SGM = 'sgm';

    /**
     * Singpho
     */
    public const SGP = 'sgp';

    /**
     * Sangisari
     */
    public const SGR = 'sgr';

    /**
     * Samogitian
     */
    public const SGS = 'sgs';

    /**
     * Brokpake
     */
    public const SGT = 'sgt';

    /**
     * Salas
     */
    public const SGU = 'sgu';

    /**
     * Sebat Bet Gurage
     */
    public const SGW = 'sgw';

    /**
     * Sierra Leone Sign Language
     */
    public const SGX = 'sgx';

    /**
     * Sanglechi
     */
    public const SGY = 'sgy';

    /**
     * Sursurunga
     */
    public const SGZ = 'sgz';

    /**
     * Shall-Zwall
     */
    public const SHA = 'sha';

    /**
     * Ninam
     */
    public const SHB = 'shb';

    /**
     * Sonde
     */
    public const SHC = 'shc';

    /**
     * Kundal Shahi
     */
    public const SHD = 'shd';

    /**
     * Sheko
     */
    public const SHE = 'she';

    /**
     * Shua
     */
    public const SHG = 'shg';

    /**
     * Shoshoni
     */
    public const SHH = 'shh';

    /**
     * Tachelhit
     */
    public const SHI = 'shi';

    /**
     * Shatt
     */
    public const SHJ = 'shj';

    /**
     * Shilluk
     */
    public const SHK = 'shk';

    /**
     * Shendu
     */
    public const SHL = 'shl';

    /**
     * Shahrudi
     */
    public const SHM = 'shm';

    /**
     * Shan
     */
    public const SHN = 'shn';

    /**
     * Shanga
     */
    public const SHO = 'sho';

    /**
     * Shipibo-Conibo
     */
    public const SHP = 'shp';

    /**
     * Sala
     */
    public const SHQ = 'shq';

    /**
     * Shi
     */
    public const SHR = 'shr';

    /**
     * Shuswap
     */
    public const SHS = 'shs';

    /**
     * Shasta
     */
    public const SHT = 'sht';

    /**
     * Chadian Arabic
     */
    public const SHU = 'shu';

    /**
     * Shehri
     */
    public const SHV = 'shv';

    /**
     * Shwai
     */
    public const SHW = 'shw';

    /**
     * She
     */
    public const SHX = 'shx';

    /**
     * Tachawit
     */
    public const SHY = 'shy';

    /**
     * Syenara Senoufo
     */
    public const SHZ = 'shz';

    /**
     * Akkala Sami
     */
    public const SIA = 'sia';

    /**
     * Sebop
     */
    public const SIB = 'sib';

    /**
     * Sidamo
     */
    public const SID = 'sid';

    /**
     * Simaa
     */
    public const SIE = 'sie';

    /**
     * Siamou
     */
    public const SIF = 'sif';

    /**
     * Paasaal
     */
    public const SIG = 'sig';

    /**
     * Zire
     */
    public const SIH = 'sih';

    /**
     * Shom Peng
     */
    public const SII = 'sii';

    /**
     * Numbami
     */
    public const SIJ = 'sij';

    /**
     * Sikiana
     */
    public const SIK = 'sik';

    /**
     * Tumulung Sisaala
     */
    public const SIL = 'sil';

    /**
     * Mende (Papua New Guinea)
     */
    public const SIM = 'sim';

    /**
     * Sinhala
     */
    public const SIN = 'sin';

    /**
     * Sikkimese
     */
    public const SIP = 'sip';

    /**
     * Sonia
     */
    public const SIQ = 'siq';

    /**
     * Siri
     */
    public const SIR = 'sir';

    /**
     * Siuslaw
     */
    public const SIS = 'sis';

    /**
     * Sinagen
     */
    public const SIU = 'siu';

    /**
     * Sumariup
     */
    public const SIV = 'siv';

    /**
     * Siwai
     */
    public const SIW = 'siw';

    /**
     * Sumau
     */
    public const SIX = 'six';

    /**
     * Sivandi
     */
    public const SIY = 'siy';

    /**
     * Siwi
     */
    public const SIZ = 'siz';

    /**
     * Epena
     */
    public const SJA = 'sja';

    /**
     * Sajau Basap
     */
    public const SJB = 'sjb';

    /**
     * Shaojiang Chinese
     */
    public const SJC = 'sjc';

    /**
     * Kildin Sami
     */
    public const SJD = 'sjd';

    /**
     * Pite Sami
     */
    public const SJE = 'sje';

    /**
     * Assangori
     */
    public const SJG = 'sjg';

    /**
     * Kemi Sami
     */
    public const SJK = 'sjk';

    /**
     * Sajalong
     */
    public const SJL = 'sjl';

    /**
     * Mapun
     */
    public const SJM = 'sjm';

    /**
     * Sindarin
     */
    public const SJN = 'sjn';

    /**
     * Xibe
     */
    public const SJO = 'sjo';

    /**
     * Surjapuri
     */
    public const SJP = 'sjp';

    /**
     * Siar-Lak
     */
    public const SJR = 'sjr';

    /**
     * Senhaja De Srair
     */
    public const SJS = 'sjs';

    /**
     * Ter Sami
     */
    public const SJT = 'sjt';

    /**
     * Ume Sami
     */
    public const SJU = 'sju';

    /**
     * Shawnee
     */
    public const SJW = 'sjw';

    /**
     * Skagit
     */
    public const SKA = 'ska';

    /**
     * Saek
     */
    public const SKB = 'skb';

    /**
     * Ma Manda
     */
    public const SKC = 'skc';

    /**
     * Southern Sierra Miwok
     */
    public const SKD = 'skd';

    /**
     * Seke (Vanuatu)
     */
    public const SKE = 'ske';

    /**
     * Sakirabiá
     */
    public const SKF = 'skf';

    /**
     * Sakalava Malagasy
     */
    public const SKG = 'skg';

    /**
     * Sikule
     */
    public const SKH = 'skh';

    /**
     * Sika
     */
    public const SKI = 'ski';

    /**
     * Seke (Nepal)
     */
    public const SKJ = 'skj';

    /**
     * Kutong
     */
    public const SKM = 'skm';

    /**
     * Kolibugan Subanon
     */
    public const SKN = 'skn';

    /**
     * Seko Tengah
     */
    public const SKO = 'sko';

    /**
     * Sekapan
     */
    public const SKP = 'skp';

    /**
     * Sininkere
     */
    public const SKQ = 'skq';

    /**
     * Saraiki
     */
    public const SKR = 'skr';

    /**
     * Maia
     */
    public const SKS = 'sks';

    /**
     * Sakata
     */
    public const SKT = 'skt';

    /**
     * Sakao
     */
    public const SKU = 'sku';

    /**
     * Skou
     */
    public const SKV = 'skv';

    /**
     * Skepi Creole Dutch
     */
    public const SKW = 'skw';

    /**
     * Seko Padang
     */
    public const SKX = 'skx';

    /**
     * Sikaiana
     */
    public const SKY = 'sky';

    /**
     * Sekar
     */
    public const SKZ = 'skz';

    /**
     * Sáliba
     */
    public const SLC = 'slc';

    /**
     * Sissala
     */
    public const SLD = 'sld';

    /**
     * Sholaga
     */
    public const SLE = 'sle';

    /**
     * Swiss-Italian Sign Language
     */
    public const SLF = 'slf';

    /**
     * Selungai Murut
     */
    public const SLG = 'slg';

    /**
     * Southern Puget Sound Salish
     */
    public const SLH = 'slh';

    /**
     * Lower Silesian
     */
    public const SLI = 'sli';

    /**
     * Salumá
     */
    public const SLJ = 'slj';

    /**
     * Slovak
     */
    public const SLK = 'slk';

    /**
     * Salt-Yui
     */
    public const SLL = 'sll';

    /**
     * Pangutaran Sama
     */
    public const SLM = 'slm';

    /**
     * Salinan
     */
    public const SLN = 'sln';

    /**
     * Lamaholot
     */
    public const SLP = 'slp';

    /**
     * Salar
     */
    public const SLR = 'slr';

    /**
     * Singapore Sign Language
     */
    public const SLS = 'sls';

    /**
     * Sila
     */
    public const SLT = 'slt';

    /**
     * Selaru
     */
    public const SLU = 'slu';

    /**
     * Slovenian
     */
    public const SLV = 'slv';

    /**
     * Sialum
     */
    public const SLW = 'slw';

    /**
     * Salampasu
     */
    public const SLX = 'slx';

    /**
     * Selayar
     */
    public const SLY = 'sly';

    /**
     * Ma'ya
     */
    public const SLZ = 'slz';

    /**
     * Southern Sami
     */
    public const SMA = 'sma';

    /**
     * Simbari
     */
    public const SMB = 'smb';

    /**
     * Som
     */
    public const SMC = 'smc';

    /**
     * Northern Sami
     */
    public const SME = 'sme';

    /**
     * Auwe
     */
    public const SMF = 'smf';

    /**
     * Simbali
     */
    public const SMG = 'smg';

    /**
     * Samei
     */
    public const SMH = 'smh';

    /**
     * Lule Sami
     */
    public const SMJ = 'smj';

    /**
     * Bolinao
     */
    public const SMK = 'smk';

    /**
     * Central Sama
     */
    public const SML = 'sml';

    /**
     * Musasa
     */
    public const SMM = 'smm';

    /**
     * Inari Sami
     */
    public const SMN = 'smn';

    /**
     * Samoan
     */
    public const SMO = 'smo';

    /**
     * Samaritan
     */
    public const SMP = 'smp';

    /**
     * Samo
     */
    public const SMQ = 'smq';

    /**
     * Simeulue
     */
    public const SMR = 'smr';

    /**
     * Skolt Sami
     */
    public const SMS = 'sms';

    /**
     * Simte
     */
    public const SMT = 'smt';

    /**
     * Somray
     */
    public const SMU = 'smu';

    /**
     * Samvedi
     */
    public const SMV = 'smv';

    /**
     * Sumbawa
     */
    public const SMW = 'smw';

    /**
     * Samba
     */
    public const SMX = 'smx';

    /**
     * Semnani
     */
    public const SMY = 'smy';

    /**
     * Simeku
     */
    public const SMZ = 'smz';

    /**
     * Shona
     */
    public const SNA = 'sna';

    /**
     * Sinaugoro
     */
    public const SNC = 'snc';

    /**
     * Sindhi
     */
    public const SND = 'snd';

    /**
     * Bau Bidayuh
     */
    public const SNE = 'sne';

    /**
     * Noon
     */
    public const SNF = 'snf';

    /**
     * Sanga (Democratic Republic of Congo)
     */
    public const SNG = 'sng';

    /**
     * Sensi
     */
    public const SNI = 'sni';

    /**
     * Riverain Sango
     */
    public const SNJ = 'snj';

    /**
     * Soninke
     */
    public const SNK = 'snk';

    /**
     * Sangil
     */
    public const SNL = 'snl';

    /**
     * Southern Ma'di
     */
    public const SNM = 'snm';

    /**
     * Siona
     */
    public const SNN = 'snn';

    /**
     * Snohomish
     */
    public const SNO = 'sno';

    /**
     * Siane
     */
    public const SNP = 'snp';

    /**
     * Sangu (Gabon)
     */
    public const SNQ = 'snq';

    /**
     * Sihan
     */
    public const SNR = 'snr';

    /**
     * South West Bay
     */
    public const SNS = 'sns';

    /**
     * Senggi
     */
    public const SNU = 'snu';

    /**
     * Sa'ban
     */
    public const SNV = 'snv';

    /**
     * Selee
     */
    public const SNW = 'snw';

    /**
     * Sam
     */
    public const SNX = 'snx';

    /**
     * Saniyo-Hiyewe
     */
    public const SNY = 'sny';

    /**
     * Kou
     */
    public const SNZ = 'snz';

    /**
     * Thai Song
     */
    public const SOA = 'soa';

    /**
     * Sobei
     */
    public const SOB = 'sob';

    /**
     * So (Democratic Republic of Congo)
     */
    public const SOC = 'soc';

    /**
     * Songoora
     */
    public const SOD = 'sod';

    /**
     * Songomeno
     */
    public const SOE = 'soe';

    /**
     * Sogdian
     */
    public const SOG = 'sog';

    /**
     * Aka
     */
    public const SOH = 'soh';

    /**
     * Sonha
     */
    public const SOI = 'soi';

    /**
     * Soi
     */
    public const SOJ = 'soj';

    /**
     * Sokoro
     */
    public const SOK = 'sok';

    /**
     * Solos
     */
    public const SOL = 'sol';

    /**
     * Somali
     */
    public const SOM = 'som';

    /**
     * Songo
     */
    public const SOO = 'soo';

    /**
     * Songe
     */
    public const SOP = 'sop';

    /**
     * Kanasi
     */
    public const SOQ = 'soq';

    /**
     * Somrai
     */
    public const SOR = 'sor';

    /**
     * Seeku
     */
    public const SOS = 'sos';

    /**
     * Southern Sotho
     */
    public const SOT = 'sot';

    /**
     * Southern Thai
     */
    public const SOU = 'sou';

    /**
     * Sonsorol
     */
    public const SOV = 'sov';

    /**
     * Sowanda
     */
    public const SOW = 'sow';

    /**
     * Swo
     */
    public const SOX = 'sox';

    /**
     * Miyobe
     */
    public const SOY = 'soy';

    /**
     * Temi
     */
    public const SOZ = 'soz';

    /**
     * Spanish
     */
    public const SPA = 'spa';

    /**
     * Sepa (Indonesia)
     */
    public const SPB = 'spb';

    /**
     * Sapé
     */
    public const SPC = 'spc';

    /**
     * Saep
     */
    public const SPD = 'spd';

    /**
     * Sepa (Papua New Guinea)
     */
    public const SPE = 'spe';

    /**
     * Sian
     */
    public const SPG = 'spg';

    /**
     * Saponi
     */
    public const SPI = 'spi';

    /**
     * Sengo
     */
    public const SPK = 'spk';

    /**
     * Selepet
     */
    public const SPL = 'spl';

    /**
     * Akukem
     */
    public const SPM = 'spm';

    /**
     * Sanapaná
     */
    public const SPN = 'spn';

    /**
     * Spokane
     */
    public const SPO = 'spo';

    /**
     * Supyire Senoufo
     */
    public const SPP = 'spp';

    /**
     * Loreto-Ucayali Spanish
     */
    public const SPQ = 'spq';

    /**
     * Saparua
     */
    public const SPR = 'spr';

    /**
     * Saposa
     */
    public const SPS = 'sps';

    /**
     * Spiti Bhoti
     */
    public const SPT = 'spt';

    /**
     * Sapuan
     */
    public const SPU = 'spu';

    /**
     * Sambalpuri
     */
    public const SPV = 'spv';

    /**
     * South Picene
     */
    public const SPX = 'spx';

    /**
     * Sabaot
     */
    public const SPY = 'spy';

    /**
     * Shama-Sambuga
     */
    public const SQA = 'sqa';

    /**
     * Shau
     */
    public const SQH = 'sqh';

    /**
     * Albanian
     */
    public const SQI = 'sqi';

    /**
     * Albanian Sign Language
     */
    public const SQK = 'sqk';

    /**
     * Suma
     */
    public const SQM = 'sqm';

    /**
     * Susquehannock
     */
    public const SQN = 'sqn';

    /**
     * Sorkhei
     */
    public const SQO = 'sqo';

    /**
     * Sou
     */
    public const SQQ = 'sqq';

    /**
     * Siculo Arabic
     */
    public const SQR = 'sqr';

    /**
     * Sri Lankan Sign Language
     */
    public const SQS = 'sqs';

    /**
     * Soqotri
     */
    public const SQT = 'sqt';

    /**
     * Squamish
     */
    public const SQU = 'squ';

    /**
     * Kufr Qassem Sign Language (KQSL)
     */
    public const SQX = 'sqx';

    /**
     * Saruga
     */
    public const SRA = 'sra';

    /**
     * Sora
     */
    public const SRB = 'srb';

    /**
     * Logudorese Sardinian
     */
    public const SRC = 'src';

    /**
     * Sardinian
     */
    public const SRD = 'srd';

    /**
     * Sara
     */
    public const SRE = 'sre';

    /**
     * Nafi
     */
    public const SRF = 'srf';

    /**
     * Sulod
     */
    public const SRG = 'srg';

    /**
     * Sarikoli
     */
    public const SRH = 'srh';

    /**
     * Siriano
     */
    public const SRI = 'sri';

    /**
     * Serudung Murut
     */
    public const SRK = 'srk';

    /**
     * Isirawa
     */
    public const SRL = 'srl';

    /**
     * Saramaccan
     */
    public const SRM = 'srm';

    /**
     * Sranan Tongo
     */
    public const SRN = 'srn';

    /**
     * Campidanese Sardinian
     */
    public const SRO = 'sro';

    /**
     * Serbian
     */
    public const SRP = 'srp';

    /**
     * Sirionó
     */
    public const SRQ = 'srq';

    /**
     * Serer
     */
    public const SRR = 'srr';

    /**
     * Sarsi
     */
    public const SRS = 'srs';

    /**
     * Sauri
     */
    public const SRT = 'srt';

    /**
     * Suruí
     */
    public const SRU = 'sru';

    /**
     * Southern Sorsoganon
     */
    public const SRV = 'srv';

    /**
     * Serua
     */
    public const SRW = 'srw';

    /**
     * Sirmauri
     */
    public const SRX = 'srx';

    /**
     * Sera
     */
    public const SRY = 'sry';

    /**
     * Shahmirzadi
     */
    public const SRZ = 'srz';

    /**
     * Southern Sama
     */
    public const SSB = 'ssb';

    /**
     * Suba-Simbiti
     */
    public const SSC = 'ssc';

    /**
     * Siroi
     */
    public const SSD = 'ssd';

    /**
     * Balangingi
     */
    public const SSE = 'sse';

    /**
     * Thao
     */
    public const SSF = 'ssf';

    /**
     * Seimat
     */
    public const SSG = 'ssg';

    /**
     * Shihhi Arabic
     */
    public const SSH = 'ssh';

    /**
     * Sansi
     */
    public const SSI = 'ssi';

    /**
     * Sausi
     */
    public const SSJ = 'ssj';

    /**
     * Sunam
     */
    public const SSK = 'ssk';

    /**
     * Western Sisaala
     */
    public const SSL = 'ssl';

    /**
     * Semnam
     */
    public const SSM = 'ssm';

    /**
     * Waata
     */
    public const SSN = 'ssn';

    /**
     * Sissano
     */
    public const SSO = 'sso';

    /**
     * Spanish Sign Language
     */
    public const SSP = 'ssp';

    /**
     * So'a
     */
    public const SSQ = 'ssq';

    /**
     * Swiss-French Sign Language
     */
    public const SSR = 'ssr';

    /**
     * Sô
     */
    public const SSS = 'sss';

    /**
     * Sinasina
     */
    public const SST = 'sst';

    /**
     * Susuami
     */
    public const SSU = 'ssu';

    /**
     * Shark Bay
     */
    public const SSV = 'ssv';

    /**
     * Swati
     */
    public const SSW = 'ssw';

    /**
     * Samberigi
     */
    public const SSX = 'ssx';

    /**
     * Saho
     */
    public const SSY = 'ssy';

    /**
     * Sengseng
     */
    public const SSZ = 'ssz';

    /**
     * Settla
     */
    public const STA = 'sta';

    /**
     * Northern Subanen
     */
    public const STB = 'stb';

    /**
     * Sentinel
     */
    public const STD = 'std';

    /**
     * Liana-Seti
     */
    public const STE = 'ste';

    /**
     * Seta
     */
    public const STF = 'stf';

    /**
     * Trieng
     */
    public const STG = 'stg';

    /**
     * Shelta
     */
    public const STH = 'sth';

    /**
     * Bulo Stieng
     */
    public const STI = 'sti';

    /**
     * Matya Samo
     */
    public const STJ = 'stj';

    /**
     * Arammba
     */
    public const STK = 'stk';

    /**
     * Stellingwerfs
     */
    public const STL = 'stl';

    /**
     * Setaman
     */
    public const STM = 'stm';

    /**
     * Owa
     */
    public const STN = 'stn';

    /**
     * Stoney
     */
    public const STO = 'sto';

    /**
     * Southeastern Tepehuan
     */
    public const STP = 'stp';

    /**
     * Saterfriesisch
     */
    public const STQ = 'stq';

    /**
     * Straits Salish
     */
    public const STR = 'str';

    /**
     * Shumashti
     */
    public const STS = 'sts';

    /**
     * Budeh Stieng
     */
    public const STT = 'stt';

    /**
     * Samtao
     */
    public const STU = 'stu';

    /**
     * Silt'e
     */
    public const STV = 'stv';

    /**
     * Satawalese
     */
    public const STW = 'stw';

    /**
     * Siberian Tatar
     */
    public const STY = 'sty';

    /**
     * Sulka
     */
    public const SUA = 'sua';

    /**
     * Suku
     */
    public const SUB = 'sub';

    /**
     * Western Subanon
     */
    public const SUC = 'suc';

    /**
     * Suena
     */
    public const SUE = 'sue';

    /**
     * Suganga
     */
    public const SUG = 'sug';

    /**
     * Suki
     */
    public const SUI = 'sui';

    /**
     * Shubi
     */
    public const SUJ = 'suj';

    /**
     * Sukuma
     */
    public const SUK = 'suk';

    /**
     * Sundanese
     */
    public const SUN = 'sun';

    /**
     * Bouni
     */
    public const SUO = 'suo';

    /**
     * Tirmaga-Chai Suri
     */
    public const SUQ = 'suq';

    /**
     * Mwaghavul
     */
    public const SUR = 'sur';

    /**
     * Susu
     */
    public const SUS = 'sus';

    /**
     * Subtiaba
     */
    public const SUT = 'sut';

    /**
     * Puroik
     */
    public const SUV = 'suv';

    /**
     * Sumbwa
     */
    public const SUW = 'suw';

    /**
     * Sumerian
     */
    public const SUX = 'sux';

    /**
     * Suyá
     */
    public const SUY = 'suy';

    /**
     * Sunwar
     */
    public const SUZ = 'suz';

    /**
     * Svan
     */
    public const SVA = 'sva';

    /**
     * Ulau-Suain
     */
    public const SVB = 'svb';

    /**
     * Vincentian Creole English
     */
    public const SVC = 'svc';

    /**
     * Serili
     */
    public const SVE = 'sve';

    /**
     * Slovakian Sign Language
     */
    public const SVK = 'svk';

    /**
     * Slavomolisano
     */
    public const SVM = 'svm';

    /**
     * Savosavo
     */
    public const SVS = 'svs';

    /**
     * Skalvian
     */
    public const SVX = 'svx';

    /**
     * Swahili (macrolanguage)
     */
    public const SWA = 'swa';

    /**
     * Maore Comorian
     */
    public const SWB = 'swb';

    /**
     * Congo Swahili
     */
    public const SWC = 'swc';

    /**
     * Swedish
     */
    public const SWE = 'swe';

    /**
     * Sere
     */
    public const SWF = 'swf';

    /**
     * Swabian
     */
    public const SWG = 'swg';

    /**
     * Swahili (individual language)
     */
    public const SWH = 'swh';

    /**
     * Sui
     */
    public const SWI = 'swi';

    /**
     * Sira
     */
    public const SWJ = 'swj';

    /**
     * Malawi Sena
     */
    public const SWK = 'swk';

    /**
     * Swedish Sign Language
     */
    public const SWL = 'swl';

    /**
     * Samosa
     */
    public const SWM = 'swm';

    /**
     * Sawknah
     */
    public const SWN = 'swn';

    /**
     * Shanenawa
     */
    public const SWO = 'swo';

    /**
     * Suau
     */
    public const SWP = 'swp';

    /**
     * Sharwa
     */
    public const SWQ = 'swq';

    /**
     * Saweru
     */
    public const SWR = 'swr';

    /**
     * Seluwasan
     */
    public const SWS = 'sws';

    /**
     * Sawila
     */
    public const SWT = 'swt';

    /**
     * Suwawa
     */
    public const SWU = 'swu';

    /**
     * Shekhawati
     */
    public const SWV = 'swv';

    /**
     * Sowa
     */
    public const SWW = 'sww';

    /**
     * Suruahá
     */
    public const SWX = 'swx';

    /**
     * Sarua
     */
    public const SWY = 'swy';

    /**
     * Suba
     */
    public const SXB = 'sxb';

    /**
     * Sicanian
     */
    public const SXC = 'sxc';

    /**
     * Sighu
     */
    public const SXE = 'sxe';

    /**
     * Shuhi
     */
    public const SXG = 'sxg';

    /**
     * Southern Kalapuya
     */
    public const SXK = 'sxk';

    /**
     * Selian
     */
    public const SXL = 'sxl';

    /**
     * Samre
     */
    public const SXM = 'sxm';

    /**
     * Sangir
     */
    public const SXN = 'sxn';

    /**
     * Sorothaptic
     */
    public const SXO = 'sxo';

    /**
     * Saaroa
     */
    public const SXR = 'sxr';

    /**
     * Sasaru
     */
    public const SXS = 'sxs';

    /**
     * Upper Saxon
     */
    public const SXU = 'sxu';

    /**
     * Saxwe Gbe
     */
    public const SXW = 'sxw';

    /**
     * Siang
     */
    public const SYA = 'sya';

    /**
     * Central Subanen
     */
    public const SYB = 'syb';

    /**
     * Classical Syriac
     */
    public const SYC = 'syc';

    /**
     * Seki
     */
    public const SYI = 'syi';

    /**
     * Sukur
     */
    public const SYK = 'syk';

    /**
     * Sylheti
     */
    public const SYL = 'syl';

    /**
     * Maya Samo
     */
    public const SYM = 'sym';

    /**
     * Senaya
     */
    public const SYN = 'syn';

    /**
     * Suoy
     */
    public const SYO = 'syo';

    /**
     * Syriac
     */
    public const SYR = 'syr';

    /**
     * Sinyar
     */
    public const SYS = 'sys';

    /**
     * Kagate
     */
    public const SYW = 'syw';

    /**
     * Samay
     */
    public const SYX = 'syx';

    /**
     * Al-Sayyid Bedouin Sign Language
     */
    public const SYY = 'syy';

    /**
     * Semelai
     */
    public const SZA = 'sza';

    /**
     * Ngalum
     */
    public const SZB = 'szb';

    /**
     * Semaq Beri
     */
    public const SZC = 'szc';

    /**
     * Seze
     */
    public const SZE = 'sze';

    /**
     * Sengele
     */
    public const SZG = 'szg';

    /**
     * Silesian
     */
    public const SZL = 'szl';

    /**
     * Sula
     */
    public const SZN = 'szn';

    /**
     * Suabo
     */
    public const SZP = 'szp';

    /**
     * Solomon Islands Sign Language
     */
    public const SZS = 'szs';

    /**
     * Isu (Fako Division)
     */
    public const SZV = 'szv';

    /**
     * Sawai
     */
    public const SZW = 'szw';

    /**
     * Sakizaya
     */
    public const SZY = 'szy';

    /**
     * Lower Tanana
     */
    public const TAA = 'taa';

    /**
     * Tabassaran
     */
    public const TAB = 'tab';

    /**
     * Lowland Tarahumara
     */
    public const TAC = 'tac';

    /**
     * Tause
     */
    public const TAD = 'tad';

    /**
     * Tariana
     */
    public const TAE = 'tae';

    /**
     * Tapirapé
     */
    public const TAF = 'taf';

    /**
     * Tagoi
     */
    public const TAG = 'tag';

    /**
     * Tahitian
     */
    public const TAH = 'tah';

    /**
     * Eastern Tamang
     */
    public const TAJ = 'taj';

    /**
     * Tala
     */
    public const TAK = 'tak';

    /**
     * Tal
     */
    public const TAL = 'tal';

    /**
     * Tamil
     */
    public const TAM = 'tam';

    /**
     * Tangale
     */
    public const TAN = 'tan';

    /**
     * Yami
     */
    public const TAO = 'tao';

    /**
     * Taabwa
     */
    public const TAP = 'tap';

    /**
     * Tamasheq
     */
    public const TAQ = 'taq';

    /**
     * Central Tarahumara
     */
    public const TAR = 'tar';

    /**
     * Tay Boi
     */
    public const TAS = 'tas';

    /**
     * Tatar
     */
    public const TAT = 'tat';

    /**
     * Upper Tanana
     */
    public const TAU = 'tau';

    /**
     * Tatuyo
     */
    public const TAV = 'tav';

    /**
     * Tai
     */
    public const TAW = 'taw';

    /**
     * Tamki
     */
    public const TAX = 'tax';

    /**
     * Atayal
     */
    public const TAY = 'tay';

    /**
     * Tocho
     */
    public const TAZ = 'taz';

    /**
     * Aikanã
     */
    public const TBA = 'tba';

    /**
     * Takia
     */
    public const TBC = 'tbc';

    /**
     * Kaki Ae
     */
    public const TBD = 'tbd';

    /**
     * Tanimbili
     */
    public const TBE = 'tbe';

    /**
     * Mandara
     */
    public const TBF = 'tbf';

    /**
     * North Tairora
     */
    public const TBG = 'tbg';

    /**
     * Dharawal
     */
    public const TBH = 'tbh';

    /**
     * Gaam
     */
    public const TBI = 'tbi';

    /**
     * Tiang
     */
    public const TBJ = 'tbj';

    /**
     * Calamian Tagbanwa
     */
    public const TBK = 'tbk';

    /**
     * Tboli
     */
    public const TBL = 'tbl';

    /**
     * Tagbu
     */
    public const TBM = 'tbm';

    /**
     * Barro Negro Tunebo
     */
    public const TBN = 'tbn';

    /**
     * Tawala
     */
    public const TBO = 'tbo';

    /**
     * Taworta
     */
    public const TBP = 'tbp';

    /**
     * Tumtum
     */
    public const TBR = 'tbr';

    /**
     * Tanguat
     */
    public const TBS = 'tbs';

    /**
     * Tembo (Kitembo)
     */
    public const TBT = 'tbt';

    /**
     * Tubar
     */
    public const TBU = 'tbu';

    /**
     * Tobo
     */
    public const TBV = 'tbv';

    /**
     * Tagbanwa
     */
    public const TBW = 'tbw';

    /**
     * Kapin
     */
    public const TBX = 'tbx';

    /**
     * Tabaru
     */
    public const TBY = 'tby';

    /**
     * Ditammari
     */
    public const TBZ = 'tbz';

    /**
     * Ticuna
     */
    public const TCA = 'tca';

    /**
     * Tanacross
     */
    public const TCB = 'tcb';

    /**
     * Datooga
     */
    public const TCC = 'tcc';

    /**
     * Tafi
     */
    public const TCD = 'tcd';

    /**
     * Southern Tutchone
     */
    public const TCE = 'tce';

    /**
     * Malinaltepec Me'phaa
     */
    public const TCF = 'tcf';

    /**
     * Tamagario
     */
    public const TCG = 'tcg';

    /**
     * Turks And Caicos Creole English
     */
    public const TCH = 'tch';

    /**
     * Wára
     */
    public const TCI = 'tci';

    /**
     * Tchitchege
     */
    public const TCK = 'tck';

    /**
     * Taman (Myanmar)
     */
    public const TCL = 'tcl';

    /**
     * Tanahmerah
     */
    public const TCM = 'tcm';

    /**
     * Tichurong
     */
    public const TCN = 'tcn';

    /**
     * Taungyo
     */
    public const TCO = 'tco';

    /**
     * Tawr Chin
     */
    public const TCP = 'tcp';

    /**
     * Kaiy
     */
    public const TCQ = 'tcq';

    /**
     * Torres Strait Creole
     */
    public const TCS = 'tcs';

    /**
     * T'en
     */
    public const TCT = 'tct';

    /**
     * Southeastern Tarahumara
     */
    public const TCU = 'tcu';

    /**
     * Tecpatlán Totonac
     */
    public const TCW = 'tcw';

    /**
     * Toda
     */
    public const TCX = 'tcx';

    /**
     * Tulu
     */
    public const TCY = 'tcy';

    /**
     * Thado Chin
     */
    public const TCZ = 'tcz';

    /**
     * Tagdal
     */
    public const TDA = 'tda';

    /**
     * Panchpargania
     */
    public const TDB = 'tdb';

    /**
     * Emberá-Tadó
     */
    public const TDC = 'tdc';

    /**
     * Tai Nüa
     */
    public const TDD = 'tdd';

    /**
     * Tiranige Diga Dogon
     */
    public const TDE = 'tde';

    /**
     * Talieng
     */
    public const TDF = 'tdf';

    /**
     * Western Tamang
     */
    public const TDG = 'tdg';

    /**
     * Thulung
     */
    public const TDH = 'tdh';

    /**
     * Tomadino
     */
    public const TDI = 'tdi';

    /**
     * Tajio
     */
    public const TDJ = 'tdj';

    /**
     * Tambas
     */
    public const TDK = 'tdk';

    /**
     * Sur
     */
    public const TDL = 'tdl';

    /**
     * Taruma
     */
    public const TDM = 'tdm';

    /**
     * Tondano
     */
    public const TDN = 'tdn';

    /**
     * Teme
     */
    public const TDO = 'tdo';

    /**
     * Tita
     */
    public const TDQ = 'tdq';

    /**
     * Todrah
     */
    public const TDR = 'tdr';

    /**
     * Doutai
     */
    public const TDS = 'tds';

    /**
     * Tetun Dili
     */
    public const TDT = 'tdt';

    /**
     * Toro
     */
    public const TDV = 'tdv';

    /**
     * Tandroy-Mahafaly Malagasy
     */
    public const TDX = 'tdx';

    /**
     * Tadyawan
     */
    public const TDY = 'tdy';

    /**
     * Temiar
     */
    public const TEA = 'tea';

    /**
     * Tetete
     */
    public const TEB = 'teb';

    /**
     * Terik
     */
    public const TEC = 'tec';

    /**
     * Tepo Krumen
     */
    public const TED = 'ted';

    /**
     * Huehuetla Tepehua
     */
    public const TEE = 'tee';

    /**
     * Teressa
     */
    public const TEF = 'tef';

    /**
     * Teke-Tege
     */
    public const TEG = 'teg';

    /**
     * Tehuelche
     */
    public const TEH = 'teh';

    /**
     * Torricelli
     */
    public const TEI = 'tei';

    /**
     * Ibali Teke
     */
    public const TEK = 'tek';

    /**
     * Telugu
     */
    public const TEL = 'tel';

    /**
     * Timne
     */
    public const TEM = 'tem';

    /**
     * Tama (Colombia)
     */
    public const TEN = 'ten';

    /**
     * Teso
     */
    public const TEO = 'teo';

    /**
     * Tepecano
     */
    public const TEP = 'tep';

    /**
     * Temein
     */
    public const TEQ = 'teq';

    /**
     * Tereno
     */
    public const TER = 'ter';

    /**
     * Tengger
     */
    public const TES = 'tes';

    /**
     * Tetum
     */
    public const TET = 'tet';

    /**
     * Soo
     */
    public const TEU = 'teu';

    /**
     * Teor
     */
    public const TEV = 'tev';

    /**
     * Tewa (USA)
     */
    public const TEW = 'tew';

    /**
     * Tennet
     */
    public const TEX = 'tex';

    /**
     * Tulishi
     */
    public const TEY = 'tey';

    /**
     * Tetserret
     */
    public const TEZ = 'tez';

    /**
     * Tofin Gbe
     */
    public const TFI = 'tfi';

    /**
     * Tanaina
     */
    public const TFN = 'tfn';

    /**
     * Tefaro
     */
    public const TFO = 'tfo';

    /**
     * Teribe
     */
    public const TFR = 'tfr';

    /**
     * Ternate
     */
    public const TFT = 'tft';

    /**
     * Sagalla
     */
    public const TGA = 'tga';

    /**
     * Tobilung
     */
    public const TGB = 'tgb';

    /**
     * Tigak
     */
    public const TGC = 'tgc';

    /**
     * Ciwogai
     */
    public const TGD = 'tgd';

    /**
     * Eastern Gorkha Tamang
     */
    public const TGE = 'tge';

    /**
     * Chalikha
     */
    public const TGF = 'tgf';

    /**
     * Tobagonian Creole English
     */
    public const TGH = 'tgh';

    /**
     * Lawunuia
     */
    public const TGI = 'tgi';

    /**
     * Tagin
     */
    public const TGJ = 'tgj';

    /**
     * Tajik
     */
    public const TGK = 'tgk';

    /**
     * Tagalog
     */
    public const TGL = 'tgl';

    /**
     * Tandaganon
     */
    public const TGN = 'tgn';

    /**
     * Sudest
     */
    public const TGO = 'tgo';

    /**
     * Tangoa
     */
    public const TGP = 'tgp';

    /**
     * Tring
     */
    public const TGQ = 'tgq';

    /**
     * Tareng
     */
    public const TGR = 'tgr';

    /**
     * Nume
     */
    public const TGS = 'tgs';

    /**
     * Central Tagbanwa
     */
    public const TGT = 'tgt';

    /**
     * Tanggu
     */
    public const TGU = 'tgu';

    /**
     * Tingui-Boto
     */
    public const TGV = 'tgv';

    /**
     * Tagwana Senoufo
     */
    public const TGW = 'tgw';

    /**
     * Tagish
     */
    public const TGX = 'tgx';

    /**
     * Togoyo
     */
    public const TGY = 'tgy';

    /**
     * Tagalaka
     */
    public const TGZ = 'tgz';

    /**
     * Thai
     */
    public const THA = 'tha';

    /**
     * Kuuk Thaayorre
     */
    public const THD = 'thd';

    /**
     * Chitwania Tharu
     */
    public const THE = 'the';

    /**
     * Thangmi
     */
    public const THF = 'thf';

    /**
     * Northern Tarahumara
     */
    public const THH = 'thh';

    /**
     * Tai Long
     */
    public const THI = 'thi';

    /**
     * Tharaka
     */
    public const THK = 'thk';

    /**
     * Dangaura Tharu
     */
    public const THL = 'thl';

    /**
     * Aheu
     */
    public const THM = 'thm';

    /**
     * Thachanadan
     */
    public const THN = 'thn';

    /**
     * Thompson
     */
    public const THP = 'thp';

    /**
     * Kochila Tharu
     */
    public const THQ = 'thq';

    /**
     * Rana Tharu
     */
    public const THR = 'thr';

    /**
     * Thakali
     */
    public const THS = 'ths';

    /**
     * Tahltan
     */
    public const THT = 'tht';

    /**
     * Thuri
     */
    public const THU = 'thu';

    /**
     * Tahaggart Tamahaq
     */
    public const THV = 'thv';

    /**
     * Tha
     */
    public const THY = 'thy';

    /**
     * Tayart Tamajeq
     */
    public const THZ = 'thz';

    /**
     * Tidikelt Tamazight
     */
    public const TIA = 'tia';

    /**
     * Tira
     */
    public const TIC = 'tic';

    /**
     * Tifal
     */
    public const TIF = 'tif';

    /**
     * Tigre
     */
    public const TIG = 'tig';

    /**
     * Timugon Murut
     */
    public const TIH = 'tih';

    /**
     * Tiene
     */
    public const TII = 'tii';

    /**
     * Tilung
     */
    public const TIJ = 'tij';

    /**
     * Tikar
     */
    public const TIK = 'tik';

    /**
     * Tillamook
     */
    public const TIL = 'til';

    /**
     * Timbe
     */
    public const TIM = 'tim';

    /**
     * Tindi
     */
    public const TIN = 'tin';

    /**
     * Teop
     */
    public const TIO = 'tio';

    /**
     * Trimuris
     */
    public const TIP = 'tip';

    /**
     * Tiéfo
     */
    public const TIQ = 'tiq';

    /**
     * Tigrinya
     */
    public const TIR = 'tir';

    /**
     * Masadiit Itneg
     */
    public const TIS = 'tis';

    /**
     * Tinigua
     */
    public const TIT = 'tit';

    /**
     * Adasen
     */
    public const TIU = 'tiu';

    /**
     * Tiv
     */
    public const TIV = 'tiv';

    /**
     * Tiwi
     */
    public const TIW = 'tiw';

    /**
     * Southern Tiwa
     */
    public const TIX = 'tix';

    /**
     * Tiruray
     */
    public const TIY = 'tiy';

    /**
     * Tai Hongjin
     */
    public const TIZ = 'tiz';

    /**
     * Tajuasohn
     */
    public const TJA = 'tja';

    /**
     * Tunjung
     */
    public const TJG = 'tjg';

    /**
     * Northern Tujia
     */
    public const TJI = 'tji';

    /**
     * Tjungundji
     */
    public const TJJ = 'tjj';

    /**
     * Tai Laing
     */
    public const TJL = 'tjl';

    /**
     * Timucua
     */
    public const TJM = 'tjm';

    /**
     * Tonjon
     */
    public const TJN = 'tjn';

    /**
     * Temacine Tamazight
     */
    public const TJO = 'tjo';

    /**
     * Tjupany
     */
    public const TJP = 'tjp';

    /**
     * Southern Tujia
     */
    public const TJS = 'tjs';

    /**
     * Tjurruru
     */
    public const TJU = 'tju';

    /**
     * Djabwurrung
     */
    public const TJW = 'tjw';

    /**
     * Truká
     */
    public const TKA = 'tka';

    /**
     * Buksa
     */
    public const TKB = 'tkb';

    /**
     * Tukudede
     */
    public const TKD = 'tkd';

    /**
     * Takwane
     */
    public const TKE = 'tke';

    /**
     * Tukumanféd
     */
    public const TKF = 'tkf';

    /**
     * Tesaka Malagasy
     */
    public const TKG = 'tkg';

    /**
     * Tokelau
     */
    public const TKL = 'tkl';

    /**
     * Takelma
     */
    public const TKM = 'tkm';

    /**
     * Toku-No-Shima
     */
    public const TKN = 'tkn';

    /**
     * Tikopia
     */
    public const TKP = 'tkp';

    /**
     * Tee
     */
    public const TKQ = 'tkq';

    /**
     * Tsakhur
     */
    public const TKR = 'tkr';

    /**
     * Takestani
     */
    public const TKS = 'tks';

    /**
     * Kathoriya Tharu
     */
    public const TKT = 'tkt';

    /**
     * Upper Necaxa Totonac
     */
    public const TKU = 'tku';

    /**
     * Mur Pano
     */
    public const TKV = 'tkv';

    /**
     * Teanu
     */
    public const TKW = 'tkw';

    /**
     * Tangko
     */
    public const TKX = 'tkx';

    /**
     * Takua
     */
    public const TKZ = 'tkz';

    /**
     * Southwestern Tepehuan
     */
    public const TLA = 'tla';

    /**
     * Tobelo
     */
    public const TLB = 'tlb';

    /**
     * Yecuatla Totonac
     */
    public const TLC = 'tlc';

    /**
     * Talaud
     */
    public const TLD = 'tld';

    /**
     * Telefol
     */
    public const TLF = 'tlf';

    /**
     * Tofanma
     */
    public const TLG = 'tlg';

    /**
     * Klingon
     */
    public const TLH = 'tlh';

    /**
     * Tlingit
     */
    public const TLI = 'tli';

    /**
     * Talinga-Bwisi
     */
    public const TLJ = 'tlj';

    /**
     * Taloki
     */
    public const TLK = 'tlk';

    /**
     * Tetela
     */
    public const TLL = 'tll';

    /**
     * Tolomako
     */
    public const TLM = 'tlm';

    /**
     * Talondo'
     */
    public const TLN = 'tln';

    /**
     * Talodi
     */
    public const TLO = 'tlo';

    /**
     * Filomena Mata-Coahuitlán Totonac
     */
    public const TLP = 'tlp';

    /**
     * Tai Loi
     */
    public const TLQ = 'tlq';

    /**
     * Talise
     */
    public const TLR = 'tlr';

    /**
     * Tambotalo
     */
    public const TLS = 'tls';

    /**
     * Sou Nama
     */
    public const TLT = 'tlt';

    /**
     * Tulehu
     */
    public const TLU = 'tlu';

    /**
     * Taliabu
     */
    public const TLV = 'tlv';

    /**
     * Khehek
     */
    public const TLX = 'tlx';

    /**
     * Talysh
     */
    public const TLY = 'tly';

    /**
     * Tama (Chad)
     */
    public const TMA = 'tma';

    /**
     * Katbol
     */
    public const TMB = 'tmb';

    /**
     * Tumak
     */
    public const TMC = 'tmc';

    /**
     * Haruai
     */
    public const TMD = 'tmd';

    /**
     * Tremembé
     */
    public const TME = 'tme';

    /**
     * Toba-Maskoy
     */
    public const TMF = 'tmf';

    /**
     * Ternateño
     */
    public const TMG = 'tmg';

    /**
     * Tamashek
     */
    public const TMH = 'tmh';

    /**
     * Tutuba
     */
    public const TMI = 'tmi';

    /**
     * Samarokena
     */
    public const TMJ = 'tmj';

    /**
     * Tamnim Citak
     */
    public const TML = 'tml';

    /**
     * Tai Thanh
     */
    public const TMM = 'tmm';

    /**
     * Taman (Indonesia)
     */
    public const TMN = 'tmn';

    /**
     * Temoq
     */
    public const TMO = 'tmo';

    /**
     * Tumleo
     */
    public const TMQ = 'tmq';

    /**
     * Jewish Babylonian Aramaic (ca. 200-1200 CE)
     */
    public const TMR = 'tmr';

    /**
     * Tima
     */
    public const TMS = 'tms';

    /**
     * Tasmate
     */
    public const TMT = 'tmt';

    /**
     * Iau
     */
    public const TMU = 'tmu';

    /**
     * Tembo (Motembo)
     */
    public const TMV = 'tmv';

    /**
     * Temuan
     */
    public const TMW = 'tmw';

    /**
     * Tami
     */
    public const TMY = 'tmy';

    /**
     * Tamanaku
     */
    public const TMZ = 'tmz';

    /**
     * Tacana
     */
    public const TNA = 'tna';

    /**
     * Western Tunebo
     */
    public const TNB = 'tnb';

    /**
     * Tanimuca-Retuarã
     */
    public const TNC = 'tnc';

    /**
     * Angosturas Tunebo
     */
    public const TND = 'tnd';

    /**
     * Tobanga
     */
    public const TNG = 'tng';

    /**
     * Maiani
     */
    public const TNH = 'tnh';

    /**
     * Tandia
     */
    public const TNI = 'tni';

    /**
     * Kwamera
     */
    public const TNK = 'tnk';

    /**
     * Lenakel
     */
    public const TNL = 'tnl';

    /**
     * Tabla
     */
    public const TNM = 'tnm';

    /**
     * North Tanna
     */
    public const TNN = 'tnn';

    /**
     * Toromono
     */
    public const TNO = 'tno';

    /**
     * Whitesands
     */
    public const TNP = 'tnp';

    /**
     * Taino
     */
    public const TNQ = 'tnq';

    /**
     * Ménik
     */
    public const TNR = 'tnr';

    /**
     * Tenis
     */
    public const TNS = 'tns';

    /**
     * Tontemboan
     */
    public const TNT = 'tnt';

    /**
     * Tay Khang
     */
    public const TNU = 'tnu';

    /**
     * Tangchangya
     */
    public const TNV = 'tnv';

    /**
     * Tonsawang
     */
    public const TNW = 'tnw';

    /**
     * Tanema
     */
    public const TNX = 'tnx';

    /**
     * Tongwe
     */
    public const TNY = 'tny';

    /**
     * Ten'edn
     */
    public const TNZ = 'tnz';

    /**
     * Toba
     */
    public const TOB = 'tob';

    /**
     * Coyutla Totonac
     */
    public const TOC = 'toc';

    /**
     * Toma
     */
    public const TOD = 'tod';

    /**
     * Gizrra
     */
    public const TOF = 'tof';

    /**
     * Tonga (Nyasa)
     */
    public const TOG = 'tog';

    /**
     * Gitonga
     */
    public const TOH = 'toh';

    /**
     * Tonga (Zambia)
     */
    public const TOI = 'toi';

    /**
     * Tojolabal
     */
    public const TOJ = 'toj';

    /**
     * Toki Pona
     */
    public const TOK = 'tok';

    /**
     * Tolowa
     */
    public const TOL = 'tol';

    /**
     * Tombulu
     */
    public const TOM = 'tom';

    /**
     * Tonga (Tonga Islands)
     */
    public const TON = 'ton';

    /**
     * Xicotepec De Juárez Totonac
     */
    public const TOO = 'too';

    /**
     * Papantla Totonac
     */
    public const TOP = 'top';

    /**
     * Toposa
     */
    public const TOQ = 'toq';

    /**
     * Togbo-Vara Banda
     */
    public const TOR = 'tor';

    /**
     * Highland Totonac
     */
    public const TOS = 'tos';

    /**
     * Tho
     */
    public const TOU = 'tou';

    /**
     * Upper Taromi
     */
    public const TOV = 'tov';

    /**
     * Jemez
     */
    public const TOW = 'tow';

    /**
     * Tobian
     */
    public const TOX = 'tox';

    /**
     * Topoiyo
     */
    public const TOY = 'toy';

    /**
     * To
     */
    public const TOZ = 'toz';

    /**
     * Taupota
     */
    public const TPA = 'tpa';

    /**
     * Azoyú Me'phaa
     */
    public const TPC = 'tpc';

    /**
     * Tippera
     */
    public const TPE = 'tpe';

    /**
     * Tarpia
     */
    public const TPF = 'tpf';

    /**
     * Kula
     */
    public const TPG = 'tpg';

    /**
     * Tok Pisin
     */
    public const TPI = 'tpi';

    /**
     * Tapieté
     */
    public const TPJ = 'tpj';

    /**
     * Tupinikin
     */
    public const TPK = 'tpk';

    /**
     * Tlacoapa Me'phaa
     */
    public const TPL = 'tpl';

    /**
     * Tampulma
     */
    public const TPM = 'tpm';

    /**
     * Tupinambá
     */
    public const TPN = 'tpn';

    /**
     * Tai Pao
     */
    public const TPO = 'tpo';

    /**
     * Pisaflores Tepehua
     */
    public const TPP = 'tpp';

    /**
     * Tukpa
     */
    public const TPQ = 'tpq';

    /**
     * Tuparí
     */
    public const TPR = 'tpr';

    /**
     * Tlachichilco Tepehua
     */
    public const TPT = 'tpt';

    /**
     * Tampuan
     */
    public const TPU = 'tpu';

    /**
     * Tanapag
     */
    public const TPV = 'tpv';

    /**
     * Acatepec Me'phaa
     */
    public const TPX = 'tpx';

    /**
     * Trumai
     */
    public const TPY = 'tpy';

    /**
     * Tinputz
     */
    public const TPZ = 'tpz';

    /**
     * Tembé
     */
    public const TQB = 'tqb';

    /**
     * Lehali
     */
    public const TQL = 'tql';

    /**
     * Turumsa
     */
    public const TQM = 'tqm';

    /**
     * Tenino
     */
    public const TQN = 'tqn';

    /**
     * Toaripi
     */
    public const TQO = 'tqo';

    /**
     * Tomoip
     */
    public const TQP = 'tqp';

    /**
     * Tunni
     */
    public const TQQ = 'tqq';

    /**
     * Torona
     */
    public const TQR = 'tqr';

    /**
     * Western Totonac
     */
    public const TQT = 'tqt';

    /**
     * Touo
     */
    public const TQU = 'tqu';

    /**
     * Tonkawa
     */
    public const TQW = 'tqw';

    /**
     * Tirahi
     */
    public const TRA = 'tra';

    /**
     * Terebu
     */
    public const TRB = 'trb';

    /**
     * Copala Triqui
     */
    public const TRC = 'trc';

    /**
     * Turi
     */
    public const TRD = 'trd';

    /**
     * East Tarangan
     */
    public const TRE = 'tre';

    /**
     * Trinidadian Creole English
     */
    public const TRF = 'trf';

    /**
     * Lishán Didán
     */
    public const TRG = 'trg';

    /**
     * Turaka
     */
    public const TRH = 'trh';

    /**
     * Trió
     */
    public const TRI = 'tri';

    /**
     * Toram
     */
    public const TRJ = 'trj';

    /**
     * Traveller Scottish
     */
    public const TRL = 'trl';

    /**
     * Tregami
     */
    public const TRM = 'trm';

    /**
     * Trinitario
     */
    public const TRN = 'trn';

    /**
     * Tarao Naga
     */
    public const TRO = 'tro';

    /**
     * Kok Borok
     */
    public const TRP = 'trp';

    /**
     * San Martín Itunyoso Triqui
     */
    public const TRQ = 'trq';

    /**
     * Taushiro
     */
    public const TRR = 'trr';

    /**
     * Chicahuaxtla Triqui
     */
    public const TRS = 'trs';

    /**
     * Tunggare
     */
    public const TRT = 'trt';

    /**
     * Turoyo
     */
    public const TRU = 'tru';

    /**
     * Sediq
     */
    public const TRV = 'trv';

    /**
     * Torwali
     */
    public const TRW = 'trw';

    /**
     * Tringgus-Sembaan Bidayuh
     */
    public const TRX = 'trx';

    /**
     * Turung
     */
    public const TRY = 'try';

    /**
     * Torá
     */
    public const TRZ = 'trz';

    /**
     * Tsaangi
     */
    public const TSA = 'tsa';

    /**
     * Tsamai
     */
    public const TSB = 'tsb';

    /**
     * Tswa
     */
    public const TSC = 'tsc';

    /**
     * Tsakonian
     */
    public const TSD = 'tsd';

    /**
     * Tunisian Sign Language
     */
    public const TSE = 'tse';

    /**
     * Tausug
     */
    public const TSG = 'tsg';

    /**
     * Tsuvan
     */
    public const TSH = 'tsh';

    /**
     * Tsimshian
     */
    public const TSI = 'tsi';

    /**
     * Tshangla
     */
    public const TSJ = 'tsj';

    /**
     * Tseku
     */
    public const TSK = 'tsk';

    /**
     * Ts'ün-Lao
     */
    public const TSL = 'tsl';

    /**
     * Turkish Sign Language
     */
    public const TSM = 'tsm';

    /**
     * Tswana
     */
    public const TSN = 'tsn';

    /**
     * Tsonga
     */
    public const TSO = 'tso';

    /**
     * Northern Toussian
     */
    public const TSP = 'tsp';

    /**
     * Thai Sign Language
     */
    public const TSQ = 'tsq';

    /**
     * Akei
     */
    public const TSR = 'tsr';

    /**
     * Taiwan Sign Language
     */
    public const TSS = 'tss';

    /**
     * Tondi Songway Kiini
     */
    public const TST = 'tst';

    /**
     * Tsou
     */
    public const TSU = 'tsu';

    /**
     * Tsogo
     */
    public const TSV = 'tsv';

    /**
     * Tsishingini
     */
    public const TSW = 'tsw';

    /**
     * Mubami
     */
    public const TSX = 'tsx';

    /**
     * Tebul Sign Language
     */
    public const TSY = 'tsy';

    /**
     * Purepecha
     */
    public const TSZ = 'tsz';

    /**
     * Tutelo
     */
    public const TTA = 'tta';

    /**
     * Gaa
     */
    public const TTB = 'ttb';

    /**
     * Tektiteko
     */
    public const TTC = 'ttc';

    /**
     * Tauade
     */
    public const TTD = 'ttd';

    /**
     * Bwanabwana
     */
    public const TTE = 'tte';

    /**
     * Tuotomb
     */
    public const TTF = 'ttf';

    /**
     * Tutong
     */
    public const TTG = 'ttg';

    /**
     * Upper Ta'oih
     */
    public const TTH = 'tth';

    /**
     * Tobati
     */
    public const TTI = 'tti';

    /**
     * Tooro
     */
    public const TTJ = 'ttj';

    /**
     * Totoro
     */
    public const TTK = 'ttk';

    /**
     * Totela
     */
    public const TTL = 'ttl';

    /**
     * Northern Tutchone
     */
    public const TTM = 'ttm';

    /**
     * Towei
     */
    public const TTN = 'ttn';

    /**
     * Lower Ta'oih
     */
    public const TTO = 'tto';

    /**
     * Tombelala
     */
    public const TTP = 'ttp';

    /**
     * Tawallammat Tamajaq
     */
    public const TTQ = 'ttq';

    /**
     * Tera
     */
    public const TTR = 'ttr';

    /**
     * Northeastern Thai
     */
    public const TTS = 'tts';

    /**
     * Muslim Tat
     */
    public const TTT = 'ttt';

    /**
     * Torau
     */
    public const TTU = 'ttu';

    /**
     * Titan
     */
    public const TTV = 'ttv';

    /**
     * Long Wat
     */
    public const TTW = 'ttw';

    /**
     * Sikaritai
     */
    public const TTY = 'tty';

    /**
     * Tsum
     */
    public const TTZ = 'ttz';

    /**
     * Wiarumus
     */
    public const TUA = 'tua';

    /**
     * Tübatulabal
     */
    public const TUB = 'tub';

    /**
     * Mutu
     */
    public const TUC = 'tuc';

    /**
     * Tuxá
     */
    public const TUD = 'tud';

    /**
     * Tuyuca
     */
    public const TUE = 'tue';

    /**
     * Central Tunebo
     */
    public const TUF = 'tuf';

    /**
     * Tunia
     */
    public const TUG = 'tug';

    /**
     * Taulil
     */
    public const TUH = 'tuh';

    /**
     * Tupuri
     */
    public const TUI = 'tui';

    /**
     * Tugutil
     */
    public const TUJ = 'tuj';

    /**
     * Turkmen
     */
    public const TUK = 'tuk';

    /**
     * Tula
     */
    public const TUL = 'tul';

    /**
     * Tumbuka
     */
    public const TUM = 'tum';

    /**
     * Tunica
     */
    public const TUN = 'tun';

    /**
     * Tucano
     */
    public const TUO = 'tuo';

    /**
     * Tedaga
     */
    public const TUQ = 'tuq';

    /**
     * Turkish
     */
    public const TUR = 'tur';

    /**
     * Tuscarora
     */
    public const TUS = 'tus';

    /**
     * Tututni
     */
    public const TUU = 'tuu';

    /**
     * Turkana
     */
    public const TUV = 'tuv';

    /**
     * Tuxináwa
     */
    public const TUX = 'tux';

    /**
     * Tugen
     */
    public const TUY = 'tuy';

    /**
     * Turka
     */
    public const TUZ = 'tuz';

    /**
     * Vaghua
     */
    public const TVA = 'tva';

    /**
     * Tsuvadi
     */
    public const TVD = 'tvd';

    /**
     * Te'un
     */
    public const TVE = 'tve';

    /**
     * Tulai
     */
    public const TVI = 'tvi';

    /**
     * Southeast Ambrym
     */
    public const TVK = 'tvk';

    /**
     * Tuvalu
     */
    public const TVL = 'tvl';

    /**
     * Tela-Masbuar
     */
    public const TVM = 'tvm';

    /**
     * Tavoyan
     */
    public const TVN = 'tvn';

    /**
     * Tidore
     */
    public const TVO = 'tvo';

    /**
     * Taveta
     */
    public const TVS = 'tvs';

    /**
     * Tutsa Naga
     */
    public const TVT = 'tvt';

    /**
     * Tunen
     */
    public const TVU = 'tvu';

    /**
     * Sedoa
     */
    public const TVW = 'tvw';

    /**
     * Taivoan
     */
    public const TVX = 'tvx';

    /**
     * Timor Pidgin
     */
    public const TVY = 'tvy';

    /**
     * Twana
     */
    public const TWA = 'twa';

    /**
     * Western Tawbuid
     */
    public const TWB = 'twb';

    /**
     * Teshenawa
     */
    public const TWC = 'twc';

    /**
     * Twents
     */
    public const TWD = 'twd';

    /**
     * Tewa (Indonesia)
     */
    public const TWE = 'twe';

    /**
     * Northern Tiwa
     */
    public const TWF = 'twf';

    /**
     * Tereweng
     */
    public const TWG = 'twg';

    /**
     * Tai Dón
     */
    public const TWH = 'twh';

    /**
     * Twi
     */
    public const TWI = 'twi';

    /**
     * Tawara
     */
    public const TWL = 'twl';

    /**
     * Tawang Monpa
     */
    public const TWM = 'twm';

    /**
     * Twendi
     */
    public const TWN = 'twn';

    /**
     * Tswapong
     */
    public const TWO = 'two';

    /**
     * Ere
     */
    public const TWP = 'twp';

    /**
     * Tasawaq
     */
    public const TWQ = 'twq';

    /**
     * Southwestern Tarahumara
     */
    public const TWR = 'twr';

    /**
     * Turiwára
     */
    public const TWT = 'twt';

    /**
     * Termanu
     */
    public const TWU = 'twu';

    /**
     * Tuwari
     */
    public const TWW = 'tww';

    /**
     * Tewe
     */
    public const TWX = 'twx';

    /**
     * Tawoyan
     */
    public const TWY = 'twy';

    /**
     * Tombonuo
     */
    public const TXA = 'txa';

    /**
     * Tokharian B
     */
    public const TXB = 'txb';

    /**
     * Tsetsaut
     */
    public const TXC = 'txc';

    /**
     * Totoli
     */
    public const TXE = 'txe';

    /**
     * Tangut
     */
    public const TXG = 'txg';

    /**
     * Thracian
     */
    public const TXH = 'txh';

    /**
     * Ikpeng
     */
    public const TXI = 'txi';

    /**
     * Tarjumo
     */
    public const TXJ = 'txj';

    /**
     * Tomini
     */
    public const TXM = 'txm';

    /**
     * West Tarangan
     */
    public const TXN = 'txn';

    /**
     * Toto
     */
    public const TXO = 'txo';

    /**
     * Tii
     */
    public const TXQ = 'txq';

    /**
     * Tartessian
     */
    public const TXR = 'txr';

    /**
     * Tonsea
     */
    public const TXS = 'txs';

    /**
     * Citak
     */
    public const TXT = 'txt';

    /**
     * Kayapó
     */
    public const TXU = 'txu';

    /**
     * Tatana
     */
    public const TXX = 'txx';

    /**
     * Tanosy Malagasy
     */
    public const TXY = 'txy';

    /**
     * Tauya
     */
    public const TYA = 'tya';

    /**
     * Kyanga
     */
    public const TYE = 'tye';

    /**
     * O'du
     */
    public const TYH = 'tyh';

    /**
     * Teke-Tsaayi
     */
    public const TYI = 'tyi';

    /**
     * Tai Do
     */
    public const TYJ = 'tyj';

    /**
     * Thu Lao
     */
    public const TYL = 'tyl';

    /**
     * Kombai
     */
    public const TYN = 'tyn';

    /**
     * Thaypan
     */
    public const TYP = 'typ';

    /**
     * Tai Daeng
     */
    public const TYR = 'tyr';

    /**
     * Tày Sa Pa
     */
    public const TYS = 'tys';

    /**
     * Tày Tac
     */
    public const TYT = 'tyt';

    /**
     * Kua
     */
    public const TYU = 'tyu';

    /**
     * Tuvinian
     */
    public const TYV = 'tyv';

    /**
     * Teke-Tyee
     */
    public const TYX = 'tyx';

    /**
     * Tiyaa
     */
    public const TYY = 'tyy';

    /**
     * Tày
     */
    public const TYZ = 'tyz';

    /**
     * Tanzanian Sign Language
     */
    public const TZA = 'tza';

    /**
     * Tzeltal
     */
    public const TZH = 'tzh';

    /**
     * Tz'utujil
     */
    public const TZJ = 'tzj';

    /**
     * Talossan
     */
    public const TZL = 'tzl';

    /**
     * Central Atlas Tamazight
     */
    public const TZM = 'tzm';

    /**
     * Tugun
     */
    public const TZN = 'tzn';

    /**
     * Tzotzil
     */
    public const TZO = 'tzo';

    /**
     * Tabriak
     */
    public const TZX = 'tzx';

    /**
     * Uamué
     */
    public const UAM = 'uam';

    /**
     * Kuan
     */
    public const UAN = 'uan';

    /**
     * Tairuma
     */
    public const UAR = 'uar';

    /**
     * Ubang
     */
    public const UBA = 'uba';

    /**
     * Ubi
     */
    public const UBI = 'ubi';

    /**
     * Buhi'non Bikol
     */
    public const UBL = 'ubl';

    /**
     * Ubir
     */
    public const UBR = 'ubr';

    /**
     * Umbu-Ungu
     */
    public const UBU = 'ubu';

    /**
     * Ubykh
     */
    public const UBY = 'uby';

    /**
     * Uda
     */
    public const UDA = 'uda';

    /**
     * Udihe
     */
    public const UDE = 'ude';

    /**
     * Muduga
     */
    public const UDG = 'udg';

    /**
     * Udi
     */
    public const UDI = 'udi';

    /**
     * Ujir
     */
    public const UDJ = 'udj';

    /**
     * Wuzlam
     */
    public const UDL = 'udl';

    /**
     * Udmurt
     */
    public const UDM = 'udm';

    /**
     * Uduk
     */
    public const UDU = 'udu';

    /**
     * Kioko
     */
    public const UES = 'ues';

    /**
     * Ufim
     */
    public const UFI = 'ufi';

    /**
     * Ugaritic
     */
    public const UGA = 'uga';

    /**
     * Kuku-Ugbanh
     */
    public const UGB = 'ugb';

    /**
     * Ughele
     */
    public const UGE = 'uge';

    /**
     * Kubachi
     */
    public const UGH = 'ugh';

    /**
     * Ugandan Sign Language
     */
    public const UGN = 'ugn';

    /**
     * Ugong
     */
    public const UGO = 'ugo';

    /**
     * Uruguayan Sign Language
     */
    public const UGY = 'ugy';

    /**
     * Uhami
     */
    public const UHA = 'uha';

    /**
     * Damal
     */
    public const UHN = 'uhn';

    /**
     * Uighur
     */
    public const UIG = 'uig';

    /**
     * Uisai
     */
    public const UIS = 'uis';

    /**
     * Iyive
     */
    public const UIV = 'uiv';

    /**
     * Tanjijili
     */
    public const UJI = 'uji';

    /**
     * Kaburi
     */
    public const UKA = 'uka';

    /**
     * Ukuriguma
     */
    public const UKG = 'ukg';

    /**
     * Ukhwejo
     */
    public const UKH = 'ukh';

    /**
     * Kui (India)
     */
    public const UKI = 'uki';

    /**
     * Muak Sa-aak
     */
    public const UKK = 'ukk';

    /**
     * Ukrainian Sign Language
     */
    public const UKL = 'ukl';

    /**
     * Ukpe-Bayobiri
     */
    public const UKP = 'ukp';

    /**
     * Ukwa
     */
    public const UKQ = 'ukq';

    /**
     * Ukrainian
     */
    public const UKR = 'ukr';

    /**
     * Urubú-Kaapor Sign Language
     */
    public const UKS = 'uks';

    /**
     * Ukue
     */
    public const UKU = 'uku';

    /**
     * Kuku
     */
    public const UKV = 'ukv';

    /**
     * Ukwuani-Aboh-Ndoni
     */
    public const UKW = 'ukw';

    /**
     * Kuuk-Yak
     */
    public const UKY = 'uky';

    /**
     * Fungwa
     */
    public const ULA = 'ula';

    /**
     * Ulukwumi
     */
    public const ULB = 'ulb';

    /**
     * Ulch
     */
    public const ULC = 'ulc';

    /**
     * Lule
     */
    public const ULE = 'ule';

    /**
     * Usku
     */
    public const ULF = 'ulf';

    /**
     * Ulithian
     */
    public const ULI = 'uli';

    /**
     * Meriam Mir
     */
    public const ULK = 'ulk';

    /**
     * Ullatan
     */
    public const ULL = 'ull';

    /**
     * Ulumanda'
     */
    public const ULM = 'ulm';

    /**
     * Unserdeutsch
     */
    public const ULN = 'uln';

    /**
     * Uma' Lung
     */
    public const ULU = 'ulu';

    /**
     * Ulwa
     */
    public const ULW = 'ulw';

    /**
     * Buli
     */
    public const ULY = 'uly';

    /**
     * Umatilla
     */
    public const UMA = 'uma';

    /**
     * Umbundu
     */
    public const UMB = 'umb';

    /**
     * Marrucinian
     */
    public const UMC = 'umc';

    /**
     * Umbindhamu
     */
    public const UMD = 'umd';

    /**
     * Morrobalama
     */
    public const UMG = 'umg';

    /**
     * Ukit
     */
    public const UMI = 'umi';

    /**
     * Umon
     */
    public const UMM = 'umm';

    /**
     * Makyan Naga
     */
    public const UMN = 'umn';

    /**
     * Umotína
     */
    public const UMO = 'umo';

    /**
     * Umpila
     */
    public const UMP = 'ump';

    /**
     * Umbugarla
     */
    public const UMR = 'umr';

    /**
     * Pendau
     */
    public const UMS = 'ums';

    /**
     * Munsee
     */
    public const UMU = 'umu';

    /**
     * North Watut
     */
    public const UNA = 'una';

    /**
     * Undetermined
     */
    public const UND = 'und';

    /**
     * Uneme
     */
    public const UNE = 'une';

    /**
     * Ngarinyin
     */
    public const UNG = 'ung';

    /**
     * Uni
     */
    public const UNI = 'uni';

    /**
     * Enawené-Nawé
     */
    public const UNK = 'unk';

    /**
     * Unami
     */
    public const UNM = 'unm';

    /**
     * Kurnai
     */
    public const UNN = 'unn';

    /**
     * Mundari
     */
    public const UNR = 'unr';

    /**
     * Unubahe
     */
    public const UNU = 'unu';

    /**
     * Munda
     */
    public const UNX = 'unx';

    /**
     * Unde Kaili
     */
    public const UNZ = 'unz';

    /**
     * Kulon
     */
    public const UON = 'uon';

    /**
     * Umeda
     */
    public const UPI = 'upi';

    /**
     * Uripiv-Wala-Rano-Atchin
     */
    public const UPV = 'upv';

    /**
     * Urarina
     */
    public const URA = 'ura';

    /**
     * Urubú-Kaapor
     */
    public const URB = 'urb';

    /**
     * Urningangg
     */
    public const URC = 'urc';

    /**
     * Urdu
     */
    public const URD = 'urd';

    /**
     * Uru
     */
    public const URE = 'ure';

    /**
     * Uradhi
     */
    public const URF = 'urf';

    /**
     * Urigina
     */
    public const URG = 'urg';

    /**
     * Urhobo
     */
    public const URH = 'urh';

    /**
     * Urim
     */
    public const URI = 'uri';

    /**
     * Urak Lawoi'
     */
    public const URK = 'urk';

    /**
     * Urali
     */
    public const URL = 'url';

    /**
     * Urapmin
     */
    public const URM = 'urm';

    /**
     * Uruangnirin
     */
    public const URN = 'urn';

    /**
     * Ura (Papua New Guinea)
     */
    public const URO = 'uro';

    /**
     * Uru-Pa-In
     */
    public const URP = 'urp';

    /**
     * Lehalurup
     */
    public const URR = 'urr';

    /**
     * Urat
     */
    public const URT = 'urt';

    /**
     * Urumi
     */
    public const URU = 'uru';

    /**
     * Uruava
     */
    public const URV = 'urv';

    /**
     * Sop
     */
    public const URW = 'urw';

    /**
     * Urimo
     */
    public const URX = 'urx';

    /**
     * Orya
     */
    public const URY = 'ury';

    /**
     * Uru-Eu-Wau-Wau
     */
    public const URZ = 'urz';

    /**
     * Usarufa
     */
    public const USA = 'usa';

    /**
     * Ushojo
     */
    public const USH = 'ush';

    /**
     * Usui
     */
    public const USI = 'usi';

    /**
     * Usaghade
     */
    public const USK = 'usk';

    /**
     * Uspanteco
     */
    public const USP = 'usp';

    /**
     * us-Saare
     */
    public const USS = 'uss';

    /**
     * Uya
     */
    public const USU = 'usu';

    /**
     * Otank
     */
    public const UTA = 'uta';

    /**
     * Ute-Southern Paiute
     */
    public const UTE = 'ute';

    /**
     * ut-Hun
     */
    public const UTH = 'uth';

    /**
     * Amba (Solomon Islands)
     */
    public const UTP = 'utp';

    /**
     * Etulo
     */
    public const UTR = 'utr';

    /**
     * Utu
     */
    public const UTU = 'utu';

    /**
     * Urum
     */
    public const UUM = 'uum';

    /**
     * Ura (Vanuatu)
     */
    public const UUR = 'uur';

    /**
     * U
     */
    public const UUU = 'uuu';

    /**
     * West Uvean
     */
    public const UVE = 'uve';

    /**
     * Uri
     */
    public const UVH = 'uvh';

    /**
     * Lote
     */
    public const UVL = 'uvl';

    /**
     * Kuku-Uwanh
     */
    public const UWA = 'uwa';

    /**
     * Doko-Uyanga
     */
    public const UYA = 'uya';

    /**
     * Uzbek
     */
    public const UZB = 'uzb';

    /**
     * Northern Uzbek
     */
    public const UZN = 'uzn';

    /**
     * Southern Uzbek
     */
    public const UZS = 'uzs';

    /**
     * Vaagri Booli
     */
    public const VAA = 'vaa';

    /**
     * Vale
     */
    public const VAE = 'vae';

    /**
     * Vafsi
     */
    public const VAF = 'vaf';

    /**
     * Vagla
     */
    public const VAG = 'vag';

    /**
     * Varhadi-Nagpuri
     */
    public const VAH = 'vah';

    /**
     * Vai
     */
    public const VAI = 'vai';

    /**
     * Sekele
     */
    public const VAJ = 'vaj';

    /**
     * Vehes
     */
    public const VAL = 'val';

    /**
     * Vanimo
     */
    public const VAM = 'vam';

    /**
     * Valman
     */
    public const VAN = 'van';

    /**
     * Vao
     */
    public const VAO = 'vao';

    /**
     * Vaiphei
     */
    public const VAP = 'vap';

    /**
     * Huarijio
     */
    public const VAR = 'var';

    /**
     * Vasavi
     */
    public const VAS = 'vas';

    /**
     * Vanuma
     */
    public const VAU = 'vau';

    /**
     * Varli
     */
    public const VAV = 'vav';

    /**
     * Wayu
     */
    public const VAY = 'vay';

    /**
     * Southeast Babar
     */
    public const VBB = 'vbb';

    /**
     * Southwestern Bontok
     */
    public const VBK = 'vbk';

    /**
     * Venetian
     */
    public const VEC = 'vec';

    /**
     * Veddah
     */
    public const VED = 'ved';

    /**
     * Veluws
     */
    public const VEL = 'vel';

    /**
     * Vemgo-Mabas
     */
    public const VEM = 'vem';

    /**
     * Venda
     */
    public const VEN = 'ven';

    /**
     * Ventureño
     */
    public const VEO = 'veo';

    /**
     * Veps
     */
    public const VEP = 'vep';

    /**
     * Mom Jango
     */
    public const VER = 'ver';

    /**
     * Vaghri
     */
    public const VGR = 'vgr';

    /**
     * Vlaamse Gebarentaal
     */
    public const VGT = 'vgt';

    /**
     * Virgin Islands Creole English
     */
    public const VIC = 'vic';

    /**
     * Vidunda
     */
    public const VID = 'vid';

    /**
     * Vietnamese
     */
    public const VIE = 'vie';

    /**
     * Vili
     */
    public const VIF = 'vif';

    /**
     * Viemo
     */
    public const VIG = 'vig';

    /**
     * Vilela
     */
    public const VIL = 'vil';

    /**
     * Vinza
     */
    public const VIN = 'vin';

    /**
     * Vishavan
     */
    public const VIS = 'vis';

    /**
     * Viti
     */
    public const VIT = 'vit';

    /**
     * Iduna
     */
    public const VIV = 'viv';

    /**
     * Bajjika
     */
    public const VJK = 'vjk';

    /**
     * Kariyarra
     */
    public const VKA = 'vka';

    /**
     * Kujarge
     */
    public const VKJ = 'vkj';

    /**
     * Kaur
     */
    public const VKK = 'vkk';

    /**
     * Kulisusu
     */
    public const VKL = 'vkl';

    /**
     * Kamakan
     */
    public const VKM = 'vkm';

    /**
     * Koro Nulu
     */
    public const VKN = 'vkn';

    /**
     * Kodeoha
     */
    public const VKO = 'vko';

    /**
     * Korlai Creole Portuguese
     */
    public const VKP = 'vkp';

    /**
     * Tenggarong Kutai Malay
     */
    public const VKT = 'vkt';

    /**
     * Kurrama
     */
    public const VKU = 'vku';

    /**
     * Koro Zuba
     */
    public const VKZ = 'vkz';

    /**
     * Valpei
     */
    public const VLP = 'vlp';

    /**
     * Vlaams
     */
    public const VLS = 'vls';

    /**
     * Martuyhunira
     */
    public const VMA = 'vma';

    /**
     * Barbaram
     */
    public const VMB = 'vmb';

    /**
     * Juxtlahuaca Mixtec
     */
    public const VMC = 'vmc';

    /**
     * Mudu Koraga
     */
    public const VMD = 'vmd';

    /**
     * East Masela
     */
    public const VME = 'vme';

    /**
     * Mainfränkisch
     */
    public const VMF = 'vmf';

    /**
     * Lungalunga
     */
    public const VMG = 'vmg';

    /**
     * Maraghei
     */
    public const VMH = 'vmh';

    /**
     * Miwa
     */
    public const VMI = 'vmi';

    /**
     * Ixtayutla Mixtec
     */
    public const VMJ = 'vmj';

    /**
     * Makhuwa-Shirima
     */
    public const VMK = 'vmk';

    /**
     * Malgana
     */
    public const VML = 'vml';

    /**
     * Mitlatongo Mixtec
     */
    public const VMM = 'vmm';

    /**
     * Soyaltepec Mazatec
     */
    public const VMP = 'vmp';

    /**
     * Soyaltepec Mixtec
     */
    public const VMQ = 'vmq';

    /**
     * Marenje
     */
    public const VMR = 'vmr';

    /**
     * Moksela
     */
    public const VMS = 'vms';

    /**
     * Muluridyi
     */
    public const VMU = 'vmu';

    /**
     * Valley Maidu
     */
    public const VMV = 'vmv';

    /**
     * Makhuwa
     */
    public const VMW = 'vmw';

    /**
     * Tamazola Mixtec
     */
    public const VMX = 'vmx';

    /**
     * Ayautla Mazatec
     */
    public const VMY = 'vmy';

    /**
     * Mazatlán Mazatec
     */
    public const VMZ = 'vmz';

    /**
     * Vano
     */
    public const VNK = 'vnk';

    /**
     * Vinmavis
     */
    public const VNM = 'vnm';

    /**
     * Vunapu
     */
    public const VNP = 'vnp';

    /**
     * Volapük
     */
    public const VOL = 'vol';

    /**
     * Voro
     */
    public const VOR = 'vor';

    /**
     * Votic
     */
    public const VOT = 'vot';

    /**
     * Vera'a
     */
    public const VRA = 'vra';

    /**
     * Võro
     */
    public const VRO = 'vro';

    /**
     * Varisi
     */
    public const VRS = 'vrs';

    /**
     * Burmbar
     */
    public const VRT = 'vrt';

    /**
     * Moldova Sign Language
     */
    public const VSI = 'vsi';

    /**
     * Venezuelan Sign Language
     */
    public const VSL = 'vsl';

    /**
     * Vedic Sanskrit
     */
    public const VSN = 'vsn';

    /**
     * Valencian Sign Language
     */
    public const VSV = 'vsv';

    /**
     * Vitou
     */
    public const VTO = 'vto';

    /**
     * Vumbu
     */
    public const VUM = 'vum';

    /**
     * Vunjo
     */
    public const VUN = 'vun';

    /**
     * Vute
     */
    public const VUT = 'vut';

    /**
     * Awa (China)
     */
    public const VWA = 'vwa';

    /**
     * Walla Walla
     */
    public const WAA = 'waa';

    /**
     * Wab
     */
    public const WAB = 'wab';

    /**
     * Wasco-Wishram
     */
    public const WAC = 'wac';

    /**
     * Wamesa
     */
    public const WAD = 'wad';

    /**
     * Walser
     */
    public const WAE = 'wae';

    /**
     * Wakoná
     */
    public const WAF = 'waf';

    /**
     * Wa'ema
     */
    public const WAG = 'wag';

    /**
     * Watubela
     */
    public const WAH = 'wah';

    /**
     * Wares
     */
    public const WAI = 'wai';

    /**
     * Waffa
     */
    public const WAJ = 'waj';

    /**
     * Wolaytta
     */
    public const WAL = 'wal';

    /**
     * Wampanoag
     */
    public const WAM = 'wam';

    /**
     * Wan
     */
    public const WAN = 'wan';

    /**
     * Wappo
     */
    public const WAO = 'wao';

    /**
     * Wapishana
     */
    public const WAP = 'wap';

    /**
     * Wagiman
     */
    public const WAQ = 'waq';

    /**
     * Waray (Philippines)
     */
    public const WAR = 'war';

    /**
     * Washo
     */
    public const WAS = 'was';

    /**
     * Kaninuwa
     */
    public const WAT = 'wat';

    /**
     * Waurá
     */
    public const WAU = 'wau';

    /**
     * Waka
     */
    public const WAV = 'wav';

    /**
     * Waiwai
     */
    public const WAW = 'waw';

    /**
     * Watam
     */
    public const WAX = 'wax';

    /**
     * Wayana
     */
    public const WAY = 'way';

    /**
     * Wampur
     */
    public const WAZ = 'waz';

    /**
     * Warao
     */
    public const WBA = 'wba';

    /**
     * Wabo
     */
    public const WBB = 'wbb';

    /**
     * Waritai
     */
    public const WBE = 'wbe';

    /**
     * Wara
     */
    public const WBF = 'wbf';

    /**
     * Wanda
     */
    public const WBH = 'wbh';

    /**
     * Vwanji
     */
    public const WBI = 'wbi';

    /**
     * Alagwa
     */
    public const WBJ = 'wbj';

    /**
     * Waigali
     */
    public const WBK = 'wbk';

    /**
     * Wakhi
     */
    public const WBL = 'wbl';

    /**
     * Wa
     */
    public const WBM = 'wbm';

    /**
     * Warlpiri
     */
    public const WBP = 'wbp';

    /**
     * Waddar
     */
    public const WBQ = 'wbq';

    /**
     * Wagdi
     */
    public const WBR = 'wbr';

    /**
     * West Bengal Sign Language
     */
    public const WBS = 'wbs';

    /**
     * Warnman
     */
    public const WBT = 'wbt';

    /**
     * Wajarri
     */
    public const WBV = 'wbv';

    /**
     * Woi
     */
    public const WBW = 'wbw';

    /**
     * Yanomámi
     */
    public const WCA = 'wca';

    /**
     * Waci Gbe
     */
    public const WCI = 'wci';

    /**
     * Wandji
     */
    public const WDD = 'wdd';

    /**
     * Wadaginam
     */
    public const WDG = 'wdg';

    /**
     * Wadjiginy
     */
    public const WDJ = 'wdj';

    /**
     * Wadikali
     */
    public const WDK = 'wdk';

    /**
     * Wendat
     */
    public const WDT = 'wdt';

    /**
     * Wadjigu
     */
    public const WDU = 'wdu';

    /**
     * Wadjabangayi
     */
    public const WDY = 'wdy';

    /**
     * Wewaw
     */
    public const WEA = 'wea';

    /**
     * Wè Western
     */
    public const WEC = 'wec';

    /**
     * Wedau
     */
    public const WED = 'wed';

    /**
     * Wergaia
     */
    public const WEG = 'weg';

    /**
     * Weh
     */
    public const WEH = 'weh';

    /**
     * Kiunum
     */
    public const WEI = 'wei';

    /**
     * Weme Gbe
     */
    public const WEM = 'wem';

    /**
     * Wemale
     */
    public const WEO = 'weo';

    /**
     * Westphalien
     */
    public const WEP = 'wep';

    /**
     * Weri
     */
    public const WER = 'wer';

    /**
     * Cameroon Pidgin
     */
    public const WES = 'wes';

    /**
     * Perai
     */
    public const WET = 'wet';

    /**
     * Rawngtu Chin
     */
    public const WEU = 'weu';

    /**
     * Wejewa
     */
    public const WEW = 'wew';

    /**
     * Yafi
     */
    public const WFG = 'wfg';

    /**
     * Wagaya
     */
    public const WGA = 'wga';

    /**
     * Wagawaga
     */
    public const WGB = 'wgb';

    /**
     * Wangkangurru
     */
    public const WGG = 'wgg';

    /**
     * Wahgi
     */
    public const WGI = 'wgi';

    /**
     * Waigeo
     */
    public const WGO = 'wgo';

    /**
     * Wirangu
     */
    public const WGU = 'wgu';

    /**
     * Warrgamay
     */
    public const WGY = 'wgy';

    /**
     * Sou Upaa
     */
    public const WHA = 'wha';

    /**
     * North Wahgi
     */
    public const WHG = 'whg';

    /**
     * Wahau Kenyah
     */
    public const WHK = 'whk';

    /**
     * Wahau Kayan
     */
    public const WHU = 'whu';

    /**
     * Southern Toussian
     */
    public const WIB = 'wib';

    /**
     * Wichita
     */
    public const WIC = 'wic';

    /**
     * Wik-Epa
     */
    public const WIE = 'wie';

    /**
     * Wik-Keyangan
     */
    public const WIF = 'wif';

    /**
     * Wik Ngathan
     */
    public const WIG = 'wig';

    /**
     * Wik-Me'anha
     */
    public const WIH = 'wih';

    /**
     * Minidien
     */
    public const WII = 'wii';

    /**
     * Wik-Iiyanh
     */
    public const WIJ = 'wij';

    /**
     * Wikalkan
     */
    public const WIK = 'wik';

    /**
     * Wilawila
     */
    public const WIL = 'wil';

    /**
     * Wik-Mungkan
     */
    public const WIM = 'wim';

    /**
     * Ho-Chunk
     */
    public const WIN = 'win';

    /**
     * Wiraféd
     */
    public const WIR = 'wir';

    /**
     * Wiru
     */
    public const WIU = 'wiu';

    /**
     * Vitu
     */
    public const WIV = 'wiv';

    /**
     * Wiyot
     */
    public const WIY = 'wiy';

    /**
     * Waja
     */
    public const WJA = 'wja';

    /**
     * Warji
     */
    public const WJI = 'wji';

    /**
     * Kw'adza
     */
    public const WKA = 'wka';

    /**
     * Kumbaran
     */
    public const WKB = 'wkb';

    /**
     * Wakde
     */
    public const WKD = 'wkd';

    /**
     * Kalanadi
     */
    public const WKL = 'wkl';

    /**
     * Keerray-Woorroong
     */
    public const WKR = 'wkr';

    /**
     * Kunduvadi
     */
    public const WKU = 'wku';

    /**
     * Wakawaka
     */
    public const WKW = 'wkw';

    /**
     * Wangkayutyuru
     */
    public const WKY = 'wky';

    /**
     * Walio
     */
    public const WLA = 'wla';

    /**
     * Mwali Comorian
     */
    public const WLC = 'wlc';

    /**
     * Wolane
     */
    public const WLE = 'wle';

    /**
     * Kunbarlang
     */
    public const WLG = 'wlg';

    /**
     * Welaun
     */
    public const WLH = 'wlh';

    /**
     * Waioli
     */
    public const WLI = 'wli';

    /**
     * Wailaki
     */
    public const WLK = 'wlk';

    /**
     * Wali (Sudan)
     */
    public const WLL = 'wll';

    /**
     * Middle Welsh
     */
    public const WLM = 'wlm';

    /**
     * Walloon
     */
    public const WLN = 'wln';

    /**
     * Wolio
     */
    public const WLO = 'wlo';

    /**
     * Wailapa
     */
    public const WLR = 'wlr';

    /**
     * Wallisian
     */
    public const WLS = 'wls';

    /**
     * Wuliwuli
     */
    public const WLU = 'wlu';

    /**
     * Wichí Lhamtés Vejoz
     */
    public const WLV = 'wlv';

    /**
     * Walak
     */
    public const WLW = 'wlw';

    /**
     * Wali (Ghana)
     */
    public const WLX = 'wlx';

    /**
     * Waling
     */
    public const WLY = 'wly';

    /**
     * Mawa (Nigeria)
     */
    public const WMA = 'wma';

    /**
     * Wambaya
     */
    public const WMB = 'wmb';

    /**
     * Wamas
     */
    public const WMC = 'wmc';

    /**
     * Mamaindé
     */
    public const WMD = 'wmd';

    /**
     * Wambule
     */
    public const WME = 'wme';

    /**
     * Western Minyag
     */
    public const WMG = 'wmg';

    /**
     * Waima'a
     */
    public const WMH = 'wmh';

    /**
     * Wamin
     */
    public const WMI = 'wmi';

    /**
     * Maiwa (Indonesia)
     */
    public const WMM = 'wmm';

    /**
     * Waamwang
     */
    public const WMN = 'wmn';

    /**
     * Wom (Papua New Guinea)
     */
    public const WMO = 'wmo';

    /**
     * Wambon
     */
    public const WMS = 'wms';

    /**
     * Walmajarri
     */
    public const WMT = 'wmt';

    /**
     * Mwani
     */
    public const WMW = 'wmw';

    /**
     * Womo
     */
    public const WMX = 'wmx';

    /**
     * Mokati
     */
    public const WNB = 'wnb';

    /**
     * Wantoat
     */
    public const WNC = 'wnc';

    /**
     * Wandarang
     */
    public const WND = 'wnd';

    /**
     * Waneci
     */
    public const WNE = 'wne';

    /**
     * Wanggom
     */
    public const WNG = 'wng';

    /**
     * Ndzwani Comorian
     */
    public const WNI = 'wni';

    /**
     * Wanukaka
     */
    public const WNK = 'wnk';

    /**
     * Wanggamala
     */
    public const WNM = 'wnm';

    /**
     * Wunumara
     */
    public const WNN = 'wnn';

    /**
     * Wano
     */
    public const WNO = 'wno';

    /**
     * Wanap
     */
    public const WNP = 'wnp';

    /**
     * Usan
     */
    public const WNU = 'wnu';

    /**
     * Wintu
     */
    public const WNW = 'wnw';

    /**
     * Wanyi
     */
    public const WNY = 'wny';

    /**
     * Kuwema
     */
    public const WOA = 'woa';

    /**
     * Wè Northern
     */
    public const WOB = 'wob';

    /**
     * Wogeo
     */
    public const WOC = 'woc';

    /**
     * Wolani
     */
    public const WOD = 'wod';

    /**
     * Woleaian
     */
    public const WOE = 'woe';

    /**
     * Gambian Wolof
     */
    public const WOF = 'wof';

    /**
     * Wogamusin
     */
    public const WOG = 'wog';

    /**
     * Kamang
     */
    public const WOI = 'woi';

    /**
     * Longto
     */
    public const WOK = 'wok';

    /**
     * Wolof
     */
    public const WOL = 'wol';

    /**
     * Wom (Nigeria)
     */
    public const WOM = 'wom';

    /**
     * Wongo
     */
    public const WON = 'won';

    /**
     * Manombai
     */
    public const WOO = 'woo';

    /**
     * Woria
     */
    public const WOR = 'wor';

    /**
     * Hanga Hundi
     */
    public const WOS = 'wos';

    /**
     * Wawonii
     */
    public const WOW = 'wow';

    /**
     * Weyto
     */
    public const WOY = 'woy';

    /**
     * Maco
     */
    public const WPC = 'wpc';

    /**
     * Waluwarra
     */
    public const WRB = 'wrb';

    /**
     * Warungu
     */
    public const WRG = 'wrg';

    /**
     * Wiradjuri
     */
    public const WRH = 'wrh';

    /**
     * Wariyangga
     */
    public const WRI = 'wri';

    /**
     * Garrwa
     */
    public const WRK = 'wrk';

    /**
     * Warlmanpa
     */
    public const WRL = 'wrl';

    /**
     * Warumungu
     */
    public const WRM = 'wrm';

    /**
     * Warnang
     */
    public const WRN = 'wrn';

    /**
     * Worrorra
     */
    public const WRO = 'wro';

    /**
     * Waropen
     */
    public const WRP = 'wrp';

    /**
     * Wardaman
     */
    public const WRR = 'wrr';

    /**
     * Waris
     */
    public const WRS = 'wrs';

    /**
     * Waru
     */
    public const WRU = 'wru';

    /**
     * Waruna
     */
    public const WRV = 'wrv';

    /**
     * Gugu Warra
     */
    public const WRW = 'wrw';

    /**
     * Wae Rana
     */
    public const WRX = 'wrx';

    /**
     * Merwari
     */
    public const WRY = 'wry';

    /**
     * Waray (Australia)
     */
    public const WRZ = 'wrz';

    /**
     * Warembori
     */
    public const WSA = 'wsa';

    /**
     * Adilabad Gondi
     */
    public const WSG = 'wsg';

    /**
     * Wusi
     */
    public const WSI = 'wsi';

    /**
     * Waskia
     */
    public const WSK = 'wsk';

    /**
     * Owenia
     */
    public const WSR = 'wsr';

    /**
     * Wasa
     */
    public const WSS = 'wss';

    /**
     * Wasu
     */
    public const WSU = 'wsu';

    /**
     * Wotapuri-Katarqalai
     */
    public const WSV = 'wsv';

    /**
     * Matambwe
     */
    public const WTB = 'wtb';

    /**
     * Watiwa
     */
    public const WTF = 'wtf';

    /**
     * Wathawurrung
     */
    public const WTH = 'wth';

    /**
     * Berta
     */
    public const WTI = 'wti';

    /**
     * Watakataui
     */
    public const WTK = 'wtk';

    /**
     * Mewati
     */
    public const WTM = 'wtm';

    /**
     * Wotu
     */
    public const WTW = 'wtw';

    /**
     * Wikngenchera
     */
    public const WUA = 'wua';

    /**
     * Wunambal
     */
    public const WUB = 'wub';

    /**
     * Wudu
     */
    public const WUD = 'wud';

    /**
     * Wutunhua
     */
    public const WUH = 'wuh';

    /**
     * Silimo
     */
    public const WUL = 'wul';

    /**
     * Wumbvu
     */
    public const WUM = 'wum';

    /**
     * Bungu
     */
    public const WUN = 'wun';

    /**
     * Wurrugu
     */
    public const WUR = 'wur';

    /**
     * Wutung
     */
    public const WUT = 'wut';

    /**
     * Wu Chinese
     */
    public const WUU = 'wuu';

    /**
     * Wuvulu-Aua
     */
    public const WUV = 'wuv';

    /**
     * Wulna
     */
    public const WUX = 'wux';

    /**
     * Wauyai
     */
    public const WUY = 'wuy';

    /**
     * Waama
     */
    public const WWA = 'wwa';

    /**
     * Wakabunga
     */
    public const WWB = 'wwb';

    /**
     * Wetamut
     */
    public const WWO = 'wwo';

    /**
     * Warrwa
     */
    public const WWR = 'wwr';

    /**
     * Wawa
     */
    public const WWW = 'www';

    /**
     * Waxianghua
     */
    public const WXA = 'wxa';

    /**
     * Wardandi
     */
    public const WXW = 'wxw';

    /**
     * Wangaaybuwan-Ngiyambaa
     */
    public const WYB = 'wyb';

    /**
     * Woiwurrung
     */
    public const WYI = 'wyi';

    /**
     * Wymysorys
     */
    public const WYM = 'wym';

    /**
     * Wyandot
     */
    public const WYN = 'wyn';

    /**
     * Wayoró
     */
    public const WYR = 'wyr';

    /**
     * Western Fijian
     */
    public const WYY = 'wyy';

    /**
     * Andalusian Arabic
     */
    public const XAA = 'xaa';

    /**
     * Sambe
     */
    public const XAB = 'xab';

    /**
     * Kachari
     */
    public const XAC = 'xac';

    /**
     * Adai
     */
    public const XAD = 'xad';

    /**
     * Aequian
     */
    public const XAE = 'xae';

    /**
     * Aghwan
     */
    public const XAG = 'xag';

    /**
     * Kaimbé
     */
    public const XAI = 'xai';

    /**
     * Ararandewára
     */
    public const XAJ = 'xaj';

    /**
     * Máku
     */
    public const XAK = 'xak';

    /**
     * Kalmyk
     */
    public const XAL = 'xal';

    /**
     * ǀXam
     */
    public const XAM = 'xam';

    /**
     * Xamtanga
     */
    public const XAN = 'xan';

    /**
     * Khao
     */
    public const XAO = 'xao';

    /**
     * Apalachee
     */
    public const XAP = 'xap';

    /**
     * Aquitanian
     */
    public const XAQ = 'xaq';

    /**
     * Karami
     */
    public const XAR = 'xar';

    /**
     * Kamas
     */
    public const XAS = 'xas';

    /**
     * Katawixi
     */
    public const XAT = 'xat';

    /**
     * Kauwera
     */
    public const XAU = 'xau';

    /**
     * Xavánte
     */
    public const XAV = 'xav';

    /**
     * Kawaiisu
     */
    public const XAW = 'xaw';

    /**
     * Kayan Mahakam
     */
    public const XAY = 'xay';

    /**
     * Lower Burdekin
     */
    public const XBB = 'xbb';

    /**
     * Bactrian
     */
    public const XBC = 'xbc';

    /**
     * Bindal
     */
    public const XBD = 'xbd';

    /**
     * Bigambal
     */
    public const XBE = 'xbe';

    /**
     * Bunganditj
     */
    public const XBG = 'xbg';

    /**
     * Kombio
     */
    public const XBI = 'xbi';

    /**
     * Birrpayi
     */
    public const XBJ = 'xbj';

    /**
     * Middle Breton
     */
    public const XBM = 'xbm';

    /**
     * Kenaboi
     */
    public const XBN = 'xbn';

    /**
     * Bolgarian
     */
    public const XBO = 'xbo';

    /**
     * Bibbulman
     */
    public const XBP = 'xbp';

    /**
     * Kambera
     */
    public const XBR = 'xbr';

    /**
     * Kambiwá
     */
    public const XBW = 'xbw';

    /**
     * Batjala
     */
    public const XBY = 'xby';

    /**
     * Cumbric
     */
    public const XCB = 'xcb';

    /**
     * Camunic
     */
    public const XCC = 'xcc';

    /**
     * Celtiberian
     */
    public const XCE = 'xce';

    /**
     * Cisalpine Gaulish
     */
    public const XCG = 'xcg';

    /**
     * Chemakum
     */
    public const XCH = 'xch';

    /**
     * Classical Armenian
     */
    public const XCL = 'xcl';

    /**
     * Comecrudo
     */
    public const XCM = 'xcm';

    /**
     * Cotoname
     */
    public const XCN = 'xcn';

    /**
     * Chorasmian
     */
    public const XCO = 'xco';

    /**
     * Carian
     */
    public const XCR = 'xcr';

    /**
     * Classical Tibetan
     */
    public const XCT = 'xct';

    /**
     * Curonian
     */
    public const XCU = 'xcu';

    /**
     * Chuvantsy
     */
    public const XCV = 'xcv';

    /**
     * Coahuilteco
     */
    public const XCW = 'xcw';

    /**
     * Cayuse
     */
    public const XCY = 'xcy';

    /**
     * Darkinyung
     */
    public const XDA = 'xda';

    /**
     * Dacian
     */
    public const XDC = 'xdc';

    /**
     * Dharuk
     */
    public const XDK = 'xdk';

    /**
     * Edomite
     */
    public const XDM = 'xdm';

    /**
     * Kwandu
     */
    public const XDO = 'xdo';

    /**
     * Kaitag
     */
    public const XDQ = 'xdq';

    /**
     * Malayic Dayak
     */
    public const XDY = 'xdy';

    /**
     * Eblan
     */
    public const XEB = 'xeb';

    /**
     * Hdi
     */
    public const XED = 'xed';

    /**
     * ǁXegwi
     */
    public const XEG = 'xeg';

    /**
     * Kelo
     */
    public const XEL = 'xel';

    /**
     * Kembayan
     */
    public const XEM = 'xem';

    /**
     * Epi-Olmec
     */
    public const XEP = 'xep';

    /**
     * Xerénte
     */
    public const XER = 'xer';

    /**
     * Kesawai
     */
    public const XES = 'xes';

    /**
     * Xetá
     */
    public const XET = 'xet';

    /**
     * Keoru-Ahia
     */
    public const XEU = 'xeu';

    /**
     * Faliscan
     */
    public const XFA = 'xfa';

    /**
     * Galatian
     */
    public const XGA = 'xga';

    /**
     * Gbin
     */
    public const XGB = 'xgb';

    /**
     * Gudang
     */
    public const XGD = 'xgd';

    /**
     * Gabrielino-Fernandeño
     */
    public const XGF = 'xgf';

    /**
     * Goreng
     */
    public const XGG = 'xgg';

    /**
     * Garingbal
     */
    public const XGI = 'xgi';

    /**
     * Galindan
     */
    public const XGL = 'xgl';

    /**
     * Dharumbal
     */
    public const XGM = 'xgm';

    /**
     * Garza
     */
    public const XGR = 'xgr';

    /**
     * Unggumi
     */
    public const XGU = 'xgu';

    /**
     * Guwa
     */
    public const XGW = 'xgw';

    /**
     * Harami
     */
    public const XHA = 'xha';

    /**
     * Hunnic
     */
    public const XHC = 'xhc';

    /**
     * Hadrami
     */
    public const XHD = 'xhd';

    /**
     * Khetrani
     */
    public const XHE = 'xhe';

    /**
     * Middle Khmer (1400 to 1850 CE)
     */
    public const XHM = 'xhm';

    /**
     * Xhosa
     */
    public const XHO = 'xho';

    /**
     * Hernican
     */
    public const XHR = 'xhr';

    /**
     * Hattic
     */
    public const XHT = 'xht';

    /**
     * Hurrian
     */
    public const XHU = 'xhu';

    /**
     * Khua
     */
    public const XHV = 'xhv';

    /**
     * Iberian
     */
    public const XIB = 'xib';

    /**
     * Xiri
     */
    public const XII = 'xii';

    /**
     * Illyrian
     */
    public const XIL = 'xil';

    /**
     * Xinca
     */
    public const XIN = 'xin';

    /**
     * Xiriâna
     */
    public const XIR = 'xir';

    /**
     * Kisan
     */
    public const XIS = 'xis';

    /**
     * Indus Valley Language
     */
    public const XIV = 'xiv';

    /**
     * Xipaya
     */
    public const XIY = 'xiy';

    /**
     * Minjungbal
     */
    public const XJB = 'xjb';

    /**
     * Jaitmatang
     */
    public const XJT = 'xjt';

    /**
     * Kalkoti
     */
    public const XKA = 'xka';

    /**
     * Northern Nago
     */
    public const XKB = 'xkb';

    /**
     * Kho'ini
     */
    public const XKC = 'xkc';

    /**
     * Mendalam Kayan
     */
    public const XKD = 'xkd';

    /**
     * Kereho
     */
    public const XKE = 'xke';

    /**
     * Khengkha
     */
    public const XKF = 'xkf';

    /**
     * Kagoro
     */
    public const XKG = 'xkg';

    /**
     * Kenyan Sign Language
     */
    public const XKI = 'xki';

    /**
     * Kajali
     */
    public const XKJ = 'xkj';

    /**
     * Kachok
     */
    public const XKK = 'xkk';

    /**
     * Mainstream Kenyah
     */
    public const XKL = 'xkl';

    /**
     * Kayan River Kayan
     */
    public const XKN = 'xkn';

    /**
     * Kiorr
     */
    public const XKO = 'xko';

    /**
     * Kabatei
     */
    public const XKP = 'xkp';

    /**
     * Koroni
     */
    public const XKQ = 'xkq';

    /**
     * Xakriabá
     */
    public const XKR = 'xkr';

    /**
     * Kumbewaha
     */
    public const XKS = 'xks';

    /**
     * Kantosi
     */
    public const XKT = 'xkt';

    /**
     * Kaamba
     */
    public const XKU = 'xku';

    /**
     * Kgalagadi
     */
    public const XKV = 'xkv';

    /**
     * Kembra
     */
    public const XKW = 'xkw';

    /**
     * Karore
     */
    public const XKX = 'xkx';

    /**
     * Uma' Lasan
     */
    public const XKY = 'xky';

    /**
     * Kurtokha
     */
    public const XKZ = 'xkz';

    /**
     * Kamula
     */
    public const XLA = 'xla';

    /**
     * Loup B
     */
    public const XLB = 'xlb';

    /**
     * Lycian
     */
    public const XLC = 'xlc';

    /**
     * Lydian
     */
    public const XLD = 'xld';

    /**
     * Lemnian
     */
    public const XLE = 'xle';

    /**
     * Ligurian (Ancient)
     */
    public const XLG = 'xlg';

    /**
     * Liburnian
     */
    public const XLI = 'xli';

    /**
     * Alanic
     */
    public const XLN = 'xln';

    /**
     * Loup A
     */
    public const XLO = 'xlo';

    /**
     * Lepontic
     */
    public const XLP = 'xlp';

    /**
     * Lusitanian
     */
    public const XLS = 'xls';

    /**
     * Cuneiform Luwian
     */
    public const XLU = 'xlu';

    /**
     * Elymian
     */
    public const XLY = 'xly';

    /**
     * Mushungulu
     */
    public const XMA = 'xma';

    /**
     * Mbonga
     */
    public const XMB = 'xmb';

    /**
     * Makhuwa-Marrevone
     */
    public const XMC = 'xmc';

    /**
     * Mbudum
     */
    public const XMD = 'xmd';

    /**
     * Median
     */
    public const XME = 'xme';

    /**
     * Mingrelian
     */
    public const XMF = 'xmf';

    /**
     * Mengaka
     */
    public const XMG = 'xmg';

    /**
     * Kugu-Muminh
     */
    public const XMH = 'xmh';

    /**
     * Majera
     */
    public const XMJ = 'xmj';

    /**
     * Ancient Macedonian
     */
    public const XMK = 'xmk';

    /**
     * Malaysian Sign Language
     */
    public const XML = 'xml';

    /**
     * Manado Malay
     */
    public const XMM = 'xmm';

    /**
     * Manichaean Middle Persian
     */
    public const XMN = 'xmn';

    /**
     * Morerebi
     */
    public const XMO = 'xmo';

    /**
     * Kuku-Mu'inh
     */
    public const XMP = 'xmp';

    /**
     * Kuku-Mangk
     */
    public const XMQ = 'xmq';

    /**
     * Meroitic
     */
    public const XMR = 'xmr';

    /**
     * Moroccan Sign Language
     */
    public const XMS = 'xms';

    /**
     * Matbat
     */
    public const XMT = 'xmt';

    /**
     * Kamu
     */
    public const XMU = 'xmu';

    /**
     * Antankarana Malagasy
     */
    public const XMV = 'xmv';

    /**
     * Tsimihety Malagasy
     */
    public const XMW = 'xmw';

    /**
     * Salawati
     */
    public const XMX = 'xmx';

    /**
     * Mayaguduna
     */
    public const XMY = 'xmy';

    /**
     * Mori Bawah
     */
    public const XMZ = 'xmz';

    /**
     * Ancient North Arabian
     */
    public const XNA = 'xna';

    /**
     * Kanakanabu
     */
    public const XNB = 'xnb';

    /**
     * Middle Mongolian
     */
    public const XNG = 'xng';

    /**
     * Kuanhua
     */
    public const XNH = 'xnh';

    /**
     * Ngarigu
     */
    public const XNI = 'xni';

    /**
     * Ngoni (Tanzania)
     */
    public const XNJ = 'xnj';

    /**
     * Nganakarti
     */
    public const XNK = 'xnk';

    /**
     * Ngumbarl
     */
    public const XNM = 'xnm';

    /**
     * Northern Kankanay
     */
    public const XNN = 'xnn';

    /**
     * Anglo-Norman
     */
    public const XNO = 'xno';

    /**
     * Ngoni (Mozambique)
     */
    public const XNQ = 'xnq';

    /**
     * Kangri
     */
    public const XNR = 'xnr';

    /**
     * Kanashi
     */
    public const XNS = 'xns';

    /**
     * Narragansett
     */
    public const XNT = 'xnt';

    /**
     * Nukunul
     */
    public const XNU = 'xnu';

    /**
     * Nyiyaparli
     */
    public const XNY = 'xny';

    /**
     * Kenzi
     */
    public const XNZ = 'xnz';

    /**
     * O'chi'chi'
     */
    public const XOC = 'xoc';

    /**
     * Kokoda
     */
    public const XOD = 'xod';

    /**
     * Soga
     */
    public const XOG = 'xog';

    /**
     * Kominimung
     */
    public const XOI = 'xoi';

    /**
     * Xokleng
     */
    public const XOK = 'xok';

    /**
     * Komo (Sudan)
     */
    public const XOM = 'xom';

    /**
     * Konkomba
     */
    public const XON = 'xon';

    /**
     * Xukurú
     */
    public const XOO = 'xoo';

    /**
     * Kopar
     */
    public const XOP = 'xop';

    /**
     * Korubo
     */
    public const XOR = 'xor';

    /**
     * Kowaki
     */
    public const XOW = 'xow';

    /**
     * Pirriya
     */
    public const XPA = 'xpa';

    /**
     * Northeastern Tasmanian
     */
    public const XPB = 'xpb';

    /**
     * Pecheneg
     */
    public const XPC = 'xpc';

    /**
     * Oyster Bay Tasmanian
     */
    public const XPD = 'xpd';

    /**
     * Liberia Kpelle
     */
    public const XPE = 'xpe';

    /**
     * Southeast Tasmanian
     */
    public const XPF = 'xpf';

    /**
     * Phrygian
     */
    public const XPG = 'xpg';

    /**
     * North Midlands Tasmanian
     */
    public const XPH = 'xph';

    /**
     * Pictish
     */
    public const XPI = 'xpi';

    /**
     * Mpalitjanh
     */
    public const XPJ = 'xpj';

    /**
     * Kulina Pano
     */
    public const XPK = 'xpk';

    /**
     * Port Sorell Tasmanian
     */
    public const XPL = 'xpl';

    /**
     * Pumpokol
     */
    public const XPM = 'xpm';

    /**
     * Kapinawá
     */
    public const XPN = 'xpn';

    /**
     * Pochutec
     */
    public const XPO = 'xpo';

    /**
     * Puyo-Paekche
     */
    public const XPP = 'xpp';

    /**
     * Mohegan-Pequot
     */
    public const XPQ = 'xpq';

    /**
     * Parthian
     */
    public const XPR = 'xpr';

    /**
     * Pisidian
     */
    public const XPS = 'xps';

    /**
     * Punthamara
     */
    public const XPT = 'xpt';

    /**
     * Punic
     */
    public const XPU = 'xpu';

    /**
     * Northern Tasmanian
     */
    public const XPV = 'xpv';

    /**
     * Northwestern Tasmanian
     */
    public const XPW = 'xpw';

    /**
     * Southwestern Tasmanian
     */
    public const XPX = 'xpx';

    /**
     * Puyo
     */
    public const XPY = 'xpy';

    /**
     * Bruny Island Tasmanian
     */
    public const XPZ = 'xpz';

    /**
     * Karakhanid
     */
    public const XQA = 'xqa';

    /**
     * Qatabanian
     */
    public const XQT = 'xqt';

    /**
     * Krahô
     */
    public const XRA = 'xra';

    /**
     * Eastern Karaboro
     */
    public const XRB = 'xrb';

    /**
     * Gundungurra
     */
    public const XRD = 'xrd';

    /**
     * Kreye
     */
    public const XRE = 'xre';

    /**
     * Minang
     */
    public const XRG = 'xrg';

    /**
     * Krikati-Timbira
     */
    public const XRI = 'xri';

    /**
     * Armazic
     */
    public const XRM = 'xrm';

    /**
     * Arin
     */
    public const XRN = 'xrn';

    /**
     * Raetic
     */
    public const XRR = 'xrr';

    /**
     * Aranama-Tamique
     */
    public const XRT = 'xrt';

    /**
     * Marriammu
     */
    public const XRU = 'xru';

    /**
     * Karawa
     */
    public const XRW = 'xrw';

    /**
     * Sabaean
     */
    public const XSA = 'xsa';

    /**
     * Sambal
     */
    public const XSB = 'xsb';

    /**
     * Scythian
     */
    public const XSC = 'xsc';

    /**
     * Sidetic
     */
    public const XSD = 'xsd';

    /**
     * Sempan
     */
    public const XSE = 'xse';

    /**
     * Shamang
     */
    public const XSH = 'xsh';

    /**
     * Sio
     */
    public const XSI = 'xsi';

    /**
     * Subi
     */
    public const XSJ = 'xsj';

    /**
     * South Slavey
     */
    public const XSL = 'xsl';

    /**
     * Kasem
     */
    public const XSM = 'xsm';

    /**
     * Sanga (Nigeria)
     */
    public const XSN = 'xsn';

    /**
     * Solano
     */
    public const XSO = 'xso';

    /**
     * Silopi
     */
    public const XSP = 'xsp';

    /**
     * Makhuwa-Saka
     */
    public const XSQ = 'xsq';

    /**
     * Sherpa
     */
    public const XSR = 'xsr';

    /**
     * Sanumá
     */
    public const XSU = 'xsu';

    /**
     * Sudovian
     */
    public const XSV = 'xsv';

    /**
     * Saisiyat
     */
    public const XSY = 'xsy';

    /**
     * Alcozauca Mixtec
     */
    public const XTA = 'xta';

    /**
     * Chazumba Mixtec
     */
    public const XTB = 'xtb';

    /**
     * Katcha-Kadugli-Miri
     */
    public const XTC = 'xtc';

    /**
     * Diuxi-Tilantongo Mixtec
     */
    public const XTD = 'xtd';

    /**
     * Ketengban
     */
    public const XTE = 'xte';

    /**
     * Transalpine Gaulish
     */
    public const XTG = 'xtg';

    /**
     * Yitha Yitha
     */
    public const XTH = 'xth';

    /**
     * Sinicahua Mixtec
     */
    public const XTI = 'xti';

    /**
     * San Juan Teita Mixtec
     */
    public const XTJ = 'xtj';

    /**
     * Tijaltepec Mixtec
     */
    public const XTL = 'xtl';

    /**
     * Magdalena Peñasco Mixtec
     */
    public const XTM = 'xtm';

    /**
     * Northern Tlaxiaco Mixtec
     */
    public const XTN = 'xtn';

    /**
     * Tokharian A
     */
    public const XTO = 'xto';

    /**
     * San Miguel Piedras Mixtec
     */
    public const XTP = 'xtp';

    /**
     * Tumshuqese
     */
    public const XTQ = 'xtq';

    /**
     * Early Tripuri
     */
    public const XTR = 'xtr';

    /**
     * Sindihui Mixtec
     */
    public const XTS = 'xts';

    /**
     * Tacahua Mixtec
     */
    public const XTT = 'xtt';

    /**
     * Cuyamecalco Mixtec
     */
    public const XTU = 'xtu';

    /**
     * Thawa
     */
    public const XTV = 'xtv';

    /**
     * Tawandê
     */
    public const XTW = 'xtw';

    /**
     * Yoloxochitl Mixtec
     */
    public const XTY = 'xty';

    /**
     * Alu Kurumba
     */
    public const XUA = 'xua';

    /**
     * Betta Kurumba
     */
    public const XUB = 'xub';

    /**
     * Umiida
     */
    public const XUD = 'xud';

    /**
     * Kunigami
     */
    public const XUG = 'xug';

    /**
     * Jennu Kurumba
     */
    public const XUJ = 'xuj';

    /**
     * Ngunawal
     */
    public const XUL = 'xul';

    /**
     * Umbrian
     */
    public const XUM = 'xum';

    /**
     * Unggaranggu
     */
    public const XUN = 'xun';

    /**
     * Kuo
     */
    public const XUO = 'xuo';

    /**
     * Upper Umpqua
     */
    public const XUP = 'xup';

    /**
     * Urartian
     */
    public const XUR = 'xur';

    /**
     * Kuthant
     */
    public const XUT = 'xut';

    /**
     * Kxoe
     */
    public const XUU = 'xuu';

    /**
     * Venetic
     */
    public const XVE = 'xve';

    /**
     * Kamviri
     */
    public const XVI = 'xvi';

    /**
     * Vandalic
     */
    public const XVN = 'xvn';

    /**
     * Volscian
     */
    public const XVO = 'xvo';

    /**
     * Vestinian
     */
    public const XVS = 'xvs';

    /**
     * Kwaza
     */
    public const XWA = 'xwa';

    /**
     * Woccon
     */
    public const XWC = 'xwc';

    /**
     * Wadi Wadi
     */
    public const XWD = 'xwd';

    /**
     * Xwela Gbe
     */
    public const XWE = 'xwe';

    /**
     * Kwegu
     */
    public const XWG = 'xwg';

    /**
     * Wajuk
     */
    public const XWJ = 'xwj';

    /**
     * Wangkumara
     */
    public const XWK = 'xwk';

    /**
     * Western Xwla Gbe
     */
    public const XWL = 'xwl';

    /**
     * Written Oirat
     */
    public const XWO = 'xwo';

    /**
     * Kwerba Mamberamo
     */
    public const XWR = 'xwr';

    /**
     * Wotjobaluk
     */
    public const XWT = 'xwt';

    /**
     * Wemba Wemba
     */
    public const XWW = 'xww';

    /**
     * Boro (Ghana)
     */
    public const XXB = 'xxb';

    /**
     * Ke'o
     */
    public const XXK = 'xxk';

    /**
     * Minkin
     */
    public const XXM = 'xxm';

    /**
     * Koropó
     */
    public const XXR = 'xxr';

    /**
     * Tambora
     */
    public const XXT = 'xxt';

    /**
     * Yaygir
     */
    public const XYA = 'xya';

    /**
     * Yandjibara
     */
    public const XYB = 'xyb';

    /**
     * Mayi-Yapi
     */
    public const XYJ = 'xyj';

    /**
     * Mayi-Kulan
     */
    public const XYK = 'xyk';

    /**
     * Yalakalore
     */
    public const XYL = 'xyl';

    /**
     * Mayi-Thakurti
     */
    public const XYT = 'xyt';

    /**
     * Yorta Yorta
     */
    public const XYY = 'xyy';

    /**
     * Zhang-Zhung
     */
    public const XZH = 'xzh';

    /**
     * Zemgalian
     */
    public const XZM = 'xzm';

    /**
     * Ancient Zapotec
     */
    public const XZP = 'xzp';

    /**
     * Yaminahua
     */
    public const YAA = 'yaa';

    /**
     * Yuhup
     */
    public const YAB = 'yab';

    /**
     * Pass Valley Yali
     */
    public const YAC = 'yac';

    /**
     * Yagua
     */
    public const YAD = 'yad';

    /**
     * Pumé
     */
    public const YAE = 'yae';

    /**
     * Yaka (Democratic Republic of Congo)
     */
    public const YAF = 'yaf';

    /**
     * Yámana
     */
    public const YAG = 'yag';

    /**
     * Yazgulyam
     */
    public const YAH = 'yah';

    /**
     * Yagnobi
     */
    public const YAI = 'yai';

    /**
     * Banda-Yangere
     */
    public const YAJ = 'yaj';

    /**
     * Yakama
     */
    public const YAK = 'yak';

    /**
     * Yalunka
     */
    public const YAL = 'yal';

    /**
     * Yamba
     */
    public const YAM = 'yam';

    /**
     * Mayangna
     */
    public const YAN = 'yan';

    /**
     * Yao
     */
    public const YAO = 'yao';

    /**
     * Yapese
     */
    public const YAP = 'yap';

    /**
     * Yaqui
     */
    public const YAQ = 'yaq';

    /**
     * Yabarana
     */
    public const YAR = 'yar';

    /**
     * Nugunu (Cameroon)
     */
    public const YAS = 'yas';

    /**
     * Yambeta
     */
    public const YAT = 'yat';

    /**
     * Yuwana
     */
    public const YAU = 'yau';

    /**
     * Yangben
     */
    public const YAV = 'yav';

    /**
     * Yawalapití
     */
    public const YAW = 'yaw';

    /**
     * Yauma
     */
    public const YAX = 'yax';

    /**
     * Agwagwune
     */
    public const YAY = 'yay';

    /**
     * Lokaa
     */
    public const YAZ = 'yaz';

    /**
     * Yala
     */
    public const YBA = 'yba';

    /**
     * Yemba
     */
    public const YBB = 'ybb';

    /**
     * West Yugur
     */
    public const YBE = 'ybe';

    /**
     * Yakha
     */
    public const YBH = 'ybh';

    /**
     * Yamphu
     */
    public const YBI = 'ybi';

    /**
     * Hasha
     */
    public const YBJ = 'ybj';

    /**
     * Bokha
     */
    public const YBK = 'ybk';

    /**
     * Yukuben
     */
    public const YBL = 'ybl';

    /**
     * Yaben
     */
    public const YBM = 'ybm';

    /**
     * Yabaâna
     */
    public const YBN = 'ybn';

    /**
     * Yabong
     */
    public const YBO = 'ybo';

    /**
     * Yawiyo
     */
    public const YBX = 'ybx';

    /**
     * Yaweyuha
     */
    public const YBY = 'yby';

    /**
     * Chesu
     */
    public const YCH = 'ych';

    /**
     * Lolopo
     */
    public const YCL = 'ycl';

    /**
     * Yucuna
     */
    public const YCN = 'ycn';

    /**
     * Chepya
     */
    public const YCP = 'ycp';

    /**
     * Yilan Creole
     */
    public const YCR = 'ycr';

    /**
     * Yanda
     */
    public const YDA = 'yda';

    /**
     * Eastern Yiddish
     */
    public const YDD = 'ydd';

    /**
     * Yangum Dey
     */
    public const YDE = 'yde';

    /**
     * Yidgha
     */
    public const YDG = 'ydg';

    /**
     * Yoidik
     */
    public const YDK = 'ydk';

    /**
     * Ravula
     */
    public const YEA = 'yea';

    /**
     * Yeniche
     */
    public const YEC = 'yec';

    /**
     * Yimas
     */
    public const YEE = 'yee';

    /**
     * Yeni
     */
    public const YEI = 'yei';

    /**
     * Yevanic
     */
    public const YEJ = 'yej';

    /**
     * Yela
     */
    public const YEL = 'yel';

    /**
     * Tarok
     */
    public const YER = 'yer';

    /**
     * Nyankpa
     */
    public const YES = 'yes';

    /**
     * Yetfa
     */
    public const YET = 'yet';

    /**
     * Yerukula
     */
    public const YEU = 'yeu';

    /**
     * Yapunda
     */
    public const YEV = 'yev';

    /**
     * Yeyi
     */
    public const YEY = 'yey';

    /**
     * Malyangapa
     */
    public const YGA = 'yga';

    /**
     * Yiningayi
     */
    public const YGI = 'ygi';

    /**
     * Yangum Gel
     */
    public const YGL = 'ygl';

    /**
     * Yagomi
     */
    public const YGM = 'ygm';

    /**
     * Gepo
     */
    public const YGP = 'ygp';

    /**
     * Yagaria
     */
    public const YGR = 'ygr';

    /**
     * Yolŋu Sign Language
     */
    public const YGS = 'ygs';

    /**
     * Yugul
     */
    public const YGU = 'ygu';

    /**
     * Yagwoia
     */
    public const YGW = 'ygw';

    /**
     * Baha Buyang
     */
    public const YHA = 'yha';

    /**
     * Judeo-Iraqi Arabic
     */
    public const YHD = 'yhd';

    /**
     * Hlepho Phowa
     */
    public const YHL = 'yhl';

    /**
     * Yan-nhaŋu Sign Language
     */
    public const YHS = 'yhs';

    /**
     * Yinggarda
     */
    public const YIA = 'yia';

    /**
     * Yiddish
     */
    public const YID = 'yid';

    /**
     * Ache
     */
    public const YIF = 'yif';

    /**
     * Wusa Nasu
     */
    public const YIG = 'yig';

    /**
     * Western Yiddish
     */
    public const YIH = 'yih';

    /**
     * Yidiny
     */
    public const YII = 'yii';

    /**
     * Yindjibarndi
     */
    public const YIJ = 'yij';

    /**
     * Dongshanba Lalo
     */
    public const YIK = 'yik';

    /**
     * Yindjilandji
     */
    public const YIL = 'yil';

    /**
     * Yimchungru Naga
     */
    public const YIM = 'yim';

    /**
     * Riang Lai
     */
    public const YIN = 'yin';

    /**
     * Pholo
     */
    public const YIP = 'yip';

    /**
     * Miqie
     */
    public const YIQ = 'yiq';

    /**
     * North Awyu
     */
    public const YIR = 'yir';

    /**
     * Yis
     */
    public const YIS = 'yis';

    /**
     * Eastern Lalu
     */
    public const YIT = 'yit';

    /**
     * Awu
     */
    public const YIU = 'yiu';

    /**
     * Northern Nisu
     */
    public const YIV = 'yiv';

    /**
     * Axi Yi
     */
    public const YIX = 'yix';

    /**
     * Azhe
     */
    public const YIZ = 'yiz';

    /**
     * Yakan
     */
    public const YKA = 'yka';

    /**
     * Northern Yukaghir
     */
    public const YKG = 'ykg';

    /**
     * Khamnigan Mongol
     */
    public const YKH = 'ykh';

    /**
     * Yoke
     */
    public const YKI = 'yki';

    /**
     * Yakaikeke
     */
    public const YKK = 'ykk';

    /**
     * Khlula
     */
    public const YKL = 'ykl';

    /**
     * Kap
     */
    public const YKM = 'ykm';

    /**
     * Kua-nsi
     */
    public const YKN = 'ykn';

    /**
     * Yasa
     */
    public const YKO = 'yko';

    /**
     * Yekora
     */
    public const YKR = 'ykr';

    /**
     * Kathu
     */
    public const YKT = 'ykt';

    /**
     * Kuamasi
     */
    public const YKU = 'yku';

    /**
     * Yakoma
     */
    public const YKY = 'yky';

    /**
     * Yaul
     */
    public const YLA = 'yla';

    /**
     * Yaleba
     */
    public const YLB = 'ylb';

    /**
     * Yele
     */
    public const YLE = 'yle';

    /**
     * Yelogu
     */
    public const YLG = 'ylg';

    /**
     * Angguruk Yali
     */
    public const YLI = 'yli';

    /**
     * Yil
     */
    public const YLL = 'yll';

    /**
     * Limi
     */
    public const YLM = 'ylm';

    /**
     * Langnian Buyang
     */
    public const YLN = 'yln';

    /**
     * Naluo Yi
     */
    public const YLO = 'ylo';

    /**
     * Yalarnnga
     */
    public const YLR = 'ylr';

    /**
     * Aribwaung
     */
    public const YLU = 'ylu';

    /**
     * Nyâlayu
     */
    public const YLY = 'yly';

    /**
     * Yambes
     */
    public const YMB = 'ymb';

    /**
     * Southern Muji
     */
    public const YMC = 'ymc';

    /**
     * Muda
     */
    public const YMD = 'ymd';

    /**
     * Yameo
     */
    public const YME = 'yme';

    /**
     * Yamongeri
     */
    public const YMG = 'ymg';

    /**
     * Mili
     */
    public const YMH = 'ymh';

    /**
     * Moji
     */
    public const YMI = 'ymi';

    /**
     * Makwe
     */
    public const YMK = 'ymk';

    /**
     * Iamalele
     */
    public const YML = 'yml';

    /**
     * Maay
     */
    public const YMM = 'ymm';

    /**
     * Yamna
     */
    public const YMN = 'ymn';

    /**
     * Yangum Mon
     */
    public const YMO = 'ymo';

    /**
     * Yamap
     */
    public const YMP = 'ymp';

    /**
     * Qila Muji
     */
    public const YMQ = 'ymq';

    /**
     * Malasar
     */
    public const YMR = 'ymr';

    /**
     * Mysian
     */
    public const YMS = 'yms';

    /**
     * Northern Muji
     */
    public const YMX = 'ymx';

    /**
     * Muzi
     */
    public const YMZ = 'ymz';

    /**
     * Aluo
     */
    public const YNA = 'yna';

    /**
     * Yamben
     */
    public const YNB = 'ynb';

    /**
     * Yandruwandha
     */
    public const YND = 'ynd';

    /**
     * Lang'e
     */
    public const YNE = 'yne';

    /**
     * Yango
     */
    public const YNG = 'yng';

    /**
     * Naukan Yupik
     */
    public const YNK = 'ynk';

    /**
     * Yangulam
     */
    public const YNL = 'ynl';

    /**
     * Yana
     */
    public const YNN = 'ynn';

    /**
     * Yong
     */
    public const YNO = 'yno';

    /**
     * Yendang
     */
    public const YNQ = 'ynq';

    /**
     * Yansi
     */
    public const YNS = 'yns';

    /**
     * Yahuna
     */
    public const YNU = 'ynu';

    /**
     * Yoba
     */
    public const YOB = 'yob';

    /**
     * Yogad
     */
    public const YOG = 'yog';

    /**
     * Yonaguni
     */
    public const YOI = 'yoi';

    /**
     * Yokuts
     */
    public const YOK = 'yok';

    /**
     * Yola
     */
    public const YOL = 'yol';

    /**
     * Yombe
     */
    public const YOM = 'yom';

    /**
     * Yongkom
     */
    public const YON = 'yon';

    /**
     * Yoruba
     */
    public const YOR = 'yor';

    /**
     * Yotti
     */
    public const YOT = 'yot';

    /**
     * Yoron
     */
    public const YOX = 'yox';

    /**
     * Yoy
     */
    public const YOY = 'yoy';

    /**
     * Phala
     */
    public const YPA = 'ypa';

    /**
     * Labo Phowa
     */
    public const YPB = 'ypb';

    /**
     * Phola
     */
    public const YPG = 'ypg';

    /**
     * Phupha
     */
    public const YPH = 'yph';

    /**
     * Phuma
     */
    public const YPM = 'ypm';

    /**
     * Ani Phowa
     */
    public const YPN = 'ypn';

    /**
     * Alo Phola
     */
    public const YPO = 'ypo';

    /**
     * Phupa
     */
    public const YPP = 'ypp';

    /**
     * Phuza
     */
    public const YPZ = 'ypz';

    /**
     * Yerakai
     */
    public const YRA = 'yra';

    /**
     * Yareba
     */
    public const YRB = 'yrb';

    /**
     * Yaouré
     */
    public const YRE = 'yre';

    /**
     * Nenets
     */
    public const YRK = 'yrk';

    /**
     * Nhengatu
     */
    public const YRL = 'yrl';

    /**
     * Yirrk-Mel
     */
    public const YRM = 'yrm';

    /**
     * Yerong
     */
    public const YRN = 'yrn';

    /**
     * Yaroamë
     */
    public const YRO = 'yro';

    /**
     * Yarsun
     */
    public const YRS = 'yrs';

    /**
     * Yarawata
     */
    public const YRW = 'yrw';

    /**
     * Yarluyandi
     */
    public const YRY = 'yry';

    /**
     * Yassic
     */
    public const YSC = 'ysc';

    /**
     * Samatao
     */
    public const YSD = 'ysd';

    /**
     * Sonaga
     */
    public const YSG = 'ysg';

    /**
     * Yugoslavian Sign Language
     */
    public const YSL = 'ysl';

    /**
     * Myanmar Sign Language
     */
    public const YSM = 'ysm';

    /**
     * Sani
     */
    public const YSN = 'ysn';

    /**
     * Nisi (China)
     */
    public const YSO = 'yso';

    /**
     * Southern Lolopo
     */
    public const YSP = 'ysp';

    /**
     * Sirenik Yupik
     */
    public const YSR = 'ysr';

    /**
     * Yessan-Mayo
     */
    public const YSS = 'yss';

    /**
     * Sanie
     */
    public const YSY = 'ysy';

    /**
     * Talu
     */
    public const YTA = 'yta';

    /**
     * Tanglang
     */
    public const YTL = 'ytl';

    /**
     * Thopho
     */
    public const YTP = 'ytp';

    /**
     * Yout Wam
     */
    public const YTW = 'ytw';

    /**
     * Yatay
     */
    public const YTY = 'yty';

    /**
     * Yucateco
     */
    public const YUA = 'yua';

    /**
     * Yugambal
     */
    public const YUB = 'yub';

    /**
     * Yuchi
     */
    public const YUC = 'yuc';

    /**
     * Judeo-Tripolitanian Arabic
     */
    public const YUD = 'yud';

    /**
     * Yue Chinese
     */
    public const YUE = 'yue';

    /**
     * Havasupai-Walapai-Yavapai
     */
    public const YUF = 'yuf';

    /**
     * Yug
     */
    public const YUG = 'yug';

    /**
     * Yurutí
     */
    public const YUI = 'yui';

    /**
     * Karkar-Yuri
     */
    public const YUJ = 'yuj';

    /**
     * Yuki
     */
    public const YUK = 'yuk';

    /**
     * Yulu
     */
    public const YUL = 'yul';

    /**
     * Quechan
     */
    public const YUM = 'yum';

    /**
     * Bena (Nigeria)
     */
    public const YUN = 'yun';

    /**
     * Yukpa
     */
    public const YUP = 'yup';

    /**
     * Yuqui
     */
    public const YUQ = 'yuq';

    /**
     * Yurok
     */
    public const YUR = 'yur';

    /**
     * Yopno
     */
    public const YUT = 'yut';

    /**
     * Yau (Morobe Province)
     */
    public const YUW = 'yuw';

    /**
     * Southern Yukaghir
     */
    public const YUX = 'yux';

    /**
     * East Yugur
     */
    public const YUY = 'yuy';

    /**
     * Yuracare
     */
    public const YUZ = 'yuz';

    /**
     * Yawa
     */
    public const YVA = 'yva';

    /**
     * Yavitero
     */
    public const YVT = 'yvt';

    /**
     * Kalou
     */
    public const YWA = 'ywa';

    /**
     * Yinhawangka
     */
    public const YWG = 'ywg';

    /**
     * Western Lalu
     */
    public const YWL = 'ywl';

    /**
     * Yawanawa
     */
    public const YWN = 'ywn';

    /**
     * Wuding-Luquan Yi
     */
    public const YWQ = 'ywq';

    /**
     * Yawuru
     */
    public const YWR = 'ywr';

    /**
     * Xishanba Lalo
     */
    public const YWT = 'ywt';

    /**
     * Wumeng Nasu
     */
    public const YWU = 'ywu';

    /**
     * Yawarawarga
     */
    public const YWW = 'yww';

    /**
     * Mayawali
     */
    public const YXA = 'yxa';

    /**
     * Yagara
     */
    public const YXG = 'yxg';

    /**
     * Yardliyawarra
     */
    public const YXL = 'yxl';

    /**
     * Yinwum
     */
    public const YXM = 'yxm';

    /**
     * Yuyu
     */
    public const YXU = 'yxu';

    /**
     * Yabula Yabula
     */
    public const YXY = 'yxy';

    /**
     * Yir Yoront
     */
    public const YYR = 'yyr';

    /**
     * Yau (Sandaun Province)
     */
    public const YYU = 'yyu';

    /**
     * Ayizi
     */
    public const YYZ = 'yyz';

    /**
     * E'ma Buyang
     */
    public const YZG = 'yzg';

    /**
     * Zokhuo
     */
    public const YZK = 'yzk';

    /**
     * Sierra de Juárez Zapotec
     */
    public const ZAA = 'zaa';

    /**
     * Western Tlacolula Valley Zapotec
     */
    public const ZAB = 'zab';

    /**
     * Ocotlán Zapotec
     */
    public const ZAC = 'zac';

    /**
     * Cajonos Zapotec
     */
    public const ZAD = 'zad';

    /**
     * Yareni Zapotec
     */
    public const ZAE = 'zae';

    /**
     * Ayoquesco Zapotec
     */
    public const ZAF = 'zaf';

    /**
     * Zaghawa
     */
    public const ZAG = 'zag';

    /**
     * Zangwal
     */
    public const ZAH = 'zah';

    /**
     * Isthmus Zapotec
     */
    public const ZAI = 'zai';

    /**
     * Zaramo
     */
    public const ZAJ = 'zaj';

    /**
     * Zanaki
     */
    public const ZAK = 'zak';

    /**
     * Zauzou
     */
    public const ZAL = 'zal';

    /**
     * Miahuatlán Zapotec
     */
    public const ZAM = 'zam';

    /**
     * Ozolotepec Zapotec
     */
    public const ZAO = 'zao';

    /**
     * Zapotec
     */
    public const ZAP = 'zap';

    /**
     * Aloápam Zapotec
     */
    public const ZAQ = 'zaq';

    /**
     * Rincón Zapotec
     */
    public const ZAR = 'zar';

    /**
     * Santo Domingo Albarradas Zapotec
     */
    public const ZAS = 'zas';

    /**
     * Tabaa Zapotec
     */
    public const ZAT = 'zat';

    /**
     * Zangskari
     */
    public const ZAU = 'zau';

    /**
     * Yatzachi Zapotec
     */
    public const ZAV = 'zav';

    /**
     * Mitla Zapotec
     */
    public const ZAW = 'zaw';

    /**
     * Xadani Zapotec
     */
    public const ZAX = 'zax';

    /**
     * Zayse-Zergulla
     */
    public const ZAY = 'zay';

    /**
     * Zari
     */
    public const ZAZ = 'zaz';

    /**
     * Balaibalan
     */
    public const ZBA = 'zba';

    /**
     * Central Berawan
     */
    public const ZBC = 'zbc';

    /**
     * East Berawan
     */
    public const ZBE = 'zbe';

    /**
     * Blissymbols
     */
    public const ZBL = 'zbl';

    /**
     * Batui
     */
    public const ZBT = 'zbt';

    /**
     * Bu (Bauchi State)
     */
    public const ZBU = 'zbu';

    /**
     * West Berawan
     */
    public const ZBW = 'zbw';

    /**
     * Coatecas Altas Zapotec
     */
    public const ZCA = 'zca';

    /**
     * Las Delicias Zapotec
     */
    public const ZCD = 'zcd';

    /**
     * Central Hongshuihe Zhuang
     */
    public const ZCH = 'zch';

    /**
     * Ngazidja Comorian
     */
    public const ZDJ = 'zdj';

    /**
     * Zeeuws
     */
    public const ZEA = 'zea';

    /**
     * Zenag
     */
    public const ZEG = 'zeg';

    /**
     * Eastern Hongshuihe Zhuang
     */
    public const ZEH = 'zeh';

    /**
     * Zeem
     */
    public const ZEM = 'zem';

    /**
     * Zenaga
     */
    public const ZEN = 'zen';

    /**
     * Kinga
     */
    public const ZGA = 'zga';

    /**
     * Guibei Zhuang
     */
    public const ZGB = 'zgb';

    /**
     * Standard Moroccan Tamazight
     */
    public const ZGH = 'zgh';

    /**
     * Minz Zhuang
     */
    public const ZGM = 'zgm';

    /**
     * Guibian Zhuang
     */
    public const ZGN = 'zgn';

    /**
     * Magori
     */
    public const ZGR = 'zgr';

    /**
     * Zhuang
     */
    public const ZHA = 'zha';

    /**
     * Zhaba
     */
    public const ZHB = 'zhb';

    /**
     * Dai Zhuang
     */
    public const ZHD = 'zhd';

    /**
     * Zhire
     */
    public const ZHI = 'zhi';

    /**
     * Nong Zhuang
     */
    public const ZHN = 'zhn';

    /**
     * Chinese
     */
    public const ZHO = 'zho';

    /**
     * Zhoa
     */
    public const ZHW = 'zhw';

    /**
     * Zia
     */
    public const ZIA = 'zia';

    /**
     * Zimbabwe Sign Language
     */
    public const ZIB = 'zib';

    /**
     * Zimakani
     */
    public const ZIK = 'zik';

    /**
     * Zialo
     */
    public const ZIL = 'zil';

    /**
     * Mesme
     */
    public const ZIM = 'zim';

    /**
     * Zinza
     */
    public const ZIN = 'zin';

    /**
     * Zigula
     */
    public const ZIW = 'ziw';

    /**
     * Zizilivakan
     */
    public const ZIZ = 'ziz';

    /**
     * Kaimbulawa
     */
    public const ZKA = 'zka';

    /**
     * Kadu
     */
    public const ZKD = 'zkd';

    /**
     * Koguryo
     */
    public const ZKG = 'zkg';

    /**
     * Khorezmian
     */
    public const ZKH = 'zkh';

    /**
     * Karankawa
     */
    public const ZKK = 'zkk';

    /**
     * Kanan
     */
    public const ZKN = 'zkn';

    /**
     * Kott
     */
    public const ZKO = 'zko';

    /**
     * São Paulo Kaingáng
     */
    public const ZKP = 'zkp';

    /**
     * Zakhring
     */
    public const ZKR = 'zkr';

    /**
     * Kitan
     */
    public const ZKT = 'zkt';

    /**
     * Kaurna
     */
    public const ZKU = 'zku';

    /**
     * Krevinian
     */
    public const ZKV = 'zkv';

    /**
     * Khazar
     */
    public const ZKZ = 'zkz';

    /**
     * Zula
     */
    public const ZLA = 'zla';

    /**
     * Liujiang Zhuang
     */
    public const ZLJ = 'zlj';

    /**
     * Malay (individual language)
     */
    public const ZLM = 'zlm';

    /**
     * Lianshan Zhuang
     */
    public const ZLN = 'zln';

    /**
     * Liuqian Zhuang
     */
    public const ZLQ = 'zlq';

    /**
     * Zul
     */
    public const ZLU = 'zlu';

    /**
     * Manda (Australia)
     */
    public const ZMA = 'zma';

    /**
     * Zimba
     */
    public const ZMB = 'zmb';

    /**
     * Margany
     */
    public const ZMC = 'zmc';

    /**
     * Maridan
     */
    public const ZMD = 'zmd';

    /**
     * Mangerr
     */
    public const ZME = 'zme';

    /**
     * Mfinu
     */
    public const ZMF = 'zmf';

    /**
     * Marti Ke
     */
    public const ZMG = 'zmg';

    /**
     * Makolkol
     */
    public const ZMH = 'zmh';

    /**
     * Negeri Sembilan Malay
     */
    public const ZMI = 'zmi';

    /**
     * Maridjabin
     */
    public const ZMJ = 'zmj';

    /**
     * Mandandanyi
     */
    public const ZMK = 'zmk';

    /**
     * Matngala
     */
    public const ZML = 'zml';

    /**
     * Marimanindji
     */
    public const ZMM = 'zmm';

    /**
     * Mbangwe
     */
    public const ZMN = 'zmn';

    /**
     * Molo
     */
    public const ZMO = 'zmo';

    /**
     * Mbuun
     */
    public const ZMP = 'zmp';

    /**
     * Mituku
     */
    public const ZMQ = 'zmq';

    /**
     * Maranunggu
     */
    public const ZMR = 'zmr';

    /**
     * Mbesa
     */
    public const ZMS = 'zms';

    /**
     * Maringarr
     */
    public const ZMT = 'zmt';

    /**
     * Muruwari
     */
    public const ZMU = 'zmu';

    /**
     * Mbariman-Gudhinma
     */
    public const ZMV = 'zmv';

    /**
     * Mbo (Democratic Republic of Congo)
     */
    public const ZMW = 'zmw';

    /**
     * Bomitaba
     */
    public const ZMX = 'zmx';

    /**
     * Mariyedi
     */
    public const ZMY = 'zmy';

    /**
     * Mbandja
     */
    public const ZMZ = 'zmz';

    /**
     * Zan Gula
     */
    public const ZNA = 'zna';

    /**
     * Zande (individual language)
     */
    public const ZNE = 'zne';

    /**
     * Mang
     */
    public const ZNG = 'zng';

    /**
     * Manangkari
     */
    public const ZNK = 'znk';

    /**
     * Mangas
     */
    public const ZNS = 'zns';

    /**
     * Copainalá Zoque
     */
    public const ZOC = 'zoc';

    /**
     * Chimalapa Zoque
     */
    public const ZOH = 'zoh';

    /**
     * Zou
     */
    public const ZOM = 'zom';

    /**
     * Asunción Mixtepec Zapotec
     */
    public const ZOO = 'zoo';

    /**
     * Tabasco Zoque
     */
    public const ZOQ = 'zoq';

    /**
     * Rayón Zoque
     */
    public const ZOR = 'zor';

    /**
     * Francisco León Zoque
     */
    public const ZOS = 'zos';

    /**
     * Lachiguiri Zapotec
     */
    public const ZPA = 'zpa';

    /**
     * Yautepec Zapotec
     */
    public const ZPB = 'zpb';

    /**
     * Choapan Zapotec
     */
    public const ZPC = 'zpc';

    /**
     * Southeastern Ixtlán Zapotec
     */
    public const ZPD = 'zpd';

    /**
     * Petapa Zapotec
     */
    public const ZPE = 'zpe';

    /**
     * San Pedro Quiatoni Zapotec
     */
    public const ZPF = 'zpf';

    /**
     * Guevea De Humboldt Zapotec
     */
    public const ZPG = 'zpg';

    /**
     * Totomachapan Zapotec
     */
    public const ZPH = 'zph';

    /**
     * Santa María Quiegolani Zapotec
     */
    public const ZPI = 'zpi';

    /**
     * Quiavicuzas Zapotec
     */
    public const ZPJ = 'zpj';

    /**
     * Tlacolulita Zapotec
     */
    public const ZPK = 'zpk';

    /**
     * Lachixío Zapotec
     */
    public const ZPL = 'zpl';

    /**
     * Mixtepec Zapotec
     */
    public const ZPM = 'zpm';

    /**
     * Santa Inés Yatzechi Zapotec
     */
    public const ZPN = 'zpn';

    /**
     * Amatlán Zapotec
     */
    public const ZPO = 'zpo';

    /**
     * El Alto Zapotec
     */
    public const ZPP = 'zpp';

    /**
     * Zoogocho Zapotec
     */
    public const ZPQ = 'zpq';

    /**
     * Santiago Xanica Zapotec
     */
    public const ZPR = 'zpr';

    /**
     * Coatlán Zapotec
     */
    public const ZPS = 'zps';

    /**
     * San Vicente Coatlán Zapotec
     */
    public const ZPT = 'zpt';

    /**
     * Yalálag Zapotec
     */
    public const ZPU = 'zpu';

    /**
     * Chichicapan Zapotec
     */
    public const ZPV = 'zpv';

    /**
     * Zaniza Zapotec
     */
    public const ZPW = 'zpw';

    /**
     * San Baltazar Loxicha Zapotec
     */
    public const ZPX = 'zpx';

    /**
     * Mazaltepec Zapotec
     */
    public const ZPY = 'zpy';

    /**
     * Texmelucan Zapotec
     */
    public const ZPZ = 'zpz';

    /**
     * Qiubei Zhuang
     */
    public const ZQE = 'zqe';

    /**
     * Kara (Korea)
     */
    public const ZRA = 'zra';

    /**
     * Mirgan
     */
    public const ZRG = 'zrg';

    /**
     * Zerenkel
     */
    public const ZRN = 'zrn';

    /**
     * Záparo
     */
    public const ZRO = 'zro';

    /**
     * Zarphatic
     */
    public const ZRP = 'zrp';

    /**
     * Mairasi
     */
    public const ZRS = 'zrs';

    /**
     * Sarasira
     */
    public const ZSA = 'zsa';

    /**
     * Kaskean
     */
    public const ZSK = 'zsk';

    /**
     * Zambian Sign Language
     */
    public const ZSL = 'zsl';

    /**
     * Standard Malay
     */
    public const ZSM = 'zsm';

    /**
     * Southern Rincon Zapotec
     */
    public const ZSR = 'zsr';

    /**
     * Sukurum
     */
    public const ZSU = 'zsu';

    /**
     * Elotepec Zapotec
     */
    public const ZTE = 'zte';

    /**
     * Xanaguía Zapotec
     */
    public const ZTG = 'ztg';

    /**
     * Lapaguía-Guivini Zapotec
     */
    public const ZTL = 'ztl';

    /**
     * San Agustín Mixtepec Zapotec
     */
    public const ZTM = 'ztm';

    /**
     * Santa Catarina Albarradas Zapotec
     */
    public const ZTN = 'ztn';

    /**
     * Loxicha Zapotec
     */
    public const ZTP = 'ztp';

    /**
     * Quioquitani-Quierí Zapotec
     */
    public const ZTQ = 'ztq';

    /**
     * Tilquiapan Zapotec
     */
    public const ZTS = 'zts';

    /**
     * Tejalapan Zapotec
     */
    public const ZTT = 'ztt';

    /**
     * Güilá Zapotec
     */
    public const ZTU = 'ztu';

    /**
     * Zaachila Zapotec
     */
    public const ZTX = 'ztx';

    /**
     * Yatee Zapotec
     */
    public const ZTY = 'zty';

    /**
     * Tokano
     */
    public const ZUH = 'zuh';

    /**
     * Zulu
     */
    public const ZUL = 'zul';

    /**
     * Kumzari
     */
    public const ZUM = 'zum';

    /**
     * Zuni
     */
    public const ZUN = 'zun';

    /**
     * Zumaya
     */
    public const ZUY = 'zuy';

    /**
     * Zay
     */
    public const ZWA = 'zwa';

    /**
     * No linguistic content
     */
    public const ZXX = 'zxx';

    /**
     * Yongbei Zhuang
     */
    public const ZYB = 'zyb';

    /**
     * Yang Zhuang
     */
    public const ZYG = 'zyg';

    /**
     * Youjiang Zhuang
     */
    public const ZYJ = 'zyj';

    /**
     * Yongnan Zhuang
     */
    public const ZYN = 'zyn';

    /**
     * Zyphe Chin
     */
    public const ZYP = 'zyp';

    /**
     * Zaza
     */
    public const ZZA = 'zza';

    /**
     * Zuojiang Zhuang
     */
    public const ZZJ = 'zzj';

    public function getValidator(): Validator
    {
        return $this->cache(
            new UnionValidator(
                new EnumValidator([
                    self::AAA,
                    self::AAB,
                    self::AAC,
                    self::AAD,
                    self::AAE,
                    self::AAF,
                    self::AAG,
                    self::AAH,
                    self::AAI,
                    self::AAK,
                    self::AAL,
                    self::AAN,
                    self::AAO,
                    self::AAP,
                    self::AAQ,
                    self::AAR,
                    self::AAS,
                    self::AAT,
                    self::AAU,
                    self::AAW,
                    self::AAX,
                    self::AAZ,
                    self::ABA,
                    self::ABB,
                    self::ABC,
                    self::ABD,
                    self::ABE,
                    self::ABF,
                    self::ABG,
                    self::ABH,
                    self::ABI,
                    self::ABJ,
                    self::ABK,
                    self::ABL,
                    self::ABM,
                    self::ABN,
                    self::ABO,
                    self::ABP,
                    self::ABQ,
                    self::ABR,
                    self::ABS,
                    self::ABT,
                    self::ABU,
                    self::ABV,
                    self::ABW,
                    self::ABX,
                    self::ABY,
                    self::ABZ,
                    self::ACA,
                    self::ACB,
                    self::ACD,
                    self::ACE,
                    self::ACF,
                    self::ACH,
                    self::ACI,
                    self::ACK,
                    self::ACL,
                    self::ACM,
                    self::ACN,
                    self::ACP,
                    self::ACQ,
                    self::ACR,
                    self::ACS,
                    self::ACT,
                    self::ACU,
                    self::ACV,
                    self::ACW,
                    self::ACX,
                    self::ACY,
                    self::ACZ,
                    self::ADA,
                    self::ADB,
                    self::ADD,
                    self::ADE,
                    self::ADF,
                    self::ADG,
                    self::ADH,
                    self::ADI,
                    self::ADJ,
                    self::ADL,
                    self::ADN,
                    self::ADO,
                    self::ADQ,
                    self::ADR,
                    self::ADS,
                    self::ADT,
                    self::ADU,
                    self::ADW,
                    self::ADX,
                    self::ADY,
                    self::ADZ,
                    self::AEA,
                    self::AEB,
                    self::AEC,
                    self::AED,
                    self::AEE,
                    self::AEK,
                    self::AEL,
                    self::AEM,
                    self::AEN,
                    self::AEQ,
                    self::AER,
                    self::AES,
                    self::AEU,
                    self::AEW,
                    self::AEY,
                    self::AEZ,
                    self::AFB,
                    self::AFD,
                    self::AFE,
                    self::AFG,
                    self::AFH,
                    self::AFI,
                    self::AFK,
                    self::AFN,
                    self::AFO,
                    self::AFP,
                    self::AFR,
                    self::AFS,
                    self::AFT,
                    self::AFU,
                    self::AFZ,
                    self::AGA,
                    self::AGB,
                    self::AGC,
                    self::AGD,
                    self::AGE,
                    self::AGF,
                    self::AGG,
                    self::AGH,
                    self::AGI,
                    self::AGJ,
                    self::AGK,
                    self::AGL,
                    self::AGM,
                    self::AGN,
                    self::AGO,
                    self::AGQ,
                    self::AGR,
                    self::AGS,
                    self::AGT,
                    self::AGU,
                    self::AGV,
                    self::AGW,
                    self::AGX,
                    self::AGY,
                    self::AGZ,
                    self::AHA,
                    self::AHB,
                    self::AHG,
                    self::AHH,
                    self::AHI,
                    self::AHK,
                    self::AHL,
                    self::AHM,
                    self::AHN,
                    self::AHO,
                    self::AHP,
                    self::AHR,
                    self::AHS,
                    self::AHT,
                    self::AIA,
                    self::AIB,
                    self::AIC,
                    self::AID,
                    self::AIE,
                    self::AIF,
                    self::AIG,
                    self::AIH,
                    self::AII,
                    self::AIJ,
                    self::AIK,
                    self::AIL,
                    self::AIM,
                    self::AIN,
                    self::AIO,
                    self::AIP,
                    self::AIQ,
                    self::AIR,
                    self::AIT,
                    self::AIW,
                    self::AIX,
                    self::AIY,
                    self::AJA,
                    self::AJG,
                    self::AJI,
                    self::AJN,
                    self::AJS,
                    self::AJU,
                    self::AJW,
                    self::AJZ,
                    self::AKA,
                    self::AKB,
                    self::AKC,
                    self::AKD,
                    self::AKE,
                    self::AKF,
                    self::AKG,
                    self::AKH,
                    self::AKI,
                    self::AKJ,
                    self::AKK,
                    self::AKL,
                    self::AKM,
                    self::AKO,
                    self::AKP,
                    self::AKQ,
                    self::AKR,
                    self::AKS,
                    self::AKT,
                    self::AKU,
                    self::AKV,
                    self::AKW,
                    self::AKX,
                    self::AKY,
                    self::AKZ,
                    self::ALA,
                    self::ALC,
                    self::ALD,
                    self::ALE,
                    self::ALF,
                    self::ALH,
                    self::ALI,
                    self::ALJ,
                    self::ALK,
                    self::ALL,
                    self::ALM,
                    self::ALN,
                    self::ALO,
                    self::ALP,
                    self::ALQ,
                    self::ALR,
                    self::ALS,
                    self::ALT,
                    self::ALU,
                    self::ALW,
                    self::ALX,
                    self::ALY,
                    self::ALZ,
                    self::AMA,
                    self::AMB,
                    self::AMC,
                    self::AME,
                    self::AMF,
                    self::AMG,
                    self::AMH,
                    self::AMI,
                    self::AMJ,
                    self::AMK,
                    self::AML,
                    self::AMM,
                    self::AMN,
                    self::AMO,
                    self::AMP,
                    self::AMQ,
                    self::AMR,
                    self::AMS,
                    self::AMT,
                    self::AMU,
                    self::AMV,
                    self::AMW,
                    self::AMX,
                    self::AMY,
                    self::AMZ,
                    self::ANA,
                    self::ANB,
                    self::ANC,
                    self::AND,
                    self::ANE,
                    self::ANF,
                    self::ANG,
                    self::ANH,
                    self::ANI,
                    self::ANJ,
                    self::ANK,
                    self::ANL,
                    self::ANM,
                    self::ANN,
                    self::ANO,
                    self::ANP,
                    self::ANQ,
                    self::ANR,
                    self::ANS,
                    self::ANT,
                    self::ANU,
                    self::ANV,
                    self::ANW,
                    self::ANX,
                    self::ANY,
                    self::ANZ,
                    self::AOA,
                    self::AOB,
                    self::AOC,
                    self::AOD,
                    self::AOE,
                    self::AOF,
                    self::AOG,
                    self::AOI,
                    self::AOJ,
                    self::AOK,
                    self::AOL,
                    self::AOM,
                    self::AON,
                    self::AOR,
                    self::AOS,
                    self::AOT,
                    self::AOU,
                    self::AOX,
                    self::AOZ,
                    self::APB,
                    self::APC,
                    self::APD,
                    self::APE,
                    self::APF,
                    self::APG,
                    self::APH,
                    self::API,
                    self::APJ,
                    self::APK,
                    self::APL,
                    self::APM,
                    self::APN,
                    self::APO,
                    self::APP,
                    self::APQ,
                    self::APR,
                    self::APS,
                    self::APT,
                    self::APU,
                    self::APV,
                    self::APW,
                    self::APX,
                    self::APY,
                    self::APZ,
                    self::AQC,
                    self::AQD,
                    self::AQG,
                    self::AQK,
                    self::AQM,
                    self::AQN,
                    self::AQP,
                    self::AQR,
                    self::AQT,
                    self::AQZ,
                    self::ARA,
                    self::ARB,
                    self::ARC,
                    self::ARD,
                    self::ARE,
                    self::ARG,
                    self::ARH,
                    self::ARI,
                    self::ARJ,
                    self::ARK,
                    self::ARL,
                    self::ARN,
                    self::ARO,
                    self::ARP,
                    self::ARQ,
                    self::ARR,
                    self::ARS,
                    self::ARU,
                    self::ARV,
                    self::ARW,
                    self::ARX,
                    self::ARY,
                    self::ARZ,
                    self::ASA,
                    self::ASB,
                    self::ASC,
                    self::ASE,
                    self::ASF,
                    self::ASG,
                    self::ASH,
                    self::ASI,
                    self::ASJ,
                    self::ASK,
                    self::ASL,
                    self::ASM,
                    self::ASN,
                    self::ASO,
                    self::ASP,
                    self::ASQ,
                    self::ASR,
                    self::ASS,
                    self::AST,
                    self::ASU,
                    self::ASV,
                    self::ASW,
                    self::ASX,
                    self::ASY,
                    self::ASZ,
                    self::ATA,
                    self::ATB,
                    self::ATC,
                    self::ATD,
                    self::ATE,
                    self::ATG,
                    self::ATI,
                    self::ATJ,
                    self::ATK,
                    self::ATL,
                    self::ATM,
                    self::ATN,
                    self::ATO,
                    self::ATP,
                    self::ATQ,
                    self::ATR,
                    self::ATS,
                    self::ATT,
                    self::ATU,
                    self::ATV,
                    self::ATW,
                    self::ATX,
                    self::ATY,
                    self::ATZ,
                    self::AUA,
                    self::AUB,
                    self::AUC,
                    self::AUD,
                    self::AUG,
                    self::AUH,
                    self::AUI,
                    self::AUJ,
                    self::AUK,
                    self::AUL,
                    self::AUM,
                    self::AUN,
                    self::AUO,
                    self::AUP,
                    self::AUQ,
                    self::AUR,
                    self::AUT,
                    self::AUU,
                    self::AUW,
                    self::AUX,
                    self::AUY,
                    self::AUZ,
                    self::AVA,
                    self::AVB,
                    self::AVD,
                    self::AVE,
                    self::AVI,
                    self::AVK,
                    self::AVL,
                    self::AVM,
                    self::AVN,
                    self::AVO,
                    self::AVS,
                    self::AVT,
                    self::AVU,
                    self::AVV,
                    self::AWA,
                    self::AWB,
                    self::AWC,
                    self::AWE,
                    self::AWG,
                    self::AWH,
                    self::AWI,
                    self::AWK,
                    self::AWM,
                    self::AWN,
                    self::AWO,
                    self::AWR,
                    self::AWS,
                    self::AWT,
                    self::AWU,
                    self::AWV,
                    self::AWW,
                    self::AWX,
                    self::AWY,
                    self::AXB,
                    self::AXE,
                    self::AXG,
                    self::AXK,
                    self::AXL,
                    self::AXM,
                    self::AXX,
                    self::AYA,
                    self::AYB,
                    self::AYC,
                    self::AYD,
                    self::AYE,
                    self::AYG,
                    self::AYH,
                    self::AYI,
                    self::AYK,
                    self::AYL,
                    self::AYM,
                    self::AYN,
                    self::AYO,
                    self::AYP,
                    self::AYQ,
                    self::AYR,
                    self::AYS,
                    self::AYT,
                    self::AYU,
                    self::AYZ,
                    self::AZA,
                    self::AZB,
                    self::AZD,
                    self::AZE,
                    self::AZG,
                    self::AZJ,
                    self::AZM,
                    self::AZN,
                    self::AZO,
                    self::AZT,
                    self::AZZ,
                    self::BAA,
                    self::BAB,
                    self::BAC,
                    self::BAE,
                    self::BAF,
                    self::BAG,
                    self::BAH,
                    self::BAJ,
                    self::BAK,
                    self::BAL,
                    self::BAM,
                    self::BAN,
                    self::BAO,
                    self::BAP,
                    self::BAR,
                    self::BAS,
                    self::BAU,
                    self::BAV,
                    self::BAW,
                    self::BAX,
                    self::BAY,
                    self::BBA,
                    self::BBB,
                    self::BBC,
                    self::BBD,
                    self::BBE,
                    self::BBF,
                    self::BBG,
                    self::BBH,
                    self::BBI,
                    self::BBJ,
                    self::BBK,
                    self::BBL,
                    self::BBM,
                    self::BBN,
                    self::BBO,
                    self::BBP,
                    self::BBQ,
                    self::BBR,
                    self::BBS,
                    self::BBT,
                    self::BBU,
                    self::BBV,
                    self::BBW,
                    self::BBX,
                    self::BBY,
                    self::BCA,
                    self::BCB,
                    self::BCC,
                    self::BCD,
                    self::BCE,
                    self::BCF,
                    self::BCG,
                    self::BCH,
                    self::BCI,
                    self::BCJ,
                    self::BCK,
                    self::BCL,
                    self::BCM,
                    self::BCN,
                    self::BCO,
                    self::BCP,
                    self::BCQ,
                    self::BCR,
                    self::BCS,
                    self::BCT,
                    self::BCU,
                    self::BCV,
                    self::BCW,
                    self::BCY,
                    self::BCZ,
                    self::BDA,
                    self::BDB,
                    self::BDC,
                    self::BDD,
                    self::BDE,
                    self::BDF,
                    self::BDG,
                    self::BDH,
                    self::BDI,
                    self::BDJ,
                    self::BDK,
                    self::BDL,
                    self::BDM,
                    self::BDN,
                    self::BDO,
                    self::BDP,
                    self::BDQ,
                    self::BDR,
                    self::BDS,
                    self::BDT,
                    self::BDU,
                    self::BDV,
                    self::BDW,
                    self::BDX,
                    self::BDY,
                    self::BDZ,
                    self::BEA,
                    self::BEB,
                    self::BEC,
                    self::BED,
                    self::BEE,
                    self::BEF,
                    self::BEG,
                    self::BEH,
                    self::BEI,
                    self::BEJ,
                    self::BEK,
                    self::BEL,
                    self::BEM,
                    self::BEN,
                    self::BEO,
                    self::BEP,
                    self::BEQ,
                    self::BES,
                    self::BET,
                    self::BEU,
                    self::BEV,
                    self::BEW,
                    self::BEX,
                    self::BEY,
                    self::BEZ,
                    self::BFA,
                    self::BFB,
                    self::BFC,
                    self::BFD,
                    self::BFE,
                    self::BFF,
                    self::BFG,
                    self::BFH,
                    self::BFI,
                    self::BFJ,
                    self::BFK,
                    self::BFL,
                    self::BFM,
                    self::BFN,
                    self::BFO,
                    self::BFP,
                    self::BFQ,
                    self::BFR,
                    self::BFS,
                    self::BFT,
                    self::BFU,
                    self::BFW,
                    self::BFX,
                    self::BFY,
                    self::BFZ,
                    self::BGA,
                    self::BGB,
                    self::BGC,
                    self::BGD,
                    self::BGE,
                    self::BGF,
                    self::BGG,
                    self::BGI,
                    self::BGJ,
                    self::BGK,
                    self::BGL,
                    self::BGN,
                    self::BGO,
                    self::BGP,
                    self::BGQ,
                    self::BGR,
                    self::BGS,
                    self::BGT,
                    self::BGU,
                    self::BGV,
                    self::BGW,
                    self::BGX,
                    self::BGY,
                    self::BGZ,
                    self::BHA,
                    self::BHB,
                    self::BHC,
                    self::BHD,
                    self::BHE,
                    self::BHF,
                    self::BHG,
                    self::BHH,
                    self::BHI,
                    self::BHJ,
                    self::BHL,
                    self::BHM,
                    self::BHN,
                    self::BHO,
                    self::BHP,
                    self::BHQ,
                    self::BHR,
                    self::BHS,
                    self::BHT,
                    self::BHU,
                    self::BHV,
                    self::BHW,
                    self::BHX,
                    self::BHY,
                    self::BHZ,
                    self::BIA,
                    self::BIB,
                    self::BID,
                    self::BIE,
                    self::BIF,
                    self::BIG,
                    self::BIK,
                    self::BIL,
                    self::BIM,
                    self::BIN,
                    self::BIO,
                    self::BIP,
                    self::BIQ,
                    self::BIR,
                    self::BIS,
                    self::BIT,
                    self::BIU,
                    self::BIV,
                    self::BIW,
                    self::BIX,
                    self::BIY,
                    self::BIZ,
                    self::BJA,
                    self::BJB,
                    self::BJC,
                    self::BJE,
                    self::BJF,
                    self::BJG,
                    self::BJH,
                    self::BJI,
                    self::BJJ,
                    self::BJK,
                    self::BJL,
                    self::BJM,
                    self::BJN,
                    self::BJO,
                    self::BJP,
                    self::BJR,
                    self::BJS,
                    self::BJT,
                    self::BJU,
                    self::BJV,
                    self::BJW,
                    self::BJX,
                    self::BJY,
                    self::BJZ,
                    self::BKA,
                    self::BKC,
                    self::BKD,
                    self::BKF,
                    self::BKG,
                    self::BKH,
                    self::BKI,
                    self::BKJ,
                    self::BKK,
                    self::BKL,
                    self::BKM,
                    self::BKN,
                    self::BKO,
                    self::BKP,
                    self::BKQ,
                    self::BKR,
                    self::BKS,
                    self::BKT,
                    self::BKU,
                    self::BKV,
                    self::BKW,
                    self::BKX,
                    self::BKY,
                    self::BKZ,
                    self::BLA,
                    self::BLB,
                    self::BLC,
                    self::BLD,
                    self::BLE,
                    self::BLF,
                    self::BLH,
                    self::BLI,
                    self::BLJ,
                    self::BLK,
                    self::BLL,
                    self::BLM,
                    self::BLN,
                    self::BLO,
                    self::BLP,
                    self::BLQ,
                    self::BLR,
                    self::BLS,
                    self::BLT,
                    self::BLV,
                    self::BLW,
                    self::BLX,
                    self::BLY,
                    self::BLZ,
                    self::BMA,
                    self::BMB,
                    self::BMC,
                    self::BMD,
                    self::BME,
                    self::BMF,
                    self::BMG,
                    self::BMH,
                    self::BMI,
                    self::BMJ,
                    self::BMK,
                    self::BML,
                    self::BMM,
                    self::BMN,
                    self::BMO,
                    self::BMP,
                    self::BMQ,
                    self::BMR,
                    self::BMS,
                    self::BMT,
                    self::BMU,
                    self::BMV,
                    self::BMW,
                    self::BMX,
                    self::BMZ,
                    self::BNA,
                    self::BNB,
                    self::BNC,
                    self::BND,
                    self::BNE,
                    self::BNF,
                    self::BNG,
                    self::BNI,
                    self::BNJ,
                    self::BNK,
                    self::BNL,
                    self::BNM,
                    self::BNN,
                    self::BNO,
                    self::BNP,
                    self::BNQ,
                    self::BNR,
                    self::BNS,
                    self::BNU,
                    self::BNV,
                    self::BNW,
                    self::BNX,
                    self::BNY,
                    self::BNZ,
                    self::BOA,
                    self::BOB,
                    self::BOD,
                    self::BOE,
                    self::BOF,
                    self::BOG,
                    self::BOH,
                    self::BOI,
                    self::BOJ,
                    self::BOK,
                    self::BOL,
                    self::BOM,
                    self::BON,
                    self::BOO,
                    self::BOP,
                    self::BOQ,
                    self::BOR,
                    self::BOS,
                    self::BOT,
                    self::BOU,
                    self::BOV,
                    self::BOW,
                    self::BOX,
                    self::BOY,
                    self::BOZ,
                    self::BPA,
                    self::BPC,
                    self::BPD,
                    self::BPE,
                    self::BPG,
                    self::BPH,
                    self::BPI,
                    self::BPJ,
                    self::BPK,
                    self::BPL,
                    self::BPM,
                    self::BPN,
                    self::BPO,
                    self::BPP,
                    self::BPQ,
                    self::BPR,
                    self::BPS,
                    self::BPT,
                    self::BPU,
                    self::BPV,
                    self::BPW,
                    self::BPX,
                    self::BPY,
                    self::BPZ,
                    self::BQA,
                    self::BQB,
                    self::BQC,
                    self::BQD,
                    self::BQF,
                    self::BQG,
                    self::BQH,
                    self::BQI,
                    self::BQJ,
                    self::BQK,
                    self::BQL,
                    self::BQM,
                    self::BQN,
                    self::BQO,
                    self::BQP,
                    self::BQQ,
                    self::BQR,
                    self::BQS,
                    self::BQT,
                    self::BQU,
                    self::BQV,
                    self::BQW,
                    self::BQX,
                    self::BQY,
                    self::BQZ,
                    self::BRA,
                    self::BRB,
                    self::BRC,
                    self::BRD,
                    self::BRE,
                    self::BRF,
                    self::BRG,
                    self::BRH,
                    self::BRI,
                    self::BRJ,
                    self::BRK,
                    self::BRL,
                    self::BRM,
                    self::BRN,
                    self::BRO,
                    self::BRP,
                    self::BRQ,
                    self::BRR,
                    self::BRS,
                    self::BRT,
                    self::BRU,
                    self::BRV,
                    self::BRW,
                    self::BRX,
                    self::BRY,
                    self::BRZ,
                    self::BSA,
                    self::BSB,
                    self::BSC,
                    self::BSE,
                    self::BSF,
                    self::BSG,
                    self::BSH,
                    self::BSI,
                    self::BSJ,
                    self::BSK,
                    self::BSL,
                    self::BSM,
                    self::BSN,
                    self::BSO,
                    self::BSP,
                    self::BSQ,
                    self::BSR,
                    self::BSS,
                    self::BST,
                    self::BSU,
                    self::BSV,
                    self::BSW,
                    self::BSX,
                    self::BSY,
                    self::BTA,
                    self::BTC,
                    self::BTD,
                    self::BTE,
                    self::BTF,
                    self::BTG,
                    self::BTH,
                    self::BTI,
                    self::BTJ,
                    self::BTM,
                    self::BTN,
                    self::BTO,
                    self::BTP,
                    self::BTQ,
                    self::BTR,
                    self::BTS,
                    self::BTT,
                    self::BTU,
                    self::BTV,
                    self::BTW,
                    self::BTX,
                    self::BTY,
                    self::BTZ,
                    self::BUA,
                    self::BUB,
                    self::BUC,
                    self::BUD,
                    self::BUE,
                    self::BUF,
                    self::BUG,
                    self::BUH,
                    self::BUI,
                    self::BUJ,
                    self::BUK,
                    self::BUL,
                    self::BUM,
                    self::BUN,
                    self::BUO,
                    self::BUP,
                    self::BUQ,
                    self::BUS,
                    self::BUT,
                    self::BUU,
                    self::BUV,
                    self::BUW,
                    self::BUX,
                    self::BUY,
                    self::BUZ,
                    self::BVA,
                    self::BVB,
                    self::BVC,
                    self::BVD,
                    self::BVE,
                    self::BVF,
                    self::BVG,
                    self::BVH,
                    self::BVI,
                    self::BVJ,
                    self::BVK,
                    self::BVL,
                    self::BVM,
                    self::BVN,
                    self::BVO,
                    self::BVP,
                    self::BVQ,
                    self::BVR,
                    self::BVT,
                    self::BVU,
                    self::BVV,
                    self::BVW,
                    self::BVX,
                    self::BVY,
                    self::BVZ,
                    self::BWA,
                    self::BWB,
                    self::BWC,
                    self::BWD,
                    self::BWE,
                    self::BWF,
                    self::BWG,
                    self::BWH,
                    self::BWI,
                    self::BWJ,
                    self::BWK,
                    self::BWL,
                    self::BWM,
                    self::BWN,
                    self::BWO,
                    self::BWP,
                    self::BWQ,
                    self::BWR,
                    self::BWS,
                    self::BWT,
                    self::BWU,
                    self::BWW,
                    self::BWX,
                    self::BWY,
                    self::BWZ,
                    self::BXA,
                    self::BXB,
                    self::BXC,
                    self::BXD,
                    self::BXE,
                    self::BXF,
                    self::BXG,
                    self::BXH,
                    self::BXI,
                    self::BXJ,
                    self::BXK,
                    self::BXL,
                    self::BXM,
                    self::BXN,
                    self::BXO,
                    self::BXP,
                    self::BXQ,
                    self::BXR,
                    self::BXS,
                    self::BXU,
                    self::BXV,
                    self::BXW,
                    self::BXZ,
                    self::BYA,
                    self::BYB,
                    self::BYC,
                    self::BYD,
                    self::BYE,
                    self::BYF,
                    self::BYG,
                    self::BYH,
                    self::BYI,
                    self::BYJ,
                    self::BYK,
                    self::BYL,
                    self::BYM,
                    self::BYN,
                    self::BYO,
                    self::BYP,
                    self::BYQ,
                    self::BYR,
                    self::BYS,
                    self::BYT,
                    self::BYV,
                    self::BYW,
                    self::BYX,
                    self::BYZ,
                    self::BZA,
                    self::BZB,
                    self::BZC,
                    self::BZD,
                    self::BZE,
                    self::BZF,
                    self::BZG,
                    self::BZH,
                    self::BZI,
                    self::BZJ,
                    self::BZK,
                    self::BZL,
                    self::BZM,
                    self::BZN,
                    self::BZO,
                    self::BZP,
                    self::BZQ,
                    self::BZR,
                    self::BZS,
                    self::BZT,
                    self::BZU,
                    self::BZV,
                    self::BZW,
                    self::BZX,
                    self::BZY,
                    self::BZZ,
                    self::CAA,
                    self::CAB,
                    self::CAC,
                    self::CAD,
                    self::CAE,
                    self::CAF,
                    self::CAG,
                    self::CAH,
                    self::CAJ,
                    self::CAK,
                    self::CAL,
                    self::CAM,
                    self::CAN,
                    self::CAO,
                    self::CAP,
                    self::CAQ,
                    self::CAR,
                    self::CAS,
                    self::CAT,
                    self::CAV,
                    self::CAW,
                    self::CAX,
                    self::CAY,
                    self::CAZ,
                    self::CBB,
                    self::CBC,
                    self::CBD,
                    self::CBG,
                    self::CBI,
                    self::CBJ,
                    self::CBK,
                    self::CBL,
                    self::CBN,
                    self::CBO,
                    self::CBQ,
                    self::CBR,
                    self::CBS,
                    self::CBT,
                    self::CBU,
                    self::CBV,
                    self::CBW,
                    self::CBY,
                    self::CCC,
                    self::CCD,
                    self::CCE,
                    self::CCG,
                    self::CCH,
                    self::CCJ,
                    self::CCL,
                    self::CCM,
                    self::CCO,
                    self::CCP,
                    self::CCR,
                    self::CDA,
                    self::CDE,
                    self::CDF,
                    self::CDH,
                    self::CDI,
                    self::CDJ,
                    self::CDM,
                    self::CDN,
                    self::CDO,
                    self::CDR,
                    self::CDS,
                    self::CDY,
                    self::CDZ,
                    self::CEA,
                    self::CEB,
                    self::CEG,
                    self::CEK,
                    self::CEN,
                    self::CES,
                    self::CET,
                    self::CEY,
                    self::CFA,
                    self::CFD,
                    self::CFG,
                    self::CFM,
                    self::CGA,
                    self::CGC,
                    self::CGG,
                    self::CGK,
                    self::CHA,
                    self::CHB,
                    self::CHC,
                    self::CHD,
                    self::CHE,
                    self::CHF,
                    self::CHG,
                    self::CHH,
                    self::CHJ,
                    self::CHK,
                    self::CHL,
                    self::CHM,
                    self::CHN,
                    self::CHO,
                    self::CHP,
                    self::CHQ,
                    self::CHR,
                    self::CHT,
                    self::CHU,
                    self::CHV,
                    self::CHW,
                    self::CHX,
                    self::CHY,
                    self::CHZ,
                    self::CIA,
                    self::CIB,
                    self::CIC,
                    self::CID,
                    self::CIE,
                    self::CIH,
                    self::CIK,
                    self::CIM,
                    self::CIN,
                    self::CIP,
                    self::CIR,
                    self::CIW,
                    self::CIY,
                    self::CJA,
                    self::CJE,
                    self::CJH,
                    self::CJI,
                    self::CJK,
                    self::CJM,
                    self::CJN,
                    self::CJO,
                    self::CJP,
                    self::CJS,
                    self::CJV,
                    self::CJY,
                    self::CKB,
                    self::CKH,
                    self::CKL,
                    self::CKM,
                    self::CKN,
                    self::CKO,
                    self::CKQ,
                    self::CKR,
                    self::CKS,
                    self::CKT,
                    self::CKU,
                    self::CKV,
                    self::CKX,
                    self::CKY,
                    self::CKZ,
                    self::CLA,
                    self::CLC,
                    self::CLD,
                    self::CLE,
                    self::CLH,
                    self::CLI,
                    self::CLJ,
                    self::CLK,
                    self::CLL,
                    self::CLM,
                    self::CLO,
                    self::CLS,
                    self::CLT,
                    self::CLU,
                    self::CLW,
                    self::CLY,
                    self::CMA,
                    self::CME,
                    self::CMG,
                    self::CMI,
                    self::CML,
                    self::CMM,
                    self::CMN,
                    self::CMO,
                    self::CMR,
                    self::CMS,
                    self::CMT,
                    self::CNA,
                    self::CNB,
                    self::CNC,
                    self::CNG,
                    self::CNH,
                    self::CNI,
                    self::CNK,
                    self::CNL,
                    self::CNO,
                    self::CNP,
                    self::CNQ,
                    self::CNR,
                    self::CNS,
                    self::CNT,
                    self::CNU,
                    self::CNW,
                    self::CNX,
                    self::COA,
                    self::COB,
                    self::COC,
                    self::COD,
                    self::COE,
                    self::COF,
                    self::COG,
                    self::COH,
                    self::COJ,
                    self::COK,
                    self::COL,
                    self::COM,
                    self::CON,
                    self::COO,
                    self::COP,
                    self::COQ,
                    self::COR,
                    self::COS,
                    self::COT,
                    self::COU,
                    self::COV,
                    self::COW,
                    self::COX,
                    self::COZ,
                    self::CPA,
                    self::CPB,
                    self::CPC,
                    self::CPG,
                    self::CPI,
                    self::CPN,
                    self::CPO,
                    self::CPS,
                    self::CPU,
                    self::CPX,
                    self::CPY,
                    self::CQD,
                    self::CRA,
                    self::CRB,
                    self::CRC,
                    self::CRD,
                    self::CRE,
                    self::CRF,
                    self::CRG,
                    self::CRH,
                    self::CRI,
                    self::CRJ,
                    self::CRK,
                    self::CRL,
                    self::CRM,
                    self::CRN,
                    self::CRO,
                    self::CRQ,
                    self::CRR,
                    self::CRS,
                    self::CRT,
                    self::CRV,
                    self::CRW,
                    self::CRX,
                    self::CRY,
                    self::CRZ,
                    self::CSA,
                    self::CSB,
                    self::CSC,
                    self::CSD,
                    self::CSE,
                    self::CSF,
                    self::CSG,
                    self::CSH,
                    self::CSI,
                    self::CSJ,
                    self::CSK,
                    self::CSL,
                    self::CSM,
                    self::CSN,
                    self::CSO,
                    self::CSP,
                    self::CSQ,
                    self::CSR,
                    self::CSS,
                    self::CST,
                    self::CSV,
                    self::CSW,
                    self::CSX,
                    self::CSY,
                    self::CSZ,
                    self::CTA,
                    self::CTC,
                    self::CTD,
                    self::CTE,
                    self::CTG,
                    self::CTH,
                    self::CTL,
                    self::CTM,
                    self::CTN,
                    self::CTO,
                    self::CTP,
                    self::CTS,
                    self::CTT,
                    self::CTU,
                    self::CTY,
                    self::CTZ,
                    self::CUA,
                    self::CUB,
                    self::CUC,
                    self::CUH,
                    self::CUI,
                    self::CUJ,
                    self::CUK,
                    self::CUL,
                    self::CUO,
                    self::CUP,
                    self::CUQ,
                    self::CUR,
                    self::CUT,
                    self::CUU,
                    self::CUV,
                    self::CUW,
                    self::CUX,
                    self::CUY,
                    self::CVG,
                    self::CVN,
                    self::CWA,
                    self::CWB,
                    self::CWD,
                    self::CWE,
                    self::CWG,
                    self::CWT,
                    self::CXH,
                    self::CYA,
                    self::CYB,
                    self::CYM,
                    self::CYO,
                    self::CZH,
                    self::CZK,
                    self::CZN,
                    self::CZO,
                    self::CZT,
                    self::DAA,
                    self::DAC,
                    self::DAD,
                    self::DAE,
                    self::DAG,
                    self::DAH,
                    self::DAI,
                    self::DAJ,
                    self::DAK,
                    self::DAL,
                    self::DAM,
                    self::DAN,
                    self::DAO,
                    self::DAQ,
                    self::DAR,
                    self::DAS,
                    self::DAU,
                    self::DAV,
                    self::DAW,
                    self::DAX,
                    self::DAZ,
                    self::DBA,
                    self::DBB,
                    self::DBD,
                    self::DBE,
                    self::DBF,
                    self::DBG,
                    self::DBI,
                    self::DBJ,
                    self::DBL,
                    self::DBM,
                    self::DBN,
                    self::DBO,
                    self::DBP,
                    self::DBQ,
                    self::DBR,
                    self::DBT,
                    self::DBU,
                    self::DBV,
                    self::DBW,
                    self::DBY,
                    self::DCC,
                    self::DCR,
                    self::DDA,
                    self::DDD,
                    self::DDE,
                    self::DDG,
                    self::DDI,
                    self::DDJ,
                    self::DDN,
                    self::DDO,
                    self::DDR,
                    self::DDS,
                    self::DDW,
                    self::DEC,
                    self::DED,
                    self::DEE,
                    self::DEF,
                    self::DEG,
                    self::DEH,
                    self::DEI,
                    self::DEL,
                    self::DEM,
                    self::DEN,
                    self::DEP,
                    self::DEQ,
                    self::DER,
                    self::DES,
                    self::DEU,
                    self::DEV,
                    self::DEZ,
                    self::DGA,
                    self::DGB,
                    self::DGC,
                    self::DGD,
                    self::DGE,
                    self::DGG,
                    self::DGH,
                    self::DGI,
                    self::DGK,
                    self::DGL,
                    self::DGN,
                    self::DGO,
                    self::DGR,
                    self::DGS,
                    self::DGT,
                    self::DGW,
                    self::DGX,
                    self::DGZ,
                    self::DHD,
                    self::DHG,
                    self::DHI,
                    self::DHL,
                    self::DHM,
                    self::DHN,
                    self::DHO,
                    self::DHR,
                    self::DHS,
                    self::DHU,
                    self::DHV,
                    self::DHW,
                    self::DHX,
                    self::DIA,
                    self::DIB,
                    self::DIC,
                    self::DID,
                    self::DIF,
                    self::DIG,
                    self::DIH,
                    self::DII,
                    self::DIJ,
                    self::DIK,
                    self::DIL,
                    self::DIM,
                    self::DIN,
                    self::DIO,
                    self::DIP,
                    self::DIQ,
                    self::DIR,
                    self::DIS,
                    self::DIU,
                    self::DIV,
                    self::DIW,
                    self::DIX,
                    self::DIY,
                    self::DIZ,
                    self::DJA,
                    self::DJB,
                    self::DJC,
                    self::DJD,
                    self::DJE,
                    self::DJF,
                    self::DJI,
                    self::DJJ,
                    self::DJK,
                    self::DJM,
                    self::DJN,
                    self::DJO,
                    self::DJR,
                    self::DJU,
                    self::DJW,
                    self::DKA,
                    self::DKG,
                    self::DKK,
                    self::DKR,
                    self::DKS,
                    self::DKX,
                    self::DLG,
                    self::DLK,
                    self::DLM,
                    self::DLN,
                    self::DMA,
                    self::DMB,
                    self::DMC,
                    self::DMD,
                    self::DME,
                    self::DMF,
                    self::DMG,
                    self::DMK,
                    self::DML,
                    self::DMM,
                    self::DMO,
                    self::DMR,
                    self::DMS,
                    self::DMU,
                    self::DMV,
                    self::DMW,
                    self::DMX,
                    self::DMY,
                    self::DNA,
                    self::DND,
                    self::DNE,
                    self::DNG,
                    self::DNI,
                    self::DNJ,
                    self::DNK,
                    self::DNN,
                    self::DNO,
                    self::DNR,
                    self::DNT,
                    self::DNU,
                    self::DNV,
                    self::DNW,
                    self::DNY,
                    self::DOA,
                    self::DOB,
                    self::DOC,
                    self::DOE,
                    self::DOF,
                    self::DOH,
                    self::DOI,
                    self::DOK,
                    self::DOL,
                    self::DON,
                    self::DOO,
                    self::DOP,
                    self::DOQ,
                    self::DOR,
                    self::DOS,
                    self::DOT,
                    self::DOV,
                    self::DOW,
                    self::DOX,
                    self::DOY,
                    self::DOZ,
                    self::DPP,
                    self::DRB,
                    self::DRC,
                    self::DRD,
                    self::DRE,
                    self::DRG,
                    self::DRI,
                    self::DRL,
                    self::DRN,
                    self::DRO,
                    self::DRQ,
                    self::DRS,
                    self::DRT,
                    self::DRU,
                    self::DRY,
                    self::DSB,
                    self::DSE,
                    self::DSH,
                    self::DSI,
                    self::DSK,
                    self::DSL,
                    self::DSN,
                    self::DSO,
                    self::DSQ,
                    self::DSZ,
                    self::DTA,
                    self::DTB,
                    self::DTD,
                    self::DTH,
                    self::DTI,
                    self::DTK,
                    self::DTM,
                    self::DTN,
                    self::DTO,
                    self::DTP,
                    self::DTR,
                    self::DTS,
                    self::DTT,
                    self::DTU,
                    self::DTY,
                    self::DUA,
                    self::DUB,
                    self::DUC,
                    self::DUE,
                    self::DUF,
                    self::DUG,
                    self::DUH,
                    self::DUI,
                    self::DUK,
                    self::DUL,
                    self::DUM,
                    self::DUN,
                    self::DUO,
                    self::DUP,
                    self::DUQ,
                    self::DUR,
                    self::DUS,
                    self::DUU,
                    self::DUV,
                    self::DUW,
                    self::DUX,
                    self::DUY,
                    self::DUZ,
                    self::DVA,
                    self::DWA,
                    self::DWK,
                    self::DWR,
                    self::DWS,
                    self::DWU,
                    self::DWW,
                    self::DWY,
                    self::DWZ,
                    self::DYA,
                    self::DYB,
                    self::DYD,
                    self::DYG,
                    self::DYI,
                    self::DYM,
                    self::DYN,
                    self::DYO,
                    self::DYR,
                    self::DYU,
                    self::DYY,
                    self::DZA,
                    self::DZD,
                    self::DZE,
                    self::DZG,
                    self::DZL,
                    self::DZN,
                    self::DZO,
                    self::EAA,
                    self::EBC,
                    self::EBG,
                    self::EBK,
                    self::EBO,
                    self::EBR,
                    self::EBU,
                    self::ECR,
                    self::ECS,
                    self::ECY,
                    self::EEE,
                    self::EFA,
                    self::EFE,
                    self::EFI,
                    self::EGA,
                    self::EGL,
                    self::EGM,
                    self::EGO,
                    self::EGY,
                    self::EHS,
                    self::EHU,
                    self::EIP,
                    self::EIT,
                    self::EIV,
                    self::EJA,
                    self::EKA,
                    self::EKE,
                    self::EKG,
                    self::EKI,
                    self::EKK,
                    self::EKL,
                    self::EKM,
                    self::EKO,
                    self::EKP,
                    self::EKR,
                    self::EKY,
                    self::ELE,
                    self::ELH,
                    self::ELI,
                    self::ELK,
                    self::ELL,
                    self::ELM,
                    self::ELO,
                    self::ELU,
                    self::ELX,
                    self::EMA,
                    self::EMB,
                    self::EME,
                    self::EMG,
                    self::EMI,
                    self::EMK,
                    self::EMM,
                    self::EMN,
                    self::EMP,
                    self::EMQ,
                    self::EMS,
                    self::EMU,
                    self::EMW,
                    self::EMX,
                    self::EMY,
                    self::EMZ,
                    self::ENA,
                    self::ENB,
                    self::ENC,
                    self::END,
                    self::ENF,
                    self::ENG,
                    self::ENH,
                    self::ENL,
                    self::ENM,
                    self::ENN,
                    self::ENO,
                    self::ENQ,
                    self::ENR,
                    self::ENU,
                    self::ENV,
                    self::ENW,
                    self::ENX,
                    self::EOT,
                    self::EPI,
                    self::EPO,
                    self::ERA,
                    self::ERG,
                    self::ERH,
                    self::ERI,
                    self::ERK,
                    self::ERO,
                    self::ERR,
                    self::ERS,
                    self::ERT,
                    self::ERW,
                    self::ESE,
                    self::ESG,
                    self::ESH,
                    self::ESI,
                    self::ESK,
                    self::ESL,
                    self::ESM,
                    self::ESN,
                    self::ESO,
                    self::ESQ,
                    self::ESS,
                    self::EST,
                    self::ESU,
                    self::ESY,
                    self::ETB,
                    self::ETC,
                    self::ETH,
                    self::ETN,
                    self::ETO,
                    self::ETR,
                    self::ETS,
                    self::ETT,
                    self::ETU,
                    self::ETX,
                    self::ETZ,
                    self::EUD,
                    self::EUS,
                    self::EVE,
                    self::EVH,
                    self::EVN,
                    self::EWE,
                    self::EWO,
                    self::EXT,
                    self::EYA,
                    self::EYO,
                    self::EZA,
                    self::EZE,
                    self::FAA,
                    self::FAB,
                    self::FAD,
                    self::FAF,
                    self::FAG,
                    self::FAH,
                    self::FAI,
                    self::FAJ,
                    self::FAK,
                    self::FAL,
                    self::FAM,
                    self::FAN,
                    self::FAO,
                    self::FAP,
                    self::FAR,
                    self::FAS,
                    self::FAT,
                    self::FAU,
                    self::FAX,
                    self::FAY,
                    self::FAZ,
                    self::FBL,
                    self::FCS,
                    self::FER,
                    self::FFI,
                    self::FFM,
                    self::FGR,
                    self::FIA,
                    self::FIE,
                    self::FIF,
                    self::FIJ,
                    self::FIL,
                    self::FIN,
                    self::FIP,
                    self::FIR,
                    self::FIT,
                    self::FIW,
                    self::FKK,
                    self::FKV,
                    self::FLA,
                    self::FLH,
                    self::FLI,
                    self::FLL,
                    self::FLN,
                    self::FLR,
                    self::FLY,
                    self::FMP,
                    self::FMU,
                    self::FNB,
                    self::FNG,
                    self::FNI,
                    self::FOD,
                    self::FOI,
                    self::FOM,
                    self::FON,
                    self::FOR,
                    self::FOS,
                    self::FPE,
                    self::FQS,
                    self::FRA,
                    self::FRC,
                    self::FRD,
                    self::FRK,
                    self::FRM,
                    self::FRO,
                    self::FRP,
                    self::FRQ,
                    self::FRR,
                    self::FRS,
                    self::FRT,
                    self::FRY,
                    self::FSE,
                    self::FSL,
                    self::FSS,
                    self::FUB,
                    self::FUC,
                    self::FUD,
                    self::FUE,
                    self::FUF,
                    self::FUH,
                    self::FUI,
                    self::FUJ,
                    self::FUL,
                    self::FUM,
                    self::FUN,
                    self::FUQ,
                    self::FUR,
                    self::FUT,
                    self::FUU,
                    self::FUV,
                    self::FUY,
                    self::FVR,
                    self::FWA,
                    self::FWE,
                    self::GAA,
                    self::GAB,
                    self::GAC,
                    self::GAD,
                    self::GAE,
                    self::GAF,
                    self::GAG,
                    self::GAH,
                    self::GAI,
                    self::GAJ,
                    self::GAK,
                    self::GAL,
                    self::GAM,
                    self::GAN,
                    self::GAO,
                    self::GAP,
                    self::GAQ,
                    self::GAR,
                    self::GAS,
                    self::GAT,
                    self::GAU,
                    self::GAW,
                    self::GAX,
                    self::GAY,
                    self::GAZ,
                    self::GBA,
                    self::GBB,
                    self::GBD,
                    self::GBE,
                    self::GBF,
                    self::GBG,
                    self::GBH,
                    self::GBI,
                    self::GBJ,
                    self::GBK,
                    self::GBL,
                    self::GBM,
                    self::GBN,
                    self::GBO,
                    self::GBP,
                    self::GBQ,
                    self::GBR,
                    self::GBS,
                    self::GBU,
                    self::GBV,
                    self::GBW,
                    self::GBX,
                    self::GBY,
                    self::GBZ,
                    self::GCC,
                    self::GCD,
                    self::GCE,
                    self::GCF,
                    self::GCL,
                    self::GCN,
                    self::GCR,
                    self::GCT,
                    self::GDA,
                    self::GDB,
                    self::GDC,
                    self::GDD,
                    self::GDE,
                    self::GDF,
                    self::GDG,
                    self::GDH,
                    self::GDI,
                    self::GDJ,
                    self::GDK,
                    self::GDL,
                    self::GDM,
                    self::GDN,
                    self::GDO,
                    self::GDQ,
                    self::GDR,
                    self::GDS,
                    self::GDT,
                    self::GDU,
                    self::GDX,
                    self::GEA,
                    self::GEB,
                    self::GEC,
                    self::GED,
                    self::GEF,
                    self::GEG,
                    self::GEH,
                    self::GEI,
                    self::GEJ,
                    self::GEK,
                    self::GEL,
                    self::GEQ,
                    self::GES,
                    self::GEV,
                    self::GEW,
                    self::GEX,
                    self::GEY,
                    self::GEZ,
                    self::GFK,
                    self::GFT,
                    self::GGA,
                    self::GGB,
                    self::GGD,
                    self::GGE,
                    self::GGG,
                    self::GGK,
                    self::GGL,
                    self::GGT,
                    self::GGU,
                    self::GGW,
                    self::GHA,
                    self::GHC,
                    self::GHE,
                    self::GHH,
                    self::GHK,
                    self::GHL,
                    self::GHN,
                    self::GHO,
                    self::GHR,
                    self::GHS,
                    self::GHT,
                    self::GIA,
                    self::GIB,
                    self::GIC,
                    self::GID,
                    self::GIE,
                    self::GIG,
                    self::GIH,
                    self::GII,
                    self::GIL,
                    self::GIM,
                    self::GIN,
                    self::GIP,
                    self::GIQ,
                    self::GIR,
                    self::GIS,
                    self::GIT,
                    self::GIU,
                    self::GIW,
                    self::GIX,
                    self::GIY,
                    self::GIZ,
                    self::GJK,
                    self::GJM,
                    self::GJN,
                    self::GJR,
                    self::GJU,
                    self::GKA,
                    self::GKD,
                    self::GKE,
                    self::GKN,
                    self::GKO,
                    self::GKP,
                    self::GKU,
                    self::GLA,
                    self::GLB,
                    self::GLC,
                    self::GLD,
                    self::GLE,
                    self::GLG,
                    self::GLH,
                    self::GLJ,
                    self::GLK,
                    self::GLL,
                    self::GLO,
                    self::GLR,
                    self::GLU,
                    self::GLV,
                    self::GLW,
                    self::GLY,
                    self::GMA,
                    self::GMB,
                    self::GMD,
                    self::GMG,
                    self::GMH,
                    self::GML,
                    self::GMM,
                    self::GMN,
                    self::GMR,
                    self::GMU,
                    self::GMV,
                    self::GMX,
                    self::GMY,
                    self::GMZ,
                    self::GNA,
                    self::GNB,
                    self::GNC,
                    self::GND,
                    self::GNE,
                    self::GNG,
                    self::GNH,
                    self::GNI,
                    self::GNJ,
                    self::GNK,
                    self::GNL,
                    self::GNM,
                    self::GNN,
                    self::GNO,
                    self::GNQ,
                    self::GNR,
                    self::GNT,
                    self::GNU,
                    self::GNW,
                    self::GNZ,
                    self::GOA,
                    self::GOB,
                    self::GOC,
                    self::GOD,
                    self::GOE,
                    self::GOF,
                    self::GOG,
                    self::GOH,
                    self::GOI,
                    self::GOJ,
                    self::GOK,
                    self::GOL,
                    self::GOM,
                    self::GON,
                    self::GOO,
                    self::GOP,
                    self::GOQ,
                    self::GOR,
                    self::GOS,
                    self::GOT,
                    self::GOU,
                    self::GOV,
                    self::GOW,
                    self::GOX,
                    self::GOY,
                    self::GOZ,
                    self::GPA,
                    self::GPE,
                    self::GPN,
                    self::GQA,
                    self::GQI,
                    self::GQN,
                    self::GQR,
                    self::GQU,
                    self::GRA,
                    self::GRB,
                    self::GRC,
                    self::GRD,
                    self::GRG,
                    self::GRH,
                    self::GRI,
                    self::GRJ,
                    self::GRM,
                    self::GRN,
                    self::GRO,
                    self::GRQ,
                    self::GRR,
                    self::GRS,
                    self::GRT,
                    self::GRU,
                    self::GRV,
                    self::GRW,
                    self::GRX,
                    self::GRY,
                    self::GRZ,
                    self::GSE,
                    self::GSG,
                    self::GSL,
                    self::GSM,
                    self::GSN,
                    self::GSO,
                    self::GSP,
                    self::GSS,
                    self::GSW,
                    self::GTA,
                    self::GTU,
                    self::GUA,
                    self::GUB,
                    self::GUC,
                    self::GUD,
                    self::GUE,
                    self::GUF,
                    self::GUG,
                    self::GUH,
                    self::GUI,
                    self::GUJ,
                    self::GUK,
                    self::GUL,
                    self::GUM,
                    self::GUN,
                    self::GUO,
                    self::GUP,
                    self::GUQ,
                    self::GUR,
                    self::GUS,
                    self::GUT,
                    self::GUU,
                    self::GUW,
                    self::GUX,
                    self::GUZ,
                    self::GVA,
                    self::GVC,
                    self::GVE,
                    self::GVF,
                    self::GVJ,
                    self::GVL,
                    self::GVM,
                    self::GVN,
                    self::GVO,
                    self::GVP,
                    self::GVR,
                    self::GVS,
                    self::GVY,
                    self::GWA,
                    self::GWB,
                    self::GWC,
                    self::GWD,
                    self::GWE,
                    self::GWF,
                    self::GWG,
                    self::GWI,
                    self::GWJ,
                    self::GWM,
                    self::GWN,
                    self::GWR,
                    self::GWT,
                    self::GWU,
                    self::GWW,
                    self::GWX,
                    self::GXX,
                    self::GYA,
                    self::GYB,
                    self::GYD,
                    self::GYE,
                    self::GYF,
                    self::GYG,
                    self::GYI,
                    self::GYL,
                    self::GYM,
                    self::GYN,
                    self::GYO,
                    self::GYR,
                    self::GYY,
                    self::GYZ,
                    self::GZA,
                    self::GZI,
                    self::GZN,
                    self::HAA,
                    self::HAB,
                    self::HAC,
                    self::HAD,
                    self::HAE,
                    self::HAF,
                    self::HAG,
                    self::HAH,
                    self::HAI,
                    self::HAJ,
                    self::HAK,
                    self::HAL,
                    self::HAM,
                    self::HAN,
                    self::HAO,
                    self::HAP,
                    self::HAQ,
                    self::HAR,
                    self::HAS,
                    self::HAT,
                    self::HAU,
                    self::HAV,
                    self::HAW,
                    self::HAX,
                    self::HAY,
                    self::HAZ,
                    self::HBA,
                    self::HBB,
                    self::HBN,
                    self::HBO,
                    self::HBS,
                    self::HBU,
                    self::HCA,
                    self::HCH,
                    self::HDN,
                    self::HDS,
                    self::HDY,
                    self::HEA,
                    self::HEB,
                    self::HED,
                    self::HEG,
                    self::HEH,
                    self::HEI,
                    self::HEM,
                    self::HER,
                    self::HGM,
                    self::HGW,
                    self::HHI,
                    self::HHR,
                    self::HHY,
                    self::HIA,
                    self::HIB,
                    self::HID,
                    self::HIF,
                    self::HIG,
                    self::HIH,
                    self::HII,
                    self::HIJ,
                    self::HIK,
                    self::HIL,
                    self::HIN,
                    self::HIO,
                    self::HIR,
                    self::HIT,
                    self::HIW,
                    self::HIX,
                    self::HJI,
                    self::HKA,
                    self::HKE,
                    self::HKH,
                    self::HKK,
                    self::HKN,
                    self::HKS,
                    self::HLA,
                    self::HLB,
                    self::HLD,
                    self::HLE,
                    self::HLT,
                    self::HLU,
                    self::HMA,
                    self::HMB,
                    self::HMC,
                    self::HMD,
                    self::HME,
                    self::HMF,
                    self::HMG,
                    self::HMH,
                    self::HMI,
                    self::HMJ,
                    self::HMK,
                    self::HML,
                    self::HMM,
                    self::HMN,
                    self::HMO,
                    self::HMP,
                    self::HMQ,
                    self::HMR,
                    self::HMS,
                    self::HMT,
                    self::HMU,
                    self::HMV,
                    self::HMW,
                    self::HMY,
                    self::HMZ,
                    self::HNA,
                    self::HND,
                    self::HNE,
                    self::HNG,
                    self::HNH,
                    self::HNI,
                    self::HNJ,
                    self::HNM,
                    self::HNN,
                    self::HNO,
                    self::HNS,
                    self::HNU,
                    self::HOA,
                    self::HOB,
                    self::HOC,
                    self::HOD,
                    self::HOE,
                    self::HOH,
                    self::HOI,
                    self::HOJ,
                    self::HOL,
                    self::HOM,
                    self::HOO,
                    self::HOP,
                    self::HOR,
                    self::HOS,
                    self::HOT,
                    self::HOV,
                    self::HOW,
                    self::HOY,
                    self::HOZ,
                    self::HPO,
                    self::HPS,
                    self::HRA,
                    self::HRC,
                    self::HRE,
                    self::HRK,
                    self::HRM,
                    self::HRO,
                    self::HRP,
                    self::HRT,
                    self::HRU,
                    self::HRV,
                    self::HRW,
                    self::HRX,
                    self::HRZ,
                    self::HSB,
                    self::HSH,
                    self::HSL,
                    self::HSN,
                    self::HSS,
                    self::HTI,
                    self::HTO,
                    self::HTS,
                    self::HTU,
                    self::HTX,
                    self::HUB,
                    self::HUC,
                    self::HUD,
                    self::HUE,
                    self::HUF,
                    self::HUG,
                    self::HUH,
                    self::HUI,
                    self::HUJ,
                    self::HUK,
                    self::HUL,
                    self::HUM,
                    self::HUN,
                    self::HUO,
                    self::HUP,
                    self::HUQ,
                    self::HUR,
                    self::HUS,
                    self::HUT,
                    self::HUU,
                    self::HUV,
                    self::HUW,
                    self::HUX,
                    self::HUY,
                    self::HUZ,
                    self::HVC,
                    self::HVE,
                    self::HVK,
                    self::HVN,
                    self::HVV,
                    self::HWA,
                    self::HWC,
                    self::HWO,
                    self::HYA,
                    self::HYE,
                    self::HYW,
                    self::IAI,
                    self::IAN,
                    self::IAR,
                    self::IBA,
                    self::IBB,
                    self::IBD,
                    self::IBE,
                    self::IBG,
                    self::IBH,
                    self::IBL,
                    self::IBM,
                    self::IBN,
                    self::IBO,
                    self::IBR,
                    self::IBU,
                    self::IBY,
                    self::ICA,
                    self::ICH,
                    self::ICL,
                    self::ICR,
                    self::IDA,
                    self::IDB,
                    self::IDC,
                    self::IDD,
                    self::IDE,
                    self::IDI,
                    self::IDO,
                    self::IDR,
                    self::IDS,
                    self::IDT,
                    self::IDU,
                    self::IFA,
                    self::IFB,
                    self::IFE,
                    self::IFF,
                    self::IFK,
                    self::IFM,
                    self::IFU,
                    self::IFY,
                    self::IGB,
                    self::IGE,
                    self::IGG,
                    self::IGL,
                    self::IGM,
                    self::IGN,
                    self::IGO,
                    self::IGS,
                    self::IGW,
                    self::IHB,
                    self::IHI,
                    self::IHP,
                    self::IHW,
                    self::III,
                    self::IIN,
                    self::IJC,
                    self::IJE,
                    self::IJJ,
                    self::IJN,
                    self::IJS,
                    self::IKE,
                    self::IKH,
                    self::IKI,
                    self::IKK,
                    self::IKL,
                    self::IKO,
                    self::IKP,
                    self::IKR,
                    self::IKS,
                    self::IKT,
                    self::IKU,
                    self::IKV,
                    self::IKW,
                    self::IKX,
                    self::IKZ,
                    self::ILA,
                    self::ILB,
                    self::ILE,
                    self::ILG,
                    self::ILI,
                    self::ILK,
                    self::ILM,
                    self::ILO,
                    self::ILP,
                    self::ILS,
                    self::ILU,
                    self::ILV,
                    self::IMA,
                    self::IMI,
                    self::IML,
                    self::IMN,
                    self::IMO,
                    self::IMR,
                    self::IMS,
                    self::IMT,
                    self::IMY,
                    self::INA,
                    self::INB,
                    self::IND,
                    self::ING,
                    self::INH,
                    self::INJ,
                    self::INL,
                    self::INM,
                    self::INN,
                    self::INO,
                    self::INP,
                    self::INS,
                    self::INT,
                    self::INZ,
                    self::IOR,
                    self::IOU,
                    self::IOW,
                    self::IPI,
                    self::IPK,
                    self::IPO,
                    self::IQU,
                    self::IQW,
                    self::IRE,
                    self::IRH,
                    self::IRI,
                    self::IRK,
                    self::IRN,
                    self::IRR,
                    self::IRU,
                    self::IRX,
                    self::IRY,
                    self::ISA,
                    self::ISC,
                    self::ISD,
                    self::ISE,
                    self::ISG,
                    self::ISH,
                    self::ISI,
                    self::ISK,
                    self::ISL,
                    self::ISM,
                    self::ISN,
                    self::ISO,
                    self::ISR,
                    self::IST,
                    self::ISU,
                    self::ISV,
                    self::ITA,
                    self::ITB,
                    self::ITD,
                    self::ITE,
                    self::ITI,
                    self::ITK,
                    self::ITL,
                    self::ITM,
                    self::ITO,
                    self::ITR,
                    self::ITS,
                    self::ITT,
                    self::ITV,
                    self::ITW,
                    self::ITX,
                    self::ITY,
                    self::ITZ,
                    self::IUM,
                    self::IVB,
                    self::IVV,
                    self::IWK,
                    self::IWM,
                    self::IWO,
                    self::IWS,
                    self::IXC,
                    self::IXL,
                    self::IYA,
                    self::IYO,
                    self::IYX,
                    self::IZH,
                    self::IZM,
                    self::IZR,
                    self::IZZ,
                    self::JAA,
                    self::JAB,
                    self::JAC,
                    self::JAD,
                    self::JAE,
                    self::JAF,
                    self::JAH,
                    self::JAJ,
                    self::JAK,
                    self::JAL,
                    self::JAM,
                    self::JAN,
                    self::JAO,
                    self::JAQ,
                    self::JAS,
                    self::JAT,
                    self::JAU,
                    self::JAV,
                    self::JAX,
                    self::JAY,
                    self::JAZ,
                    self::JBE,
                    self::JBI,
                    self::JBJ,
                    self::JBK,
                    self::JBM,
                    self::JBN,
                    self::JBO,
                    self::JBR,
                    self::JBT,
                    self::JBU,
                    self::JBW,
                    self::JCS,
                    self::JCT,
                    self::JDA,
                    self::JDG,
                    self::JDT,
                    self::JEB,
                    self::JEE,
                    self::JEH,
                    self::JEI,
                    self::JEK,
                    self::JEL,
                    self::JEN,
                    self::JER,
                    self::JET,
                    self::JEU,
                    self::JGB,
                    self::JGE,
                    self::JGK,
                    self::JGO,
                    self::JHI,
                    self::JHS,
                    self::JIA,
                    self::JIB,
                    self::JIC,
                    self::JID,
                    self::JIE,
                    self::JIG,
                    self::JIH,
                    self::JII,
                    self::JIL,
                    self::JIM,
                    self::JIO,
                    self::JIQ,
                    self::JIT,
                    self::JIU,
                    self::JIV,
                    self::JIY,
                    self::JJE,
                    self::JJR,
                    self::JKA,
                    self::JKM,
                    self::JKO,
                    self::JKP,
                    self::JKR,
                    self::JKS,
                    self::JKU,
                    self::JLE,
                    self::JLS,
                    self::JMA,
                    self::JMB,
                    self::JMC,
                    self::JMD,
                    self::JMI,
                    self::JML,
                    self::JMN,
                    self::JMR,
                    self::JMS,
                    self::JMW,
                    self::JMX,
                    self::JNA,
                    self::JND,
                    self::JNG,
                    self::JNI,
                    self::JNJ,
                    self::JNL,
                    self::JNS,
                    self::JOB,
                    self::JOD,
                    self::JOG,
                    self::JOR,
                    self::JOS,
                    self::JOW,
                    self::JPA,
                    self::JPN,
                    self::JPR,
                    self::JQR,
                    self::JRA,
                    self::JRB,
                    self::JRR,
                    self::JRT,
                    self::JRU,
                    self::JSL,
                    self::JUA,
                    self::JUB,
                    self::JUC,
                    self::JUD,
                    self::JUH,
                    self::JUI,
                    self::JUK,
                    self::JUL,
                    self::JUM,
                    self::JUN,
                    self::JUO,
                    self::JUP,
                    self::JUR,
                    self::JUS,
                    self::JUT,
                    self::JUU,
                    self::JUW,
                    self::JUY,
                    self::JVD,
                    self::JVN,
                    self::JWI,
                    self::JYA,
                    self::JYE,
                    self::JYY,
                    self::KAA,
                    self::KAB,
                    self::KAC,
                    self::KAD,
                    self::KAE,
                    self::KAF,
                    self::KAG,
                    self::KAH,
                    self::KAI,
                    self::KAJ,
                    self::KAK,
                    self::KAL,
                    self::KAM,
                    self::KAN,
                    self::KAO,
                    self::KAP,
                    self::KAQ,
                    self::KAS,
                    self::KAT,
                    self::KAU,
                    self::KAV,
                    self::KAW,
                    self::KAX,
                    self::KAY,
                    self::KAZ,
                    self::KBA,
                    self::KBB,
                    self::KBC,
                    self::KBD,
                    self::KBE,
                    self::KBG,
                    self::KBH,
                    self::KBI,
                    self::KBJ,
                    self::KBK,
                    self::KBL,
                    self::KBM,
                    self::KBN,
                    self::KBO,
                    self::KBP,
                    self::KBQ,
                    self::KBR,
                    self::KBS,
                    self::KBT,
                    self::KBU,
                    self::KBV,
                    self::KBW,
                    self::KBX,
                    self::KBY,
                    self::KBZ,
                    self::KCA,
                    self::KCB,
                    self::KCC,
                    self::KCD,
                    self::KCE,
                    self::KCF,
                    self::KCG,
                    self::KCH,
                    self::KCI,
                    self::KCJ,
                    self::KCK,
                    self::KCL,
                    self::KCM,
                    self::KCN,
                    self::KCO,
                    self::KCP,
                    self::KCQ,
                    self::KCR,
                    self::KCS,
                    self::KCT,
                    self::KCU,
                    self::KCV,
                    self::KCW,
                    self::KCX,
                    self::KCY,
                    self::KCZ,
                    self::KDA,
                    self::KDC,
                    self::KDD,
                    self::KDE,
                    self::KDF,
                    self::KDG,
                    self::KDH,
                    self::KDI,
                    self::KDJ,
                    self::KDK,
                    self::KDL,
                    self::KDM,
                    self::KDN,
                    self::KDP,
                    self::KDQ,
                    self::KDR,
                    self::KDT,
                    self::KDU,
                    self::KDW,
                    self::KDX,
                    self::KDY,
                    self::KDZ,
                    self::KEA,
                    self::KEB,
                    self::KEC,
                    self::KED,
                    self::KEE,
                    self::KEF,
                    self::KEG,
                    self::KEH,
                    self::KEI,
                    self::KEJ,
                    self::KEK,
                    self::KEL,
                    self::KEM,
                    self::KEN,
                    self::KEO,
                    self::KEP,
                    self::KEQ,
                    self::KER,
                    self::KES,
                    self::KET,
                    self::KEU,
                    self::KEV,
                    self::KEW,
                    self::KEX,
                    self::KEY,
                    self::KEZ,
                    self::KFA,
                    self::KFB,
                    self::KFC,
                    self::KFD,
                    self::KFE,
                    self::KFF,
                    self::KFG,
                    self::KFH,
                    self::KFI,
                    self::KFJ,
                    self::KFK,
                    self::KFL,
                    self::KFM,
                    self::KFN,
                    self::KFO,
                    self::KFP,
                    self::KFQ,
                    self::KFR,
                    self::KFS,
                    self::KFT,
                    self::KFU,
                    self::KFV,
                    self::KFW,
                    self::KFX,
                    self::KFY,
                    self::KFZ,
                    self::KGA,
                    self::KGB,
                    self::KGE,
                    self::KGF,
                    self::KGG,
                    self::KGI,
                    self::KGJ,
                    self::KGK,
                    self::KGL,
                    self::KGN,
                    self::KGO,
                    self::KGP,
                    self::KGQ,
                    self::KGR,
                    self::KGS,
                    self::KGT,
                    self::KGU,
                    self::KGV,
                    self::KGW,
                    self::KGX,
                    self::KGY,
                    self::KHA,
                    self::KHB,
                    self::KHC,
                    self::KHD,
                    self::KHE,
                    self::KHF,
                    self::KHG,
                    self::KHH,
                    self::KHJ,
                    self::KHK,
                    self::KHL,
                    self::KHM,
                    self::KHN,
                    self::KHO,
                    self::KHP,
                    self::KHQ,
                    self::KHR,
                    self::KHS,
                    self::KHT,
                    self::KHU,
                    self::KHV,
                    self::KHW,
                    self::KHX,
                    self::KHY,
                    self::KHZ,
                    self::KIA,
                    self::KIB,
                    self::KIC,
                    self::KID,
                    self::KIE,
                    self::KIF,
                    self::KIG,
                    self::KIH,
                    self::KII,
                    self::KIJ,
                    self::KIK,
                    self::KIL,
                    self::KIM,
                    self::KIN,
                    self::KIO,
                    self::KIP,
                    self::KIQ,
                    self::KIR,
                    self::KIS,
                    self::KIT,
                    self::KIU,
                    self::KIV,
                    self::KIW,
                    self::KIX,
                    self::KIY,
                    self::KIZ,
                    self::KJA,
                    self::KJB,
                    self::KJC,
                    self::KJD,
                    self::KJE,
                    self::KJG,
                    self::KJH,
                    self::KJI,
                    self::KJJ,
                    self::KJK,
                    self::KJL,
                    self::KJM,
                    self::KJN,
                    self::KJO,
                    self::KJP,
                    self::KJQ,
                    self::KJR,
                    self::KJS,
                    self::KJT,
                    self::KJU,
                    self::KJV,
                    self::KJX,
                    self::KJY,
                    self::KJZ,
                    self::KKA,
                    self::KKB,
                    self::KKC,
                    self::KKD,
                    self::KKE,
                    self::KKF,
                    self::KKG,
                    self::KKH,
                    self::KKI,
                    self::KKJ,
                    self::KKK,
                    self::KKL,
                    self::KKM,
                    self::KKN,
                    self::KKO,
                    self::KKP,
                    self::KKQ,
                    self::KKR,
                    self::KKS,
                    self::KKT,
                    self::KKU,
                    self::KKV,
                    self::KKW,
                    self::KKX,
                    self::KKY,
                    self::KKZ,
                    self::KLA,
                    self::KLB,
                    self::KLC,
                    self::KLD,
                    self::KLE,
                    self::KLF,
                    self::KLG,
                    self::KLH,
                    self::KLI,
                    self::KLJ,
                    self::KLK,
                    self::KLL,
                    self::KLM,
                    self::KLN,
                    self::KLO,
                    self::KLP,
                    self::KLQ,
                    self::KLR,
                    self::KLS,
                    self::KLT,
                    self::KLU,
                    self::KLV,
                    self::KLW,
                    self::KLX,
                    self::KLY,
                    self::KLZ,
                    self::KMA,
                    self::KMB,
                    self::KMC,
                    self::KMD,
                    self::KME,
                    self::KMF,
                    self::KMG,
                    self::KMH,
                    self::KMI,
                    self::KMJ,
                    self::KMK,
                    self::KML,
                    self::KMM,
                    self::KMN,
                    self::KMO,
                    self::KMP,
                    self::KMQ,
                    self::KMR,
                    self::KMS,
                    self::KMT,
                    self::KMU,
                    self::KMV,
                    self::KMW,
                    self::KMX,
                    self::KMY,
                    self::KMZ,
                    self::KNA,
                    self::KNB,
                    self::KNC,
                    self::KND,
                    self::KNE,
                    self::KNF,
                    self::KNG,
                    self::KNI,
                    self::KNJ,
                    self::KNK,
                    self::KNL,
                    self::KNM,
                    self::KNN,
                    self::KNO,
                    self::KNP,
                    self::KNQ,
                    self::KNR,
                    self::KNS,
                    self::KNT,
                    self::KNU,
                    self::KNV,
                    self::KNW,
                    self::KNX,
                    self::KNY,
                    self::KNZ,
                    self::KOA,
                    self::KOC,
                    self::KOD,
                    self::KOE,
                    self::KOF,
                    self::KOG,
                    self::KOH,
                    self::KOI,
                    self::KOK,
                    self::KOL,
                    self::KOM,
                    self::KON,
                    self::KOO,
                    self::KOP,
                    self::KOQ,
                    self::KOR,
                    self::KOS,
                    self::KOT,
                    self::KOU,
                    self::KOV,
                    self::KOW,
                    self::KOY,
                    self::KOZ,
                    self::KPA,
                    self::KPB,
                    self::KPC,
                    self::KPD,
                    self::KPE,
                    self::KPF,
                    self::KPG,
                    self::KPH,
                    self::KPI,
                    self::KPJ,
                    self::KPK,
                    self::KPL,
                    self::KPM,
                    self::KPN,
                    self::KPO,
                    self::KPQ,
                    self::KPR,
                    self::KPS,
                    self::KPT,
                    self::KPU,
                    self::KPV,
                    self::KPW,
                    self::KPX,
                    self::KPY,
                    self::KPZ,
                    self::KQA,
                    self::KQB,
                    self::KQC,
                    self::KQD,
                    self::KQE,
                    self::KQF,
                    self::KQG,
                    self::KQH,
                    self::KQI,
                    self::KQJ,
                    self::KQK,
                    self::KQL,
                    self::KQM,
                    self::KQN,
                    self::KQO,
                    self::KQP,
                    self::KQQ,
                    self::KQR,
                    self::KQS,
                    self::KQT,
                    self::KQU,
                    self::KQV,
                    self::KQW,
                    self::KQX,
                    self::KQY,
                    self::KQZ,
                    self::KRA,
                    self::KRB,
                    self::KRC,
                    self::KRD,
                    self::KRE,
                    self::KRF,
                    self::KRH,
                    self::KRI,
                    self::KRJ,
                    self::KRK,
                    self::KRL,
                    self::KRN,
                    self::KRP,
                    self::KRR,
                    self::KRS,
                    self::KRT,
                    self::KRU,
                    self::KRV,
                    self::KRW,
                    self::KRX,
                    self::KRY,
                    self::KRZ,
                    self::KSB,
                    self::KSC,
                    self::KSD,
                    self::KSE,
                    self::KSF,
                    self::KSG,
                    self::KSH,
                    self::KSI,
                    self::KSJ,
                    self::KSK,
                    self::KSL,
                    self::KSM,
                    self::KSN,
                    self::KSO,
                    self::KSP,
                    self::KSQ,
                    self::KSR,
                    self::KSS,
                    self::KST,
                    self::KSU,
                    self::KSV,
                    self::KSW,
                    self::KSX,
                    self::KSY,
                    self::KSZ,
                    self::KTA,
                    self::KTB,
                    self::KTC,
                    self::KTD,
                    self::KTE,
                    self::KTF,
                    self::KTG,
                    self::KTH,
                    self::KTI,
                    self::KTJ,
                    self::KTK,
                    self::KTL,
                    self::KTM,
                    self::KTN,
                    self::KTO,
                    self::KTP,
                    self::KTQ,
                    self::KTS,
                    self::KTT,
                    self::KTU,
                    self::KTV,
                    self::KTW,
                    self::KTX,
                    self::KTY,
                    self::KTZ,
                    self::KUA,
                    self::KUB,
                    self::KUC,
                    self::KUD,
                    self::KUE,
                    self::KUF,
                    self::KUG,
                    self::KUH,
                    self::KUI,
                    self::KUJ,
                    self::KUK,
                    self::KUL,
                    self::KUM,
                    self::KUN,
                    self::KUO,
                    self::KUP,
                    self::KUQ,
                    self::KUR,
                    self::KUS,
                    self::KUT,
                    self::KUU,
                    self::KUV,
                    self::KUW,
                    self::KUX,
                    self::KUY,
                    self::KUZ,
                    self::KVA,
                    self::KVB,
                    self::KVC,
                    self::KVD,
                    self::KVE,
                    self::KVF,
                    self::KVG,
                    self::KVH,
                    self::KVI,
                    self::KVJ,
                    self::KVK,
                    self::KVL,
                    self::KVM,
                    self::KVN,
                    self::KVO,
                    self::KVP,
                    self::KVQ,
                    self::KVR,
                    self::KVT,
                    self::KVU,
                    self::KVV,
                    self::KVW,
                    self::KVX,
                    self::KVY,
                    self::KVZ,
                    self::KWA,
                    self::KWB,
                    self::KWC,
                    self::KWD,
                    self::KWE,
                    self::KWF,
                    self::KWG,
                    self::KWH,
                    self::KWI,
                    self::KWJ,
                    self::KWK,
                    self::KWL,
                    self::KWM,
                    self::KWN,
                    self::KWO,
                    self::KWP,
                    self::KWR,
                    self::KWS,
                    self::KWT,
                    self::KWU,
                    self::KWV,
                    self::KWW,
                    self::KWX,
                    self::KWY,
                    self::KWZ,
                    self::KXA,
                    self::KXB,
                    self::KXC,
                    self::KXD,
                    self::KXF,
                    self::KXH,
                    self::KXI,
                    self::KXJ,
                    self::KXK,
                    self::KXM,
                    self::KXN,
                    self::KXO,
                    self::KXP,
                    self::KXQ,
                    self::KXR,
                    self::KXS,
                    self::KXT,
                    self::KXV,
                    self::KXW,
                    self::KXX,
                    self::KXY,
                    self::KXZ,
                    self::KYA,
                    self::KYB,
                    self::KYC,
                    self::KYD,
                    self::KYE,
                    self::KYF,
                    self::KYG,
                    self::KYH,
                    self::KYI,
                    self::KYJ,
                    self::KYK,
                    self::KYL,
                    self::KYM,
                    self::KYN,
                    self::KYO,
                    self::KYP,
                    self::KYQ,
                    self::KYR,
                    self::KYS,
                    self::KYT,
                    self::KYU,
                    self::KYV,
                    self::KYW,
                    self::KYX,
                    self::KYY,
                    self::KYZ,
                    self::KZA,
                    self::KZB,
                    self::KZC,
                    self::KZD,
                    self::KZE,
                    self::KZF,
                    self::KZG,
                    self::KZI,
                    self::KZK,
                    self::KZL,
                    self::KZM,
                    self::KZN,
                    self::KZO,
                    self::KZP,
                    self::KZQ,
                    self::KZR,
                    self::KZS,
                    self::KZU,
                    self::KZV,
                    self::KZW,
                    self::KZX,
                    self::KZY,
                    self::KZZ,
                    self::LAA,
                    self::LAB,
                    self::LAC,
                    self::LAD,
                    self::LAE,
                    self::LAF,
                    self::LAG,
                    self::LAH,
                    self::LAI,
                    self::LAJ,
                    self::LAL,
                    self::LAM,
                    self::LAN,
                    self::LAO,
                    self::LAP,
                    self::LAQ,
                    self::LAR,
                    self::LAS,
                    self::LAT,
                    self::LAU,
                    self::LAV,
                    self::LAW,
                    self::LAX,
                    self::LAY,
                    self::LAZ,
                    self::LBB,
                    self::LBC,
                    self::LBE,
                    self::LBF,
                    self::LBG,
                    self::LBI,
                    self::LBJ,
                    self::LBK,
                    self::LBL,
                    self::LBM,
                    self::LBN,
                    self::LBO,
                    self::LBQ,
                    self::LBR,
                    self::LBS,
                    self::LBT,
                    self::LBU,
                    self::LBV,
                    self::LBW,
                    self::LBX,
                    self::LBY,
                    self::LBZ,
                    self::LCC,
                    self::LCD,
                    self::LCE,
                    self::LCF,
                    self::LCH,
                    self::LCL,
                    self::LCM,
                    self::LCP,
                    self::LCQ,
                    self::LCS,
                    self::LDA,
                    self::LDB,
                    self::LDD,
                    self::LDG,
                    self::LDH,
                    self::LDI,
                    self::LDJ,
                    self::LDK,
                    self::LDL,
                    self::LDM,
                    self::LDN,
                    self::LDO,
                    self::LDP,
                    self::LDQ,
                    self::LEA,
                    self::LEB,
                    self::LEC,
                    self::LED,
                    self::LEE,
                    self::LEF,
                    self::LEH,
                    self::LEI,
                    self::LEJ,
                    self::LEK,
                    self::LEL,
                    self::LEM,
                    self::LEN,
                    self::LEO,
                    self::LEP,
                    self::LEQ,
                    self::LER,
                    self::LES,
                    self::LET,
                    self::LEU,
                    self::LEV,
                    self::LEW,
                    self::LEX,
                    self::LEY,
                    self::LEZ,
                    self::LFA,
                    self::LFN,
                    self::LGA,
                    self::LGB,
                    self::LGG,
                    self::LGH,
                    self::LGI,
                    self::LGK,
                    self::LGL,
                    self::LGM,
                    self::LGN,
                    self::LGO,
                    self::LGQ,
                    self::LGR,
                    self::LGS,
                    self::LGT,
                    self::LGU,
                    self::LGZ,
                    self::LHA,
                    self::LHH,
                    self::LHI,
                    self::LHL,
                    self::LHM,
                    self::LHN,
                    self::LHP,
                    self::LHS,
                    self::LHT,
                    self::LHU,
                    self::LIA,
                    self::LIB,
                    self::LIC,
                    self::LID,
                    self::LIE,
                    self::LIF,
                    self::LIG,
                    self::LIH,
                    self::LIJ,
                    self::LIK,
                    self::LIL,
                    self::LIM,
                    self::LIN,
                    self::LIO,
                    self::LIP,
                    self::LIQ,
                    self::LIR,
                    self::LIS,
                    self::LIT,
                    self::LIU,
                    self::LIV,
                    self::LIW,
                    self::LIX,
                    self::LIY,
                    self::LIZ,
                    self::LJA,
                    self::LJE,
                    self::LJI,
                    self::LJL,
                    self::LJP,
                    self::LJW,
                    self::LJX,
                    self::LKA,
                    self::LKB,
                    self::LKC,
                    self::LKD,
                    self::LKE,
                    self::LKH,
                    self::LKI,
                    self::LKJ,
                    self::LKL,
                    self::LKM,
                    self::LKN,
                    self::LKO,
                    self::LKR,
                    self::LKS,
                    self::LKT,
                    self::LKU,
                    self::LKY,
                    self::LLA,
                    self::LLB,
                    self::LLC,
                    self::LLD,
                    self::LLE,
                    self::LLF,
                    self::LLG,
                    self::LLH,
                    self::LLI,
                    self::LLJ,
                    self::LLK,
                    self::LLL,
                    self::LLM,
                    self::LLN,
                    self::LLP,
                    self::LLQ,
                    self::LLS,
                    self::LLU,
                    self::LLX,
                    self::LMA,
                    self::LMB,
                    self::LMC,
                    self::LMD,
                    self::LME,
                    self::LMF,
                    self::LMG,
                    self::LMH,
                    self::LMI,
                    self::LMJ,
                    self::LMK,
                    self::LML,
                    self::LMN,
                    self::LMO,
                    self::LMP,
                    self::LMQ,
                    self::LMR,
                    self::LMU,
                    self::LMV,
                    self::LMW,
                    self::LMX,
                    self::LMY,
                    self::LNA,
                    self::LNB,
                    self::LND,
                    self::LNG,
                    self::LNH,
                    self::LNI,
                    self::LNJ,
                    self::LNL,
                    self::LNM,
                    self::LNN,
                    self::LNS,
                    self::LNU,
                    self::LNW,
                    self::LNZ,
                    self::LOA,
                    self::LOB,
                    self::LOC,
                    self::LOE,
                    self::LOF,
                    self::LOG,
                    self::LOH,
                    self::LOI,
                    self::LOJ,
                    self::LOK,
                    self::LOL,
                    self::LOM,
                    self::LON,
                    self::LOO,
                    self::LOP,
                    self::LOQ,
                    self::LOR,
                    self::LOS,
                    self::LOT,
                    self::LOU,
                    self::LOV,
                    self::LOW,
                    self::LOX,
                    self::LOY,
                    self::LOZ,
                    self::LPA,
                    self::LPE,
                    self::LPN,
                    self::LPO,
                    self::LPX,
                    self::LQR,
                    self::LRA,
                    self::LRC,
                    self::LRE,
                    self::LRG,
                    self::LRI,
                    self::LRK,
                    self::LRL,
                    self::LRM,
                    self::LRN,
                    self::LRO,
                    self::LRR,
                    self::LRT,
                    self::LRV,
                    self::LRZ,
                    self::LSA,
                    self::LSB,
                    self::LSC,
                    self::LSD,
                    self::LSE,
                    self::LSH,
                    self::LSI,
                    self::LSL,
                    self::LSM,
                    self::LSN,
                    self::LSO,
                    self::LSP,
                    self::LSR,
                    self::LSS,
                    self::LST,
                    self::LSV,
                    self::LSW,
                    self::LSY,
                    self::LTC,
                    self::LTG,
                    self::LTH,
                    self::LTI,
                    self::LTN,
                    self::LTO,
                    self::LTS,
                    self::LTU,
                    self::LTZ,
                    self::LUA,
                    self::LUB,
                    self::LUC,
                    self::LUD,
                    self::LUE,
                    self::LUF,
                    self::LUG,
                    self::LUH,
                    self::LUI,
                    self::LUJ,
                    self::LUK,
                    self::LUL,
                    self::LUM,
                    self::LUN,
                    self::LUO,
                    self::LUP,
                    self::LUQ,
                    self::LUR,
                    self::LUS,
                    self::LUT,
                    self::LUU,
                    self::LUV,
                    self::LUW,
                    self::LUY,
                    self::LUZ,
                    self::LVA,
                    self::LVI,
                    self::LVK,
                    self::LVL,
                    self::LVS,
                    self::LVU,
                    self::LWA,
                    self::LWE,
                    self::LWG,
                    self::LWH,
                    self::LWL,
                    self::LWM,
                    self::LWO,
                    self::LWS,
                    self::LWT,
                    self::LWU,
                    self::LWW,
                    self::LXM,
                    self::LYA,
                    self::LYG,
                    self::LYN,
                    self::LZH,
                    self::LZL,
                    self::LZN,
                    self::LZZ,
                    self::MAA,
                    self::MAB,
                    self::MAD,
                    self::MAE,
                    self::MAF,
                    self::MAG,
                    self::MAH,
                    self::MAI,
                    self::MAJ,
                    self::MAK,
                    self::MAL,
                    self::MAM,
                    self::MAN,
                    self::MAQ,
                    self::MAR,
                    self::MAS,
                    self::MAT,
                    self::MAU,
                    self::MAV,
                    self::MAW,
                    self::MAX,
                    self::MAZ,
                    self::MBA,
                    self::MBB,
                    self::MBC,
                    self::MBD,
                    self::MBE,
                    self::MBF,
                    self::MBH,
                    self::MBI,
                    self::MBJ,
                    self::MBK,
                    self::MBL,
                    self::MBM,
                    self::MBN,
                    self::MBO,
                    self::MBP,
                    self::MBQ,
                    self::MBR,
                    self::MBS,
                    self::MBT,
                    self::MBU,
                    self::MBV,
                    self::MBW,
                    self::MBX,
                    self::MBY,
                    self::MBZ,
                    self::MCA,
                    self::MCB,
                    self::MCC,
                    self::MCD,
                    self::MCE,
                    self::MCF,
                    self::MCG,
                    self::MCH,
                    self::MCI,
                    self::MCJ,
                    self::MCK,
                    self::MCL,
                    self::MCM,
                    self::MCN,
                    self::MCO,
                    self::MCP,
                    self::MCQ,
                    self::MCR,
                    self::MCS,
                    self::MCT,
                    self::MCU,
                    self::MCV,
                    self::MCW,
                    self::MCX,
                    self::MCY,
                    self::MCZ,
                    self::MDA,
                    self::MDB,
                    self::MDC,
                    self::MDD,
                    self::MDE,
                    self::MDF,
                    self::MDG,
                    self::MDH,
                    self::MDI,
                    self::MDJ,
                    self::MDK,
                    self::MDL,
                    self::MDM,
                    self::MDN,
                    self::MDP,
                    self::MDQ,
                    self::MDR,
                    self::MDS,
                    self::MDT,
                    self::MDU,
                    self::MDV,
                    self::MDW,
                    self::MDX,
                    self::MDY,
                    self::MDZ,
                    self::MEA,
                    self::MEB,
                    self::MEC,
                    self::MED,
                    self::MEE,
                    self::MEF,
                    self::MEH,
                    self::MEI,
                    self::MEJ,
                    self::MEK,
                    self::MEL,
                    self::MEM,
                    self::MEN,
                    self::MEO,
                    self::MEP,
                    self::MEQ,
                    self::MER,
                    self::MES,
                    self::MET,
                    self::MEU,
                    self::MEV,
                    self::MEW,
                    self::MEY,
                    self::MEZ,
                    self::MFA,
                    self::MFB,
                    self::MFC,
                    self::MFD,
                    self::MFE,
                    self::MFF,
                    self::MFG,
                    self::MFH,
                    self::MFI,
                    self::MFJ,
                    self::MFK,
                    self::MFL,
                    self::MFM,
                    self::MFN,
                    self::MFO,
                    self::MFP,
                    self::MFQ,
                    self::MFR,
                    self::MFS,
                    self::MFT,
                    self::MFU,
                    self::MFV,
                    self::MFW,
                    self::MFX,
                    self::MFY,
                    self::MFZ,
                    self::MGA,
                    self::MGB,
                    self::MGC,
                    self::MGD,
                    self::MGE,
                    self::MGF,
                    self::MGG,
                    self::MGH,
                    self::MGI,
                    self::MGJ,
                    self::MGK,
                    self::MGL,
                    self::MGM,
                    self::MGN,
                    self::MGO,
                    self::MGP,
                    self::MGQ,
                    self::MGR,
                    self::MGS,
                    self::MGT,
                    self::MGU,
                    self::MGV,
                    self::MGW,
                    self::MGY,
                    self::MGZ,
                    self::MHA,
                    self::MHB,
                    self::MHC,
                    self::MHD,
                    self::MHE,
                    self::MHF,
                    self::MHG,
                    self::MHI,
                    self::MHJ,
                    self::MHK,
                    self::MHL,
                    self::MHM,
                    self::MHN,
                    self::MHO,
                    self::MHP,
                    self::MHQ,
                    self::MHR,
                    self::MHS,
                    self::MHT,
                    self::MHU,
                    self::MHW,
                    self::MHX,
                    self::MHY,
                    self::MHZ,
                    self::MIA,
                    self::MIB,
                    self::MIC,
                    self::MID,
                    self::MIE,
                    self::MIF,
                    self::MIG,
                    self::MIH,
                    self::MII,
                    self::MIJ,
                    self::MIK,
                    self::MIL,
                    self::MIM,
                    self::MIN,
                    self::MIO,
                    self::MIP,
                    self::MIQ,
                    self::MIR,
                    self::MIS,
                    self::MIT,
                    self::MIU,
                    self::MIW,
                    self::MIX,
                    self::MIY,
                    self::MIZ,
                    self::MJB,
                    self::MJC,
                    self::MJD,
                    self::MJE,
                    self::MJG,
                    self::MJH,
                    self::MJI,
                    self::MJJ,
                    self::MJK,
                    self::MJL,
                    self::MJM,
                    self::MJN,
                    self::MJO,
                    self::MJP,
                    self::MJQ,
                    self::MJR,
                    self::MJS,
                    self::MJT,
                    self::MJU,
                    self::MJV,
                    self::MJW,
                    self::MJX,
                    self::MJY,
                    self::MJZ,
                    self::MKA,
                    self::MKB,
                    self::MKC,
                    self::MKD,
                    self::MKE,
                    self::MKF,
                    self::MKG,
                    self::MKI,
                    self::MKJ,
                    self::MKK,
                    self::MKL,
                    self::MKM,
                    self::MKN,
                    self::MKO,
                    self::MKP,
                    self::MKQ,
                    self::MKR,
                    self::MKS,
                    self::MKT,
                    self::MKU,
                    self::MKV,
                    self::MKW,
                    self::MKX,
                    self::MKY,
                    self::MKZ,
                    self::MLA,
                    self::MLB,
                    self::MLC,
                    self::MLE,
                    self::MLF,
                    self::MLG,
                    self::MLH,
                    self::MLI,
                    self::MLJ,
                    self::MLK,
                    self::MLL,
                    self::MLM,
                    self::MLN,
                    self::MLO,
                    self::MLP,
                    self::MLQ,
                    self::MLR,
                    self::MLS,
                    self::MLT,
                    self::MLU,
                    self::MLV,
                    self::MLW,
                    self::MLX,
                    self::MLZ,
                    self::MMA,
                    self::MMB,
                    self::MMC,
                    self::MMD,
                    self::MME,
                    self::MMF,
                    self::MMG,
                    self::MMH,
                    self::MMI,
                    self::MMJ,
                    self::MMK,
                    self::MML,
                    self::MMM,
                    self::MMN,
                    self::MMO,
                    self::MMP,
                    self::MMQ,
                    self::MMR,
                    self::MMT,
                    self::MMU,
                    self::MMV,
                    self::MMW,
                    self::MMX,
                    self::MMY,
                    self::MMZ,
                    self::MNA,
                    self::MNB,
                    self::MNC,
                    self::MND,
                    self::MNE,
                    self::MNF,
                    self::MNG,
                    self::MNH,
                    self::MNI,
                    self::MNJ,
                    self::MNK,
                    self::MNL,
                    self::MNM,
                    self::MNN,
                    self::MNP,
                    self::MNQ,
                    self::MNR,
                    self::MNS,
                    self::MNU,
                    self::MNV,
                    self::MNW,
                    self::MNX,
                    self::MNY,
                    self::MNZ,
                    self::MOA,
                    self::MOC,
                    self::MOD,
                    self::MOE,
                    self::MOG,
                    self::MOH,
                    self::MOI,
                    self::MOJ,
                    self::MOK,
                    self::MOM,
                    self::MON,
                    self::MOO,
                    self::MOP,
                    self::MOQ,
                    self::MOR,
                    self::MOS,
                    self::MOT,
                    self::MOU,
                    self::MOV,
                    self::MOW,
                    self::MOX,
                    self::MOY,
                    self::MOZ,
                    self::MPA,
                    self::MPB,
                    self::MPC,
                    self::MPD,
                    self::MPE,
                    self::MPG,
                    self::MPH,
                    self::MPI,
                    self::MPJ,
                    self::MPK,
                    self::MPL,
                    self::MPM,
                    self::MPN,
                    self::MPO,
                    self::MPP,
                    self::MPQ,
                    self::MPR,
                    self::MPS,
                    self::MPT,
                    self::MPU,
                    self::MPV,
                    self::MPW,
                    self::MPX,
                    self::MPY,
                    self::MPZ,
                    self::MQA,
                    self::MQB,
                    self::MQC,
                    self::MQE,
                    self::MQF,
                    self::MQG,
                    self::MQH,
                    self::MQI,
                    self::MQJ,
                    self::MQK,
                    self::MQL,
                    self::MQM,
                    self::MQN,
                    self::MQO,
                    self::MQP,
                    self::MQQ,
                    self::MQR,
                    self::MQS,
                    self::MQT,
                    self::MQU,
                    self::MQV,
                    self::MQW,
                    self::MQX,
                    self::MQY,
                    self::MQZ,
                    self::MRA,
                    self::MRB,
                    self::MRC,
                    self::MRD,
                    self::MRE,
                    self::MRF,
                    self::MRG,
                    self::MRH,
                    self::MRI,
                    self::MRJ,
                    self::MRK,
                    self::MRL,
                    self::MRM,
                    self::MRN,
                    self::MRO,
                    self::MRP,
                    self::MRQ,
                    self::MRR,
                    self::MRS,
                    self::MRT,
                    self::MRU,
                    self::MRV,
                    self::MRW,
                    self::MRX,
                    self::MRY,
                    self::MRZ,
                    self::MSA,
                    self::MSB,
                    self::MSC,
                    self::MSD,
                    self::MSE,
                    self::MSF,
                    self::MSG,
                    self::MSH,
                    self::MSI,
                    self::MSJ,
                    self::MSK,
                    self::MSL,
                    self::MSM,
                    self::MSN,
                    self::MSO,
                    self::MSP,
                    self::MSQ,
                    self::MSR,
                    self::MSS,
                    self::MSU,
                    self::MSV,
                    self::MSW,
                    self::MSX,
                    self::MSY,
                    self::MSZ,
                    self::MTA,
                    self::MTB,
                    self::MTC,
                    self::MTD,
                    self::MTE,
                    self::MTF,
                    self::MTG,
                    self::MTH,
                    self::MTI,
                    self::MTJ,
                    self::MTK,
                    self::MTL,
                    self::MTM,
                    self::MTN,
                    self::MTO,
                    self::MTP,
                    self::MTQ,
                    self::MTR,
                    self::MTS,
                    self::MTT,
                    self::MTU,
                    self::MTV,
                    self::MTW,
                    self::MTX,
                    self::MTY,
                    self::MUA,
                    self::MUB,
                    self::MUC,
                    self::MUD,
                    self::MUE,
                    self::MUG,
                    self::MUH,
                    self::MUI,
                    self::MUJ,
                    self::MUK,
                    self::MUL,
                    self::MUM,
                    self::MUO,
                    self::MUP,
                    self::MUQ,
                    self::MUR,
                    self::MUS,
                    self::MUT,
                    self::MUU,
                    self::MUV,
                    self::MUX,
                    self::MUY,
                    self::MUZ,
                    self::MVA,
                    self::MVB,
                    self::MVD,
                    self::MVE,
                    self::MVF,
                    self::MVG,
                    self::MVH,
                    self::MVI,
                    self::MVK,
                    self::MVL,
                    self::MVN,
                    self::MVO,
                    self::MVP,
                    self::MVQ,
                    self::MVR,
                    self::MVS,
                    self::MVT,
                    self::MVU,
                    self::MVV,
                    self::MVW,
                    self::MVX,
                    self::MVY,
                    self::MVZ,
                    self::MWA,
                    self::MWB,
                    self::MWC,
                    self::MWE,
                    self::MWF,
                    self::MWG,
                    self::MWH,
                    self::MWI,
                    self::MWK,
                    self::MWL,
                    self::MWM,
                    self::MWN,
                    self::MWO,
                    self::MWP,
                    self::MWQ,
                    self::MWR,
                    self::MWS,
                    self::MWT,
                    self::MWU,
                    self::MWV,
                    self::MWW,
                    self::MWZ,
                    self::MXA,
                    self::MXB,
                    self::MXC,
                    self::MXD,
                    self::MXE,
                    self::MXF,
                    self::MXG,
                    self::MXH,
                    self::MXI,
                    self::MXJ,
                    self::MXK,
                    self::MXL,
                    self::MXM,
                    self::MXN,
                    self::MXO,
                    self::MXP,
                    self::MXQ,
                    self::MXR,
                    self::MXS,
                    self::MXT,
                    self::MXU,
                    self::MXV,
                    self::MXW,
                    self::MXX,
                    self::MXY,
                    self::MXZ,
                    self::MYA,
                    self::MYB,
                    self::MYC,
                    self::MYE,
                    self::MYF,
                    self::MYG,
                    self::MYH,
                    self::MYJ,
                    self::MYK,
                    self::MYL,
                    self::MYM,
                    self::MYO,
                    self::MYP,
                    self::MYR,
                    self::MYS,
                    self::MYU,
                    self::MYV,
                    self::MYW,
                    self::MYX,
                    self::MYY,
                    self::MYZ,
                    self::MZA,
                    self::MZB,
                    self::MZC,
                    self::MZD,
                    self::MZE,
                    self::MZG,
                    self::MZH,
                    self::MZI,
                    self::MZJ,
                    self::MZK,
                    self::MZL,
                    self::MZM,
                    self::MZN,
                    self::MZO,
                    self::MZP,
                    self::MZQ,
                    self::MZR,
                    self::MZS,
                    self::MZT,
                    self::MZU,
                    self::MZV,
                    self::MZW,
                    self::MZX,
                    self::MZY,
                    self::MZZ,
                    self::NAA,
                    self::NAB,
                    self::NAC,
                    self::NAE,
                    self::NAF,
                    self::NAG,
                    self::NAJ,
                    self::NAK,
                    self::NAL,
                    self::NAM,
                    self::NAN,
                    self::NAO,
                    self::NAP,
                    self::NAQ,
                    self::NAR,
                    self::NAS,
                    self::NAT,
                    self::NAU,
                    self::NAV,
                    self::NAW,
                    self::NAX,
                    self::NAY,
                    self::NAZ,
                    self::NBA,
                    self::NBB,
                    self::NBC,
                    self::NBD,
                    self::NBE,
                    self::NBG,
                    self::NBH,
                    self::NBI,
                    self::NBJ,
                    self::NBK,
                    self::NBL,
                    self::NBM,
                    self::NBN,
                    self::NBO,
                    self::NBP,
                    self::NBQ,
                    self::NBR,
                    self::NBS,
                    self::NBT,
                    self::NBU,
                    self::NBV,
                    self::NBW,
                    self::NBY,
                    self::NCA,
                    self::NCB,
                    self::NCC,
                    self::NCD,
                    self::NCE,
                    self::NCF,
                    self::NCG,
                    self::NCH,
                    self::NCI,
                    self::NCJ,
                    self::NCK,
                    self::NCL,
                    self::NCM,
                    self::NCN,
                    self::NCO,
                    self::NCQ,
                    self::NCR,
                    self::NCS,
                    self::NCT,
                    self::NCU,
                    self::NCX,
                    self::NCZ,
                    self::NDA,
                    self::NDB,
                    self::NDC,
                    self::NDD,
                    self::NDE,
                    self::NDF,
                    self::NDG,
                    self::NDH,
                    self::NDI,
                    self::NDJ,
                    self::NDK,
                    self::NDL,
                    self::NDM,
                    self::NDN,
                    self::NDO,
                    self::NDP,
                    self::NDQ,
                    self::NDR,
                    self::NDS,
                    self::NDT,
                    self::NDU,
                    self::NDV,
                    self::NDW,
                    self::NDX,
                    self::NDY,
                    self::NDZ,
                    self::NEA,
                    self::NEB,
                    self::NEC,
                    self::NED,
                    self::NEE,
                    self::NEF,
                    self::NEG,
                    self::NEH,
                    self::NEI,
                    self::NEJ,
                    self::NEK,
                    self::NEM,
                    self::NEN,
                    self::NEO,
                    self::NEP,
                    self::NEQ,
                    self::NER,
                    self::NES,
                    self::NET,
                    self::NEU,
                    self::NEV,
                    self::NEW,
                    self::NEX,
                    self::NEY,
                    self::NEZ,
                    self::NFA,
                    self::NFD,
                    self::NFL,
                    self::NFR,
                    self::NFU,
                    self::NGA,
                    self::NGB,
                    self::NGC,
                    self::NGD,
                    self::NGE,
                    self::NGG,
                    self::NGH,
                    self::NGI,
                    self::NGJ,
                    self::NGK,
                    self::NGL,
                    self::NGM,
                    self::NGN,
                    self::NGP,
                    self::NGQ,
                    self::NGR,
                    self::NGS,
                    self::NGT,
                    self::NGU,
                    self::NGV,
                    self::NGW,
                    self::NGX,
                    self::NGY,
                    self::NGZ,
                    self::NHA,
                    self::NHB,
                    self::NHC,
                    self::NHD,
                    self::NHE,
                    self::NHF,
                    self::NHG,
                    self::NHH,
                    self::NHI,
                    self::NHK,
                    self::NHM,
                    self::NHN,
                    self::NHO,
                    self::NHP,
                    self::NHQ,
                    self::NHR,
                    self::NHT,
                    self::NHU,
                    self::NHV,
                    self::NHW,
                    self::NHX,
                    self::NHY,
                    self::NHZ,
                    self::NIA,
                    self::NIB,
                    self::NID,
                    self::NIE,
                    self::NIF,
                    self::NIG,
                    self::NIH,
                    self::NII,
                    self::NIJ,
                    self::NIK,
                    self::NIL,
                    self::NIM,
                    self::NIN,
                    self::NIO,
                    self::NIQ,
                    self::NIR,
                    self::NIS,
                    self::NIT,
                    self::NIU,
                    self::NIV,
                    self::NIW,
                    self::NIX,
                    self::NIY,
                    self::NIZ,
                    self::NJA,
                    self::NJB,
                    self::NJD,
                    self::NJH,
                    self::NJI,
                    self::NJJ,
                    self::NJL,
                    self::NJM,
                    self::NJN,
                    self::NJO,
                    self::NJR,
                    self::NJS,
                    self::NJT,
                    self::NJU,
                    self::NJX,
                    self::NJY,
                    self::NJZ,
                    self::NKA,
                    self::NKB,
                    self::NKC,
                    self::NKD,
                    self::NKE,
                    self::NKF,
                    self::NKG,
                    self::NKH,
                    self::NKI,
                    self::NKJ,
                    self::NKK,
                    self::NKM,
                    self::NKN,
                    self::NKO,
                    self::NKP,
                    self::NKQ,
                    self::NKR,
                    self::NKS,
                    self::NKT,
                    self::NKU,
                    self::NKV,
                    self::NKW,
                    self::NKX,
                    self::NKZ,
                    self::NLA,
                    self::NLC,
                    self::NLD,
                    self::NLE,
                    self::NLG,
                    self::NLI,
                    self::NLJ,
                    self::NLK,
                    self::NLL,
                    self::NLM,
                    self::NLO,
                    self::NLQ,
                    self::NLU,
                    self::NLV,
                    self::NLW,
                    self::NLX,
                    self::NLY,
                    self::NLZ,
                    self::NMA,
                    self::NMB,
                    self::NMC,
                    self::NMD,
                    self::NME,
                    self::NMF,
                    self::NMG,
                    self::NMH,
                    self::NMI,
                    self::NMJ,
                    self::NMK,
                    self::NML,
                    self::NMM,
                    self::NMN,
                    self::NMO,
                    self::NMP,
                    self::NMQ,
                    self::NMR,
                    self::NMS,
                    self::NMT,
                    self::NMU,
                    self::NMV,
                    self::NMW,
                    self::NMX,
                    self::NMY,
                    self::NMZ,
                    self::NNA,
                    self::NNB,
                    self::NNC,
                    self::NND,
                    self::NNE,
                    self::NNF,
                    self::NNG,
                    self::NNH,
                    self::NNI,
                    self::NNJ,
                    self::NNK,
                    self::NNL,
                    self::NNM,
                    self::NNN,
                    self::NNO,
                    self::NNP,
                    self::NNQ,
                    self::NNR,
                    self::NNT,
                    self::NNU,
                    self::NNV,
                    self::NNW,
                    self::NNY,
                    self::NNZ,
                    self::NOA,
                    self::NOB,
                    self::NOC,
                    self::NOD,
                    self::NOE,
                    self::NOF,
                    self::NOG,
                    self::NOH,
                    self::NOI,
                    self::NOJ,
                    self::NOK,
                    self::NOL,
                    self::NON,
                    self::NOP,
                    self::NOQ,
                    self::NOR,
                    self::NOS,
                    self::NOT,
                    self::NOU,
                    self::NOV,
                    self::NOW,
                    self::NOY,
                    self::NOZ,
                    self::NPA,
                    self::NPB,
                    self::NPG,
                    self::NPH,
                    self::NPI,
                    self::NPL,
                    self::NPN,
                    self::NPO,
                    self::NPS,
                    self::NPU,
                    self::NPX,
                    self::NPY,
                    self::NQG,
                    self::NQK,
                    self::NQL,
                    self::NQM,
                    self::NQN,
                    self::NQO,
                    self::NQQ,
                    self::NQT,
                    self::NQY,
                    self::NRA,
                    self::NRB,
                    self::NRC,
                    self::NRE,
                    self::NRF,
                    self::NRG,
                    self::NRI,
                    self::NRK,
                    self::NRL,
                    self::NRM,
                    self::NRN,
                    self::NRP,
                    self::NRR,
                    self::NRT,
                    self::NRU,
                    self::NRX,
                    self::NRZ,
                    self::NSA,
                    self::NSB,
                    self::NSC,
                    self::NSD,
                    self::NSE,
                    self::NSF,
                    self::NSG,
                    self::NSH,
                    self::NSI,
                    self::NSK,
                    self::NSL,
                    self::NSM,
                    self::NSN,
                    self::NSO,
                    self::NSP,
                    self::NSQ,
                    self::NSR,
                    self::NSS,
                    self::NST,
                    self::NSU,
                    self::NSV,
                    self::NSW,
                    self::NSX,
                    self::NSY,
                    self::NSZ,
                    self::NTD,
                    self::NTG,
                    self::NTI,
                    self::NTJ,
                    self::NTK,
                    self::NTM,
                    self::NTO,
                    self::NTP,
                    self::NTR,
                    self::NTU,
                    self::NTW,
                    self::NTX,
                    self::NTY,
                    self::NTZ,
                    self::NUA,
                    self::NUC,
                    self::NUD,
                    self::NUE,
                    self::NUF,
                    self::NUG,
                    self::NUH,
                    self::NUI,
                    self::NUJ,
                    self::NUK,
                    self::NUL,
                    self::NUM,
                    self::NUN,
                    self::NUO,
                    self::NUP,
                    self::NUQ,
                    self::NUR,
                    self::NUS,
                    self::NUT,
                    self::NUU,
                    self::NUV,
                    self::NUW,
                    self::NUX,
                    self::NUY,
                    self::NUZ,
                    self::NVH,
                    self::NVM,
                    self::NVO,
                    self::NWA,
                    self::NWB,
                    self::NWC,
                    self::NWE,
                    self::NWG,
                    self::NWI,
                    self::NWM,
                    self::NWO,
                    self::NWR,
                    self::NWW,
                    self::NWX,
                    self::NWY,
                    self::NXA,
                    self::NXD,
                    self::NXE,
                    self::NXG,
                    self::NXI,
                    self::NXK,
                    self::NXL,
                    self::NXM,
                    self::NXN,
                    self::NXO,
                    self::NXQ,
                    self::NXR,
                    self::NXX,
                    self::NYA,
                    self::NYB,
                    self::NYC,
                    self::NYD,
                    self::NYE,
                    self::NYF,
                    self::NYG,
                    self::NYH,
                    self::NYI,
                    self::NYJ,
                    self::NYK,
                    self::NYL,
                    self::NYM,
                    self::NYN,
                    self::NYO,
                    self::NYP,
                    self::NYQ,
                    self::NYR,
                    self::NYS,
                    self::NYT,
                    self::NYU,
                    self::NYV,
                    self::NYW,
                    self::NYX,
                    self::NYY,
                    self::NZA,
                    self::NZB,
                    self::NZD,
                    self::NZI,
                    self::NZK,
                    self::NZM,
                    self::NZR,
                    self::NZS,
                    self::NZU,
                    self::NZY,
                    self::NZZ,
                    self::OAA,
                    self::OAC,
                    self::OAK,
                    self::OAR,
                    self::OAV,
                    self::OBI,
                    self::OBK,
                    self::OBL,
                    self::OBM,
                    self::OBO,
                    self::OBR,
                    self::OBT,
                    self::OBU,
                    self::OCA,
                    self::OCH,
                    self::OCI,
                    self::OCM,
                    self::OCO,
                    self::OCU,
                    self::ODA,
                    self::ODK,
                    self::ODT,
                    self::ODU,
                    self::OFO,
                    self::OFS,
                    self::OFU,
                    self::OGB,
                    self::OGC,
                    self::OGE,
                    self::OGG,
                    self::OGO,
                    self::OGU,
                    self::OHT,
                    self::OHU,
                    self::OIA,
                    self::OIE,
                    self::OIN,
                    self::OJB,
                    self::OJC,
                    self::OJG,
                    self::OJI,
                    self::OJP,
                    self::OJS,
                    self::OJV,
                    self::OJW,
                    self::OKA,
                    self::OKB,
                    self::OKC,
                    self::OKD,
                    self::OKE,
                    self::OKG,
                    self::OKH,
                    self::OKI,
                    self::OKJ,
                    self::OKK,
                    self::OKL,
                    self::OKM,
                    self::OKN,
                    self::OKO,
                    self::OKR,
                    self::OKS,
                    self::OKU,
                    self::OKV,
                    self::OKX,
                    self::OKZ,
                    self::OLA,
                    self::OLD,
                    self::OLE,
                    self::OLK,
                    self::OLM,
                    self::OLO,
                    self::OLR,
                    self::OLT,
                    self::OLU,
                    self::OMA,
                    self::OMB,
                    self::OMC,
                    self::OMG,
                    self::OMI,
                    self::OMK,
                    self::OML,
                    self::OMN,
                    self::OMO,
                    self::OMP,
                    self::OMR,
                    self::OMT,
                    self::OMU,
                    self::OMW,
                    self::OMX,
                    self::OMY,
                    self::ONA,
                    self::ONB,
                    self::ONE,
                    self::ONG,
                    self::ONI,
                    self::ONJ,
                    self::ONK,
                    self::ONN,
                    self::ONO,
                    self::ONP,
                    self::ONR,
                    self::ONS,
                    self::ONT,
                    self::ONU,
                    self::ONW,
                    self::ONX,
                    self::OOD,
                    self::OOG,
                    self::OON,
                    self::OOR,
                    self::OOS,
                    self::OPA,
                    self::OPK,
                    self::OPM,
                    self::OPO,
                    self::OPT,
                    self::OPY,
                    self::ORA,
                    self::ORC,
                    self::ORE,
                    self::ORG,
                    self::ORH,
                    self::ORI,
                    self::ORM,
                    self::ORN,
                    self::ORO,
                    self::ORR,
                    self::ORS,
                    self::ORT,
                    self::ORU,
                    self::ORV,
                    self::ORW,
                    self::ORX,
                    self::ORY,
                    self::ORZ,
                    self::OSA,
                    self::OSC,
                    self::OSI,
                    self::OSN,
                    self::OSO,
                    self::OSP,
                    self::OSS,
                    self::OST,
                    self::OSU,
                    self::OSX,
                    self::OTA,
                    self::OTB,
                    self::OTD,
                    self::OTE,
                    self::OTI,
                    self::OTK,
                    self::OTL,
                    self::OTM,
                    self::OTN,
                    self::OTQ,
                    self::OTR,
                    self::OTS,
                    self::OTT,
                    self::OTU,
                    self::OTW,
                    self::OTX,
                    self::OTY,
                    self::OTZ,
                    self::OUA,
                    self::OUB,
                    self::OUE,
                    self::OUI,
                    self::OUM,
                    self::OVD,
                    self::OWI,
                    self::OWL,
                    self::OYB,
                    self::OYD,
                    self::OYM,
                    self::OYY,
                    self::OZM,
                    self::PAB,
                    self::PAC,
                    self::PAD,
                    self::PAE,
                    self::PAF,
                    self::PAG,
                    self::PAH,
                    self::PAI,
                    self::PAK,
                    self::PAL,
                    self::PAM,
                    self::PAN,
                    self::PAO,
                    self::PAP,
                    self::PAQ,
                    self::PAR,
                    self::PAS,
                    self::PAU,
                    self::PAV,
                    self::PAW,
                    self::PAX,
                    self::PAY,
                    self::PAZ,
                    self::PBB,
                    self::PBC,
                    self::PBE,
                    self::PBF,
                    self::PBG,
                    self::PBH,
                    self::PBI,
                    self::PBL,
                    self::PBM,
                    self::PBN,
                    self::PBO,
                    self::PBP,
                    self::PBR,
                    self::PBS,
                    self::PBT,
                    self::PBU,
                    self::PBV,
                    self::PBY,
                    self::PCA,
                    self::PCB,
                    self::PCC,
                    self::PCD,
                    self::PCE,
                    self::PCF,
                    self::PCG,
                    self::PCH,
                    self::PCI,
                    self::PCJ,
                    self::PCK,
                    self::PCL,
                    self::PCM,
                    self::PCN,
                    self::PCP,
                    self::PCW,
                    self::PDA,
                    self::PDC,
                    self::PDI,
                    self::PDN,
                    self::PDO,
                    self::PDT,
                    self::PDU,
                    self::PEA,
                    self::PEB,
                    self::PED,
                    self::PEE,
                    self::PEF,
                    self::PEG,
                    self::PEH,
                    self::PEI,
                    self::PEJ,
                    self::PEK,
                    self::PEL,
                    self::PEM,
                    self::PEO,
                    self::PEP,
                    self::PEQ,
                    self::PES,
                    self::PEV,
                    self::PEX,
                    self::PEY,
                    self::PEZ,
                    self::PFA,
                    self::PFE,
                    self::PFL,
                    self::PGA,
                    self::PGD,
                    self::PGG,
                    self::PGI,
                    self::PGK,
                    self::PGL,
                    self::PGN,
                    self::PGS,
                    self::PGU,
                    self::PGZ,
                    self::PHA,
                    self::PHD,
                    self::PHG,
                    self::PHH,
                    self::PHJ,
                    self::PHK,
                    self::PHL,
                    self::PHM,
                    self::PHN,
                    self::PHO,
                    self::PHQ,
                    self::PHR,
                    self::PHT,
                    self::PHU,
                    self::PHV,
                    self::PHW,
                    self::PIA,
                    self::PIB,
                    self::PIC,
                    self::PID,
                    self::PIE,
                    self::PIF,
                    self::PIG,
                    self::PIH,
                    self::PIJ,
                    self::PIL,
                    self::PIM,
                    self::PIN,
                    self::PIO,
                    self::PIP,
                    self::PIR,
                    self::PIS,
                    self::PIT,
                    self::PIU,
                    self::PIV,
                    self::PIW,
                    self::PIX,
                    self::PIY,
                    self::PIZ,
                    self::PJT,
                    self::PKA,
                    self::PKB,
                    self::PKC,
                    self::PKG,
                    self::PKH,
                    self::PKN,
                    self::PKO,
                    self::PKP,
                    self::PKR,
                    self::PKS,
                    self::PKT,
                    self::PKU,
                    self::PLA,
                    self::PLB,
                    self::PLC,
                    self::PLD,
                    self::PLE,
                    self::PLG,
                    self::PLH,
                    self::PLI,
                    self::PLK,
                    self::PLL,
                    self::PLN,
                    self::PLO,
                    self::PLQ,
                    self::PLR,
                    self::PLS,
                    self::PLT,
                    self::PLU,
                    self::PLV,
                    self::PLW,
                    self::PLY,
                    self::PLZ,
                    self::PMA,
                    self::PMB,
                    self::PMD,
                    self::PME,
                    self::PMF,
                    self::PMH,
                    self::PMI,
                    self::PMJ,
                    self::PML,
                    self::PMM,
                    self::PMN,
                    self::PMO,
                    self::PMQ,
                    self::PMR,
                    self::PMS,
                    self::PMT,
                    self::PMW,
                    self::PMX,
                    self::PMY,
                    self::PMZ,
                    self::PNA,
                    self::PNB,
                    self::PNC,
                    self::PND,
                    self::PNE,
                    self::PNG,
                    self::PNH,
                    self::PNI,
                    self::PNJ,
                    self::PNK,
                    self::PNL,
                    self::PNM,
                    self::PNN,
                    self::PNO,
                    self::PNP,
                    self::PNQ,
                    self::PNR,
                    self::PNS,
                    self::PNT,
                    self::PNU,
                    self::PNV,
                    self::PNW,
                    self::PNX,
                    self::PNY,
                    self::PNZ,
                    self::POC,
                    self::POE,
                    self::POF,
                    self::POG,
                    self::POH,
                    self::POI,
                    self::POK,
                    self::POL,
                    self::POM,
                    self::PON,
                    self::POO,
                    self::POP,
                    self::POQ,
                    self::POR,
                    self::POS,
                    self::POT,
                    self::POV,
                    self::POW,
                    self::POX,
                    self::POY,
                    self::PPE,
                    self::PPI,
                    self::PPK,
                    self::PPL,
                    self::PPM,
                    self::PPN,
                    self::PPO,
                    self::PPP,
                    self::PPQ,
                    self::PPS,
                    self::PPT,
                    self::PPU,
                    self::PQA,
                    self::PQM,
                    self::PRC,
                    self::PRD,
                    self::PRE,
                    self::PRF,
                    self::PRG,
                    self::PRH,
                    self::PRI,
                    self::PRK,
                    self::PRL,
                    self::PRM,
                    self::PRN,
                    self::PRO,
                    self::PRQ,
                    self::PRR,
                    self::PRS,
                    self::PRT,
                    self::PRU,
                    self::PRW,
                    self::PRX,
                    self::PRZ,
                    self::PSA,
                    self::PSC,
                    self::PSD,
                    self::PSE,
                    self::PSG,
                    self::PSH,
                    self::PSI,
                    self::PSL,
                    self::PSM,
                    self::PSN,
                    self::PSO,
                    self::PSP,
                    self::PSQ,
                    self::PSR,
                    self::PSS,
                    self::PST,
                    self::PSU,
                    self::PSW,
                    self::PSY,
                    self::PTA,
                    self::PTH,
                    self::PTI,
                    self::PTN,
                    self::PTO,
                    self::PTP,
                    self::PTQ,
                    self::PTR,
                    self::PTT,
                    self::PTU,
                    self::PTV,
                    self::PTW,
                    self::PTY,
                    self::PUA,
                    self::PUB,
                    self::PUC,
                    self::PUD,
                    self::PUE,
                    self::PUF,
                    self::PUG,
                    self::PUI,
                    self::PUJ,
                    self::PUM,
                    self::PUO,
                    self::PUP,
                    self::PUQ,
                    self::PUR,
                    self::PUS,
                    self::PUT,
                    self::PUU,
                    self::PUW,
                    self::PUX,
                    self::PUY,
                    self::PWA,
                    self::PWB,
                    self::PWG,
                    self::PWI,
                    self::PWM,
                    self::PWN,
                    self::PWO,
                    self::PWR,
                    self::PWW,
                    self::PXM,
                    self::PYE,
                    self::PYM,
                    self::PYN,
                    self::PYS,
                    self::PYU,
                    self::PYX,
                    self::PYY,
                    self::PZE,
                    self::PZH,
                    self::PZN,
                    self::QUA,
                    self::QUB,
                    self::QUC,
                    self::QUD,
                    self::QUE,
                    self::QUF,
                    self::QUG,
                    self::QUH,
                    self::QUI,
                    self::QUK,
                    self::QUL,
                    self::QUM,
                    self::QUN,
                    self::QUP,
                    self::QUQ,
                    self::QUR,
                    self::QUS,
                    self::QUV,
                    self::QUW,
                    self::QUX,
                    self::QUY,
                    self::QUZ,
                    self::QVA,
                    self::QVC,
                    self::QVE,
                    self::QVH,
                    self::QVI,
                    self::QVJ,
                    self::QVL,
                    self::QVM,
                    self::QVN,
                    self::QVO,
                    self::QVP,
                    self::QVS,
                    self::QVW,
                    self::QVY,
                    self::QVZ,
                    self::QWA,
                    self::QWC,
                    self::QWH,
                    self::QWM,
                    self::QWS,
                    self::QWT,
                    self::QXA,
                    self::QXC,
                    self::QXH,
                    self::QXL,
                    self::QXN,
                    self::QXO,
                    self::QXP,
                    self::QXQ,
                    self::QXR,
                    self::QXS,
                    self::QXT,
                    self::QXU,
                    self::QXW,
                    self::QYA,
                    self::QYP,
                    self::RAA,
                    self::RAB,
                    self::RAC,
                    self::RAD,
                    self::RAF,
                    self::RAG,
                    self::RAH,
                    self::RAI,
                    self::RAJ,
                    self::RAK,
                    self::RAL,
                    self::RAM,
                    self::RAN,
                    self::RAO,
                    self::RAP,
                    self::RAQ,
                    self::RAR,
                    self::RAS,
                    self::RAT,
                    self::RAU,
                    self::RAV,
                    self::RAW,
                    self::RAX,
                    self::RAY,
                    self::RAZ,
                    self::RBB,
                    self::RBK,
                    self::RBL,
                    self::RBP,
                    self::RCF,
                    self::RDB,
                    self::REA,
                    self::REB,
                    self::REE,
                    self::REG,
                    self::REI,
                    self::REJ,
                    self::REL,
                    self::REM,
                    self::REN,
                    self::RER,
                    self::RES,
                    self::RET,
                    self::REY,
                    self::RGA,
                    self::RGE,
                    self::RGK,
                    self::RGN,
                    self::RGR,
                    self::RGS,
                    self::RGU,
                    self::RHG,
                    self::RHP,
                    self::RIA,
                    self::RIB,
                    self::RIF,
                    self::RIL,
                    self::RIM,
                    self::RIN,
                    self::RIR,
                    self::RIT,
                    self::RIU,
                    self::RJG,
                    self::RJI,
                    self::RJS,
                    self::RKA,
                    self::RKB,
                    self::RKH,
                    self::RKI,
                    self::RKM,
                    self::RKT,
                    self::RKW,
                    self::RMA,
                    self::RMB,
                    self::RMC,
                    self::RMD,
                    self::RME,
                    self::RMF,
                    self::RMG,
                    self::RMH,
                    self::RMI,
                    self::RMK,
                    self::RML,
                    self::RMM,
                    self::RMN,
                    self::RMO,
                    self::RMP,
                    self::RMQ,
                    self::RMS,
                    self::RMT,
                    self::RMU,
                    self::RMV,
                    self::RMW,
                    self::RMX,
                    self::RMY,
                    self::RMZ,
                    self::RNB,
                    self::RND,
                    self::RNG,
                    self::RNL,
                    self::RNN,
                    self::RNP,
                    self::RNR,
                    self::RNW,
                    self::ROB,
                    self::ROC,
                    self::ROD,
                    self::ROE,
                    self::ROF,
                    self::ROG,
                    self::ROH,
                    self::ROL,
                    self::ROM,
                    self::RON,
                    self::ROO,
                    self::ROP,
                    self::ROR,
                    self::ROU,
                    self::ROW,
                    self::RPN,
                    self::RPT,
                    self::RRI,
                    self::RRM,
                    self::RRO,
                    self::RRT,
                    self::RSB,
                    self::RSK,
                    self::RSL,
                    self::RSM,
                    self::RSN,
                    self::RSW,
                    self::RTC,
                    self::RTH,
                    self::RTM,
                    self::RTS,
                    self::RTW,
                    self::RUB,
                    self::RUC,
                    self::RUE,
                    self::RUF,
                    self::RUG,
                    self::RUH,
                    self::RUI,
                    self::RUK,
                    self::RUN,
                    self::RUO,
                    self::RUP,
                    self::RUQ,
                    self::RUS,
                    self::RUT,
                    self::RUU,
                    self::RUY,
                    self::RUZ,
                    self::RWA,
                    self::RWK,
                    self::RWL,
                    self::RWM,
                    self::RWO,
                    self::RWR,
                    self::RXD,
                    self::RXW,
                    self::RYN,
                    self::RYS,
                    self::RYU,
                    self::RZH,
                    self::SAA,
                    self::SAB,
                    self::SAC,
                    self::SAD,
                    self::SAE,
                    self::SAF,
                    self::SAG,
                    self::SAH,
                    self::SAJ,
                    self::SAK,
                    self::SAM,
                    self::SAN,
                    self::SAO,
                    self::SAQ,
                    self::SAR,
                    self::SAS,
                    self::SAT,
                    self::SAU,
                    self::SAV,
                    self::SAW,
                    self::SAX,
                    self::SAY,
                    self::SAZ,
                    self::SBA,
                    self::SBB,
                    self::SBC,
                    self::SBD,
                    self::SBE,
                    self::SBF,
                    self::SBG,
                    self::SBH,
                    self::SBI,
                    self::SBJ,
                    self::SBK,
                    self::SBL,
                    self::SBM,
                    self::SBN,
                    self::SBO,
                    self::SBP,
                    self::SBQ,
                    self::SBR,
                    self::SBS,
                    self::SBT,
                    self::SBU,
                    self::SBV,
                    self::SBW,
                    self::SBX,
                    self::SBY,
                    self::SBZ,
                    self::SCB,
                    self::SCE,
                    self::SCF,
                    self::SCG,
                    self::SCH,
                    self::SCI,
                    self::SCK,
                    self::SCL,
                    self::SCN,
                    self::SCO,
                    self::SCP,
                    self::SCQ,
                    self::SCS,
                    self::SCT,
                    self::SCU,
                    self::SCV,
                    self::SCW,
                    self::SCX,
                    self::SDA,
                    self::SDB,
                    self::SDC,
                    self::SDE,
                    self::SDF,
                    self::SDG,
                    self::SDH,
                    self::SDJ,
                    self::SDK,
                    self::SDL,
                    self::SDN,
                    self::SDO,
                    self::SDP,
                    self::SDQ,
                    self::SDR,
                    self::SDS,
                    self::SDT,
                    self::SDU,
                    self::SDX,
                    self::SDZ,
                    self::SEA,
                    self::SEB,
                    self::SEC,
                    self::SED,
                    self::SEE,
                    self::SEF,
                    self::SEG,
                    self::SEH,
                    self::SEI,
                    self::SEJ,
                    self::SEK,
                    self::SEL,
                    self::SEN,
                    self::SEO,
                    self::SEP,
                    self::SEQ,
                    self::SER,
                    self::SES,
                    self::SET,
                    self::SEU,
                    self::SEV,
                    self::SEW,
                    self::SEY,
                    self::SEZ,
                    self::SFB,
                    self::SFE,
                    self::SFM,
                    self::SFS,
                    self::SFW,
                    self::SGA,
                    self::SGB,
                    self::SGC,
                    self::SGD,
                    self::SGE,
                    self::SGG,
                    self::SGH,
                    self::SGI,
                    self::SGJ,
                    self::SGK,
                    self::SGM,
                    self::SGP,
                    self::SGR,
                    self::SGS,
                    self::SGT,
                    self::SGU,
                    self::SGW,
                    self::SGX,
                    self::SGY,
                    self::SGZ,
                    self::SHA,
                    self::SHB,
                    self::SHC,
                    self::SHD,
                    self::SHE,
                    self::SHG,
                    self::SHH,
                    self::SHI,
                    self::SHJ,
                    self::SHK,
                    self::SHL,
                    self::SHM,
                    self::SHN,
                    self::SHO,
                    self::SHP,
                    self::SHQ,
                    self::SHR,
                    self::SHS,
                    self::SHT,
                    self::SHU,
                    self::SHV,
                    self::SHW,
                    self::SHX,
                    self::SHY,
                    self::SHZ,
                    self::SIA,
                    self::SIB,
                    self::SID,
                    self::SIE,
                    self::SIF,
                    self::SIG,
                    self::SIH,
                    self::SII,
                    self::SIJ,
                    self::SIK,
                    self::SIL,
                    self::SIM,
                    self::SIN,
                    self::SIP,
                    self::SIQ,
                    self::SIR,
                    self::SIS,
                    self::SIU,
                    self::SIV,
                    self::SIW,
                    self::SIX,
                    self::SIY,
                    self::SIZ,
                    self::SJA,
                    self::SJB,
                    self::SJC,
                    self::SJD,
                    self::SJE,
                    self::SJG,
                    self::SJK,
                    self::SJL,
                    self::SJM,
                    self::SJN,
                    self::SJO,
                    self::SJP,
                    self::SJR,
                    self::SJS,
                    self::SJT,
                    self::SJU,
                    self::SJW,
                    self::SKA,
                    self::SKB,
                    self::SKC,
                    self::SKD,
                    self::SKE,
                    self::SKF,
                    self::SKG,
                    self::SKH,
                    self::SKI,
                    self::SKJ,
                    self::SKM,
                    self::SKN,
                    self::SKO,
                    self::SKP,
                    self::SKQ,
                    self::SKR,
                    self::SKS,
                    self::SKT,
                    self::SKU,
                    self::SKV,
                    self::SKW,
                    self::SKX,
                    self::SKY,
                    self::SKZ,
                    self::SLC,
                    self::SLD,
                    self::SLE,
                    self::SLF,
                    self::SLG,
                    self::SLH,
                    self::SLI,
                    self::SLJ,
                    self::SLK,
                    self::SLL,
                    self::SLM,
                    self::SLN,
                    self::SLP,
                    self::SLR,
                    self::SLS,
                    self::SLT,
                    self::SLU,
                    self::SLV,
                    self::SLW,
                    self::SLX,
                    self::SLY,
                    self::SLZ,
                    self::SMA,
                    self::SMB,
                    self::SMC,
                    self::SME,
                    self::SMF,
                    self::SMG,
                    self::SMH,
                    self::SMJ,
                    self::SMK,
                    self::SML,
                    self::SMM,
                    self::SMN,
                    self::SMO,
                    self::SMP,
                    self::SMQ,
                    self::SMR,
                    self::SMS,
                    self::SMT,
                    self::SMU,
                    self::SMV,
                    self::SMW,
                    self::SMX,
                    self::SMY,
                    self::SMZ,
                    self::SNA,
                    self::SNC,
                    self::SND,
                    self::SNE,
                    self::SNF,
                    self::SNG,
                    self::SNI,
                    self::SNJ,
                    self::SNK,
                    self::SNL,
                    self::SNM,
                    self::SNN,
                    self::SNO,
                    self::SNP,
                    self::SNQ,
                    self::SNR,
                    self::SNS,
                    self::SNU,
                    self::SNV,
                    self::SNW,
                    self::SNX,
                    self::SNY,
                    self::SNZ,
                    self::SOA,
                    self::SOB,
                    self::SOC,
                    self::SOD,
                    self::SOE,
                    self::SOG,
                    self::SOH,
                    self::SOI,
                    self::SOJ,
                    self::SOK,
                    self::SOL,
                    self::SOM,
                    self::SOO,
                    self::SOP,
                    self::SOQ,
                    self::SOR,
                    self::SOS,
                    self::SOT,
                    self::SOU,
                    self::SOV,
                    self::SOW,
                    self::SOX,
                    self::SOY,
                    self::SOZ,
                    self::SPA,
                    self::SPB,
                    self::SPC,
                    self::SPD,
                    self::SPE,
                    self::SPG,
                    self::SPI,
                    self::SPK,
                    self::SPL,
                    self::SPM,
                    self::SPN,
                    self::SPO,
                    self::SPP,
                    self::SPQ,
                    self::SPR,
                    self::SPS,
                    self::SPT,
                    self::SPU,
                    self::SPV,
                    self::SPX,
                    self::SPY,
                    self::SQA,
                    self::SQH,
                    self::SQI,
                    self::SQK,
                    self::SQM,
                    self::SQN,
                    self::SQO,
                    self::SQQ,
                    self::SQR,
                    self::SQS,
                    self::SQT,
                    self::SQU,
                    self::SQX,
                    self::SRA,
                    self::SRB,
                    self::SRC,
                    self::SRD,
                    self::SRE,
                    self::SRF,
                    self::SRG,
                    self::SRH,
                    self::SRI,
                    self::SRK,
                    self::SRL,
                    self::SRM,
                    self::SRN,
                    self::SRO,
                    self::SRP,
                    self::SRQ,
                    self::SRR,
                    self::SRS,
                    self::SRT,
                    self::SRU,
                    self::SRV,
                    self::SRW,
                    self::SRX,
                    self::SRY,
                    self::SRZ,
                    self::SSB,
                    self::SSC,
                    self::SSD,
                    self::SSE,
                    self::SSF,
                    self::SSG,
                    self::SSH,
                    self::SSI,
                    self::SSJ,
                    self::SSK,
                    self::SSL,
                    self::SSM,
                    self::SSN,
                    self::SSO,
                    self::SSP,
                    self::SSQ,
                    self::SSR,
                    self::SSS,
                    self::SST,
                    self::SSU,
                    self::SSV,
                    self::SSW,
                    self::SSX,
                    self::SSY,
                    self::SSZ,
                    self::STA,
                    self::STB,
                    self::STD,
                    self::STE,
                    self::STF,
                    self::STG,
                    self::STH,
                    self::STI,
                    self::STJ,
                    self::STK,
                    self::STL,
                    self::STM,
                    self::STN,
                    self::STO,
                    self::STP,
                    self::STQ,
                    self::STR,
                    self::STS,
                    self::STT,
                    self::STU,
                    self::STV,
                    self::STW,
                    self::STY,
                    self::SUA,
                    self::SUB,
                    self::SUC,
                    self::SUE,
                    self::SUG,
                    self::SUI,
                    self::SUJ,
                    self::SUK,
                    self::SUN,
                    self::SUO,
                    self::SUQ,
                    self::SUR,
                    self::SUS,
                    self::SUT,
                    self::SUV,
                    self::SUW,
                    self::SUX,
                    self::SUY,
                    self::SUZ,
                    self::SVA,
                    self::SVB,
                    self::SVC,
                    self::SVE,
                    self::SVK,
                    self::SVM,
                    self::SVS,
                    self::SVX,
                    self::SWA,
                    self::SWB,
                    self::SWC,
                    self::SWE,
                    self::SWF,
                    self::SWG,
                    self::SWH,
                    self::SWI,
                    self::SWJ,
                    self::SWK,
                    self::SWL,
                    self::SWM,
                    self::SWN,
                    self::SWO,
                    self::SWP,
                    self::SWQ,
                    self::SWR,
                    self::SWS,
                    self::SWT,
                    self::SWU,
                    self::SWV,
                    self::SWW,
                    self::SWX,
                    self::SWY,
                    self::SXB,
                    self::SXC,
                    self::SXE,
                    self::SXG,
                    self::SXK,
                    self::SXL,
                    self::SXM,
                    self::SXN,
                    self::SXO,
                    self::SXR,
                    self::SXS,
                    self::SXU,
                    self::SXW,
                    self::SYA,
                    self::SYB,
                    self::SYC,
                    self::SYI,
                    self::SYK,
                    self::SYL,
                    self::SYM,
                    self::SYN,
                    self::SYO,
                    self::SYR,
                    self::SYS,
                    self::SYW,
                    self::SYX,
                    self::SYY,
                    self::SZA,
                    self::SZB,
                    self::SZC,
                    self::SZE,
                    self::SZG,
                    self::SZL,
                    self::SZN,
                    self::SZP,
                    self::SZS,
                    self::SZV,
                    self::SZW,
                    self::SZY,
                    self::TAA,
                    self::TAB,
                    self::TAC,
                    self::TAD,
                    self::TAE,
                    self::TAF,
                    self::TAG,
                    self::TAH,
                    self::TAJ,
                    self::TAK,
                    self::TAL,
                    self::TAM,
                    self::TAN,
                    self::TAO,
                    self::TAP,
                    self::TAQ,
                    self::TAR,
                    self::TAS,
                    self::TAT,
                    self::TAU,
                    self::TAV,
                    self::TAW,
                    self::TAX,
                    self::TAY,
                    self::TAZ,
                    self::TBA,
                    self::TBC,
                    self::TBD,
                    self::TBE,
                    self::TBF,
                    self::TBG,
                    self::TBH,
                    self::TBI,
                    self::TBJ,
                    self::TBK,
                    self::TBL,
                    self::TBM,
                    self::TBN,
                    self::TBO,
                    self::TBP,
                    self::TBR,
                    self::TBS,
                    self::TBT,
                    self::TBU,
                    self::TBV,
                    self::TBW,
                    self::TBX,
                    self::TBY,
                    self::TBZ,
                    self::TCA,
                    self::TCB,
                    self::TCC,
                    self::TCD,
                    self::TCE,
                    self::TCF,
                    self::TCG,
                    self::TCH,
                    self::TCI,
                    self::TCK,
                    self::TCL,
                    self::TCM,
                    self::TCN,
                    self::TCO,
                    self::TCP,
                    self::TCQ,
                    self::TCS,
                    self::TCT,
                    self::TCU,
                    self::TCW,
                    self::TCX,
                    self::TCY,
                    self::TCZ,
                    self::TDA,
                    self::TDB,
                    self::TDC,
                    self::TDD,
                    self::TDE,
                    self::TDF,
                    self::TDG,
                    self::TDH,
                    self::TDI,
                    self::TDJ,
                    self::TDK,
                    self::TDL,
                    self::TDM,
                    self::TDN,
                    self::TDO,
                    self::TDQ,
                    self::TDR,
                    self::TDS,
                    self::TDT,
                    self::TDV,
                    self::TDX,
                    self::TDY,
                    self::TEA,
                    self::TEB,
                    self::TEC,
                    self::TED,
                    self::TEE,
                    self::TEF,
                    self::TEG,
                    self::TEH,
                    self::TEI,
                    self::TEK,
                    self::TEL,
                    self::TEM,
                    self::TEN,
                    self::TEO,
                    self::TEP,
                    self::TEQ,
                    self::TER,
                    self::TES,
                    self::TET,
                    self::TEU,
                    self::TEV,
                    self::TEW,
                    self::TEX,
                    self::TEY,
                    self::TEZ,
                    self::TFI,
                    self::TFN,
                    self::TFO,
                    self::TFR,
                    self::TFT,
                    self::TGA,
                    self::TGB,
                    self::TGC,
                    self::TGD,
                    self::TGE,
                    self::TGF,
                    self::TGH,
                    self::TGI,
                    self::TGJ,
                    self::TGK,
                    self::TGL,
                    self::TGN,
                    self::TGO,
                    self::TGP,
                    self::TGQ,
                    self::TGR,
                    self::TGS,
                    self::TGT,
                    self::TGU,
                    self::TGV,
                    self::TGW,
                    self::TGX,
                    self::TGY,
                    self::TGZ,
                    self::THA,
                    self::THD,
                    self::THE,
                    self::THF,
                    self::THH,
                    self::THI,
                    self::THK,
                    self::THL,
                    self::THM,
                    self::THN,
                    self::THP,
                    self::THQ,
                    self::THR,
                    self::THS,
                    self::THT,
                    self::THU,
                    self::THV,
                    self::THY,
                    self::THZ,
                    self::TIA,
                    self::TIC,
                    self::TIF,
                    self::TIG,
                    self::TIH,
                    self::TII,
                    self::TIJ,
                    self::TIK,
                    self::TIL,
                    self::TIM,
                    self::TIN,
                    self::TIO,
                    self::TIP,
                    self::TIQ,
                    self::TIR,
                    self::TIS,
                    self::TIT,
                    self::TIU,
                    self::TIV,
                    self::TIW,
                    self::TIX,
                    self::TIY,
                    self::TIZ,
                    self::TJA,
                    self::TJG,
                    self::TJI,
                    self::TJJ,
                    self::TJL,
                    self::TJM,
                    self::TJN,
                    self::TJO,
                    self::TJP,
                    self::TJS,
                    self::TJU,
                    self::TJW,
                    self::TKA,
                    self::TKB,
                    self::TKD,
                    self::TKE,
                    self::TKF,
                    self::TKG,
                    self::TKL,
                    self::TKM,
                    self::TKN,
                    self::TKP,
                    self::TKQ,
                    self::TKR,
                    self::TKS,
                    self::TKT,
                    self::TKU,
                    self::TKV,
                    self::TKW,
                    self::TKX,
                    self::TKZ,
                    self::TLA,
                    self::TLB,
                    self::TLC,
                    self::TLD,
                    self::TLF,
                    self::TLG,
                    self::TLH,
                    self::TLI,
                    self::TLJ,
                    self::TLK,
                    self::TLL,
                    self::TLM,
                    self::TLN,
                    self::TLO,
                    self::TLP,
                    self::TLQ,
                    self::TLR,
                    self::TLS,
                    self::TLT,
                    self::TLU,
                    self::TLV,
                    self::TLX,
                    self::TLY,
                    self::TMA,
                    self::TMB,
                    self::TMC,
                    self::TMD,
                    self::TME,
                    self::TMF,
                    self::TMG,
                    self::TMH,
                    self::TMI,
                    self::TMJ,
                    self::TML,
                    self::TMM,
                    self::TMN,
                    self::TMO,
                    self::TMQ,
                    self::TMR,
                    self::TMS,
                    self::TMT,
                    self::TMU,
                    self::TMV,
                    self::TMW,
                    self::TMY,
                    self::TMZ,
                    self::TNA,
                    self::TNB,
                    self::TNC,
                    self::TND,
                    self::TNG,
                    self::TNH,
                    self::TNI,
                    self::TNK,
                    self::TNL,
                    self::TNM,
                    self::TNN,
                    self::TNO,
                    self::TNP,
                    self::TNQ,
                    self::TNR,
                    self::TNS,
                    self::TNT,
                    self::TNU,
                    self::TNV,
                    self::TNW,
                    self::TNX,
                    self::TNY,
                    self::TNZ,
                    self::TOB,
                    self::TOC,
                    self::TOD,
                    self::TOF,
                    self::TOG,
                    self::TOH,
                    self::TOI,
                    self::TOJ,
                    self::TOK,
                    self::TOL,
                    self::TOM,
                    self::TON,
                    self::TOO,
                    self::TOP,
                    self::TOQ,
                    self::TOR,
                    self::TOS,
                    self::TOU,
                    self::TOV,
                    self::TOW,
                    self::TOX,
                    self::TOY,
                    self::TOZ,
                    self::TPA,
                    self::TPC,
                    self::TPE,
                    self::TPF,
                    self::TPG,
                    self::TPI,
                    self::TPJ,
                    self::TPK,
                    self::TPL,
                    self::TPM,
                    self::TPN,
                    self::TPO,
                    self::TPP,
                    self::TPQ,
                    self::TPR,
                    self::TPT,
                    self::TPU,
                    self::TPV,
                    self::TPX,
                    self::TPY,
                    self::TPZ,
                    self::TQB,
                    self::TQL,
                    self::TQM,
                    self::TQN,
                    self::TQO,
                    self::TQP,
                    self::TQQ,
                    self::TQR,
                    self::TQT,
                    self::TQU,
                    self::TQW,
                    self::TRA,
                    self::TRB,
                    self::TRC,
                    self::TRD,
                    self::TRE,
                    self::TRF,
                    self::TRG,
                    self::TRH,
                    self::TRI,
                    self::TRJ,
                    self::TRL,
                    self::TRM,
                    self::TRN,
                    self::TRO,
                    self::TRP,
                    self::TRQ,
                    self::TRR,
                    self::TRS,
                    self::TRT,
                    self::TRU,
                    self::TRV,
                    self::TRW,
                    self::TRX,
                    self::TRY,
                    self::TRZ,
                    self::TSA,
                    self::TSB,
                    self::TSC,
                    self::TSD,
                    self::TSE,
                    self::TSG,
                    self::TSH,
                    self::TSI,
                    self::TSJ,
                    self::TSK,
                    self::TSL,
                    self::TSM,
                    self::TSN,
                    self::TSO,
                    self::TSP,
                    self::TSQ,
                    self::TSR,
                    self::TSS,
                    self::TST,
                    self::TSU,
                    self::TSV,
                    self::TSW,
                    self::TSX,
                    self::TSY,
                    self::TSZ,
                    self::TTA,
                    self::TTB,
                    self::TTC,
                    self::TTD,
                    self::TTE,
                    self::TTF,
                    self::TTG,
                    self::TTH,
                    self::TTI,
                    self::TTJ,
                    self::TTK,
                    self::TTL,
                    self::TTM,
                    self::TTN,
                    self::TTO,
                    self::TTP,
                    self::TTQ,
                    self::TTR,
                    self::TTS,
                    self::TTT,
                    self::TTU,
                    self::TTV,
                    self::TTW,
                    self::TTY,
                    self::TTZ,
                    self::TUA,
                    self::TUB,
                    self::TUC,
                    self::TUD,
                    self::TUE,
                    self::TUF,
                    self::TUG,
                    self::TUH,
                    self::TUI,
                    self::TUJ,
                    self::TUK,
                    self::TUL,
                    self::TUM,
                    self::TUN,
                    self::TUO,
                    self::TUQ,
                    self::TUR,
                    self::TUS,
                    self::TUU,
                    self::TUV,
                    self::TUX,
                    self::TUY,
                    self::TUZ,
                    self::TVA,
                    self::TVD,
                    self::TVE,
                    self::TVI,
                    self::TVK,
                    self::TVL,
                    self::TVM,
                    self::TVN,
                    self::TVO,
                    self::TVS,
                    self::TVT,
                    self::TVU,
                    self::TVW,
                    self::TVX,
                    self::TVY,
                    self::TWA,
                    self::TWB,
                    self::TWC,
                    self::TWD,
                    self::TWE,
                    self::TWF,
                    self::TWG,
                    self::TWH,
                    self::TWI,
                    self::TWL,
                    self::TWM,
                    self::TWN,
                    self::TWO,
                    self::TWP,
                    self::TWQ,
                    self::TWR,
                    self::TWT,
                    self::TWU,
                    self::TWW,
                    self::TWX,
                    self::TWY,
                    self::TXA,
                    self::TXB,
                    self::TXC,
                    self::TXE,
                    self::TXG,
                    self::TXH,
                    self::TXI,
                    self::TXJ,
                    self::TXM,
                    self::TXN,
                    self::TXO,
                    self::TXQ,
                    self::TXR,
                    self::TXS,
                    self::TXT,
                    self::TXU,
                    self::TXX,
                    self::TXY,
                    self::TYA,
                    self::TYE,
                    self::TYH,
                    self::TYI,
                    self::TYJ,
                    self::TYL,
                    self::TYN,
                    self::TYP,
                    self::TYR,
                    self::TYS,
                    self::TYT,
                    self::TYU,
                    self::TYV,
                    self::TYX,
                    self::TYY,
                    self::TYZ,
                    self::TZA,
                    self::TZH,
                    self::TZJ,
                    self::TZL,
                    self::TZM,
                    self::TZN,
                    self::TZO,
                    self::TZX,
                    self::UAM,
                    self::UAN,
                    self::UAR,
                    self::UBA,
                    self::UBI,
                    self::UBL,
                    self::UBR,
                    self::UBU,
                    self::UBY,
                    self::UDA,
                    self::UDE,
                    self::UDG,
                    self::UDI,
                    self::UDJ,
                    self::UDL,
                    self::UDM,
                    self::UDU,
                    self::UES,
                    self::UFI,
                    self::UGA,
                    self::UGB,
                    self::UGE,
                    self::UGH,
                    self::UGN,
                    self::UGO,
                    self::UGY,
                    self::UHA,
                    self::UHN,
                    self::UIG,
                    self::UIS,
                    self::UIV,
                    self::UJI,
                    self::UKA,
                    self::UKG,
                    self::UKH,
                    self::UKI,
                    self::UKK,
                    self::UKL,
                    self::UKP,
                    self::UKQ,
                    self::UKR,
                    self::UKS,
                    self::UKU,
                    self::UKV,
                    self::UKW,
                    self::UKY,
                    self::ULA,
                    self::ULB,
                    self::ULC,
                    self::ULE,
                    self::ULF,
                    self::ULI,
                    self::ULK,
                    self::ULL,
                    self::ULM,
                    self::ULN,
                    self::ULU,
                    self::ULW,
                    self::ULY,
                    self::UMA,
                    self::UMB,
                    self::UMC,
                    self::UMD,
                    self::UMG,
                    self::UMI,
                    self::UMM,
                    self::UMN,
                    self::UMO,
                    self::UMP,
                    self::UMR,
                    self::UMS,
                    self::UMU,
                    self::UNA,
                    self::UND,
                    self::UNE,
                    self::UNG,
                    self::UNI,
                    self::UNK,
                    self::UNM,
                    self::UNN,
                    self::UNR,
                    self::UNU,
                    self::UNX,
                    self::UNZ,
                    self::UON,
                    self::UPI,
                    self::UPV,
                    self::URA,
                    self::URB,
                    self::URC,
                    self::URD,
                    self::URE,
                    self::URF,
                    self::URG,
                    self::URH,
                    self::URI,
                    self::URK,
                    self::URL,
                    self::URM,
                    self::URN,
                    self::URO,
                    self::URP,
                    self::URR,
                    self::URT,
                    self::URU,
                    self::URV,
                    self::URW,
                    self::URX,
                    self::URY,
                    self::URZ,
                    self::USA,
                    self::USH,
                    self::USI,
                    self::USK,
                    self::USP,
                    self::USS,
                    self::USU,
                    self::UTA,
                    self::UTE,
                    self::UTH,
                    self::UTP,
                    self::UTR,
                    self::UTU,
                    self::UUM,
                    self::UUR,
                    self::UUU,
                    self::UVE,
                    self::UVH,
                    self::UVL,
                    self::UWA,
                    self::UYA,
                    self::UZB,
                    self::UZN,
                    self::UZS,
                    self::VAA,
                    self::VAE,
                    self::VAF,
                    self::VAG,
                    self::VAH,
                    self::VAI,
                    self::VAJ,
                    self::VAL,
                    self::VAM,
                    self::VAN,
                    self::VAO,
                    self::VAP,
                    self::VAR,
                    self::VAS,
                    self::VAU,
                    self::VAV,
                    self::VAY,
                    self::VBB,
                    self::VBK,
                    self::VEC,
                    self::VED,
                    self::VEL,
                    self::VEM,
                    self::VEN,
                    self::VEO,
                    self::VEP,
                    self::VER,
                    self::VGR,
                    self::VGT,
                    self::VIC,
                    self::VID,
                    self::VIE,
                    self::VIF,
                    self::VIG,
                    self::VIL,
                    self::VIN,
                    self::VIS,
                    self::VIT,
                    self::VIV,
                    self::VJK,
                    self::VKA,
                    self::VKJ,
                    self::VKK,
                    self::VKL,
                    self::VKM,
                    self::VKN,
                    self::VKO,
                    self::VKP,
                    self::VKT,
                    self::VKU,
                    self::VKZ,
                    self::VLP,
                    self::VLS,
                    self::VMA,
                    self::VMB,
                    self::VMC,
                    self::VMD,
                    self::VME,
                    self::VMF,
                    self::VMG,
                    self::VMH,
                    self::VMI,
                    self::VMJ,
                    self::VMK,
                    self::VML,
                    self::VMM,
                    self::VMP,
                    self::VMQ,
                    self::VMR,
                    self::VMS,
                    self::VMU,
                    self::VMV,
                    self::VMW,
                    self::VMX,
                    self::VMY,
                    self::VMZ,
                    self::VNK,
                    self::VNM,
                    self::VNP,
                    self::VOL,
                    self::VOR,
                    self::VOT,
                    self::VRA,
                    self::VRO,
                    self::VRS,
                    self::VRT,
                    self::VSI,
                    self::VSL,
                    self::VSN,
                    self::VSV,
                    self::VTO,
                    self::VUM,
                    self::VUN,
                    self::VUT,
                    self::VWA,
                    self::WAA,
                    self::WAB,
                    self::WAC,
                    self::WAD,
                    self::WAE,
                    self::WAF,
                    self::WAG,
                    self::WAH,
                    self::WAI,
                    self::WAJ,
                    self::WAL,
                    self::WAM,
                    self::WAN,
                    self::WAO,
                    self::WAP,
                    self::WAQ,
                    self::WAR,
                    self::WAS,
                    self::WAT,
                    self::WAU,
                    self::WAV,
                    self::WAW,
                    self::WAX,
                    self::WAY,
                    self::WAZ,
                    self::WBA,
                    self::WBB,
                    self::WBE,
                    self::WBF,
                    self::WBH,
                    self::WBI,
                    self::WBJ,
                    self::WBK,
                    self::WBL,
                    self::WBM,
                    self::WBP,
                    self::WBQ,
                    self::WBR,
                    self::WBS,
                    self::WBT,
                    self::WBV,
                    self::WBW,
                    self::WCA,
                    self::WCI,
                    self::WDD,
                    self::WDG,
                    self::WDJ,
                    self::WDK,
                    self::WDT,
                    self::WDU,
                    self::WDY,
                    self::WEA,
                    self::WEC,
                    self::WED,
                    self::WEG,
                    self::WEH,
                    self::WEI,
                    self::WEM,
                    self::WEO,
                    self::WEP,
                    self::WER,
                    self::WES,
                    self::WET,
                    self::WEU,
                    self::WEW,
                    self::WFG,
                    self::WGA,
                    self::WGB,
                    self::WGG,
                    self::WGI,
                    self::WGO,
                    self::WGU,
                    self::WGY,
                    self::WHA,
                    self::WHG,
                    self::WHK,
                    self::WHU,
                    self::WIB,
                    self::WIC,
                    self::WIE,
                    self::WIF,
                    self::WIG,
                    self::WIH,
                    self::WII,
                    self::WIJ,
                    self::WIK,
                    self::WIL,
                    self::WIM,
                    self::WIN,
                    self::WIR,
                    self::WIU,
                    self::WIV,
                    self::WIY,
                    self::WJA,
                    self::WJI,
                    self::WKA,
                    self::WKB,
                    self::WKD,
                    self::WKL,
                    self::WKR,
                    self::WKU,
                    self::WKW,
                    self::WKY,
                    self::WLA,
                    self::WLC,
                    self::WLE,
                    self::WLG,
                    self::WLH,
                    self::WLI,
                    self::WLK,
                    self::WLL,
                    self::WLM,
                    self::WLN,
                    self::WLO,
                    self::WLR,
                    self::WLS,
                    self::WLU,
                    self::WLV,
                    self::WLW,
                    self::WLX,
                    self::WLY,
                    self::WMA,
                    self::WMB,
                    self::WMC,
                    self::WMD,
                    self::WME,
                    self::WMG,
                    self::WMH,
                    self::WMI,
                    self::WMM,
                    self::WMN,
                    self::WMO,
                    self::WMS,
                    self::WMT,
                    self::WMW,
                    self::WMX,
                    self::WNB,
                    self::WNC,
                    self::WND,
                    self::WNE,
                    self::WNG,
                    self::WNI,
                    self::WNK,
                    self::WNM,
                    self::WNN,
                    self::WNO,
                    self::WNP,
                    self::WNU,
                    self::WNW,
                    self::WNY,
                    self::WOA,
                    self::WOB,
                    self::WOC,
                    self::WOD,
                    self::WOE,
                    self::WOF,
                    self::WOG,
                    self::WOI,
                    self::WOK,
                    self::WOL,
                    self::WOM,
                    self::WON,
                    self::WOO,
                    self::WOR,
                    self::WOS,
                    self::WOW,
                    self::WOY,
                    self::WPC,
                    self::WRB,
                    self::WRG,
                    self::WRH,
                    self::WRI,
                    self::WRK,
                    self::WRL,
                    self::WRM,
                    self::WRN,
                    self::WRO,
                    self::WRP,
                    self::WRR,
                    self::WRS,
                    self::WRU,
                    self::WRV,
                    self::WRW,
                    self::WRX,
                    self::WRY,
                    self::WRZ,
                    self::WSA,
                    self::WSG,
                    self::WSI,
                    self::WSK,
                    self::WSR,
                    self::WSS,
                    self::WSU,
                    self::WSV,
                    self::WTB,
                    self::WTF,
                    self::WTH,
                    self::WTI,
                    self::WTK,
                    self::WTM,
                    self::WTW,
                    self::WUA,
                    self::WUB,
                    self::WUD,
                    self::WUH,
                    self::WUL,
                    self::WUM,
                    self::WUN,
                    self::WUR,
                    self::WUT,
                    self::WUU,
                    self::WUV,
                    self::WUX,
                    self::WUY,
                    self::WWA,
                    self::WWB,
                    self::WWO,
                    self::WWR,
                    self::WWW,
                    self::WXA,
                    self::WXW,
                    self::WYB,
                    self::WYI,
                    self::WYM,
                    self::WYN,
                    self::WYR,
                    self::WYY,
                    self::XAA,
                    self::XAB,
                    self::XAC,
                    self::XAD,
                    self::XAE,
                    self::XAG,
                    self::XAI,
                    self::XAJ,
                    self::XAK,
                    self::XAL,
                    self::XAM,
                    self::XAN,
                    self::XAO,
                    self::XAP,
                    self::XAQ,
                    self::XAR,
                    self::XAS,
                    self::XAT,
                    self::XAU,
                    self::XAV,
                    self::XAW,
                    self::XAY,
                    self::XBB,
                    self::XBC,
                    self::XBD,
                    self::XBE,
                    self::XBG,
                    self::XBI,
                    self::XBJ,
                    self::XBM,
                    self::XBN,
                    self::XBO,
                    self::XBP,
                    self::XBR,
                    self::XBW,
                    self::XBY,
                    self::XCB,
                    self::XCC,
                    self::XCE,
                    self::XCG,
                    self::XCH,
                    self::XCL,
                    self::XCM,
                    self::XCN,
                    self::XCO,
                    self::XCR,
                    self::XCT,
                    self::XCU,
                    self::XCV,
                    self::XCW,
                    self::XCY,
                    self::XDA,
                    self::XDC,
                    self::XDK,
                    self::XDM,
                    self::XDO,
                    self::XDQ,
                    self::XDY,
                    self::XEB,
                    self::XED,
                    self::XEG,
                    self::XEL,
                    self::XEM,
                    self::XEP,
                    self::XER,
                    self::XES,
                    self::XET,
                    self::XEU,
                    self::XFA,
                    self::XGA,
                    self::XGB,
                    self::XGD,
                    self::XGF,
                    self::XGG,
                    self::XGI,
                    self::XGL,
                    self::XGM,
                    self::XGR,
                    self::XGU,
                    self::XGW,
                    self::XHA,
                    self::XHC,
                    self::XHD,
                    self::XHE,
                    self::XHM,
                    self::XHO,
                    self::XHR,
                    self::XHT,
                    self::XHU,
                    self::XHV,
                    self::XIB,
                    self::XII,
                    self::XIL,
                    self::XIN,
                    self::XIR,
                    self::XIS,
                    self::XIV,
                    self::XIY,
                    self::XJB,
                    self::XJT,
                    self::XKA,
                    self::XKB,
                    self::XKC,
                    self::XKD,
                    self::XKE,
                    self::XKF,
                    self::XKG,
                    self::XKI,
                    self::XKJ,
                    self::XKK,
                    self::XKL,
                    self::XKN,
                    self::XKO,
                    self::XKP,
                    self::XKQ,
                    self::XKR,
                    self::XKS,
                    self::XKT,
                    self::XKU,
                    self::XKV,
                    self::XKW,
                    self::XKX,
                    self::XKY,
                    self::XKZ,
                    self::XLA,
                    self::XLB,
                    self::XLC,
                    self::XLD,
                    self::XLE,
                    self::XLG,
                    self::XLI,
                    self::XLN,
                    self::XLO,
                    self::XLP,
                    self::XLS,
                    self::XLU,
                    self::XLY,
                    self::XMA,
                    self::XMB,
                    self::XMC,
                    self::XMD,
                    self::XME,
                    self::XMF,
                    self::XMG,
                    self::XMH,
                    self::XMJ,
                    self::XMK,
                    self::XML,
                    self::XMM,
                    self::XMN,
                    self::XMO,
                    self::XMP,
                    self::XMQ,
                    self::XMR,
                    self::XMS,
                    self::XMT,
                    self::XMU,
                    self::XMV,
                    self::XMW,
                    self::XMX,
                    self::XMY,
                    self::XMZ,
                    self::XNA,
                    self::XNB,
                    self::XNG,
                    self::XNH,
                    self::XNI,
                    self::XNJ,
                    self::XNK,
                    self::XNM,
                    self::XNN,
                    self::XNO,
                    self::XNQ,
                    self::XNR,
                    self::XNS,
                    self::XNT,
                    self::XNU,
                    self::XNY,
                    self::XNZ,
                    self::XOC,
                    self::XOD,
                    self::XOG,
                    self::XOI,
                    self::XOK,
                    self::XOM,
                    self::XON,
                    self::XOO,
                    self::XOP,
                    self::XOR,
                    self::XOW,
                    self::XPA,
                    self::XPB,
                    self::XPC,
                    self::XPD,
                    self::XPE,
                    self::XPF,
                    self::XPG,
                    self::XPH,
                    self::XPI,
                    self::XPJ,
                    self::XPK,
                    self::XPL,
                    self::XPM,
                    self::XPN,
                    self::XPO,
                    self::XPP,
                    self::XPQ,
                    self::XPR,
                    self::XPS,
                    self::XPT,
                    self::XPU,
                    self::XPV,
                    self::XPW,
                    self::XPX,
                    self::XPY,
                    self::XPZ,
                    self::XQA,
                    self::XQT,
                    self::XRA,
                    self::XRB,
                    self::XRD,
                    self::XRE,
                    self::XRG,
                    self::XRI,
                    self::XRM,
                    self::XRN,
                    self::XRR,
                    self::XRT,
                    self::XRU,
                    self::XRW,
                    self::XSA,
                    self::XSB,
                    self::XSC,
                    self::XSD,
                    self::XSE,
                    self::XSH,
                    self::XSI,
                    self::XSJ,
                    self::XSL,
                    self::XSM,
                    self::XSN,
                    self::XSO,
                    self::XSP,
                    self::XSQ,
                    self::XSR,
                    self::XSU,
                    self::XSV,
                    self::XSY,
                    self::XTA,
                    self::XTB,
                    self::XTC,
                    self::XTD,
                    self::XTE,
                    self::XTG,
                    self::XTH,
                    self::XTI,
                    self::XTJ,
                    self::XTL,
                    self::XTM,
                    self::XTN,
                    self::XTO,
                    self::XTP,
                    self::XTQ,
                    self::XTR,
                    self::XTS,
                    self::XTT,
                    self::XTU,
                    self::XTV,
                    self::XTW,
                    self::XTY,
                    self::XUA,
                    self::XUB,
                    self::XUD,
                    self::XUG,
                    self::XUJ,
                    self::XUL,
                    self::XUM,
                    self::XUN,
                    self::XUO,
                    self::XUP,
                    self::XUR,
                    self::XUT,
                    self::XUU,
                    self::XVE,
                    self::XVI,
                    self::XVN,
                    self::XVO,
                    self::XVS,
                    self::XWA,
                    self::XWC,
                    self::XWD,
                    self::XWE,
                    self::XWG,
                    self::XWJ,
                    self::XWK,
                    self::XWL,
                    self::XWO,
                    self::XWR,
                    self::XWT,
                    self::XWW,
                    self::XXB,
                    self::XXK,
                    self::XXM,
                    self::XXR,
                    self::XXT,
                    self::XYA,
                    self::XYB,
                    self::XYJ,
                    self::XYK,
                    self::XYL,
                    self::XYT,
                    self::XYY,
                    self::XZH,
                    self::XZM,
                    self::XZP,
                    self::YAA,
                    self::YAB,
                    self::YAC,
                    self::YAD,
                    self::YAE,
                    self::YAF,
                    self::YAG,
                    self::YAH,
                    self::YAI,
                    self::YAJ,
                    self::YAK,
                    self::YAL,
                    self::YAM,
                    self::YAN,
                    self::YAO,
                    self::YAP,
                    self::YAQ,
                    self::YAR,
                    self::YAS,
                    self::YAT,
                    self::YAU,
                    self::YAV,
                    self::YAW,
                    self::YAX,
                    self::YAY,
                    self::YAZ,
                    self::YBA,
                    self::YBB,
                    self::YBE,
                    self::YBH,
                    self::YBI,
                    self::YBJ,
                    self::YBK,
                    self::YBL,
                    self::YBM,
                    self::YBN,
                    self::YBO,
                    self::YBX,
                    self::YBY,
                    self::YCH,
                    self::YCL,
                    self::YCN,
                    self::YCP,
                    self::YCR,
                    self::YDA,
                    self::YDD,
                    self::YDE,
                    self::YDG,
                    self::YDK,
                    self::YEA,
                    self::YEC,
                    self::YEE,
                    self::YEI,
                    self::YEJ,
                    self::YEL,
                    self::YER,
                    self::YES,
                    self::YET,
                    self::YEU,
                    self::YEV,
                    self::YEY,
                    self::YGA,
                    self::YGI,
                    self::YGL,
                    self::YGM,
                    self::YGP,
                    self::YGR,
                    self::YGS,
                    self::YGU,
                    self::YGW,
                    self::YHA,
                    self::YHD,
                    self::YHL,
                    self::YHS,
                    self::YIA,
                    self::YID,
                    self::YIF,
                    self::YIG,
                    self::YIH,
                    self::YII,
                    self::YIJ,
                    self::YIK,
                    self::YIL,
                    self::YIM,
                    self::YIN,
                    self::YIP,
                    self::YIQ,
                    self::YIR,
                    self::YIS,
                    self::YIT,
                    self::YIU,
                    self::YIV,
                    self::YIX,
                    self::YIZ,
                    self::YKA,
                    self::YKG,
                    self::YKH,
                    self::YKI,
                    self::YKK,
                    self::YKL,
                    self::YKM,
                    self::YKN,
                    self::YKO,
                    self::YKR,
                    self::YKT,
                    self::YKU,
                    self::YKY,
                    self::YLA,
                    self::YLB,
                    self::YLE,
                    self::YLG,
                    self::YLI,
                    self::YLL,
                    self::YLM,
                    self::YLN,
                    self::YLO,
                    self::YLR,
                    self::YLU,
                    self::YLY,
                    self::YMB,
                    self::YMC,
                    self::YMD,
                    self::YME,
                    self::YMG,
                    self::YMH,
                    self::YMI,
                    self::YMK,
                    self::YML,
                    self::YMM,
                    self::YMN,
                    self::YMO,
                    self::YMP,
                    self::YMQ,
                    self::YMR,
                    self::YMS,
                    self::YMX,
                    self::YMZ,
                    self::YNA,
                    self::YNB,
                    self::YND,
                    self::YNE,
                    self::YNG,
                    self::YNK,
                    self::YNL,
                    self::YNN,
                    self::YNO,
                    self::YNQ,
                    self::YNS,
                    self::YNU,
                    self::YOB,
                    self::YOG,
                    self::YOI,
                    self::YOK,
                    self::YOL,
                    self::YOM,
                    self::YON,
                    self::YOR,
                    self::YOT,
                    self::YOX,
                    self::YOY,
                    self::YPA,
                    self::YPB,
                    self::YPG,
                    self::YPH,
                    self::YPM,
                    self::YPN,
                    self::YPO,
                    self::YPP,
                    self::YPZ,
                    self::YRA,
                    self::YRB,
                    self::YRE,
                    self::YRK,
                    self::YRL,
                    self::YRM,
                    self::YRN,
                    self::YRO,
                    self::YRS,
                    self::YRW,
                    self::YRY,
                    self::YSC,
                    self::YSD,
                    self::YSG,
                    self::YSL,
                    self::YSM,
                    self::YSN,
                    self::YSO,
                    self::YSP,
                    self::YSR,
                    self::YSS,
                    self::YSY,
                    self::YTA,
                    self::YTL,
                    self::YTP,
                    self::YTW,
                    self::YTY,
                    self::YUA,
                    self::YUB,
                    self::YUC,
                    self::YUD,
                    self::YUE,
                    self::YUF,
                    self::YUG,
                    self::YUI,
                    self::YUJ,
                    self::YUK,
                    self::YUL,
                    self::YUM,
                    self::YUN,
                    self::YUP,
                    self::YUQ,
                    self::YUR,
                    self::YUT,
                    self::YUW,
                    self::YUX,
                    self::YUY,
                    self::YUZ,
                    self::YVA,
                    self::YVT,
                    self::YWA,
                    self::YWG,
                    self::YWL,
                    self::YWN,
                    self::YWQ,
                    self::YWR,
                    self::YWT,
                    self::YWU,
                    self::YWW,
                    self::YXA,
                    self::YXG,
                    self::YXL,
                    self::YXM,
                    self::YXU,
                    self::YXY,
                    self::YYR,
                    self::YYU,
                    self::YYZ,
                    self::YZG,
                    self::YZK,
                    self::ZAA,
                    self::ZAB,
                    self::ZAC,
                    self::ZAD,
                    self::ZAE,
                    self::ZAF,
                    self::ZAG,
                    self::ZAH,
                    self::ZAI,
                    self::ZAJ,
                    self::ZAK,
                    self::ZAL,
                    self::ZAM,
                    self::ZAO,
                    self::ZAP,
                    self::ZAQ,
                    self::ZAR,
                    self::ZAS,
                    self::ZAT,
                    self::ZAU,
                    self::ZAV,
                    self::ZAW,
                    self::ZAX,
                    self::ZAY,
                    self::ZAZ,
                    self::ZBA,
                    self::ZBC,
                    self::ZBE,
                    self::ZBL,
                    self::ZBT,
                    self::ZBU,
                    self::ZBW,
                    self::ZCA,
                    self::ZCD,
                    self::ZCH,
                    self::ZDJ,
                    self::ZEA,
                    self::ZEG,
                    self::ZEH,
                    self::ZEM,
                    self::ZEN,
                    self::ZGA,
                    self::ZGB,
                    self::ZGH,
                    self::ZGM,
                    self::ZGN,
                    self::ZGR,
                    self::ZHA,
                    self::ZHB,
                    self::ZHD,
                    self::ZHI,
                    self::ZHN,
                    self::ZHO,
                    self::ZHW,
                    self::ZIA,
                    self::ZIB,
                    self::ZIK,
                    self::ZIL,
                    self::ZIM,
                    self::ZIN,
                    self::ZIW,
                    self::ZIZ,
                    self::ZKA,
                    self::ZKD,
                    self::ZKG,
                    self::ZKH,
                    self::ZKK,
                    self::ZKN,
                    self::ZKO,
                    self::ZKP,
                    self::ZKR,
                    self::ZKT,
                    self::ZKU,
                    self::ZKV,
                    self::ZKZ,
                    self::ZLA,
                    self::ZLJ,
                    self::ZLM,
                    self::ZLN,
                    self::ZLQ,
                    self::ZLU,
                    self::ZMA,
                    self::ZMB,
                    self::ZMC,
                    self::ZMD,
                    self::ZME,
                    self::ZMF,
                    self::ZMG,
                    self::ZMH,
                    self::ZMI,
                    self::ZMJ,
                    self::ZMK,
                    self::ZML,
                    self::ZMM,
                    self::ZMN,
                    self::ZMO,
                    self::ZMP,
                    self::ZMQ,
                    self::ZMR,
                    self::ZMS,
                    self::ZMT,
                    self::ZMU,
                    self::ZMV,
                    self::ZMW,
                    self::ZMX,
                    self::ZMY,
                    self::ZMZ,
                    self::ZNA,
                    self::ZNE,
                    self::ZNG,
                    self::ZNK,
                    self::ZNS,
                    self::ZOC,
                    self::ZOH,
                    self::ZOM,
                    self::ZOO,
                    self::ZOQ,
                    self::ZOR,
                    self::ZOS,
                    self::ZPA,
                    self::ZPB,
                    self::ZPC,
                    self::ZPD,
                    self::ZPE,
                    self::ZPF,
                    self::ZPG,
                    self::ZPH,
                    self::ZPI,
                    self::ZPJ,
                    self::ZPK,
                    self::ZPL,
                    self::ZPM,
                    self::ZPN,
                    self::ZPO,
                    self::ZPP,
                    self::ZPQ,
                    self::ZPR,
                    self::ZPS,
                    self::ZPT,
                    self::ZPU,
                    self::ZPV,
                    self::ZPW,
                    self::ZPX,
                    self::ZPY,
                    self::ZPZ,
                    self::ZQE,
                    self::ZRA,
                    self::ZRG,
                    self::ZRN,
                    self::ZRO,
                    self::ZRP,
                    self::ZRS,
                    self::ZSA,
                    self::ZSK,
                    self::ZSL,
                    self::ZSM,
                    self::ZSR,
                    self::ZSU,
                    self::ZTE,
                    self::ZTG,
                    self::ZTL,
                    self::ZTM,
                    self::ZTN,
                    self::ZTP,
                    self::ZTQ,
                    self::ZTS,
                    self::ZTT,
                    self::ZTU,
                    self::ZTX,
                    self::ZTY,
                    self::ZUH,
                    self::ZUL,
                    self::ZUM,
                    self::ZUN,
                    self::ZUY,
                    self::ZWA,
                    self::ZXX,
                    self::ZYB,
                    self::ZYG,
                    self::ZYJ,
                    self::ZYN,
                    self::ZYP,
                    self::ZZA,
                    self::ZZJ,
                ])
            )
        );
    }
}
