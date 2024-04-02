<?php

declare(strict_types=1);

namespace App\Enum;

use Ds\Set;

trait EnumTrait
{
    public static function values(?array $cases = null): array
    {
        return array_map(fn (\BackedEnum $enum): string => $enum->value, $cases ?? self::cases());
    }

    public static function valuesAsSet(?array $cases = null): Set
    {
        return new Set(self::values($cases));
    }

    public static function casesAsSet(): Set
    {
        return new Set(self::cases());
    }
}
