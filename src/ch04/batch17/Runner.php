<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch17;

class Runner
{
    public static function run()
    {
        // runner code here

        $p = new Person();
        $p->name = "bob";
        $p->age  = 44;
        print_r($p);
    }
}
