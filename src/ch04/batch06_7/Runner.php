<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_7;

class Runner
{
    public static function run()
    {
/* Листинг 04.38 */
        $u = new UtilityService();
        print $u->calculateTax(100) . "\n";
/* /Листинг 04.38 */
    }
}
