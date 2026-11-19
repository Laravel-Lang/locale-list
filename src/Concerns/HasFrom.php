<?php

declare(strict_types=1);

namespace LaravelLang\LocaleList\Concerns;

use BackedEnum;

use function array_filter;
use function array_values;

/** @mixin \BackedEnum */
trait HasFrom
{
    public static function tryFrom(int|string $case): ?static
    {
        $cases = array_filter(
            static::cases(),
            static fn (BackedEnum $c) => $c->name === $case
        );

        return array_values($cases)[0] ?? null;
    }
}
