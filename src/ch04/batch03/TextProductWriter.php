<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch03;

class TextProductWriter extends ShopProductWriter
{
    public function write()
    {
        $str = "ТОВАРЫ:\n";

        foreach ($this->products as $shopProduct) {
            $str .= $shopProduct->getSummaryLine()."\n";
        }

        print $str;
    }
}
