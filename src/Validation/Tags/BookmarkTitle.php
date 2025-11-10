<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Any;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Sequence;
use Lsa\Xsl\Core\Validation\Properties\Color;
use Lsa\Xsl\Core\Validation\Properties\FontStyle;
use Lsa\Xsl\Core\Validation\Properties\FontWeight;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;

trait BookmarkTitle
{
    /**
     * Returns this tag definition
     * Identifies, in human readable form, an access point.
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->sequence(new Sequence(
                (new Any(minOccurs: 0, maxOccurs: 'unbounded'))
            ))
            ->allows([
                AccessibilityProperties::class,
                Color::class,
                FontStyle::class,
                FontWeight::class,
            ])
            ->denies(
                /**
                 * This is a dark spot of W3C specification:
                 * - "The following properties apply to this formatting object: [...] 7.9.9 font-weight.
                 *   NOTE: with the value space limited to "normal" and "bold""
                 * - However, B.4 "Properties and the FOs they apply" to does not recognize this.
                 *
                 * This deny list is conservative: many XSL-FO implementations allows (and even applies) listed
                 * properties below.
                 *
                 * @link https://www.w3.org/TR/xsl11/#fo_bookmark-title
                 * @link https://www.w3.org/TR/xsl11/#prapply
                 */
                FontStyle::class,
                FontWeight::class
            )
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
