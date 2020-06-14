<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch24;

/* Листинг 04.99 */
class Person
{
    public function output(PersonWriter $writer)
    {
        $writer->write($this);
    }

    public function getName(): string
    {
        return "Bob";
    }

    public function getAge(): int
    {
        return 44;
    }
}
//done
