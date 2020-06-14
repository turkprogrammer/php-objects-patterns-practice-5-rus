<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_3;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 04.24 */
        $p = new ShopProduct();
        self::storeIdentityObject($p);
        print $p->calculateTax(100) . "\n";
        print $p->generateId() . "\n";
        /* /Листинг 04.24 */
    }

    public static function run2()
    {
        /* Листинг 04.28 */
        // deliberate error averted!
        //$u = new UtilityService();
        //print $u->calculateTax(100) . "\n";
        /* /Листинг 04.28 */
    }


    /* Листинг 04.23 */
    public static function storeIdentityObject(IdentityObject $idobj)
    {
        // do something with the IdentityObject
    }
    /* /Листинг 04.23 */
}
