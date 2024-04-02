<?php

declare(strict_types=1);

namespace App\Model;

final class SkelModel
{
    public function __construct(
        private array $bones,
    ) {
    }
}
