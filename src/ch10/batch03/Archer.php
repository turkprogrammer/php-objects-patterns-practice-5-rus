<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch10\batch03;

/* Листинг 10.09 */

class Archer extends Unit
{
    public function addUnit(Unit $unit)
    {
        throw new UnitException(get_class($this) . " is a leaf");
    }

    public function removeUnit(Unit $unit)
    {
        throw new UnitException(get_class($this) . " is a leaf");
    }

    public function bombardStrength(): int
    {
        return 4;
    }
}
