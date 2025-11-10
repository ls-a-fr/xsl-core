<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\Azimuth;
use Lsa\Xsl\Core\Validation\Properties\CueAfter;
use Lsa\Xsl\Core\Validation\Properties\CueBefore;
use Lsa\Xsl\Core\Validation\Properties\Elevation;
use Lsa\Xsl\Core\Validation\Properties\Pause;
use Lsa\Xsl\Core\Validation\Properties\Pitch;
use Lsa\Xsl\Core\Validation\Properties\PitchRange;
use Lsa\Xsl\Core\Validation\Properties\PlayDuring;
use Lsa\Xsl\Core\Validation\Properties\Richness;
use Lsa\Xsl\Core\Validation\Properties\Speak;
use Lsa\Xsl\Core\Validation\Properties\SpeakHeader;
use Lsa\Xsl\Core\Validation\Properties\SpeakNumeral;
use Lsa\Xsl\Core\Validation\Properties\SpeakPunctuation;
use Lsa\Xsl\Core\Validation\Properties\SpeechRate;
use Lsa\Xsl\Core\Validation\Properties\Stress;
use Lsa\Xsl\Core\Validation\Properties\VoiceFamily;
use Lsa\Xsl\Core\Validation\Properties\Volume;

/**
 * Common aural properties
 *
 * @see https://www.w3.org/TR/xsl11/#common-aural-properties
 */
class AuralProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            Azimuth::class,
            CueBefore::class,
            CueAfter::class,
            Elevation::class,
            Pause::class,
            Pitch::class,
            PitchRange::class,
            PlayDuring::class,
            Richness::class,
            Speak::class,
            SpeakHeader::class,
            SpeakNumeral::class,
            SpeakPunctuation::class,
            SpeechRate::class,
            Stress::class,
            VoiceFamily::class,
            Volume::class,
        ]);
    }
}
