<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xml\Utils\Validation\Xml\NameCharacterType;
use Lsa\Xml\Utils\Validation\Xml\NameStartCharacterType;
use Lsa\Xml\Utils\Validation\Xml\NcNameType;
use Lsa\Xsd\Generator\Transformers\Services\RegexService;

/**
 * Validates RegionName property.
 *
 * `<name>`:
 * - Names used as identifiers must be unique within a page-master.
 *
 * @link https://www.w3.org/TR/xsl11/#region-name
 */
class RegionNameType extends Type implements Validator
{
    /**
     * Reserved region-name for use as the default name of fo:region-body. This name may not be used on any
     * other class of region.
     */
    public const XSL_REGION_BODY = 'xsl-region-body';

    /**
     * Reserved region-name for use as the default name of fo:region-start. This name may not be used on any
     * other class of region.
     */
    public const XSL_REGION_START = 'xsl-region-start';

    /**
     * Reserved region-name for use as the default name of fo:region-end. This name may not be used on any
     * other class of region.
     */
    public const XSL_REGION_END = 'xsl-region-end';

    /**
     * Reserved region-name for use as the default name of fo:region-before. This name may not be used on any
     * other class of region.
     */
    public const XSL_REGION_BEFORE = 'xsl-region-before';

    /**
     * Reserved region-name for use as the default name of fo:region-after. This name may not be used on any
     * other class of region.
     */
    public const XSL_REGION_AFTER = 'xsl-region-after';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new RegexValidator(
                // NcNameType, but excluding current enum values.
                RegexService::excludeTokens([
                    self::XSL_REGION_BODY,
                    self::XSL_REGION_START,
                    self::XSL_REGION_END,
                    self::XSL_REGION_BEFORE,
                    self::XSL_REGION_AFTER,
                    // phpcs:disable Generic.Files.LineLength.TooLong
                ]).'('.NameStartCharacterType::UNPREFIXABLE_NAME_START_CHAR.')('.NameCharacterType::UNPREFIXABLE_NAME_CHAR.')+',
                'u'
            ),
            new EnumValidator([
                self::XSL_REGION_BODY,
                self::XSL_REGION_START,
                self::XSL_REGION_END,
                self::XSL_REGION_BEFORE,
                self::XSL_REGION_AFTER,
            ])
        ));
    }
}
