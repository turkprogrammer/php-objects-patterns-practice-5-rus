<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch02;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        // runner code here

        $dbgen = new DbGenerate();
        $pdo = $dbgen->getPDO();

        $obj = ShopProduct::getInstance(1, $pdo);
        print_r($obj);
        $obj = ShopProduct::getInstance(2, $pdo);
        print_r($obj);
        $obj = ShopProduct::getInstance(3, $pdo);
        print_r($obj);
    }
}
