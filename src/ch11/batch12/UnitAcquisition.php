<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch12;

use popp\ch11\batch08\Army;
use popp\ch11\batch08\Archer;
use popp\ch11\batch08\Cavalry;
use popp\ch11\batch08\LaserCanonUnit;

class UnitAcquisition
{
    /* Листинг 11.59 */
    public function getUnits(int $x, int $y): array
    {
        $army = new Army();
        $army->addUnit(new Archer());

        $found = [
            new Cavalry(),
            new NullUnit(),
            new LaserCanonUnit(),
            $army
        ];

        return $found;
    }
    /* /Листинг 11.59 */
}
