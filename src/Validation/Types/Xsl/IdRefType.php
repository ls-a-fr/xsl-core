<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Xsl;

use Lsa\Xml\Utils\Contracts\DataAwareValidator;
use Lsa\Xml\Utils\Traits\ProvidesSelfValidation;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Xml\NcNameType;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Exceptions\ValidationException;

/**
 * A string of characters conforming to the definition of an NCName in [XML Names]
 * or [XML Names 1.1] and that matches an ID property value used within the stylesheet.
 *
 * @see https://www.w3.org/TR/xsl11/#datatype
 */
class IdRefType extends Type implements DataAwareValidator
{
    use ProvidesSelfValidation;

    public const INHERIT = 'inherit';

    /**
     * Checks the supplied value is an NCName and refers to another id
     *
     * @throws ValidationException
     *
     * phpcs:disable Generic.CodeAnalysis.UnusedFunctionParameter.FoundInExtendedClassAfterLastUsed
     */
    public function validateWithContext(string $value, ?Tag $root, ?EmptyTag $current): bool
    {
        if ($value === self::INHERIT) {
            return true;
        }

        // An idref must comply with NCName
        if ((new NcNameType())->validate($value) === false) {
            return false;
        }

        if ($root === null) {
            throw new ValidationException('IdRefType needs root context to validate value.');
        }

        // An idref must match an ID property
        $tagsWithIds = $root->xpath('//*[@id="'.$value.'"]');

        return $tagsWithIds->isEmpty() === false;
    }
}
