<?php

/* Листинг 03.27 */

declare(strict_types=1);

/* /Листинг 03.27 */

namespace vitaliyviznyuk\popp5rus\ch03\batch10;

use vitaliyviznyuk\popp5rus\ch03\batch09\AddressManager;
use vitaliyviznyuk\popp5rus\ch03\batch09\ShopProduct;

class Runner
{

    /**
     * @return void
     */
    public static function run(): void
    {
        $manager = new AddressManager();

        /* Листинг 03.27 */

        //$manager->outputAddresses("false");

        /* /Листинг 03.27 */

        echo PHP_EOL;

        /* Листинг 03.29 */

        $product1 = new ShopProduct("Собачье сердце", "Михаил", "Булгаков", 5.99);
        $product2 = new ShopProduct(
            "Классическая музыка. Лучше",
            "Антонио",
            "Вивальди",
            10.99
        );
        print "Автор: " . $product1->getProducer() . "\n";
        print "Исполнитель: " . $product2->getProducer() . "\n";

        /* /Листинг 03.29 */
    }
}
