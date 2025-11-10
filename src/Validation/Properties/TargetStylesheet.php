<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\TargetStylesheetType;

/**
 * XSL Definition:
 * - Value:  use-normal-stylesheet | <uri-specification>
 * - Initial:  use-normal-stylesheet
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  interactive
 *
 * @link https://www.w3.org/TR/xsl11/#target-stylesheet
 */
class TargetStylesheet extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('target-stylesheet', TargetStylesheetType::class);
    }

    public function getDefaultValue(): string
    {
        return TargetStylesheetType::USE_NORMAL_STYLESHEET;
    }
}
