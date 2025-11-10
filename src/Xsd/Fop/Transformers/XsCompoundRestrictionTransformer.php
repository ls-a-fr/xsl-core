<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Transformers;

use Lsa\Xml\Utils\Xml\Attribute;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xml\Utils\Xml\CustomTag;
use Lsa\Xsd\Generator\Base\Transformer;
use Lsa\Xsl\Core\Xsd\Fop\Tags\XsCompoundRestriction;
use Lsa\Xsl\Core\Xsd\Fop\Tags\XsReferencedType;

/**
 * Same transformer as CompoundRestrictionTransformer, enriched with xs namespace
 */
class XsCompoundRestrictionTransformer extends Transformer
{
    public function appliesTo(object $object): bool
    {
        return $object instanceof XsCompoundRestriction;
    }

    public function apply(object $source, Tag $tag): void
    {
        /**
         * XcCompoundRestriction has a CompoundValidator
         *
         * @var \Lsa\Xml\Utils\Contracts\Validator $source
         * @var \Lsa\Xml\Utils\Validation\Validators\CompoundValidator $validator
         */
        $validator = $source->getValidator();

        [$xsSimpleType, $list, $typeTag] = $tag->drill(
            new CustomTag('xs:simpleType'),
            new CustomTag('xs:list'),
            new XsReferencedType($validator->validator)
        );

        $typeTag->evaluate();

        $tag
            ->child((new CustomTag('xs:minLength'))
                ->attribute(new Attribute('value', strval($validator->min))))
            ->child((new CustomTag('xs:maxLength'))
                ->attribute(new Attribute('value', strval($validator->max))));
    }
}
