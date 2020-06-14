<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch13;

use popp\ch03\batch13\ShopProduct;
use popp\ch03\batch13\CdProduct;
use popp\ch03\batch13\BookProduct;
use popp\ch03\batch09\AddressManager;

class Runner
{

    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 03.42 */
        $product2 = new CdProduct(
            "Классическая музыка. Лучше",
            "Антонио",
            "Вивальди",
            10.99,
            0,
            60.33
        );
        print "Исполнитель: {$product2->getProducer()}\n";
        /* /Листинг 03.42 */
    }
}
