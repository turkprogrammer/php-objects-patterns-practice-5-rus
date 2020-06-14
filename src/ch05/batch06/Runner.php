<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch05\batch06;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $d = new Delegator();
        $d->thing();
    }
}
