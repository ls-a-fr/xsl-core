<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xml\Utils\Validation\Sequence;
use Lsa\Xsl\Core\Tags\Inline\FolioPrefix;
use Lsa\Xsl\Core\Tags\Inline\FolioSuffix;
use Lsa\Xsl\Core\Tags\Layout\Flow;
use Lsa\Xsl\Core\Tags\Layout\StaticContent;
use Lsa\Xsl\Core\Tags\Layout\Title;
use Lsa\Xsl\Core\Validation\Properties\Country;
use Lsa\Xsl\Core\Validation\Properties\FlowMapReference;
use Lsa\Xsl\Core\Validation\Properties\ForcePageCount;
use Lsa\Xsl\Core\Validation\Properties\Format;
use Lsa\Xsl\Core\Validation\Properties\GroupingSeparator;
use Lsa\Xsl\Core\Validation\Properties\GroupingSize;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\InitialPageNumber;
use Lsa\Xsl\Core\Validation\Properties\Language;
use Lsa\Xsl\Core\Validation\Properties\LetterValue;
use Lsa\Xsl\Core\Validation\Properties\MasterReference;
use Lsa\Xsl\Core\Validation\Properties\ReferenceOrientation;
use Lsa\Xsl\Core\Validation\Properties\WritingMode;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait PageSequence
{
    /**
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->sequence((new Sequence(
                new Element(Title::class, minOccurs: 0),
                new Element(FolioPrefix::class, minOccurs: 0),
                new Element(FolioSuffix::class, minOccurs: 0),
                new Element(StaticContent::class, minOccurs: 0, maxOccurs: 'unbounded'),
                new Element(Flow::class, maxOccurs: 'unbounded')
            )))
            ->require(MasterReference::class)
            ->allows([
                /**
                 * Note: Language property applies to ScalingValueCitation, however Property language applies
                 * only to fo:block and fo:character.
                 * This is not a problem: Language is defined in InheritedProperties.
                 *
                 * Same for Country property.
                 *
                 * @link https://www.w3.org/TR/xsl11/#prapply
                 * @link https://www.w3.org/TR/xsl11/#fo_page-sequence
                 */
                FlowMapReference::class,
                Format::class,
                LetterValue::class,
                GroupingSeparator::class,
                GroupingSize::class,
                Id::class,
                IndexClass::class,
                IndexKey::class,
                InitialPageNumber::class,
                ForcePageCount::class,
                ReferenceOrientation::class,
                WritingMode::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
