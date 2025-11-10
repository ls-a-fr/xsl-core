<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Contracts\HasDefaultValueWithContext;
use Lsa\Xsl\Core\Exceptions\ValidationException;
use Lsa\Xsl\Core\Validation\Types\RegionNameType;

/**
 * XSL Definition:
 * - Value:  xsl-region-body | xsl-region-start | xsl-region-end | xsl-region-before |
 *     xsl-region-after | `<name>`
 * - Initial:  see prose
 * - Inherited:  no, a value is required
 * - Percentages:  N/A
 * - Media:  visual
 *
 * This property is used to identify a region within a simple-page-master.
 *
 * The "region-name" may be used to differentiate a region that lies on a page-master for an odd page
 * from a region that lies on a page-master for an even page. In this usage, once a name is used for
 * a specific class of region (start, end, before, after, or body), that name may only be used for
 * regions of the same class in any other page-master. The reserved names may only be used in the
 * manner described above.
 *
 * @link https://www.w3.org/TR/xsl11/#region-name
 */
class RegionName extends TypedAttribute implements HasDefaultValueWithContext
{
    public function __construct()
    {
        parent::__construct('region-name', RegionNameType::class);
    }

    /**
     * Returns this property default value. This value is computed and needs a context.
     *
     * @param  Tag  $root  Root tag
     * @param  EmptyTag  $node  Current node
     * @return string The default value
     *
     * @throws ValidationException
     *
     * phpcs:disable Generic.CodeAnalysis.UnusedFunctionParameter.FoundInExtendedClassBeforeLastUsed
     */
    public function getDefaultValueWithContext(Tag $root, EmptyTag $node): string
    {
        $tagName = $node->getTagName();
        switch ($tagName) {
            case 'region-body':
                return RegionNameType::XSL_REGION_BODY;
            case 'region-start':
                return RegionNameType::XSL_REGION_START;
            case 'region-before':
                return RegionNameType::XSL_REGION_BEFORE;
            case 'region-after':
                return RegionNameType::XSL_REGION_AFTER;
            case 'region-end':
                return RegionNameType::XSL_REGION_END;
            default:
                throw new ValidationException('Region name default value is only defined for regions');
        }
    }
}
