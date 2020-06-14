<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch18;

/* Листинг 04.75 */

class PersonWriter
{

    public function writeName(Person $p)
    {
        print $p->getName() . "\n";
    }

    public function writeAge(Person $p)
    {
        print $p->getAge() . "\n";
    }
}
