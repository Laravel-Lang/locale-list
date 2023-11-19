<?php

declare(strict_types=1);

namespace LaravelLang\LocaleList;

use ArchTech\Enums\From;
use ArchTech\Enums\Names;
use ArchTech\Enums\Options;
use ArchTech\Enums\Values;
use BackedEnum;

enum Locale: string
{
    use From;
    use Names;
    use Options;
    use Values;

    case Afrikaans          = 'af';
    case Albanian           = 'sq';
    case Arabic             = 'ar';
    case Armenian           = 'hy';
    case Azerbaijani        = 'az';
    case Basque             = 'eu';
    case Belarusian         = 'be';
    case Bengali            = 'bn';
    case Bosnian            = 'bs';
    case Bulgarian          = 'bg';
    case Catalan            = 'ca';
    case CentralKhmer       = 'km';
    case Chinese            = 'zh_CN';
    case ChineseHongKong    = 'zh_HK';
    case ChineseT           = 'zh_TW';
    case Croatian           = 'hr';
    case Czech              = 'cs';
    case Danish             = 'da';
    case Dutch              = 'nl';
    case English            = 'en';
    case Estonian           = 'et';
    case Finnish            = 'fi';
    case French             = 'fr';
    case Galician           = 'gl';
    case Georgian           = 'ka';
    case German             = 'de';
    case GermanSwitzerland  = 'de_CH';
    case Greek              = 'el';
    case Gujarati           = 'gu';
    case Hebrew             = 'he';
    case Hindi              = 'hi';
    case Hungarian          = 'hu';
    case Icelandic          = 'is';
    case Indonesian         = 'id';
    case Italian            = 'it';
    case Japanese           = 'ja';
    case Kannada            = 'kn';
    case Kazakh             = 'kk';
    case Korean             = 'ko';
    case Latvian            = 'lv';
    case Lithuanian         = 'lt';
    case Macedonian         = 'mk';
    case Malay              = 'ms';
    case Marathi            = 'mr';
    case Mongolian          = 'mn';
    case Nepali             = 'ne';
    case NorwegianBokmal    = 'nb';
    case NorwegianNynorsk   = 'nn';
    case Occitan            = 'oc';
    case Pashto             = 'ps';
    case Persian            = 'fa';
    case Pilipino           = 'fil';
    case Polish             = 'pl';
    case Portuguese         = 'pt';
    case PortugueseBrazil   = 'pt_BR';
    case Romanian           = 'ro';
    case Russian            = 'ru';
    case Sardinian          = 'sc';
    case SerbianCyrillic    = 'sr_Cyrl';
    case SerbianLatin       = 'sr_Latn';
    case SerbianMontenegrin = 'sr_Latn_ME';
    case Sinhala            = 'si';
    case Slovak             = 'sk';
    case Slovenian          = 'sl';
    case Spanish            = 'es';
    case Swahili            = 'sw';
    case Swedish            = 'sv';
    case Tagalog            = 'tl';
    case Tajik              = 'tg';
    case Thai               = 'th';
    case Turkish            = 'tr';
    case Turkmen            = 'tk';
    case Uighur             = 'ug';
    case Ukrainian          = 'uk';
    case Urdu               = 'ur';
    case UzbekCyrillic      = 'uz_Cyrl';
    case UzbekLatin         = 'uz_Latn';
    case Vietnamese         = 'vi';
    case Welsh              = 'cy';

    /** Get an associative array of [case value => case value]. */
    public static function onlyValues(): array
    {
        $cases = self::cases();

        return isset($cases[0]) && $cases[0] instanceof BackedEnum
            ? array_column($cases, 'value', 'value')
            : array_column($cases, 'value');
    }
}
