<?php

declare(strict_types=1);

namespace LaravelLang\LocaleList\Concerns;

use function array_column;

/** @mixin \BackedEnum */
trait HasValues
{
    public static function values(): array
    {
        return array_column(static::cases(), 'value');
    }
}
