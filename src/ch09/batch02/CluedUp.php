<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch09\batch02;

/* Листинг 09.06 */

class CluedUp extends Employee
{
    public function fire()
    {
        print "{$this->name}: I'll call my lawyer\n";
    }
}
