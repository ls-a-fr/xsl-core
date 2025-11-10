<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Contracts;

use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xml\Utils\Xml\Base\Tag;

interface HasDefaultValueWithContext
{
    /**
     * Returns this property default value. This value is computed and needs a context.
     *
     * @param  Tag  $root  Root tag
     * @param  EmptyTag  $node  Current node
     * @return string The default value
     */
    public function getDefaultValueWithContext(Tag $root, EmptyTag $node): string;
}
