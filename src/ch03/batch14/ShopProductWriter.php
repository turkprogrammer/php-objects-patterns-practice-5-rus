<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch14;

/* Листинг 03.46 */

class ShopProductWriter
{
    public $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    public function write()
    {
        $str = "";
        foreach ($this->products as $shopProduct) {
            $str .= "{$shopProduct->title}: ";
            $str .= $shopProduct->getProducer();
            $str .= " ({$shopProduct->getPrice()})\n";
        }
        print $str;
    }
}

/* /Листинг 03.46 */
