<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch10\batch03;

/* Листинг 10.07 */

class Army extends Unit
{
    private $units = [];

    public function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->units, true)) {
            return;
        }

        $this->units[] = $unit;
    }

    public function removeUnit(Unit $unit)
    {
        $idx = array_search($unit, $this->units, true);
        if (is_int($idx)) {
            array_splice($this->units, $idx, 1, []);
        }
    }

    public function bombardStrength(): int
    {
        $ret = 0;
        foreach ($this->units as $unit) {
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }

    /* /Листинг 10.07 */
    public function getUnits(): array
    {
        return $this->units;
    }
    /* Листинг 10.07 */
}
/* /Листинг 10.07 */
