<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch20;

/* Листинг 04.81 */

class Person
{
    private $name;
    private $age;
    private $id;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function __clone()
    {
        $this->id = 0;
    }
}
/* /Листинг 04.81 */
