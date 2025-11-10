<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups\Not;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Types\AzimuthType;
use Lsa\Xsl\Core\Validation\Types\CueType;
use Lsa\Xsl\Core\Validation\Types\ElevationType;
use Lsa\Xsl\Core\Validation\Types\PauseType;
use Lsa\Xsl\Core\Validation\Types\PitchRangeType;
use Lsa\Xsl\Core\Validation\Types\PitchType;
use Lsa\Xsl\Core\Validation\Types\PlayDuringType;
use Lsa\Xsl\Core\Validation\Types\RichnessType;
use Lsa\Xsl\Core\Validation\Types\SpeakHeaderType;
use Lsa\Xsl\Core\Validation\Types\SpeakNumeralType;
use Lsa\Xsl\Core\Validation\Types\SpeakPunctuationType;
use Lsa\Xsl\Core\Validation\Types\SpeakType;
use Lsa\Xsl\Core\Validation\Types\SpeechRateType;
use Lsa\Xsl\Core\Validation\Types\StressType;
use Lsa\Xsl\Core\Validation\Types\VoiceFamilyType;
use Lsa\Xsl\Core\Validation\Types\VolumeType;

/**
 * This class is used to validate against fop.xsd file.
 */
class AuralProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Aural_Properties_List_Not';

        parent::__construct([
            new TypedAttribute('azimuth', AzimuthType::class),
            new TypedAttribute('cue', CueType::class),
            new TypedAttribute('cue-after', CueType::class),
            new TypedAttribute('cue-before', CueType::class),
            new TypedAttribute('elevation', ElevationType::class),
            new TypedAttribute('pause', PauseType::class),
            new TypedAttribute('pause-after', PauseType::class),
            new TypedAttribute('pause-before', PauseType::class),
            new TypedAttribute('pitch', PitchType::class),
            new TypedAttribute('pitch-range', PitchRangeType::class),
            new TypedAttribute('play-during', PlayDuringType::class),
            new TypedAttribute('richness', RichnessType::class),
            new TypedAttribute('speak', SpeakType::class),
            new TypedAttribute('speak-header', SpeakHeaderType::class),
            new TypedAttribute('speak-numeral', SpeakNumeralType::class),
            new TypedAttribute('speak-punctuation', SpeakPunctuationType::class),
            new TypedAttribute('speech-rate', SpeechRateType::class),
            new TypedAttribute('stress', StressType::class),
            new TypedAttribute('voice-family', VoiceFamilyType::class),
            new TypedAttribute('volume', VolumeType::class),
        ]);
    }
}
