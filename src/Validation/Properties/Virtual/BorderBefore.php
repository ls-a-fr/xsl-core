<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties\Virtual;

use Lsa\Xml\Utils\Validation\ShorthandTypedAttribute;
use Lsa\Xsl\Core\Validation\Properties\BorderBeforeColor;
use Lsa\Xsl\Core\Validation\Properties\BorderBeforeStyle;
use Lsa\Xsl\Core\Validation\Properties\BorderBeforeWidth;

/**
 * BorderBefore virtual attribute.
 * This class does not represent a real "border-before" attribute but help to build the "border" attribute.
 */
class BorderBefore extends ShorthandTypedAttribute
{
    public function __construct()
    {
        $this->noMainAttribute();
        parent::__construct(
            attributes: [
                BorderBeforeColor::class,
                BorderBeforeStyle::class,
                BorderBeforeWidth::class,
            ]
        );
    }
}
