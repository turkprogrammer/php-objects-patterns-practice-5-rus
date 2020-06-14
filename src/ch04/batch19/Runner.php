<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch19;

class Runner
{
    public static function run()
    {
        // runner code here

/* Листинг 04.80 */
        $person = new Person("bob", 44);
        $person->setId(343);
        unset($person);
/* /Листинг 04.80 */
    }
}
