<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch10;

use vitaliyviznyuk\popp5rus\ch03\batch09\ShopProduct;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 03.29 */

        $product1 = new ShopProduct('Собачье сердце','Михаил', 'Булгаков', 5.99);
        $product2 = new ShopProduct('Классическая музыка. Лучшее', 'Антонио', 'Вивальди', 10.99);

        print 'Автор: ' . $product1->getProducer() . "\n";
        print 'Исполнитель: ' . $product2->getProducer() . "\n";

        /* /Листинг 03.29 */
    }
}
