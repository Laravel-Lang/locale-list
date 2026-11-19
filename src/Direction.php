<?php

declare(strict_types=1);

namespace LaravelLang\LocaleList;

use LaravelLang\LocaleList\Concerns\HasCollection;
use LaravelLang\LocaleList\Concerns\HasFrom;

enum Direction: string
{
    use HasCollection;
    use HasFrom;

    case LeftToRight = 'ltr';
    case RightToLeft = 'rtl';
}
