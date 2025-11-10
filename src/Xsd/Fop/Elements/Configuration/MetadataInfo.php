<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Elements\Configuration;

use DateTime;
use Lsa\Xml\Utils\Xml\Attribute;
use Lsa\Xml\Utils\Xml\CustomTag;
use Lsa\Xsl\Core\Tags\Layout\Declarations;
use RuntimeException;

/**
 * Represents any metadata info for XSL-FO documents
 */
class MetadataInfo
{
    public const W3_FORMAT = 'Y-m-d\TH:i:sP';

    /**
     * Document title
     */
    public readonly string $title;

    /**
     * Document description
     */
    public readonly string $description;

    /**
     * Document keywords
     *
     * @var list<string>
     */
    public readonly array $keywords;

    /**
     * Document about section
     */
    public readonly string $about;

    /**
     * Document creator
     */
    public readonly string $creator;

    /**
     * Document rights
     */
    public readonly string $rights;

    /**
     * Document language
     */
    public readonly string $language;

    /**
     * Document creator tool
     */
    public readonly string $creatorTool;

    /**
     * Document modify date
     */
    public readonly string $modifyDate;

    /**
     * Document create date
     */
    public readonly string $createDate;

    /**
     * Creates a new MetadataInfo object
     *
     * @param  string  $title  Document title
     * @param  string  $description  Document description
     * @param  list<string>  $keywords  Document keywords
     * @param  string  $about  Document about section
     * @param  string  $creator  Document creator
     * @param  string  $rights  Document rights
     * @param  string  $language  Document language
     * @param  string  $creatorTool  Document creator tool
     * @param  string  $modifyDate  Document modify date
     * @param  string  $createDate  Document create date
     */
    final public function __construct(
        string $title = '',
        string $description = '',
        array $keywords = [],
        string $about = '',
        string $creator = '',
        string $rights = '',
        string $language = '',
        string $creatorTool = '',
        string $modifyDate = '',
        string $createDate = '',
    ) { // phpcs:disable Generic.Functions.OpeningFunctionBraceBsdAllman.BraceOnSameLine
        $this->title = $title;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->about = $about;
        $this->creator = $creator;
        $this->rights = $rights;
        $this->language = $language;
        $this->creatorTool = $creatorTool;
        $this->modifyDate = $modifyDate;
        $this->createDate = $createDate;
    }

    /**
     * Checks if this MetadataInfo object has a title
     *
     * @return bool True if it has a title, false otherwise.
     */
    public function hasTitle(): bool
    {
        return trim($this->title) !== '';
    }

    /**
     * Checks if this MetadataInfo object has a description
     *
     * @return bool True if it has a description, false otherwise.
     */
    public function hasDescription(): bool
    {
        return trim($this->description) !== '';
    }

    /**
     * Checks if this MetadataInfo object has keywords
     *
     * @return bool True if it has keywords, false otherwise.
     */
    public function hasKeywords(): bool
    {
        return empty($this->keywords) === false;
    }

    /**
     * Checks if this MetadataInfo object has an about section
     *
     * @return bool True if it has an about section, false otherwise.
     */
    public function hasAbout(): bool
    {
        return trim($this->about) !== '';
    }

    /**
     * Checks if this MetadataInfo object has a creator
     *
     * @return bool True if it has a creator, false otherwise.
     */
    public function hasCreator(): bool
    {
        return trim($this->creator) !== '';
    }

    /**
     * Checks if this MetadataInfo object has rights
     *
     * @return bool True if it has rights, false otherwise.
     */
    public function hasRights(): bool
    {
        return trim($this->rights) !== '';
    }

    /**
     * Checks if this MetadataInfo object has a language
     *
     * @return bool True if it has a language, false otherwise.
     */
    public function hasLanguage(): bool
    {
        return trim($this->language) !== '';
    }

    /**
     * Checks if this MetadataInfo object has a creator tool
     *
     * @return bool True if it has a creator tool, false otherwise.
     */
    public function hasCreatorTool(): bool
    {
        return trim($this->creatorTool) !== '';
    }

    /**
     * Checks if this MetadataInfo object has a modify date
     *
     * @return bool True if it has a modify date, false otherwise.
     */
    public function hasModifyDate(): bool
    {
        return trim($this->modifyDate) !== '';
    }

    /**
     * Checks if this MetadataInfo object has a create date
     *
     * @return bool True if it has a create date, false otherwise.
     */
    public function hasCreateDate(): bool
    {
        return trim($this->createDate) !== '';
    }

    /**
     * Merge another MetadataInfo object in the current one.
     *
     * @param  MetadataInfo  $info  Object to merge into the
     *                              current one. Will take precedence.
     */
    public function merge(MetadataInfo $info): static
    {
        return new static(
            title: $this->getStringValueForMerge('title', $info),
            description: $this->getStringValueForMerge('description', $info),
            keywords: $this->getArrayValueForMerge('keywords', $info),
            about: $this->getStringValueForMerge('about', $info),
            creator: $this->getStringValueForMerge('creator', $info),
            rights: $this->getStringValueForMerge('rights', $info),
            language: $this->getStringValueForMerge('language', $info),
            creatorTool: $this->getStringValueForMerge('creatorTool', $info),
            modifyDate: $this->getStringValueForMerge('modifyDate', $info),
            createDate: $this->getStringValueForMerge('createDate', $info)
        );
    }

    /**
     * Utility method to get a candidate string value for merge.
     *
     * @param  string  $propertyName  Property name to merge
     * @param  MetadataInfo  $source  Object to merge from.
     * @return string Candidate value for merge
     *
     * @throws RuntimeException If property name does not exist, if property is not a string
     */
    protected function getStringValueForMerge(string $propertyName, MetadataInfo $source): string
    {
        if (\property_exists($this, $propertyName) === false) {
            throw new RuntimeException(sprintf('Property %s does not exist', $propertyName));
        }
        if (is_string($source->$propertyName) === false) {
            throw new RuntimeException(sprintf('Property %s is not a string', $propertyName));
        }
        if ($source->$propertyName !== '') {
            return $source->$propertyName;
        }

        return $this->$propertyName;
    }

    /**
     * Utility method to get a candidate array value for merge.
     *
     * @param  string  $propertyName  Property name to merge
     * @param  MetadataInfo  $source  Object to merge from.
     * @return list<string> Candidate value for merge
     *
     * @throws RuntimeException If property name does not exist, if property is not an array
     */
    protected function getArrayValueForMerge(string $propertyName, MetadataInfo $source): array
    {
        if (\property_exists($this, $propertyName) === false) {
            throw new RuntimeException(sprintf('Property %s does not exist', $propertyName));
        }
        if (is_array($source->$propertyName) === false) {
            throw new RuntimeException(sprintf('Property %s is not an array', $propertyName));
        }
        if (empty($source->$propertyName) === false) {
            // @phpstan-ignore return.type
            return array_values($source->$propertyName);
        }

        return array_values($this->$propertyName);
    }

    /**
     * Utility method to format date properties to current W3_FORMAT if empty string supplied.
     *
     * @param  string  $dateValue  The candidate date, may be empty.
     * @return string Supplied string or current date as W3_FORMAT.
     *
     * @see self::W3_FORMAT
     */
    protected function formatDateValue(string $dateValue)
    {
        if ($dateValue !== '') {
            return $dateValue;
        }

        return (new DateTime())->format(self::W3_FORMAT);
    }

    /**
     * Returns a Declarations tag from this object.
     *
     * @return Declarations The declarations tag
     */
    public function asTag(): Declarations
    {
        // phpcs:disable Squiz.PHP.DisallowComparisonAssignment.AssignedComparison
        $declarations = (new Declarations())
            ->child((new CustomTag('meta:xmpmeta'))
                ->attribute(new Attribute('xmlns:meta', 'adobe:ns:meta/'))
                ->child((new CustomTag('rdf:RDF'))
                    ->attribute(new Attribute('xmlns:rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#'))
                    ->child(
                        // phpcs:disable Squiz.PHP.DisallowComparisonAssignment.AssignedComparison
                        // phpcs:disable Squiz.PHP.DisallowMultipleAssignments.Found
                        $description = (new CustomTag('rdf:Description'))
                            ->attribute(new Attribute('rdf:about', $this->about))
                            ->attribute(new Attribute('xmlns:dc', 'http://purl.org/dc/elements/1.1/'))
                            ->attribute(new Attribute('xmlns:pdf', 'http://ns.adobe.com/pdf/1.7/'))
                            ->attribute(new Attribute('xmlns:xmp', 'http://ns.adobe.com/xap/1.0/'))
                            ->child((new CustomTag('dc:creator'))
                                ->content($this->creator))
                            ->child((new CustomTag('dc:rights'))
                                ->content($this->rights))
                            ->child((new CustomTag('dc:title'))
                                ->content($this->title))
                            ->child((new CustomTag('xmp:CreatorTool'))
                                ->content($this->creatorTool))
                            ->child((new CustomTag('xmp:ModifyDate'))
                                ->content($this->formatDateValue($this->modifyDate)))
                            ->child((new CustomTag('xmp:CreateDate'))
                                ->content($this->formatDateValue($this->createDate)))
                    )
                )
            );

        if ($this->description !== '') {
            $description->child((new CustomTag('dc:description'))
                ->content($this->description));
        }
        if (empty($this->keywords) !== false) {
            $description->child((new CustomTag('pdf:Keywords'))
                ->content(implode(',', $this->keywords)));
        }

        return $declarations;
    }
}
