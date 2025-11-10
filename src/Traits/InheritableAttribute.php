<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Traits;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;

/**
 * An inheritable attribute represents any property that can be inherited.
 *
 * @phpstan-require-extends TypedAttribute
 */
trait InheritableAttribute
{
    /**
     * Gets inherited value based on a specific tag.
     *
     * @param  EmptyTag  $currentTag  Current tag
     * @return string Value if found.
     *
     * @throws InvalidAttributeValueParseException If attribute has no default value
     */
    public function getValue(EmptyTag $currentTag): string
    {
        $it = $currentTag;
        $attributeName = $this->name;
        $value = $it->attributes->get($attributeName);
        while ($it !== null) {
            if ($value !== null) {
                return $value;
            }
            $it = $it->parent();
        }
        if (\in_array(HasDefaultValue::class, \class_implements($this)) === false) {
            throw new InvalidAttributeValueParseException(
                'Attribute '.\get_class($this).' has no default value and is never defined'
            );
        }

        \assert($this instanceof HasDefaultValue);

        return $this->getDefaultValue();
    }
}
