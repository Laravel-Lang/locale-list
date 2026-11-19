<?php

declare(strict_types=1);

namespace LaravelLang\LocaleList;

use LaravelLang\LocaleList\Concerns\HasCollection;

enum Direction: string
{
    use HasCollection;

    case LeftToRight = 'ltr';
    case RightToLeft = 'rtl';
}
