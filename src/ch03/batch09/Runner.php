<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch09;

use popp\ch03\batch09\ShopProduct;
use popp\ch03\batch09\AddressManager;

class Runner
{

    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 03.23 */
// will fail
        $product = new ShopProduct("title", "first", "main", []);
        /* /Листинг 03.23 */
    }

    public static function run2()
    {
        /* Листинг 03.24 */
        $product = new ShopProduct("title", "first", "main", "4.22");
        /* /Листинг 03.24 */
        print $product->getPrice();
    }


    public static function run3()
    {
        $manager = new AddressManager();
        /* Листинг 03.26 */
        $manager->outputAddresses("false");
        /* /Листинг 03.26 */
    }
}
