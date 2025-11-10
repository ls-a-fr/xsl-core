<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties\Virtual;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Validation\Properties\BorderAfterColor;
use Lsa\Xsl\Core\Validation\Properties\BorderAfterStyle;
use Lsa\Xsl\Core\Validation\Properties\BorderAfterWidth;

/**
 * BorderAfter virtual attribute.
 * This class does not represent a real "border-after" attribute but help to build the "border" attribute.
 */
class BorderAfter extends ShorthandTypedAttribute
{
    public function __construct()
    {
        $this->noMainAttribute();
        parent::__construct(
            attributes: [
                BorderAfterColor::class,
                BorderAfterStyle::class,
                BorderAfterWidth::class,
            ]
        );
    }
}
