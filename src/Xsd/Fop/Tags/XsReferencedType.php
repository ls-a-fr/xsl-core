<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Tags;

use Lsa\Xsd\Generator\Tags\ReferencedType;

/**
 * Renders a xs:simpleType XSD tag
 */
class XsReferencedType extends ReferencedType
{
    public function getTagName(): string
    {
        return 'xs:simpleType';
    }

    public function shouldBeRendered(): bool
    {
        // <xs:simpleType> tags should not be empty
        return parent::shouldBeRendered() && ! $this->getChildren()->isEmpty();
    }

    public function evaluate(): void
    {
        $found = $this->applyTransformers('evaluate', $this->validator);
        if ($found === false) {
            \trigger_error('Invalid type found: '.get_class($this->validator));
        }
    }
}
