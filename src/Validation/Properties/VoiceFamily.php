<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Traits\InheritableAttribute;
use Lsa\Xsl\Core\Validation\Types\VoiceFamilyType;

/**
 * CSS2 Definition:
 * - Value:  [[`<specific-voice>` | `<generic-voice>` ],]* [`<specific-voice>` | `<generic-voice>` ] | inherit
 * - Initial:  depends on user agent
 * - Inherited:  yes
 * - Percentages:  N/A
 * - Media:  aural
 *
 * A comma-separated, prioritized list of voice family names.
 *
 * @link https://www.w3.org/TR/xsl11/#voice-family
 * @link http://www.w3.org/TR/REC-CSS2/aural.html#propdef-voice-family
 */
class VoiceFamily extends TypedAttribute implements HasDefaultValue
{
    use InheritableAttribute;

    public function __construct()
    {
        parent::__construct('voice-family', VoiceFamilyType::class);
    }

    public function getDefaultValue(): string
    {
        /**
         * In CSS2, there is no "neutral" value. Text-To-Speech is currently more up-to-date with male
         * voices, but it may change in the future.
         */
        return 'male';
    }
}
