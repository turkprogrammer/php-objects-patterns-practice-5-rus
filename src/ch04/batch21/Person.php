<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch21;

/* Листинг 04.84 */
class Person
{
    private $name;
    private $age;
    private $id;
    public  $account;

    public function __construct(string $name, int $age, Account $account)
    {
        $this->name = $name;
        $this->age  = $age;
        $this->account = $account;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function __clone()
    {
        $this->id   = 0;
    }
}
//done
