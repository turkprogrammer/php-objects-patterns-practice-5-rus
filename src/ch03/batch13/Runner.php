<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch13;

class Runner
{

    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 03.42 */

        $product2 = new CdProduct(
            "Классическая музыка. Лучше",
            "Антонио",
            "Вивальди",
            10.99,
            60.33
        );

        print "Исполнитель: {$product2->getProducer()}\n";

        /* /Листинг 03.42 */
    }
}
