<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\ContentTypeType;

/**
 * XSL Definition:
 * - Value:  `<string>` | auto
 * Initial:  auto
 * Inherited:  no
 * Percentages:  N/A
 * Media:  visual
 *
 * This property specifies the content-type and may be used by a User Agent to select a rendering processor
 * for the object.
 *
 * @link https://www.w3.org/TR/xsl11/#content-type
 */
class ContentType extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('content-type', ContentTypeType::class);
    }

    public function getDefaultValue(): string
    {
        return ContentTypeType::AUTO;
    }
}
