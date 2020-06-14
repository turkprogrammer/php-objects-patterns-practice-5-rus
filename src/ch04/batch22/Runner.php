<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch22;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 04.87 */
        $st = new StringThing();
        //print $st;
        /* /Листинг 04.87 */
    }

    public static function run2()
    {
        $person = new Person();
        print $person;
        // Bob (age 44)
    }
}
//done
