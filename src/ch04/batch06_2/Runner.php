<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_2;

class Runner
{
    public static function run()
    {
/* Листинг 04.19 */
        $p = new ShopProduct();
        print $p->calculateTax(100) . "\n";
        print $p->generateId() . "\n";
/* /Листинг 04.19 */
    }
}
