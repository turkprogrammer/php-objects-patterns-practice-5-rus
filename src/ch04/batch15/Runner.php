<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch15;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        // runner code here

        $p = new Person();
        if (isset($p->name)) {
            print $p->name;
        } else {
            print "nope\n";
        }
        // output:
        // Bob
    }
}
