<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch08;

use popp\ch03\batch04\ShopProduct;
use popp\ch03\batch08\ShopProductWriter;
use popp\ch03\batch08\Wrong;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 03.21 */
        $writer = new ShopProductWriter();
        $writer->write(new Wrong());
        /* /Листинг 03.21 */
    }
}
