<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch08;

use popp\ch03\batch04\ShopProduct;

class ShopProductWriter
{
    /* Листинг 03.20 */
    public function write(ShopProduct $shopProduct)
    {
        // ...
        /* /Листинг 03.20 */
        $str = "{$shopProduct->title}: " .
            $shopProduct->getProducer() .
            " ({$shopProduct->price})\n";
        print $str;
        /* Листинг 03.20 */
    }
    /* /Листинг 03.20 */
}
