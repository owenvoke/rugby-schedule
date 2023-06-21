<?php

declare(strict_types=1);

namespace App\Contracts;

interface IsDisabled
{
    public function disabled(): void;
}
