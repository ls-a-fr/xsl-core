<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates ForcePageCount property.
 *
 * @link https://www.w3.org/TR/xsl11/#force-page-count
 */
class ForcePageCountType extends Type implements Validator
{
    /**
     * Force the last page in this page-sequence to be an odd-page if the initial-page-number of the
     * next page-sequence is even. Force it to be an even-page if the initial-page-number of the next
     * page-sequence is odd. If there is no next page-sequence or if the value of its initial-page-number
     * is "auto" do not force any page.
     */
    public const AUTO = 'auto';

    /**
     * Force an even number of pages in this page-sequence.
     */
    public const EVEN = 'even';

    /**
     * Force an odd number of pages in this page-sequence.
     */
    public const ODD = 'odd';

    /**
     * Force the last page in this page-sequence to be an even-page.
     */
    public const END_ON_EVEN = 'end-on-even';

    /**
     * Force the last page in this page-sequence to be an odd-page.
     */
    public const END_ON_ODD = 'end-on-odd';

    /**
     * Do not force either an even or an odd number of pages in this page-sequence.
     * Note: Whether a page is an odd-page or even-page is determined from the folio-number trait.
     */
    public const NO_FORCE = 'no-force';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::AUTO,
            self::EVEN,
            self::ODD,
            self::END_ON_EVEN,
            self::END_ON_ODD,
            self::NO_FORCE,
            self::INHERIT,
        ]));
    }
}
