<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Tags;

use Lsa\Xsd\Generator\Tags\Restriction;

/**
 * Renders a xs:restriction XSD tag
 */
class XsCompoundRestriction extends Restriction
{
    public function getTagName(): string
    {
        return 'xs:restriction';
    }

    /**
     * Evaluates this tag. Applies the found transformer on it.
     * This operation is not done on __construct() to connect this tag to the tree
     * (e.g use $tag->child($this)).
     */
    public function evaluate(): void
    {
        $found = $this->applyTransformers('evaluate', $this->validator);
        if ($found === false) {
            \trigger_error('Invalid type found: '.get_class($this->validator));
        }
    }
}
