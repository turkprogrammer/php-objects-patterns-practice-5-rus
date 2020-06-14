<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch01;

use popp\ch03\batch01\ShopProduct;

class Runner
{
    public static function run()
    {
/* Листинг 03.02 */
        $product1 = new ShopProduct();
        $product2 = new ShopProduct();
/* /Листинг 03.02 */

/* Листинг 03.03 */
        var_dump($product1);
        var_dump($product2);
/* /Листинг 03.03 */
    }
}
