<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\Xsl\IdType;

/**
 * XSL Definition:
 * - Value:  `<id>`
 * - Initial:  see prose
 * - Inherited:  no, see prose
 * - Percentages:  N/A
 * - Media:  all
 *
 * An identifier unique within all objects in the result tree with the fo: namespace. It allows references
 * to this formatting object by other objects.
 *
 * The "inherit" value is not allowed on this property.
 *
 * @link https://www.w3.org/TR/xsl11/#id
 */
class Id extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('id', IdType::class);
    }

    public function getDefaultValue(): string
    {
        /**
         * The initial value of this property is a random and unique identifier. The algorithm to generate this
         * identifier is system-dependent.
         */
        return \bin2hex(\random_bytes(8));
    }
}
