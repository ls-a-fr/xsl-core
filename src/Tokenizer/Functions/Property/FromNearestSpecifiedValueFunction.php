<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Property;

use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;
use Lsa\Xsl\Core\Traits\DataAwareFunction;

/**
 * The from-nearest-specified-value function returns a computed value of the property whose name matches the
 * argument specified, or if omitted for the property for which the expression is being evaluated. The value
 * returned is that for the closest ancestor of the formatting object for which the expression is evaluated
 * on which there is an assignment of the property in the XML result tree in the fo namespace. If there is no
 * such ancestor, the value returned is the initial value. If the argument specifies a shorthand property and
 * if the expression only consists of the from-nearest-specified-value function with an argument matching the
 * property being computed, it is interpreted as an expansion of the shorthand with each property into which
 * the shorthand expands, each having a value of from-nearest-specified-value with an argument matching the
 * property. It is an error if arguments matching a shorthand property are used in any other way. Similarly,
 * if the argument specifies a property of a compound datatype and if the expression only consists of the
 * from-nearest-specified-value function with an argument matching the property being computed, it is
 * interpreted as an expansion with each component of the compound property having a value of
 * from-nearest-specified-value with an argument matching the component. It is an error if arguments matching
 * a property of a compound datatype are used in any other way.
 *
 * Signature:
 * - `object from-nearest-specified-value(NCName?)`
 *
 * @see https://www.w3.org/TR/xsl11/#speccomact
 */
class FromNearestSpecifiedValueFunction extends XslFunction
{
    use DataAwareFunction;

    public static function getFunctionName(): string
    {
        return 'from-nearest-specified-value';
    }

    public static function getParameters(): array
    {
        return [
            [self::MODE_OPTIONAL => self::TYPE_NC_NAME],
        ];
    }

    public function evaluate(...$args): string|float
    {
        $root = $this->getRootToken();

        $propertyName = ($args[0] ?? $root->attribute->name);
        $currentToken = $root->tag;
        $it = $currentToken->parent();
        $foundValue = null;

        // Walk through the tree
        while ($it !== null) {
            $foundValue = $it->attributes->get($propertyName);
            if ($foundValue !== null) {
                // Inherited value found, continue
                if (\str_starts_with($foundValue, self::getFunctionName().'(') === true) {
                    $foundValue = null;
                } else {
                    return 'from-nearest-specified-value('.($args[0] ?? '').')';
                }
                // TODO: We also may see if this property is a shorthand or compound, and check for any
                // disprepencies in this function call.
            }
            $it = $it->parent();
        }
        throw new InvalidAttributeValueParseException(
            'Cannot find nearest specified value for property '.$propertyName
        );
    }
}
