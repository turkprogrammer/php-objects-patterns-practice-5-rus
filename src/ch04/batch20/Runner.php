<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch20;

class Runner
{
    public static function run()
    {
        // runner code here

/* Листинг 04.82 */
        $person = new Person("bob", 44);
        $person->setId(343);
        $person2 = clone $person;
/* /Листинг 04.82 */
        print_r($person);
        print_r($person2);
    }
}
//done
