<?php
/* Листинг 03.27 */
declare(strict_types=1);
/* /Листинг 03.27 */

namespace vitaliyviznyuk\popp5rus\ch03\batch10;

use popp\ch03\batch09\AddressManager;
use popp\ch03\batch09\ShopProduct;

class Runner
{

    public static function run1()
    {
        $manager = new AddressManager();
/* Листинг 03.27 */
        $manager->outputAddresses("false");
/* /Листинг 03.27 */
    }

    public static function run2()
    {
/* Листинг 03.29 */
        $product1 = new ShopProduct("My Antonia", "Willa", "Cather", 5.99);
        $product2 = new ShopProduct(
            "Exile on Coldharbour Lane",
            "The",
            "Alabama 3",
            10.99
        );
        print "author: " . $product1->getProducer() . "\n";
        print "artist: " . $product2->getProducer() . "\n";
/* /Листинг 03.29 */
    }
}
