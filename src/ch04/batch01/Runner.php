<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch01;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        // runner code here
        print StaticExample::$aNum;
        StaticExample::sayHello();
    }

    public static function run2()
    {
        StaticExample2::sayHello();
        StaticExample2::sayHello();
        StaticExample2::sayHello();
    }
}
