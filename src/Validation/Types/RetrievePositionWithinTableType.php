<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates RetrievePositionWithinTable property.
 *
 * @link http://www.w3.org/TR/xsl11/#retrieve-position-within-table
 */
class RetrievePositionWithinTableType extends Type implements Validator
{
    /**
     * Preference for retrieving the children of an fo:marker attached to an area (1) that is a
     * descendant of the primary retrieve scope area, (2) whose "is-first" trait is set to "true" (3)
     * and precedes in the area tree, using pre-order traversal order, any other similarly constrained
     * area that has an attached fo:marker with the same value of the "marker-class-name" property.
     */
    public const FIRST_STARTING = 'first-starting';

    /**
     * Preference for retrieving the children of an fo:marker attached to an area (1) that is a descendant
     * of the primary retrieve scope area, (2) and that precedes in the area tree, using pre-order
     * traversal order, any other similarly constrained area that has an attached fo:marker with the same
     * value of the "marker-class-name" property.
     */
    public const FIRST_INCLUDING_CARRYOVER = 'first-including-carryover';

    /**
     * Preference for retrieving the children of an fo:marker attached to an area (1) that is a descendant
     * of a retrieve scope area, (2) whose "is-first" trait is set to "true" (3) and that follows in the
     * area tree, using pre-order traversal order, any other similarly constrained area that has an attached
     * fo:marker with the same value of the "marker-class-name" property.
     */
    public const LAST_STARTING = 'last-starting';

    /**
     * Preference for retrieving the children of an fo:marker attached to an area (1) that is a descendant
     * of a retrieve scope area, (2) and whose "is-last" trait is set to "true" and that follows in the area
     * tree, using pre-order traversal order, any other similarly constrained area that has an attached
     * fo:marker with the same value of the "marker-class-name" property.
     */
    public const LAST_ENDING = 'last-ending';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::FIRST_STARTING,
            self::FIRST_INCLUDING_CARRYOVER,
            self::LAST_STARTING,
            self::LAST_ENDING,
        ]));
    }
}
