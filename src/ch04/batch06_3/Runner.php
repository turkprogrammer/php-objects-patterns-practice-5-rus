<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_3;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $p = new ShopProduct();
        self::storeIdentityObject($p);
        print $p->calculateTax(100) . "\n";
        print $p->generateId() . "\n";

        $u = new UtilityService();
        print $u->calculateTax(100) . "\n";

    }

    public static function storeIdentityObject(IdentityObject $idobj)
    {
        // сделать что-нибудь с экземпляром типа IdentityObject
    }
}
