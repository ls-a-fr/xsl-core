<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\ZIndexType;

/**
 * CSS2 Definition:
 * - Value:  auto | <integer> | inherit
 * - Initial:  auto
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * For a positioned box, the "z-index" property specifies:
 * 1. The stack level of the box in the current stacking context.
 * 2. Whether the box establishes a local stacking context.
 *
 * This example [see the CSS specification] demonstrates the notion of transparency. The default
 * behavior of a box is to allow boxes behind it to be visible through transparent areas in its
 * content. In the example, each box transparently overlays the boxes below it. This behavior can
 * be overridden by using one of the existing background properties.
 *
 * @link https://www.w3.org/TR/xsl11/#z-index
 */
class ZIndex extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('z-index', ZIndexType::class);
    }

    public function getDefaultValue(): string
    {
        return ZIndexType::AUTO;
    }
}
