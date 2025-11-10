<?php

declare(strict_types=1);
require_once __DIR__.'/../../vendor/autoload.php';

use Lsa\Xsl\Core\Tests\Providers\TokenizerDataProvider;
use Lsa\Xsl\Core\Tokenizer\Computing\XslTokenParser;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

class TokenizerTest extends TestCase
{
    #[DataProviderExternal(TokenizerDataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(array|string $value, mixed $expected, float $normalized): void
    {
        $token = XslTokenParser::parse(...$value);
        $this->assertSame($expected, $token->evaluate());
        $this->assertSame($normalized, $token->getNormalizedValue());
    }

    #[DataProviderExternal(TokenizerDataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value, string $exceptionClass, string $message): void
    {
        $this->expectException($exceptionClass);
        $this->expectExceptionMessage($message);
        XslTokenParser::parse(...$value)->evaluate();
    }
}
