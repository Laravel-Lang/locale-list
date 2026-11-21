<?php

declare(strict_types=1);

namespace LaravelLang\LocaleList\Concerns;

use BackedEnum;
use Illuminate\Support\Collection;

/** @mixin BackedEnum */
trait HasCollection
{
    /** @return list<string> */
    public static function values(): array
    {
        return array_column(static::cases(), 'value');
    }

    /** @return ($values is true ? Collection<int, value-of<static>> : Collection<int, static>) */
    public static function collection(bool $values = true): Collection
    {
        return $values
            ? new Collection(static::values())
            : new Collection(static::cases());
    }
}
