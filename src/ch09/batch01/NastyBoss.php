<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch09\batch01;

/* Листинг 09.03 */

class NastyBoss
{
    private $employees = [];

    public function addEmployee(string $employeeName)
    {
        $this->employees[] = new Minion($employeeName);
    }

    public function projectFails()
    {
        if (count($this->employees) > 0) {
            $emp = array_pop($this->employees);
            $emp->fire();
        }
    }
}
