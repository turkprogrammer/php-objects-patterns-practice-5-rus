<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_1;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 04.16 */
        $p = new ShopProduct();
        print $p->calculateTax(100) . "\n";

        $u = new UtilityService();
        print $u->calculateTax(100) . "\n";
        /* /Листинг 04.16 */
    }
}
