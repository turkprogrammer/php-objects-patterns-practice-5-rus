<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_8;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $u = new UtilityService();
        print $u->calculateTax(100) . "\n";
    }
}
