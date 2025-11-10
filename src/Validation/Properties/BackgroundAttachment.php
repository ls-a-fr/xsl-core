<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\BackgroundAttachmentType;

/**
 * CSS2 Definition:
 * - Value:  scroll | fixed | inherit
 * - Initial:  scroll
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * If a background-image is specified, this property specifies whether it is fixed with regard to the
 * viewport (fixed) or scrolls along with the document (scroll).
 * Even if the image is fixed, it is still only visible when it is in the background or padding area of
 * the element. Thus, unless the image is tiled ("background-repeat: repeat"), it may be invisible.
 * User agents may treat fixed as scroll. However, it is recommended they interpret fixed correctly, at
 * least for the HTML and BODY elements, since there is no way for an author to provide an image only for
 * those browsers that support fixed. See the section on conformance for details.
 *
 * @link https://www.w3.org/TR/xsl11/#background-attachment
 * @link http://www.w3.org/TR/REC-CSS2/colors.html#propdef-background-attachment
 */
class BackgroundAttachment extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('background-attachment', BackgroundAttachmentType::class);
    }

    public function getDefaultValue(): string
    {
        return BackgroundAttachmentType::SCROLL;
    }
}
