<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch03\batch02;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 03.05 */
        $product1 = new ShopProduct();
        print $product1->title;
        /* /Листинг 03.05 */

        echo PHP_EOL;

        /* Листинг 03.06 */
        $product1 = new ShopProduct();
        $product2 = new ShopProduct();

        $product1->title = 'Собачье сердце';
        $product2->title = 'Ревизор';
        /* /Листинг 03.06 */

        /* Листинг 03.07 */
        $product1->arbitraryAddition = 'Дополнительный параметр';
        /* /Листинг 03.07 */

        /* Листинг 03.08 */
        $product1 = new ShopProduct();
        $product1->title = 'Собачье сердце';
        $product1->producerMainName  = 'Булгаков';
        $product1->producerFirstName = 'Михаил';
        $product1->price = 5.99;
        /* /Листинг 03.08 */

        /* Листинг 03.09 */
        print "Автор: {$product1->producerFirstName} "
            . "{$product1->producerMainName}\n";
        /* /Листинг 03.09 */
    }
}
