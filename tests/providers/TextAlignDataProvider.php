<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Providers;

final class TextAlignDataProvider
{
    public static function validDataProvider(): array
    {
        return [
            ['start'],
            ['center'],
            ['end'],
            ['justify'],
            ['inside'],
            ['outside'],
            ['left'],
            ['right'],
            ['inherit'],
        ];
    }

    public static function invalidDataProvider(): array
    {
        return [
            ['Start'],               // case-sensitive
            ['justify center'],      // multiple keywords
            ['left-right'],          // invalid combination
            ['left right'],          // multiple values
            ['customValue'],         // <string> (NCName-compliant)
            ['my-label'],            // <string> (NCName-compliant)
            ['Label123'],            // <string> (NCName-compliant)
            ['my:label'],            // colon not allowed in <string>
            ['123label'],            // starts with a digit
            ['custom value'],        // whitespace not allowed in <string>
            ['inherit start'],       // mixed keyword and value
            [''],                    // empty string
            [null],                  // null value
            [true],                  // boolean
            [false],
            [[]],                    // array
            [new \stdClass()],       // object
        ];
    }
}
