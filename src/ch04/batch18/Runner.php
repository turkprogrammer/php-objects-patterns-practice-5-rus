<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch18;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        // runner code here

        $person = new Person(new PersonWriter());
        $person->writeName();
        $person->writeAge();
    }
}
