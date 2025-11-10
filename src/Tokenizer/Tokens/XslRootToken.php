<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Tokens;

use Lsa\Arithmetic\Ast\Exceptions\AstException;
use Lsa\Arithmetic\Ast\Tokens\RootToken;
use Lsa\Arithmetic\Ast\Tokens\Token;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;

/**
 * Inherits RootToken, and adds two main features:
 * - An EmToPointConverter
 * - Access to current tag and property for validation purposes
 */
class XslRootToken extends RootToken
{
    public const UNIT_EM = 'em';

    /**
     * Current tag
     */
    public readonly EmptyTag $tag;

    /**
     * Current property
     */
    public readonly TypedAttribute $attribute;

    /**
     * Creates a new XslRootToken.
     *
     * @param  string  $token  Evaluated string
     * @param  Token  $child  Child node
     * @param  EmptyTag  $tag  Current tag
     * @param  TypedAttribute  $attribute  Current property
     */
    public function __construct(string $token, Token $child, EmptyTag $tag, TypedAttribute $attribute)
    {
        parent::__construct($token, $child);
        $this->tag = $tag;
        $this->attribute = $attribute;
    }

    public function evaluate(): float|string
    {
        try {
            return parent::evaluate();
        } catch (AstException $e) {
            throw new InvalidAttributeValueParseException($e->getMessage(), 0, $e);
        }
    }
}
