<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch18;

class Runner
{
    public static function run()
    {
        // runner code here

        $person= new Person(new PersonWriter());
        $person->writeName();
        $person->writeAge();
    }
}
