<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties\Virtual;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Validation\Properties\Color;

/**
 * BorderSingleColor virtual attribute.
 * This class does not represent a real "single-color" attribute but merges border-xxx-color
 * behavior.
 */
abstract class SingleColor extends ShorthandTypedAttribute
{
    /**
     * Returns this property default value. This value is computed and needs a context.
     *
     * @param  Tag  $root  Root tag
     * @param  EmptyTag  $node  Current node
     * @return string The default value
     *
     * phpcs:disable Generic.CodeAnalysis.UnusedFunctionParameter.FoundInExtendedClassBeforeLastUsed
     */
    public function getDefaultValueWithContext(Tag $root, EmptyTag $node): string
    {
        $color = $node->attributes->get('color');
        if ($color === null) {
            return (new Color())->getDefaultValue();
        }

        return $color;
    }
}
