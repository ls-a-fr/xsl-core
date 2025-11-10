<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\CeilingFunctionDataProvider;
use Lsa\Xsl\Core\Tokenizer\Computing\XslTokenParser;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class CeilingFunctionTest extends CommonMethods
{
    #[DataProviderExternal(CeilingFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(string $value, string $expected): void
    {
        XslTokenParser::make();
        $this->assertEquals(XslTokenParser::parse($value)->evaluate(), $expected);
    }

    #[DataProviderExternal(CeilingFunctionDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(string $value, string $expected, ?string $exceptionClass): void
    {
        if ($exceptionClass !== null) {
            $this->expectException($exceptionClass);
        }
        XslTokenParser::make();
        $this->assertNotEquals(XslTokenParser::parse($value)->evaluate(), $expected);
    }
}
