<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Enums;

/**
 * Conformance to this specification is expressed in terms of conformance to any of the [defined] levels.
 *
 * An application that claims conformance to a given level of this specification must implement all the
 * formatting objects and properties that apply to it for a given medium.
 *
 * A Formatting Object Summary specifies which formatting objects belong to each of the above levels, and for
 * what medium.
 *
 * @see https://www.w3.org/TR/xsl11/#FO-summary
 *
 * B Property Summary specifies which properties belong to each of the above levels.
 * @see https://www.w3.org/TR/xsl11/#property-index
 *
 * The minimum level of conformance is Basic. A minimally conformant implementation must process as specified
 * all the formatting objects and properties defined for the Basic level of the implementation's target medium.
 * Implementations may choose to process formatting objects from levels or target media other than the one to
 * which they conform. In order to ensure interoperability, this specification defines a fallback for each
 * formatting object in the Extended and Complete levels.
 * An implementation must not claim conformance to a given level if any of the formatting objects at that level
 * is implemented solely as the fallback specified here for that level. Correct processing of fallbacks does
 * not constitute conformance.
 * Conforming implementations must support at least one of the "writing-mode" values defined in this
 * Recommendation. Although writing-mode is defined as a Basic property with an initial value of "lr-tb", it
 * is not the intention of this specification to impose this particular, or any other, writing mode value on
 * conformant applications. If an implementation does not support a writing-mode used in a stylesheet, either
 * explicitly or by relying on the initial value, it should display either a 'missing character' glyph message
 * or display some indication that the content cannot be correctly rendered.
 */
enum Conformance: string
{
    /**
     * Basic conformance
     * Includes the set of formatting objects and properties needed to support a minimum level of pagination
     * or aural rendering.
     */
    case BASIC = 'basic';
    /**
     * Extended conformance
     * Includes everything else, except for shorthands. It is intended for applications whose goal is to
     * provide sophisticated pagination.
     */
    case EXTENDED = 'extended';
    /**
     * Conformance is not applicable
     */
    case NOT_APPLICABLE = 'N/A';
}
