<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\Character;
use Lsa\Xsl\Core\Validation\Properties\LetterSpacing;
use Lsa\Xsl\Core\Validation\Properties\SuppressAtLineBreak;
use Lsa\Xsl\Core\Validation\Properties\TextDecoration;
use Lsa\Xsl\Core\Validation\Properties\TextShadow;
use Lsa\Xsl\Core\Validation\Properties\TextTransform;
use Lsa\Xsl\Core\Validation\Properties\TreatAsWordSpace;
use Lsa\Xsl\Core\Validation\Properties\WordSpacing;

/**
 * Character properties
 *
 * @see https://www.w3.org/TR/xsl11/#d0e25178
 */
class CharacterProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            Character::class,
            LetterSpacing::class,
            SuppressAtLineBreak::class,
            TextDecoration::class,
            TextShadow::class,
            TextTransform::class,
            TreatAsWordSpace::class,
            WordSpacing::class,
        ]);
    }
}
