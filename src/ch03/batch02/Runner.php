<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch02;

use popp\ch03\batch02\ShopProduct;

class Runner
{
    public static function run1()
    {
/* Листинг 03.05 */
        $product1 = new ShopProduct();
        print $product1->title;
/* /Листинг 03.05 */
    }

    public static function run2()
    {
/* Листинг 03.06 */
        $product1 = new ShopProduct();
        $product2 = new ShopProduct();
        $product1->title="My Antonia";
        $product2->title="Catch 22";
/* /Листинг 03.06 */

        print $product1->title."\n";
        print $product2->title."\n";
    }

    public static function run3()
    {
        $product1 = new ShopProduct();
/* Листинг 03.07 */
        $product1->arbitraryAddition = "treehouse";
/* /Листинг 03.07 */

        print $product1->arbitraryAddition."\n";
    }

    public static function run4()
    {
/* Листинг 03.08 */
        $product1 = new ShopProduct();
        $product1->title = "My Antonia";
        $product1->producerMainName  = "Cather";
        $product1->producerFirstName = "Willa";
        $product1->price = 5.99;
/* /Листинг 03.08 */

/* Листинг 03.09 */
        print "author: {$product1->producerFirstName} "
            . "{$product1->producerMainName}\n";
/* /Листинг 03.09 */
    }
}
