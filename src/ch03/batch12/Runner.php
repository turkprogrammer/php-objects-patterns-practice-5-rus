<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch12;

use popp\ch03\batch12\ShopProduct;
use popp\ch03\batch12\CdProduct;
use popp\ch03\batch12\BookProduct;
use popp\ch03\batch09\AddressManager;

class Runner
{

    public static function run1()
    {
/* Листинг 03.38 */
        $product2 = new CdProduct(
            "Exile on Coldharbour Lane",
            "The",
            "Alabama 3",
            10.99,
            0,
            60.33
        );
        print "artist: {$product2->getProducer()}\n";
/* /Листинг 03.38 */
    }
}
