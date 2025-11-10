<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xml\Utils\Validation\Sequence;
use Lsa\Xsl\Core\Tags\Inline\Inline;
use Lsa\Xsl\Core\Tags\OutOfLine\FootnoteBody;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait Footnote
{
    /**
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->sequence(new Sequence(
                new Element(Inline::class),
                new Element(FootnoteBody::class),
            ))
            ->allows([
                AccessibilityProperties::class,
                Id::class,
                IndexKey::class,
                IndexClass::class,
            ])
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
