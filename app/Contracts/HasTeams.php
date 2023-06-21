<?php

declare(strict_types=1);

namespace App\Contracts;

interface HasTeams
{
    public function mapTeams(string $identifier): string|null;
}
