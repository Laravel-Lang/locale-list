<?php

declare(strict_types=1);

namespace LaravelLang\LocaleList;

enum Direction: string
{
    case LeftToRight = 'ltr';
    case RightToLeft = 'rtl';
}
