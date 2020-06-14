<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch09\batch03;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 09.10 */
        $boss = new NastyBoss();
        $boss->addEmployee(Employee::recruit("harry"));
        $boss->addEmployee(Employee::recruit("bob"));
        $boss->addEmployee(Employee::recruit("mary"));
        /* /Листинг 09.10 */
        $boss->projectFails();
        $boss->projectFails();
        $boss->projectFails();
    }
}
