<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\DataAwareValidator;
use Lsa\Xml\Utils\Traits\ProvidesSelfValidation;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Xml\NcNameType;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Exceptions\ValidationException;

/**
 * Validates RegionNameReference property.
 *
 * `<name>`:
 * - The name identifies a region; it may not be empty and must refer to a region-name that exists within the document.
 *
 * @link https://www.w3.org/TR/xsl11/#region-name-reference
 */
class RegionNameReferenceType extends Type implements DataAwareValidator
{
    use ProvidesSelfValidation;

    /**
     * Checks the supplied value is an NCName and refers to another id
     *
     * @throws ValidationException
     *
     * phpcs:disable Generic.CodeAnalysis.UnusedFunctionParameter.FoundInExtendedClassAfterLastUsed
     */
    public function validateWithContext(string $value, ?Tag $root, ?EmptyTag $current): bool
    {
        // A flow-name-reference must comply with NCName
        if ((new NcNameType())->validate($value) === false) {
            return false;
        }

        // They may not be empty
        if (trim($value) === '') {
            return false;
        }

        if ($root === null) {
            throw new ValidationException('RegionNameReference needs root context to validate value.');
        }

        // A flow-name-reference must match an ID property
        $tagsWithIds = $root->xpath('//*[@region-name="'.$value.'"]');

        return $tagsWithIds->isEmpty() === false;
    }
}
