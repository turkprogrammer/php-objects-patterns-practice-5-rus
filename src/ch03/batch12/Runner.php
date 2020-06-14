<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch12;

use popp\ch03\batch12\ShopProduct;
use popp\ch03\batch12\CdProduct;
use popp\ch03\batch12\BookProduct;
use popp\ch03\batch09\AddressManager;

class Runner
{

    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 03.38 */
        $product2 = new CdProduct(
            "Классическая музыка. Лучше",
            "Антонио",
            "Вивальди",
            10.99,
            0,
            60.33
        );
        print "Исполнитель: {$product2->getProducer()}\n";
        /* /Листинг 03.38 */
    }
}
