<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch07;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $main_army = new Army();
        $main_army->addUnit(new Archer());
        $main_army->addUnit(new LaserCanonUnit());

        $sub_army = new Army();
        $sub_army->addUnit(new Cavalry());
        $main_army->addUnit($sub_army);
        $main_army->addUnit(new Cavalry());

        print $main_army->textDump();
    }
}
