<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch07;

use popp\ch03\batch04\ShopProduct;
use popp\ch03\batch07\ShopProductWriter;

class Runner
{
    public static function run1()
    {
/* Листинг 03.19 */
        $product1 = new ShopProduct("My Antonia", "Willa", "Cather", 5.99);
        $writer = new ShopProductWriter();
        $writer->write($product1);
/* /Листинг 03.19 */
    }
}
