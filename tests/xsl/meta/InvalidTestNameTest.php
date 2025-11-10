<?php

declare(strict_types=1);
require_once __DIR__.'/../../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class InvalidTestNameTest extends TestCase
{
    private static RegexIterator $files;

    private static array $exceptions;

    public static function setUpBeforeClass(): void
    {
        $directory = __DIR__.'/../';
        $dir = new RecursiveDirectoryIterator($directory);
        $flat = new RecursiveIteratorIterator($dir);
        self::$files = new RegexIterator($flat, '/\.php$/i');

        self::$exceptions = [];
    }

    private function isAnException(string $file)
    {
        foreach (self::$exceptions as $exception) {
            if (preg_match($exception, $file)) {
                return true;
            }
        }

        return false;
    }

    public function test_invalid_test_name()
    {
        foreach (self::$files as $file) {
            $file = strval($file);
            if ($this->isAnException($file)) {
                continue;
            }
            $this->assertTrue(str_ends_with($file, 'Test.php'), $file);
        }
    }
}
