<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch22;

/* Листинг 04.88 */

class Person
{
    public function getName(): string
    {
        return "Bob";
    }

    public function getAge(): int
    {
        return 44;
    }

    public function __toString(): string
    {
        $desc = $this->getName() . " (age ";
        $desc .= $this->getAge() . ")";
        return $desc;
    }
}
//done
