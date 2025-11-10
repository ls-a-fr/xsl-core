<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties\Virtual;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Validation\Properties\BorderEndColor;
use Lsa\Xsl\Core\Validation\Properties\BorderEndStyle;
use Lsa\Xsl\Core\Validation\Properties\BorderEndWidth;

/**
 * BorderEnd virtual attribute.
 * This class does not represent a real "border-end" attribute but help to build the "border" attribute.
 */
class BorderEnd extends ShorthandTypedAttribute
{
    public function __construct()
    {
        $this->noMainAttribute();
        parent::__construct(
            attributes: [
                BorderEndColor::class,
                BorderEndStyle::class,
                BorderEndWidth::class,
            ]
        );
    }
}
