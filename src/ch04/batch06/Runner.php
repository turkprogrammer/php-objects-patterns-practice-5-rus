<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06;

class Runner
{
    /**
     * @return void
     */
    public static function run()
    {
        print_r(Document::create());

        $p = new ShopProduct("Fine Soap", "", "Bob's Bathroom", 1.33);
        print $p->calculateTax(100) . "\n";

        $u = new UtilityService();
        print $u->calculateTax(100) . "\n";
    }
}
