<?php

declare(strict_types=1);

namespace App\Enum;

enum SkelEnum: string
{
    use EnumTrait;

    case FOOT = 'Foot';
    case BIKE = 'Bike';
    case BUS = 'Bus';
    case METRO = 'Subway';
    case TRAIN = 'TGV';

    public function valuation(): string
    {
        return match ($this) {
            SkelEnum::FOOT  => '100',
            SkelEnum::BIKE  => '90',
            SkelEnum::BUS   => '40',
            SkelEnum::METRO => '80',
            SkelEnum::TRAIN => '75',
        };
    }
}
