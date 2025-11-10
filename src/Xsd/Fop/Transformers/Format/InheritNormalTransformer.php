<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Transformers\Format;

use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsd\Generator\Tags\Union;
use Lsa\Xsd\Generator\Transformers\Type\UnionTransformer;
use Lsa\Xsl\Core\Validation\Types\LetterSpacingType;
use Lsa\Xsl\Core\Xsd\Fop\Compatibility\FakeType;
use Lsa\Xsl\Core\Xsd\Fop\Types\InheritType;
use Lsa\Xsl\Core\Xsd\Fop\Types\NormalType;

/**
 * FOP types may include shorthand types, common types throughout the XSL specification.
 * To make XSD valid, we need to implement these shorthand where they are used.
 *
 * Handling for both fo:inherit_Type and fo:normal_Type
 */
class InheritNormalTransformer extends UnionTransformer
{
    public function appliesTo(object $object): bool
    {
        return $object instanceof Union &&
            in_array(get_class($object->validator), [
                LetterSpacingType::class,
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
            new NormalType(),
            ...$otherValidators
        );

        // Change the source
        parent::apply(new FakeType($newValidator), $tag);
    }
}
