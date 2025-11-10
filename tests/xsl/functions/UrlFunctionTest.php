<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\UrlFunctionDataProvider;
use Lsa\Xsl\Core\Tokenizer\Computing\XslTokenParser;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class UrlFunctionTest extends CommonMethods
{
    #[DataProviderExternal(UrlFunctionDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(string $value, string $expected): void
    {
        XslTokenParser::make();
        $this->assertEquals($expected, XslTokenParser::parse($value)->evaluate());
    }

    // #[DataProviderExternal(UrlFunctionDataProvider::class, 'invalidDataProvider')]
    // public function test_validation_with_invalid_values(string $value, string $expected, ?string $exceptionClass): void
    // {
    //     if ($exceptionClass !== null) {
    //         $this->expectException($exceptionClass);
    //     }
    //     XslTokenParser::make();
    //     $this->assertNotEquals($expected, XslTokenParser::parse($value)->evaluate());
    // }
}
