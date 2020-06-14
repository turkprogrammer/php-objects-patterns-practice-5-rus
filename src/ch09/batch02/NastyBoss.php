<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch02;

/* Листинг 09.05 */
class NastyBoss
{
    private $employees = [];

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function projectFails()
    {
        if (count($this->employees)) {
            $emp = array_pop($this->employees);
            $emp->fire();
        }
    }
}
