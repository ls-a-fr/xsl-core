<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tags\Layout;

use DateTime;
use Lsa\Xml\Utils\Xml\Attribute;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xml\Utils\Xml\CustomTag;
use Lsa\Xsl\Core\Traits\BasicAuralConformance;
use Lsa\Xsl\Core\Traits\BasicVisualConformance;
use Lsa\Xsl\Core\Validation\Tags\Declarations as ValidateDeclarations;
use Lsa\Xsl\Core\Validation\Types\Iso639\LanguageType;
use Lsa\Xsl\Core\Xml\Tag;
use Lsa\Xsl\Core\Xsd\Fop\Elements\Configuration\MetadataInfo;

/**
 * The fo:declarations formatting object is used to group global declarations for a stylesheet.
 *
 * Areas:
 * The fo:declarations formatting object does not generate or return any areas.
 *
 * Constraints:
 * None.
 *
 * Contents:
 * (color-profile)*
 *
 * The fo:declarations formatting object may have additional child elements in a non-XSL namespace. Their
 * presence does not, however, change the semantics of the XSL namespace objects and properties. The permitted
 * structure of these non-XSL namespace elements is defined for their namespace(s).
 *
 * @see https://www.w3.org/TR/xsl11/#fo_declarations
 */
class Declarations extends Tag
{
    use BasicAuralConformance;
    use BasicVisualConformance;
    use ValidateDeclarations;

    /**
     * Merge supplied MetadataInfo object into this Declarations tag
     * TODO This method only takes FOP MetadataInfo
     *
     * @param  MetadataInfo  $info  Object to merge from
     */
    public function merge(MetadataInfo $info): void
    {
        if ($info->hasTitle() === true) {
            $this->setTitle($info->title);
        }
        if ($info->hasDescription() === true) {
            $this->setDescription($info->description);
        }
        if ($info->hasKeywords() === true) {
            $this->setKeywords($info->keywords);
        }
        if ($info->hasAbout() === true) {
            $this->setAbout($info->about);
        }
        if ($info->hasCreator() === true) {
            $this->setCreator($info->creator);
        }
        if ($info->hasRights() === true) {
            $this->setRights($info->rights);
        }
        if ($info->hasCreatorTool() === true) {
            $this->setCreatorTool($info->creatorTool);
        }
        if ($info->hasModifyDate() === true) {
            $this->setModifyDate($info->modifyDate);
        }
        if ($info->hasCreateDate() === true) {
            $this->setCreateDate($info->createDate);
        }
    }

    /**
     * Sets the title section
     *
     * @param  string  $title  Title to set
     * @param  string  $prefix  Prefix for this tag (default: dc)
     */
    public function setTitle(string $title, string $prefix = 'dc'): void
    {
        $tagName = $this->formatTagName($prefix, 'title');
        $titleTag = ($this->getDeclarationTag($tagName) ?? new CustomTag($tagName));
        $titleTag->content($title);
    }

    /**
     * Sets the description section
     *
     * @param  string  $description  Description to set
     * @param  string  $prefix  Prefix for this tag (default: dc)
     */
    public function setDescription(string $description, string $prefix = 'dc'): void
    {
        $tagName = $this->formatTagName($prefix, 'description');
        $descriptionTag = ($this->getDeclarationTag($tagName) ?? new CustomTag($tagName));
        $descriptionTag->content($description);
    }

    /**
     * Sets the about section
     *
     * @param  string  $about  Content to set
     * @param  string  $prefix  Prefix for this tag (default: rdf)
     */
    public function setAbout(string $about, string $prefix = 'rdf'): void
    {
        $tagName = $this->formatTagName($prefix, 'Description');
        $aboutTag = ($this->getDeclarationTag($tagName) ?? new CustomTag($tagName));
        $aboutTag->attribute(new Attribute('about', $about, $prefix));
    }

    /**
     * Sets the creator section
     *
     * @param  string  $creator  Creator to set
     * @param  string  $prefix  Prefix for this tag (default: dc)
     */
    public function setCreator(string $creator, string $prefix = 'dc'): void
    {
        $tagName = $this->formatTagName($prefix, 'creator');
        $creatorTag = ($this->getDeclarationTag($tagName) ?? new CustomTag($tagName));
        $creatorTag->content($creator);
    }

    /**
     * Sets the rights section
     *
     * @param  string  $rights  Rights to set
     * @param  string  $prefix  Prefix for this tag (default: dc)
     */
    public function setRights(string $rights, string $prefix = 'dc'): void
    {
        $tagName = $this->formatTagName($prefix, 'rights');
        $rightsTag = ($this->getDeclarationTag($tagName) ?? new CustomTag($tagName));
        $rightsTag->content($rights);
    }

    /**
     * Sets the language (DC)
     *
     * @param  string  $lang  Language to set
     * @param  string  $prefix  Prefix for this tag (default: dc)
     */
    public function setDcLanguage(string $lang, string $prefix = 'dc'): void
    {
        if ((new LanguageType())->validate($lang) === false) {
            trigger_error(
                'Invalid language supplied: Recommended practice is to use either a non-literal value representing
                a language from a controlled vocabulary such as ISO 639-2 or ISO 639-3, or a literal value consisting
                of an IETF Best Current Practice 47 [IETF-BCP47] language tag.'
            );
        }

        $tagName = $this->formatTagName($prefix, 'language');
        $langTag = ($this->getDeclarationTag($tagName) ?? new CustomTag($tagName));
        $langTag->content($lang);
    }

    /**
     * Sets the creator tool section
     *
     * @param  string  $creatorTool  Creator tool to set
     * @param  string  $prefix  Prefix for this tag (default: xmp)
     */
    public function setCreatorTool(string $creatorTool, string $prefix = 'xmp'): void
    {
        $tagName = $this->formatTagName($prefix, 'creatorTool');
        $creatorToolTag = ($this->getDeclarationTag($tagName) ?? new CustomTag($tagName));
        $creatorToolTag->content($creatorTool);
    }

    /**
     * Sets the create date section
     *
     * @param  string|DateTime  $createDate  Create date to set
     * @param  string  $prefix  Prefix for this tag (default: xmp)
     */
    public function setCreateDate(string|DateTime $createDate, string $prefix = 'xmp'): void
    {
        if ($createDate instanceof DateTime) {
            $createDate = $createDate->format(MetadataInfo::W3_FORMAT);
        }

        $tagName = $this->formatTagName($prefix, 'CreateDate');
        $createDateTag = ($this->getDeclarationTag($tagName) ?? new CustomTag($tagName));
        $createDateTag->content($createDate);
    }

    /**
     * Sets the modify date section
     *
     * @param  string|DateTime  $modifyDate  Modify date to set
     * @param  string  $prefix  Prefix for this tag (default: xmp)
     */
    public function setModifyDate(string|DateTime $modifyDate, string $prefix = 'xmp'): void
    {
        if ($modifyDate instanceof DateTime) {
            $modifyDate = $modifyDate->format(MetadataInfo::W3_FORMAT);
        }
        $tagName = $this->formatTagName($prefix, 'ModifyDate');
        $modifyDateTag = ($this->getDeclarationTag($tagName) ?? new CustomTag($tagName));
        $modifyDateTag->content($modifyDate);
    }

    /**
     * Sets the keywords section
     *
     * @param  string|list<string>  $keywords  Keywords to set
     * @param  string  $prefix  Prefix for this tag (default: pdf)
     */
    public function setKeywords(string|array $keywords, string $prefix = 'pdf'): void
    {
        if (is_array($keywords) === true) {
            $keywords = implode(',', $keywords);
        }
        $tagName = $this->formatTagName($prefix, 'keywords');
        $keywordsTag = ($this->getDeclarationTag($tagName) ?? new CustomTag($tagName));
        $keywordsTag->content($keywords);
    }

    /**
     * Gets a inner declaration tag.
     *
     * @param  string  $tagName  Tag name to find
     * @return ?Tag The tag, if any.
     */
    protected function getDeclarationTag(string $tagName): ?Tag
    {
        [$prefix, $tagName] = EmptyTag::splitPrefixAndName($tagName);

        /**
         * Must be instanceof Tag, as supplied in predicate
         *
         * @var Tag $foundTag
         */
        $foundTag = $this
            ->getChildren()
            ->filter(fn ($c) => $c instanceof Tag && $c->getTagName() == $prefix.':'.$tagName)
            ->first();

        return $foundTag;
    }

    /**
     * Formats a tag name with its prefix
     *
     * @param  string  $prefix  Supplied prefix (can be empty string)
     * @param  string  $tagName  Tag name to format
     * @return string Formatted tag name
     */
    protected function formatTagName(string $prefix, string $tagName): string
    {
        if ($prefix !== '') {
            $tagName = $prefix.':'.$tagName;
        }

        return $tagName;
    }
}
