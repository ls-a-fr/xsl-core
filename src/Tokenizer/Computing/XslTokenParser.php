<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Computing;

use Lsa\Arithmetic\Ast\Computing\TokenParser;
use Lsa\Arithmetic\Ast\Exceptions\AstException;
use Lsa\Arithmetic\Ast\Operands\MinusOperand;
use Lsa\Arithmetic\Ast\Operands\MultiplyOperand;
use Lsa\Arithmetic\Ast\Operands\Operand;
use Lsa\Arithmetic\Ast\Operands\PlusOperand;
use Lsa\Arithmetic\Ast\Providers\OperandProvider;
use Lsa\Arithmetic\Ast\Tokens\RootToken;
use Lsa\Arithmetic\Ast\UnitConverter;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tokenizer\Computing\Converters\EmPointConverter;
use Lsa\Xsl\Core\Tokenizer\Operands\DivideOperand as OperandsDivideOperand;
use Lsa\Xsl\Core\Tokenizer\Operands\ModulusOperand as OperandsModulusOperand;
use Lsa\Xsl\Core\Tokenizer\Providers\ColorFunctionProvider;
use Lsa\Xsl\Core\Tokenizer\Providers\FontFunctionProvider;
use Lsa\Xsl\Core\Tokenizer\Providers\MiscFunctionProvider;
use Lsa\Xsl\Core\Tokenizer\Providers\NumberFunctionProvider;
use Lsa\Xsl\Core\Tokenizer\Providers\PropertyFunctionProvider;
use Lsa\Xsl\Core\Tokenizer\Tokens\XslRootToken;

/**
 * Represents a parser for operations, with XSL-FO (includes Tag and TypedAttribute).
 *
 * An operation consists of terms and operands.
 * Operands can be:
 * - `+`
 * - `-`
 * - `*`
 * - `div`
 * - `mod`
 * - Some function. ex: `floor`
 *
 * Terms can be :
 * - a value with one unit (one power unit): 1cm
 * - a value without unit (zero power unit): 1
 * - parentheses containing another operation: (2in + 1in)
 */
class XslTokenParser extends TokenParser
{
    public static function configure(TokenParser $parser): void
    {
        OperandProvider::merge(
            /**
             * List of operands.
             *
             * @var list<class-string<Operand>>
             */
            [
                PlusOperand::class,
                MinusOperand::class,
                MultiplyOperand::class,
                OperandsDivideOperand::class,
                OperandsModulusOperand::class,
            ]
        );
        NumberFunctionProvider::load();
        ColorFunctionProvider::load();
        FontFunctionProvider::load();
        PropertyFunctionProvider::load();
        MiscFunctionProvider::load();
    }

    public static function parse(string $token, ?EmptyTag $tag = null, ?TypedAttribute $attribute = null): RootToken
    {
        if (($tag === null && $attribute !== null) || ($tag !== null && $attribute === null)) {
            throw new InvalidAttributeValueParseException('Must specify both or none: tag and attribute');
        }

        $parser = self::make();

        try {
            $segments = $parser->doParse($token);
            $tokens = $parser->castTokens($segments);
        } catch (AstException $e) {
            throw new InvalidAttributeValueParseException($e->getMessage(), 0, $e);
        }

        if ($tag !== null && $attribute !== null) {
            $result = new XslRootToken($token, $tokens, $tag, $attribute);
            UnitConverter::make()->addConverter(new EmPointConverter($result));

            return $result;
        }
        $result = new RootToken($token, $tokens);
        UnitConverter::make()->addConverter(new EmPointConverter(null));

        return $result;
    }
}
