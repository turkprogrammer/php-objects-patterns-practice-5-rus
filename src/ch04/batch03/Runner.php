<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch03;

use vitaliyviznyuk\popp5rus\ch04\batch02\ShopProduct;
use vitaliyviznyuk\popp5rus\ch04\batch02\BookProduct;
use vitaliyviznyuk\popp5rus\ch04\batch02\CdProduct;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        print ShopProduct::AVAILABLE;

        echo PHP_EOL;

        // demonstrate abstract instantiation error
        // commented out so that tests run!
        // $writer = new ShopProductWriter();

        $product1 = new BookProduct(
            'Собачье сердце',
            'Михаил',
            'Булгаков',
            5.99,
            300
        );

        $product2 = new CdProduct(
            'Классическая музыка. Лучшее',
            'Антонио',
            'Вивальди',
            10.99,
            60
        );

        $textwriter = new TextProductWriter();

        $textwriter->addProduct($product1);
        $textwriter->addProduct($product2);
        $textwriter->write();

        $xmlwriter = new XmlProductWriter();

        $xmlwriter->addProduct($product1);
        $xmlwriter->addProduct($product2);
        $xmlwriter->write();
    }
}
