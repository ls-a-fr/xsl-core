<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\PercentageType;

/**
 * Validates ExtentType property.
 *
 * `<length>`
 *     This is an unsigned length. If a negative value has been specified a value of 0pt will be used.
 *
 * `<percentage>`
 *     The value is a percentage of the corresponding block-progression-dimension or
 *     inline-progression-dimension of the page-viewport-area.
 *
 * @link https://www.w3.org/TR/xsl11/#extent
 */
class ExtentType extends Type implements Validator
{
    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new LengthType(),
            new PercentageType(),
            new EnumValidator([
                self::INHERIT,
            ])
        ));
    }
}
