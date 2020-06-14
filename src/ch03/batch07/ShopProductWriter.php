<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch07;

use popp\ch03\batch04\ShopProduct;

/* Листинг 03.18 */

class ShopProductWriter
{
    public function write($shopProduct)
    {
        $str = $shopProduct->title . ": "
            . $shopProduct->getProducer()
            . " (" . $shopProduct->price . ")\n";
        print $str;
    }
}
/* /Листинг 03.18 */
