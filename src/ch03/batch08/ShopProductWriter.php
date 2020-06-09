<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch08;

class ShopProductWriter
{
    /* Листинг 03.20 */
    /**
     * @param ShopProduct $shopProduct
     */
    public function write(ShopProduct $shopProduct): void
    {
        // ...
        /* /Листинг 03.20 */

        $str  = $shopProduct->title . ': ' . $shopProduct->getProducer() . ' (' . $shopProduct->price . ")\n";
        print $str;

        /* Листинг 03.20 */
    }
    /* /Листинг 03.20 */
}
