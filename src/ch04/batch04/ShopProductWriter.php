<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch04;

use vitaliyviznyuk\popp5rus\ch04\batch02\ShopProduct;

abstract class ShopProductWriter
{
    protected $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    abstract public function write();
}
