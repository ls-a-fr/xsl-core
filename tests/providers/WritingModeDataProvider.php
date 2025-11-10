<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class WritingModeDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['lr-tb'],
            ['rl-tb'],
            ['tb-rl'],
            ['tb-lr'],
            ['bt-lr'],
            ['bt-rl'],
            ['lr-bt'],
            ['rl-bt'],
            ['lr-alternating-rl-bt'],
            ['lr-alternating-rl-tb'],
            ['lr-inverting-rl-bt'],
            ['lr-inverting-rl-tb'],
            ['tb-lr-in-lr-pairs'],
            ['lr'],
            ['rl'],
            ['tb'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['LR-TB'],                            // case-sensitive
            ['lr_tb'],                            // underscore not allowed
            ['lr tb'],                            // space instead of hyphen
            ['lr--tb'],                           // double hyphen
            ['lr-tb rl-tb'],                      // multiple values
            ['tb-rl-'],                           // trailing hyphen
            [' lr-tb'],                           // leading space
            ['tb '],                              // trailing space
            ['lr-alternating-rl-tb-extra'],       // too many components
            [''],                                 // empty string
            [null],                               // null value
            [true],                               // boolean
            [false],
            [[]],                                 // array
            [new \stdClass()],                    // object
        ];
    }
}
