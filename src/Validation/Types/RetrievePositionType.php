<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates RetrievePosition property.
 *
 * @link https://www.w3.org/TR/xsl11/#retrieve-position
 */
class RetrievePositionType extends Type implements Validator
{
    /**
     * Specifies a preference for retrieving the children of an fo:marker attached to an area that is
     * - within the containing page
     * - whose "is-first" trait is set to "true"
     * and that precedes in the area tree, using pre-order traversal order, any other similarly
     * constrained area that has an attached fo:marker with the same value of the "marker-class-name"
     * property.
     */
    public const FIRST_STARTING_WITHIN_PAGE = 'first-starting-within-page';

    /**
     * Specifies a preference for retrieving the children of an fo:marker attached to an area that is
     * within the containing page and that precedes in the area tree, using pre-order traversal order,
     * any other similarly constrained area that has an attached fo:marker with the same value of the
     * "marker-class-name" property.
     */
    public const FIRST_INCLUDING_CARRYOVER = 'first-including-carryover';

    /**
     * Specifies a preference for retrieving the children of an fo:marker attached to an area that is
     * - within the containing page
     * - whose "is-first" trait is set to "true"
     * and that follows in the area tree, using pre-order traversal order, any other similarly
     * constrained area that has an attached fo:marker with the same value of the "marker-class-name"
     * property.
     */
    public const LAST_STARTING_WITHIN_PAGE = 'last-starting-within-page';

    /**
     * Specifies a preference for retrieving the children of an fo:marker attached to an area that is
     * within the containing page whose "is-last" trait is set to "true" and that follows in the area
     * tree, using pre-order traversal order, any other similarly constrained area that has an
     * attached fo:marker with the same value of the "marker-class-name" property.
     */
    public const LAST_ENDING_WITHIN_PAGE = 'last-ending-within-page';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::FIRST_STARTING_WITHIN_PAGE,
            self::FIRST_INCLUDING_CARRYOVER,
            self::LAST_STARTING_WITHIN_PAGE,
            self::LAST_ENDING_WITHIN_PAGE,
        ]));
    }
}
