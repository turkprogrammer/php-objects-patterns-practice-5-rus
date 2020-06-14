<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch10\batch03;

class Soldier extends Unit
{
    public function addUnit(Unit $unit)
    {
    }
    public function removeUnit(Unit $unit)
    {
    }

    public function bombardStrength(): int
    {
        return 8;
    }
}
