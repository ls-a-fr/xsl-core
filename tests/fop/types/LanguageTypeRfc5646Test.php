<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Xsl\Properties;

use Lsa\Xsl\Core\Tests\Common\CommonMethods;
use Lsa\Xsl\Core\Tests\Providers\LanguageTypeRfc5646DataProvider;
use Lsa\Xsl\Core\Validation\Types\Rfc5646\LanguageType;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class LanguageTypeRfc5646Test extends CommonMethods
{
    private string $typeClassName = LanguageType::class;

    #[DataProviderExternal(LanguageTypeRfc5646DataProvider::class, 'validDataProvider')]
    public function test_validation_with_valid_values(mixed $value): void
    {
        $this->validValue($this->typeClassName, $value);
    }

    #[DataProviderExternal(LanguageTypeRfc5646DataProvider::class, 'invalidDataProvider')]
    public function test_validation_with_invalid_values(mixed $value): void
    {
        $this->invalidValue($this->typeClassName, $value);
    }
}
