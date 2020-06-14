<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch03\batch15;

use popp\ch03\batch15\ShopProduct;

class ShopProductWriter
{
    /* Листинг 03.47 */
    private $products = [];

    /* /Листинг 03.47 */

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    public function write()
    {
        $str = "";
        foreach ($this->products as $shopProduct) {
            $str .= "{$shopProduct->getTitle()}: ";
            $str .= $shopProduct->getProducer();
            $str .= " ({$shopProduct->getPrice()})\n";
        }
        print $str;
    }
}
