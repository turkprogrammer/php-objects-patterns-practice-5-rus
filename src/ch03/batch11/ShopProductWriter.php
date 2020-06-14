<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch11;

/* Листинг 03.34 */

class ShopProductWriter
{
    public function write($shopProduct)
    {
        if (
            !($shopProduct instanceof CdProduct) &&
            !($shopProduct instanceof BookProduct)
        ) {
            die("wrong type supplied");
        }
        $str = "{$shopProduct->title}: "
            . $shopProduct->getProducer()
            . " ({$shopProduct->price})\n";
        print $str;
    }
}
/* /Листинг 03.34 */
