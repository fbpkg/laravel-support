<?php

namespace Fbpkg\Support\Random;

class Generator
{
    public static function number(int $min, int $max): int
    {
        return random_int($min, $max);
    }

    public static function digits(int $length): string
    {
        $characters = '0123456789';
        $result = '';

        for ($i = 0; $i < $length; $i++) {
            $result .= $characters[random_int(0, strlen($characters) - 1)];
        }

        return $result;
    }

    public static function string(
        int $length,
        bool $numbers = true,
        bool $ambiguous = true,
    ): string {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        if ($numbers) {
            $characters .= '0123456789';
        }

        if (! $ambiguous) {
            $characters = str_replace(
                ['0', 'O', 'o', '1', 'I', 'l'],
                '',
                $characters
            );
        }

        $result = '';
        $max = strlen($characters) - 1;

        for ($i = 0; $i < $length; $i++) {
            $result .= $characters[random_int(0, $max)];
        }

        return $result;
    }

    public static function element(array|string $elements): mixed
    {
        if ($elements === [] || $elements === '') {
            throw new \InvalidArgumentException('The elements cannot be empty.');
        }

        if (is_string($elements)) {
            return $elements[random_int(0, strlen($elements) - 1)];
        }

        return $elements[array_rand($elements)];
    }
}
