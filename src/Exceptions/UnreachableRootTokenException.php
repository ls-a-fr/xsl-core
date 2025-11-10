<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Exceptions;

use Exception;

/**
 * This exception is raised when a function cannot access its root token.
 */
class UnreachableRootTokenException extends Exception {}
