<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch07;

/* Листинг 11.38 */

abstract class CompositeUnit extends Unit
{
    // ...
    /* /Листинг 11.38 */
    private $units = [];

    public function getComposite(): Unit
    {
        return $this;
    }

    public function units(): array
    {
        return $this->units;
    }

    public function removeUnit(Unit $unit)
    {
        $units = [];

        foreach ($this->units as $thisunit) {
            if ($unit !== $thisunit) {
                $units[] = $thisunit;
            }
        }

        $this->units = $units;
    }

    public function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->units, true)) {
            return;
        }

        $this->units[] = $unit;
    }

    public function unitCount(): int
    {
        $count = 0;

        foreach ($this->units as $unit) {
            $count += $unit->unitCount();
        }

        return $count;
    }

    /* Листинг 11.38 */
    public function textDump($num = 0): string
    {
        $txtout = parent::textDump($num);

        foreach ($this->units as $unit) {
            $txtout .= $unit->textDump($num + 1);
        }

        return $txtout;
    }
}
/* /Листинг 11.38 */
