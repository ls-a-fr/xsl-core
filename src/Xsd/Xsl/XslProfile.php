<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Xsl;

use Lsa\Arithmetic\Ast\Tokens\FunctionToken;
use Lsa\Arithmetic\Ast\UnitConverter;
use Lsa\Xml\Utils\Validation\PropertyBank;
use Lsa\Xml\Utils\Validation\TagValidator;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xml\Utils\Validation\Xml\NcNameType;
use Lsa\Xml\Utils\Validation\Xml\StringType;
use Lsa\Xml\Utils\Xml\Attribute as XmlAttribute;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xml\Utils\Xml\CustomTag;
use Lsa\Xml\Utils\Xml\XmlNamespace;
use Lsa\Xsd\Generator\Configuration\CustomType;
use Lsa\Xsd\Generator\Configuration\InheritableConfiguration;
use Lsa\Xsd\Generator\Finders\AttributeGroupFinder;
use Lsa\Xsd\Generator\Finders\TagFinder;
use Lsa\Xsd\Generator\Finders\TagGroupFinder;
use Lsa\Xsd\Generator\Finders\TypeFinder;
use Lsa\Xsd\Generator\Profiles\XsdProfile;
use Lsa\Xsd\Generator\Tags\Attribute;
use Lsa\Xsd\Generator\Tags\Type;
use Lsa\Xsl\Core\Tokenizer\Computing\XslTokenParser;
use Lsa\Xsl\Core\Tokenizer\Functions\XslFunction;
use Lsa\Xsl\Core\Validation\Types\CaseNameType;
use Lsa\Xsl\Core\Validation\Types\Xsl\IdRefType;
use Lsa\Xsl\Core\Validation\Types\Xsl\IdType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Validation\Types\Xsl\NumberType;
use Lsa\Xsl\Core\Validation\XslPropertyBank;
use Lsa\Xsl\Core\Xml\Tag as FopTag;

/**
 * Profile used for XSD generation based on XSL specification.
 * Some are missing for now
 */
class XslProfile extends XsdProfile
{
    public function getSchema(): Tag
    {
        return (new CustomTag('schema'))
            ->namespace(new XmlNamespace('fo', 'http://www.w3.org/1999/XSL/Format'))
            ->attributes([
                new XmlAttribute('xmlns', 'http://www.w3.org/2001/XMLSchema'),
                new XmlAttribute('targetNamespace', 'http://www.w3.org/1999/XSL/Format'),
                new XmlAttribute('elementFormDefault', 'qualified'),
            ]);
    }

    public function execute(): void
    {
        if ($this->isExecuted === true) {
            return;
        }

        parent::execute();
        PropertyBank::initialize('xsl', XslPropertyBank::getDefinitions());
        TagValidator::addValueComputer(function (EmptyTag $node, TypedAttribute $attribute, ?string $value) {
            if ($value === null) {
                return null;
            }

            return strval(XslTokenParser::parse($value, $node, $attribute)->evaluate());
        });
        FunctionToken::addArgumentValidators([
            XslFunction::TYPE_NUMERIC => fn ($value) => (new UnionValidator(
                new NumberType(),
                new LengthType()
            ))->validate(strval($value)),
            XslFunction::TYPE_NC_NAME => fn ($value) => (new NcNameType())->validate(\strval($value)),
            XslFunction::TYPE_UNIT => function ($value) {
                $converter = UnitConverter::make();
                if ($converter->hasUnit($value) === true || \is_numeric($value) === true) {
                    return true;
                }

                return false;
            },
        ]);

        $this->setDefaultPrefix('fo');

        $this
            ->considerString([
                IdRefType::class,
                IdType::class,
                CaseNameType::class,
            ])
            ->without([
                \Lsa\Xsl\Core\Validation\Types\Css\BorderStyleType::class,
                \Lsa\Xsl\Core\Validation\Types\Iso3166\CountryType::class,
            ])
            ->target(
                Type::class,
                fn ($self) => $self
                    ->without(\Lsa\Xml\Utils\Validation\Xml\StringType::class)
                    ->without(\Lsa\Xsl\Core\Validation\Types\Xsl\UriSpecificationMultipleType::class)
                    ->replace(
                        \Lsa\Xsl\Core\Validation\Types\Xsl\UriSpecificationType::class,
                        new CustomType(
                            new EnumValidator(['uri-specification']),
                            \Lsa\Xsl\Core\Validation\Types\Xsl\UriSpecificationType::class
                        )
                    )
            )->target(
                Attribute::class,
                fn ($self) => $self
                    // XSL
                    ->replace([
                        IdRefType::class,
                        IdType::class,
                    ], new CustomType(new RegexValidator('.*'), StringType::class))
            );
    }

    /**
     * Finders for this profile, may be overriden by subclasses
     *
     * @return InheritableConfiguration Finders' class names
     *
     * @phpstan-ignore missingType.generics
     */
    public function getFinders(): InheritableConfiguration
    {
        return new InheritableConfiguration(__FUNCTION__, [
            new TagFinder($this, 'Lsa\Xsl\Core\Tags'),
            new TagGroupFinder($this, 'Lsa\Xsl\Core\Validation\TagGroups'),
            new TypeFinder($this, 'Lsa\Xsl\Core\Validation\Types'),
            new AttributeGroupFinder($this, 'Lsa\Xsl\Core\Validation\PropertyGroups'),
            InheritableConfiguration::PARENT,
        ]);
    }

    /**
     * Creates a name for a tag (ex <element name="block">)
     *
     * @param  class-string|string|object  $referencedObject  The object to reference (ex: Block::class,
     *                                                        or an instance of this class).
     * @param  class-string  $callerClass  Class asking the name.
     */
    public function getName(string|object $referencedObject, string $callerClass): string
    {
        // A tag has a name.
        if ($referencedObject instanceof FopTag) {
            // Do not bother, use the tag name
            return $referencedObject->getTagName();
        }

        return parent::getName($referencedObject, $callerClass);
    }
}
