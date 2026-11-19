<?php

declare(strict_types=1);

namespace LaravelLang\LocaleList\Concerns;

use Illuminate\Support\Collection;

/** @mixin \BackedEnum */
trait HasCollection
{
    public static function values(): array
    {
        return array_column(static::cases(), 'value');
    }

    public static function collection(bool $values = true): Collection
    {
        $items = $values
            ? static::values()
            : static::cases();

        return new Collection($items);
    }
}
