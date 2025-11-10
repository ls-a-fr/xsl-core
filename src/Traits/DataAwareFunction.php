<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Traits;

use Lsa\Arithmetic\Ast\Functions\Function_;
use Lsa\Xsl\Core\Exceptions\UnreachableRootTokenException;
use Lsa\Xsl\Core\Tokenizer\Tokens\XslRootToken;

/**
 * A DataAwareFunction is a function that needs RootToken to be evaluated.
 *
 * @phpstan-require-extends Function_
 */
trait DataAwareFunction
{
    /**
     * Returns root token of this function.
     *
     * @return XslRootToken An instance of XslRootToken.
     *
     * @throws UnreachableRootTokenException
     */
    public function getRootToken(): XslRootToken
    {
        $root = $this->getReference()?->root();
        if ($root === null) {
            throw new UnreachableRootTokenException('Cannot get RootToken');
        }
        if (($root instanceof XslRootToken) === false) {
            throw new UnreachableRootTokenException('Cannot get XslRootToken for context');
        }

        return $root;
    }
}
