<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Font;

use Lsa\Arithmetic\Ast\Exceptions\InvalidFunctionTokenException;
use Lsa\Xml\Utils\Exceptions\PropertyNotFoundException;
use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;

/**
 * The system-font function returns a characteristic of a system font. The first argument is the name of the
 * system font and the second argument, which is optional, names the property that specifies the
 * characteristic. If the second argument is omitted, then the characteristic returned is the same as the
 * name of the property to which the expression is being assigned.
 *
 * For example, the expression "system-font(heading,font-size)" returns the font-size characteristic for the
 * system font named "heading". This is equivalent to the property assignment
 * 'font-size="system-font(heading)"'.
 *
 * Signature:
 * - `object system-font(NCName, NCName?)`
 */
class SystemFontFunction extends XslFunction
{
    public static function getFunctionName(): string
    {
        return 'system-font';
    }

    /**
     * Gets this function parameters
     *
     * @return list<array<self::MODE_*,self::TYPE_*>>
     */
    public static function getParameters(): array
    {
        return [
            [self::MODE_REQUIRED => self::TYPE_NC_NAME],
            [self::MODE_OPTIONAL => self::TYPE_NC_NAME],
        ];
    }

    public function evaluate(...$args): string|float
    {
        if (isset($args[1]) === true && \is_float($args[1]) === true) {
            throw new InvalidAttributeValueParseException(
                self::getFunctionName().'() expects string for argument #2, float given'
            );
        }
        // Check property exists
        if (isset($args[1]) === true) {
            assert(\is_string($args[1]) === true);
            try {
                PropertyBank::getOne($args[1]);
            } catch (PropertyNotFoundException) {
                throw new InvalidFunctionTokenException('Property does not exist for system-font: '.$args[1]);
            }
        }

        // TODO Need a ConfigurationAwareFunction trait
        return 'system-font('.implode(',', $args).')';
    }
}
