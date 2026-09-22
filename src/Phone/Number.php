<?php

namespace Fbpkg\Support\Phone;

use Fbpkg\Support\Digits\Normalizer;
use InvalidArgumentException;

class Number
{
    public static function normalize(string $number): string
    {
        $number = Normalizer::normalize($number);
        $number = preg_replace('/\D/', '', $number);
        $number = preg_replace('/^(?:98|0)+/', '', $number);

        if (! preg_match('/^9\d{9}$/', $number)) {
            throw new InvalidArgumentException(
                'The phone number must be a valid Iranian mobile number.'
            );
        }

        return '+98' . $number;
    }
}
