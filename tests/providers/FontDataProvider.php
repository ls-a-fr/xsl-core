<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class FontDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['inherit'],
            ['caption'],
            ['icon'],
            ['menu'],
            ['message-box'],
            ['small-caption'],
            ['status-bar'],
            ['italic small-caps bold 12pt/14pt Arial'],
            ['italic bold 10px/12px "Helvetica Neue"'],
            ['normal normal normal 16px/1.5 serif'],
            ['bold 14px/normal sans-serif'],
            ['bold italic small-caps 12pt Arial'],
            ['small-caps 12pt Arial'],
            ['italic 10pt Times'],
            ['12px/1.2 "Open Sans"'],
            ['12pt serif'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [''],                                              // empty string
            ['inherit caption'],                               // mixed keywords
            ['12pt'],                                          // missing font-family
            ['bold 12pt/'],                                    // line-height not defined
            ['italic small-caps 12pt Arial serif'],            // multiple font-families not allowed this way
            ['bold 12pt / 14pt Arial'],                        // space before slash
            ['12pt/14pt'],                                     // missing font-family
            ['bold /14pt Arial'],                              // missing font-size
            ['bold italic 12pt/14pt'],                         // missing font-family
            ['12pt Arial "Extra"'],                            // unexpected token
            ['bold italic 12pt 14pt Arial'],                   // unexpected second size
            ['12px Arial extra'],                              // extra token
            [null],                                            // null value
            [true],                                            // boolean
            [false],
            [[]],                                              // array
            [new \stdClass()],                                 // object
        ];
    }
}
