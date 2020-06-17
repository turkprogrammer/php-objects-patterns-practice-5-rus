<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch01;

/* Листинг 04.02 */

class StaticExample2
{
    static public $aNum = 0;

    public static function sayHello()
    {
        self::$aNum++;
        print "Привет! (" . self::$aNum . ")\n";
    }
}
