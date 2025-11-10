<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Tags;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Table\TableCell;
use Lsa\Xsl\Core\Tags\Table\TableRow;
use Lsa\Xsl\Core\Validation\Properties\Background;
use Lsa\Xsl\Core\Validation\Properties\Border;
use Lsa\Xsl\Core\Validation\Properties\BorderAfterPrecedence;
use Lsa\Xsl\Core\Validation\Properties\BorderBeforePrecedence;
use Lsa\Xsl\Core\Validation\Properties\BorderEndPrecedence;
use Lsa\Xsl\Core\Validation\Properties\BorderStartPrecedence;
use Lsa\Xsl\Core\Validation\Properties\Id;
use Lsa\Xsl\Core\Validation\Properties\IndexClass;
use Lsa\Xsl\Core\Validation\Properties\IndexKey;
use Lsa\Xsl\Core\Validation\Properties\PaddingAfter;
use Lsa\Xsl\Core\Validation\Properties\PaddingBefore;
use Lsa\Xsl\Core\Validation\Properties\PaddingBottom;
use Lsa\Xsl\Core\Validation\Properties\PaddingEnd;
use Lsa\Xsl\Core\Validation\Properties\PaddingLeft;
use Lsa\Xsl\Core\Validation\Properties\PaddingRight;
use Lsa\Xsl\Core\Validation\Properties\PaddingStart;
use Lsa\Xsl\Core\Validation\Properties\PaddingTop;
use Lsa\Xsl\Core\Validation\Properties\Visibility;
use Lsa\Xsl\Core\Validation\PropertyGroups\AccessibilityProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\AuralProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\BorderPaddingBackgroundProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\InheritedProperties;
use Lsa\Xsl\Core\Validation\PropertyGroups\RelativePositionProperties;

trait TableBody
{
    /**
     * Returns this tag definition
     *
     * @return Definition This tag definition
     */
    public function asDefinition(): Definition
    {
        return (new Definition())
            ->choice(new Choice(
                new Element(TableRow::class, maxOccurs: 'unbounded'),
                new Element(TableCell::class, maxOccurs: 'unbounded'),
            ))
            ->allows([
                /*
                 * 7.8 Common Border, Padding, and Background Properties
                 * NOTE: Only the background properties: background-attachment, background-color,
                 * background-image, background-repeat, background-position-horizontal, and
                 * background-position-vertical from this set apply. If the value of border-collapse
                 * is "collapse" or "collapse-with-precedence" for the table the border properties:
                 * border-before-color, border-before-style, border-before-width, border-after-color,
                 * border-after-style, border-after-width, border-start-color, border-start-style,
                 * border-start-width, border-end-color, border-end-style, border-end-width,
                 * border-top-color, border-top-style, border-top-width, border-bottom-color,
                 * border-bottom-style, border-bottom-width, border-left-color, border-left-style,
                 * border-left-width, border-right-color, border-right-style, and border-right-width
                 * also apply.
                 */
                AccessibilityProperties::class,
                AuralProperties::class,
                BorderPaddingBackgroundProperties::class,
                RelativePositionProperties::class,
                BorderAfterPrecedence::class,
                BorderBeforePrecedence::class,
                BorderEndPrecedence::class,
                BorderStartPrecedence::class,
                Id::class,
                IndexClass::class,
                IndexKey::class,
                Visibility::class,
            ])
            /**
             * This is a dark spot of W3C specification:
             * - "7.8 Common Border, Padding and Background Properties" defines padding elements as part of
             *   this Definition.
             * - However, B.4 "Properties and the FOs they apply" to does not recognize this.
             *
             * This deny list is conservative: many XSL-FO implementations allows (and even applies) listed
             * properties below.
             *
             * @link https://www.w3.org/TR/xsl11/#common-border-padding-and-background-properties
             * @link https://www.w3.org/TR/xsl11/#prapply
             */
            ->denies(
                PaddingTop::class,
                PaddingLeft::class,
                PaddingRight::class,
                PaddingBottom::class,
                PaddingAfter::class,
                PaddingBefore::class,
                PaddingStart::class,
                PaddingEnd::class,
            )
            ->inheritables([
                InheritedProperties::class,
            ]);
    }
}
