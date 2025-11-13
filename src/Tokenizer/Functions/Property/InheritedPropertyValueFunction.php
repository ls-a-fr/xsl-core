<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Property;

use Lsa\Xml\Utils\Exceptions\PropertyNotFoundException;
use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;
use Lsa\Xsl\Core\Traits\DataAwareFunction;
use Lsa\Xsl\Core\Traits\InheritableAttribute;

/**
 * The inherited-property-value function returns the inherited value of the property whose name matches the
 * argument specified, or if omitted for the property for which the expression is being evaluated. It is an
 * error if this property is not an inherited property. If the argument specifies a shorthand property and
 * if the expression only consists of the inherited-property-value function with an argument matching the
 * property being computed, it is interpreted as an expansion of the shorthand with each property into which
 * the shorthand expands, each having a value of inherited-property-value with an argument matching the
 * property. It is an error if arguments matching a shorthand property are used in any other way. Similarly,
 * if the argument specifies a property of a compound datatype and if the expression only consists of the
 * inherited-property-value function with an argument matching the property being computed, it is interpreted
 * as an expansion with each component of the compound property having a value of inherited-property-value
 * with an argument matching the component. It is an error if arguments matching a property of a compound
 * datatype are used in any other way.
 *
 * The returned "inherited value" is the computed value of this property on this object's parent. For example,
 * given the following:
 * ```xml
 * <fo:list-block>
 *   ...
 *   <fo:list-item color="red">
 *     <fo:list-item-body background-color="green">
 *       <fo:block background-color="inherited-property-value(color)">
 *       </fo:block>
 *     </fo:list-item-body>
 *   </fo:list-item>
 * </fo:list-block>
 * ```
 *
 * The background-color property on the `fo:block` is assigned the value "red" because the (computed, after
 * inheritance) value of the color (not background-color) property on the `fo:list-item-body` that is the
 * parent of the `fo:block` is "red".
 *
 * Signature:
 * - `object inherited-property-value(NCName?)`
 */
class InheritedPropertyValueFunction extends XslFunction
{
    use DataAwareFunction;

    public static function getFunctionName(): string
    {
        return 'inherited-property-value';
    }

    /**
     * Gets this function parameters
     *
     * @return list<array<self::MODE_*,self::TYPE_*>>
     */
    public static function getParameters(): array
    {
        return [
            [self::MODE_OPTIONAL => self::TYPE_NC_NAME],
        ];
    }

    public function evaluate(...$args): string|float
    {
        $rootToken = $this->getRootToken();
        $propertyName = ($args[0] ?? $rootToken->attribute->name);
        if (\is_float($propertyName) === true) {
            throw new InvalidAttributeValueParseException(
                self::getFunctionName().'() expects string, float given'
            );
        }
        try {
            $property = PropertyBank::getOne($propertyName);
        } catch (PropertyNotFoundException) {
            throw new InvalidAttributeValueParseException('Property '.$propertyName.' does not exist');
        }
        $usedTraits = \class_uses($property);

        // This property is not inheritable
        if (\in_array(InheritableAttribute::class, $usedTraits) === false) {
            throw new InvalidAttributeValueParseException('The property '.$property->name.'is not inheritable');
        }

        $currentTag = $rootToken->tag;

        $it = $currentTag->parent();
        $foundValue = null;

        // Walk through the tree
        while ($it !== null) {
            $foundValue = $it->attributes->get($property->name);
            if ($foundValue !== null) {
                // Inherited value found, continue
                if (\str_starts_with($foundValue, self::getFunctionName().'(') === true) {
                    $foundValue = null;

                    continue;
                }

                return $foundValue;
            }
            $it = $it->parent();
        }
        throw new InvalidAttributeValueParseException(
            'Cannot find inherited property value for property '.$property->name
        );
    }
}
