<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch10\batch08;

require_once("src/ch10/batch08/legacy.php");

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 10.37 */
        $lines = getProductFileLines(__DIR__ . '/test2.txt');
        $objects = [];
        foreach ($lines as $line) {
            $id = getIDFromLine($line);
            $name = getNameFromLine($line);
            $objects[$id] = getProductObjectFromID($id, $name);
        }

        print_r($objects);
        /* /Листинг 10.37 */
    }

    public static function run2()
    {
        /* Листинг 10.39 */
        $facade = new ProductFacade(__DIR__ . '/test2.txt');
        $object = $facade->getProduct("234");
        /* /Листинг 10.39 */
    }
}
