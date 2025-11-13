<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Property;

use Lsa\Xml\Utils\Exceptions\PropertyNotFoundException;
use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Contracts\HasDefaultValueWithContext;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;
use Lsa\Xsl\Core\Traits\DataAwareFunction;

/**
 * The from-parent function returns a computed value (see 5.1 Specified, Computed, and Actual Values, and
 * Inheritance) of the property whose name matches the argument specified, or if omitted for the property
 * for which the expression is being evaluated. The value returned is that for the parent of the formatting
 * object for which the expression is evaluated. If there is no parent, the value returned is the initial
 * value. If the argument specifies a shorthand property and if the expression only consists of the
 * from-parent function with an argument matching the property being computed, it is interpreted as an
 * expansion of the shorthand with each property into which the shorthand expands, each having a value of
 * from-parent with an argument matching the property. It is an error if arguments matching a shorthand
 * property are used in any other way. Similarly, if the argument specifies a property of a compound datatype
 * and if the expression only consists of the from-parent function with an argument matching the property
 * being computed, it is interpreted as an expansion with each component of the compound property having a
 * value of from-parent with an argument matching the component. It is an error if arguments matching a
 * property of a compound datatype are used in any other way.
 *
 * Signature:
 * - `object from-parent(NCName?)`
 *
 * @see https://www.w3.org/TR/xsl11/#speccomact
 */
class FromParentFunction extends XslFunction
{
    use DataAwareFunction;

    public static function getFunctionName(): string
    {
        return 'from-parent';
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
        $root = $this->getRootToken();
        $currentToken = $root->tag;
        $propertyName = ($args[0] ?? $root->attribute->name);

        if (\is_float($propertyName) === true) {
            throw new InvalidAttributeValueParseException(
                self::getFunctionName().'() expects string, float given'
            );
        }

        try {
            $property = PropertyBank::getOne($propertyName);
        } catch (PropertyNotFoundException) {
            throw new InvalidAttributeValueParseException('Invalid property found on from-parent: '.$propertyName);
        }

        if ($currentToken->parent() === null) {
            if (in_array(HasDefaultValue::class, \class_uses($property)) === true) {
                assert($property instanceof HasDefaultValue);

                return $property->getDefaultValue();
            } elseif (in_array(HasDefaultValueWithContext::class, class_uses($property)) === true) {
                \assert($property instanceof HasDefaultValueWithContext);

                return $property->getDefaultValueWithContext($currentToken->root(), $currentToken);
            }
            throw new InvalidAttributeValueParseException('Property has no default value, thus must be specified');
        }

        // TODO: We also may see if this property is a shorthand or compound, and check for any
        // disprepencies in this function call.
        return 'from-parent('.($args[0] ?? '').')';
    }
}
