<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\PropertyGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xsl\Core\Validation\Properties\Border;
use Lsa\Xsl\Core\Validation\Types\Xsl\ConditionalityType;
use Lsa\Xsl\Core\Validation\Types\Xsl\LengthType;
use Lsa\Xsl\Core\Xsd\Fop\Types\BorderBeforeWidthType;
use Lsa\Xsl\Core\Xsd\Fop\Types\BorderTopWidthType;
use Lsa\Xsl\Core\Xsd\Fop\Types\ColorType;

/**
 * This class is used to validate against fop.xsd file.
 */
class BorderProperties extends AttributeGroup
{
    use HasName;

    public function __construct()
    {
        $this->name = 'Border_Properties_List';
        // phpcs:disable Squiz.Arrays.ArrayDeclaration.ValueNoNewline
        parent::__construct(array_values([
            ...(new Border())
                ->flatten()
                ->filter(
                    fn ($a) => in_array($a->name, [
                        // Not in BorderProperties
                        'border-top',
                        'border-left',
                        'border-right',
                        'border-bottom',
                        // Replaced type
                        'border-left-color',
                        'border-right-color',
                        'border-top-color',
                        'border-bottom-color',
                        'border-before-color',
                        'border-after-color',
                        'border-start-color',
                        'border-end-color',
                        // Also replaced type
                        'border-left-width',
                        'border-right-width',
                        'border-top-width',
                        'border-bottom-width',
                        'border-before-width',
                        'border-after-width',
                        'border-start-width',
                        'border-end-width',
                    ]) === false
                )->toArray(),
            ...[
                // Colors
                new TypedAttribute('border-left-color', ColorType::class),
                new TypedAttribute('border-right-color', ColorType::class),
                new TypedAttribute('border-top-color', ColorType::class),
                new TypedAttribute('border-bottom-color', ColorType::class),
                new TypedAttribute('border-before-color', ColorType::class),
                new TypedAttribute('border-after-color', ColorType::class),
                new TypedAttribute('border-start-color', ColorType::class),
                new TypedAttribute('border-end-color', ColorType::class),
                // Widths
                new TypedAttribute('border-left-width', BorderTopWidthType::class),
                new TypedAttribute('border-right-width', BorderTopWidthType::class),
                new TypedAttribute('border-top-width', BorderTopWidthType::class),
                new TypedAttribute('border-bottom-width', BorderTopWidthType::class),
                new TypedAttribute('border-before-width', BorderBeforeWidthType::class),
                new TypedAttribute('border-after-width', BorderBeforeWidthType::class),
                new TypedAttribute('border-start-width', BorderBeforeWidthType::class),
                new TypedAttribute('border-end-width', BorderBeforeWidthType::class),

                // Added in Apache FOP
                new TypedAttribute('border-top-width.length', LengthType::class),
                new TypedAttribute('border-top-width.conditionality', ConditionalityType::class),
                new TypedAttribute('border-bottom-width.length', LengthType::class),
                new TypedAttribute('border-bottom-width.conditionality', ConditionalityType::class),
                new TypedAttribute('border-left-width.length', LengthType::class),
                new TypedAttribute('border-left-width.conditionality', ConditionalityType::class),
                new TypedAttribute('border-right-width.length', LengthType::class),
                new TypedAttribute('border-right-width.conditionality', ConditionalityType::class),
            ],
        ]));
    }
}
