<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 04.51 */
        print_r(Document::create());
        /* /Листинг 04.51 */
    }

    public static function run2()
    {
        /* Листинг 04.11 */
        $p = new ShopProduct("Fine Soap", "", "Bob's Bathroom", 1.33);
        print $p->calculateTax(100) . "\n";
        /* /Листинг 04.11 */
    }

    public static function run3()
    {
        $u = new UtilityService();
        print $u->calculateTax(100) . "\n";
    }
}
