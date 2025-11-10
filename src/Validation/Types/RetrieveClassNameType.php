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
 * Validates RetrieveClassName property.
 *
 * `<name>`:
 * - A name that matches the "marker-class-name" property value of an fo:marker.
 *
 * @link https://www.w3.org/TR/xsl11/#retrieve-class-name
 */
class RetrieveClassNameType extends Type implements DataAwareValidator
{
    use ProvidesSelfValidation;

    /**
     * Checks the supplied value is an NCName and refers to another name
     *
     * @throws ValidationException
     *
     * phpcs:disable Generic.CodeAnalysis.UnusedFunctionParameter.FoundInExtendedClassAfterLastUsed
     */
    public function validateWithContext(string $value, ?Tag $root, ?EmptyTag $current): bool
    {
        // A retrieve-class-name must comply with NCName
        if ((new NcNameType())->validate($value) === false) {
            return false;
        }

        if ($root === null) {
            throw new ValidationException('RetrieveClassNameType needs root context to validate value.');
        }

        // A retrieve-class-name matches the "marker-class-name" property value of an fo:marker.
        $tagsWithIds = $root->xpath('//marker[@marker-class-name="'.$value.'"]');

        return $tagsWithIds->isEmpty() === false;
    }
}
