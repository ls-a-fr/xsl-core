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
 * Validates Id property.
 *
 * @link https://www.w3.org/TR/xsl11/#id
 */
class IdType extends Type implements DataAwareValidator
{
    use ProvidesSelfValidation;

    /**
     * Checks the supplied value is an NCName and is unique in the document tree
     *
     * @throws ValidationException
     *
     * phpcs:disable Generic.CodeAnalysis.UnusedFunctionParameter.FoundInExtendedClassAfterLastUsed
     */
    public function validateWithContext(string $value, ?Tag $root, ?EmptyTag $current): bool
    {
        // An id must comply with NCName
        if ((new NcNameType())->validate($value) === false) {
            return false;
        }

        // The "inherit" value is not allowed on this property.
        if ($value === 'inherit') {
            return false;
        }

        if ($root === null) {
            throw new ValidationException('IdType needs root context to validate value.');
        }

        // Check id uniqueness
        $tagsWithIds = $root->xpath('//*[@id="'.$value.'"]');

        return count($tagsWithIds) === 1;
    }
}
