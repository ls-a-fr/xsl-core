<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * Validates LeaderPattern property.
 *
 * @link https://www.w3.org/TR/xsl11/#leader-pattern
 */
class LeaderPatternType extends Type implements Validator
{
    /**
     * Leader is to be filled with blank space.
     */
    public const SPACE = 'space';

    /**
     * Leader is to be filled with a rule.
     * If this choice is selected, the "rule-thickness" and "rule-style" properties are used to set the
     * leader's style.
     */
    public const RULE = 'rule';

    /**
     * Leader is to be filled with a repeating sequence of dots. The choice of dot character is dependent
     * on the user agent.
     */
    public const DOTS = 'dots';

    /**
     * Leader is to be filled with a repeating pattern as specified by the children of the fo:leader.
     */
    public const USE_CONTENT = 'use-content';

    public const INHERIT = 'inherit';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::SPACE,
            self::RULE,
            self::DOTS,
            self::USE_CONTENT,
            self::INHERIT,
        ]));
    }
}
