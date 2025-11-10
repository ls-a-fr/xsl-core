<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\TagGroups\Xsl;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\OutOfLine\FloatElement;
use Lsa\Xsl\Core\Tags\OutOfLine\Footnote;
use Lsa\Xsl\Core\Tags\OutOfLine\FootnoteBody;

/**
 * List of out-of-line formatting objects
 *
 * @see https://www.w3.org/TR/xsl11/#d0e14340
 */
class OutOfLineList extends Choice
{
    public function __construct()
    {
        parent::__construct(
            new Element(FloatElement::class),
            new Element(Footnote::class),
            new Element(FootnoteBody::class)
        );
    }
}
