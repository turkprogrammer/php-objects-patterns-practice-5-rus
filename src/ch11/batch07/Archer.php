<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch07;

class Archer extends Unit
{
    public function bombardStrength(): int
    {
        return 4;
    }

    public function unitCount(): int
    {
        return 1;
    }
}
