<?php

namespace Fbpkg\Support\Facade;

use Fbpkg\Support\Random\Generator;

class Random
{
    public static function number(int $min, int $max): int
    {
        return Generator::number($min, $max);
    }

    public static function digits(int $length): string
    {
        return Generator::digits($length);
    }

    public static function string(
        int $length,
        bool $numbers = true,
        bool $ambiguous = true,
    ): string {
        return Generator::string($length, $numbers, $ambiguous);
    }

    public static function element(array|string $elements): mixed
    {
        return Generator::element($elements);
    }
}
