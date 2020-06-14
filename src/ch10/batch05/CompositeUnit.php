<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch10\batch05;

/* Листинг 10.14 */
abstract class CompositeUnit extends Unit
{
    private $units = [];

    public function getComposite(): CompositeUnit
    {
        return $this;
    }

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

    public function getUnits(): array
    {
        return $this->units;
    }
}
/* /Листинг 10.14 */
