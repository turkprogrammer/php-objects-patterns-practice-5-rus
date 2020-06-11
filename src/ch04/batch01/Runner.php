<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch01;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        print StaticExample::$aNum;
        StaticExample::sayHello();

        echo PHP_EOL;

        StaticExample2::sayHello();
        StaticExample2::sayHello();
        StaticExample2::sayHello();
    }
}
