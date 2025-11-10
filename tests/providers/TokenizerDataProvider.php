<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

use Lsa\Arithmetic\Ast\Exceptions\InvalidOperationException;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Xml\Attribute;
use Lsa\Xml\Utils\Xml\XmlNamespace;
use Lsa\Xsl\Core\Tags\Block\Block;
use Lsa\Xsl\Core\Tags\Layout\Flow;
use Lsa\Xsl\Core\Tags\Layout\LayoutMasterSet;
use Lsa\Xsl\Core\Tags\Layout\PageSequence;
use Lsa\Xsl\Core\Tags\Layout\RegionBody;
use Lsa\Xsl\Core\Tags\Layout\Root;
use Lsa\Xsl\Core\Tags\Layout\SimplePageMaster;
use Lsa\Xsl\Core\Validation\Types\FontSizeType;
use Lsa\Xsl\Core\Validation\Types\LineHeightType;

final class TokenizerDataProvider
{
    private static function structureWithoutParentAttribute()
    {
        (new Root())
            ->namespace(new XmlNamespace('fo', 'http://www.w3.org/1999/XSL/Format'))
            ->child((new LayoutMasterSet())
                ->child((new SimplePageMaster())
                    ->attributes([
                        new Attribute('master-name', 'simple'),
                        new Attribute('page-height', '29.7cm'),
                        new Attribute('page-width', '21cm'),
                        new Attribute('margin', '2cm'),
                    ])
                    ->child(new RegionBody())))
            ->child((new PageSequence())
                ->attribute(new Attribute('master-reference', 'simple'))
                ->child((new Flow())
                    ->attribute(new Attribute('flow-name', 'xsl-region-body'))
                    ->child(($block = new Block())
                        ->attributes([
                            $attr1 = new Attribute('font-size', '1.2em'),
                            $attr2 = new Attribute('line-height', '1.3em'),
                        ])
                        ->content('XSL-FO (Extensible Stylesheet Language Formatting Objects) est un langage XML utilisé pour décrire la mise en page de documents imprimés.')
                    )
                )
            );

        return [$block, $attr1, $attr2];
    }

    private static function structureWithParentAttribute()
    {
        (new Root())
            ->namespace(new XmlNamespace('fo', 'http://www.w3.org/1999/XSL/Format'))
            ->child((new LayoutMasterSet())
                ->child((new SimplePageMaster())
                    ->attributes([
                        new Attribute('master-name', 'simple'),
                        new Attribute('page-height', '29.7cm'),
                        new Attribute('page-width', '21cm'),
                        new Attribute('margin', '2cm'),
                    ])
                    ->child(new RegionBody())))
            ->child((new PageSequence())
                ->attribute(new Attribute('master-reference', 'simple'))
                ->attribute(new Attribute('font-size', '1cm'))
                ->attribute(new Attribute('line-height', '1.1cm'))
                ->child((new Flow())
                    ->attribute(new Attribute('flow-name', 'xsl-region-body'))
                    ->child(($block = new Block())
                        ->attributes([
                            $attr1 = new Attribute('font-size', '1.2em'),
                            $attr2 = new Attribute('line-height', '1.3em'),
                        ])
                        ->content('XSL-FO (Extensible Stylesheet Language Formatting Objects) est un langage XML utilisé pour décrire la mise en page de documents imprimés.')
                    )
                )
            );

        return [$block, $attr1, $attr2];
    }

    public static function validDataProvider(): array
    {
        [$block1, $attr1a, $attr1b] = self::structureWithoutParentAttribute();
        [$block2, $attr2a, $attr2b] = self::structureWithParentAttribute();

        return [
            [
                [$attr1a->value, $block1, new TypedAttribute('font-size', FontSizeType::class)],
                '1.2em',
                14.4,
            ],
            [
                [$attr1b->value, $block1, new TypedAttribute('line-height', LineHeightType::class)],
                '1.3em',
                15.6,
            ],
            [
                [$attr2a->value, $block2, new TypedAttribute('font-size', FontSizeType::class)],
                '1.2em',
                34.01574803149607,
            ],
            [
                [$attr2b->value, $block2, new TypedAttribute('line-height', LineHeightType::class)],
                '1.3em',
                40.53543307086614,
            ],
            [
                ['1 + floor(3in div 2in)'],
                2.0,
                2.0,
            ],
            [
                ['ceiling(floor(2.4) div 3 * 2.4)'],
                2.0,
                2.0,
            ],
            [
                ['1 - (ceiling(3 div 2) * 2.5)'],
                -4.0,
                -4.0,
            ],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [
                ['1 - (2in + 3in)'],
                InvalidOperationException::class,
                'Unit power must be same for - operand',
            ],
        ];
    }
}
