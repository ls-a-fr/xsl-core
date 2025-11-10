<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\Country;
use Lsa\Xsl\Core\Validation\Properties\Hyphenate;
use Lsa\Xsl\Core\Validation\Properties\HyphenationCharacter;
use Lsa\Xsl\Core\Validation\Properties\HyphenationPushCharacterCount;
use Lsa\Xsl\Core\Validation\Properties\HyphenationRemainCharacterCount;
use Lsa\Xsl\Core\Validation\Properties\Language;
use Lsa\Xsl\Core\Validation\Properties\Script;

/**
 * Common hyphenation properties
 *
 * @see https://www.w3.org/TR/xsl11/#common-hyphenation-properties
 */
class HyphenationProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            Country::class,
            Language::class,
            Script::class,
            Hyphenate::class,
            HyphenationCharacter::class,
            HyphenationPushCharacterCount::class,
            HyphenationRemainCharacterCount::class,
        ]);
    }
}
