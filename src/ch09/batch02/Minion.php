<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch02;

class Minion extends Employee
{
    public function fire()
    {
        print "{$this->name}: I'll clear my desk\n";
    }
}
