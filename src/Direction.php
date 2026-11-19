<?php

declare(strict_types=1);

namespace LaravelLang\LocaleList;

use LaravelLang\LocaleList\Concerns\HasFrom;
use LaravelLang\LocaleList\Concerns\HasValues;

enum Direction: string
{
    use HasFrom;
    use HasValues;

    case LeftToRight = 'ltr';
    case RightToLeft = 'rtl';
}
