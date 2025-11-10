<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\OutOfLine\FloatElement;
use Lsa\Xsl\Core\Tags\OutOfLine\Footnote;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\TagGroups\InlineGroup;
use Lsa\Xsl\Core\Validation\TagGroups\NeutralGroup;

trait IndexPageCitationRangeSeparator
{
    /**
     * Returns this tag definition
     * The separator for two page numbers forming a range in the
     * generated list of page numbers.
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->choice((new Choice(
                new InlineGroup(),
                new NeutralGroup(),
                new Element(FloatElement::class, minOccurs: 0, maxOccurs: 'unbounded'),
                new Element(Footnote::class, minOccurs: 0, maxOccurs: 'unbounded')
            ))->minOccurs(0)->maxOccurs('unbounded'))
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
