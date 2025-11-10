<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\CompoundValidator;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xml\Utils\Validation\Xml\NameCharacterType;
use Lsa\Xml\Utils\Validation\Xml\NameStartCharacterType;
use Lsa\Xml\Utils\Validation\Xml\NcNameType;
use Lsa\Xsd\Generator\Transformers\Services\RegexService;

/**
 * Validates SwitchTo property.
 *
 * @link https://www.w3.org/TR/xsl11/#switch-to
 */
class SwitchToType extends Type implements Validator
{
    /**
     * Results in the current fo:multi-case being replaced by its preceding sibling. If the current
     * fo:multi-case is the first sibling, xsl-preceding should switch to the last fo:multi-case sibling.
     */
    public const XSL_PRECEDING = 'xsl-preceding';

    /**
     * Results in that the current fo:multi-case is replaced by its next sibling. If the current
     * fo:multi-case is the last sibling, xsl-following should switch to the first fo:multi-case sibling.
     */
    public const XSL_FOLLOWING = 'xsl-following';

    /**
     * Allows the user to select any other fo:multi-case sibling. If there is only a single other
     * fo:multi-case, the toggle should immediately switch to it (and not show that single choice to the
     * user).
     */
    public const XSL_ANY = 'xsl-any';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            (new CompoundValidator(
                min: 1,
                validator: new RegexValidator(
                    // NcNameType, but excluding current enum values.
                    RegexService::excludeTokens([
                        self::XSL_PRECEDING,
                        self::XSL_FOLLOWING,
                        self::XSL_ANY,
                        // phpcs:disable Generic.Files.LineLength.TooLong
                    ]).'('.NameStartCharacterType::UNPREFIXABLE_NAME_START_CHAR.')('.NameCharacterType::UNPREFIXABLE_NAME_CHAR.')+',
                    'u'
                )
            ))->separator(' '),
            new EnumValidator([
                self::XSL_PRECEDING,
                self::XSL_FOLLOWING,
                self::XSL_ANY,
            ])
        ));
    }
}
