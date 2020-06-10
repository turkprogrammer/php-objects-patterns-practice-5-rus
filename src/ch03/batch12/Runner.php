<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch12;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 03.38 */

        $product2 = new CdProduct(
            'Классическая музыка. Лучшее',
            'Антонио',
            'Вивальди',
            10.99,
            0,
            60.33
        );

        print "Исполнитель: {$product2->getProducer()}\n";

        /* /Листинг 03.38 */
    }
}
