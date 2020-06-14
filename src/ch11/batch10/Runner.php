<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch10;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 11.56 */
        $acquirer = new UnitAcquisition();
        $tileforces = new TileForces(4, 2, $acquirer);
        $power = $tileforces->firepower();

        print "power is {$power}\n";
        /* /Листинг 11.56 */
    }
}
