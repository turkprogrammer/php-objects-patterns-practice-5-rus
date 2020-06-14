<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch03;

use popp\ch04\batch02\ShopProduct;

/* Листинг 04.05 */

abstract class ShopProductWriter
{
    protected $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    abstract public function write();
}
