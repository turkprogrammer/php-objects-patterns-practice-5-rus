<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch01;

class StaticExample
{
    static public $aNum = 0;

    public static function sayHello()
    {
        print 'Здравствуй, Мир!';
    }
}
