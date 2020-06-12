<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_9;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $u = new UtilityService(100);
        print $u->getFinalPrice() . "\n";

        print $u->calculateTax() . "\n";
    }
}
