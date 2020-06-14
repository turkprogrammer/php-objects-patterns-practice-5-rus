<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch10\batch04;

/* Листинг 10.10 */
abstract class Unit
{
    public function addUnit(Unit $unit)
    {
        throw new UnitException(get_class($this) . " is a leaf");
    }

    public function removeUnit(Unit $unit)
    {
        throw new UnitException(get_class($this) . " is a leaf");
    }

    abstract public function bombardStrength(): int;
}
/* /Листинг 10.10 */
