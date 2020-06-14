<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch05\batch06;

class Runner
{
    public static function run()
    {
        $d = new Delegator();
        $d->thing();
    }
}
