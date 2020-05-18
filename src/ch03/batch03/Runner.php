<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch03\batch03;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 03.11 */
        $product1 = new ShopProduct();

        $product1->title = 'Собачье сердце';
        $product1->producerMainName  = 'Булгаков';
        $product1->producerFirstName = 'Михаил';
        $product1->price = 5.99;

        print "Автор: {$product1->getProducer()}\n";
        /* /Листинг 03.11 */
    }
}
