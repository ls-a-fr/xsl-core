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
 * Validates CaseName property.
 *
 * `<name>`: Specifies a name for an fo:multi-case. The name must be unique among the current
 * fo:multi-case siblings, i.e., in the scope of the fo:multi-switch object that (directly) contains
 * them. Other instances of fo:multi-switch objects may use the same names for its fo:multi-case
 * objects.
 *
 * @see https://www.w3.org/TR/xsl11/#case-name
 */
class CaseNameType extends Type implements DataAwareValidator
{
    use ProvidesSelfValidation;

    /**
     * Checks the supplied value is an NCName and is unique in the fo:multi-switch object.
     *
     * Mandatory: $current
     *
     * @throws ValidationException
     *
     * phpcs:disable Generic.CodeAnalysis.UnusedFunctionParameter.FoundInExtendedClassBeforeLastUsed
     */
    public function validateWithContext(string $value, ?Tag $root, ?EmptyTag $current): bool
    {
        // A name must comply with NCName
        if ((new NcNameType())->validate($value) === false) {
            return false;
        }

        if ($current === null) {
            throw new ValidationException('CaseNameType needs current context to validate value.');
        }

        // Check name uniqueness
        $names = [];
        $children = $current->parent?->getChildren();
        if ($children === null || $children->isEmpty() === true) {
            return true;
        }
        foreach ($children as $multiCase) {
            // Ignore nodes without attributes
            if (($multiCase instanceof EmptyTag) === false) {
                continue;
            }

            $newName = $multiCase->attributes->get('case-name');
            if (in_array($newName, $names) === true) {
                return false;
            }
            if ($newName !== null) {
                $names[] = $newName;
            }
        }

        return true;
    }
}
