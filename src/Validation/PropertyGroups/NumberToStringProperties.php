<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\Format;
use Lsa\Xsl\Core\Validation\Properties\GroupingSeparator;
use Lsa\Xsl\Core\Validation\Properties\GroupingSize;
use Lsa\Xsl\Core\Validation\Properties\LetterValue;

/**
 * Properties for number to string conversion
 *
 * @see https://www.w3.org/TR/xsl11/#d0e29313
 */
class NumberToStringProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            Format::class,
            GroupingSeparator::class,
            GroupingSize::class,
            LetterValue::class,
        ]);
    }
}
