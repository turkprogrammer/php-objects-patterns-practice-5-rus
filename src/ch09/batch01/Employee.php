<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch01;

/* Листинг 09.01 */
abstract class Employee
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function fire();
}
