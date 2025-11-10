<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates RetrieveBoundary property.
 *
 * @link https://www.w3.org/TR/xsl11/#retrieve-boundary
 */
class RetrieveBoundaryType extends Type implements Validator
{
    /**
     * Specifies that the children of any fo:markers whose parent generated or returned a normal
     * area within the containing page or generated non-normal area within the containing page may
     * be retrieved by this fo:retrieve-marker.
     */
    public const PAGE = 'page';

    /**
     * Specifies that only the children of fo:markers that are descendants of any fo:flow within
     * the containing fo:page-sequence may be retrieved by this fo:retrieve-marker.
     */
    public const PAGE_SEQUENCE = 'page-sequence';

    /**
     * Specifies that the children of any fo:marker that is a descendant of any fo:flow within the
     * document may be retrieved by this fo:retrieve-marker.
     */
    public const DOCUMENT = 'document';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::PAGE,
            self::PAGE_SEQUENCE,
            self::DOCUMENT,
        ]));
    }
}
