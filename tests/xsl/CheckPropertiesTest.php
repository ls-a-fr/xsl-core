<?php

declare(strict_types=1);
require_once __DIR__.'/../../vendor/autoload.php';

use Lsa\Xsd\Generator\Tags\AttributeGroup;
use Lsa\Xsd\Generator\Tags\Element;
use Lsa\Xsd\Generator\Tags\TagGroup;
use Lsa\Xsd\Generator\Tags\Type;
use Lsa\Xsd\Generator\Transformers\DefinitionTransformer;
use Lsa\Xsl\Core\Validation\CurrentValidationProfile;
use Lsa\Xsl\Core\Xsd\Xsl\XslProfile;
use PHPUnit\Framework\TestCase;

/**
 * @see https://www.w3.org/TR/xsl11/#prapply
 */
final class CheckPropertiesTest extends TestCase
{
    private static array $results;

    public static function setUpBeforeClass(): void
    {
        $profile = new XslProfile();
        $profile->execute();
        $profile->postExecute();

        // Validates with XSL profile
        CurrentValidationProfile::inProfile($profile, function ($profile) {
            $results = [
                'elements' => [],
                'types' => [],
                'properties' => [],
            ];

            foreach ($profile->finders as $finder) {
                // "Better safe than sorry" check
                if ($finder === null) {
                    continue;
                }
                foreach ($finder->getResults() as $result) {
                    if ($result instanceof Element) {
                        $definition = $result->element->asDefinition();
                        $properties = $definition->getAppliedAttributes();

                        $results['elements'][str_replace('_', '-', 'fo:'.$profile->getName($result->element, DefinitionTransformer::class))] = [
                            'properties' => $properties,
                        ];

                        continue;
                    }
                    if ($result instanceof Type) {
                        continue;
                    }
                    if ($result instanceof AttributeGroup) {
                        continue;
                    }
                    if ($result instanceof TagGroup) {
                        continue;
                    }
                    throw new RuntimeException('Invalid type found:'.get_class($result));
                }
            }

            self::$results = $results;
        });
    }

    private function renderString(string $propertyName)
    {
        $propertyNames = $this->searchProperty($propertyName);

        return $this->renderStringForArray($propertyName, $propertyNames);
    }

    private function renderStringForArray(string $propertyName, array $propertyNames)
    {
        $lastElement = array_pop($propertyNames);
        $str = implode(', ', $propertyNames).' and '.$lastElement;

        return 'Property '.$propertyName.' applies to: '.$str.'.';
    }

    private function isAppliedAttribute(string $tagName, string $propertyName): bool
    {
        $properties = self::$results['elements'][$tagName]['properties'];
        if (empty($properties) === true || array_key_exists($propertyName, $properties) === false) {
            return false;
        }

        return true;
    }

    private function searchProperty(string $propertyName)
    {
        $tags = [];
        foreach (array_keys(self::$results['elements']) as $tagName) {
            if (! $this->isAppliedAttribute($tagName, $propertyName)) {
                continue;
            }
            $tags[] = $tagName;
        }

        return $tags;
    }

    private function extractTags(string $str): array
    {
        $tagsStr = preg_replace('/^Property [a-z\-]+ applies to: (.*)\.$/', '$1', $str);
        $tagsStr = str_replace([
            ' and ',
            ',',
        ], '|', $tagsStr);
        $tags = explode('|', $tagsStr);

        return array_filter(array_map(fn ($t) => trim($t), $tags), fn ($t) => $t !== '');
    }

    public function test_absolute_position(): void
    {
        $xslStr = 'Property absolute-position applies to: fo:block-container.';
        $checkedStr = $this->renderString('absolute-position');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_active_state(): void
    {
        $xslStr = 'Property active-state applies to: fo:multi-property-set.';
        $checkedStr = $this->renderString('active-state');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_alignment_adjust(): void
    {
        $xslStr = 'Property alignment-adjust applies to: fo:character, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, and fo:basic-link.';
        $checkedStr = $this->renderString('alignment-adjust');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_alignment_baseline(): void
    {
        $xslStr = 'Property alignment-baseline applies to: fo:character, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, and fo:basic-link.';
        $checkedStr = $this->renderString('alignment-baseline');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_allowed_height_scale(): void
    {
        $xslStr = 'Property allowed-height-scale applies to: fo:external-graphic, and fo:instream-foreign-object.';
        $checkedStr = $this->renderString('allowed-height-scale');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_allowed_width_scale(): void
    {
        $xslStr = 'Property allowed-width-scale applies to: fo:external-graphic, and fo:instream-foreign-object.';
        $checkedStr = $this->renderString('allowed-width-scale');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_auto_restore(): void
    {
        $xslStr = 'Property auto-restore applies to: fo:multi-switch.';
        $checkedStr = $this->renderString('auto-restore');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_azimuth(): void
    {
        $xslStr = 'Property azimuth applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('azimuth');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_background_attachment(): void
    {
        $xslStr = 'Property background-attachment applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('background-attachment');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_background_color(): void
    {
        $xslStr = 'Property background-color applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('background-color');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_background_image(): void
    {
        $xslStr = 'Property background-image applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('background-image');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_background_position_horizontal(): void
    {
        $xslStr = 'Property background-position-horizontal applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('background-position-horizontal');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_background_position_vertical(): void
    {
        $xslStr = 'Property background-position-vertical applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('background-position-vertical');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_background_repeat(): void
    {
        $xslStr = 'Property background-repeat applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('background-repeat');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_baseline_shift(): void
    {
        $xslStr = 'Property baseline-shift applies to: fo:character, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, and fo:basic-link.';
        $checkedStr = $this->renderString('baseline-shift');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_blank_or_not_blank(): void
    {
        $xslStr = 'Property blank-or-not-blank applies to: fo:conditional-page-master-reference.';
        $checkedStr = $this->renderString('blank-or-not-blank');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_block_progression_dimension(): void
    {
        $xslStr = 'Property block-progression-dimension applies to: fo:block-container, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:table, fo:table-caption, fo:table-row, and fo:table-cell.';
        $checkedStr = $this->renderString('block-progression-dimension');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_after_color(): void
    {
        $xslStr = 'Property border-after-color applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-after-color');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_after_precedence(): void
    {
        $xslStr = 'Property border-after-precedence applies to: fo:table, fo:table-column, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, and fo:table-cell.';
        $checkedStr = $this->renderString('border-after-precedence');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_after_style(): void
    {
        $xslStr = 'Property border-after-style applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-after-style');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_after_width(): void
    {
        $xslStr = 'Property border-after-width applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-after-width');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_before_color(): void
    {
        $xslStr = 'Property border-before-color applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-before-color');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_before_precedence(): void
    {
        $xslStr = 'Property border-before-precedence applies to: fo:table, fo:table-column, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, and fo:table-cell.';
        $checkedStr = $this->renderString('border-before-precedence');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_before_style(): void
    {
        $xslStr = 'Property border-before-style applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-before-style');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_before_width(): void
    {
        $xslStr = 'Property border-before-width applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-before-width');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_bottom_color(): void
    {
        $xslStr = 'Property border-bottom-color applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-bottom-color');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_bottom_style(): void
    {
        $xslStr = 'Property border-bottom-style applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-bottom-style');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_bottom_width(): void
    {
        $xslStr = 'Property border-bottom-width applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-bottom-width');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_collapse(): void
    {
        $xslStr = 'Property border-collapse applies to: fo:table.';
        $checkedStr = $this->renderString('border-collapse');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_end_color(): void
    {
        $xslStr = 'Property border-end-color applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-end-color');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_end_precedence(): void
    {
        $xslStr = 'Property border-end-precedence applies to: fo:table, fo:table-column, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, and fo:table-cell.';
        $checkedStr = $this->renderString('border-end-precedence');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_end_style(): void
    {
        $xslStr = 'Property border-end-style applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-end-style');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_end_width(): void
    {
        $xslStr = 'Property border-end-width applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-end-width');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_left_color(): void
    {
        $xslStr = 'Property border-left-color applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-left-color');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_left_style(): void
    {
        $xslStr = 'Property border-left-style applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-left-style');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_left_width(): void
    {
        $xslStr = 'Property border-left-width applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-left-width');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_right_color(): void
    {
        $xslStr = 'Property border-right-color applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-right-color');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_right_style(): void
    {
        $xslStr = 'Property border-right-style applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-right-style');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_right_width(): void
    {
        $xslStr = 'Property border-right-width applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-right-width');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_separation(): void
    {
        $xslStr = 'Property border-separation applies to: fo:table.';
        $checkedStr = $this->renderString('border-separation');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_start_color(): void
    {
        $xslStr = 'Property border-start-color applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-start-color');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_start_precedence(): void
    {
        $xslStr = 'Property border-start-precedence applies to: fo:table, fo:table-column, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, and fo:table-cell.';
        $checkedStr = $this->renderString('border-start-precedence');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_start_style(): void
    {
        $xslStr = 'Property border-start-style applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-start-style');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_start_width(): void
    {
        $xslStr = 'Property border-start-width applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-start-width');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_top_color(): void
    {
        $xslStr = 'Property border-top-color applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-top-color');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_top_style(): void
    {
        $xslStr = 'Property border-top-style applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-top-style');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_border_top_width(): void
    {
        $xslStr = 'Property border-top-width applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-column, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('border-top-width');

        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_bottom(): void
    {
        /**
         * Input $xslStr is modified here, as there is a typo in the spec:
         * Property bottom applies to: fo:block-container.
         * Property bottom applies to: fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.
         *
         * @link https://www.w3.org/TR/xsl11/#prapply
         */
        $xslStr = 'Property bottom applies to: fo:block-container, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('bottom');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_break_after(): void
    {
        $xslStr = 'Property break-after applies to: fo:block, fo:block-container, fo:table-and-caption, fo:table, fo:table-row, fo:list-block, and fo:list-item.';
        $checkedStr = $this->renderString('break-after');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_break_before(): void
    {
        $xslStr = 'Property break-before applies to: fo:block, fo:block-container, fo:table-and-caption, fo:table, fo:table-row, fo:list-block, and fo:list-item.';
        $checkedStr = $this->renderString('break-before');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_caption_side(): void
    {
        $xslStr = 'Property caption-side applies to: fo:table-and-caption.';
        $checkedStr = $this->renderString('caption-side');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_case_name(): void
    {
        $xslStr = 'Property case-name applies to: fo:multi-case.';
        $checkedStr = $this->renderString('case-name');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_case_title(): void
    {
        $xslStr = 'Property case-title applies to: fo:multi-case.';
        $checkedStr = $this->renderString('case-title');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_change_bar_class(): void
    {
        $xslStr = 'Property change-bar-class applies to: fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('change-bar-class');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_change_bar_color(): void
    {
        $xslStr = 'Property change-bar-color applies to: fo:change-bar-begin.';
        $checkedStr = $this->renderString('change-bar-color');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_change_bar_offset(): void
    {
        $xslStr = 'Property change-bar-offset applies to: fo:change-bar-begin.';
        $checkedStr = $this->renderString('change-bar-offset');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_change_bar_placement(): void
    {
        $xslStr = 'Property change-bar-placement applies to: fo:change-bar-begin.';
        $checkedStr = $this->renderString('change-bar-placement');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_change_bar_style(): void
    {
        $xslStr = 'Property change-bar-style applies to: fo:change-bar-begin.';
        $checkedStr = $this->renderString('change-bar-style');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_change_bar_width(): void
    {
        $xslStr = 'Property change-bar-width applies to: fo:change-bar-begin.';
        $checkedStr = $this->renderString('change-bar-width');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_character(): void
    {
        $xslStr = 'Property character applies to: fo:character.';
        $checkedStr = $this->renderString('character');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_clear(): void
    {
        $xslStr = 'Property clear applies to: fo:block, fo:block-container, fo:table-and-caption, fo:table, fo:list-block, and fo:float.';
        $checkedStr = $this->renderString('clear');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_clip(): void
    {
        $xslStr = 'Property clip applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:block-container, fo:external-graphic, fo:instream-foreign-object, and fo:inline-container.';
        $checkedStr = $this->renderString('clip');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_color(): void
    {
        $xslStr = 'Property color applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:inline, fo:leader, and fo:bookmark-title.';
        $checkedStr = $this->renderString('color');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_color_profile_name(): void
    {
        $xslStr = 'Property color-profile-name applies to: fo:color-profile.';
        $checkedStr = $this->renderString('color-profile-name');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_column_count(): void
    {
        $xslStr = 'Property column-count applies to: fo:region-body.';
        $checkedStr = $this->renderString('column-count');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_column_gap(): void
    {
        $xslStr = 'Property column-gap applies to: fo:region-body.';
        $checkedStr = $this->renderString('column-gap');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_column_number(): void
    {
        $xslStr = 'Property column-number applies to: fo:table-column, and fo:table-cell.';
        $checkedStr = $this->renderString('column-number');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_column_width(): void
    {
        $xslStr = 'Property column-width applies to: fo:table-column.';
        $checkedStr = $this->renderString('column-width');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_content_height(): void
    {
        $xslStr = 'Property content-height applies to: fo:external-graphic, and fo:instream-foreign-object.';
        $checkedStr = $this->renderString('content-height');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_content_type(): void
    {
        $xslStr = 'Property content-type applies to: fo:external-graphic, and fo:instream-foreign-object.';
        $checkedStr = $this->renderString('content-type');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_content_width(): void
    {
        $xslStr = 'Property content-width applies to: fo:external-graphic, and fo:instream-foreign-object.';
        $checkedStr = $this->renderString('content-width');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_country(): void
    {
        $xslStr = 'Property country applies to: fo:block, and fo:character.';
        $checkedStr = $this->renderString('country');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_cue_after(): void
    {
        $xslStr = 'Property cue-after applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('cue-after');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_cue_before(): void
    {
        $xslStr = 'Property cue-before applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('cue-before');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_destination_placement_offset(): void
    {
        $xslStr = 'Property destination-placement-offset applies to: fo:basic-link.';
        $checkedStr = $this->renderString('destination-placement-offset');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_direction(): void
    {
        $xslStr = 'Property direction applies to: fo:bidi-override.';
        $checkedStr = $this->renderString('direction');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_display_align(): void
    {
        $xslStr = 'Property display-align applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:block-container, fo:external-graphic, fo:instream-foreign-object, fo:inline-container, and fo:table-cell.';
        $checkedStr = $this->renderString('display-align');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_dominant_baseline(): void
    {
        $xslStr = 'Property dominant-baseline applies to: fo:character, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, and fo:basic-link.';
        $checkedStr = $this->renderString('dominant-baseline');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_elevation(): void
    {
        $xslStr = 'Property elevation applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('elevation');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_empty_cells(): void
    {
        $xslStr = 'Property empty-cells applies to: fo:table-cell.';
        $checkedStr = $this->renderString('empty-cells');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_end_indent(): void
    {
        $xslStr = 'Property end-indent applies to: fo:simple-page-master, fo:region-body, fo:block, fo:block-container, fo:table-and-caption, fo:table, fo:list-block, and fo:list-item.';
        $checkedStr = $this->renderString('end-indent');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_ends_row(): void
    {
        $xslStr = 'Property ends-row applies to: fo:table-cell.';
        $checkedStr = $this->renderString('ends-row');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_extent(): void
    {
        $xslStr = 'Property extent applies to: fo:region-before, fo:region-after, fo:region-start, and fo:region-end.';
        $checkedStr = $this->renderString('extent');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_external_destination(): void
    {
        $xslStr = 'Property external-destination applies to: fo:basic-link, and fo:bookmark.';
        $checkedStr = $this->renderString('external-destination');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_float(): void
    {
        $xslStr = 'Property float applies to: fo:float.';
        $checkedStr = $this->renderString('float');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_flow_map_name(): void
    {
        $xslStr = 'Property flow-map-name applies to: fo:flow-map.';
        $checkedStr = $this->renderString('flow-map-name');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_flow_map_reference(): void
    {
        $xslStr = 'Property flow-map-reference applies to: fo:page-sequence.';
        $checkedStr = $this->renderString('flow-map-reference');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_flow_name(): void
    {
        $xslStr = 'Property flow-name applies to: fo:flow, and fo:static-content.';
        $checkedStr = $this->renderString('flow-name');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_flow_name_reference(): void
    {
        $xslStr = 'Property flow-name-reference applies to: fo:flow-name-specifier.';
        $checkedStr = $this->renderString('flow-name-reference');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_font_family(): void
    {
        $xslStr = 'Property font-family applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('font-family');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_font_selection_strategy(): void
    {
        $xslStr = 'Property font-selection-strategy applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('font-selection-strategy');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_font_size(): void
    {
        $xslStr = 'Property font-size applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('font-size');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_font_size_adjust(): void
    {
        $xslStr = 'Property font-size-adjust applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('font-size-adjust');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_font_stretch(): void
    {
        $xslStr = 'Property font-stretch applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('font-stretch');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_font_style(): void
    {
        $xslStr = 'Property font-style applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('font-style');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_font_variant(): void
    {
        $xslStr = 'Property font-variant applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('font-variant');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_font_weight(): void
    {
        $xslStr = 'Property font-weight applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('font-weight');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_force_page_count(): void
    {
        $xslStr = 'Property force-page-count applies to: fo:page-sequence.';
        $checkedStr = $this->renderString('force-page-count');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_format(): void
    {
        $xslStr = 'Property format applies to: fo:page-sequence, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('format');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_glyph_orientation_horizontal(): void
    {
        $xslStr = 'Property glyph-orientation-horizontal applies to: fo:character.';
        $checkedStr = $this->renderString('glyph-orientation-horizontal');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_glyph_orientation_vertical(): void
    {
        $xslStr = 'Property glyph-orientation-vertical applies to: fo:character.';
        $checkedStr = $this->renderString('glyph-orientation-vertical');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_grouping_separator(): void
    {
        $xslStr = 'Property grouping-separator applies to: fo:page-sequence, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('grouping-separator');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_grouping_size(): void
    {
        $xslStr = 'Property grouping-size applies to: fo:page-sequence, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('grouping-size');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_height(): void
    {
        $xslStr = 'Property height applies to: fo:block-container, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:table, fo:table-caption, fo:table-row, and fo:table-cell.';
        $checkedStr = $this->renderString('height');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_hyphenate(): void
    {
        $xslStr = 'Property hyphenate applies to: fo:block, and fo:character.';
        $checkedStr = $this->renderString('hyphenate');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_hyphenation_character(): void
    {
        $xslStr = 'Property hyphenation-character applies to: fo:block, and fo:character.';
        $checkedStr = $this->renderString('hyphenation-character');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_hyphenation_keep(): void
    {
        $xslStr = 'Property hyphenation-keep applies to: fo:block.';
        $checkedStr = $this->renderString('hyphenation-keep');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_hyphenation_ladder_count(): void
    {
        $xslStr = 'Property hyphenation-ladder-count applies to: fo:block.';
        $checkedStr = $this->renderString('hyphenation-ladder-count');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_hyphenation_push_character_count(): void
    {
        $xslStr = 'Property hyphenation-push-character-count applies to: fo:block, and fo:character.';
        $checkedStr = $this->renderString('hyphenation-push-character-count');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_hyphenation_remain_character_count(): void
    {
        $xslStr = 'Property hyphenation-remain-character-count applies to: fo:block, and fo:character.';
        $checkedStr = $this->renderString('hyphenation-remain-character-count');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_id(): void
    {
        $xslStr = 'Property id applies to: fo:root, fo:page-sequence, fo:page-sequence-wrapper, fo:flow, fo:static-content, fo:block, fo:block-container, fo:bidi-override, fo:character, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:list-item-body, fo:list-item-label, fo:basic-link, fo:multi-switch, fo:multi-case, fo:multi-toggle, fo:multi-property-set, fo:index-range-begin, fo:float, fo:footnote, fo:footnote-body, and fo:wrapper.';
        $checkedStr = $this->renderString('id');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_index_class(): void
    {
        $xslStr = 'Property index-class applies to: fo:root, fo:page-sequence, fo:page-sequence-wrapper, fo:flow, fo:static-content, fo:block, fo:block-container, fo:bidi-override, fo:character, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:list-item-body, fo:list-item-label, fo:basic-link, fo:multi-switch, fo:multi-case, fo:multi-toggle, fo:multi-property-set, fo:index-range-begin, fo:float, fo:footnote, fo:footnote-body, and fo:wrapper.';
        $checkedStr = $this->renderString('index-class');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_index_key(): void
    {
        $xslStr = 'Property index-key applies to: fo:root, fo:page-sequence, fo:page-sequence-wrapper, fo:flow, fo:static-content, fo:block, fo:block-container, fo:bidi-override, fo:character, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:list-item-body, fo:list-item-label, fo:basic-link, fo:multi-switch, fo:multi-case, fo:multi-toggle, fo:multi-property-set, fo:index-range-begin, fo:float, fo:footnote, fo:footnote-body, and fo:wrapper.';
        $checkedStr = $this->renderString('index-key');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_indicate_destination(): void
    {
        $xslStr = 'Property indicate-destination applies to: fo:basic-link.';
        $checkedStr = $this->renderString('indicate-destination');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_initial_page_number(): void
    {
        $xslStr = 'Property initial-page-number applies to: fo:page-sequence.';
        $checkedStr = $this->renderString('initial-page-number');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_inline_progression_dimension(): void
    {
        $xslStr = 'Property inline-progression-dimension applies to: fo:block-container, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:table, fo:table-caption, and fo:table-cell.';
        $checkedStr = $this->renderString('inline-progression-dimension');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_internal_dimension(): void
    {
        $xslStr = 'Property internal-destination applies to: fo:basic-link, and fo:bookmark.';
        $checkedStr = $this->renderString('internal-destination');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_intrinsic_scale_value(): void
    {
        $xslStr = 'Property intrinsic-scale-value applies to: fo:scaling-value-citation.';
        $checkedStr = $this->renderString('intrinsic-scale-value');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_intrusion_displace(): void
    {
        $xslStr = 'Property intrusion-displace applies to: fo:block, fo:block-container, fo:table-and-caption, fo:table, fo:table-caption, fo:list-block, and fo:list-item.';
        $checkedStr = $this->renderString('intrusion-displace');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_keep_together(): void
    {
        $xslStr = 'Property keep-together applies to: fo:block, fo:block-container, fo:inline, fo:inline-container, fo:table-and-caption, fo:table, fo:table-caption, fo:table-row, fo:list-block, fo:list-item, fo:list-item-body, fo:list-item-label, and fo:basic-link.';
        $checkedStr = $this->renderString('keep-together');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_keep_with_next(): void
    {
        $xslStr = 'Property keep-with-next applies to: fo:block, fo:block-container, fo:character, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-row, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('keep-with-next');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_keep_with_previous(): void
    {
        $xslStr = 'Property keep-with-previous applies to: fo:block, fo:block-container, fo:character, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-row, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('keep-with-previous');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_language(): void
    {
        $xslStr = 'Property language applies to: fo:block, and fo:character.';
        $checkedStr = $this->renderString('language');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_last_line_end_indent(): void
    {
        $xslStr = 'Property last-line-end-indent applies to: fo:block.';
        $checkedStr = $this->renderString('last-line-end-indent');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_leader_alignment(): void
    {
        $xslStr = 'Property leader-alignment applies to: fo:leader.';
        $checkedStr = $this->renderString('leader-alignment');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_leader_length(): void
    {
        $xslStr = 'Property leader-length applies to: fo:leader.';
        $checkedStr = $this->renderString('leader-length');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_leader_pattern(): void
    {
        $xslStr = 'Property leader-pattern applies to: fo:leader.';
        $checkedStr = $this->renderString('leader-pattern');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_leader_pattern_width(): void
    {
        $xslStr = 'Property leader-pattern-width applies to: fo:leader.';
        $checkedStr = $this->renderString('leader-pattern-width');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_left(): void
    {
        $xslStr = 'Property left applies to: fo:block-container, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('left');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_letter_spacing(): void
    {
        $xslStr = 'Property letter-spacing applies to: fo:bidi-override, fo:character, fo:initial-property-set, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('letter-spacing');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_letter_value(): void
    {
        $xslStr = 'Property letter-value applies to: fo:page-sequence, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('letter-value');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_linefeed_treatment(): void
    {
        $xslStr = 'Property linefeed-treatment applies to: fo:block.';
        $checkedStr = $this->renderString('linefeed-treatment');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_line_height(): void
    {
        $xslStr = 'Property line-height applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, and fo:basic-link.';
        $checkedStr = $this->renderString('line-height');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_line_height_shift_adjustment(): void
    {
        $xslStr = 'Property line-height-shift-adjustment applies to: fo:block.';
        $checkedStr = $this->renderString('line-height-shift-adjustment');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_line_stacking_strategy(): void
    {
        $xslStr = 'Property line-stacking-strategy applies to: fo:block.';
        $checkedStr = $this->renderString('line-stacking-strategy');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_margin_bottom(): void
    {
        $xslStr = 'Property margin-bottom applies to: fo:simple-page-master, fo:region-body, fo:block, fo:block-container, fo:table-and-caption, fo:table, fo:list-block, fo:list-item, fo:title, fo:character, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, and fo:basic-link.';
        $checkedStr = $this->renderString('margin-bottom');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_margin_left(): void
    {
        $xslStr = 'Property margin-left applies to: fo:simple-page-master, fo:region-body, fo:block, fo:block-container, fo:table-and-caption, fo:table, fo:list-block, fo:list-item, fo:title, fo:character, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, and fo:basic-link.';
        $checkedStr = $this->renderString('margin-left');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_margin_right(): void
    {
        $xslStr = 'Property margin-right applies to: fo:simple-page-master, fo:region-body, fo:block, fo:block-container, fo:table-and-caption, fo:table, fo:list-block, fo:list-item, fo:title, fo:character, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, and fo:basic-link.';
        $checkedStr = $this->renderString('margin-right');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_margin_top(): void
    {
        $xslStr = 'Property margin-top applies to: fo:simple-page-master, fo:region-body, fo:block, fo:block-container, fo:table-and-caption, fo:table, fo:list-block, fo:list-item, fo:title, fo:character, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, and fo:basic-link.';
        $checkedStr = $this->renderString('margin-top');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_marker_class_name(): void
    {
        $xslStr = 'Property marker-class-name applies to: fo:marker.';
        $checkedStr = $this->renderString('marker-class-name');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_master_name(): void
    {
        $xslStr = 'Property master-name applies to: fo:page-sequence-master, and fo:simple-page-master.';
        $checkedStr = $this->renderString('master-name');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_master_reference(): void
    {
        $xslStr = 'Property master-reference applies to: fo:page-sequence, fo:single-page-master-reference, fo:repeatable-page-master-reference, and fo:conditional-page-master-reference.';
        $checkedStr = $this->renderString('master-reference');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_maximum_repeats(): void
    {
        $xslStr = 'Property maximum-repeats applies to: fo:repeatable-page-master-reference, and fo:repeatable-page-master-alternatives.';
        $checkedStr = $this->renderString('maximum-repeats');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_media_usage(): void
    {
        $xslStr = 'Property media-usage applies to: fo:root.';
        $checkedStr = $this->renderString('media-usage');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_merge_pages_across_index_key_references(): void
    {
        $xslStr = 'Property merge-pages-across-index-key-references applies to: fo:index-page-citation-list.';
        $checkedStr = $this->renderString('merge-pages-across-index-key-references');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_merge_ranges_across_index_key_references(): void
    {
        $xslStr = 'Property merge-ranges-across-index-key-references applies to: fo:index-page-citation-list.';
        $checkedStr = $this->renderString('merge-ranges-across-index-key-references');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_merge_sequential_page_number(): void
    {
        $xslStr = 'Property merge-sequential-page-numbers applies to: fo:index-page-citation-list.';
        $checkedStr = $this->renderString('merge-sequential-page-numbers');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_number_columns_repeated(): void
    {
        $xslStr = 'Property number-columns-repeated applies to: fo:table-column.';
        $checkedStr = $this->renderString('number-columns-repeated');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_number_columns_spanned(): void
    {
        $xslStr = 'Property number-columns-spanned applies to: fo:table-column, and fo:table-cell.';
        $checkedStr = $this->renderString('number-columns-spanned');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_number_rows_spanned(): void
    {
        $xslStr = 'Property number-rows-spanned applies to: fo:table-cell.';
        $checkedStr = $this->renderString('number-rows-spanned');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_odd_or_even(): void
    {
        $xslStr = 'Property odd-or-even applies to: fo:conditional-page-master-reference.';
        $checkedStr = $this->renderString('odd-or-even');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_orphans(): void
    {
        $xslStr = 'Property orphans applies to: fo:block.';
        $checkedStr = $this->renderString('orphans');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_overflow(): void
    {
        $xslStr = 'Property overflow applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:block-container, fo:external-graphic, fo:instream-foreign-object, and fo:inline-container.';
        $checkedStr = $this->renderString('overflow');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_padding_after(): void
    {
        $xslStr = 'Property padding-after applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('padding-after');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_padding_before(): void
    {
        $xslStr = 'Property padding-before applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('padding-before');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_padding_bottom(): void
    {
        $xslStr = 'Property padding-bottom applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('padding-bottom');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_padding_end(): void
    {
        $xslStr = 'Property padding-end applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('padding-end');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_padding_left(): void
    {
        $xslStr = 'Property padding-left applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('padding-left');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_padding_right(): void
    {
        $xslStr = 'Property padding-right applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('padding-right');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_padding_start(): void
    {
        $xslStr = 'Property padding-start applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('padding-start');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_padding_top(): void
    {
        $xslStr = 'Property padding-top applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:title, fo:block, fo:block-container, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('padding-top');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_page_citation_strategy(): void
    {
        $xslStr = 'Property page-citation-strategy applies to: fo:page-number-citation-last.';
        $checkedStr = $this->renderString('page-citation-strategy');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_page_height(): void
    {
        $xslStr = 'Property page-height applies to: fo:simple-page-master.';
        $checkedStr = $this->renderString('page-height');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_page_number_treatment(): void
    {
        $xslStr = 'Property page-number-treatment applies to: fo:index-key-reference.';
        $checkedStr = $this->renderString('page-number-treatment');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_page_position(): void
    {
        $xslStr = 'Property page-position applies to: fo:conditional-page-master-reference.';
        $checkedStr = $this->renderString('page-position');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_page_width(): void
    {
        $xslStr = 'Property page-width applies to: fo:simple-page-master.';
        $checkedStr = $this->renderString('page-width');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_pause_after(): void
    {
        $xslStr = 'Property pause-after applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('pause-after');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_pause_before(): void
    {
        $xslStr = 'Property pause-before applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('pause-before');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_pitch(): void
    {
        $xslStr = 'Property pitch applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('pitch');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_pitch_range(): void
    {
        $xslStr = 'Property pitch-range applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('pitch-range');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_play_during(): void
    {
        $xslStr = 'Property play-during applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('play-during');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_precedence(): void
    {
        $xslStr = 'Property precedence applies to: fo:region-before, and fo:region-after.';
        $checkedStr = $this->renderString('precedence');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_provisional_distance_between_starts(): void
    {
        $xslStr = 'Property provisional-distance-between-starts applies to: fo:list-block.';
        $checkedStr = $this->renderString('provisional-distance-between-starts');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_provisional_label_separation(): void
    {
        $xslStr = 'Property provisional-label-separation applies to: fo:list-block.';
        $checkedStr = $this->renderString('provisional-label-separation');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_reference_orientation(): void
    {
        $xslStr = 'Property reference-orientation applies to: fo:page-sequence, fo:simple-page-master, fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:block-container, and fo:inline-container.';
        $checkedStr = $this->renderString('reference-orientation');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_ref_id(): void
    {
        $xslStr = 'Property ref-id applies to: fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, and fo:index-range-end.';
        $checkedStr = $this->renderString('ref-id');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_ref_index_key(): void
    {
        $xslStr = 'Property ref-index-key applies to: fo:index-key-reference.';
        $checkedStr = $this->renderString('ref-index-key');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_region_name(): void
    {
        $xslStr = 'Property region-name applies to: fo:region-body, fo:region-before, fo:region-after, fo:region-start, and fo:region-end.';
        $checkedStr = $this->renderString('region-name');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_region_name_reference(): void
    {
        $xslStr = 'Property region-name-reference applies to: fo:region-name-specifier.';
        $checkedStr = $this->renderString('region-name-reference');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_relative_align(): void
    {
        $xslStr = 'Property relative-align applies to: fo:table-cell, and fo:list-item.';
        $checkedStr = $this->renderString('relative-align');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_relative_position(): void
    {
        $xslStr = 'Property relative-position applies to: fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('relative-position');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_rendering_intent(): void
    {
        $xslStr = 'Property rendering-intent applies to: fo:color-profile.';
        $checkedStr = $this->renderString('rendering-intent');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_retrieve_boundary(): void
    {
        $xslStr = 'Property retrieve-boundary applies to: fo:retrieve-marker.';
        $checkedStr = $this->renderString('retrieve-boundary');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_retrieve_boundary_within_table(): void
    {
        $xslStr = 'Property retrieve-boundary-within-table applies to: fo:retrieve-table-marker.';
        $checkedStr = $this->renderString('retrieve-boundary-within-table');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_retrieve_class_name(): void
    {
        $xslStr = 'Property retrieve-class-name applies to: fo:retrieve-marker, and fo:retrieve-table-marker.';
        $checkedStr = $this->renderString('retrieve-class-name');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_retrieve_position(): void
    {
        $xslStr = 'Property retrieve-position applies to: fo:retrieve-marker.';
        $checkedStr = $this->renderString('retrieve-position');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_retrieve_position_within_table(): void
    {
        $xslStr = 'Property retrieve-position-within-table applies to: fo:retrieve-table-marker.';
        $checkedStr = $this->renderString('retrieve-position-within-table');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_richness(): void
    {
        $xslStr = 'Property richness applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('richness');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_right(): void
    {
        $xslStr = 'Property right applies to: fo:block-container, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('right');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_role(): void
    {
        $xslStr = 'Property role applies to: fo:root, fo:title, fo:block, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:list-item-body, fo:list-item-label, fo:basic-link, fo:multi-switch, fo:multi-case, fo:multi-toggle, fo:multi-properties, fo:bookmark, fo:bookmark-title, fo:footnote, fo:footnote-body, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('role');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_rule_style(): void
    {
        $xslStr = 'Property rule-style applies to: fo:leader.';
        $checkedStr = $this->renderString('rule-style');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_rule_thickness(): void
    {
        $xslStr = 'Property rule-thickness applies to: fo:leader.';
        $checkedStr = $this->renderString('rule-thickness');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_scale_option(): void
    {
        $xslStr = 'Property scale-option applies to: fo:scaling-value-citation.';
        $checkedStr = $this->renderString('scale-option');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_scaling(): void
    {
        $xslStr = 'Property scaling applies to: fo:external-graphic, and fo:instream-foreign-object.';
        $checkedStr = $this->renderString('scaling');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_scaling_method(): void
    {
        $xslStr = 'Property scaling-method applies to: fo:external-graphic, and fo:instream-foreign-object.';
        $checkedStr = $this->renderString('scaling-method');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_score_spaces(): void
    {
        $xslStr = 'Property score-spaces applies to: fo:bidi-override, fo:character, fo:initial-property-set, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('score-spaces');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_script(): void
    {
        $xslStr = 'Property script applies to: fo:block, and fo:character.';
        $checkedStr = $this->renderString('script');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_show_destination(): void
    {
        $xslStr = 'Property show-destination applies to: fo:basic-link.';
        $checkedStr = $this->renderString('show-destination');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_source_document(): void
    {
        $xslStr = 'Property source-document applies to: fo:root, fo:title, fo:block, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:list-item-body, fo:list-item-label, fo:basic-link, fo:multi-switch, fo:multi-case, fo:multi-toggle, fo:multi-properties, fo:bookmark, fo:bookmark-title, fo:footnote, fo:footnote-body, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('source-document');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_space_after(): void
    {
        $xslStr = 'Property space-after applies to: fo:simple-page-master, fo:region-body, fo:block, fo:block-container, fo:table-and-caption, fo:table, fo:list-block, and fo:list-item.';
        $checkedStr = $this->renderString('space-after');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_space_before(): void
    {
        $xslStr = 'Property space-before applies to: fo:simple-page-master, fo:region-body, fo:block, fo:block-container, fo:table-and-caption, fo:table, fo:list-block, and fo:list-item.';
        $checkedStr = $this->renderString('space-before');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_space_end(): void
    {
        $xslStr = 'Property space-end applies to: fo:title, fo:character, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, and fo:basic-link.';
        $checkedStr = $this->renderString('space-end');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_space_start(): void
    {
        $xslStr = 'Property space-start applies to: fo:title, fo:character, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, and fo:basic-link.';
        $checkedStr = $this->renderString('space-start');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_span(): void
    {
        $xslStr = 'Property span applies to: fo:block, and fo:block-container.';
        $checkedStr = $this->renderString('span');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_speak(): void
    {
        $xslStr = 'Property speak applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('speak');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_speak_header(): void
    {
        $xslStr = 'Property speak-header applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('speak-header');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_speak_numeral(): void
    {
        $xslStr = 'Property speak-numeral applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('speak-numeral');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_speak_punctuation(): void
    {
        $xslStr = 'Property speak-punctuation applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('speak-punctuation');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_speech_rate(): void
    {
        $xslStr = 'Property speech-rate applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('speech-rate');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_src(): void
    {
        $xslStr = 'Property src applies to: fo:color-profile, and fo:external-graphic.';
        $checkedStr = $this->renderString('src');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_start_indent(): void
    {
        $xslStr = 'Property start-indent applies to: fo:simple-page-master, fo:region-body, fo:block, fo:block-container, fo:table-and-caption, fo:table, fo:list-block, and fo:list-item.';
        $checkedStr = $this->renderString('start-indent');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_starting_state(): void
    {
        $xslStr = 'Property starting-state applies to: fo:multi-case, and fo:bookmark.';
        $checkedStr = $this->renderString('starting-state');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_starts_row(): void
    {
        $xslStr = 'Property starts-row applies to: fo:table-cell.';
        $checkedStr = $this->renderString('starts-row');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_stress(): void
    {
        $xslStr = 'Property stress applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('stress');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_suppress_at_line_break(): void
    {
        $xslStr = 'Property suppress-at-line-break applies to: fo:character.';
        $checkedStr = $this->renderString('suppress-at-line-break');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_switch_to(): void
    {
        $xslStr = 'Property switch-to applies to: fo:multi-toggle.';
        $checkedStr = $this->renderString('switch-to');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_table_layout(): void
    {
        $xslStr = 'Property table-layout applies to: fo:table.';
        $checkedStr = $this->renderString('table-layout');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_table_omit_footer_at_break(): void
    {
        $xslStr = 'Property table-omit-footer-at-break applies to: fo:table.';
        $checkedStr = $this->renderString('table-omit-footer-at-break');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_table_omit_header_at_break(): void
    {
        $xslStr = 'Property table-omit-header-at-break applies to: fo:table.';
        $checkedStr = $this->renderString('table-omit-header-at-break');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_target_presentation_context(): void
    {
        $xslStr = 'Property target-presentation-context applies to: fo:basic-link.';
        $checkedStr = $this->renderString('target-presentation-context');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_target_processing_context(): void
    {
        $xslStr = 'Property target-processing-context applies to: fo:basic-link.';
        $checkedStr = $this->renderString('target-processing-context');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_target_stylesheet(): void
    {
        $xslStr = 'Property target-stylesheet applies to: fo:basic-link.';
        $checkedStr = $this->renderString('target-stylesheet');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_text_align(): void
    {
        $xslStr = 'Property text-align applies to: fo:block, fo:external-graphic, fo:instream-foreign-object, and fo:table-and-caption.';
        $checkedStr = $this->renderString('text-align');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_text_align_last(): void
    {
        $xslStr = 'Property text-align-last applies to: fo:block.';
        $checkedStr = $this->renderString('text-align-last');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_text_altitude(): void
    {
        $xslStr = 'Property text-altitude applies to: fo:block, fo:character, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('text-altitude');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_text_decoration(): void
    {
        $xslStr = 'Property text-decoration applies to: fo:character, fo:initial-property-set, fo:inline, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('text-decoration');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_text_depth(): void
    {
        $xslStr = 'Property text-depth applies to: fo:block, fo:character, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('text-depth');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_text_indent(): void
    {
        $xslStr = 'Property text-indent applies to: fo:block.';
        $checkedStr = $this->renderString('text-indent');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_text_shadow(): void
    {
        $xslStr = 'Property text-shadow applies to: fo:character, fo:initial-property-set, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('text-shadow');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_text_transform(): void
    {
        $xslStr = 'Property text-transform applies to: fo:character, fo:initial-property-set, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('text-transform');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_top(): void
    {
        $xslStr = 'Property top applies to: fo:block-container, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, and fo:basic-link.';
        $checkedStr = $this->renderString('top');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_treat_as_word_space(): void
    {
        $xslStr = 'Property treat-as-word-space applies to: fo:character.';
        $checkedStr = $this->renderString('treat-as-word-space');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_unicode_bidi(): void
    {
        $xslStr = 'Property unicode-bidi applies to: fo:bidi-override.';
        $checkedStr = $this->renderString('unicode-bidi');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_visibility(): void
    {
        $xslStr = 'Property visibility applies to: fo:title, fo:block, fo:character, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-column, fo:table-header, fo:table-footer, fo:table-body, and fo:table-row.';
        $checkedStr = $this->renderString('visibility');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_voice_family(): void
    {
        $xslStr = 'Property voice-family applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('voice-family');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_volume(): void
    {
        $xslStr = 'Property volume applies to: fo:title, fo:block, fo:bidi-override, fo:character, fo:initial-property-set, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, fo:scaling-value-citation, fo:table-and-caption, fo:table, fo:table-caption, fo:table-header, fo:table-footer, fo:table-body, fo:table-row, fo:table-cell, fo:list-block, fo:list-item, fo:basic-link, fo:change-bar-begin, and fo:change-bar-end.';
        $checkedStr = $this->renderString('volume');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_white_space_collapse(): void
    {
        $xslStr = 'Property white-space-collapse applies to: fo:block.';
        $checkedStr = $this->renderString('white-space-collapse');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_white_space_treatment(): void
    {
        $xslStr = 'Property white-space-treatment applies to: fo:block.';
        $checkedStr = $this->renderString('white-space-treatment');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_widows(): void
    {
        $xslStr = 'Property widows applies to: fo:block.';
        $checkedStr = $this->renderString('widows');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_width(): void
    {
        $xslStr = 'Property width applies to: fo:block-container, fo:external-graphic, fo:instream-foreign-object, fo:inline, fo:inline-container, fo:table, fo:table-caption, and fo:table-cell.';
        $checkedStr = $this->renderString('width');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_word_spacing(): void
    {
        $xslStr = 'Property word-spacing applies to: fo:bidi-override, fo:character, fo:initial-property-set, fo:leader, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('word-spacing');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_wrap_option(): void
    {
        $xslStr = 'Property wrap-option applies to: fo:block, fo:inline, fo:page-number, fo:page-number-citation, fo:page-number-citation-last, and fo:scaling-value-citation.';
        $checkedStr = $this->renderString('wrap-option');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_writing_mode(): void
    {
        $xslStr = 'Property writing-mode applies to: fo:page-sequence, fo:simple-page-master, fo:region-body, fo:region-before, fo:region-after, fo:region-start, fo:region-end, fo:block-container, fo:inline-container, and fo:table.';
        $checkedStr = $this->renderString('writing-mode');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }

    public function test_z_index(): void
    {
        $xslStr = 'Property z-index applies to: fo:block-container, and fo:change-bar-begin.';
        $checkedStr = $this->renderString('z-index');
        $this->assertEqualsCanonicalizing($this->extractTags($xslStr), $this->extractTags($checkedStr));
    }
}
