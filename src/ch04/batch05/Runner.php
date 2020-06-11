<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch05;

class Runner
{
    public static function run()
    {
        $product = new ShopProduct();

        $consultancy = new Consultancy();

        $document = Document::create();
        print_r($document);
    }
}
