<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch10\batch04;

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
