<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\PageCitationStrategyType;

/**
 * XSL Definition:
 * - Value:  [ all | normal | non-blank | inherit
 * - Initial:  all
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property determines what set of page areas are considered by a page number citation formatting object.
 * For this property definition, an area matches a ref-id trait with value V if the area is generated either
 * (a.) by the formatting object whose id trait is matched by V, or (b.) by any descendant of that formatting
 * object.
 *
 * A formatting object D is a initial descendant of another formatting object T if D is a descendant of T, the
 * parent of D is a initial descendant of T or is T itself, and D is the initial child of that parent.
 * Similarly, A formatting object D is a final descendant of another formatting object T, if D is a descendant
 * of T, the parent of D is a final descendant of T or is T itself, and D is the final child of that parent.
 *
 * Finally, a formatting object will be said to generate a blank page if that formatting object or any of its
 * final descendants has a "break-after" property that causes the generation of a blank page or if its
 * immediately following sibling or any if the sibling's initial descendants has a "break-before" property
 * that causes the generation of a blank page or if that formatting object is an fo:page-sequence and its
 * "force-page-count" property or the "initial-page-number" on its immediate following sibling causes the
 * generation of a blank page.
 *
 * @link https://www.w3.org/TR/xsl11/#page-citation-strategy
 */
class PageCitationStrategy extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('page-citation-strategy', PageCitationStrategyType::class);
    }

    public function getDefaultValue(): string
    {
        return PageCitationStrategyType::ALL;
    }
}
