<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xml;

use Lsa\Xml\Utils\Contracts\HasDefinition;
use Lsa\Xml\Utils\Traits\ProvidesAutoTagDefinition;
use Lsa\Xml\Utils\Traits\ProvidesValidation;
use Lsa\Xml\Utils\Xml\Base\EmptyTag as BaseEmptyTag;
use Lsa\Xsl\Core\Contracts\ConformanceCheck;

/**
 * A FOP Empty tag
 *
 * @see https://www.w3.org/TR/xsl/#d0e6567
 */
abstract class EmptyTag extends BaseEmptyTag implements ConformanceCheck, HasDefinition
{
    use ProvidesAutoTagDefinition;
    use ProvidesValidation;
}
