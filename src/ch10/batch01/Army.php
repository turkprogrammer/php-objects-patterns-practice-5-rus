<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch10\batch01;

/* Листинг 10.02 */

class Army
{
    private $units = [];

    public function addUnit(Unit $unit)
    {
        array_push($this->units, $unit);
    }

    public function bombardStrength(): int
    {
        $ret = 0;
        foreach ($this->units as $unit) {
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }
}
/* /Листинг 10.02 */
