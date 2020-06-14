<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch10\batch05;

/* Листинг 10.16 */
class TroopCarrier extends CompositeUnit
{
    public function addUnit(Unit $unit)
    {
        if ($unit instanceof Cavalry) {
            throw new UnitException("Can't get a horse on the vehicle");
        }

        parent::addUnit($unit);
    }

    public function bombardStrength(): int
    {
        return 0;
    }
}
/* /Листинг 10.16 */
