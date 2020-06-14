<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch04;

use popp\ch03\batch04\ShopProduct;

class Runner
{
    public static function run1()
    {
/* Листинг 03.13 */
        $product1 = new ShopProduct(
            "My Antonia",
            "Willa",
            "Cather",
            5.99
        );
        print "author: {$product1->getProducer()}\n";
/* /Листинг 03.13 */
    }
}
