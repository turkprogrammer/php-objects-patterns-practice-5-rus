<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch03;

/* Листинг 04.07 */
class TextProductWriter extends ShopProductWriter
{
    public function write()
    {
        $str = "PRODUCTS:\n";
        foreach ($this->products as $shopProduct) {
            $str .= $shopProduct->getSummaryLine()."\n";
        }
        print $str;
    }
}
