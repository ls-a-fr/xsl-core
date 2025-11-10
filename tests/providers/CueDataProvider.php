<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class CueDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['url(  "https://example.org/path%20with%20spaces/beep.wav"  )'],
            ['url(ftp://ftp.example.com/beep.wav) none'],
            ['none url(file:///C:/path/to/file)'],
            ['url("https://example.com/?query=param&another=val")'],
            ['url("https://ex.com/sound1.mp3") url("https://ex.com/sound2.mp3")'],
            ['inherit'],
            ['none'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            [''],                                  // empty string
            ['url()'],                             // empty URL
            ['url("sound1.mp3") url("sound2.mp3")'], // missing scheme and domain
            ['url("sound1.mp3")'],                 // missing scheme and domain
            ['url("sound1.mp3") url()'],           // second URL invalid
            ['none none none'],                    // too many values
            ['url("sound.mp3") url("sound2.mp3") url("sound3.mp3")'], // too many
            ['none inherit'],                      // mixed with inherit
            ['inherit none'],                      // mixed with inherit
            ['url("sound.mp3") inherit'],          // mixed with inherit
            ['inherit url("sound.mp3")'],          // mixed with inherit
            ['sound.mp3'],                         // not a valid url()
            ['url("sound1.mp3") sound2.mp3'],      // second value not valid
            [null],                                // null value
            [true],                                // boolean
            [false],
            [[]],                                  // array
            [new \stdClass()],                     // object
        ];
    }
}
