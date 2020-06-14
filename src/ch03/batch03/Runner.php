<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch03;

use popp\ch03\batch03\ShopProduct;

class Runner
{
    public static function run1()
    {
/* Листинг 03.11 */
        $product1 = new ShopProduct();
        $product1->title = "My Antonia";
        $product1->producerMainName  = "Cather";
        $product1->producerFirstName = "Willa";
        $product1->price = 5.99;

        print "author: {$product1->getProducer()}\n";
/* /Листинг 03.11 */
    }
}
