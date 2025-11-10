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
 * Validates FlowName property.
 *
 * `<name>`:
 *     Names used as identifiers must be unique within an fo:page-sequence.
 *     If the name is empty or if a name-conflict is encountered, an error shall be reported. A processor may
 *     then continue processing.
 *
 * @link https://www.w3.org/TR/xsl11/#flow-name
 */
class FlowNameType extends Type implements DataAwareValidator
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
        // A flow-name must comply with NCName
        if ((new NcNameType())->validate($value) === false) {
            return false;
        }

        // They may not be empty
        if (trim($value) === '') {
            return false;
        }

        if ($root === null) {
            throw new ValidationException('FlowNameType needs root context to validate value.');
        }

        // The flow-names reserved in XSL are: xsl-region-body, xsl-region-before, xsl-region-after,
        // xsl-region-start, xsl-region-end, xsl-before-float-separator, xsl-footnote-separator.
        // However, the implicit FlowMap tree stores default values.
        // As such, id uniqueness constraint is sufficient.
        // Check id uniqueness
        $tagsWithIds = $root->xpath('//*[@flow-name="'.$value.'"]');

        return count($tagsWithIds) === 1;
    }
}
