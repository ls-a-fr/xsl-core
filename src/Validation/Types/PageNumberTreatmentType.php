<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates PageNumberTreatment property.
 *
 * @link https://www.w3.org/TR/xsl11/#page-number-treatment
 */
class PageNumberTreatmentType extends Type implements Validator
{
    /**
     * Page numbers in the index should be navigable links back to the source of the
     * reference as for fo:basic-link.
     */
    public const LINK = 'link';

    /**
     * Page numbers should not be links.
     */
    public const NO_LINK = 'no-link';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::LINK,
            self::NO_LINK,
        ]));
    }
}
