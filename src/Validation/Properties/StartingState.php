<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Contracts\HasDefaultValue;
use Lsa\Xsl\Core\Validation\Types\StartingStateType;

/**
 * XSL Definition:
 * - Value:  show | hide
 * - Initial:  show
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  interactive
 *
 * Specifies how the formatting object to which it applies is initially displayed.
 *
 * @link https://www.w3.org/TR/xsl11/#starting-state
 */
class StartingState extends TypedAttribute implements HasDefaultValue
{
    public function __construct()
    {
        parent::__construct('starting-state', StartingStateType::class);
    }

    public function getDefaultValue(): string
    {
        return StartingStateType::SHOW;
    }
}
