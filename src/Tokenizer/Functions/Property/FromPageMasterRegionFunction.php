<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tokenizer\Functions\Property;

use Lsa\Xml\Utils\Collections\NodeCollection;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Exceptions\InvalidAttributeValueParseException;
use Lsa\Xsl\Core\Tags\Layout\RepeatablePageMasterAlternatives;
use Lsa\Xsl\Core\Tags\Layout\RepeatablePageMasterReference;
use Lsa\Xsl\Core\Tags\Layout\SinglePageMasterReference;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;
use Lsa\Xsl\Core\Tokenizer\Tokens\XslRootToken;
use Lsa\Xsl\Core\Traits\DataAwareFunction;
use Lsa\Xsl\Core\Validation\Types\OddOrEvenType;

/**
 * The from-page-master-region function returns the computed value of the property whose name matches the
 * argument specified, or if omitted for the property for which the expression is being evaluated.
 *
 * In XSL 1.1 this function may only be used as the value of the "writing-mode" and "reference-orientation"
 * properties. In addition the argument of the function must be omitted. If an argument is present, it is an
 * error.
 *
 * The computed value of the designated property is taken from that property on the layout formatting object
 * being used to generate the region viewport/reference area pair.
 *
 * If this function is used in an expression on a formatting object, F, that is a descendant of an
 * fo:page-sequence, then the computed value is taken from the region specification that was used to generate
 * the nearest ancestor region reference area which has as its descendants the areas returned by F.
 *
 * If the argument specifies a property of a compound datatype and if the expression only consists of the
 * inherited-property-value function with an argument matching the property being computed, it is interpreted
 * as an expansion with each component of the compound property having a value of inherited-property-value
 * with an argument matching the component. It is an error if arguments matching a property of a compound
 * datatype are used in any other way.
 *
 * Note:
 *
 * Consider the following example:
 * ```xml
 * <fo:root>
 *   <fo:layout-master-set>
 *     <fo:simple-page-master master-name="all-pages">
 *       <fo:region-body region-name="xsl-region-body" margin="0.75in"
 *                       writing-mode="tb-rl" />
 *       <fo:region-before region-name="xsl-region-before" extent="0.75in"/>
 *     </fo:simple-page-master>
 *     <fo:page-sequence-master master-name="default-sequence">
 *       <fo:repeatable-page-master-reference master-reference="all-pages"/>
 *     </fo:page-sequence-master>
 *   </fo:layout-master-set>
 *   <fo:page-sequence master-name="default-sequence">
 *     <fo:flow flow-name="xsl-region-body">
 *       <fo:block>
 *           [Content in a language which allows either
 *            horizontal or vertical formatting] </fo:block>
 *     </fo:flow>
 *   </fo:page-sequence>
 * </fo:root>
 * ```
 *
 * This example shows a very simple page layout specification. There is a single simple-page-master, named
 * "all-pages". This page-master has two regions defined upon it, "xsl-region-body" and "xsl-region-before".
 * The region named "xsl-region-before" is a page header that accepts static-content (said content is omitted
 * for simplicity in this example). The region named "xsl-region-body" is assigned the content of the single
 * fo:flow in the single fo:page-sequence.
 *
 * In this example, the definition of "xsl-region-body" has a "writing-mode" property. As written, the
 * computed value of this property, "tb-rl", would have no effect on the writing-mode used to fill the region
 * because the writing-mode value used when generating the region viewport/reference area pair would be the
 * computed value on the fo:page-sequence that uses the "xsl-region-body" region definition to generate a
 * region viewport/reference area pair. Since no "writing-mode" property is specified on either the fo:root
 * nor its child, the fo:page-sequence, the initial value would be used for the writing mode for the content
 * that fills the region reference area. The initial value of "writing-mode" is "lr-tb".
 *
 * If, however, the above line that reads:
 * ```xml
 * <fo:page-sequence master-name="default-sequence">
 * ```
 *
 * becomes
 * ```xml
 * <fo:page-sequence master-name="default-sequence"
 *                   writing-mode="from-page-master-region()">
 * ```
 * then the computed value of the "writing-mode" property on the region definitions would be used when
 * instantiating all the viewport/reference area pairs. Thus for the xsl-region-body the specification on the
 * region definition for "xsl-region-body" would be used and the content would receive vertical formatting
 * instead of the default horizontal formatting. Similarly for the xsl-region-before, the computed value of
 * the "writing-mode" on the region definition would be used, in this case the initial value of "lr-tb"
 * inherited from fo:root and the content of the xsl-region-before would be formatted horizontally.
 *
 * Signature:
 * - `object from-parent(NCName?)`
 */
class FromPageMasterRegionFunction extends XslFunction
{
    use DataAwareFunction;

    public static function getFunctionName(): string
    {
        return 'from-page-master-region';
    }

    public static function getParameters(): array
    {
        return [
            [self::MODE_OPTIONAL => self::TYPE_NC_NAME],
        ];
    }

    /**
     * Evaluates this function and returns a result based on given tokens.
     *
     * @param  string  ...$args  Arguments for this function
     * @return string|float Evaluation result
     *
     * @throws InvalidAttributeValueParseException
     */
    public function evaluate(...$args): string|float
    {
        $currentToken = $this->getRootToken();
        // In XSL 1.1 this function may only be used as the value of the "writing-mode" and
        // "reference-orientation" properties. In addition the argument of the function must be omitted.
        // If an argument is present, it is an error.
        if (isset($args[0]) === true) {
            throw new InvalidAttributeValueParseException('Cannot set argument to from-page-master-region in XSL 1.1');
        }

        $propertyName = $currentToken->attribute->name;
        if ($propertyName !== 'reference-orientation' && $propertyName !== 'writing-mode') {
            throw new InvalidAttributeValueParseException(
                'Can only use from-page-master-region with reference-orientation and writing-mode in XSL 1.1'
            );
        }

        $masterName = $currentToken->tag->attributes->get('master-name');
        if ($masterName === null) {
            throw new InvalidAttributeValueParseException('Could not find master-name: '.$masterName);
        }
        $root = $currentToken->tag->root();
        $masterDefinitions = $root->xpath('//layout-master-set/*[@master-name="'.$masterName.'"]');

        if ($masterDefinitions->count() < 1) {
            throw new InvalidAttributeValueParseException('Could not find master-name: '.$masterName);
        }
        if ($masterDefinitions->count() > 1) {
            throw new InvalidAttributeValueParseException('More than one region with master-name: '.$masterName);
        }

        $result = $this->findMasterProperty($currentToken, $masterDefinitions, $masterName);
        if ($result !== null) {
            return $result;
        }

        $this->findPropertyOnRegion($currentToken, $root, $propertyName);

        return $this->getFunctionName().'()';
    }

    /**
     * Utility method to find master property.
     *
     * @param  XslRootToken  $token  Current token to dive in
     * @param  NodeCollection  $masters  Registered master definitions
     * @param  string  $masterName  Searched master-name value
     * @return ?string Evaluated result if found, or null otherwise.
     *
     * @throws InvalidAttributeValueParseException
     */
    protected function findMasterProperty(XslRootToken $token, NodeCollection $masters, string $masterName): ?string
    {
        $currentIndex = $token->tag->getCurrentIndex();
        /**
         * MasterDefinition should be a Tag here.
         *
         * @var Tag $masterDefinition
         */
        $masterDefinition = $masters->first();
        $foundXslRegion = $this->digInMasterDefinitions($masterDefinition, $currentIndex);
        if (\is_string($foundXslRegion) === true) {
            return $foundXslRegion;
        }

        $masterReference = $foundXslRegion?->attributes->get('master-reference');
        if ($foundXslRegion === null || $masterReference === null) {
            throw new InvalidAttributeValueParseException(
                'Cannot find xsl region for master-name: '.$masterName
            );
        }

        if (($token->tag instanceof Tag) === false) {
            throw new InvalidAttributeValueParseException(
                'Cannot compute em value with an EmptyTag, as it as no parent'
            );
        }

        return null;
    }

    /**
     * Utility method to get XSL-FO region from a master definition.
     *
     * @param  Tag  $masterDefinition  Master definition to search into
     * @param  int  $currentIndex  Page current index
     */
    protected function digInMasterDefinitions(Tag $masterDefinition, int $currentIndex): string|EmptyTag|null
    {
        $childCount = 0;
        // phpcs:disable Squiz.PHP.DisallowComparisonAssignment.AssignedComparison
        $isEven = ($currentIndex % 2 === 0);

        foreach ($masterDefinition->getChildren() as $child) {
            // Get flow name to match page-master-region
            if ($child instanceof RepeatablePageMasterAlternatives) {
                $result = $this->digInRepeatable($child, $isEven);
                if ($result instanceof EmptyTag) {
                    return $result;
                }
            }
            if ($child instanceof RepeatablePageMasterReference) {
                $maximumRepeats = $child->attributes->get('maximum-repeats');
                if (
                    $maximumRepeats === null
                    || \intval($maximumRepeats) >= $currentIndex
                ) {
                    return $child;
                }
                $childCount += intval($maximumRepeats);
            }
            if ($child instanceof SinglePageMasterReference) {
                if ($childCount === $currentIndex) {
                    return $child;
                }
                $childCount++;
            }
        }

        return null;
    }

    /**
     * Utility method to dig into RepeatablePageMasterAlternatives
     *
     * @param  Tag  $child  Current child alternative
     * @param  bool  $isEven  Is searched page even or odd
     */
    protected function digInRepeatable(Tag $child, bool $isEven): EmptyTag|string|null
    {
        foreach ($child->getChildren() as $alternative) {
            if ($alternative instanceof EmptyTag === false) {
                continue;
            }
            if ($alternative->attributes->get('blank-or-not-blank') !== null) {
                // Cannot compute this sentence with xsl-core:
                // ---
                // the value of the trait is "blank" and the page generated using the
                // fo:conditional-page-master-reference is such that there are no areas from any
                // fo:flow to be put on that page (e.g., (a) to maintain proper page parity due
                // to (i) a break-after or break-before value of "even-page" or "odd-page" or
                // (ii) at the start or end of the page-sequence or (b) because the constraints on
                // the areas generated by descendants of the fo:flow formatting objects would not
                // be satisfied if they were descendant from this page);
                // ---
                return $this->getFunctionName().'()';
            }
            $oddOrEven = $alternative->attributes->get('odd-or-even');
            if (
                $oddOrEven === OddOrEvenType::ANY
                || ($isEven === true && $oddOrEven === OddOrEvenType::EVEN)
                || ($isEven === false && $oddOrEven === OddOrEvenType::ODD)
            ) {
                return $alternative;
            }
        }

        return null;
    }

    /**
     * Utility method to find property on region. This method verifies the property, but do not evaluate it.
     *
     * @param  XslRootToken  $currentToken  Current token to dive in
     * @param  Tag  $root  Root tag
     * @param  string  $propertyName  Searched property name
     *
     * @throws InvalidAttributeValueParseException
     */
    protected function findPropertyOnRegion(XslRootToken $currentToken, Tag $root, string $propertyName): void
    {
        assert($currentToken->tag instanceof Tag);
        foreach ($currentToken->tag->getChildren() as $child) {
            if (($child instanceof EmptyTag) === false) {
                continue;
            }
            $flowName = $child->attributes->get('flow-name');
            $region = $root->xpath('//layout-master-set/*[@region-name="'.$flowName.'"]')->first();
            if ($region === null || ($region instanceof EmptyTag) === false) {
                throw new InvalidAttributeValueParseException('Cannot find xsl region: '.$flowName);
            }
            if ($region->attributes->get($propertyName) === null) {
                throw new InvalidAttributeValueParseException(
                    'Property '.$propertyName.' is undefined on region: '.$flowName
                );
            }
            /**
             * You may use this value for anything here. But be aware this value is dependant on the
             * underlying fo:flow object, this function is more than a simple shortcut.
             *
             * @example
             * ```php
             * <?php
             * $region->attributes->get($propertyName);
             * ```
             */
        }
    }
}
