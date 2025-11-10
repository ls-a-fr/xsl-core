<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types\Icc;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;

/**
 * International Color Consortium. Specification ICC.1:1998-09,
 * File Format for Color Profiles.
 *
 * @see http://www.color.org/ICC-1_1998-09.PDF
 */
class ColorNameType extends Type implements Validator
{
    public const ALICEBLUE = 'aliceblue';

    public const ANTIQUEWHITE = 'antiquewhite';

    public const AQUA = 'aqua';

    public const AQUAMARINE = 'aquamarine';

    public const AZURE = 'azure';

    public const BEIGE = 'beige';

    public const BISQUE = 'bisque';

    public const BLACK = 'black';

    public const BLANCHEDALMOND = 'blanchedalmond';

    public const BLUE = 'blue';

    public const BLUEVIOLET = 'blueviolet';

    public const BROWN = 'brown';

    public const BURLYWOOD = 'burlywood';

    public const CADETBLUE = 'cadetblue';

    public const CHARTREUSE = 'chartreuse';

    public const CHOCOLATE = 'chocolate';

    public const CORAL = 'coral';

    public const CORNFLOWERBLUE = 'cornflowerblue';

    public const CORNSILK = 'cornsilk';

    public const CRIMSON = 'crimson';

    public const CYAN = 'cyan';

    public const DARKBLUE = 'darkblue';

    public const DARKCYAN = 'darkcyan';

    public const DARKGOLDENROD = 'darkgoldenrod';

    public const DARKGRAY = 'darkgray';

    public const DARKGREEN = 'darkgreen';

    public const DARKGREY = 'darkgrey';

    public const DARKKHAKI = 'darkkhaki';

    public const DARKMAGENTA = 'darkmagenta';

    public const DARKOLIVEGREEN = 'darkolivegreen';

    public const DARKORANGE = 'darkorange';

    public const DARKORCHID = 'darkorchid';

    public const DARKRED = 'darkred';

    public const DARKSALMON = 'darksalmon';

    public const DARKSEAGREEN = 'darkseagreen';

    public const DARKSLATEBLUE = 'darkslateblue';

    public const DARKSLATEGRAY = 'darkslategray';

    public const DARKSLATEGREY = 'darkslategrey';

    public const DARKTURQUOISE = 'darkturquoise';

    public const DARKVIOLET = 'darkviolet';

    public const DEEPPINK = 'deeppink';

    public const DEEPSKYBLUE = 'deepskyblue';

    public const DIMGRAY = 'dimgray';

    public const DIMGREY = 'dimgrey';

    public const DODGERBLUE = 'dodgerblue';

    public const FIREBRICK = 'firebrick';

    public const FLORALWHITE = 'floralwhite';

    public const FORESTGREEN = 'forestgreen';

    public const FUCHSIA = 'fuchsia';

    public const GAINSBORO = 'gainsboro';

    public const LIGHTPINK = 'lightpink';

    public const LIGHTSALMON = 'lightsalmon';

    public const LIGHTSEAGREEN = 'lightseagreen';

    public const LIGHTSKYBLUE = 'lightskyblue';

    public const LIGHTSLATEGRAY = 'lightslategray';

    public const LIGHTSLATEGREY = 'lightslategrey';

    public const LIGHTSTEELBLUE = 'lightsteelblue';

    public const LIGHTYELLOW = 'lightyellow';

    public const LIME = 'lime';

    public const LIMEGREEN = 'limegreen';

    public const LINEN = 'linen';

    public const MAGENTA = 'magenta';

    public const MAROON = 'maroon';

    public const MEDIUMAQUAMARINE = 'mediumaquamarine';

    public const MEDIUMBLUE = 'mediumblue';

    public const MEDIUMORCHID = 'mediumorchid';

    public const MEDIUMPURPLE = 'mediumpurple';

    public const MEDIUMSEAGREEN = 'mediumseagreen';

    public const MEDIUMSLATEBLUE = 'mediumslateblue';

    public const MEDIUMSPRINGGREEN = 'mediumspringgreen';

    public const MEDIUMTURQUOISE = 'mediumturquoise';

    public const MEDIUMVIOLETRED = 'mediumvioletred';

    public const MIDNIGHTBLUE = 'midnightblue';

    public const MINTCREAM = 'mintcream';

    public const MISTYROSE = 'mistyrose';

    public const MOCCASIN = 'moccasin';

    public const NAVAJOWHITE = 'navajowhite';

    public const NAVY = 'navy';

    public const OLDLACE = 'oldlace';

    public const OLIVE = 'olive';

    public const OLIVEDRAB = 'olivedrab';

    public const ORANGE = 'orange';

    public const ORANGERED = 'orangered';

    public const ORCHID = 'orchid';

    public const PALEGOLDENROD = 'palegoldenrod';

    public const PALEGREEN = 'palegreen';

    public const PALETURQUOISE = 'paleturquoise';

    public const PALEVIOLETRED = 'palevioletred';

    public const PAPAYAWHIP = 'papayawhip';

    public const PEACHPUFF = 'peachpuff';

    public const PERU = 'peru';

    public const PINK = 'pink';

    public const PLUM = 'plum';

    public const POWDERBLUE = 'powderblue';

    public const PURPLE = 'purple';

    public const RED = 'red';

    public const ROSYBROWN = 'rosybrown';

    public const ROYALBLUE = 'royalblue';

    public const SADDLEBROWN = 'saddlebrown';

    public const SALMON = 'salmon';

    public const GHOSTWHITE = 'ghostwhite';

    public const GOLD = 'gold';

    public const GOLDENROD = 'goldenrod';

    public const GRAY = 'gray';

    public const GREY = 'grey';

    public const GREEN = 'green';

    public const GREENYELLOW = 'greenyellow';

    public const HONEYDEW = 'honeydew';

    public const HOTPINK = 'hotpink';

    public const INDIANRED = 'indianred';

    public const INDIGO = 'indigo';

    public const IVORY = 'ivory';

    public const KHAKI = 'khaki';

    public const LAVENDER = 'lavender';

    public const LAVENDERBLUSH = 'lavenderblush';

    public const LAWNGREEN = 'lawngreen';

    public const LEMONCHIFFON = 'lemonchiffon';

    public const LIGHTBLUE = 'lightblue';

    public const LIGHTCORAL = 'lightcoral';

    public const LIGHTCYAN = 'lightcyan';

    public const LIGHTGOLDENRODYELLOW = 'lightgoldenrodyellow';

    public const LIGHTGRAY = 'lightgray';

    public const LIGHTGREEN = 'lightgreen';

    public const LIGHTGREY = 'lightgrey';

    public const SANDYBROWN = 'sandybrown';

    public const SEAGREEN = 'seagreen';

    public const SEASHELL = 'seashell';

    public const SIENNA = 'sienna';

    public const SILVER = 'silver';

    public const SKYBLUE = 'skyblue';

    public const SLATEBLUE = 'slateblue';

    public const SLATEGRAY = 'slategray';

    public const SLATEGREY = 'slategrey';

    public const SNOW = 'snow';

    public const SPRINGGREEN = 'springgreen';

    public const STEELBLUE = 'steelblue';

    public const TAN = 'tan';

    public const TEAL = 'teal';

    public const THISTLE = 'thistle';

    public const TOMATO = 'tomato';

    public const TURQUOISE = 'turquoise';

    public const VIOLET = 'violet';

    public const WHEAT = 'wheat';

    public const WHITE = 'white';

    public const WHITESMOKE = 'whitesmoke';

    public const YELLOW = 'yellow';

    public const YELLOWGREEN = 'yellowgreen';

    public function getValidator(): Validator
    {
        return $this->cache(new EnumValidator([
            self::ALICEBLUE,
            self::ANTIQUEWHITE,
            self::AQUA,
            self::AQUAMARINE,
            self::AZURE,
            self::BEIGE,
            self::BISQUE,
            self::BLACK,
            self::BLANCHEDALMOND,
            self::BLUE,
            self::BLUEVIOLET,
            self::BROWN,
            self::BURLYWOOD,
            self::CADETBLUE,
            self::CHARTREUSE,
            self::CHOCOLATE,
            self::CORAL,
            self::CORNFLOWERBLUE,
            self::CORNSILK,
            self::CRIMSON,
            self::CYAN,
            self::DARKBLUE,
            self::DARKCYAN,
            self::DARKGOLDENROD,
            self::DARKGRAY,
            self::DARKGREEN,
            self::DARKGREY,
            self::DARKKHAKI,
            self::DARKMAGENTA,
            self::DARKOLIVEGREEN,
            self::DARKORANGE,
            self::DARKORCHID,
            self::DARKRED,
            self::DARKSALMON,
            self::DARKSEAGREEN,
            self::DARKSLATEBLUE,
            self::DARKSLATEGRAY,
            self::DARKSLATEGREY,
            self::DARKTURQUOISE,
            self::DARKVIOLET,
            self::DEEPPINK,
            self::DEEPSKYBLUE,
            self::DIMGRAY,
            self::DIMGREY,
            self::DODGERBLUE,
            self::FIREBRICK,
            self::FLORALWHITE,
            self::FORESTGREEN,
            self::FUCHSIA,
            self::GAINSBORO,
            self::LIGHTPINK,
            self::LIGHTSALMON,
            self::LIGHTSEAGREEN,
            self::LIGHTSKYBLUE,
            self::LIGHTSLATEGRAY,
            self::LIGHTSLATEGREY,
            self::LIGHTSTEELBLUE,
            self::LIGHTYELLOW,
            self::LIME,
            self::LIMEGREEN,
            self::LINEN,
            self::MAGENTA,
            self::MAROON,
            self::MEDIUMAQUAMARINE,
            self::MEDIUMBLUE,
            self::MEDIUMORCHID,
            self::MEDIUMPURPLE,
            self::MEDIUMSEAGREEN,
            self::MEDIUMSLATEBLUE,
            self::MEDIUMSPRINGGREEN,
            self::MEDIUMTURQUOISE,
            self::MEDIUMVIOLETRED,
            self::MIDNIGHTBLUE,
            self::MINTCREAM,
            self::MISTYROSE,
            self::MOCCASIN,
            self::NAVAJOWHITE,
            self::NAVY,
            self::OLDLACE,
            self::OLIVE,
            self::OLIVEDRAB,
            self::ORANGE,
            self::ORANGERED,
            self::ORCHID,
            self::PALEGOLDENROD,
            self::PALEGREEN,
            self::PALETURQUOISE,
            self::PALEVIOLETRED,
            self::PAPAYAWHIP,
            self::PEACHPUFF,
            self::PERU,
            self::PINK,
            self::PLUM,
            self::POWDERBLUE,
            self::PURPLE,
            self::RED,
            self::ROSYBROWN,
            self::ROYALBLUE,
            self::SADDLEBROWN,
            self::SALMON,
            self::GHOSTWHITE,
            self::GOLD,
            self::GOLDENROD,
            self::GRAY,
            self::GREY,
            self::GREEN,
            self::GREENYELLOW,
            self::HONEYDEW,
            self::HOTPINK,
            self::INDIANRED,
            self::INDIGO,
            self::IVORY,
            self::KHAKI,
            self::LAVENDER,
            self::LAVENDERBLUSH,
            self::LAWNGREEN,
            self::LEMONCHIFFON,
            self::LIGHTBLUE,
            self::LIGHTCORAL,
            self::LIGHTCYAN,
            self::LIGHTGOLDENRODYELLOW,
            self::LIGHTGRAY,
            self::LIGHTGREEN,
            self::LIGHTGREY,
            self::SANDYBROWN,
            self::SEAGREEN,
            self::SEASHELL,
            self::SIENNA,
            self::SILVER,
            self::SKYBLUE,
            self::SLATEBLUE,
            self::SLATEGRAY,
            self::SLATEGREY,
            self::SNOW,
            self::SPRINGGREEN,
            self::STEELBLUE,
            self::TAN,
            self::TEAL,
            self::THISTLE,
            self::TOMATO,
            self::TURQUOISE,
            self::VIOLET,
            self::WHEAT,
            self::WHITE,
            self::WHITESMOKE,
            self::YELLOW,
            self::YELLOWGREEN,
        ]));
    }
}
