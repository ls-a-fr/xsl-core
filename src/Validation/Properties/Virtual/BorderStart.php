<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties\Virtual;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Validation\Properties\BorderStartColor;
use Lsa\Xsl\Core\Validation\Properties\BorderStartStyle;
use Lsa\Xsl\Core\Validation\Properties\BorderStartWidth;

/**
 * BorderStart virtual attribute.
 * This class does not represent a real "border-start" attribute but help to build the "border" attribute.
 */
class BorderStart extends ShorthandTypedAttribute
{
    public function __construct()
    {
        $this->noMainAttribute();
        parent::__construct(
            attributes: [
                BorderStartColor::class,
                BorderStartStyle::class,
                BorderStartWidth::class,
            ]
        );
    }
}
