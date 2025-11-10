<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Inline;

use Lsa\Xsl\Core\Contracts\HasAuralFallback;
use Lsa\Xsl\Core\Contracts\HasVisualFallback;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Traits\ExtendedAuralConformance;
use Lsa\Xsl\Core\Traits\ExtendedVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\ScalingValueCitation as W3ScalingValueCitation;
use Lsa\Xsl\Core\Xml\Tag;

/**
 * The fo:scaling-value-citation is used to obtain the scale-factor applied to the cited fo:external-graphic.
 *
 * Note:
 * It may be used to provide the scale used in applications where a graphic is normally shown at true size, but
 * is scaled down if it does not fit.
 *
 * Areas:
 * The fo:scaling-value-citation formatting object generates and returns a single normal inline-area.
 *
 * Constraints:
 * The cited fo:external-graphic is the fo:external-graphic with an id trait matching the ref-id trait of the
 * fo:scaling-value-citation.
 * The applied scale-factor is the scale-factor that was applied to the intrinsic size of the cited
 * fo:external-graphic multiplied by the value of the "intrinsic-scale-value" property. It is expressed as an
 * integer percentage value. The "scale-option" property specifies if the scale-factor for the width or height
 * should be used.
 *
 * Note:
 * In the case when the graphics format does not specify an intrinsic size of the graphic and the size has been
 * determined in an implementation-defined manner the scale factor obtained may not be meaningful.
 * The applied scale-factor string is obtained by converting the applied scale-factor in accordance with the
 * number to string conversion properties.
 *
 * Note:
 * The conversion properties are: 7.26.1 format, 7.26.2 grouping-separator, 7.26.3 grouping-size,
 * 7.26.4 letter-value, 7.10.1 country, and 7.10.2 language.
 *
 * @see \Lsa\Xsl\Core\Validation\Properties\Format `format`
 * @see \Lsa\Xsl\Core\Validation\Properties\GroupingSeparator `grouping-separator`
 * @see \Lsa\Xsl\Core\Validation\Properties\GroupingSize `grouping-size`
 * @see \Lsa\Xsl\Core\Validation\Properties\LetterValue `letter-value`
 * @see \Lsa\Xsl\Core\Validation\Properties\Country `country`
 * @see \Lsa\Xsl\Core\Validation\Properties\Language `language`
 *
 * The child areas of the generated inline-area are the same as the result of formatting a result-tree fragment
 * consisting of fo:character flow objects; one for each character in the applied scale-factor string and with
 * only the "character" property specified.
 *
 * Contents:
 * EMPTY
 * @see https://www.w3.org/TR/xsl11/#fo_scaling-value-citation
 */
class ScalingValueCitation extends Tag implements HasAuralFallback, HasVisualFallback
{
    use ExtendedAuralConformance;
    use ExtendedVisualConformance;
    use W3ScalingValueCitation;

    public function getVisualFallback(Root $root): ?Tag
    {
        // Fallback: display an indication that content cannot be correctly rendered.
        return new Inline('This content cannot be correctly rendered');
    }

    public function getAuralFallback(Root $root): ?Tag
    {
        // Fallback: speak an indication that content cannot be correctly spoken.
        return new Inline('This content cannot be correctly spoken');
    }
}
