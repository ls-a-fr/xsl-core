<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;
use Lsa\Xml\Utils\Validation\Validators\CumulativeOptionalValidator;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xsl\Core\Validation\Types\Xsl\BaseColorType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;

/**
 * Validates TextShadow property.
 *
 * @link https://www.w3.org/TR/xsl11/#text-shadow
 */
class TextShadowType extends Type implements Validator
{
    /**
     * Disables any text shadow
     */
    public const NONE = 'none';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            (new CompoundValidator(
                min: 1,
                validator: (new CumulativeOptionalValidator([
                    [
                        CumulativeOptionalValidator::OPTIONAL,
                        new BaseColorType(),
                    ],
                    [
                        CumulativeOptionalValidator::MANDATORY,
                        new LengthType(),
                    ],
                    [
                        CumulativeOptionalValidator::MANDATORY,
                        new LengthType(),
                    ],
                    [
                        CumulativeOptionalValidator::OPTIONAL,
                        new LengthType(),
                    ],
                ]))->separator(' ')->shouldTrim()
            ))->separator(','),
            new EnumValidator([
                self::NONE,
                self::INHERIT,
            ])
        ));
    }
}
