<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;

/**
 * Validates BackgroundType property.
 *
 * @link https://www.w3.org/TR/xsl11/#background
 */
class BackgroundType extends Type implements Validator
{
    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new BackgroundColorType(),
            new BackgroundImageType(),
            new BackgroundRepeatType(),
            new BackgroundAttachmentType(),
            new BackgroundPositionType()
        ));
    }
}
