<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch05;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $product = new ShopProduct();
    }

    public static function run2()
    {
        $consultancy = new Consultancy();
    }

    public static function run3()
    {
        $document = Document::create();
        print_r($document);
    }
}
