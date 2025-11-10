<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Transformers\Format;

use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsd\Generator\Tags\Union;
use Lsa\Xsd\Generator\Transformers\Type\UnionTransformer;
use Lsa\Xsl\Core\Validation\Types\BackgroundImageType;
use Lsa\Xsl\Core\Validation\Types\BackgroundPositionHorizontalType;
use Lsa\Xsl\Core\Validation\Types\BackgroundPositionVerticalType;
use Lsa\Xsl\Core\Validation\Types\ColorProfileNameType;
use Lsa\Xsl\Core\Validation\Types\ColorType;
use Lsa\Xsl\Core\Validation\Types\EndIndentType;
use Lsa\Xsl\Core\Validation\Types\ExtentType;
use Lsa\Xsl\Core\Validation\Types\FontType;
use Lsa\Xsl\Core\Validation\Types\HyphenationCharacterType;
use Lsa\Xsl\Core\Validation\Types\HyphenationLadderCountType;
use Lsa\Xsl\Core\Validation\Types\LastLineEndIndentType;
use Lsa\Xsl\Core\Validation\Types\LeaderLengthType;
use Lsa\Xsl\Core\Validation\Types\OrphansType;
use Lsa\Xsl\Core\Validation\Types\ProvisionalDistanceBetweenStartsType;
use Lsa\Xsl\Core\Validation\Types\ProvisionalLabelSeparationType;
use Lsa\Xsl\Core\Validation\Types\SourceType;
use Lsa\Xsl\Core\Validation\Types\SpaceStartType;
use Lsa\Xsl\Core\Validation\Types\StartIndentType;
use Lsa\Xsl\Core\Validation\Types\StressType;
use Lsa\Xsl\Core\Validation\Types\VoiceFamilyType;
use Lsa\Xsl\Core\Validation\Types\WidowsType;
use Lsa\Xsl\Core\Validation\Types\Xsl\KeepType;
use Lsa\Xsl\Core\Xsd\Fop\Compatibility\FakeType;
use Lsa\Xsl\Core\Xsd\Fop\Types\InheritType;

/**
 * FOP types may include shorthand types, common types throughout the XSL specification.
 * To make XSD valid, we need to implement these shorthand where they are used.
 *
 * Handling for fo:inherit_Type only
 */
class InheritTransformer extends UnionTransformer
{
    public function appliesTo(object $object): bool
    {
        return $object instanceof Union &&
            in_array(get_class($object->validator), [
                BackgroundImageType::class,
                BackgroundPositionVerticalType::class,
                BackgroundPositionHorizontalType::class,
                ColorProfileNameType::class,
                ColorType::class,
                EndIndentType::class,
                ExtentType::class,
                FontType::class,
                HyphenationCharacterType::class,
                HyphenationLadderCountType::class,
                KeepType::class,
                LastLineEndIndentType::class,
                LeaderLengthType::class,
                OrphansType::class,
                ProvisionalDistanceBetweenStartsType::class,
                ProvisionalLabelSeparationType::class,
                SourceType::class,
                SpaceStartType::class,
                StartIndentType::class,
                StressType::class,
                VoiceFamilyType::class,
                WidowsType::class,
            ]) && $object->validator->getValidator() instanceof UnionValidator;
    }

    public function apply(object $source, Tag $tag): void
    {
        /**
         * Function appliesTo ensures this is an UnionValidator
         *
         * @var \Lsa\Xml\Utils\Contracts\Validator $source
         * @var \Lsa\Xml\Utils\Validation\Validators\UnionValidator $unionValidator
         */
        $unionValidator = $source->getValidator();
        $otherValidators = array_filter($unionValidator->validators, fn ($v) => ! ($v instanceof EnumValidator));

        $newValidator = new UnionValidator(
            new InheritType(),
            ...$otherValidators
        );

        // Change the source
        parent::apply(new FakeType($newValidator), $tag);
    }
}
