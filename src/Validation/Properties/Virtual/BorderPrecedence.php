<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties\Virtual;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Contracts\HasDefaultValueWithContext;
use Lsa\Xsl\Core\Exceptions\ValidationException;

/**
 * BorderPrecedence virtual attribute.
 * This class does not represent a real "border-precedence" attribute but merges border-xxx-precedence
 * behavior.
 */
abstract class BorderPrecedence extends ShorthandTypedAttribute implements HasDefaultValueWithContext
{
    /**
     * Returns this property default value. This value is computed and needs a context.
     *
     * @param  Tag  $root  Root tag
     * @param  EmptyTag  $node  Current node
     * @return string The default value
     *
     * @throws ValidationException
     *
     * phpcs:disable Generic.CodeAnalysis.UnusedFunctionParameter.FoundInExtendedClassBeforeLastUsed
     */
    public function getDefaultValueWithContext(Tag $root, EmptyTag $node): string
    {
        $tagName = $node->getTagName();
        switch ($tagName) {
            case 'table':
                return '6';
            case 'table-cell':
                return '5';
            case 'table-column':
                return '4';
            case 'table-row':
                return '3';
            case 'table-body':
                return '2';
            case 'table-header':
                return '1';
            case 'table-footer':
                return '0';
            default:
                throw new ValidationException('Invalid tag found for '.$this->name.': '.$tagName);
        }
    }
}
