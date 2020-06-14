<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch07;

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
