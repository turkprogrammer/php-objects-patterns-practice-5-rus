<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch07;

/* Листинг 03.18 */

class ShopProductWriter
{
    /**
     * @param ShopProduct $shopProduct
     */
    public function write($shopProduct): void
    {
        $str  = $shopProduct->title . ': ' . $shopProduct->getProducer() . ' (' . $shopProduct->price . ")\n";
        print $str;
    }
}

/* /Листинг 03.18 */
